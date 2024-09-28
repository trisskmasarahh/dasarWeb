<?php
function perkenalan($nama , $salam){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama." <br>";
    echo "Senang berenalan dengan anda <br>";  
}
perkenalan("Sukma", "Selamat Pagi");

echo "<hr>";

$saya = "Sarah";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);
?>