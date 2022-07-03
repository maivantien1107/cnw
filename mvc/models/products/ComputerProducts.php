<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Products.php';

class ComputerProducts extends Products{
    private $cpu;               // String
    private $ram;               // String
    private $memory;            // String
    private $screen;            // String
    private $card;              // String
    private $os;                // String   

    public function __construct($productID, $model, $image, $price,$size, $weigh, $color, $number, 
        $supplier, $cpu, $ram,$memory, $screen, $card, $os, $description) {
        parent::__construct($productID, $model, $image, $price, $size,$weigh, $color, $number, $supplier, $description);
        self::setCpu($cpu);
        self::setRam($ram);
        self::setMemory($memory);
        self::setScreen($screen);
        self::setCard($card);
        self::setOs($os);
    }
    
    
    public function getCpu()
    {
        return $this->cpu;
    }

    public function getRam()
    {
        return $this->ram;
    }

   
    public function getMemory()
    {
        return $this->memory;
    }

    public function getScreen()
    {
        return $this->screen;
    }

  
    public function getCard()
    {
        return $this->card;
    }
    public function getOs()
    {
        return $this->os;
    }

    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    public function setScreen($screen)
    {
        $this->screen = $screen;
    }

    public function setCard($card)
    {
        $this->card = $card;
    }

    public function setOs($os)
    {
        $this->os = $os;
    }
}