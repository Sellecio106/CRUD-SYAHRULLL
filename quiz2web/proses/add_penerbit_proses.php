<?php

include 'connection.php';

if (isset($_POST['tambah'])) {
    $ID_penerbit = $_POST['ID_penerbit'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Kota = $_POST['Kota'];
    $Telepon = $_POST['Telepon'];
    $query = "INSERT INTO tabel VALUES ('$ID_penerbit','$Nama','$Alamat','$Kota','$Telepon')";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Data Penerbit berhasil ditambahkan');window.location='../pengadaan.php';</script>";
    }
}