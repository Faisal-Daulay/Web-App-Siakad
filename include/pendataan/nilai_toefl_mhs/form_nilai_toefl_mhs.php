<form action="?page=pendataan/nilai_toefl_mhs/proses.php" method="post">
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
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="mhs">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Test</label>
                    <input type="date" class="form-control" placeholder="Tanggal Test" name="tgl_test">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Test</label>
                    <select type="text" class="form-control" name="jns_test">
                        <option>Jenis Tes</option>
                        <option>TOEFL</option>
                        <option>IELTS</option>
                        <option>TOEIC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 1</label>
                    <input type="text" class="form-control" placeholder="Section 1" name="section1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 2</label>
                    <input type="text" class="form-control" placeholder="Section 2" name="section2">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 3</label>
                    <input type="text" class="form-control" placeholder="Section 3" name="section3">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Section 4</label>
                    <input type="text" class="form-control" placeholder="Section 4" name="section4">
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form> 