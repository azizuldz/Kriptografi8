<?php
require('database.php');
require('affine_cipher.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data nasabah dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];

    // Lakukan enkripsi pada password menggunakan fungsi affineEncrypt
    $a = 5;
    $b = 3;
    $encryptedPassword = affineEncrypt($password, $a, $b);

    // Simpan data nasabah ke database
    $sql = "INSERT INTO affine_cipher (nama, alamat, password) VALUES ('$nama', '$alamat', '$encryptedPassword')";

    if ($conn->query($sql) === TRUE) {
        // Jika data berhasil disimpan, arahkan pengguna ke halaman tampilan
        header('Location: tampilan.php');
        exit(); // Pastikan untuk menghentikan eksekusi setelah pengalihan
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi database
    $conn->close();
}
?>
