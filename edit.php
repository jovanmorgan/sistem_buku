<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$query = "SELECT * FROM buku WHERE kode_buku = $kode";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wkodeth=device-wkodeth, initial-scale=1.0">
    <title>Edit buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Edit Data buku</h2>
        <form action="edit_proses.php?kode=<?= $kode ?>" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label>Judul</label>
                <input type="text" name="judul" value="<?= $row['judul'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Penulis</label>
                <input type="text" name="nama_penulis" value="<?= $row['nama_penulis'] ?>" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="form-control" required value="<?= $row['pengarang'] ?>">
            </div>
            <div class="mb-3">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" required value="<?= $row['penerbit'] ?>">
            </div>
            <div class="mb-3">
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" required
                    value="<?= $row['tahun_terbit'] ?>">
            </div>
            <div class="mb-3">
                <label>Tanggal Terbit</label>
                <input type="date" name="tanggal_terbit" class="form-control" required
                    value="<?= $row['tanggal_terbit'] ?>">
            </div>
            <div class="mb-3">
                <label>Foto (Kosongkan jika tkodeak ingin mengganti)</label>
                <input type="file" name="foto" class="form-control">
                <img src="uploads/<?= $row['foto'] ?>" wkodeth="100" height="100" class="mt-3">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>

</html>