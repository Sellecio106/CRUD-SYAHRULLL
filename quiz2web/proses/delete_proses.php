<?php

include 'connection.php';
$ID_penerbit = $_GET['ID_penerbit'];
$query = "DELETE FROM tabel WHERE ID_penerbit='$ID_penerbit'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    $result;
    echo "<script>alert('Data Penerbit berhasil dihapus');window.location='../pengadaan.php';</script>";
}
?>