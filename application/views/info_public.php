<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/home/img/favicon.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/home/img/apple-touch-icon.png') ?>" rel="icon">

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
        <h1><a href="#intro" class="scrollto">BizPage</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="menu-active"><a href="#services">Info Public</a></li>
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

  <main id="main">

  

   <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Info Public</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>

        <div class="row about-cols">

		<div class="card-body">
		<div class="section-title text-center">
                            <table id="datatable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama LSP</th>
                                        <th>canhut</th>
                                        <th>binahut</th>
                                        <th>kapis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>6457</td>
                                        <td>456</td>
                                        <td>45</td>
                                        <td>456</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        </div>
      </div>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>BizPage</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
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
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
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
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
      </div>
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
