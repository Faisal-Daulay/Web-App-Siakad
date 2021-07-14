<?php
require_once 'include/koneksi.php';

if ($_POST) {
    $data_pegawai = $_POST['data_pegawai'];

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




    $sqk = "INSERT INTO data_pegawai (nip,nip_baru,no_ktp,nama,mulai_tgl,status_pgw,status_sertifikat,upload,pendidikan_akhir,jns_tng_pendidikan,status_perkawinan,jk,bahasa,email,agama,alamat,tmp_lahir,tgl_lahir,hobi,telp,bank,no_rek,karis,askes,taspen,karpeg,npwp) VALUES('$nip','$nip_baru','$no_ktp','$nama','$mulai_tgl','$status_pgw','$status_sertifikat','$upload','$pendidikan_akhir','$jns_tng_pendidikan','$status_perkawinan','$jk','$bahasa','$email','$agama','$alamat','$tmp_lahir','$tgl_lahir','$hobi','$telp','$bank','$no_rek','$karis','$askes','$taspen','$karpeg','$npwp')";

    if ($db->query($sqk)) {
        echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=pendataan/data_pegawai/data_pegawai.php'
                </script>
            ";
    } else {
        echo "
                <script>
                    window.location.href='?page=pendataan/data_pegawai/form_data_pegawai.php&err=1'
                </script>
            ";
    }
} else {
    echo "
            <script>
                window.location.href='?page=pendataan/data_pegawai/form_data_pegawai.php&err=2'
            </script>
        ";
}
 