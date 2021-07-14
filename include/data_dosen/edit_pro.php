<?php
    include_once 'include/koneksi.php';
    
    if ($_POST) {
        $id = $_POST['id'];
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
        $tinggi_badan = $_POST['tinggi_badan'];
        $berat_badan = $_POST['berat_badan'];

        $sql = "UPDATE data_dosen SET kode_nip = '$kode_nip',
                                                nama_dosesn = '$nados', 
                                                jk = '$jk', 
                                                tempat_lahir = '$tempat_lahir', 
                                                tgl_lahir = '$tgl_lahir', 
                                                gelar_akademik = '$gelar', 
                                                tlpn_rumah = '$tlpn_rumah', 
                                                tlpn_pribadi = '$tlpn_pribadi', 
                                                sim = '$sim', 
                                                kendaraan = '$kendaraan',
                                                p_menetap = '$p_menetap', 
                                                p_mempin = '$p_memimpin',
                                                nama_organisasi = '$nama_organisasi', 
                                                hobi = '$hobi', 
                                                minat_seni = '$minat_seni', 
                                                k_bahasa1 = '$k_bahasa1', 
                                                k_bahasa2 = '$k_bahasa2',
                                                k_bahasa3 = '$k_bahasa3', 
                                                rincian_keahlian1 = '$rincian_keahlian1', rincian_keahlian2 = '$rincian_keahlian2', rincian_keahlian3 = '$rincian_keahlian3',
                                                 goldar = '$goldar', 
                                                warga_negara = '$warga_negara', 
                                                asal_negara = '$asal_negara', 
                                                tinggi_badan = '$tinggi_badan', 
                                                berat_badan = '$berat_badan' 
                                                WHERE id_dosen = '$id' ";
                                                
        if ($db->query($sql)) {
            echo "
                <script>
                    alert('Update Data Sukses');
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