<?php 
include "header.php";
?>
<main id="main" class="main">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="mt-3 text-primary">Surat Perusahaan</h3>
			<hr>
			<div class ="table-responsive">
                <table class="table table-bordered table-hover" id="lorem">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Operator</th>
                            <th>Surat</th>
                            <th>Tanggal Upload</th>
                            <th>Catatan Surat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($surat as $key => $value): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value["nama_operator"]; ?></td>
                                <td>
                                    <a href="<?php echo base_url("assets/surat/".$value["file_surat"]); ?>">
                                    <span class="bi bi-filetype-pdf fs-1"></span> <br>
                                    <?php echo $value["nama_surat"]; ?>
                                </a>
                                </td>
                                <td><?php echo date("d M Y",strtotime($value["tanggal_upload"])); ?></td>
                                <td><? echo $value["catatan_surat"]; ?></td>
                                <td><? echo $value["status_surat"]; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/surat/ubah_surat/'.$value['id_surat']."/".$id_perusahaan) ?>" class="btn-sm btn btn-warning text-white">Ubah</a>
                                    <a href="<?php echo base_url('admin/surat/hapus_surat/'.$value['id_surat']."/".$id_perusahaan) ?>" class="btn-sm btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus')">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                    </tbody>
                </table>
                <a href=<?php echo base_url("admin/surat/tambah_surat/".$id_perusahaan); ?> class="btn btn-primary">Tambah</a>
            </div>
		<div>
    <div>
</main>

<?php 
include "footer.php";
?>