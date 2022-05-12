<?php
include "../koneksi.php";
$id_keunggulan = $_GET['id_keunggulan'];
$query = mysqli_query($koneksi, "DELETE FROM tb_keunggulan WHERE id_keunggulan ='$id_keunggulan'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=keunggulan/data_keunggulan';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=keunggulan/data_keunggulan';</script>";
}
