<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD Apotik</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Tambah Obat Baru</h2>
    <form action="create.php" method="post">
        <label>Nama Obat:</label><br>
        <input type="text" name="Nama_obat" required><br>
        <label>Jumlah:</label><br>
        <input type="number" name="Jumlah" required><br>
        <button type="submit">Tambah</button>
    </form>
    <?php
    include 'connection.php';

    // Mengambil semua data obat
    $stmt = $conn->query("SELECT * FROM OBAT");
    $obats = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <h1>Daftar Obat</h1>
    <table border="1">
        <tr>
            <th>ID Obat</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($obats as $obat): ?>
            <tr>
                <td><?= $obat['ID_obat'] ?></td>
                <td><?= $obat['Nama_obat'] ?></td>
                <td><?= $obat['Jumlah'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $obat['ID_obat'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $obat['ID_obat'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
