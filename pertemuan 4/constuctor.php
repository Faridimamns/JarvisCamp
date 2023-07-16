<?php

class Laptop{
    public $merk;
    public $processor;
    public $memori;

    public function __construct($merk, $processor, $memori)
    {
        $this -> merk = $merk;
        $this -> processor = $processor;
        $this -> memori = $memori;
    }
    
    public function desc(){
        return "merk laptop ini adalah $this->merk, dengan proci $this->processor, dan Ram $this->memori";
    }
}

$asus = new Laptop ("ASUS", "I5-7200u", "4GB");
echo $asus->desc();
?>