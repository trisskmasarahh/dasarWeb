<?php
require 'connection.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM OBAT WHERE ID_obat = :id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>
