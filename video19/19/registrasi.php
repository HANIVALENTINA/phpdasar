<?php

require 'functions.php'; // pastikan 'functions.php' memiliki koneksi database dan fungsi registrasi

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>alert('User baru berhasil ditambahkan');</script>";
    } else {
        // Tampilkan error jika fungsi registrasi gagal
        echo "<script>alert('Gagal menambahkan user: " . mysqli_error($conn) . "');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        /* Reset margin dan padding default */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Gaya umum body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container untuk form */
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
        }

        li {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Registrasi</h1>
        <form action="" method="post">
            <ul>
                <li>
                    c
                </li>
                <li>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan password" required>
                </li>
                <li>
                    <label for="password2">Konfirmasi Password:</label>
                    <input type="password" name="password2" id="password2" placeholder="Konfirmasi password" required>
                </li>
                <li>
                    <button type="submit" name="register">Register!</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>
