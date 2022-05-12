<?php

session_start();

if (!isset($_SESSION['id_admin'])) {
    echo "<script>alert('Harap Login Terlebih Dahulu');
    window.location='login.php'
    </script>";
}

include "koneksi.php";
include "component/header.php";
include "component/sidebar.php";
include "content.php";
include "component/footer.php";
