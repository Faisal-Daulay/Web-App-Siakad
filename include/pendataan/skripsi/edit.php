
                    <form action="?page=matkul/edit_pro.php" method="post">
                        <?php
                            require_once 'include/koneksi.php';
                            $id = $_REQUEST['id'];
                            $fkl = "SELECT * FROM matkul WHERE id_matkul = '$id' ";
                            $mysql = $db -> query($fkl);
                            $no=1;
                            while ($ambil = $mysql -> fetch_assoc()) {
                                $id_matkul = $ambil['id_matkul'];
                                $matkul = $ambil['matkul'];
                        ?>
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Data Mata Kuliah</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Mata Kuliah</label>
                                        <input type="hidden" class="form-control" value="<?php echo $id_matkul; ?>" name="id">
                                        <input type="text" class="form-control" value="<?php echo $matkul; ?>" name="matkul">
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