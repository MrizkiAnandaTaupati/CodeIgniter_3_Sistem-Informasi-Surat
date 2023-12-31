<?php include "header.php"; ?>
<main id="main" class="main">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="mt-3 text-primary">Surat Perusahaan</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="lorem">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Operator</th>
                            <th>Surat</th>
                            <th>File</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($surat as $key => $value): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value["nama_operator"]; ?></td>
                                <td><?php echo $value["nama_surat"]; ?></td>
                                <td>
                                    <a href="<?php echo base_url("assets/surat/".$value['file_surat']); ?>"><?php echo $value['file_surat']; ?></a>
                                </td>
                                <td><?php echo date("d-M-Y / H:i:s",strtotime($value["tanggal_upload"])); ?></td>
                                <td><?php echo $value['status_surat']; ?></td>
                                <td>
                                   <?php if ($value['status_surat']=="disetujui"): ?>
                                    <a class="btn btn-primary" href="<?php echo base_url("user_dinas/perusahaan/validasi_surat/".$value['id_surat']."/".$value['id_perusahaan']); ?>">
                                        Validasi
                                    </a>
                                <?php else: ?>
                                    <?php if ($value['status_surat']=="ditolak"): ?>
                                        <a class="btn btn-danger" href="<?php echo base_url("user_dinas/perusahaan/validasi_surat/".$value['id_surat']."/".$value['id_perusahaan']); ?>">
                                            Validasi
                                        </a>
                                    <?php else: ?>
                                        <?php if ($value['status_surat']=="pending"): ?>
                                            <a class="btn btn-success" href="<?php echo base_url("user_dinas/perusahaan/validasi_surat/".$value['id_surat']."/".$value['id_perusahaan']); ?>">
                                                Validasi
                                            </a>
                                        <?php endif ?>
                                    <?php endif ?>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
<?php include "footer.php"; ?>
