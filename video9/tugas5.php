<?php 
//cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
     !isset($_GET["nrp"]) || 
     !isset($_GET["email"]) ||
     !isset($_GET["jurusan"]) ||
     !isset($_GET["gambar"])) { // Removed the extra comma here
    //redirect yaitu memindahkan usernya dari sebuah halaman ke halaman lain
    header("Location: tugas4.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""> <!-- Fixed 'scr' to 'src' -->
        </li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nrp"] ?></li>
        <li><?= $_GET["email"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
    </ul>

    <a href="tugas4.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>
