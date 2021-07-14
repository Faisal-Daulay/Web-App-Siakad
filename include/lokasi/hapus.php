<?php
    require_once 'include/koneksi.php';
    $del = $_REQUEST['id'];
    $hapus = "DELETE FROM lokasi WHERE id_lokasi='$del' ";
    if ($db -> query($hapus)) {
        echo"
            <script>
                window.location.href='?page=lokasi/lokasi.php&succ=3'
            </script>
        ";
    } else {
        $db -> error();
        echo"
            <script>
                window.location.href='?page=lokasi/lokasi.php&err=3'
            </script>
        ";
    }
?>