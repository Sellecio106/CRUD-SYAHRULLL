<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Syahrul Ferdyansyah</title>
    
    <link rel="stylesheet" href="css/form.css">

</head>

<body>
<nav class="navbar">
    <center>
    <h1>Toko Syahrul Ferdyansyah</h1>
    <div class="navbar-nav">
        <a href="home.php">Home</a>
        <a href="admin.php">Admin</a>
        <a href="pengadaan.php">Pengadaan</a>
    </div>
    </nav>

    <div class="TypePengguna">
    <center>
    <h2>Hello Admin Toko</h2>
    </center>
    </div>
    </center>

    <fieldset>
        <!-- Judul pada fieldset -->
        <legend align="center">Data Produk</legend>
        <center>
            <h3>Pencarian Buku</h3>
        <form method="GET" action="admin.php">
            <label>Cari Buku: </label>
            <input type="text" name="kata_cari" placeholder="Nama Buku"
                value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" />
                
            <button type="submit">Cari</button>
        </form>
            <button type="submit"><a href="form\add_buku_form.php">Tambah Data</a></button>
        </center>
        
        <br>
        <table border="1" width="100%" cellpadding="5" class="left">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Penerbit</th>
                    <th>OPSI</th>
                </tr>
            </thead>

            <tbody>
                <?php
                // untuk meinclude kan koneksi
                include 'proses/connection.php';

                // jika kita klik cari, maka yang tampil query cari ini
                if(isset($_GET['kata_cari'])) {
                    $kata_cari = $_GET['kata_cari'];
                    $query = "SELECT * FROM tabelbuku WHERE 'ID_buku' like '%".$kata_cari."%' OR Nama_buku like '%".$kata_cari."%' ORDER BY ID_buku ASC";
                } else {
                    // jika tidak ada pencarian, default yang dijalankan query ini
                    $query = "SELECT * FROM tabelbuku ORDER BY 'ID_buku' ASC";
                }

                $result = mysqli_query($koneksi, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_buku']; ?></td>
                    <td><?php echo $row['Kategori']; ?></td>
                    <td><?php echo $row['Nama_buku']; ?></td>
                    <td><?php echo $row['Harga']; ?></td>
                    <td><?php echo $row['Stok']; ?></td>
                    <td><?php echo $row['Penerbit']; ?></td>

                    <!--  untuk menambahkan opsi edit dan hapus -->
                    <td>
                        <a href="form/edit_buku.php?id_buku=<?php echo $row['ID_buku']; ?>">EDIT</a>
                        <a href="proses/delete_proses.php?id_buku=<?php echo $row['ID_buku']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">HAPUS</a>
                    </td>
                </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </fieldset>

    <!--Footer-->
    <footer>
        <p>&copy; Syahrul Ferdyansyah - i.2210901.</p>
    </footer>
</body>
</html>