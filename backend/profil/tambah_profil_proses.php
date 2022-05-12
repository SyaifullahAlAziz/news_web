<?php
include "../koneksi.php";
if ($_POST) {
    $judul_profil = $_POST['judul_profil'];
    $isi_profil = $_POST['isi_profil'];

    // ambil data file
    $namafile = $_FILES['gambar_profil']['name'];
    $namaSementara = $_FILES['gambar_profil']['tmp_name'];
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, '../../assets/backend/img/' . $namafile);

    $query = mysqli_query($koneksi, "INSERT INTO tb_profil(judul_profil,isi_profil,gambar_profil) 
    VALUES ('$judul_profil', '$isi_profil', '$namafile')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=profil/data_profil';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=profil/tambah_profil';</script>";
    }
}
