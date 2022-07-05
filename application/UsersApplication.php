<?php

require_once ROOT . DS . 'database' . DS . 'MySqlConnect.php';
require_once ROOT . DS . 'application' . DS . 'TypeProductsApplication.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Users.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Bill.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Products.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . "Type.php";

class UsersApplication extends MySqlConnect {
    public function insert($users) {
        
        $username = $users->getUsername();
        $password = $users->getPassword();
        $address = $users->getAddress();
        $telephone = $users->getTelephone();

        $query = "insert into users(user_name, user_pass, address, telephone)
                  values('$username', '$password', '$address', '$telephone')
                  ";

        parent::addQuerry($query);
        parent::updateQuery();

        // when create guest, one cart will create
        $query = "insert into cart(user_name)
                    values ('$username')
                 ";
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * The method support delete row in database
     * @param String $username
     */
    public function delete($username){
        // next, delete row with user_name in rate table
        $query = "delete from rate
                  where user_name = '" . $username . "'";
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with user_name in cart_products table
        $cart_id = self::getCartID($username);
        $query = "delete from cart_products
                  where cart_id = " . $cart_id;
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with user_name in cart table
        $query = "delete from cart
                  where user_name = '" . $username . "'";
        parent::addQuerry($query);
        parent::updateQuery();

        // next, delete row with user_name in users table
        $query = "delete from users
                  where user_name = '" . $username . "'";
        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Return all product in products table
     * @return array
     */
    public function getAll(){
        $listUsers= array();
        $query = "select * from users";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $username = $row["user_name"];
            $password = $row["user_pass"];
            $address = $row["address"];
            $telephone = $row["telephone"];

            $users = new Users($username, $password, $address, $telephone);

            array_push($listUsers, $users);
        }

        return $listUsers;
    }

    /**
     * @param String $username
     * @return Users
     */
    public function get($username){
        $query = "select * from users
                    where user_name='" . $username . "'";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        if($row = mysqli_fetch_array($result)){
            $username = $row["user_name"];
            $password = $row["user_pass"];
            $address = $row["address"];
            $telephone = $row["telephone"];

            $users = new Users($username, $password, $address, $telephone);
            return $users;
        }

        return null;
    }

   
    public function update($guest) {

        $username = $guest->getUsername();
        $password = $guest->getPassword();
        $address = $guest->getAddress();
        $telephone = $guest->getTelephone();

        $query = "update users
                  set user_pass = '$password',
                      address = '$address',
                      telephone = '$telephone'
                  where user_name = '$username'
                  ";

        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Method get cart_id corresponding with username
     * @param String $username
     * @return int
     */
    public function getCartID($username){
        if(self::get($username) == null){
            return -1;
        }

        $query = "select cart_id from cart
	               where user_name = '" . $username . "'";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        $row = mysqli_fetch_array($result);
        $cart_id = $row["cart_id"];

        return $cart_id;
    }

    /**
     * Method get all products of guest
     * @param String $username
     * @return array
     */
    public function getListCartProducts($username){
        $listCartProducts = array();

        $cart_id = self::getCartID($username);
        $query = "select * from cart_products
                    where cart_id =" . $cart_id;

        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["product_id"];

            if(TypeProductsApplication::checkType($product_id) == Type::LAP){
                $service = new LaptopApplication();
                $laptop = $service->get($product_id);
                array_push($listCartProducts, $laptop);
            } else if (TypeProductsApplication::checkType($product_id) == Type::PC){
                $service = new PCApplication();
                $pc = $service->get($product_id);
                array_push($listCartProducts, $pc);
            } else if(TypeProductsApplication::checkType($product_id) == Type::MOUSE){
                $service = new MouseProductsApplication();
                $mouse = $service->get($product_id);
                array_push($listCartProducts, $mouse);
            } else {
                echo "hello";
                array_push($listCartProducts, null);
            }

        }

        return $listCartProducts;
    }

