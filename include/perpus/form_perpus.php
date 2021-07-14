<form action="?page=pendataan/skripsi/proses.php" method="post">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Skripsi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mahasiswa</label>
                    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama_mhs">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Pengajuan</label>
                    <input type="text" class="form-control" placeholder="Jenis Pengajuan" name="jns_pengajuan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Akademik</label>
                    <input type="text" class="form-control" placeholder="Tahun Akademik" name="thn_akademik">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Semester</label>
                    <input type="text" class="form-control" placeholder="Semester" name="semester">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" placeholder="Judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Abstrak</label>
                    <input type="text" class="form-control" placeholder="Abstrak" name="abstrak">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Kata Kunci</label>
                    <input type="text" class="form-control" placeholder="Kata Kunci" name="kata_kunci">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">File PDF</label>
                    <input type="text" class="form-control" placeholder="Upload File PDF" name="file_pdf">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">File JPG</label>
                    <input type="text" class="form-control" placeholder="Upload File JPG" name="file_jpg">
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form> 