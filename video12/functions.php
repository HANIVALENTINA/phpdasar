<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows; 
}



function tambah($data) {
    global $conn;

    // Ambil data dari tiap elemen dalam form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // Query insert data
    $query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar) 
              VALUES ('$nrp', '$nama', '$email', '$jurusan', '$gambar')";

    // Eksekusi query
    mysqli_query($conn, $query);

    // Cek keberhasilan
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>