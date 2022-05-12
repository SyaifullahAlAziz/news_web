<?php
include "koneksi.php";
$id_anggota = $_GET['id_anggota'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$id_anggota'");
$row = mysqli_fetch_array($query);
?>


<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Anggota</h6>
    </div>
    <div class="card-body">
        <table class="table table-stripped">

            <tbody>

                <!-- form start -->
                <form role="form" method="post" action="anggota/ubah_anggota_proses.php" enctype="multipart/form-data">
                    <div class="box-body">
                        <input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota']; ?>">

                        <div class="form-group">
                            <label>Nama anggota</label>
                            <input type="text" name="nama_anggota" class="form-control" placeholder="nama anggota" value="<?php echo $row['nama_anggota']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $row['jabatan']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Gambar Anggota</label><br>
                            <img src="../assets/backend/img/<?= $row['gambar_anggota'] ?>" width="50"> <br><br>
                            <input type="file" name="gambar_anggota" class="form-control" value="<?php echo $row['gambar_anggota']; ?>">
                            <input type="hidden" name="foto_lama" value="<?= $row['gambar_anggota'] ?>">
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>

            </tbody>
        </table>
    </div>
</div>