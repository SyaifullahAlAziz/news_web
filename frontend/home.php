  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

      <div class="container" data-aos="zoom-out" data-aos-delay="100">
          <div class="row">
              <div class="col-xl-6">
                  <h1>News Web</h1>
                  <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
                  <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
          </div>
      </div>

  </section><!-- End Hero -->

  <?php
    $query = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY tanggal_berita DESC LIMIT 1 ");
    ?>
  <!-- ======= Tabs Section ======= -->
  <section id="tabs" class="tabs section-bg">
      <div class="container" data-aos="fade-up">

          <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                  <?php
                    while ($berita = mysqli_fetch_array($query)) {
                    ?>
                      <div class="row">
                          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                              <h3><?= $berita['judul_berita'] ?></h3>
                              <p>
                                  <?= substr($berita['isi_berita'], 0, 200) ?>
                              </p>
                              <a class="btn" style="background-color: #86c6f4;" href="detailberita-<?= $berita['slug']; ?>">Selengkapnya</a>
                          </div>

                          <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-in" data-aos-delay="2000">
                              <img style="border-radius: 50%;" src="assets/backend/img/<?= $berita['gambar_berita'] ?>" alt="" class="img-fluid">
                          </div>

                      </div>
                  <?php } ?>
              </div>
          </div>

      </div>
  </section>
  <!-- End Tabs Section -->

  <?php
    $query = mysqli_query($koneksi, "SELECT * FROM tb_profil");
    $data = mysqli_fetch_array($query);
    ?>
  <!-- ======= Tabs Section ======= -->
  <section id="tabs" class="tabs section-bg">
      <div class="container" data-aos="fade-up">

          <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                      <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-5" data-aos="fade-up" data-aos-delay="100">
                          <h3><?= $data['judul_profil'] ?></h3>
                          <p>
                              <?= $data['isi_profil'] ?>
                          </p>
                      </div>
                      <div class="col-lg-6 order-1 order-lg-2 mt-lg-5 text-center" data-aos="flip-left" data-aos-delay="3000">
                          <img src="assets/backend/img/<?= $data['gambar_profil'] ?>" alt="" class="img-fluid">
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </section>
  <!-- End Tabs Section -->

  <?php
    $query = mysqli_query($koneksi, "SELECT * FROM tb_keunggulan");
    ?>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg ">

      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Keunggulan</h2>
          </div>


          <div class="row">
              <?php
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <div class="col-md-6">
                      <div class="icon-box" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
                          <i class="<?= $data['icon'] ?>"></i>
                          <h4><a href="#"><?= $data['judul_keunggulan'] ?></a></h4>
                          <p><?= $data['isi_keunggulan'] ?></p>
                      </div>
                  </div>
              <?php } ?>
          </div>


      </div>

  </section>
  <!-- End Services Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact" style="margin-top: 25px;">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Hubungi Kami</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">

              <div class="col-lg-12">

                  <div class="row">
                      <div class="col-md-12">
                          <div class="info-box">
                              <i class="bx bx-map"></i>
                              <h3>Alamat</h3>
                              <p>Jl. Dr. Sutomo No.151 B</p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="info-box mt-4">
                              <i class="bx bx-envelope"></i>
                              <h3>Email</h3>
                              <p>newsweb@gmail.com</p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="info-box mt-4">
                              <i class="bx bx-phone-call"></i>
                              <h3>Telepon</h3>
                              <p>+62 895 3242 47800</p>
                          </div>
                      </div>
                  </div>

              </div>

          </div>

      </div>
  </section><!-- End Contact Section -->