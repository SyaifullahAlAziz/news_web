<?php
include "koneksi.php";
$id_anggota = $_GET['id_anggota'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota='$id_anggota'");
$row = mysqli_fetch_array($query);

?>

<!-- Basic Card Example -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Berita</h6>
        </div>
        <div class="card-body">

            <div class="card-body p-0">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 150px">
                                <b>Nama Anggota</b>
                            </td>
                            <td>
                                : <?php echo $row['nama_anggota']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Jabatan</b>
                            </td>
                            <td>
                                : <?php echo $row['jabatan']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Gambar Anggota</b>
                            </td>
                            <td>
                                : <img src="../assets/backend/img/<?= $row['gambar_anggota'] ?>" width="100%" alt="">
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="card-footer">
                    <a href="index.php?page=anggota/data_anggota" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>