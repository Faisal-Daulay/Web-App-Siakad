
<form action="?page=lokasi/edit_pro.php" method="post">
    <?php
        require_once 'include/koneksi.php';
        $id = $_REQUEST['id'];
        $fkl = "SELECT * FROM lokasi WHERE id_lokasi = '$id' ";
        $mysql = $db -> query($fkl);
        $no=1;
        while ($ambil = $mysql -> fetch_assoc()) {
            $id_lokasi = $ambil['id_lokasi'];
            $nama_lokasi = $ambil['nama_lokasi'];
            $alamat = $ambil['alamat'];
            $keterangan = $ambil['keterangan'];
    ?>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Lokasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <input type="hidden" class="form-control" value="<?php echo $id_lokasi; ?>" name="id_lokasi">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lokasi</label>
                    <input type="text" class="form-control" value="<?php echo $nama_lokasi; ?>" name="nama_lokasi">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $alamat; ?>" name="alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" class="form-control" value="<?php echo $keterangan; ?>" name="keterangan">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
        <?php } ?>
</form>