    /**
     * Method get all products of guest
     * @param String $username
     * @param Products $product
     * @return array
     */
    public function insertProduct($username, $product, $quantity){
        $cart_id = self::getCartID($username);
        $product_id = $product->getProductID();
        $query = "insert into cart_products(cart_id, product_id, quantity)
                    value($cart_id, $product_id, $quantity)
                  ";

        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
     * Method help remove product from cart
     * @param int $product_id
     */
    public function removeProduct($product_id, $username){
        $cart_id = self::getCartID($username);
        $query = "delete from cart_products where product_id = $product_id and cart_id = $cart_id";

        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
    * Check account is exists
    * @param String $username
    * @param String $password
    * @return bool
    */
    public function checkAccount($username, $password){
        $query = "select * from users where user_name = '$username' and user_pass = '$password'";
        parent::addQuerry($query);

        $result = parent::executeQuery();
        if(mysqli_fetch_array($result)){
            return True;
        } else {
            return False;
        }
    }

    /**
    * Get all product in bill
    * @param String $username
    * @return array
    */
    public function getListProductsBill($username){
        $listProductsBill = array();

        $query = "select * from bill where user_name = '$username'";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["product_id"];
            $bill_id = $row["bill_id"];
            $date_bill = $row["date_bill"];
            $total_money = $row["total_money"];
            $quantity = $row["quantity"];
            $status = $row["bill_status"];
            $bill_id = $row["bill_id"];

            $bill = new Bill($product_id, $username, $date_bill, $total_money, $quantity);
            $bill->setStatus($status);
            $bill->setBillID($bill_id);

            array_push($listProductsBill, $bill);
        }

        return $listProductsBill;
    }

    /**
    * Get all product in bill
    * @return array
    */
    public function getAllListProductsBill(){
        $listProductsBill = array();

        $query = "select * from bill";
        parent::addQuerry($query);
        $result = parent::executeQuery();

        while($row = mysqli_fetch_array($result)){
            $username = $row["user_name"];
            $product_id = $row["product_id"];
            $bill_id = $row["bill_id"];
            $date_bill = $row["date_bill"];
            $total_money = $row["total_money"];
            $quantity = $row["quantity"];
            $status = $row["bill_status"];
            $bill_id = $row["bill_id"];

            $bill = new Bill($product_id, $username, $date_bill, $total_money, $quantity);
            $bill->setStatus($status);
            $bill->setBillID($bill_id);

            array_push($listProductsBill, $bill);
        }

        return $listProductsBill;
    }

    /**
    * Insert product to bill
    * @param Bil $bill
    */
    public function submitBill($bill){
        $product_id = $bill->getProductID();
        $username = $bill->getUsername();
        $date_bill = $bill->getDateBill();
        $total_money = $bill->getTotalMoney();
        $quantity = $bill->getQuantity();
        $status = $bill->getStatus();

        $query = "insert into bill(product_id, user_name, date_bill, total_money, quantity, bill_status)
                  value($product_id, '$username', '$date_bill', $total_money, $quantity, $status)
                  ";

        parent::addQuerry($query);
        parent::updateQuery();
    }

    /**
    * Get bill from bill id
    * @param int $bill_id
    */
    public function getBill($bill_id){
          $query = "select * from bill where bill_id = $bill_id";

          parent::addQuerry($query);
          $result = parent::executeQuery();

          if($row = mysqli_fetch_array($result)){
            $username = $row["user_name"];
            $product_id = $row["product_id"];
            $bill_id = $row["bill_id"];
            $date_bill = $row["date_bill"];
            $total_money = $row["total_money"];
            $quantity = $row["quantity"];
            $status = $row["bill_status"];
            $bill_id = $row["bill_id"];

            $bill = new Bill($product_id, $username, $date_bill, $total_money, $quantity);
            $bill->setStatus($status);
            $bill->setBillID($bill_id);

            return $bill;
        }
    }

    /**
    * Update status bill from bill id and status
    * @param int $bill_id
    */
    public function updateStatusBill($bill_id, $status){
        $query = "update bill set bill_status = $status where bill_id = $bill_id";

        parent::addQuerry($query);
        parent::updateQuery();
    }
}

