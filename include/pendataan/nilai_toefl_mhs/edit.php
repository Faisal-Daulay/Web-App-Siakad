<form action="?page=pendataan/nilai_toefl_mhs/edit_pro.php" method="post">
    <?php
    require_once 'include/koneksi.php';
    $id = $_REQUEST['id'];
    $fkl = "SELECT * FROM nilai_toefl_mhs WHERE id_mhs = '$id' ";
    $mysql = $db->query($fkl);
    $no = 1;
    while ($ambil = $mysql->fetch_assoc()) {
        $id_mhs = $ambil['id_mhs'];
        $mhs = $ambil['mhs'];
        $tgl_test = $ambil['tgl_test'];
        $jns_test = $ambil['jns_test'];
        $section1 = $ambil['section1'];
        $section2 = $ambil['section2'];
        $section3 = $ambil['section3'];
        $section4 = $ambil['section4'];

        ?>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Nilai TOEFL Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mahasiswa</label>
                    <input type="hidden" class="form-control" value="<?php echo $id_mhs; ?>" name="id">
                    <input type="text" class="form-control" value="<?php echo $mhs; ?>" name="mhs">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Test</label>
                    <input type="text" class="form-control" value="<?php echo $tgl_test; ?>" name="tgl_test">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Test</label>
                    <select type="text" class="form-control" value="<?php echo $jns_test; ?>" name="jns_test">
                        <option>Jenis Tes</option>
                        <option>TOEFL</option>
                        <option>IELTS</option>
                        <option>TOEIC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 1</label>
                    <input type="text" class="form-control" value="<?php echo $section1; ?>" name="section1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 2</label>
                    <input type="text" class="form-control" value="<?php echo $section2; ?>" name="section2">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 3</label>
                    <input type="text" class="form-control" value="<?php echo $section3; ?>" name="section3">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 4</label>
                    <input type="text" class="form-control" value="<?php echo $section4; ?>" name="section4">
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