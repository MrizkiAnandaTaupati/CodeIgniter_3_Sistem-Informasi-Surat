<?php include "header.php"; ?>
<main id="main" class="main">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="mt-3 text-primary">Ubah Perusahaan</h3>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama_perusahaan" required value="<?php echo $perusahaan['nama_perusahaan']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email_perusahaan">
                            <i class="text-danger">*Kosongkan jika tidak ingin mengubah email</i>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">HP Perusahaan</label>
                            <input type="text" class="form-control" name="hp_perusahaan" required value="<?php echo $perusahaan["hp_perusahaan"]; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat_perusahaan" required><?php echo $perusahaan["alamat_perusahaan"]; ?></textarea>
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
<?php include "footer.php"; ?>
