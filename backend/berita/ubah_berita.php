<?php
include "koneksi.php";
$id_berita = $_GET['id_berita'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='$id_berita'");
$row = mysqli_fetch_array($query);
?>


<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Berita</h6>
    </div>
    <div class="card-body">
        <table class="table table-stripped">

            <tbody>

                <!-- form start -->
                <form role="form" method="post" action="berita/ubah_berita_proses.php" enctype="multipart/form-data">
                    <div class="box-body">
                        <input type="hidden" name="id_berita" value="<?php echo $row['id_berita']; ?>">

                        <div class="form-group">
                            <label for="">Judul Kategori</label>
                            <select name="id_kategori" id="id_kategori" class="form-control" required>
                                <option value="">Silahkan Dipilih</option>
                                <?php
                                $data = $koneksi->query("SELECT * FROM tb_kategori");
                                while ($ekstrak = $data->fetch_assoc()) {
                                ?>
                                    <option value="<?= $ekstrak['id_kategori'] ?>" <?= $ekstrak['id_kategori'] == $row['id_kategori'] ? 'selected' : '' ?>>
                                        <?= $ekstrak['judul_kategori'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Judul Berita</label>
                            <input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" value="<?php echo $row['judul_berita']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Berita</label>
                            <input type="date" name="tanggal_berita" class="form-control" placeholder="Tanggal Berita" value="<?php echo $row['tanggal_berita']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label>Isi berita</label><br>
                            <textarea name="isi_berita" id="ckeditor" cols="100" rows="10"><?= $row['isi_berita']; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Gambar berita</label><br>
                            <img src="../assets/backend/img/<?= $row['gambar_berita'] ?>" width="50"> <br><br>
                            <input type="file" name="gambar_berita" class="form-control" value="<?php echo $row['gambar_berita']; ?>">
                            <input type="hidden" name="foto_lama" value="<?= $row['gambar_berita'] ?>">
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>

            </tbody>
        </table>
    </div>
</div>