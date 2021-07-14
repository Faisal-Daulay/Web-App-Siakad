
                    <form action="?page=matkul/proses.php" method="post">
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Form Tambah Tahun Ajaran</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                                        <input type="text" class="form-control" placeholder="Tahun Ajaran" name="ta">
                                    </div>
                                    
                                    <div class="form-group">
                                    <label>Status Tahun Ajaran</label>
                                    <select name="status" class="form-control select2" style="width: 100%;">
                                        <option selected="selected" value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    </div><!-- /.form-group -->


                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>