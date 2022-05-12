<?php
include "../koneksi.php";
if ($_POST) {
    $judul_kategori = $_POST['judul_kategori'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_kategori(judul_kategori) 
    VALUES ('$judul_kategori')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=kategori/data_kategori';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=kategori/tambah_kategori';</script>";
    }
}
