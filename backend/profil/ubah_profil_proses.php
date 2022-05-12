<?php
include "../koneksi.php";
if ($_POST) {
    $id_profil = $_POST['id_profil'];
    $judul_profil = $_POST['judul_profil'];
    $isi_profil = $_POST['isi_profil'];

    if ($_FILES['gambar_profil']['name'] == '') {
        //jika gambar_profil kosong
        $gambar_profil = $_POST['foto_lama'];
    } else {
        //jika gambar_profil diganti (gambar_profil baru)
        // pindahkan file
        $gambar_profil = $_FILES['gambar_profil']['name'];
        $namaSementara = $_FILES['gambar_profil']['tmp_name'];

        //hapus gambar_profil lama
        unlink('../../assets/backend/img/' . $_POST['foto_lama']);
        //pindahkan gambar_profil baru
        $terupload = move_uploaded_file($namaSementara, '../../assets/backend/img/' . $gambar_profil);
    }

    $query = mysqli_query($koneksi, "UPDATE tb_profil SET judul_profil='$judul_profil',isi_profil='$isi_profil',gambar_profil='$gambar_profil' 
    WHERE id_profil ='$id_profil'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=profil/data_profil';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=profil/ubah_profil';</script>";
    }
}
