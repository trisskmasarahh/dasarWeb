<?php
function perkenalan($nama, $salam ="Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

// Memanggil fungsi dengan argumen
perkenalan("Hamdana", "Hallo");

echo "<hr>";

// Mendefinisikan variabel
$saya = "Elok";
$ucapanSalam = "Selamat pagi";

// Memanggil fungsi dengan variabel
perkenalan($saya);
// function perkenalan() {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Sarah<br>"; 
//     echo "Senang berkenalan dengan Anda<br>";
// }

// Memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();
?>