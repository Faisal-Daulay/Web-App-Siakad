
<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Data Kelompok Asset</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<a href="?page=kelompok_asset/form_kelompok_asset.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelompok Asset</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            require_once 'include/koneksi.php';
            $fkl = "SELECT * FROM kelompok_asset";
            $mysql = $db -> query($fkl);

            if($mysql ->num_rows > 0 ){
                $no=1;
                while ($ambil = $mysql -> fetch_assoc()) {
                    $id_kelompok_asset = $ambil['id_kelompok_asset'];
                    $nama_kelompok_asset= $ambil['nama_kelompok_asset'];
                    $keterangan= $ambil['keterangan'];

        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $nama_kelompok_asset;?></td>
            <td><?php echo $keterangan;?></td>
            <td>
                    <a href="?page=kelompok_asset/edit.php&id=<?php echo $id_kelompok_asset; ?>" class="btn btn-facebook">Edit</a>
                    <a href="?page=kelompok_asset/hapus.php&id=<?php echo $id_kelompok_asset; ?>" class="btn btn-facebook">Hapus</a>
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