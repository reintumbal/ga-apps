<!DOCTYPE html>
<html>
<head>
    <title>Pencatatan Barang Masuk dan Keluar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#docs">Docs</a>
        </li>
    </ul>
</nav>
    <h1>Pencatatan Barang Masuk dan Keluar</h1>

    <h2>INI HANYA UJI COBA SAJA</h2>
    <h3>jejejejejejej</h3>
    <h2>Testing Push</h2>

    <h2>Form Barang Masuk</h2>
    <form action="process.php" method="post">
        Nama Barang: <input type="text" name="nama_barang_masuk" required><br>
        Jumlah: <input type="number" name="jumlah_barang_masuk" required><br>
        <input type="submit" name="submit_barang_masuk" value="Simpan">
    </form>

    <h2>Form Barang Keluar</h2>
    <form action="process.php" method="post">
        Nama Barang: <input type="text" name="nama_barang_keluar" required><br>
        Jumlah: <input type="number" name="jumlah_barang_keluar" required><br>
        <input type="submit" name="submit_barang_keluar" value="Simpan">
    </form>

    <h2>Stok Barang</h2>
    <ul>
        <?php
            include 'data.php';
            foreach ($stok_barang as $barang) {
                echo "<li>{$barang['nama']} (Stok: {$barang['stok']})</li>";
            }
        ?>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="about">
        <div class="aboutContainer">
            <div class="aboutWrapper">
                <div class="aboutContent">
                    <h1>ABOUT PAGE</h1>
                </div>
                <div class="aboutContent">
                    <h1>Comming Soon</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
