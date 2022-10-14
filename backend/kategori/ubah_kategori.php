<?php
include "koneksi.php";
$id_kategori = $_GET['id_kategori'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$id_kategori'");
$row = mysqli_fetch_array($query);
?>


<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Kategori</h6>
    </div>
    <div class="card-body">
        <table class="table table-stripped">

            <tbody>

                <!-- form start -->
                <form role="form" method="post" action="kategori/ubah_kategori_proses.php" enctype="multipart/form-data">
                    <div class="box-body">
                        <input type="hidden" name="id_kategori" value="<?= $row['id_kategori']; ?>">
                        <div class="form-group">
                            <label>Judul Kategori</label>
                            <input type="text" name="judul_kategori" class="form-control" placeholder="Judul Kategori" value="<?= $row['judul_kategori']; ?>" required>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>

            </tbody>
        </table>
    </div>
</div>