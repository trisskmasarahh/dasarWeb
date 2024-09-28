<?php
// function perkenalan($nama , $salam="Assalamualaikum"){
//     echo $salam.",";
//     echo "Perkenalkan, nama saya ".$nama." <br>";
//     echo "Senang berenalan dengan anda <br>";  
// }
// perkenalan("Sukma", "Selamat Pagi");

// echo "<hr>";

// $saya = "Sarah";
// $ucapanSalam = "Selamat Pagi";

// perkenalan($saya);
function hitungUmur($thnLahir, $thnHariIni) {
    $umur = $thnHariIni - $thnLahir;
    return $umur;
}
function perkenalan($nama, $salam="Asalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Umur saya adalah ".hitungUmur(2004, 2024)." tahun";
}
perkenalan("Sukma");

// echo "<br>";
// echo "Umur saya adalah ".hitungUmur(2004, 2024)." tahun";
?>