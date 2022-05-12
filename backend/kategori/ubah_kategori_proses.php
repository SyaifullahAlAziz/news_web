<?php
include "../koneksi.php";
if ($_POST) {
    $id_kategori = $_POST['id_kategori'];
    $judul_kategori = $_POST['judul_kategori'];

    $query = mysqli_query($koneksi, "UPDATE tb_kategori SET judul_kategori='$judul_kategori' 
    WHERE id_kategori ='$id_kategori'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=kategori/data_kategori';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=kategori/ubah_kategori';</script>";
    }
}
