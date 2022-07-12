<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerProducts.php';

class Laptop extends ComputerProducts{
    private $pin;       // int
    
    public function __construct($productID, $model, $image, $price,$size, $weigh, $color, $number, $supplier, $des,$feature,$disable,$overview,$des1,$des2,$des3,$des4,$des5,$des6,$des7,$des8,$image1,$image2,$image3, $cpu, $ram, $memory, $screen, $card, $os, $pin) {
        parent::__construct($productID, $model, $image, $price,$size, $weigh, $color, $number, $supplier, $des,$feature,$disable,$overview,$des1,$des2,$des3,$des4,$des5,$des6,$des7,$des8,$image1,$image2,$image3, $cpu, $ram, $memory, $screen, $card, $os);
        self::setPin($pin);
        
        $this->type = Type::LAP;
    }
    
    public function getPin()
    {
        return $this->pin;
    }

    public function setPin($pin)
    {
        $this->pin = $pin;
    }

}