<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $id = $_POST['id'];
    $jabatan = $_POST['jabatan'];

    $nama_jabatan = $_POST['nama_jabatan'];
    $keterangan = $_POST['keterangan'];
    $ekuivalensi_sks = $_POST['ekuivalensi_sks'];


    $sqk = "UPDATE jabatan SET nama_jabatan='$nama_jabatan',keterangan=' $keterangan',ekuivalensi_sks='$ekuivalensi_sks' WHERE id_jabatan='$id' ";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Data telah di perbarui');
                    window.location.href='?page=pendataan/jabatan/jabatan.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=pendataan/jabatan/form_jabatan.php&id=$id&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=pendataan/jabatan/form_jabatan.php&id=$id&err=2'
            </script>
        ";
}
