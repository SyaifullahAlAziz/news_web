    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <tbody>

                    <!-- form start -->
                    <form role="form" method="post" action="kategori/tambah_kategori_proses.php" enctype="multipart/form-data">

                        <div class="box-body">

                            <div class="form-group">
                                <label>Judul Kategori</label>
                                <input type="text" name="judul_kategori" class="form-control" placeholder="Judul Kategori" required>
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