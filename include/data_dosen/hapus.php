<?php
    require_once 'include/koneksi.php';
    $del = $_REQUEST['id'];
    $hapus = "DELETE FROM data_dosen WHERE id_dosen='$del' ";
    if ($db -> query($hapus)) {
        echo"
            <script>
                alert('Data terhapus');
                window.location.href='?page=data_dosen/tampil_dosen.php&succ=3'
            </script>
        ";
    } else {
        $db -> error();
        echo"
            <script>
                window.location.href='?page=data_dosen/tampil_dosen.php&err=3'
            </script>
        ";
    }
?>