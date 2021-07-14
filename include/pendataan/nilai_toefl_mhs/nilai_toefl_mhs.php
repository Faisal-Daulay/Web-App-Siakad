<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Nilai TOEFL Mahasiswa</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <a href="?page=pendataan/nilai_toefl_mhs/form_nilai_toefl_mhs.php" class="btn btn-bitbucket" style="margin: 10px 0px;">Tambah Data</a>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mahasiswa</th>
                        <th>Tanggal Test</th>
                        <th>Jenis Test</th>
                        <th>Section 1</th>
                        <th>Section 2</th>
                        <th>Section 3</th>
                        <th>Section 4</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'include/koneksi.php';
                    $fkl = "SELECT * FROM nilai_toefl_mhs";
                    $mysql = $db->query($fkl);

                    if ($mysql->num_rows > 0) {
                        $no = 1;
                        while ($ambil = $mysql->fetch_assoc()) {
                            $id_mhs = $ambil['id_mhs'];
                            $mhs = $ambil['mhs'];
                            $tgl_test = $ambil['tgl_test'];
                            $jns_test = $ambil['jns_test'];
                            $section1 = $ambil['section1'];
                            $section2 = $ambil['section2'];
                            $section3 = $ambil['section3'];
                            $section4 = $ambil['section4'];
                            ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $mhs; ?>
                        </td>
                        <td>
                            <?php echo $tgl_test; ?>
                        </td>
                        <td>
                            <?php echo $jns_test; ?>
                        </td>
                        <td>
                            <?php echo $section1; ?>
                        </td>
                        <td>
                            <?php echo $section2; ?>
                        </td>
                        <td>
                            <?php echo $section3; ?>
                        </td>
                        <td>
                            <?php echo $section4; ?>
                        </td>

                        <td>
                            <a href="?page=pendataan/nilai_toefl_mhs/edit.php&id=<?php echo $id_mhs; ?>" class="btn btn-facebook">Edit</a>
                            <a href="?page=pendataan/nilai_toefl_mhs/hapus.php&id=<?php echo $id_mhs; ?>" class="btn btn-facebook">Hapus</a>
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