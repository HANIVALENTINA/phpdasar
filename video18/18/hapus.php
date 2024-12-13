<?php
if( !isset($_SESSION["login"])) {
header("Location: login.php");
exit;
}
require 'functions.php'; // Pastikan file ini berisi fungsi hapus()

// Ambil ID dari parameter URL
$id = isset($_GET["id"]) ? $_GET["id"] : null;

// Periksa apakah ID tersedia
if (!$id) {
    echo "
        <script>
            alert('ID tidak ditemukan!');
            document.location.href = 'index.php';
        </script>
    ";
    exit;
}

// Hapus data berdasarkan ID
if (hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
?>
