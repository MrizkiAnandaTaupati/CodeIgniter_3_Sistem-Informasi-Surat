<?php
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Ubah Operator</h3>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<form method="post">
						<div class="mb-3">
							<label class="form-label">Perusahaan</label>
							<select class="form-control" name="id_perusahaan" required>
								<option>--Pilih Perusahaan--</option>
								<?php foreach ($perusahaan as $key => $value): ?>
									<option value="<?php echo $value["id_perusahaan"]; ?>" <?php if($value["id_perusahaan"]==$operator["id_perusahaan"]){echo "selected";} ?>  ><?php echo $value["nama_perusahaan"]; ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label">Username Operator</label>
							<input type="text" class="form-control" name="username_operator" value="<?php echo $operator["username_operator"]; ?>" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" name="password_operator" required>
							<i class="text-danger">*Kosongkan jika tidak ingin mengubah password</i>
						</div>
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" class="form-control" name="nama_operator" value="<?php echo $operator["nama_operator"] ?>" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Nik</label>
							<input type="text" class="form-control" name="nik_operator" value="<?php echo $operator["nik_operator"] ?>" required>
						</div>
						<div class="mb-3">
							<label class="form-label">No HP</label>
							<input type="text" class="form-control" name="hp_operator" value="<?php echo $operator["hp_operator"] ?>" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Alamat</label>
							<textarea class="form-control" name="alamat_operator" required><?php echo $operator["alamat_operator"]; ?></textarea>
						</div>
						<div class="mb-3">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" name="email_operator" value="<?php echo $operator["email_operator"] ?>" required>
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
