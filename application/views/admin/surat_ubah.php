<?php include "header.php"; ?>
<main id="main" class="main">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="mt-3 text-primary">Ubah Surat</h3>
            <hr>
            <!-- <?php
            echo "<pre>";
            print_r($surat);
            echo"</pre";
            ?> -->
            <div class="row">
                <div class="col-md-6">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Nama Operator</label>
                            <select class="form-control" name="id_operator" required>
                                <option value="<?php echo $surat["id_operator"]; ?>"><?php echo $surat["nama_operator"]; ?></option>
                               
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Surat</label>
                            <input type="text" class="form-control" name="nama_surat" value="<?php echo $surat["nama_surat"]; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">File Surat</label>
                            <div class="ms-3">
                            <a href="<?php echo base_url("assets/surat".$surat["file_surat"]); ?>">
                            <span class="bi bi-filetype-pdf fs-1"></span>
                            <?php echo $surat["nama_surat"];?>
                            </a>
                            </div>
                            <input type="file" class="form-control" name="file_surat">
                        </div>
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
