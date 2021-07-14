
<div class="col-xs-12">
<div class="box">
<div class="box-header">
    <h3 class="box-title">Data Lokasi</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <a href="?page=lokasi/form_lokasi.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lokasi</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once 'include/koneksi.php';
                $fkl = "SELECT * FROM lokasi";
                $mysql = $db -> query($fkl);

                if($mysql ->num_rows > 0 ){
                    $no=1;
                    while ($ambil = $mysql -> fetch_assoc()) {
                        $id_lokasi = $ambil['id_lokasi'];
                        $nama_lokasi = $ambil['nama_lokasi'];
                        $alamat = $ambil['alamat'];
                        $keterangan = $ambil['keterangan'];
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $nama_lokasi;?></td>
                <td><?php echo $alamat;?></td>
                <td><?php echo $keterangan;?></td>
                <td>
                    <a href="?page=lokasi/edit.php&id=<?php echo $id_lokasi; ?>" class="btn btn-facebook">Edit</a>
                    <a href="?page=lokasi/hapus.php&id=<?php echo $id_lokasi; ?>" class="btn btn-facebook">Hapus</a>
                </td>
            </tr>
            <?php 
                }} else {
                    echo "Data Kosong";
                }
            ?>
        </tbody>
    </table>
</div>
<!-- /.box-body -->
</div>
</div>