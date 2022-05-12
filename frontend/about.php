 <?php
    $query = mysqli_query($koneksi, "SELECT * FROM tb_profil");
    $data = mysqli_fetch_array($query);
    ?>

 <!-- ======= Tabs Section ======= -->
 <section id="tabs" class="tabs">
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
                     <div class="col-lg-6 order-1 order-lg-2 mt-lg-5 text-center" data-aos="fade-up" data-aos-delay="200">
                         <img src="assets/backend/img/<?= $data['gambar_profil'] ?>" alt="" class="img-fluid">
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section><!-- End Tabs Section -->

 <!-- ======= Team Section ======= -->
 <?php
    $query = mysqli_query($koneksi, "SELECT * FROM tb_anggota;");

    ?>
 <section id="team" class="team section-bg">
     <div class="container" data-aos="fade-up">

         <div class="section-title">
             <h2>Anggota</h2>
         </div>

         <?php
            while ($tim = mysqli_fetch_array($query)) {
            ?>

             <div class="row">

                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/backend/img/<?= $tim['gambar_anggota'] ?>" class="img-fluid" alt="">
                             <div class="social">
                                 <a href=""><i class="bi bi-twitter"></i></a>
                                 <a href=""><i class="bi bi-facebook"></i></a>
                                 <a href=""><i class="bi bi-instagram"></i></a>
                                 <a href=""><i class="bi bi-linkedin"></i></a>
                             </div>
                         </div>
                         <div class="member-info">
                             <h4><?= $tim['nama_anggota'] ?></h4>
                             <span style="font-weight:bold;"><?= $tim['jabatan'] ?></span>
                         </div>
                     </div>
                 </div>

             </div>

         <?php } ?>

     </div>
 </section><!-- End Team Section -->