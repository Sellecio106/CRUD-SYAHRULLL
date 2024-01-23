<?php

if (isset($_POST['edit'])) {
    include 'connection.php';
    $ID_buku = $_POST['ID_buku'];
    $Kategori = $_POST['Kategori'];
    $Nama = $_POST['Nama_buku'];
    $Harga = $_POST['Harga'];
    $Stok = $_POST['Stok'];
    $Penerbit = $_POST['Penerbit'];

    $query = "UPDATE tabel SET Kategori='$Kategori', Nama_buku='$Nama', harga='$Harga', stok='$Stok', penerbit='$Penerbit' WHERE ID_buku='$ID_buku'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        $result;
        echo "<script>alert('Buku berhasil diedit');window.location='../admin.php';</script>";
    }
}
?>