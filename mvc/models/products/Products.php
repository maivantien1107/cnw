<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';

class Products {
    private $productID;         // int
    private $model;             // String
    private $image;             // String : path of image
    private $price;             //double
    private $size;                   // string
    private $weigh;             // double
    private $color;             // String
    private $number;  // int
    private $supplier;          // String
    private $des;       // String
    private $disable;           // 0 or 1, 0 : no disable, 1 : disable

    public $type = Type::NONE;

    public function __construct($productID, $model, $image, $price,$size, $weigh, $color, $number, $supplier, $des) {
        self::setDisable(0);  // new products is no disable
        self::setProductID($productID);
        self::setModel($model);
        self::setImage($image);
        self::setPrice($price);
        self::setSize($size);
        self::setWeigh($weigh);
        self::setColor($color);
        self::setNumber($number);
        self::setSupplier($supplier);
        self::setDes($des);
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

   
    public function getPrice()
    {
        return $this->price;
    }
    public function getSize()
    {
        return $this->size;
    }

    public function getWeigh()
    {
        return $this->weigh;
    }

    
    public function getColor()
    {
        return $this->color;
    }

   
    public function getNumber()
    {
        return $this->number;
    }

   
    public function getSupplier()
    {
        return $this->supplier;
    }

    
    public function getDisable()
    {
        return $this->disable;
    }

    
    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

   
    public function setModel($model)
    {
        $this->model = $model;
    }

    
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
   
    public function setWeigh($weigh)
    {
        $this->weigh = $weigh;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    
    public function setNumber($number)
    {
        $this->number = $number;
    }

   
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

   
    public function getDes()
    {
        return $this->des;
    }

    
    public function setDes($des)
    {
        $this->desc = $des;
    }

    
    public function setDisable($disable)
    {
        $this->disable = $disable;
    }
}
