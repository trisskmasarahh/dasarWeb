<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_obat = $_POST['Nama_obat'];
    $jumlah = $_POST['Jumlah'];

    $stmt = $pdo->prepare("INSERT INTO OBAT (Nama_obat, Jumlah) VALUES ($Nama_obat, $Jumlah)");
    $stmt->bindParam(':Nama_obat', $nama_obat);
    $stmt->bindParam(':Jumlah', $jumlah);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>
