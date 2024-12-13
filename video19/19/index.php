<?php
if( !isset($_SESSION["login"])) {
header("Location: login.php");
exit;
}
require 'functions.php';

// Query awal untuk mendapatkan data mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

// Tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        /* Tambahkan styling dasar */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <a href="logout.php">Logout</a>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah data mahasiswa</a>

<form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>

<table>
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th> 
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
    <tr>
        <td><?= htmlspecialchars($i); ?></td>
        <td>
            <a href="ubah.php?id=<?= htmlspecialchars($row["id"]); ?>">ubah</a> |
            <a href="hapus.php?id=<?= htmlspecialchars($row["id"]); ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">hapus</a>
        </td>
        <td>
            <img src="img/<?= htmlspecialchars($row["gambar"]); ?>" width="50" 
                alt="<?= htmlspecialchars($row["nama"]); ?>" 
                onerror="this.src='img/default.jpg';">
        </td>
        <td><?= htmlspecialchars($row["nrp"]); ?></td>
        <td><?= htmlspecialchars($row["nama"]); ?></td>
        <td><?= htmlspecialchars($row["email"]); ?></td>
        <td><?= htmlspecialchars($row["jurusan"]); ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

</body>
</html>
