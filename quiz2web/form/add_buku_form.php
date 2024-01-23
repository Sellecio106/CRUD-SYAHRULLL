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
    <br><br>

    <fieldset>
        <legend align="center"><h5>Input Data Produk</h5></legend>
        <!--Form untuk Input Data-->
        <form action="../proses/add_buku_proses.php" method="post">
        <div class="input">
            <input type="text" name="ID_buku" placeholder="ID Buku" size="40px">
            </div>
        <div class="input">
            <input type="text" name="Kategori" placeholder="Kategori Buku" size="40px">
            </div>
        <div class="input">
            <input type="text" name="Nama_buku" placeholder="Nama Buku" size="40px">
        <div class="input">
            <input type="text" name="Harga" placeholder="Harga Buku" size="40px">
        </div>
        <div class="input">
            <input type="text" name="Stok" placeholder="Stok Buku" size="40px">
        </div>
        <div class="input">
            <label>Penerbit</label>
            <select name="Penerbit" placeholder="Penerbit" required>
            <option value="" hidden>Pilih Penerbit</option>
                <?php
                include '../proses/connection.php';
                $query = "SELECT * FROM tabel ORDER BY Nama ASC";
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }else {
                    while($fetch = mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $fetch['Nama']; ?>"><?php echo $fetch['Nama']; ?></option>
                        <?php
                    }
                }
                ?>
            </select>                
        </div>

            <button type="submit" name="submit">SIMPAN</button>
            <button type="reset" name="reset">RESET</button>
        </form>
    </fieldset>
    <!--Footer-->
    <footer>
        <p>&copy; Syahrul Ferdyansyah - i.2210901.</p>
    </footer>
</body>
</html>