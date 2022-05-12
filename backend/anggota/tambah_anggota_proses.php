<?php
include "../koneksi.php";
if ($_POST) {
    $nama_anggota = $_POST['nama_anggota'];
    $jabatan = $_POST['jabatan'];

    // ambil data file
    $namafile = $_FILES['gambar_anggota']['name'];
    $namaSementara = $_FILES['gambar_anggota']['tmp_name'];
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, '../../assets/backend/img/' . $namafile);

    $query = mysqli_query($koneksi, "INSERT INTO tb_anggota(nama_anggota,jabatan,gambar_anggota) 
    VALUES ('$nama_anggota','$jabatan','$namafile')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=anggota/data_anggota';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=anggota/tambah_anggota';</script>";
    }
}
