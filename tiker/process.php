<?php
// File untuk menyimpan data pengguna terdaftar
$userFile = 'users.txt';

// Fungsi untuk menyimpan user baru ke file
function saveUser($username, $password) {
    global $userFile;
    $userData = $username . "," . $password . "\n";
    file_put_contents($userFile, $userData, FILE_APPEND | LOCK_EX);
}

// Fungsi untuk memeriksa login dari file
function checkLogin($username, $password) {
    global $userFile;
    if (file_exists($userFile)) {
        $users = file($userFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($users as $user) {
            list($savedUsername, $savedPassword) = explode(",", $user);
            if ($savedUsername === $username && $savedPassword === $password) {
                return true;
            }
        }
    }
    return false;
}

// Fungsi untuk memeriksa apakah username sudah digunakan
function usernameExists($username) {
    global $userFile;
    if (file_exists($userFile)) {
        $users = file($userFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($users as $user) {
            list($savedUsername, $savedPassword) = explode(",", $user);
            if ($savedUsername === $username) {
                return true;
            }
        }
    }
    return false;
}
// Proses registrasi
if (isset($_POST['register'])) {
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    if (!usernameExists($newUsername)) {
        saveUser($newUsername, $newPassword);
        echo "Registrasi berhasil! Silakan login.";
    } else {
        echo "Username sudah digunakan. Silakan coba username lain.";
    }
}
// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (checkLogin($username, $password)) {
        echo "Login berhasil! Selamat datang, " . $username;
        //  menampilkan form pembelian tiket
    } else {
        echo "Login gagal! Username atau password salah.";
    }
}
// Proses pembelian tiket
if (isset($_POST['ticketType']) && isset($_POST['ticketQty'])) {
    $ticketType = $_POST['ticketType'];
    $ticketQty = $_POST['ticketQty'];
    echo "Anda membeli " . $ticketQty . " tiket untuk kategori " . $ticketType;
}
// Proses pembayaran tiket
if (isset($_POST['paymentMethod']) && isset($_POST['paymentDetails'])) {
    $paymentMethod = $_POST['paymentMethod'];
    $paymentDetails = $_POST['paymentDetails'];
    $totalPrice = $_POST['totalPrice']; // Jika Anda ingin menambahkan total harga
    
    // Tampilkan alert menggunakan echo dengan JavaScript
    echo "<script>alert('Pembayaran berhasil menggunakan metode " . $paymentMethod . ". Detail: " . $paymentDetails . ". Total: Rp. " . $totalPrice . "');</script>";
}

?>
