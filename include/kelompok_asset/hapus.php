<?php
    require_once 'include/koneksi.php';
    $del = $_REQUEST['id'];
    $hapus = "DELETE FROM kelompok_asset WHERE id_kelompok_asset='$del' ";
    if ($db -> query($hapus)) {
        echo"
            <script>
                window.location.href='?page=kelompok_asset/kelompok_asset.php&succ=3'
            </script>
        ";
    } else {
        $db -> error();
        echo"
            <script>
                window.location.href='?page=kelompok_asset/kelompok_asset.php&err=3'
            </script>
        ";
    }
?>