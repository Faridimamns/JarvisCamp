<?php

class kocheng{
    public $nama;
    public static $jumlah;

    public function __construct($nama)
    {
        self::$jumlah++;
        $this->nama = $nama;

    }

    public static function getjumlah(){
        echo "<br/> Jumlah Kucing yang ada :". self::$jumlah;
    }
}

$ireng = new kocheng("ireng");
echo $ireng->nama;
kocheng::getjumlah();

echo "<br />";

$areng = new kocheng("areng");
kocheng::getjumlah();

?>