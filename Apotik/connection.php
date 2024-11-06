<?php
// phpinfo();
try {
    $serverName = "ASUS"; 
    $database = "apotik";
    
    // DSN (Data Source Name) untuk koneksi PDO
    
    $dsn = "sqlsrv:Server=$serverName;Database=$database";
    // koneksi menggunakan PDO
    
    $conn = new PDO($dsn);
    // PDO agar melempar exception jika terjadi error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "koneksi";
    
} catch (PDOException $e) {
    echo "Koneksi Gagal.<br />";
    die("Error: " . $e->getMessage());
}
?>