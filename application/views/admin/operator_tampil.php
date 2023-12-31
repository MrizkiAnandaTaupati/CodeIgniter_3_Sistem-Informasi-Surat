<?php
include "header.php";
?>
<main id="main" class="main">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="mt-3 text-primary">Operator</h3>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="lorem">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Perusahaan</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($operator as $key => $value): ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value["nama_perusahaan"]; ?></td>
                                <td><?php echo $value["username_operator"]; ?></td>
                                <td><?php echo $value["nama_operator"]; ?></td>
                                <td><?php echo $value["nik_operator"]; ?></td>
                                <td><?php echo $value["hp_operator"]; ?></td>
                                <td><?php echo $value["alamat_operator"]; ?></td>
                                <td><?php echo $value["email_operator"]; ?></td>
                                <td>
                                    <a href="<?php echo base_url("admin/operator/ubah/".$value["id_operator"]) ?>" class="btn-sm btn btn-warning text-white">Ubah</a>
                                    <a href="<?php echo base_url("admin/operator/hapus/".$value["id_operator"]) ?>" class="btn-sm btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="<?php echo base_url("admin/operator/tambah"); ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
</main>


<?php
include "footer.php";
?>