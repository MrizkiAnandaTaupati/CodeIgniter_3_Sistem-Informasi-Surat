<?php
include "header.php";
?>
<?php if ($this->session->flashdata('login_success')) : ?>
    <script>
        alert('Login Berhasil')
    </script>
<?php endif; ?>
 <main id="main" class="main"> 
    <div class="card shadow">
        <div class="card-body">
            <p class="mt-3">
                Selamat Datang <strong><?php echo $_SESSION["operator"] ["nama_operator"] ?></strong> <br>
                Di SISTEM IMFORMASI VERFIKASI DOKUMEN SIPUHH
            </p>
        </div>
    </div>
 </main>
<?php
include "footer.php";
?>