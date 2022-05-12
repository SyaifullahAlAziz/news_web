<?php

$query = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE slug='" . $_GET['slug'] . "' ");
$query2 = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota=2");
$anggota = mysqli_fetch_array($query2);

?>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="#">Home</a></li>
            <li><a href="#">Detail Berita</a></li>
        </ol>
        <h2>Detail Berita</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
    <?php
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="assets/backend/img/<?= $data['gambar_berita'] ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html"><?= $data['judul_berita'] ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $anggota['nama_anggota'] ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= $data['tanggal_berita'] ?></time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <?= $data['isi_berita'] ?>
                        </div>

                    </article><!-- End blog entry -->



                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <?php
                        $query = mysqli_query($koneksi, "SELECT *, (SELECT count(*) FROM tb_berita 
                        WHERE id_kategori=tb_kategori.id_kategori) 
                        as jumlah_kiriman FROM tb_kategori");
                        ?>

                        <h3 class="sidebar-title">Kategori</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <li>
                                        <a href="jenis-berita-<?= $row['judul_kategori'] ?>"><?= $row['judul_kategori'] ?> <span>(<?= $row['jumlah_kiriman'] ?>)</span></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 5");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <div class="post-item clearfix">
                                    <img src="assets/backend/img/<?= $row['gambar_berita'] ?>" alt="">
                                    <h4><a href="detailberita-<?= $row['slug']; ?>"><?= $row['judul_berita'] ?></a></h4>
                                    <time datetime="2020-01-01"><?= $row['tanggal_berita'] ?></time>
                                </div>
                            <?php } ?>

                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    <?php } ?>
</section><!-- End Blog Single Section -->