<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode = $_GET['kode'];
    $judul = $_POST['judul'];
    $nama_penulis = $_POST['nama_penulis'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $tanggal_terbit = $_POST['tanggal_terbit'];

    // Proses upload foto (jika ada)
    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($foto);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

        // Update query with photo
        $query = "UPDATE buku SET 
                    judul='$judul', 
                    nama_penulis='$nama_penulis', 
                    pengarang='$pengarang', 
                    penerbit='$penerbit', 
                    tahun_terbit='$tahun_terbit', 
                    tanggal_terbit='$tanggal_terbit',
                    foto='$foto'
                  WHERE kode_buku = $kode";
    } else {
        // Update query without photo
        $query = "UPDATE buku SET 
                     judul='$judul', 
                     nama_penulis='$nama_penulis', 
                    pengarang='$pengarang', 
                    penerbit='$penerbit', 
                    tahun_terbit='$tahun_terbit', 
                    tanggal_terbit='$tanggal_terbit'
                  WHERE kode_buku = $kode";
    }

    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php');
    } else {
        echo "Gagal mengupdate data";
    }
}
