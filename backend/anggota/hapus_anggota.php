<?php
include "../koneksi.php";
$id_anggota = $_GET['id_anggota'];
$query = mysqli_query($koneksi, "DELETE FROM tb_anggota WHERE id_anggota ='$id_anggota'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=anggota/data_anggota';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=anggota/data_anggota';</script>";
}
