<?php 
include "header.php";
 ?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Ubah Direktur</h3>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<form method="post" enctype="multipart/form-data">
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" name="username_direktur" required value="<?php echo $direktur['username_direktur']; ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" name="password_direktur">
							<i class="text-danger">*Kosongkan jika tidak ingin mengubah password</i>
						</div>
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" class="form-control" name="nama_direktur" required value="<?php echo $direktur["nama_direktur"]; ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Nik</label>
							<input type="text" class="form-control" name="nik_direktur" required value="<?php echo $direktur["nik_direktur"]; ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">No HP</label>
							<input type="text" class="form-control" name="hp_direktur" required value="<?php echo $direktur["hp_direktur"] ?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<textarea class="form-control" name="alamat_direktur" required><?php echo $direktur["alamat_direktur"]; ?></textarea>
						</div>
						<div class="mb-3">
							<label class="form-label">Foto</label>
							<img src="<?php echo base_url("assets/img/".$direktur['foto_direktur']); ?>" width="100">
							<input type="file" class="form-control" name="foto_direktur">
						</div>
						<div class="mb-3">
							<button class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>
<?php 
include "footer.php";
 ?>