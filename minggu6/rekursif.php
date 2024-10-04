<?php
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-" . $indeks . "<br>";

    // Panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);
// for ($i = 1; $i <= 25; $i++) {
//     echo "Perulangan ke-" . $i . "<br>";
// }
// // function tampilkanHaloDunia() {
//     echo "Halo dunia!<br>";
// }

// tampilkanHaloDunia();
// tampilkanHaloDunia();
?>