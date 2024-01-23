<?php

if (isset($_POST['edit'])) {
    include 'connection.php';
    $ID_penerbit = $_POST['ID_penerbit'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];
    $Telepon = $_POST['Telepon'];

    $query = "UPDATE tabel SET nama='$Nama', alamat='$Alamat', kota='$Kota', telepon='$Telepon' WHERE ID_penerbit='$ID_penerbit'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Data Penerbit berhasil diedit');window.location='../pengadaan.php';</script>";
    }
}
?>