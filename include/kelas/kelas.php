
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Kelas</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <a href="?page=kelas/form_kelas.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kelas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require_once 'include/koneksi.php';
                                                $fkl = "SELECT * FROM kelas";
                                                $mysql = $db -> query($fkl);

                                                if($mysql ->num_rows > 0 ){
                                                    $no=1;
                                                    while ($ambil = $mysql -> fetch_assoc()) {
                                                        $id_kelas = $ambil['id_kelas'];
                                                        $kelas = $ambil['nama_kelas'];
                                            ?>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td><?php echo $kelas;?></td>
                                                <td>
                                                        <a href="?page=kelas/edit.php&id=<?php echo $id_kelas; ?>" class="btn btn-facebook">Edit</a>
                                                        <a href="?page=kelas/hapus.php&id=<?php echo $id_kelas; ?>" class="btn btn-facebook">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php 
                                                    }
                                                } else {
                                                    echo "Data Kosong";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>