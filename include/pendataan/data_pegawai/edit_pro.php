<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $id = $_POST['id'];

    $nip = $_POST['nip'];
    $nip_baru = $_POST['nip_baru'];
    $no_ktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $mulai_tgl = $_POST['mulai_tgl'];
    $status_pgw = $_POST['status_pgw'];
    $status_sertifikat = $_POST['status_sertifikat'];
    $upload = $_POST['upload'];
    $pendidikan_akhir = $_POST['pendidikan_akhir'];
    $jns_tng_pendidikan = $_POST['jns_tng_pendidikan'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $jk = $_POST['jk'];
    $bahasa = $_POST['bahasa'];
    $email = $_POST['email'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $hobi = $_POST['hobi'];
    $telp = $_POST['telp'];
    $bank = $_POST['bank'];
    $no_rek = $_POST['no_rek'];
    $karis = $_POST['karis'];
    $askes = $_POST['askes'];
    $taspen = $_POST['taspen'];
    $karpeg = $_POST['karpeg'];
    $npwp = $_POST['npwp'];

    $sqk = "UPDATE data_pegawai SET nip='$nip', nip_baru='$nip_baru', no_ktp='$no_ktp', nama='$nama', mulai_tgl='$mulai_tgl', status_pgw='$status_pgw', status_sertifikat='$status_sertifikat', upload='$upload', pendidikan_akhir='$pendidikan_akhir', jns_tng_pendidikan='$jns_tng_pendidikan', status_perkawinan='$status_perkawinan', jk='$jk', bahasa='$bahasa', email='$email', agama='$agama', alamat='$alamat', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', hobi='$hobi', telp='$telp', bank='$bank', no_rek='$no_rek', karis='$karis', askes='$askes', taspen='$taspen', karpeg='$karpeg', npwp='$npwp' WHERE id_pegawai='$id' ";

    if ($db->query($sqk)) {
        echo "
                    <script>
                        alert('Data telah di perbarui');
                        window.location.href='?page=pendataan/data_pegawai/data_pegawai.php'
                    </script>
                ";
    } else {
        echo "
                    <script>
                        window.location.href='?page=pendataan/data_pegawai/form_data_pegawai.php&id=$id&err=1'
                    </script>
                ";
    }
} else {
    echo "
                <script>
                    window.location.href='?page=pendataan/data_pegawai/form_data_pegawai.php&id=$id&err=2'
                </script>
            ";
}
