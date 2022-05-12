    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Profil</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <tbody>

                    <!-- form start -->
                    <form role="form" method="post" action="profil/tambah_profil_proses.php" enctype="multipart/form-data">

                        <div class="box-body">

                            <div class="form-group">
                                <label>Judul Profil</label>
                                <input type="text" name="judul_profil" class="form-control" placeholder="Judul profil" required>
                            </div>

                            <div class="form-group">
                                <label>Isi Profil</label><br>
                                <input type="text" name="isi_profil" class="form-control" placeholder="Isi Profil" required>
                            </div>

                            <div class="form-group">
                                <label>Gambar profil</label>
                                <input type="file" name="gambar_profil" class="form-control">
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