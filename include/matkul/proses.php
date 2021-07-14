<?php
    require_once 'include/koneksi.php';

    if ($_POST) {
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
        $praktek = $_POST['praktek'];
        $pk = $_POST['pk'];
        $simulasi = $_POST['simulasi'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        $sks_tatap_muka = $_POST['sks_tatap_muka'];
        $sks_praktikum = $_POST['sks_praktikum'];
        $sks_kp = $_POST['sks_kp'];
        $sks_simulasi = $_POST['sks_simulasi'];
        $fakultas = $_POST['fakultas'];
        $prodi = $_POST['prodi'];
        $jenjang = $_POST['jenjang'];
        $metode_kuliah = $_POST['metode_kuliah'];
        $ada_sap = $_POST['ada_sap'];
        $ada_silabus = $_POST['ada_silabus'];
        $ada_bahan_ajar = $_POST['ada_bahan_ajar'];
        $ada_acara_praktek = $_POST['ada_acara_praktek'];
        $ada_diktat = $_POST['ada_diktat'];
        $tgl_mulai = $_POST['tgl_mulai'];
        $tgl_akhir = $_POST['tgl_akhir'];
        $keberadaan = $_POST['keberadaan'];
        $keterangan = $_POST['keterangan'];

        $sqk = "INSERT INTO matkul ( kode, nama, nama_english, singkatan, sub_matkul, sks_sub_matkul, ekstakulikuler, j_matkul, kel_matkul, matkul_pra, matkul_umum, prodi_lain, tatap_muka, praktek, pk, simulasi, uts, uas, sks_tatap_muka, sks_praktikum, sks_kp, sks_simulasi, fakultas, prodi, jenjang, metode_kuliah, ada_sap, ada_silabus, ada_bahan_ajar, ada_acara_praktek, ada_diktat, tgl_mulai, tgl_akhir, keberadaan, keterangan) VALUES ('$kode', '$nama', '$nama_english', '$singkatan', '$sub_matkul', '$sks_sub_matkul', '$ekstakulikuler', '$j_matkul', '$kel_matkul', '$matkul_pra', '$matkul_umum', '$prodi_lain', '$tatap_muka', '$praktek', '$pk', '$simulasi', '$uts', '$uas', '$sks_tatap_muka', '$sks_praktikum', '$sks_kp', '$sks_simulasi', '$fakultas', '$prodi', '$jenjang', '$metode_kuliah', '$ada_sap', '$ada_silabus', '$ada_bahan_ajar', '$ada_acara_praktek', '$ada_diktat', '$tgl_mulai', '$tgl_akhir', '$keberadaan', '$keterangan')";

        if ($db -> query($sqk)) {
            echo "
                <script>
                    alert('Tambah Data Sukses');
                    window.location.href='?page=matkul/matkul.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    window.location.href='?page=matkul/form_matkul.php&err=1'
                </script>
            ";
        }

    } else {
        echo "
            <script>
                window.location.href='?page=matkul/form_matkul.php&err=2'
            </script>
        ";
    }
?>