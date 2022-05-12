<?php
include "koneksi.php";
$id_keunggulan = $_GET['id_keunggulan'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_keunggulan WHERE id_keunggulan='$id_keunggulan'");
$row = mysqli_fetch_array($query);
?>


<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Keunggulan</h6>
    </div>
    <div class="card-body">
        <table class="table table-stripped">

            <tbody>

                <!-- form start -->
                <form role="form" method="post" action="keunggulan/ubah_keunggulan_proses.php" enctype="multipart/form-data">
                    <div class="box-body">
                        <input type="hidden" name="id_keunggulan" value="<?php echo $row['id_keunggulan']; ?>">
                        <div class="form-group">
                            <label>Judul keunggulan</label>
                            <input type="text" name="judul_keunggulan" class="form-control" placeholder="Judul Keunggulan" value="<?php echo $row['judul_keunggulan']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" name="icon" class="form-control" placeholder="Icon" value="<?php echo $row['icon']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Isi keunggulan</label>
                            <input type="text" name="isi_keunggulan" class="form-control" placeholder="Isi Keunggulan" value="<?php echo $row['isi_keunggulan']; ?>" required>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>

            </tbody>
        </table>
    </div>
</div>