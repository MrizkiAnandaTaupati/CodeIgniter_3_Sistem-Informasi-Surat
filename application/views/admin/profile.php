<?php 
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Profile</h3>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<form method="post">
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" name="username_admin" value="<?php echo $_SESSION["admin"] ["username_admin"] ?>" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" name="password_admin">
							<i class="text-muted">*Kosongkan jika tidak ingin mengubah password</i>
						</div>
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input type="text" value="<?php echo $_SESSION["admin"] ["nama_admin"] ?>" class="form-control" name="nama_admin" required	>
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