<?php
include "../koneksi.php";
$id_profil = $_GET['id_profil'];
$query = mysqli_query($koneksi, "DELETE FROM tb_profil WHERE id_profil ='$id_profil'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=profil/data_profil';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=profil/data_profil';</script>";
}
