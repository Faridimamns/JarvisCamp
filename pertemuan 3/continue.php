<?php 

$hewan = ["Kucing", "Anjing", "Kambing", "Ayam", "Sapi","Gajah","Domba", "Singa"];
for($i = 0; $i < count($hewan); $i++){
    if($hewan[$i] == "Sapi" || $hewan[$i] == "Gajah"){
        echo 'Ketemu!<br>';
        continue;
    }echo "Bukan Sapi<br>";
}