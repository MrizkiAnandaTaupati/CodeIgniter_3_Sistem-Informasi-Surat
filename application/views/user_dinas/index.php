<?php
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<p class="mt-4">Selamat Datang <b><?php echo $_SESSION["user_dinas"] ["nama_user_dinas"]; ?></b> Pada panel ini anda dapat mengelola tanggapan dari surat yang di upload oleh operator serta anda dapat melihat data surat , operator , perusahaan.</p>
		</div>
    </div>
 </div>
</div>		
</main>
<?php
include "footer.php";
?>