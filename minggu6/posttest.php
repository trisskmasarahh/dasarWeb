<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<style>
#panel, #flip {
    padding: 8px;
    text-align: center;
    background-color: salmon;
    border: solid 1px #c3c3c3;
}
#panel {
    padding: 20px;
    display: none;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}
table, th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}
th {
    background-color: white;
}
</style>
</head>

<body>

<?php
// penggunaan array untuk data mahasiswa
$students = array(
    array("Ica", 15, "10A", "Sawojajar"),
    array("Dewita", 16, "10B", "Magetan"),
    array("Diana", 15, "10A", "Lawang"),
    array("Kamila", 17, "10A", "Tulungagong")
);

//untuk mennetukan rat-rata
$totalAge = 0;
foreach ($students as $student) {
    $totalAge += $student[1];
}
$averageAge = $totalAge / count($students);
?>
<h2>Data Siswa</h2>
<div id="flip">Click to show database</div>
<div id="panel">
    
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
        // table
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>".$student[0]."</td>";
            echo "<td>".$student[1]."</td>";
            echo "<td>".$student[2]."</td>";
            echo "<td>".$student[3]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <p style="font-weight: bold;" >Rata-rata Umur Siswa: <?php echo number_format($averageAge, 2); ?> tahuh</p>
    
</div>
</body>
</html>
