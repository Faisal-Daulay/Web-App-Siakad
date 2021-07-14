<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Skripsi</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a href="?page=pendataan/skripsi/form_skripsi.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jenis Pengajuan</th>
                        <th>Tahun Akademik</th>
                        <th>Semester</th>
                        <th>Judul</th>
                        <th>Abstrak</th>
                        <th>Kata Kunci</th>
                        <th>File (PDF)</th>
                        <th>Cover (JPG)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'include/koneksi.php';
                    $fkl = "SELECT * FROM skripsi";
                    $mysql = $db->query($fkl);

                    if ($mysql->num_rows > 0) {
                        $no = 1;
                        while ($ambil = $mysql->fetch_assoc()) {
                            $id_skripsi = $ambil['id_skripsi'];
                            $nama_mhs = $ambil['nama_mhs'];
                            $jns_pengajuan = $ambil['jns_pengajuan'];
                            $thn_akademik = $ambil['thn_akademik'];
                            $semester = $ambil['semester'];
                            $judul = $ambil['judul'];
                            $abstrak = $ambil['abstrak'];
                            $kata_kunci = $ambil['kata_kunci'];
                            $file_pdf = $ambil['file_pdf'];
                            $file_jpg = $ambil['file_jpg'];
                            ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $nama_mhs; ?>
                        </td>
                        <td>
                            <?php echo $jns_pengajuan; ?>
                        </td>
                        <td>
                            <?php echo $thn_akademik; ?>
                        </td>
                        <td>
                            <?php echo $semester; ?>
                        </td>
                        <td>
                            <?php echo $judul; ?>
                        </td>
                        <td>
                            <?php echo $abstrak; ?>
                        </td>
                        <td>
                            <?php echo $kata_kunci; ?>
                        </td>
                        <td>
                            <?php echo $file_pdf; ?>
                        </td>
                        <td>
                            <?php echo $file_jpg; ?>
                        </td>

                        <td>
                            <a href="?page=pendataan/skripsi/edit.php&id=<?php echo $id_skripsi; ?>" class="btn btn-facebook">Edit</a>
                            <a href="?page=pendataan/skripsi/hapus.php&id=<?php echo $id_skripsi; ?>" class="btn btn-facebook">Hapus</a>
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
        <!-- /.b ox-body -->
    </div>
</div> 