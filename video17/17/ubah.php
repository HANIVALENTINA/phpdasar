<?php
// Include file fungsi untuk menambah data (misalnya functions.php)
require 'functions.php';

//ambil data d URL 
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Validasi data mahasiswa
if (!$mhs) {
    echo "
        <script>
            alert('Data tidak ditemukan!');
            document.location.href = 'index.php';
        </script>
    ";
    exit;
}

// Cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
    //apakah berhasil di ubah
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- Hidden input untuk ID mahasiswa -->
         <!-- Untuk mencegah serangan XSS (kerentanan keamanan), gunakan htmlspecialchars. -->
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
         <ul>
            <li>
                <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp" required value="<?= htmlspecialchars($mhs["nrp"]); ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required value="<?= htmlspecialchars($mhs["nama"]); ?>">
            </li>
            
            <li>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required value="<?= htmlspecialchars($mhs["email"]); ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= htmlspecialchars($mhs["jurusan"]); ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <img src="img/<?= $mhs['gambar'];?>" width="100"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>
