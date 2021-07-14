<?php
require_once 'include/koneksi.php';
$del = $_REQUEST['id'];
$hapus = "DELETE FROM nilai_toefl_mhs WHERE id_mhs='$del' ";
if ($db->query($hapus)) {
    echo "
            <script>
                window.location.href='?page=pendataan/nilai_toefl_mhs/nilai_toefl_mhs.php&succ=3'
            </script>
        ";
} else {
    $db->error();
    echo "
            <script>
                window.location.href='?page=pendataan/nilai_toefl_mhs/nilai_toefl_mhs.php&err=3'
            </script>
        ";
}
 