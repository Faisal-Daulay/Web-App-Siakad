<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $skripsi = $_POST['skripsi'];
    $nama_mhs = $_POST['nama_mhs'];
    $jns_pengajuan = $_POST['jns_pengajuan'];
    $thn_akademik = $_POST['thn_akademik'];
    $semester = $_POST['semester'];
    $judul = $_POST['judul'];
    $abstrak = $_POST['abstrak'];
    $kata_kunci = $_POST['kata_kunci'];
    $file_pdf = $_POST['file_pdf'];
    $file_jpg = $_POST['file_jpg'];



    $sqk = "INSERT INTO skripsi (nama_mhs,jns_pengajuan,thn_akademik,semester,judul,abstrak,kata_kunci,file_pdf,file_jpg) VALUES('$nama_mhs','$jns_pengajuan','$thn_akademik','$semester','$judul','$abstrak','$kata_kunci','$file_pdf','$file_jpg')";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=pendataan/skripsi/skripsi.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=pendataan/skripsi/form_skripsi.php&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=pendataan/skripsi/form_skripsi.php&err=2'
            </script>
        ";
}
