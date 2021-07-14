<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pegawai</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a href="?page=pendataan/data_pegawai/form_data_pegawai.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Terhitung Mulai Tanggal</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'include/koneksi.php';
                    $fkl = "SELECT * FROM data_pegawai";
                    $mysql = $db->query($fkl);

                    if ($mysql->num_rows > 0) {
                        $no = 1;
                        while ($ambil = $mysql->fetch_assoc()) {
                            $id_pegawai = $ambil['id_pegawai'];
                            $nip = $ambil['nip'];
                            $nama = $ambil['nama'];
                            $mulai_tgl = $ambil['mulai_tgl'];
                            $jk = $ambil['jk'];
                            $email = $ambil['email'];
                            $agama = $ambil['agama'];
                            $alamat = $ambil['alamat'];
                            $tmp_lahir = $ambil['tmp_lahir'];
                            $tgl_lahir = $ambil['tgl_lahir'];
                            $telp = $ambil['telp'];
                            ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $nip; ?>
                        </td>
                        <td>
                            <?php echo $nama; ?>
                        </td>
                        <td>
                            <?php echo $mulai_tgl; ?>
                        </td>
                        <td>
                            <?php echo $jk; ?>
                        </td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                        <td>
                            <?php echo $agama; ?>
                        </td>
                        <td>
                            <?php echo $alamat; ?>
                        </td>
                        <td>
                            <?php echo $tmp_lahir; ?>
                        </td>
                        <td>
                            <?php echo $tgl_lahir; ?>
                        </td>
                        <td>
                            <?php echo $telp; ?>
                        </td>
                        <td>
                            <a href="?page=pendataan/data_pegawai/edit.php&id=<?php echo $id_pegawai; ?>" class="btn btn-facebook">Edit</a>
                            <a href="?page=pendataan/data_pegawai/hapus.php&id=<?php echo $id_pegawai; ?>" class="btn btn-facebook">Hapus</a>
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