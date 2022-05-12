<?php
include "koneksi.php";
$id_keunggulan = $_GET['id_keunggulan'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_keunggulan WHERE id_keunggulan='$id_keunggulan'");
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
                                <b>Judul Keunggulan</b>
                            </td>
                            <td>
                                : <?php echo $row['judul_keunggulan']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Icon</b>
                            </td>
                            <td>
                                : <?php echo $row['icon']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 150px">
                                <b>Isi Keunggulan</b>
                            </td>
                            <td>
                                : <?php echo $row['isi_keunggulan']; ?>
                            </td>
                        </tr>


                    </tbody>
                </table>
                <div class="card-footer">
                    <a href="index.php?page=keunggulan/data_keunggulan" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>