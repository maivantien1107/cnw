<?php
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
require_once ROOT . DS . 'application' . DS . 'products' . DS . 'LaptopApplication.php';

class FilterApplication extends LaptopApplication
{
   public function getAll()
   {   
    $result=array();
    $tmp=0;
    $listProducts=parent::getAll();
       if (isset($_GET['nha-san-xuat'])){
        $supplier=addslashes($_GET['nha-san-xuat']);
        if($supplier=='all'){
            $result=$listProducts;
            $tmp=1;
        }
        else {
            $supplier=explode(',',$supplier);
            foreach($supplier as $supplier1){
                foreach($listProducts as $product){
                    if(strpos($product->getSupplier(),$supplier1) !== false){  

                        $result[]=$product;
                        $tmp++;
                    }
                }
        }
    }

       }
       if (isset($_GET['muc-gia'])){
        $price=intval(addslashes($_GET['muc-gia']));
            switch($price){
                case 1: 
                    foreach($listProducts as $product){
                        if ($product->getPrice()< 10000000){
                            $result[]=$product;
                            $tmp++;
                        }
                    }
                case 2: 
                    foreach($listProducts as $product){
                        if( $product->getPrice()>=10000000 && $product->getPrice()<15000000){
                            $result[]=$product;
                            $tmp++;
                        }
                    }
                case 3: 
                    foreach($listProducts as $product){
                        if($product->getPrice()>=15000000 && $product->getPrice()<20000000){
                            $result[]=$product;
                            $tmp++;
                        }
                    }
                case 4: 
                    foreach($listProducts as $product){
                        if ($product->getPrice()>=20000000 && $product->getPrice()<25000000){
                            $result[]=$product;
                            $tmp++;
                        }
                    }
                case 5:
                    foreach($listProducts as $product){
                        if ($product->getPrice()>=25000000){
                            $result[]=$product;
                            $tmp++;
                        }
                    }
            }
                
           
       }
       if (isset($_GET['man-hinh'])){
        $screem1=intval(addslashes($_GET['man-hinh']));
        switch($screem1) {
            case 13:
                foreach($listProducts as $product){
                    $scr=$product->getScreen();
                    $src=explode(' ', $scr);
                    $tmp=intval($src[0]);
                    if ($tmp < 14){
                        $result[]=$product;
                        $tmp++;

                    }
                }
            case 14: 
                foreach($listProducts as $product){
                    $scr=$product->getScreen();
                    $src=explode(' ', $scr);
                    $tmp=intval($src[0]);
                    if ($tmp < 15 && $tmp>=14){
                        $result[]=$product;
                        $tmp++;

                    }
                }
            case 15:
                foreach($listProducts as $product){
                    $scr=$product->getScreen();
                    $src=explode(' ', $scr);
                    $tmp=intval($src[0]);
                    if ($tmp >=15){
                        $result[]=$product;
                        $tmp++;

                    }
                }

        }
       }
       if (isset($_GET['CPU'])){
        $cpu=addslashes($_GET['CPU']);
        foreach($listProducts as $product){
            if (strpos($product->getCpu(),$cpu) !== false){
                $result[]=$product;
                $tmp++;
            }
        }
       }
       if (isset($_GET['RAM'])){
        $ram=addslashes($_GET['RAM']);
        foreach($listProducts as $product){
           
            if (strpos($product->getRam(),$ram) !== false){
                $result[]=$product;
                $tmp++;

            }
        }
       }
       if (isset($_GET['o-cung'])){
        $memory=addslashes($_GET['o-cung']); 
        foreach($listProducts as $product){
            if (strpos($product->getMemory(),$memory) !== false){
                $result[]=$product;
                $tmp++;
            }
        }

       }
       if (isset($_GET['card-do-hoa'])){
        $card_tmp=addslashes($_GET['card-do-hoa']);
        $card=explode(' ', $card_tmp);
        foreach($listProducts as $product){
            $card1=$product->getCard();
            $card2=explode(' ',$card1);
            if (strpos($card1[0],$card2[0]) !== false){
                $result=$product;
                $tmp++;
            }
        }
       }
       if ($tmp>0){
        $listProducts=$result;
        return $listProducts;
       }
       else {
        return null;
       }
   }
   public function getUrl(){
    $data=array();
    if (isset($_GET['nha-san-xuat'])){
        $data['nha-san-xuat']=addslashes($_GET['nha-san-xuat']);
    }
    if (isset($_GET['muc-gia'])){
        $data['muc-gia']=addslashes($_GET['muc-gia']); 
    }
    if (isset($_GET['man-hinh'])){
        $data['man-hinh']=addslashes($_GET['man-hinh']);
    }
    if (isset($_GET['CPU'])){
        $data['CPU']=addslashes($_GET['CPU']);

    }
    if (isset($_GET['RAM'])){
        $data['RAM']=addslashes($_GET['RAM']);
    }
    if (isset($_GET['o-cung'])){
        $data['o-cung']=addslashes($_GET['o-cung']); 
    }
    if (isset($_GET['card-do-hoa'])){
        $data['card-do-hoa']=addslashes($_GET['card-do-hoa']);
    }
    return $data;
   }
   //hàm xử lý href của lefl sidebar_products
   //ex $label=nha-san-xuat
   public function getHref($label,$supplier){
    $data_url=self::getUrl();
    $result='';
    $tmp_url='';
    foreach($data_url as $key => $value){
        if ($key==$label){
            $tmp_url=$value;}
        else {
             $result=$result."".$key."=".$value."&";
            }
    }
    $result=$result."".$label."=";
    if (strpos($tmp_url,$supplier) !== false){
        if (strpos($tmp_url,$supplier)==0){
            $tmp_url= str_replace($supplier.",",'',$tmp_url);
            $tmp_url= str_replace($supplier,'',$tmp_url);}
        else{
                                                     
            $tmp_url= str_replace(",".$supplier,'',$tmp_url);}
        if ($tmp_url==''){ $tmp_url='all';}
        $result=$result."". $tmp_url;
     }
    else {
        if ($tmp_url=='all'){
            $result=$result."". $supplier;
        }
        else{
            $result=$result."". $tmp_url.",".$supplier;}
    }
    return $result;
   }
}
