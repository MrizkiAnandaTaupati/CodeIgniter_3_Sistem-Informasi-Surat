<?php
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Tambah Surat</h3>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<form method="post" enctype="multipart/form-data">
						<div class="mb-3">
							<label class="form-label">Nama Operator</label>
							<select class="form-control" name="id_operator" required>
       			 <option value="<?php echo $_SESSION["operator"] ["id_operator"]; ?>">
           		 <?php echo $_SESSION["operator"] ["nama_operator"]; ?>
        </option>
  
</select>

                            </div>
						<div class="mb-3">
							<label class="form-label">Nama Surat</label>
							<input type="text" class="form-control" name="nama_surat" required>
						</div>
						<div class="mb-3">
							<label class="form-label">File Surat</label>
							<input type="file" class="form-control" name="file_surat"required>
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
