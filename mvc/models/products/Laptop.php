<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerProducts.php';

class Laptop extends ComputerProducts{
    private $pin;       // int
    
    public function __construct($productID, $model, $image, $price,$size, $weigh, $color, $numberOfProducts,
        $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $pin, $description) {
        parent::__construct($productID, $model, $image, $price,$size, $weigh, $color, $numberOfProducts, 
            $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $description);
        self::setPin($pin);
        
        $this->type = Type::LAP;
    }
    
    /**
     * @return mixed
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param mixed $battery
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
    }

}