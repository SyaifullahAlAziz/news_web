<?php
include "../koneksi.php";
if ($_POST) {
    $id_berita = $_POST['id_berita'];
    $id_kategori = $_POST['id_kategori'];
    $judul_berita = $_POST['judul_berita'];
    $tanggal_berita = $_POST['tanggal_berita'];
    $isi_berita = $_POST['isi_berita'];

    if ($_FILES['gambar_berita']['name'] == '') {
        //jika gambar_berita kosong
        $gambar_berita = $_POST['foto_lama'];
    } else {
        //jika gambar_berita diganti (gambar_berita baru)
        // pindahkan file
        $gambar_berita = $_FILES['gambar_berita']['name'];
        $namaSementara = $_FILES['gambar_berita']['tmp_name'];

        //hapus gambar_berita lama
        unlink('../../assets/backend/img/' . $_POST['foto_lama']);
        //pindahkan gambar_berita baru
        $terupload = move_uploaded_file($namaSementara, '../../assets/backend/img/' . $gambar_berita);
    }

    $query = mysqli_query($koneksi, "UPDATE tb_berita SET id_kategori='$id_kategori', judul_berita='$judul_berita',tanggal_berita='$tanggal_berita',isi_berita='$isi_berita',
    gambar_berita='$gambar_berita' 
    WHERE id_berita ='$id_berita'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=berita/data_berita';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=berita/ubah_berita';</script>";
    }
}
