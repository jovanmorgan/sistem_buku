<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$query = "DELETE FROM buku WHERE kode_buku = $kode";
if (mysqli_query($koneksi, $query)) {
    header('Location: index.php');
} else {
    echo "Gagal menghapus data";
}
