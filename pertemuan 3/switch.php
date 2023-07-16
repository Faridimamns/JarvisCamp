<?php
$hari = 'sabtu';
$mood;
switch($hari){
    case 'senin':
        $mood = 'senin | stress';
        break;
    case 'selasa':
        $mood = 'sedikit stress';
        break;
    case 'rabu':
        $mood = 'udah nggak terlalu stress';
        break;
    case 'kamis':
        $mood = 'sebel';
        break;
    case 'jumat':
        $mood = 'senyum';
        break;
    case 'sabtu':
    case 'minggu':
        $mood = 'full senyum';
            break;
    default:
        $mood = 'biasa aja';
            break;
}

echo "hari ini saya" . $mood;
?>