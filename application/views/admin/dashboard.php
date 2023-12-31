  <?php 
  //memanggil file header.php
  include "header.php";
  ?>
  <?php if ($this->session->flashdata('login_success')) : ?>
    <script>
      alert('Login Berhasil');
    </script>
  <?php endif; ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <div class="card shadow">
          <div class="card-body">
            <p class="mt-4">Selamat Datang <b><?php echo $_SESSION["admin"] ["nama_admin"]; ?></b> Pada panel ini anda dapat mengelola tanggapan dari surat yang di upload oleh operator serta anda dapat melihat data surat , operator , perusahaan.</p>
          </div>
        </div>

  </main><!-- End #main -->

  <?php 
  include "footer.php";
?>