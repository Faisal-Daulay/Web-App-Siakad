
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Dosen</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <a href="?page=data_dosen/data_dosesn.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode / Nip</th>
                                                <th>Nama Dosen</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Telepon Pribadi</th>
                                                <th>Telepon Pribadi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require_once 'include/koneksi.php';
                                                $fkl = "SELECT * FROM data_dosen";
                                                $mysql = $db -> query($fkl);

                                                if($mysql ->num_rows > 0 ){
                                                    $no=1;
                                                    while ($ambil = $mysql -> fetch_assoc()) {
                                                    $id_dosen = $ambil['id_dosen'];
                                                    $kode_nip = $ambil['kode_nip'];
                                                    $nados = $ambil['nama_dosesn'];
                                                    $jk = $ambil['jk'];
                                                    $tempat_lahir = $ambil['tempat_lahir'];
                                                    $tgl_lahir = $ambil['tgl_lahir'];
                                                    $tlpn_rumah = $ambil['tlpn_rumah'];
                                                    $tlpn_pribadi = $ambil['tlpn_pribadi'];

                                                    if ($jk == 'p') {
                                                        $jk = "Pria";
                                                    } elseif ($jk='w') {
                                                        $jk = "Wanita";
                                                    } else {
                                                        $jk = "Data Kosong";
                                                    }
                                            ?>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td><?php echo $kode_nip;?></td>
                                                <td><?php echo $nados;?></td>
                                                <td><?php echo $jk;?></td>
                                                <td><?php echo $tempat_lahir;?></td>
                                                <td><?php echo $tgl_lahir;?></td>
                                                <td><?php echo $tlpn_rumah;?></td>
                                                <td><?php echo $tlpn_pribadi;?></td>
                                                <td>
                                                        <a href="?page=data_dosen/edit.php&id=<?php echo $id_dosen; ?>" class="btn btn-facebook">Edit</a>
                                                        <a href="?page=data_dosen/hapus.php&id=<?php echo $id_dosen; ?>" class="btn btn-facebook">Hapus</a>
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