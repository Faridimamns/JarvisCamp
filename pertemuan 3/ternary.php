<?php 
$hari = 'sabtu';
$mood = ($hari == 'sabtu' || $hari == 'minggu')? 'full senyum' :'biasa aja';

echo 'hari ini saya' . $mood;
?>