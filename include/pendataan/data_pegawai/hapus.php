<?php
require_once 'include/koneksi.php';
$del = $_REQUEST['id'];
$hapus = "DELETE FROM data_pegawai WHERE id_pegawai='$del' ";
if ($db->query($hapus)) {
    echo "
            <script>
                window.location.href='?page=pendataan/data_pegawai/data_pegawai.php&succ=3'
            </script>
        ";
} else {
    $db->error();
    echo "
            <script>
                window.location.href='?page=pendataan/data_pegawai/data_pegawai.php&err=3'
            </script>
        ";
}
