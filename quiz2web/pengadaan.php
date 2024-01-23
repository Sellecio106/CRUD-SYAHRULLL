<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        </center>
    </nav>
    <br><br>
        <fieldset>
            <legend align="center">Halaman Pengadaan</legend>
            <br><br>
            <center>
            <form method="GET" action="pengadaan.php" class="search">
                <label>Cari Penerbit : </label>
                <input type="text" name="kata_cari" placeholder="Nama Penerbit" value="<?php if (isset($_GET['kata_cari'])) {
                    echo
                        $_GET['kata_cari'];
                } ?>" />
                <button type="submit">Cari</button>
                <br><br>
            </form>
            <button type="reset" onclick="window.location.href='form/add_penerbit_form.php'">Tambah Penerbit +</button>
            </center>
            <br>
            <table border="1" width="100%" cellpadding="5" class="left">
                <tr class="center">
                    <th>No</th>
                    <th>ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include 'proses/connection.php';
                $no = 1;
                
                $query = "SELECT * FROM tabel ORDER BY Nama ASC";

                if (isset($_GET['kata_cari'])) {
                    $kata_cari = $_GET['kata_cari'];
                    $query = "SELECT * FROM tabel WHERE Nama like '%" . $kata_cari . "%' ORDER BY Nama ASC";
                }
                
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                $no = 1;
                $data = mysqli_query($koneksi, $query);
                while($fetch = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $fetch['ID_penerbit']; ?></td>
                        <td><?php echo $fetch['Nama']; ?></td>
                        <td><?php echo $fetch['Alamat']; ?></td>
                        <td><?php echo $fetch['Kota']; ?></td>
                        <td><?php echo $fetch['Telepon']; ?></td>
                        <td>
                            <a href="form/edit_penerbit.php?id_penerbit=<?php echo $fetch['ID_penerbit']; ?>">Edit</a>
                            <a href="proses/delete_penerbit.php?id_penerbit=<?php echo $fetch['ID_penerbit']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data Penerbit?')">Hapus</a>
                            </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </fieldset>
    </div>
    <!--Footer-->
    <footer>
        <p>&copy; Syahrul Ferdyansyah - i.2210901.</p>
    </footer>
</body>
</html>