<?php

class Kendaraan{
    public $roda;
    public $merk;


    public function __construct($roda, $merk)
    {
        $this -> roda = $roda;
        $this -> merk = $merk;
    }

    public function jumlahRoda(){
        echo "Kendaraan ini memiliki jumlah roda $this->roda";
    }
}

class motor extends Kendaraan {
    public $penumpang;

    public function __construct($roda, $merk, $penumpang)
    {
        parent::__construct($roda, $merk);
        $this -> penumpang = $penumpang;

    }

    public function maxPenumpang(){
        echo "Maksimal Penumpang nya adalah $this->penumpang";
    }

}



$legenda = new motor(2,"legenda",2);
echo $legenda->merk;
echo "<br />";
$legenda->jumlahRoda();
echo "<br />";
$legenda->maxPenumpang();
?>