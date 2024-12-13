<?php
$mahasiswa = [
    ["Hani Valetina", "0877546578", "Teknik Informatika", "hanivalentina048@gmail.com"],
    ["Anis Widya P.", "0877546000", "Teknik Industri", "aniswidyaa55@gmail.com"],
    ["Fania Rizky N.", "0877546001", "Teknik Planologi", "faniaaanovita@gmail.com"]

];
$mahasiswa2
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>

</ul>
<?php endforeach;?>
</body>
</html>