<?php
include "koneksi.php";
$no = 0;
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita a JOIN tb_kategori b
ON a.id_kategori=b.id_kategori ORDER BY id_berita DESC");
?>

<!-- Basic Card Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
        </div>
        <div class="ml-3 mt-3">
            <a href="index.php?page=berita/tambah_berita">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                    <th>No</th>
                    <th>Kategori Berita</th>
                    <th>Judul berita</th>
                    <th>Tanggal Berita</th>
                    <th>Isi berita</th>
                    <th>Gambar berita</th>
                    <th>AKSI</th>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr>
                            <td><?= $no = $no + 1; ?></td>
                            <td><?= $row['judul_kategori'] ?></td>
                            <td><?= $row['judul_berita']; ?></td>
                            <td><?= $row['tanggal_berita'] ?></td>
                            <td><?= substr($row['isi_berita'], 0, 150); ?></td>
                            <td><img src="../assets/backend/img/<?= $row['gambar_berita']; ?>" width="50"> </td>

                            <td>
                                <a href="index.php?page=berita/detail_berita&id_berita=<?= $row['id_berita']; ?>" class="btn btn-warning btn-sm btn-block" role="button" title="Detail Data"><i class="fa fa-user"></i> Detail</a>

                                <a href="index.php?page=berita/ubah_berita&id_berita=<?= $row['id_berita']; ?>" class="btn btn-success btn-sm btn-block" role="button" title="Ubah Data"><i class="fa fa-edit"></i> Ubah</a>

                                <a href="berita/hapus_berita.php?id_berita=<?= $row['id_berita']; ?>" class="btn btn-danger btn-sm btn-block" role="button" title="Hapus Data">
                                    <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>