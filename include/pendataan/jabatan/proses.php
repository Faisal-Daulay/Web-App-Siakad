<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $jabatan = $_POST['jabatan'];
    $nama_jabatan = $_POST['nama_jabatan'];
    $keterangan = $_POST['keterangan'];
    $ekuivalensi_sks = $_POST['ekuivalensi_sks'];



    $sqk = "INSERT INTO jabatan (nama_jabatan,keterangan,ekuivalensi_sks) VALUES(' $nama_jabatan',' $keterangan',' $ekuivalensi_sks')";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=pendataan/jabatan/jabatan.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=pendataan/jabatan/form_jabatan.php&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=pendataan/jabatan/form_jabatan.php&err=2'
            </script>
        ";
}
