
                    <form action="?page=tahun_ajaran/edit_pro.php" method="post">
                        <?php
                            require_once 'include/koneksi.php';
                            $id = $_REQUEST['id'];
                            $fkl = "SELECT * FROM tahun_ajaran WHERE id_tahun = '$id' ";
                            $mysql = $db -> query($fkl);
                            $no=1;
                            while ($ambil = $mysql -> fetch_assoc()) {
                                $id_tahun = $ambil['id_tahun'];
                                $nama_tahun = $ambil['nama_tahun'];
                        ?>
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Form Edit Tahun Ajaran</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                                        <input type="hidden" class="form-control" value="<?php echo $id_tahun; ?>" name="id">
                                        <input type="text" class="form-control" value="<?php echo $nama_tahun; ?>" name="ta">

                                        <div class="form-group">
                                        <label>Status Tahun Ajaran</label>
                                        <select name="status" class="form-control select2" style="width: 100%;">
                                            <option selected="selected" value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                        </div><!-- /.form-group -->
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                            <?php } ?>
                    </form>