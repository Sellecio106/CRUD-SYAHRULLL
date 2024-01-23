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
            <a href="../index.php">Home</a>
            <a href="../admin.php">Admin</a>
            <a href="../pengadaan.php">Pengadaan</a>
        </div>
    </nav>
    </center>
    <br><br>


<fieldset>
            <legend align="center">Tambah Penerbit</legend>
            <form action="../proses/add_penerbit_proses.php" method="post">
                <div class="input">
                    <label>ID Penerbit</label>
                    <input type="text" name="ID_penerbit" placeholder="ID Penerbit harus unik contoh: SP01" required>
                    <br><br>
                </div>
                <div class="input">
                    <label>Nama Penerbit</label>
                    <input type="text" name="Nama" placeholder="Nama Penerbit" required>
                    <br><br>
                </div>
                <div class="input">
                    <label>Alamat</label>
                    <input type="text" name="Alamat" placeholder="Alamat" required>
                    <br><br>
                </div>
                <div class="input">
                    <label>Kota</label>
                    <input type="text" name="Kota" placeholder="Kota" required>
                    <br><br>
                </div>
                <div class="input">
                    <label>Telepon</label>
                    <input type="text" name="Telepon" placeholder="Telepon" required>
                    <br><br>
                <div class="input">
                    <button type="submit" name="tambah">Tambah</button>
                    <button type="reset" onclick="window.location.href='pengadaan.php'">Batal</button>
                </div>
            </form>
        </fieldset>
    </div>
    <!--Footer-->
    <footer>
        <p>&copy; Syahrul Ferdyansyah - i.2210901</p>
    </footer>
</body>
</html>