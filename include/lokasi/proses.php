<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $nama_lokasi = $_POST['nama_lokasi'];
    $alamat = $_POST['alamat'];
    $keterangan = $_POST['keterangan'];

    $sqk = "INSERT INTO lokasi (nama_lokasi, alamat, keterangan) VALUES('$nama_lokasi','$alamat','$keterangan')";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=lokasi/lokasi.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=lokasi/lokasi.php&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=lokasi/lokasi.php&err=2'
            </script>
        ";
}
?>