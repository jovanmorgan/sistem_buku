<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $nama_penulis = $_POST['nama_penulis'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $tanggal_terbit = $_POST['tanggal_terbit'];

    // Proses upload foto
    $foto = $_FILES['foto']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($foto);
    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    $query = "INSERT INTO buku (judul, nama_penulis, pengarang, penerbit, tahun_terbit, tanggal_terbit, foto) 
              VALUES ('$judul', '$nama_penulis','$pengarang', '$penerbit', '$tahun_terbit', '$tanggal_terbit','$foto')";

    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php');
    } else {
        echo "Gagal menambah data";
    }
}
