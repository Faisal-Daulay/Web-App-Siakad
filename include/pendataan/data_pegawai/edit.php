<form action="?page=pendataan/data_pegawai/edit_pro.php" method="post">
    <?php
    require_once 'include/koneksi.php';
    $id = $_REQUEST['id'];
    $fkl = "SELECT * FROM data_pegawai WHERE id_pegawai = '$id' ";
    $mysql = $db->query($fkl);
    $no = 1;
    while ($ambil = $mysql->fetch_assoc()) {
        $id_pegawai = $ambil['id_pegawai'];
        $nip = $ambil['nip'];
        $nip_baru = $ambil['nip_baru'];
        $no_ktp = $ambil['no_ktp'];
        $nama = $ambil['nama'];
        $mulai_tgl = $ambil['mulai_tgl'];
        $status_pgw = $ambil['status_pgw'];
        $status_sertifikat = $ambil['status_sertifikat'];
        $upload = $ambil['upload'];
        $pendidikan_akhir = $ambil['pendidikan_akhir'];
        $jns_tng_pendidikan = $ambil['jns_tng_pendidikan'];
        $status_perkawinan = $ambil['status_perkawinan'];
        $jk = $ambil['jk'];
        $bahasa = $ambil['bahasa'];
        $email = $ambil['email'];
        $agama = $ambil['agama'];
        $alamat = $ambil['alamat'];
        $tmp_lahir = $ambil['tmp_lahir'];
        $tgl_lahir = $ambil['tgl_lahir'];
        $hobi = $ambil['hobi'];
        $telp = $ambil['telp'];
        $bank = $ambil['bank'];
        $no_rek = $ambil['no_rek'];
        $karis = $ambil['karis'];
        $askes = $ambil['askes'];
        $taspen = $ambil['taspen'];
        $karpeg = $ambil['karpeg'];
        $npwp = $ambil['npwp'];

        ?>
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                    <input type="hidden" class="form-control" value="<?php echo $id_pegawai; ?>" name="id">
                    <input type="text" class="form-control" value="<?php echo $nip; ?>" name="nip">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">NIP BARU</label>
                    <input type="text" class="form-control" value="<?php echo $nip_baru; ?>" name="nip_baru">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">NO. KTP</label>
                    <input type="text" class="form-control" value="<?php echo $no_ktp; ?>" name="no_ktp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Terhitung Mulai Tanggal</label>
                    <input type="date" class="form-control" value="<?php echo $mulai_tgl; ?>" name="mulai_tgl">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status Pegawai</label>
                    <input type="text" class="form-control" value="<?php echo $status_pgw; ?>" name="status_pgw">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status Sertifikat</label>
                    <input type="text" class="form-control" value="<?php echo $status_sertifikat; ?>" name="status_sertifikat">
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Upload</label>
                    <input type="text" class="form-control" value="<?php echo $upload; ?>" name="upload">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" value="<?php echo $pendidikan_akhir; ?>" name="pendidikan_akhir">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Tenaga Pendidikan</label>
                    <input type="text" class="form-control" value="<?php echo $jns_tng_pendidikan; ?>" name="jns_tng_pendidikan">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Status Perkawinan</label>
                    <input type="text" class="form-control" value="<?php echo $status_perkawinan; ?>" name="status_perkawinan">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="<?php echo $jk; ?>" name="jk">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Bahasa</label>
                    <input type="text" class="form-control" value="<?php echo $bahasa; ?>" name="bahasa">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <input type="text" class="form-control" value="<?php echo $agama; ?>" name="agama">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" value="<?php echo $alamat; ?>" name="alamat">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" value="<?php echo $tmp_lahir; ?>" name="tmp_lahir">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="text" class="form-control" value="<?php echo $tgl_lahir; ?>" name="tgl_lahir">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Hobi</label>
                    <input type="text" class="form-control" value="<?php echo $hobi; ?>" name="hobi">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon</label>
                    <input type="text" class="form-control" value="<?php echo $telp; ?>" name="telp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Bank</label>
                    <input type="text" class="form-control" value="<?php echo $bank; ?>" name="bank">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">No. Rekening</label>
                    <input type="text" class="form-control" value="<?php echo $no_rek; ?>" name="no_rek">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">KARIS</label>
                    <input type="text" class="form-control" value="<?php echo $karis; ?>" name="karis">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">ASKES</label>
                    <input type="text" class="form-control" value="<?php echo $askes; ?>" name="askes">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">TASPEN</label>
                    <input type="text" class="form-control" value="<?php echo $taspen; ?>" name="taspen">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">KARPEG</label>
                    <input type="text" class="form-control" value="<?php echo $karpeg; ?>" name="karpeg">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">NPWP</label>
                    <input type="text" class="form-control" value="<?php echo $npwp; ?>" name="npwp">
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