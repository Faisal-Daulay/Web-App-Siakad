<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $ta = $_POST['ta'];
        $status = $_POST['status'];

        $sqk = "INSERT INTO tahun_ajaran (nama_tahun, status_ta) VALUES('$ta','$status')";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=tahun_ajaran/tahun_ajaran.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=tahun_ajaran/form_ta.php&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=tahun_ajaran/form_ta.php&err=2'
            </script>
        ";
    }
?>