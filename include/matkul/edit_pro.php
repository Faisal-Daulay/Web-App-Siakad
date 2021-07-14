<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $nama_english = $_POST['nama_english'];
        $singkatan = $_POST['singkatan'];
        $sub_matkul = $_POST['sub_matkul'];
        $sks_sub_matkul = $_POST['sks_sub_matkul'];
        $ekstakulikuler = $_POST['ekstakulikuler'];
        $j_matkul = $_POST['j_matkul'];
        $kel_matkul = $_POST['kel_matkul'];
        $matkul_pra = $_POST['matkul_pra'];
        $matkul_umum = $_POST['matkul_umum'];
        $prodi_lain = $_POST['prodi_lain'];
        $tatap_muka = $_POST['tatap_muka'];
        $pk = $_POST['pk'];
        $praktek = $_POST['praktek'];
        $simulasi = $_POST['simulasi'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $sks_sub_matkul = $_POST['sks_sub_matkul'];
        $tatap_muka = $_POST['tatap_muka'];
        $sks_praktikum = $_POST['sks_praktikum'];
        $sks_kp = $_POST['sks_kp'];
        $simulasi = $_POST['simulasi'];
        $fakultas = $_POST['fakultas'];
        $prodi = $_POST['prodi'];
        $jenjang = $_POST['jenjang'];
        $metode_kuliah = $_POST['metode_kuliah'];
        $ada_sap = $_POST['ada_sap'];
        $ada_silabus = $_POST['ada_silabus'];
        $ada_bahan_ajaran = $_POST['ada_bahan_ajaran'];
        $ada_acara_praktek = $_POST['ada_acara_praktek'];
        $ada_diktat = $_POST['ada_diktat'];
        $tgl_mulai = $_POST['tgl_mulai'];
        $tgl_akhir = $_POST['tgl_akhir'];
        $keberadaan = $_POST['keberadaan'];
        $keterangan = $_POST['keterangan'];

        $sqk = "UPDATE matkul SET kode = '$kode', 
                                        nama = '$nama', 
                                        nama_english = '$nama_english', 
                                        singkatan = '$singkatan', 
                                        sub_matkul = '$sub_matkul', 
                                        sks_sub_matkul = '$sks_sub_matkul', 
                                        ekstakulikuler = '$ekstakulikuler', j_matkul = '$j_matkul', 
                                        kel_matkul = '$kel_matkul', 
                                        matkul_pra = '$matkul_pra', 
                                        matkul_umum = '$matkul_umum', 
                                        prodi_lain = '$prodi_lain', 
                                        tatap_muka = '$tatap_muka', 
                                        praktek = '$praktek', 
                                        pk = '$pk', 
                                        simulasi = '$simulasi',
                                         uts = '$uts', 
                                        uas = '$uas', 
                                        sks_tatap_muka = '$sks_tatap_muka', 
                                        sks_praktikum = 'sks_praktikum$', 
                                        sks_kp = '$sks_kp', 
                                        sks_simulasi = '$sks_simulasi', 
                                        fakultas = '$fakultas', 
                                        prodi = '$prodi', 
                                        jenjang = '$jenjang', 
                                        metode_kuliah = '$metode_kuliah', 
                                        ada_sap = '$ada_sap', 
                                        ada_silabus = '$ada_silabus', 
                                        ada_bahan_ajar = '$ada_bahan_ajar', 
                                        ada_acara_praktek = '$ada_acara_praktek', 
                                        ada_diktat = '$ada_diktat', 
                                        tgl_mulai = '$tgl_mulai',
                                         tgl_akhir = '$tgl_akhir', 
                                         keberadaan = '$keberadaan', 
                                         keterangan = '$keterangan' WHERE id_matkul = '$id'  ";

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