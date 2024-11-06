<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ID_obat'];
    $nama_obat = $_POST['Nama_obat'];
    $jumlah = $_POST['Jumlah'];

    $stmt = $conn->prepare("UPDATE OBAT SET Nama_obat = :Nama_obat, Jumlah = :Jumlah WHERE ID_obat = :id");
    $stmt->bindParam(':Nama_obat', $nama_obat);
    $stmt->bindParam(':Jumlah', $jumlah);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>