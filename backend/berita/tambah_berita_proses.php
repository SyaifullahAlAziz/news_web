<?php
include "../koneksi.php";
if ($_POST) {
    $id_kategori = $_POST['id_kategori'];
    $judul_berita = $_POST['judul_berita'];
    $tanggal_berita = $_POST['tanggal_berita'];
    $isi_berita = $_POST['isi_berita'];
    $slug = str_replace('+', '-', urlencode($judul_berita));

    // ambil data file
    $namafile = $_FILES['gambar_berita']['name'];
    $namaSementara = $_FILES['gambar_berita']['tmp_name'];
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, '../../assets/backend/img/' . $namafile);

    $query = mysqli_query($koneksi, "INSERT INTO tb_berita(id_kategori,judul_berita,slug,tanggal_berita,isi_berita,gambar_berita) 
    VALUES ('$id_kategori', '$judul_berita', '$slug', '$tanggal_berita', '$isi_berita', '$namafile')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=berita/data_berita';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=berita/tambah_berita';</script>";
    }
}
