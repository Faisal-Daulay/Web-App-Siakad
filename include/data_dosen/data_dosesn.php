
<form action="?page=data_dosen/proses.php" method="post">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Rincian Dosen</h3>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode / Nip</label>
                    <input type="text" class="form-control" placeholder="Kode / Nip" name="kode_nip">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" placeholder="Nama Dosen" name="nados">
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
                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Gelar Akademik / Profesional</label>
                    <input type="text" class="form-control" placeholder="Gelar Akademik / Profesional" name="gelar">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon Rumah</label>
                    <input type="text" class="form-control" placeholder="Telepon Rumah" name="tlpn_rumah">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Telepon Pribadi</label>
                    <input type="text" class="form-control" placeholder="Telepon Pribadi" name="tlpn_pribadi">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Surat Izin Mengemudi</label>
                    <input type="text" class="form-control" placeholder="Surat Izin Mengemudi" name="sim">
                </div>

                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kendaraan</label>
                    <input type="text" class="form-control" placeholder="Kendaraan" name="kendaraan">
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
                    <input type="text" class="form-control" placeholder="Nama Organisasii" name="nama_organisasi">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Hobi</label>
                    <input type="text" class="form-control" placeholder="Hobi" name="hobi">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Minat Seni</label>
                    <input type="text" class="form-control" placeholder="Minat Seni" name="minat_seni">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kemampuan Bahasa 1</label>
                    <input type="text" class="form-control" placeholder="Kemampuan Bahasa 1" name="k_bahasa1">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kemampuan Bahasa 2</label>
                    <input type="text" class="form-control" placeholder="Kemampuan Bahasa 2" name="k_bahasa2">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kemampuan Bahasa 3</label>
                    <input type="text" class="form-control" placeholder="Kemampuan Bahasa 3" name="k_bahasa3">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Rincian Keahlian 1</label>
                        <textarea class="form-control" rows="5" id="comment" name="rincian_keahlian1"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Rincian Keahlian 2</label>
                        <textarea class="form-control" rows="5" id="comment" name="rincian_keahlian2"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Rincian Keahlian 3</label>
                        <textarea class="form-control" rows="5" id="comment" name="rincian_keahlian3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Golongan Darah</label>
                    <input type="text" class="form-control" placeholder="Golongan Darah" name="goldar">
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
                    <input type="number" class="form-control" placeholder="Tinggi Badan" name="tinggi_badan">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Berat Badan</label>
                    <input type="number" class="form-control" placeholder="Berat Badan" name="berat_badan">
                </div>


            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>