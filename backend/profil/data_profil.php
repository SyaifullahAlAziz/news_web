<?php
include "koneksi.php";
$no = 0;
$query = mysqli_query($koneksi, "SELECT * FROM tb_profil ORDER BY id_profil DESC");
?>

<!-- Basic Card Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Profil</h6>
        </div>
        <div class="ml-3 mt-3">
            <a href="index.php?page=profil/tambah_profil">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                    <th>No</th>
                    <th>Judul Profil</th>
                    <th>Isi Profil</th>
                    <th>Gambar Profil</th>
                    <th>AKSI</th>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr>
                            <td><?= $no = $no + 1; ?></td>
                            <td><?= $row['judul_profil']; ?></td>
                            <td><?= $row['isi_profil']; ?></td>
                            <td><img src="../assets/backend/img/<?= $row['gambar_profil']; ?>" width="50"> </td>

                            <td>
                                <a href="index.php?page=profil/detail_profil&id_profil=<?= $row['id_profil']; ?>" class="btn btn-warning btn-sm btn-block" role="button" title="Detail Data"><i class="fa fa-user"></i> Detail</a>

                                <a href="index.php?page=profil/ubah_profil&id_profil=<?= $row['id_profil']; ?>" class="btn btn-success btn-sm btn-block" role="button" title="Ubah Data"><i class="fa fa-edit"></i> Ubah</a>

                                <a href="profil/hapus_profil.php?id_profil=<?= $row['id_profil']; ?>" class="btn btn-danger btn-sm btn-block" role="button" title="Hapus Data">
                                    <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>