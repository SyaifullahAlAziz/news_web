<?php
include "../koneksi.php";
if ($_POST) {
    $id_keunggulan = $_POST['id_keunggulan'];
    $judul_keunggulan = $_POST['judul_keunggulan'];
    $icon = $_POST['icon'];
    $isi_keunggulan = $_POST['isi_keunggulan'];

    $query = mysqli_query($koneksi, "UPDATE tb_keunggulan SET judul_keunggulan='$judul_keunggulan',icon='$icon',isi_keunggulan='$isi_keunggulan' 
    WHERE id_keunggulan ='$id_keunggulan'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=keunggulan/data_keunggulan';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=keunggulan/ubah_keunggulan';</script>";
    }
}
