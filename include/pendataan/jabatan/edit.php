<form action="?page=pendataan/jabatan/edit_pro.php" method="post">
    <?php
    require_once 'include/koneksi.php';
    $id = $_REQUEST['id'];
    $fkl = "SELECT * FROM jabatan WHERE id_jabatan = '$id' ";
    $mysql = $db->query($fkl);
    $no = 1;
    while ($ambil = $mysql->fetch_assoc()) {
        $id_jabatan = $ambil['id_jabatan'];
        $nama_jabatan = $ambil['nama_jabatan'];
        $keterangan = $ambil['keterangan'];
        $ekuivalensi_sks = $ambil['ekuivalensi_sks'];

        ?>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Jabatan</label>
                    <input type="hidden" class="form-control" value="<?php echo $id_jabatan; ?>" name="id">
                    <input type="text" class="form-control" value="<?php echo $nama_jabatan; ?>" name="nama_jabatan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" class="form-control" value="<?php echo $keterangan; ?>" name="keterangan">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Ekuivalensi SKS</label>
                    <input type="text" class="form-control" value="<?php echo $ekuivalensi_sks; ?>" name="ekuivalensi_sks">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
    <?php 
} ?>
</form> 