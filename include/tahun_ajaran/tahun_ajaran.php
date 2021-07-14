
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Tahun Ajaran</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <a href="?page=tahun_ajaran/form_ta.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tahun</th>
                                                <th>Status Tahun Ajaran</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require_once 'include/koneksi.php';
                                                $fkl = "SELECT * FROM tahun_ajaran";
                                                $mysql = $db -> query($fkl);

                                                if($mysql ->num_rows > 0 ){
                                                    $no=1;
                                                    while ($ambil = $mysql -> fetch_assoc()) {
                                                    $id_tahun = $ambil['id_tahun'];
                                                    $nama_tahun = $ambil['nama_tahun'];
                                                    $status_ta = $ambil['status_ta'];
                                            ?>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td><?php echo $nama_tahun;?></td>
                                                <td><?php echo $status_ta;?></td>
                                                <td>
                                                        <a href="?page=tahun_ajaran/edit.php&id=<?php echo $id_tahun; ?>" class="btn btn-facebook">Edit</a>
                                                        <a href="?page=tahun_ajaran/hapus.php&id=<?php echo $id_tahun; ?>" class="btn btn-facebook">Hapus</a>
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