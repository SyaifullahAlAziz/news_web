    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Keunggulan</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">

                <tbody>

                    <!-- form start -->
                    <form role="form" method="post" action="keunggulan/tambah_keunggulan_proses.php" enctype="multipart/form-data">

                        <div class="box-body">

                            <div class="form-group">
                                <label>Judul Keunggulan</label>
                                <input type="text" name="judul_keunggulan" class="form-control" placeholder="Judul Keunggulan" required>
                            </div>

                            <div class="form-group">
                                <label>Icon</label>
                                <input type="text" name="icon" class="form-control" placeholder="Icon" required>
                            </div>

                            <div class="form-group">
                                <label>Isi Keunggulan</label>
                                <input type="text" name="isi_keunggulan" class="form-control" placeholder="Isi Keunggulan" required>
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