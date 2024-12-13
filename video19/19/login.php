<?php
session_start();
require 'functions.php';

// Cek cookie untuk login otomatis
if (isset($_COOKIE['login']) && $_COOKIE['login'] === 'true') {
    $_SESSION['login'] = true;
}

// Redirect ke halaman utama jika sudah login
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// Proses login
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Gunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Set session login
            $_SESSION["login"] = true;

            // Cek remember me
            if (isset($_POST['remember'])) {
                // Buat cookie dengan aman
                setcookie('login', 'true', time() + 3600, '/', '', false, true);
            }

            header("Location: index.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
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
        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Login</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan username" required>
                </li>
                <li>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Masukkan password" required>
                </li>
                <li>
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember"> Remember me
                    </label>
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
            <?php if (isset($error)): ?>
                <p class="error-message"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
