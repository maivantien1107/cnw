<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerProducts.php';

class PC extends ComputerProducts {
    private $case;  // string

    public function __construct($productID, $model, $image, $price,$size, $weigh, $color, $number, $supplier, 
        $cpu, $ram, $memory, $screen, $card,  $os, $case, $description) {
        parent::__construct($productID, $model, $image, $price,$size, $weigh, $color, $number, 
            $supplier, $cpu, $ram, $memory, $screen, $card, $os, $description);
        self::setCase($case);
        
        $this->type = Type::PC;
    }
    
    public function getCase()
    {
        return $this->case;
    }

    public function setCase($case)
    {
        $this->case = $case;
    }

}
