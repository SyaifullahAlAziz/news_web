<?php
include "koneksi.php";
$no = 0;
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
?>

<!-- Basic Card Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
        </div>
        <div class="ml-3 mt-3">
            <a href="index.php?page=kategori/tambah_kategori">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                    <th>No</th>
                    <th>Judul Kategori</th>
                    <th>AKSI</th>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr>
                            <td><?= $no = $no + 1; ?></td>
                            <td><?= $row['judul_kategori']; ?></td>

                            <td>
                                <a href="index.php?page=kategori/ubah_kategori&id_kategori=<?= $row['id_kategori']; ?>" class="btn btn-success btn-sm btn-block" role="button" title="Ubah Data"><i class="fa fa-edit"></i> Ubah</a>

                                <a href="kategori/hapus_kategori.php?id_kategori=<?= $row['id_kategori']; ?>" class="btn btn-danger btn-sm btn-block" role="button" title="Hapus Data">
                                    <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>