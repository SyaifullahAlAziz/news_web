<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Website Berita</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Logo_Kompasdotcom.png/800px-Logo_Kompasdotcom.png" rel="icon">
    <link href="assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 10px;
            left: 10px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>

    <!-- Template Main CSS File -->
    <link href="assets/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v3.7.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">News Web<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/frontend/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">

                <ul>
                    <li><a class="<?= $_GET['page'] == '' ? 'active' : '' ?>" href="./">Home</a></li>
                    <li><a class="<?= $_GET['page'] == 'about' ? 'active' : '' ?>" href="index.php?page=about">About</a></li>
                    <li class="dropdown"><a class="<?= $_GET['page'] == 'berita' ? 'active' : '' ?>" href="index.php?page=berita">
                            <?= $_GET['page'] == 'hiburan' ? 'active' : '' ?>
                            <?= $_GET['page'] == 'olahraga' ? 'active' : '' ?>
                            <?= $_GET['page'] == 'politik' ? 'active' : '' ?>
                            <?= $_GET['page'] == 'bisnis' ? 'active' : '' ?>
                            <?= $_GET['page'] == 'kuliner' ? 'active' : '' ?>
                            <?= $_GET['page'] == 'populer' ? 'active' : '' ?>
                            <span>Berita</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <li>
                                    <a href="index.php?page=berita&kategori=<?= $row['judul_kategori']  ?>"><?= $row['judul_kategori'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a class="<?= $_GET['page'] == 'keunggulan' ? 'active' : '' ?>" href="index.php?page=keunggulan">Keunggulan</a></li>
                    <li><a class="<?= $_GET['page'] == 'kontak' ? 'active' : '' ?>" href="index.php?page=kontak">Hubungi Kami</a></li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">