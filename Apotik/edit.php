<?php
include 'connection.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM OBAT WHERE id_obat = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$obat = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$obat) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Obat</title>
    <link rel="stylesheet" href="style.css"> <!-- Your CSS file -->
</head>
<body>

    <h2>Edit Obat</h2>

    <form action="update.php" method="post">
        <input type="hidden" name="ID_obat" value="<?= $obat['ID_obat'] ?>">

        <label>Nama Obat:</label><br>
        <input type="text" name="Nama_obat" value="<?= $obat['Nama_obat'] ?>" required><br>

        <label>Jumlah:</label><br>
        <input type="number" name="Jumlah" value="<?= $obat['Jumlah'] ?>" required><br>

        <button type="submit">Update</button>
    </form>

    <a href="index.php" class="back-button">Kembali ke Daftar Obat</a>

</body>
</html>
