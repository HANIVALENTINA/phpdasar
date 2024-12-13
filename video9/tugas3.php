<?php

$mahasiswa = [
    [
        "Nama" => "Hani Valentina",
        "Nrp" => "05475467757",
        "E-mail" => "hanivalentina@gmail.com",
        "Jurusan" => "UI/UX desainer",
        "Gambar" => "download.jpeg",
    ],
    [
        "Nama" => "Ariel Susanto",
        "Nrp" => "05475467057",
        "E-mail" => "arielsusanto@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "download.jpeg", // Removed extra space
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li><img src="img2/<?= $mhs['Gambar']; ?>" alt="Image of <?= $mhs['Nama']; ?>"></li>
            <li><?= $mhs["Nama"]; ?></li>
            <li><?= $mhs["Nrp"]; ?></li>
            <li><?= $mhs["E-mail"]; ?></li> <!-- Added email for completeness -->
        </ul>
    <?php endforeach; ?>
</body>
</html>
