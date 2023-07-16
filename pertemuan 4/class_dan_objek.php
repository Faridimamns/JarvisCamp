<?php

class Mobil {

    // deklarasi
    private $merk;
    private $warna;

    // setter
    public function setMerk($merk){
        $this->merk = "Mobil $merk";
    }

    // getter
    public function getMerk(){
        echo $this->merk;
    }

    // setter
    public function setWarna($warna){
        $this->warna = "Berwarna $warna";
    }

    // getter
    public function getWarna(){
        echo $this->warna;
    }

    public function hidupkanMesin(){
        echo "mesin di hidupkan";
    }

    public function jalan(){
        echo "mobil jalan";
    }
}

$toyota = new Mobil();
$toyota -> setMerk("toyota");
$toyota -> setWarna("Hitam");
$toyota -> getMerk();
$toyota -> getWarna();
echo "<br />";
$toyota -> hidupkanMesin();
echo "<br />";
$toyota -> jalan();
?>