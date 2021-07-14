<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $id_kelompok_asset = $_POST['id_kelompok_asset'];
        $nama_kelompok_asset = $_POST['nama_kelompok_asset'];
        $keterangan = $_POST['keterangan'];

        $sqk = "UPDATE kelompok_asset SET nama_kelompok_asset='$nama_kelompok_asset', keterangan='$keterangan' WHERE id_kelompok_asset='$id_kelompok_asset' ";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Data telah di perbarui');
                    window.location.href='?page=kelompok_asset/kelompok_asset.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=kelompok_asset/edit_pro.php&id=$id_kelompok_asset&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=kelompok_asset/edit_pro.php&id=$id_kelompok_asset&err=2'
            </script>
        ";
    }
?>