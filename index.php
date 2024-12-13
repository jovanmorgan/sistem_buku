<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wkodeth=device-wkodeth, initial-scale=1.0">
    <title>Data buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2>Data buku</h2>
        <a href="tambah.php" class="btn btn-primary mb-3">Tambah buku</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>KODE BUKU</th>
                    <th>NAMA PENULIS</th>
                    <th>JUDUL</th>
                    <th>PENGARANG</th>
                    <th>PENERBIT</th>
                    <th>TAHUN TERBIT</th>
                    <th>TANGGAL TERBIT</th>
                    <th>FOTO</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM buku";
                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['kode_buku']}</td>
                        <td>{$row['nama_penulis']}</td>
                        <td>{$row['judul']}</td>
                        <td>{$row['pengarang']}</td>
                        <td>{$row['penerbit']}</td>
                        <td>{$row['tahun_terbit']}</td>
                        <td>{$row['tanggal_terbit']}</td>
                        <td><img src='uploads/{$row['foto']}' wkodeth='50' height='50'></td>
                        <td>
                            <a href='edit.php?kode={$row['kode_buku']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete.php?kode={$row['kode_buku']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\");'>Hapus</a>
                        </td>
                      </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>