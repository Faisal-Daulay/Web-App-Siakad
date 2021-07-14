
                    <form action="#" method="post">
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Tambah Jadwal Perkuliahan</h3>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Akademik</label>
                                        <input type="text" class="form-control" placeholder="Tahun Akademik" name="ta">
                                    </div>

                                    <div class="form-group">
                                        <label>Program</label>
                                        <select name="program" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih Prodi">Pilih Prodi</option>
                                            <option value="reguler">Reguler</option>
                                            <option value="nr">Non Reguler</option>
                                            <option value="semua">Semua</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Fakultas</label>
                                        <select name="fakultas" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ekonomi">Ekonomi</option>
                                            <option value="ti">Teknik Informatika</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select name="jurusan" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ekonomi">Ekonomi</option>
                                            <option value="ti">Teknik Informatika</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Semester</label>
                                        <select name="status" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ganjil">Ganjil</option>
                                            <option value="genap">Genap</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kurikulum</label>
                                        <select name="kurikulum" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ekonomi">Ekonomi</option>
                                            <option value="ti">Teknik Informatika</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <select name="kelas" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih kelas">Pilih Kelas</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Mata Kuliah</label>
                                        <select name="matkul" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="matkul">Pilih Mata Kuliah</option>
                                        </select>
                                        <input type="checkbox" name="praktek">
                                        <label>Terdapat kegiatan praktek pada matakuliah ini</label>
                                    </div>

                                    <div class="form-group">
                                        <label>JUmlah Dosen</label>
                                        <select name="dosen" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="dosen">Pilih Dosen</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Ruang</label>
                                        <select name="ruang" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="du">Pilih Ruang</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Kapasitas</label>
                                        <select name="kapasitas" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih kelas">Pilih Kapasitas</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Waktu Perkuliahan</label>
                                        <select name="waktu_kuliah" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih waktu_kuliah">Pilih Waktu Perkuliahan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jam Perkuliahan</label>
                                        <select name="kelas" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih kelas">Pilih Jam Perkuliahan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <input type="time" class="form-control" name="start_time">
                                        s/d
                                        <input type="time" class="form-control" name="end_time">
                                    </div>

                                    <div class="form-group">
                                        <label>Hari</label>
                                        <select name="hari" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih hari">Pilih Hari</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Berlaku Mulai</label>
                                        <input type="date" class="form-control" name="start_date">
                                        s/d
                                        <input type="date" class="form-control" name="end_date">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Angkatan Mahasiswa</label>
                                        <input type="text" class="form-control" placeholder="Tahun Angkatan Mahasiswa" name="tm">
                                        <label>Berlaku untuk mahasiswa dengan "Tahun Angkatan" tertantu, kosongkan jika berlaku untuk semua</label>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>