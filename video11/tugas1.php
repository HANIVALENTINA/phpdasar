<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","", "phpdasar");

//ambil data dari tabel mahasiswa /query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
 //ambil data (fetch) mahasiswa dari object result
 //mysqli_fetch_row() // mengmbalikan array numerik
 //mysqli_fetch_assoc() //mengmbalikan array associative
 //mysqli_fetch_array() //mengembalikan keduanya
 //mysqli_fetch_object() //

 $mhs = mysqli_fetch_row($result);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>


<table border="1" cellpadding="10" cellspacing="0">
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
 <?php while( $row = mysqli_fetch_assoc($result)) : ?>
<tr>
    <td><?= $i;?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td><img src="img/<?php echo $row["gambar"]; ?>" width="90"></td>
    <td><?=$row["nrp"];?></td>
    <td><?=$row["nama"];?></td>
    <td><?=$row["email"];?></td>
    <td><?=$row["jurusan"];?></td>
    
</tr>
<?php $i++;?>
<?php endwhile; ?>
</table>
</body>
</html>