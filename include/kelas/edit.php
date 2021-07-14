
                    <form action="?page=kelas/edit_pro.php" method="post">
                        <?php
                            require_once 'include/koneksi.php';
                            $id = $_REQUEST['id'];
                            $fkl = "SELECT * FROM kelas WHERE id_kelas = '$id' ";
                            $mysql = $db -> query($fkl);
                            $no=1;
                            while ($ambil = $mysql -> fetch_assoc()) {
                                $id_kelas = $ambil['id_kelas'];
                                $kelas = $ambil['nama_kelas'];
                        ?>
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Form Edit Kelas</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Kelas</label>
                                        <input type="hidden" class="form-control" value="<?php echo $id_kelas; ?>" name="id">
                                        <input type="text" class="form-control" value="<?php echo $kelas; ?>" name="kelas">
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