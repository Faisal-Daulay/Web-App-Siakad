
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Mata Kuliah</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <a href="?page=matkul/form_matkul.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Prodi</th>
                                                <th>Jenjang</th>
                                                <th>Kelompok</th>
                                                <th>Prodi Lain</th>
                                                <th>UTS / UAS</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require_once 'include/koneksi.php';
                                                $fkl = "SELECT * FROM matkul";
                                                $mysql = $db -> query($fkl);

                                                if($mysql ->num_rows > 0 ){
                                                    $no=1;
                                                    while ($ambil = $mysql -> fetch_assoc()) {
                                                        $id_matkul = $ambil['id_matkul'];
                                                        $kode = $ambil['kode'];
                                                        $nama = $ambil['nama'];
                                                        $uts = $ambil['uts'];
                                                        $uas = $ambil['uas'];
                                                        $prodi = $ambil['prodi'];
                                                        $jenjang = $ambil['jenjang'];
                                                        $kel_matkul = $ambil['kel_matkul'];
                                                        $keterangan = $ambil['keterangan'];
                                                        $prodi_lain = $ambil['prodi_lain'];
                                            ?>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <th><?php echo $kode; ?></th>
                                                <th><?php echo $nama; ?></th>
                                                <th><?php echo $prodi; ?></th>
                                                <th><?php echo $jenjang; ?></th>
                                                <th><?php echo $kel_matkul; ?></th>
                                                <th><?php echo $prodi_lain; ?></th>
                                                <th><?php echo $uts ." / ".$uas ; ?></th>
                                                <td>
                                                        <a href="?page=matkul/edit.php&id=<?php echo $id_matkul; ?>" class="btn btn-facebook">Edit</a>
                                                        <a href="?page=matkul/hapus.php&id=<?php echo $id_matkul; ?>" class="btn btn-facebook">Hapus</a>
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