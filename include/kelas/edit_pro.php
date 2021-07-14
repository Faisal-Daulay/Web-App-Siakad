<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $id = $_POST['id'];
        $kelas = $_POST['kelas'];

        $sqk = "UPDATE kelas SET nama_kelas='$kelas' WHERE id_kelas='$id' ";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Data telah di perbarui');
                    window.location.href='?page=kelas/kelas.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=kelas/form_kelas.php&id=$id&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=kelas/form_kelas.php&id=$id&err=2'
            </script>
        ";
    }
?>