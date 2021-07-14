<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $kelas = $_POST['kelas'];

        $sqk = "INSERT INTO kelas (nama_kelas) VALUES('$kelas')";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=kelas/kelas.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=kelas/form_kelas.php&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=kelas/form_kelas.php&err=2'
            </script>
        ";
    }
?>