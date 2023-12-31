<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SIVERI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/home/img/g.jpeg') ?>" rel="icon">
  <link href="<?php echo base_url('assets/home/img/g.jpeg') ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/home/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/home/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/animate/animate.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/lib/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/home/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
  </head>

  <body>

  <!--==========================
    Header
    ============================-->
    <header id="header">
      <div class="container-fluid">

        <div id="logo" class="pull-left">
          <h1><a href="#intro" class="scrollto">SIVERI</a></h1>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#intro">Home</a></li>
            <li><a href="#portfolio">Gambar</a></li>
            <li><a href="#facts">Data</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
            <li class="menu-has-children"><a href="">Panduan</a>
              <ul>
                <li><a href="<?php echo base_url('assets/panduan/lsp.pdf') ?>">LSP</a></li>
                <li><a href="#">Pemegang Izin</a></li>
                <li><a href="#">Ganisph</a></li>
                <li><a href="#">Lupas Password</a></li>
              </ul>
            </li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->

  <!--==========================
    Intro Section
    ============================-->
    <section id="intro">
      <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

          <ol class="carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url('assets/home/img/intro-carousel/hutan.jpeg');">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>Selamat Datang Di Aplikasi Verifikasi Dokumen</h2>
                  <p>
                  Aplikasi Sistem Informasi Verifikasi Dokumen di Dinas Kehutanan Provinsi Papua untuk mendukung proses verifikasi dokumen terkait dengan kegiatan industri kehutanan</p>
                  <a href="<?php echo base_url('login'); ?>" class="btn-get-started scrollto">Login</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section><!-- #intro -->

    <main id="main">

    <!--==========================
      Facts Section
      ============================-->
      <section id="facts"  class="wow fadeIn">
        <div class="container">

          <header class="section-header">
            <h3>Data</h3>
            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
          </header>

          <div class="row counters">

            <div class="col-lg-6 col-6 text-center">
              <span data-toggle="counter-up">25</span>
              <p>Provinsi Papua</p>
            </div>

            <div class="col-lg-6 col-6 text-center">
              <span data-toggle="counter-up"><?php echo $perusahaan ?></span>
              <p>Perusahaan Pengguna Aktif</p>
            </div>

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Orang GANISPH Aktif</p>
          </div> -->

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Nomor Register GANISPH Aktif</p>
          </div> -->

        </div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
      ============================-->
      <section id="portfolio"  class="section-bg" >
        <div class="container">

          <header class="section-header">
            <h3 class="section-title">Gambar</h3>
          </header>

          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Hutan</li>
                <li data-filter=".filter-card">Kayu</li>
                <!-- <li data-filter=".filter-web">Gabungan</li> -->
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="assets/home/img/portfolio/a.jpeg" class="img-fluid" alt="">
                  <a href="assets/home/img/portfolio/a.jpeg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Hutan</a></h4>
                  <p>Hutan</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="assets/home/img/portfolio/b.jpeg" class="img-fluid" alt="">
                  <a href="assets/home/img/portfolio/b.jpeg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Hutan</a></h4>
                  <p>Hutan</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <figure>
                  <img src="assets/home/img/portfolio/c.jpeg" class="img-fluid" alt="">
                  <a href="assets/home/img/portfolio/c.jpeg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Hutan</a></h4>
                  <p>Hutan</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="assets/home/img/portfolio/d.jpeg" class="img-fluid" alt="">
                  <a href="assets/home/img/portfolio/d.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Kayu</a></h4>
                  <p>Kayu</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="assets/home/img/portfolio/e.jpeg" class="img-fluid" alt="">
                  <a href="assets/home/img/portfolio/e.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Kayu</a></h4>
                  <p>Kayu</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
              <div class="portfolio-wrap">
                <figure>
                  <img src="assets/home/img/portfolio/f.jpeg" class="img-fluid" alt="">
                  <a href="assets/home/img/portfolio/f.jpeg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </figure>

                <div class="portfolio-info">
                  <h4><a href="#">Kayu</a></h4>
                  <p>Kayu</p>
                </div>
              </div>
            </div>
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Contact Section
      ============================-->
      <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

          <div class="section-header">
            <h3>Kontak</h3>
            <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
          </div>

          <div class="row contact-info">

            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Alamat</h3>
                <address> Jl. Tanjung Ria Base G Jayapura Papua 99771 Indonesia</address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Nomor Telephone</h3>
                <p><a href="tel:+155895548855">+62-967-541222</a></p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">http://dishutlh.papua.go.id/</a></p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- #contact -->

    </main>

  <!--==========================
    Footer
    ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-info">
              <h3>DINAS KEHUTANAN PROVINSI PAPUA</h3>
              <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> -->
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Info Public</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                Jl. Tanjung Ria Base G <br>
                Jayapura Papua 99771<br>
                Indonesia<br>
                <strong>Phone:</strong> +62-967-541222<br>
                <strong>Email:</strong> http://dishutlh.papua.go.id/<br>
              </p>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p> -->
              <form action="" method="post">
                <input type="email" name="email"><input type="submit"  value="Subscribe">
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>DISHUT PROV. PAPUA</strong>. All Rights Reserved
        </div>
      <!-- <div class="credits">
        Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
      </div> -->
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/home/lib/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/jquery/jquery-migrate.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/easing/easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/superfish/hoverIntent.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/superfish/superfish.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/wow/wow.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/waypoints/waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/counterup/counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/isotope/isotope.pkgd.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/lightbox/js/lightbox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/home/lib/touchSwipe/jquery.touchSwipe.min.js') ?>"></script>
  <!-- Contact Form JavaScript File -->
  
  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url('assets/home/js/main.js') ?>"></script>
</body>
</html>
