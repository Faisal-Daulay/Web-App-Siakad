
                    <form action="#" method="post">
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Pendataan Rencana Tahun Akademik</h3>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Akademik</label>
                                        <input type="text" class="form-control" placeholder="Tahun Akademik" name="ta">
                                    </div>

                                    <div class="form-group">
                                        <label>Semester</label>
                                        <select name="status" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ganjil">Ganjil</option>
                                            <option value="genap">Genap</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" class="form-control" name="tgl_mulai">
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Sampail</label>
                                        <input type="date" class="form-control" name="tgl_sampai">
                                    </div>

                                    <div class="form-group">
                                        <label>Fakultas</label>
                                        <select name="fakultas" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ekonomi">Ekonomi</option>
                                            <option value="ti">Teknik Informatika</option>
                                        </select>
                                        <label>Berlaku untuk "Fakultas" tertantu, kosongkan jika berlaku untuk semua</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Prodi</label>
                                        <select name="prodi" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih Prodi">Pilih Prodi</option>
                                        </select>
                                        <label>Berlaku untuk "Jurusan" tertantu, kosongkan jika berlaku untuk semua</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Program</label>
                                        <select name="program" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih Prodi">Pilih Program</option>
                                            <option value="reguler">Reguler</option>
                                            <option value="nr">Non Reguler</option>
                                            <option value="semua">Semua</option>
                                        </select>
                                        <label>	
                                            Berlaku untuk mahasiswa dengan "Status Awal Mahasiswa" tertantu, kosongkan jika berlaku untuk semua
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Angkatan Mahasiswa</label>
                                        <input type="text" class="form-control" placeholder="Tahun Angkatan Mahasiswa" name="tm">
                                        <label>Berlaku untuk mahasiswa dengan "Tahun Angkatan" tertantu, kosongkan jika berlaku untuk semua</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                          <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>