<?php
require('database.php');

// Ambil data nasabah dari database
$sql = "SELECT nama, alamat, password FROM affine_cipher";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Nasabah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0074a2;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }

        a.button:hover {
            background-color: #005b8c;
        }
    </style>
</head>
<body>
    <h2>Data Nasabah</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Password</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nama = $row["nama"];
                $alamat = $row["alamat"];
                $password = str_repeat('*', strlen($row["password"])); // Ganti password dengan bintang-bintang

                echo "<tr>";
                echo "<td>$nama</td>";
                echo "<td>$alamat</td>";
                echo "<td>$password</td>";
                echo "</tr>";
            }
        } else {
            echo "Tidak ada data nasabah.";
        }
        ?>
    </table>

    <a class="button" href="formulir.php">Kembali ke Formulir</a>
</body>
</html>
