
<?php
    require_once 'include/koneksi.php';

    $id = $_REQUEST['id'];
    $fkl = "SELECT * FROM matkul WHERE id_matkul='$id'  ";
    $mysql = $db -> query($fkl);

        while ($ambil = $mysql -> fetch_assoc()) {
        $id_matkul = $ambil['id_matkul'];
        $kode = $ambil['kode'];
        $nama = $ambil['nama'];
        $nama_english = $ambil['nama_english'];
        $singkatan = $ambil['singkatan'];
        $sub_matkul = $ambil['sub_matkul'];
        $sks_sub_matkul = $ambil['sks_sub_matkul'];
        $ekstakulikuler = $ambil['ekstakulikuler'];
        $j_matkul = $ambil['j_matkul'];
        $kel_matkul = $ambil['kel_matkul'];
        $matkul_pra = $ambil['matkul_pra'];
        $matkul_umum = $ambil['matkul_umum'];
        $prodi_lain = $ambil['prodi_lain'];
        $tatap_muka = $ambil['tatap_muka'];
        $praktek = $ambil['praktek'];
        $pk = $ambil['pk'];
        $simulasi = $ambil['simulasi'];
        $uts = $ambil['uts'];
        $uas = $ambil['uas'];
        $sks_tatap_muka = $ambil['sks_tatap_muka'];
        $sks_praktikum = $ambil['sks_praktikum'];
        $sks_kp = $ambil['sks_kp'];
        $sks_simulasi = $ambil['sks_simulasi'];
        $fakultas = $ambil['fakultas'];
        $prodi = $ambil['prodi'];
        $jenjang = $ambil['jenjang'];
        $metode_kuliah = $ambil['metode_kuliah'];
        $ada_sap = $ambil['ada_sap'];
        $ada_silabus = $ambil['ada_silabus'];
        $ada_bahan_ajar = $ambil['ada_bahan_ajar'];
        $ada_acara_praktek = $ambil['ada_acara_praktek'];
        $ada_diktat = $ambil['ada_diktat'];
        $tgl_mulai = $ambil['tgl_mulai'];
        $tgl_akhir = $ambil['tgl_akhir'];
        $keberadaan = $ambil['keberadaan'];
        $keterangan = $ambil['keterangan'];
?>
    <form action="?page=matkul/edit_pro.php" method="post">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Edit Mata Kuliah</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode</label>
                        <input type="hidden" class="form-control" value="<?php echo $id_matkul; ?>"  placeholder="Kode" name="id">
                        <input type="text" class="form-control" value="<?php echo $kode; ?>"  placeholder="Kode" name="kode">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $nama; ?>"  placeholder="Nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama English</label>
                        <input type="text" class="form-control" value="<?php echo $nama_english; ?>"  placeholder="Nama English" name="nama_english">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Singkatan</label>
                        <input type="text" class="form-control" value="<?php echo $singkatan; ?>"  placeholder="Singkatan" name="singkatan">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" values="Merupakan Sub Matakuliah / Modul"  name="sub_matkul">
                        <label for="exampleInputEmail1">Merupakan Sub Matakuliah / Modul</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" values="SKS Sub Matakuliah / Modul"  name="sks_sub_matkul">
                        <label for="exampleInputEmail1">SKS Sub Matakuliah / Modul</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Extrakulikuler"  name="ekstakulikuler">
                        <label for="exampleInputEmail1">Extrakulikuler</label>
                    </div>

                    <div class="form-group">
                        <label>Jenis Matakuliah</label>
                        <select name="j_matkul" class="form-control select2" style="width: 100%;">
                            <option selected="selected" value="jk">Pilih Jenis Matakuliah</option>
                            <option value="wajib">Wajib</option>
                            <option value="wp">Wajib Permintaan</option>
                            <option value="tugas">Tugas Akhir / Skripsi / Tesis / Destinasi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kelompok Matakuliah</label>
                        <select name="kel_matkul" class="form-control select2" style="width: 100%;">
                            <option selected="selected" value="jk">Pilih Jenis Matakuliah</option>
                            <option value="wajib">Wajib</option>
                            <option value="wp">Wajib Permintaan</option>
                            <option value="tugas">Tugas Akhir / Skripsi / Tesis / Destinasi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Merupakan Matakuliah Pra Perkuliahan"  name="matkul_pra">
                        <label for="exampleInputEmail1">Merupakan Matakuliah Pra Perkuliahan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Merupakan Matakuliah untuk Perkuliahan Umum"  name="matkul_umum">
                        <label for="exampleInputEmail1">Merupakan Matakuliah untuk Perkuliahan Umum</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Boleh Diambil Prodi Lain"  name="prodi_lain">
                        <label for="exampleInputEmail1">Boleh Diambil Prodi Lain</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Terdapat Kegiatan Tatap Muka (Diskusi)"  name="tatap_muka">
                        <label for="exampleInputEmail1">Terdapat Kegiatan Tatap Muka (Diskusi)</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Terdapat Kegiatan Praktek Lapangan"  name="pk">
                        <label for="exampleInputEmail1">Terdapat Kegiatan Praktek Lapangan</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Terdapat Kegiatan Praktek"  name="praktek">
                        <label for="exampleInputEmail1">Terdapat Kegiatan Praktek</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Terdapat Kegiatan Simulasi"  name="simulasi">
                        <label for="exampleInputEmail1">Terdapat Kegiatan Simulasi</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Terdapat Ujian Tengah Semester (UTS)"  name="uts">
                        <label for="exampleInputEmail1">Terdapat Ujian Tengah Semester (UTS)</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Terdapat Ujian Akhir Semester (UAS)"  name="uas">
                        <label for="exampleInputEmail1">Terdapat Ujian Akhir Semester (UAS)</label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">SKS Mata Kuliah</label>
                        <input type="text" class="form-control" value="<?php echo $sks_sub_matkul; ?>"  placeholder="SKS Mata Kuliah" name="sks_sub_matkul">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">SKS Tatap Muka (Diskusi)</label>
                        <input type="text" class="form-control" value="<?php echo $tatap_muka; ?>"  placeholder="SKS Tatap Muka (Diskusi)" name="tatap_muka">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">SKS Praktikum</label>
                        <input type="text" class="form-control" value="<?php echo $sks_praktikum; ?>"  placeholder="SKS Praktikum" name="sks_praktikum">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">SKS Praktek Lapangan</label>
                        <input type="text" class="form-control" value="<?php echo $sks_kp; ?>"  placeholder="SKS Praktek Lapangan" name="sks_kp">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">SKS Simulasi</label>
                        <input type="text" class="form-control" value="<?php echo $simulasi; ?>"  placeholder="SKS Simulasi" name="simulasi">
                    </div>

                    <div class="form-group">
                        <label>Fakultas</label>
                        <select name="fakultas" class="form-control select2" style="width: 100%;">
                            <option selected="selected" value="jk">Pilih Fakultas</option>
                            <option value="ekonomi"> Ekonomi</option>
                            <option value="hukum">Hukum </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Prodi</label>
                        <select name="prodi" class="form-control select2" style="width: 100%;">
                            <option selected="selected" value="jk">Pilih Prodi</option>
                            <option value="ekonomi"> Ekonomi</option>
                            <option value="hukum">Hukum </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenjang</label>
                        <input type="text" class="form-control" value="<?php echo $nama; ?>"  placeholder="Jenjang" name="jenjang">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Metode Kuliah</label>
                        <input type="text" class="form-control" value="<?php echo $nama; ?>"  placeholder="Metode Kuliah" name="metode_kuliah">
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Ada Siapa ?"  name="ada_sap">
                        <label for="exampleInputEmail1">Ada Siapa ?</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Ada Silabus ?"  name="ada_silabus">
                        <label for="exampleInputEmail1">Ada Silabus ?</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Ada Bahan Ajar ?"  name="ada_bahan_ajaran">
                        <label for="exampleInputEmail1">Ada Bahan Ajar ?</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Ada Acara Praktek ?"  name="ada_acara_praktek">
                        <label for="exampleInputEmail1">Ada Acara Praktek ?</label>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" values="Ada Diktat ?"  name="ada_diktat">
                        <label for="exampleInputEmail1">Ada Diktat ?</label>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Mulai</label>
                        <input type="date" class="form-control" value="<?php echo $tgl_mulai; ?>"  placeholder="Tanggal Mulai" name="tgl_mulai">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Akhir</label>
                        <input type="date" class="form-control" value="<?php echo $tgl_akhir; ?>"  placeholder="Tanggal Akhir" name="tgl_akhir">
                    </div>

                    <div class="form-group">
                        <label>Keberadaan</label>
                        <select name="keberadaan" class="form-control select2" style="width: 100%;">
                            <option selected="selected" value="jk">Pilih Keberadaan</option>
                            <option value="matku_kampus"> Keberatan Matkuliah Kampus</option>
                            <option value="luar_kampus"> Keberatan Matkuliah Luar Kampus</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <input type="text" class="form-control" value="<?php echo $keterangan; ?>"  placeholder="Keterangan" name="keterangan">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
 <?php } ?>