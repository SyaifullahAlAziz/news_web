<?php
include "koneksi.php";
$no = 0;
$query = mysqli_query($koneksi, "SELECT * FROM tb_anggota ORDER BY id_anggota DESC");
?>

<!-- Basic Card Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
        </div>
        <div class="ml-3 mt-3">
            <a href="index.php?page=anggota/tambah_anggota">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Jabatan</th>
                    <th>Gambar Anggota</th>
                    <th>AKSI</th>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr>
                            <td><?= $no = $no + 1; ?></td>
                            <td><?= $row['nama_anggota']; ?></td>
                            <td><?= $row['jabatan']; ?></td>
                            <td><img src="../assets/backend/img/<?= $row['gambar_anggota']; ?>" width="50"> </td>

                            <td>
                                <a href="index.php?page=anggota/detail_anggota&id_anggota=<?= $row['id_anggota']; ?>" class="btn btn-warning btn-sm btn-block" role="button" title="Detail Data"><i class="fa fa-user"></i> Detail</a>

                                <a href="index.php?page=anggota/ubah_anggota&id_anggota=<?= $row['id_anggota']; ?>" class="btn btn-success btn-sm btn-block" role="button" title="Ubah Data"><i class="fa fa-edit"></i> Ubah</a>

                                <a href="anggota/hapus_anggota.php?id_anggota=<?= $row['id_anggota']; ?>" class="btn btn-danger btn-sm btn-block" role="button" title="Hapus Data">
                                    <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>