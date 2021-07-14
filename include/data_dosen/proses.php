<?php
    include_once 'include/koneksi.php';
    
    if ($_POST) {
        
        $kode_nip = $_POST['kode_nip'];
        $nados = $_POST['nados'];
        $jk = $_POST['jk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $gelar = $_POST['gelar'];
        $tlpn_rumah = $_POST['tlpn_rumah'];
        $tlpn_pribadi = $_POST['tlpn_pribadi'];
        $sim = $_POST['sim'];
        $kendaraan = $_POST['kendaraan'];
        $p_menetap = $_POST['p_menetap'];
        $p_memimpin = $_POST['p_memimpin'];
        $nama_organisasi = $_POST['nama_organisasi'];
        $hobi = $_POST['hobi'];
        $minat_seni = $_POST['minat_seni'];
        $k_bahasa1 = $_POST['k_bahasa1'];
        $k_bahasa2 = $_POST['k_bahasa2'];
        $k_bahasa3 = $_POST['k_bahasa3'];
        $rincian_keahlian1 = $_POST['rincian_keahlian1'];
        $rincian_keahlian2 = $_POST['rincian_keahlian2'];
        $rincian_keahlian3 = $_POST['rincian_keahlian3'];
        $goldar = $_POST['goldar'];
        $warga_negara = $_POST['warga_negara'];
        $asal_negara = $_POST['asal_negara'];
        $agama = $_POST['agama'];
        $tinggi_badan = $_POST['tinggi_badan'];
        $berat_badan = $_POST['berat_badan'];

        $sql = "INSERT INTO data_dosen (kode_nip, nama_dosesn, jk, tempat_lahir, tgl_lahir, gelar_akademik, tlpn_rumah, tlpn_pribadi, sim, kendaraan, p_menetap, p_mempin, nama_organisasi, hobi, minat_seni, k_bahasa1, k_bahasa2, k_bahasa3, rincian_keahlian1, rincian_keahlian2, rincian_keahlian3, goldar, warga_negara, asal_negara, agama, tinggi_badan, berat_badan) VALUES ('$kode_nip', '$nados', '$jk', '$tempat_lahir', '$tgl_lahir', '$gelar', '$tlpn_tumah', '$tlpn_pribadi', '$sim', '$kendaraan', '$p_menetap', '$p_memimpin', '$nama_organisasi', '$hobi', '$minat_seni', '$k_bahasa1', '$k_bahasa2', '$k_bahasa3', '$rincian_keahlian1', '$rincian_keahlian2', '$rincian_keahlian3', '$goldar', '$warga_negara', '$asal_negara', '$agama', '$tinggi_badan', '$berat_badan')";

        if ($db->query($sql)) {
            echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=data_dosen/tampil_dosen.php'
                </script>
            ";
        } else {
        $db -> error();
            echo "
                <script>
                    window.location.href='?page=data_dosen/data_dosen.php&err=1'
                </script>
            ";
        }
    } else {
        $db -> error();
        echo "
            <script>
                window.location.href='?page=data_dosen/data_dosen.php&err=1'
            </script>
        ";
    }
?>