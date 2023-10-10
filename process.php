<?php
include 'data.php';

if (isset($_POST['submit_barang_masuk'])) {
    $nama_barang_masuk = $_POST['nama_barang_masuk'];
    $jumlah_barang_masuk = (int)$_POST['jumlah_barang_masuk'];

    // Cari barang dalam stok
    $index = array_search($nama_barang_masuk, array_column($stok_barang, 'nama'));

    if ($index !== false) {
        // Update stok barang masuk
        $stok_barang[$index]['stok'] += $jumlah_barang_masuk;
        echo "Barang masuk berhasil dicatat.";
    } else {
        echo "Barang tidak ditemukan dalam stok.";
    }
} elseif (isset($_POST['submit_barang_keluar'])) {
    $nama_barang_keluar = $_POST['nama_barang_keluar'];
    $jumlah_barang_keluar = (int)$_POST['jumlah_barang_keluar'];

    // Cari barang dalam stok
    $index = array_search($nama_barang_keluar, array_column($stok_barang, 'nama'));

    if ($index !== false && $stok_barang[$index]['stok'] >= $jumlah_barang_keluar) {
        // Update stok barang keluar
        $stok_barang[$index]['stok'] -= $jumlah_barang_keluar;
        echo "Barang keluar berhasil dicatat.";
    } else {
        echo "Barang tidak ditemukan dalam stok atau stok tidak mencukupi.";
    }
}

// Kembali ke halaman utama
header('Location: index.php');
?>
