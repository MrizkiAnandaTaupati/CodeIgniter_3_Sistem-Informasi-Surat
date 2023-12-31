<?php 
include "header.php";
 ?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Tambah Direktur</h3>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<form method="post" enctype="multipart/form-data">
						<div class= "mb-3">
							<label class="from-label">Perusahaan</label>
							<select class="from-control" name="id_perusahaan">
								<option value="<?php echo $perusahaan["id_perusahaan"]?>"><?php echo $perusahaan["nama_perusahaan"] ?></option>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" name="username_direktur">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" name="password_direktur">
						</div>
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" class="form-control" name="nama_direktur">
						</div>
						<div class="mb-3">
							<label class="form-label">Nik</label>
							<input type="text" class="form-control" name="nik_direktur">
						</div>
						<div class="mb-3">
							<label class="form-label">No HP</label>
							<input type="text" class="form-control" name="hp_direktur">
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<textarea class="form-control" name="alamat_direktur"></textarea>
						</div>
						<div class="mb-3">
							<label class="form-label">Foto</label>
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