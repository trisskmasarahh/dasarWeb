<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan $a + $b = $hasilTambah<br>";
echo "Hasil pengurangan $a - $b = $hasilKurang<br>";
echo "Hasil perkalian $a * $b = $hasilKali<br>";
echo "Hasil pembagian $a / $b = $hasilBagi<br>";
echo "Sisa bagi $a % $b = $sisaBagi<br>";
echo "Hasil pemangkatan $a ^ $b = $pangkat<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil penyamaan $a == $b adalah $hasilSama <br>";
echo "Hasil penyamaan $a != $b adalah $hasilTidakSama <br>";
echo "Hasil penyamaan $a < $b adalah $hasilLebihKecil <br>";
echo "Hasil penyamaan $a > $b adalah $hasilLebihBesar <br>";
echo "Hasil penyamaan $a <= $b adalah $hasilLebihKecilSama <br>";
echo "Hasil penyamaan $a >= $b adalah $hasilLebihBesarSama <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil persamaa $a && $b adalah $hasilAnd <br>";
echo "Hasil persamaan $a || $b adalah $hasilOr <br>";
echo "Hasil persamaan !$a adalah $hasilNotA <br>";
echo "Hasil persamaan !$b adalah $hasilNotB <br><br>";

// $a += $b;
// $a -= $b;
// $a *= $b;
// $a /= $b;
// $a %= $b;

echo  $a += $b;
echo "<br>";
echo $a -= $b;
echo "<br>";
echo $a *= $b;
echo "<br>";
echo $a /= $b;
echo "<br>";
echo $a %= $b;
echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil persamaan $a === $b adalah $hasilIdentik <br>";
echo "Hasil persamaan $a !== $b adalah $hasilTidakIdentik <br><br>";

$kursi = 45;
$diTempati = $kursi - 28;
$prosentase = $diTempati / $kursi * 100;

echo "Persentase kursi yang di tempati: $prosentase% <br>";
?>