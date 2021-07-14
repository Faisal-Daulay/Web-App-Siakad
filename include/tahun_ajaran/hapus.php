<?php
    require_once 'include/koneksi.php';
    $del = $_REQUEST['id'];
    $hapus = "DELETE FROM tahun_ajaran WHERE id_tahun='$del' ";
    if ($db -> query($hapus)) {
        echo"
            <script>
                window.location.href='?page=tahun_ajaran/tahun_ajaran.php&succ=3'
            </script>
        ";
    } else {
        $db -> error();
        echo"
            <script>
                window.location.href='?page=tahun_ajaran/tahun_ajaran.php&err=3'
            </script>
        ";
    }
?>