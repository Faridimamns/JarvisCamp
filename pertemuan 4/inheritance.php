<?php

class Hero{
    public $name;
    public $att;
    public $hp;
    public function __construct($name, $attack, $hp)
    {
        $this->name = $name;    
        $this->att = $attack;
        $this->hp = $hp;
    }

    public function skill(){
        echo "$this->name menggunakan skill";
    }
}

class Ass extends Hero {
    public $mana; 
    public $ulti;

    public function __construct($name, $attack, $hp, $mana, $ulti)
    {
        parent::__construct($name, $attack, $hp);
        $this->mana = $mana;
        $this->ulti = $ulti;
    }
    public function skill()

    {
        echo "$this->name menggunakan skill";
    }

}

$Haya = new Hero("hayabusa", 200,200);
echo $Haya->name;
echo "<br />";
$Haya->skill();

?>