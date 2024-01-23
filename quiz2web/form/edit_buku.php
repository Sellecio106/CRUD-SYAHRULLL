<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Syahrul Ferdyansyah</title>
    <link rel="stylesheet" href="../css/form.css">

</head>
<body>
<nav class="navbar">
    <center>
    <h1>Toko Syahrul Ferdyansyah</h1>
    <div class="navbar-nav">
        <a href="../home.php">Home</a>
        <a href="../admin.php">Admin</a>
    </div>
    </center>
    </nav>

    <div class="TypePengguna">
    <center>
    <h2>Hello Admin Toko</h2>
    </center>
    </div>

        <fieldset class="fiel_edit">
            <?php
                include '../proses/connection.php';
                $id_buku = $_GET['id_buku'];
                $query = "SELECT * FROM tabelbuku WHERE id_buku='$id_buku'";
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                $data = mysqli_fetch_assoc($result);
            ?>
            <legend align="center">Edit Buku</legend>
            <form action="../proses/edit_proses.php" method="post">
                
                <div class="input">
                    <label>Kode Buku 
                        <small>(Kode Buku harus unik)</small>*
                    </label>
                    <input type="text" name="ID_buku" placeholder="Kode Buku" required value="<?php echo $data['ID_buku'] ?>" readonly>
                </div>
                <div class="input">
                    <label>Kategori</label>
                    <input type="text" name="Kategori" placeholder="Kategori Buku" required value="<?php echo $data['Kategori'] ?>">
                </div>
                <div class="input">
                    <label>Nama Buku</label>
                    <input type="text" name="Nama_buku" placeholder="Nama Buku" required value="<?php echo $data['Nama_buku'] ?>">
                </div>
                <div class="input">
                    <label>Harga</label>
                    <input type="number" name="Harga" placeholder="Harga" required value="<?php echo $data['Harga'] ?>">
                </div>
                <div class="input">
                    <label>Stok</label>
                    <input type="number" name="Stok" placeholder="Stok" required value="<?php echo $data['Stok'] ?>">
                </div>
                <div class="input">
                    <label>Penerbit</label>
                    <select name="Penerbit" placeholder="Penerbit" required>
                    <option value="<?php echo $data['Penerbit']; ?>" hidden><?php echo $data['Penerbit']; ?></option>
                        <?php
                        include '../proses/connection.php';
                        $query = "SELECT * FROM tabel ORDER BY Nama ASC";
                        $result = mysqli_query($koneksi, $query);
                        if (!$result) {
                            die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }else {
                            while($fetch = mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $fetch['Nama']; ?>" hidden><?php echo $fetch['Nama']; ?></option>
                                <option value="<?php echo $fetch['Nama']; ?>"><?php echo $fetch['Nama']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>                
                </div>
                <div class="input" align="right">
                    <button type="submit" name="edit" onclick="return confirm('Apakah Anda yakin ingin mengubah buku?')">SIMPAN</button>
                    <button type="reset" onclick="window.location.href='admin.php'">Batal</button>
                </div>

            </form>
        </fieldset>
    </div>
    <!--Footer-->
    <footer>
        <p>&copy; Syahrul Ferdyansyah - i.2210901.</p>
    </footer>
</body>
</html>