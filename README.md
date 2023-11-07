# kriptografi8
 Tugas Kriptografi Affine Cipher

 # Affine Cipher

Affine Cipher adalah salah satu jenis cipher substitusi dalam kriptografi yang menggabungkan dua operasi matematika pada setiap karakter dalam teks terbuka (plaintext). Operasi tersebut adalah perkalian dan penambahan. Singkatnya, setiap karakter dalam pesan terbuka diubah menjadi karakter lain dalam pesan tersembunyi (ciphertext) menggunakan rumus matematika tertentu.

Ciri-ciri utama dari Affine Cipher:

1. **Rumus Enkripsi**: Setiap karakter dalam pesan terbuka dienkripsi dengan rumus matematika berikut: C = (a * P + b) mod m, di mana C adalah karakter terenkripsi, P adalah karakter asli dari pesan terbuka, a dan b adalah kunci enkripsi, dan m adalah panjang alfabet.

2. **Kunci Enkripsi**: Affine Cipher memiliki dua kunci enkripsi, yaitu 'a' dan 'b'. Kunci 'a' adalah angka bulat yang harus relatif prima dengan panjang alfabet (biasanya 26 untuk alfabet Inggris) agar enkripsi berfungsi dengan baik. Kunci 'b' adalah angka bulat yang menentukan pergeseran.

3. **Kekuatan Enkripsi**: Keamanan Affine Cipher sangat tergantung pada pemilihan kunci 'a' dan 'b'. Jika kunci-kunci ini dikenal oleh pihak yang tidak berwenang, maka pesan terenkripsi dapat dengan mudah didekripsi. Namun, jika kunci-kunci ini dijaga dengan baik, Affine Cipher dapat memberikan tingkat keamanan yang cukup dalam konteks penggunaan yang sederhana.

4. **Dekripsi**: Affine Cipher juga memungkinkan dekripsi pesan terenkripsi untuk mendapatkan kembali pesan terbuka asli. Dekripsi melibatkan invers dari operasi enkripsi dengan menggunakan kunci dekripsi yang sesuai.

5. **Kelemahan**: Kelemahan utama dari Affine Cipher adalah ketika kunci 'a' adalah bilangan bulat yang tidak relatif prima dengan panjang alfabet, sehingga sejumlah karakter tidak akan berubah selama enkripsi. Selain itu, karena karakter-karakter dalam alfabet terbuka memiliki properti statistik yang berbeda, pesan terenkripsi dapat memberikan petunjuk kepada penyerang.



## Mari mulai
### penjelasan program

# 1) Formulir

 Formulir Ini untuk Memasukan atau menambahkan data Nama, Alamat dan Password yang akan di simpan ke database.
 lalu akan di peroses dengan rumus affine cipher.

 # Proses.php
 ```<?php
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
```

  
## Screenshots

![ register](https://github.com/azizuldz/Kriptografi8/blob/main/Screenshots/form.PNG)


---------------------------------------------------------------
# 1) Database
######  :
  Database ini untuk menyimpan data yang telah di enkripsi dengan rumus affine cipher.
  lalu akan di peroses dengan rumus affine cipher.
  Pada kolom Password terdapat data yang telah di enkripsi dengan rumus affine cipher.
  Saya telah mencoba men Ecrypt plaintext Password = Jacksp@RROW dengan hasil nya(Wdnbpa@KKVJ) 
  menggunakan Slope(a) = 5 dan Intercept(b) = 3.

![ database](https://github.com/azizuldz/Kriptografi8/blob/main/Screenshots/db.PNG)




---------------------------------------------------------------
 ## Akurasi
    Mempastiakn bahwa data yang telah di enkripsi dengan rumus affine cipher dapat di dekripsi kembali.
    dengan menggunakan rumus affine cipher.
    Pada data abse nya nampak cocok dengan encoder onlien Affine cipher 

![ Affine](https://github.com/azizuldz/Kriptografi8/blob/main/Screenshots/affine.PNG)

---------------------------------------------------------------


