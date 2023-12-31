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
                                
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
</main>


<?php
include "footer.php";
?>