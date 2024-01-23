<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Syahrul Ferdyansyah</title>
    
    <link rel="stylesheet" href="../css/form.css">

</head>

<body>
    <center>
<nav class="navbar">
    <h1>Toko Syahrul Ferdyansyah</h1>
    <div class="navbar-nav">
        <a href="../home.php">Home</a>
        <a href="../admin.php">Admin</a>
        <a href="../pengadaan.php">Pengadaan</a>
    </div>
    </nav>
    </center>
    <br><br>
<fieldset>
            <?php
                include '../proses/connection.php';
                $id_penerbit = $_GET['id_penerbit'];
                $query = "SELECT * FROM tabel WHERE id_penerbit='$id_penerbit'";
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                $data = mysqli_fetch_assoc($result);
            ?>
            <legend align="center">Edit Buku</legend>
            <form action="../proses/edit_penerbit_proses.php" method="post">
                
            <div class="input">
                    <label>ID Penerbit 
                        <small>(ID Penerbit harus unik contoh: SP01)</small>*
                    </label>
                    <input type="text" name="ID_penerbit" placeholder="ID Penerbit" required value="<?php echo $data['ID_penerbit'] ?>">
                    <br><br>
                </div>
                <div class="input">
                    <label>Nama Penerbit</label>
                    <input type="text" name="Nama" placeholder="Nama Penerbit" required value="<?php echo $data['Nama'] ?>">
                    <br><br>
                </div>
                <div class="input">
                    <label>Alamat</label>
                    <input type="text" name="Alamat" placeholder="Alamat" required value="<?php echo $data['Alamat'] ?>">
                    <br><br>
                </div>
                <div class="input">
                    <label>Kota</label>
                    <input type="text" name="Kota" placeholder="Kota" required value="<?php echo $data['Kota'] ?>">
                    <br><br>
                </div>
                <div class="input">
                    <label>Telepon</label>
                    <input type="text" name="Telepon" placeholder="Telepon" required value="<?php echo $data['Telepon'] ?>">
                    <br><br>
                </div>
                <div class="input" align="right">
                    <button type="submit" name="edit" onclick="return confirm('Apakah Anda yakin ingin mengubah data penerbit?')">Edit</button>
                    <button type="reset" onclick="window.location.href='../pengadaan.php'">Batal</button>
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