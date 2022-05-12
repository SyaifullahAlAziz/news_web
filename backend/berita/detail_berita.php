<?php
include "koneksi.php";
$id_berita = $_GET['id_berita'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori WHERE id_berita='$id_berita'");
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
                                <b>Judul Kategori</b>
                            </td>
                            <td>
                                : <?php echo $row['judul_kategori']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Judul Berita</b>
                            </td>
                            <td>
                                : <?php echo $row['judul_berita']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Tanggal Berita</b>
                            </td>
                            <td>
                                : <?php echo $row['tanggal_berita']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Isi Berita</b>
                            </td>
                            <td>
                                : <?php echo $row['isi_berita']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Gambar Berita</b>
                            </td>
                            <td>
                                : <img src="../assets/backend/img/<?= $row['gambar_berita'] ?>" width="100%" alt="">
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="card-footer">
                    <a href="index.php?page=berita/data_berita" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>