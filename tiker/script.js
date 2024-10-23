// Mengontrol form registrasi dan login
    document.getElementById('registerLink').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerSection').style.display = 'block';
});

document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Menghentikan pengiriman form

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    // Simulasi login (nanti ini bisa dihubungkan ke server PHP)
    // Jika login berhasil, tampilkan form pembelian tiket
    if (username && password) {
        alert("Login berhasil!");
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('ticketSection').style.display = 'block';
    } else {
        alert("Username atau password salah!");
    }
});

// Mengontrol transisi dari pembelian tiket ke pembayaran
document.getElementById('nextToPayment').addEventListener('click', function () {
    let jumlahTiketDewasa = document.getElementById('ticketQtyDewasa').value;
    let jumlahTiketAnak = document.getElementById('ticketQtyAnak').value;

    if ((jumlahTiketDewasa > 0) || (jumlahTiketAnak > 0)) {
        alert("Lanjutkan ke pembayaran untuk tiket yang dipilih.");
        document.getElementById('ticketSection').style.display = 'none';
        document.getElementById('paymentSection').style.display = 'block';

        // Menyimpan total harga dalam form untuk dikirim ke server
        document.getElementById('hiddenTotalPrice').value = totalHarga;
        
        // Menampilkan total harga di bagian metode pembayaran
        document.getElementById('displayTotalPrice').innerText = totalHarga;
    } else {
        alert("Mohon pilih jumlah tiket dewasa atau anak-anak!");
    }
});

// Menghitung total harga berdasarkan input
document.getElementById('ticketForm').addEventListener('input', calculateTotal);

function calculateTotal() {
    const hargaDewasa = 10000; // Harga tiket dewasa
    const hargaAnak = 5000; // Harga tiket anak-anak

    let jumlahTiketDewasa = parseInt(document.getElementById('ticketQtyDewasa').value) || 0;
    let jumlahTiketAnak = parseInt(document.getElementById('ticketQtyAnak').value) || 0;

    // Menghitung total harga
    let totalHarga = (jumlahTiketDewasa * hargaDewasa) + (jumlahTiketAnak * hargaAnak);

    // Menampilkan total harga di halaman
    document.getElementById('totalPrice').innerText = totalHarga;
    document.getElementById('hiddenTotalPrice').value = totalHarga; // Untuk form pembayaran
}
