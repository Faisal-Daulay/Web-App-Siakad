<?php
require_once 'include/koneksi.php';
$del = $_REQUEST['id'];
$hapus = "DELETE FROM jabatan WHERE id_jabatan='$del' ";
if ($db->query($hapus)) {
    echo "
            <script>
                window.location.href='?page=pendataan/jabatan/jabatan.php&succ=3'
            </script>
        ";
} else {
    $db->error();
    echo "
            <script>
                window.location.href='?page=pendataan/jabatan/jabatan.php&err=3'
            </script>
        ";
}
