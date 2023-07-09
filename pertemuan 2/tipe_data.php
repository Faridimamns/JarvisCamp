<?php

// INT
$umur = "20";

// FLoat
$phi = 3.14;

// String
$nama = "Farid";

// bolean
$mahasiswa = true;

// array indexing
$siswa = ["farid", 20, true];

echo "nama saya". $siswa[0]. 
"umur saya". $siswa[1]. "saya laki laki". $siswa[2];

// array asosiatif
$mahasiswa = ["nama => Farid", "umur => 15", "ipk => 2.0"];
echo "nama saya $mahasiswa[nama], saya seorang mhsiswa dgn ipk $mahasiswa[ipk]";


?>