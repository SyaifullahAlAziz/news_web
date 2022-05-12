<?php
include "koneksi.php";
$id_profil = $_GET['id_profil'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_profil WHERE id_profil='$id_profil'");
$row = mysqli_fetch_array($query);
?>


<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Profil</h6>
    </div>
    <div class="card-body">
        <table class="table table-stripped">

            <tbody>

                <!-- form start -->
                <form role="form" method="post" action="profil/ubah_profil_proses.php" enctype="multipart/form-data">
                    <div class="box-body">
                        <input type="hidden" name="id_profil" value="<?php echo $row['id_profil']; ?>">
                        <div class="form-group">
                            <label>Judul profil</label>
                            <input type="text" name="judul_profil" class="form-control" placeholder="Judul profil" value="<?php echo $row['judul_profil']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Isi Profil</label><br>
                            <input type="text" name="isi_profil" class="form-control" placeholder="Isi Profil" value="<?php echo $row['isi_profil']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Gambar profil</label><br>
                            <img src="../assets/backend/img/<?= $row['gambar_profil'] ?>" width="50"> <br><br>
                            <input type="file" name="gambar_profil" class="form-control" value="<?php echo $row['gambar_profil']; ?>">
                            <input type="hidden" name="foto_lama" value="<?= $row['gambar_profil'] ?>">
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>

            </tbody>
        </table>
    </div>
</div>