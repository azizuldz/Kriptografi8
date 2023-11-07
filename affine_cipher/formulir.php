<!DOCTYPE html>
<html>
<head>
    <title>Formulir Data Nasabah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0074a2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #005b8c;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Formulir Data Nasabah</h2>
    <form action="proses.php" method="post" onsubmit="return validateForm()">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>
        
        <label for="password">Password:</label>
        <input  name="password" id="password" required>
        <div class="error-message" id="password-error"></div>

        <input type="submit" value="Simpan">
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var passwordError = document.getElementById("password-error");

            // Validasi panjang kata sandi (minimal 6 karakter)
            if (password.length < 6) {
                passwordError.textContent = "Password harus terdiri dari minimal 6 karakter.";
                return false;
            } else {
                passwordError.textContent = "";
                return true;
            }
        }
    </script>
</body>
</html>
