<?php
include "../koneksi.php";
if ($_POST) {
    $judul_keunggulan = $_POST['judul_keunggulan'];
    $icon = $_POST['icon'];
    $isi_keunggulan = $_POST['isi_keunggulan'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_keunggulan(judul_keunggulan,icon,isi_keunggulan) 
    VALUES ('$judul_keunggulan','$icon','$isi_keunggulan')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=keunggulan/data_keunggulan';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=keunggulan/tambah_keunggulan';</script>";
    }
}
