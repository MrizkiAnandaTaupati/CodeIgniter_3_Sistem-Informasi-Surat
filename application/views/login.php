<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIVERI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/home/img/g.jpeg') ?>" rel="icon">
  <link href="<?php echo base_url('assets/home/img/g.jpeg') ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/quill/quill.snow.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/quill/quill.bubble.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/remixicon/remixicon.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/simple-datatables/style.css") ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url("assets/css/style.css") ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background:#e9EFE5;">
  <?php if ($this->session->flashdata('login_fail')) : ?>
    <script>
      alert('Login Gagal');
    </script>
  <?php endif; ?>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3" style="Background:#1e704b:">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4" style="color:#18d26e;">Dinas Kehutanan Prov Papua</h5>
                    <p class="text-center small">Masukkan Username dan Password anda untuk login!</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post">
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" name="username_login">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password_login">
                    </div>              
                    <div class="col-12">
                      <button class="btn btn-transparent text-white fw-bold w-100" style="background: #18d26e;">Login</button>
                      <a class="btn btn-danger text-white fw-bold w-100 mt-3" href="<?php echo base_url("Dashboard/") ?>">Kembali Ke Halaman Utama</a>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url("assets/vendor/apexcharts/apexcharts.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?php echo base_url("assets/vendor/chart.js/chart.umd.js") ?>"></script>
  <script src="<?php echo base_url("assets/vendor/echarts/echarts.min.js") ?>"></script>
  <script src="<?php echo base_url("assets/vendor/quill/quill.min.js") ?>"></script>
  <script src="<?php echo base_url("assets/vendor/simple-datatables/simple-datatables.js") ?>"></script>
  <script src="<?php echo base_url("assets/vendor/tinymce/tinymce.min.js") ?>"></script>
  <script src="<?php echo base_url("assets/vendor/php-email-form/validate.js") ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url("assets/js/main.js") ?>"></script>

</body>

</html>