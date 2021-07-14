<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $id = $_POST['id'];
    // $nilai_toefl_mhs = $_POST['nilai_toefl_mhs'];

    $mhs = $_POST['mhs'];
    $tgl_test = $_POST['tgl_test'];
    $jns_test = $_POST['jns_test'];
    $section1 = $_POST['section1'];
    $section2 = $_POST['section2'];
    $section3 = $_POST['section3'];
    $section4 = $_POST['section4'];


    $sqk = "UPDATE nilai_toefl_mhs SET mhs='$mhs', tgl_test='$tgl_test',jns_test='$jns_test',section1='$section1',section2='$section2',section3='$section3',section4='$section4' WHERE id_mhs='$id' ";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Data telah di perbarui');
                    window.location.href='?page=pendataan/nilai_toefl_mhs/nilai_toefl_mhs.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=pendataan/nilai_toefl_mh/form_nilai_toefl_mh.php&id=$id&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=pendataan/nilai_toefl_mh/form_nilai_toefl_mh.php&id=$id&err=2'
            </script>
        ";
}
