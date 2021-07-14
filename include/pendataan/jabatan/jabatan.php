<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Jabatan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a href="?page=pendataan/jabatan/form_jabatan.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jabatan</th>
                        <th>Keterangan</th>
                        <th>Ekuivalensi SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'include/koneksi.php';
                    $fkl = "SELECT * FROM jabatan";
                    $mysql = $db->query($fkl);

                    if ($mysql->num_rows > 0) {
                        $no = 1;
                        while ($ambil = $mysql->fetch_assoc()) {
                            $id_jabatan = $ambil['id_jabatan'];
                            $nama_jabatan = $ambil['nama_jabatan'];
                            $keterangan = $ambil['keterangan'];
                            $ekuivalensi_sks = $ambil['ekuivalensi_sks'];
                            ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $nama_jabatan; ?>
                        </td>
                        <td>
                            <?php echo $keterangan; ?>
                        </td>
                        <td>
                            <?php echo $ekuivalensi_sks; ?>
                        </td>
                        <td>
                            <a href="?page=pendataan/jabatan/edit.php&id=<?php echo $id_jabatan; ?>" class="btn btn-facebook">Edit</a>
                            <a href="?page=pendataan/jabatan/hapus.php&id=<?php echo $id_jabatan; ?>" class="btn btn-facebook">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                }
            } else {
                echo "Data Kosong";
            }
            ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div> 