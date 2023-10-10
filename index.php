<!DOCTYPE html>
<html>
<head>
    <title>Pencatatan Barang Masuk dan Keluar</title>
</head>
<body>
    <h1>Pencatatan Barang Masuk dan Keluar</h1>

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
</body>
</html>
