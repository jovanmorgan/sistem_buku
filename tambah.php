<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wkodeth=device-wkodeth, initial-scale=1.0">
    <title>Tambah buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Tambah Data buku</h2>
        <form action="tambah_proses.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Penulis</label>
                <input type="text" name="nama_penulis" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Tanggal Terbit</label>
                <input type="date" name="tanggal_terbit" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>

</html>