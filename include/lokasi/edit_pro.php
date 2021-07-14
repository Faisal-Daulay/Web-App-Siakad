<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $id_lokasi = $_POST['id_lokasi'];
        $nama_lokasi = $_POST['nama_lokasi'];
        $alamat = $_POST['alamat'];
        $keterangan = $_POST['keterangan'];

        $sqk = "UPDATE lokasi SET nama_lokasi='$nama_lokasi',
                                  alamat='$alamat',
                                  keterangan='$keterangan' 
                                  WHERE id_lokasi='$id_lokasi' ";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Data telah di perbarui');
                    window.location.href='?page=lokasi/lokasi.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=lokasi/edit_pro.php&id=$id_lokasi&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=lokasi/edit_pro.php&id=$id_lokasi&err=2'
            </script>
        ";
    }
?>