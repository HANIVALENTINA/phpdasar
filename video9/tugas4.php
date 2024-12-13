<?php
//get ialah metode pengiriman data melalui url dan data tersebut dapat ditangkap oleh variable super global $_GET
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
        "Gambar" => "download.jpeg",
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
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <!-- Corrected the URL to use the right case for array keys -->
                <a href="tugas5.php?nama=<?= $mhs["Nama"]; ?>&nrp=<?= $mhs["Nrp"]; ?>&email=<?= $mhs["E-mail"]; ?>&jurusan=<?= $mhs["Jurusan"]; ?>&gambar=<?= $mhs["Gambar"]; ?>">
                    <?= $mhs["Nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
