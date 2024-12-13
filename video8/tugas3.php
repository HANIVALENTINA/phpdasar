<?php 
// Array Associative yang benar
$mahasiswa = [
    [
        "Nama" => "Hani Valentina",
        "Nrp" => "05475467757",
        "E-mail" => "hanivalentina@gmail.com",
        "Jurusan" => "UI/UX desainer",
        "Gambar" => "haloo.png",
    ],
    [
        "Nama" => "Ariel Susanto",
        "Nrp" => "05475467057",
        "E-mail" => "arielsusanto@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "haloo.png",
    ]
];
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
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <!-- Dynamic image path and alt attribute -->
        <img src="img/<?= $mhs['Gambar']; ?>" alt="Foto <?= $mhs['Nama']; ?>" width="100" height="100">
    </li>
    <li>Nama : <?= $mhs["Nama"]; ?></li>
    <li>NRP : <?= $mhs["Nrp"]; ?></li>
    <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
    <li>Email : <?= $mhs["E-mail"]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>
