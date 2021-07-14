<?php
    require_once 'include/koneksi.php';

    $id = $_REQUEST['id'];
    $fkl = "SELECT * FROM data_dosen WHERE id_dosen='$id' ";
    $mysql = $db -> query($fkl);
    while ($ambil = $mysql -> fetch_assoc()) {
        $id = $ambil['id_dosen'];
        $kode_nip = $ambil['kode_nip'];
        $nados = $ambil['nama_dosesn'];
        $jk = $ambil['jk'];
        $tempat_lahir = $ambil['tempat_lahir'];
        $tgl_lahir = $ambil['tgl_lahir'];
        $gelar = $ambil['gelar_akademik'];
        $tlpn_rumah = $ambil['tlpn_rumah'];
        $tlpn_pribadi = $ambil['tlpn_pribadi'];
        $sim = $ambil['sim'];
        $kendaraan = $ambil['kendaraan'];
        $p_menetap = $ambil['p_menetap'];
        $p_memimpin = $ambil['p_mempin'];
        $nama_organisasi = $ambil['nama_organisasi'];
        $hobi = $ambil['hobi'];
        $minat_seni = $ambil['minat_seni'];
        $k_bahasa1 = $ambil['k_bahasa1'];
        $k_bahasa2 = $ambil['k_bahasa2'];
        $k_bahasa3 = $ambil['k_bahasa3'];
        $rincian_keahlian1 = $ambil['rincian_keahlian1'];
        $rincian_keahlian2 = $ambil['rincian_keahlian2'];
        $rincian_keahlian3 = $ambil['rincian_keahlian3'];
        $goldar = $ambil['goldar'];
        $warga_negara = $ambil['warga_negara'];
        $asal_negara = $ambil['asal_negara'];
        $agama = $ambil['agama'];
        $tinggi_badan = $ambil['tinggi_badan'];
        $berat_badan = $ambil['berat_badan'];
?>
<form action="?page=data_dosen/edit_pro.php" method="post">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Edit Rincian Dosen</h3>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode / Nip</label>
                    <input type="text" class="form-control" value="<?php echo $id; ?>" name="id">
                    <input type="text" class="form-control" placeholder="Kode / Nip" value="<?php echo $kode_nip; ?>" name="kode_nip">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" placeholder="Nama Dosen" value="<?php echo $nados; ?>" name="nados">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="jk">Pilih Jenis Kelamin</option>
                        <option value="p">Pria</option>
                        <option value="w">Wanita</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" name="tempat_lahir">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>" name="tgl_lahir">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Gelar Akademik / Profesional</label>
                    <input type="text" class="form-control" placeholder="Gelar Akademik / Profesional" value="<?php echo $gelar; ?>" name="gelar">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon Rumah</label>
                    <input type="text" class="form-control" placeholder="Telepon Rumah" value="<?php echo $tlpn_rumah; ?>" name="tlpn_rumah">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon Pribadi</label>
                    <input type="text" class="form-control" placeholder="Telepon Pribadi" value="<?php echo $tlpn_pribadi; ?>" name="tlpn_pribadi">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Surat Izin Mengemudi</label>
                    <input type="text" class="form-control" placeholder="Surat Izin Mengemudi" value="<?php echo $sim; ?>" name="sim">
                </div>

                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kendaraan</label>
                    <input type="text" class="form-control" placeholder="Kendaraan" value="<?php echo $kendaraan; ?>" name="kendaraan">
                </div>

                <div class="form-group">
                    <label>Pernah Menetap di Luar Negri</label>
                    <select name="p_menetap" class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="pilih">Pilih</option>
                        <option value="y">Ya</option>
                        <option value="t">Tidak</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pernah Mempin Organisasi</label>
                    <select name="p_memimpin" class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="pilih">Pilih</option>
                        <option value="y">Ya</option>
                        <option value="t">Tidak</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Organisasii</label>
                    <input type="text" class="form-control" placeholder="Nama Organisasii" value="<?php echo $nama_organisasi; ?>" name="nama_organisasi">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Hobi</label>
                    <input type="text" class="form-control" placeholder="Hobi" value="<?php echo $hobi; ?>" name="hobi">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Minat Seni</label>
                    <input type="text" class="form-control" placeholder="Minat Seni" value="<?php echo $tempat_lahir; ?>" name="minat_seni">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kemampuan Bahasa 1</label>
                    <input type="text" class="form-control" placeholder="Kemampuan Bahasa 1" value="<?php echo $k_bahasa1 ; ?>" name="k_bahasa1">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kemampuan Bahasa 2</label>
                    <input type="text" class="form-control" placeholder="Kemampuan Bahasa 2" value="<?php echo $k_bahasa1 ; ?>" name="k_bahasa2">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kemampuan Bahasa 3</label>
                    <input type="text" class="form-control" placeholder="Kemampuan Bahasa 3" value="<?php echo $k_bahasa1 ; ?>" name="k_bahasa3">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Rincian Keahlian 1</label>
                        <textarea class="form-control" rows="5" id="comment" name="rincian_keahlian1"><?php echo $rincian_keahlian1 ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Rincian Keahlian 2</label>
                        <textarea class="form-control" rows="5" id="comment" name="rincian_keahlian2"><?php echo $rincian_keahlian2 ?></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Rincian Keahlian 3</label>
                        <textarea class="form-control" rows="5" id="comment" name="rincian_keahlian3"><?php echo $rincian_keahlian3 ?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Golongan Darah</label>
                    <input type="text" class="form-control" placeholder="Golongan Darah" value="<?php echo $goldar; ?>" name="goldar">
                </div>

                <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <select name="warga_negara" class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="pilih">Pilih</option>
                        <option value="wni">WNI</option>
                        <option value="wna">WNA</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Asal Negara</label>
                    <select name="asal_negara" class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="pilih">Pilih</option>
                        <option value="wni">WNI</option>
                        <option value="wna">WNA</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <select name="agama" class="form-control select2" style="width: 100%;">
                        <option selected="selected" value="pilih">Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Tinggi Badan</label>
                    <input type="number" class="form-control" placeholder="Tinggi Badan" value="<?php echo $tinggi_badan; ?>" name="tinggi_badan">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Berat Badan</label>
                    <input type="number" class="form-control" placeholder="Berat Badan" value="<?php echo $berat_badan; ?>" name="berat_badan">
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