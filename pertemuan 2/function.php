<?php
function penjumlahan($nilai1, $nilai2)
{
    $hasil = $nilai1 + $nilai2;
    echo $hasil;
}

function perkalian($nilai1, $nilai2)
{
    return $nilai1 * $nilai2;
}



$jumlah1 = penjumlahan(2,2);
$jumlah2 = penjumlahan(2,3);


// kali hasil jumlah
echo perkalian($jumlah1,$jumlah2);
?>