<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $nilai_toefl_mhs = $_POST['nilai_toefl_mhs'];
    $mhs = $_POST['mhs'];
    $tgl_test = $_POST['tgl_test'];
    $jns_test = $_POST['jns_test'];
    $section1 = $_POST['section1'];
    $section2 = $_POST['section2'];
    $section3 = $_POST['section3'];
    $section4 = $_POST['section4'];



    $sqk = "INSERT INTO nilai_toefl_mhs (mhs,tgl_test,jns_test,section1,section2,section3,section4) VALUES('$mhs','$tgl_test','$jns_test','$section1','$section2','$section3','$section4')";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=pendataan/nilai_toefl_mhs/nilai_toefl_mhs.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=pendataan/nilai_toefl_mhs/form_nilai_toefl_mhs.php&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=pendataan/nilai_toefl_mhs/form_nilai_toefl_mhs.php&err=2'
            </script>
        ";
}
