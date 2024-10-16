<?php 
// Memeriksa apakah formulir telah dikirimkan (method POST)
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     // Mendapatkan nilai dari input formulir
//     $nama = $_POST["nama"];
//     $email = $_POST["email"];

//     // Membuat array untuk menyimpan pesan error
//     $errors = array();

//     // Fungsi untuk validasi nama
//     function validasiNama() {
//         global $nama, $errors;
//         if (empty($nama)) {
//             $errors[] = "Nama harus diisi.";
//         }
//     }

//     // Fungsi untuk validasi email
//     function validasiEmail() {
//         global $email, $errors;
//         if (empty($email)) {
//             $errors[] = "Email harus diisi.";
//         } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $errors[] = "Format email tidak valid.";
//         }
//     }

//     // Memanggil fungsi validasi
//     validasiNama();
//     validasiEmail();

//     // Jika ada kesalahan validasi
//     if (!empty($errors)) {
//         // Menampilkan pesan error
//         foreach ($errors as $error) {
//             echo $error . "<br>";
//         }
//     } else {
//         // Jika semua validasi berhasil, lanjutkan proses
//         // Misalnya, simpan data ke database atau kirim email
//         echo "Data berhasil dikirim: Nama = $nama, Email = $email";
//     }
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi server-side untuk password minimal 8 karakter
    if (strlen($password) < 8) {
        echo "Error: Password harus minimal 8 karakter.";
        exit;
    }

    // Proses lebih lanjut jika validasi berhasil
    echo "Nama: $nama, Email: $email, Password: Valid";
}

?> 