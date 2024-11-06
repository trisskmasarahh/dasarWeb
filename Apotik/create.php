<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Nama_obat = $_POST['Nama_obat'];
    $Jumlah = $_POST['Jumlah'];

    // Persiapan query untuk memasukkan data
    $stmt = $conn->prepare("INSERT INTO OBAT (Nama_obat, Jumlah) VALUES (:Nama_obat, :Jumlah)");
    $stmt->bindParam(':Nama_obat', $Nama_obat);
    $stmt->bindParam(':Jumlah', $Jumlah);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, kembali ke halaman utama
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>
