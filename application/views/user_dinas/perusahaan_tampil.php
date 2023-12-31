<?php
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Perusahaan</h3>
			<hr>
            <div class="table-responsive">
            <table class="table table-bordered table-hover" id="lorem">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Direktur</th>
                        <th>Npwp</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($perusahaan as $key => $value): ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value["nama_perusahaan"]; ?></td>
                            <td><?php echo $value["nama_direktur"]; ?></td>
                            <td><?php echo $value["npwp_perusahaan"]; ?></td>
                            <td><?php echo $value["email_perusahaan"]; ?></td>
                            <td><?php echo $value["hp_perusahaan"]; ?></td>
                            <td><?php echo $value["alamat_perusahaan"]; ?></td>
                            <td>
                                <a href="<?php echo base_url("user_dinas/perusahaan/surat_perusahaan/$value[id_perusahaan]")?>" class="btn-sm btn btn-info text-white mb-3">Surat</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
            </div>
            
        </div>
    </div>
 </div>
</div>		
</main>


<?php
include "footer.php";
?>
