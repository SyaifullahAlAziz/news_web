<?php
include "koneksi.php";
$id_profil = $_GET['id_profil'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_profil WHERE id_profil='$id_profil'");
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
                                <b>Judul Profil</b>
                            </td>
                            <td>
                                : <?php echo $row['judul_profil']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Isi Profil</b>
                            </td>
                            <td>
                                : <?php echo $row['isi_profil']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Gambar Profil</b>
                            </td>
                            <td>
                                : <img src="../assets/backend/img/<?= $row['gambar_profil'] ?>" width="100%" alt="">
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="card-footer">
                    <a href="index.php?page=profil/data_profil" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>