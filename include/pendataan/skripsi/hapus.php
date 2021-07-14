<?php
    require_once 'include/koneksi.php';
    $del = $_REQUEST['id'];
    $hapus = "DELETE FROM matkul WHERE id_matkul='$del' ";
    if ($db -> query($hapus)) {
        echo"
            <script>
                window.location.href='?page=matkul/matkul.php&succ=3'
            </script>
        ";
    } else {
        $db -> error();
        echo"
            <script>
                window.location.href='?page=matkul/matkul.php&err=3'
            </script>
        ";
    }
?>