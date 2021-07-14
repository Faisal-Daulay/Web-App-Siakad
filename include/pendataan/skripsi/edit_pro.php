<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $id = $_POST['id'];
        $matkul = $_POST['matkul'];

        $sqk = "UPDATE matkul SET matkul='$matkul' WHERE id_matkul='$id' ";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Data telah di perbarui');
                    window.location.href='?page=matkul/matkul.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=matkul/form_matkul.php&id=$id&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=matkul/form_matkul.php&id=$id&err=2'
            </script>
        ";
    }
?>