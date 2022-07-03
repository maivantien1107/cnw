<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerProducts.php';

class Laptop extends ComputerProducts{
    private $pin;       // int
    
    public function __construct($productID, $model, $image, $price,$size, $weigh, $color, $number,
        $supplier, $cpu, $ram, $memory, $screen, $card, $os, $pin, $description) {
        parent::__construct($productID, $model, $image, $price,$size, $weigh, $color, $number, 
            $supplier, $cpu, $ram, $memory, $screen, $card, $os, $description);
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