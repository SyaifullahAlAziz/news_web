    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Berita</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <tbody>

                    <!-- form start -->
                    <form role="form" method="post" action="berita/tambah_berita_proses.php" enctype="multipart/form-data">

                        <div class="box-body">

                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <select name="id_kategori" id="id_kategori" class="form-control" required>
                                    <option value="">Silahkan Dipilih</option>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $data['id_kategori'] ?>">
                                            <?= $data['judul_kategori'] ?>
                                        </option>

                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" required>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Berita</label>
                                <input type="date" name="tanggal_berita" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Isi berita</label><br>
                                <textarea name="isi_berita" id="ckeditor" cols="100" rows="10" placeholder="Isi Berita" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Gambar Berita</label>
                                <input type="file" name="gambar_berita" class="form-control">
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" title="Simpan Data">
                                    <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                            </div>

                        </div>

                    </form>

                </tbody>
            </table>
        </div>
    </div>