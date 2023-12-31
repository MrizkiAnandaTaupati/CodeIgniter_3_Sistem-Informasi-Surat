
<?php include "header.php"; ?>
<main id="main" class="main">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="mt-3 text-primary">Surat Perusahaan</h3>
            <hr>
            <form method="post">
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="id_surat" value="<?php echo $surat['id_surat']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Surat</label>
                    <input type="text" class="form-control" name="nama_surat" value="<?php echo $surat['nama_surat']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">File Surat</label>
                    <br>
                    <a href="<?php echo base_url("assets/surat/".$surat['file_surat']) ?>" class="fw-bold">
                        <span class="bi bi-envelope"><?php echo $surat['file_surat']; ?></span>
                    </a>
                </div>
                <hr>
                <div class="mb-3">
                    <label class="form-label">Status Surat</label>
                    <select class="form-control" name="status_surat">
                        <option value="pending" <?php if($surat['status_surat']=="pending"){echo "selected";} ?>  >Pending</option>
                        <option value="disetujui" <?php if($surat['status_surat']=="disetujui"){echo "selected";} ?>  >Disetujui</option>
                        <option value="ditolak" <?php if($surat['status_surat']=="ditolak"){echo "selected";} ?>  >Ditolak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Catatan</label>
                    <textarea class="form-control" name="catatan_surat"><?php echo $surat['catatan_surat'] ?></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include "footer.php"; ?>
