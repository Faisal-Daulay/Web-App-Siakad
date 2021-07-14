<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $id = $_POST['id'];
        $ta = $_POST['ta'];
        $status = $_POST['status'];

        $sqk = "UPDATE tahun_ajaran SET nama_tahun='$ta', status_ta='$status' WHERE id_tahun='$id' ";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Data telah di perbarui');
                    window.location.href='?page=tahun_ajaran/tahun_ajaran.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=tahun_ajaran/form_ta.php&id=$id&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=tahun_ajaran/form_ta.php&id=$id&err=2'
            </script>
        ";
    }
?>