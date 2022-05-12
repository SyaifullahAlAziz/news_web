    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Anggota</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <tbody>

                    <!-- form start -->
                    <form role="form" method="post" action="anggota/tambah_anggota_proses.php" enctype="multipart/form-data">

                        <div class="box-body">

                            <div class="form-group">
                                <label>Nama Anggota</label>
                                <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" required>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar Anggota</label>
                                <input type="file" name="gambar_anggota" class="form-control" placeholder="Gambar Anggota" required>
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