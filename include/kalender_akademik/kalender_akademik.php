
                    <form action="#" method="post">
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Pendataan Kalender Akademik</h3>
                                </div>

                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Kegiatan</label>
                                        <input type="text" class="form-control" placeholder="Nama Kegiatan" name="nk">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Deskripsi Kegiatan</label>
                                          <textarea class="form-control" rows="5" name="dk" id="comment"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Akademik</label>
                                        <input type="text" class="form-control" placeholder="Tahun Akademik" name="ta">
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
                                        <label for="exampleInputEmail1">Di Tetapkan</label>
                                        <input type="text" class="form-control" placeholder="Di Tetapkan" name="dt">
                                    </div>

                                    <div class="form-group">
                                        <label>Fakultas</label>
                                        <select name="fakultas" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ekonomi">Ekonomi</option>
                                            <option value="ti">Teknik Informatika</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Prodi</label>
                                        <select name="prodi" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih Prodi">Pilih Prodi</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenjang</label>
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
                                        <label>Program</label>
                                        <select name="program" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="pilih Prodi">Pilih Prodi</option>
                                            <option value="reguler">Reguler</option>
                                            <option value="nr">Non Reguler</option>
                                            <option value="semua">Semua</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Ganjil / Genap</label>
                                        <select name="kurikulum" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="ekonomi">Ekonomi</option>
                                            <option value="ti">Teknik Informatika</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>