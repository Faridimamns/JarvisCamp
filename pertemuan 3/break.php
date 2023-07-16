<?php
$hewan = ["Kucing", "Anjing", "Kambing", "Ayam", "Sapi"];
for($i = 0; $i < count($hewan); $i++){
    if($hewan[$i] == "Sapi"){
        echo 'Ketemu Sapi!';
        break;
    }echo "Bukan Sapi<br>";
}