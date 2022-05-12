<?php
include "../koneksi.php";
if ($_POST) {
    $id_anggota = $_POST['id_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $jabatan = $_POST['jabatan'];

    $query = mysqli_query($koneksi, "UPDATE tb_anggota SET nama_anggota='$nama_anggota',jabatan='$jabatan',gambar_anggota='$gambar_anggota' 
    WHERE id_anggota ='$id_anggota'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=anggota/data_anggota';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=anggota/ubah_anggota';</script>";
    }
}
