<?php
$umur;
if (isset($umur) && $umur  >= 18) {
    echo "Anda Sudah Dewasa";
}else{
    echo "Anda belum dewasa atau variable 'Umur' tidak ditemukan.";
}
echo "<br>";
$data = array("nama" => "Jane", "usia" => 25);

if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}

?>