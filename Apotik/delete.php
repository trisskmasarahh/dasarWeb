<?php
include 'connection.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM OBAT WHERE ID_obat = :id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>