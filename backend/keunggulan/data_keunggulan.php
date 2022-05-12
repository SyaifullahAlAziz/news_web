<?php
include "koneksi.php";
$no = 0;
$query = mysqli_query($koneksi, "SELECT * FROM tb_keunggulan ORDER BY id_keunggulan DESC");
?>

<!-- Basic Card Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Keunggulan</h6>
        </div>
        <div class="ml-3 mt-3">
            <a href="index.php?page=keunggulan/tambah_keunggulan">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                    <th>No</th>
                    <th>Judul Keunggulan</th>
                    <th>Icon</th>
                    <th>Isi Keunggulan</th>
                    <th>AKSI</th>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr>
                            <td><?= $no = $no + 1; ?></td>
                            <td><?= $row['judul_keunggulan']; ?></td>
                            <td><?= $row['icon']; ?></td>
                            <td><?= $row['isi_keunggulan']; ?></td>

                            <td>

                                <a href="index.php?page=keunggulan/detail_keunggulan&id_keunggulan=<?= $row['id_keunggulan']; ?>" class="btn btn-warning btn-sm btn-block" role="button" title="Detail Data"><i class="fa fa-user"></i> Detail</a>

                                <a href="index.php?page=keunggulan/ubah_keunggulan&id_keunggulan=<?= $row['id_keunggulan']; ?>" class="btn btn-success btn-sm btn-block" role="button" title="Ubah Data"><i class="fa fa-edit"></i> Ubah</a>

                                <a href="keunggulan/hapus_keunggulan.php?id_keunggulan=<?= $row['id_keunggulan']; ?>" class="btn btn-danger btn-sm btn-block" role="button" title="Hapus Data">
                                    <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>