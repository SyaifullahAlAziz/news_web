<?php

if (isset($_GET['kategori'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori 
    WHERE tb_kategori.judul_kategori='$_GET[kategori]' ORDER BY tb_berita.id_berita ASC");
} else {
    $query = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita ASC");
}

$query2 = mysqli_query($koneksi, "SELECT * FROM tb_anggota WHERE id_anggota=2");
$anggota = mysqli_fetch_array($query2);

?>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="#">Home</a></li>
            <li>Berita</li>
        </ol>
        <h2>Blog</h2>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->

<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <?php
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <article class="entry">

                        <div class="entry-img">
                            <img src="assets/backend/img/<?= $data['gambar_berita']; ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="detailberita-<?= $data['slug']; ?>"><?= $data['judul_berita']; ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $anggota['nama_anggota'] ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= $data['tanggal_berita'] ?></time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                <?= substr($data['isi_berita'], 0, 450) ?>
                            </p>
                            <div class="read-more">
                                <a href="index.php?page=berita&slug=<?= $data['slug']; ?>">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                <?php } ?>

                <div class="blog-pagination">
                    <?php
                    for ($x = 1; $x <= $total_halaman; $x++) {
                    ?>
                        <ul class="justify-content-center">
                            <li class="active"><a href="index.php?page=berita=<?= $x; ?>"><?= $x; ?></a></li>
                        </ul>
                    <?php } ?>
                </div>


            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Kategori</h3>
                    <div class="sidebar-item categories">
                        <?php
                        $query = mysqli_query($koneksi, "SELECT *, (SELECT count(*) FROM tb_berita 
                        WHERE id_kategori=tb_kategori.id_kategori) 
                        as jumlah_kiriman FROM tb_kategori");
                        ?>

                        <ul>
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <li>
                                    <a href="index.php?page=berita&kategori=<?= $row['judul_kategori'] ?>"><?= $row['judul_kategori'] ?> <span>(<?= $row['jumlah_kiriman'] ?>)</span></a>
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
                                <h4><a href="index.php?page=detail_berita&slug=<?= $row['slug']; ?>"><?= $row['judul_berita'] ?></a></h4>
                                <time datetime="2020-01-01"><?= $row['tanggal_berita'] ?></time>
                            </div>
                        <?php } ?>

                    </div><!-- End sidebar recent posts-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->


        </div>

    </div>
</section><!-- End Blog Section -->