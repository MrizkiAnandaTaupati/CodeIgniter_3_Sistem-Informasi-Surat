<?php 
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Direktur</h3>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="lorem">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Nik</th>
							<th>No HP</th>
							<th>Alamat</th>
							<th>Foto</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($direktur as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value["username_direktur"]; ?></td>
								<td><?php echo $value["nama_direktur"]; ?></td>
								<td><?php echo $value["nik_direktur"]; ?></td>
								<td><?php echo $value["hp_direktur"]; ?></td>
								<td><?php echo $value["alamat_direktur"]; ?></td>
								<td>
									<img src="<?php echo base_url("assets/img/".$value["foto_direktur"]); ?>" width="100">
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>

<?php 
include "footer.php";
?>