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
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                          <i class="<?= $data['icon'] ?>"></i>
                          <h4><a href="#"><?= $data['judul_keunggulan'] ?></a></h4>
                          <p><?= $data['isi_keunggulan'] ?></p>
                      </div>
                  </div>
              <?php } ?>
          </div>


      </div>

  </section><!-- End Services Section -->