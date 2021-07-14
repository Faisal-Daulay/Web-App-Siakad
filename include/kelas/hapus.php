<?php
    require_once 'include/koneksi.php';
    $del = $_REQUEST['id'];
    $hapus = "DELETE FROM kelas WHERE id_kelas='$del' ";
    if ($db -> query($hapus)) {
        echo"
            <script>
                window.location.href='?page=kelas/kelas.php&succ=3'
            </script>
        ";
    } else {
        $db -> error();
        echo"
            <script>
                window.location.href='?page=kelas/kelas.php&err=3'
            </script>
        ";
    }
?>