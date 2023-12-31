<?php 
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Direktur Perusahaan <?php $perusahaan['nama_perusahaan'] ?></h3>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Nik</th>
							<th>No HP</th>
							<th>Alamat</th>
							<th>Foto</th>
							<th>Aksi</th>
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
								<td>
									<a href="<?php echo base_url("admin/direktur/ubah_direktur/$value[id_direktur]") ?>" class="btn-sm btn btn-warning text-white">Ubah</a>
									<a href="<?php echo base_url("admin/direktur/hapus_direktur/$value[id_direktur]"); ?>" class="btn-sm btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<a href="<?php echo base_url("admin/direktur/tambah/$perusahaan[id_perusahaan]"); ?>" class="btn btn-primary">Tambah</a>
			</div>
		</div>
	</div>
</main>

<?php 
include "footer.php";
?>