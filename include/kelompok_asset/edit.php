
<form action="?page=kelompok_asset/edit_pro.php" method="post">
    <?php
        require_once 'include/koneksi.php';
        $id = $_REQUEST['id'];
        $fkl = "SELECT * FROM kelompok_asset WHERE id_kelompok_asset = '$id' ";
        $mysql = $db -> query($fkl);
        $no=1;
        while ($ambil = $mysql -> fetch_assoc()) {
            $id_kelompok_asset = $ambil['id_kelompok_asset'];
            $nama_kelompok_asset = $ambil['nama_kelompok_asset'];
            $keterangan = $ambil['keterangan'];
    ?>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Kelompok Asset</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <input type="hidden" class="form-control" value="<?php echo $id_kelompok_asset; ?>" name="id_kelompok_asset">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kelompok Asset</label>
                    <input type="text" class="form-control" value="<?php echo $nama_kelompok_asset ?>" name="nama_kelompok_asset">
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