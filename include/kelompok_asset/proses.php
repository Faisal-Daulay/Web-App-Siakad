<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $nama_kelompok_asset = $_POST['nama_kelompok_asset'];
    $keterangan = $_POST['keterangan'];


    $sqk = "INSERT INTO kelompok_asset (nama_kelompok_asset, keterangan) VALUES('$nama_kelompok_asset', '$keterangan')";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=kelompok_asset/kelompok_asset.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=kelompok_asset/kelompok_asset.php&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=kelompok_asset/kelompok_asset.php&err=2'
            </script>
        ";
}
 