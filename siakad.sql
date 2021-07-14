-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2019 at 07:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id_dosen` int(11) NOT NULL,
  `kode_nip` int(11) NOT NULL,
  `nama_dosesn` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gelar_akademik` varchar(50) NOT NULL,
  `tlpn_rumah` varchar(50) NOT NULL,
  `tlpn_pribadi` varchar(50) NOT NULL,
  `sim` varchar(50) NOT NULL,
  `kendaraan` varchar(50) NOT NULL,
  `p_menetap` varchar(50) NOT NULL,
  `p_mempin` varchar(50) NOT NULL,
  `nama_organisasi` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `minat_seni` varchar(100) NOT NULL,
  `k_bahasa1` varchar(100) NOT NULL,
  `k_bahasa2` varchar(100) NOT NULL,
  `k_bahasa3` varchar(100) NOT NULL,
  `rincian_keahlian1` text NOT NULL,
  `rincian_keahlian2` text NOT NULL,
  `rincian_keahlian3` text NOT NULL,
  `goldar` varchar(20) NOT NULL,
  `warga_negara` varchar(50) NOT NULL,
  `asal_negara` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tinggi_badan` int(6) NOT NULL,
  `berat_badan` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`id_dosen`, `kode_nip`, `nama_dosesn`, `jk`, `tempat_lahir`, `tgl_lahir`, `gelar_akademik`, `tlpn_rumah`, `tlpn_pribadi`, `sim`, `kendaraan`, `p_menetap`, `p_mempin`, `nama_organisasi`, `hobi`, `minat_seni`, `k_bahasa1`, `k_bahasa2`, `k_bahasa3`, `rincian_keahlian1`, `rincian_keahlian2`, `rincian_keahlian3`, `goldar`, `warga_negara`, `asal_negara`, `agama`, `tinggi_badan`, `berat_badan`) VALUES
(1, 544545, 'Sule', 'p', '$tempat_lahir', '2019-03-13', '$gelar', '', '$tlpn_pribadi', '$sim', '$kendaraan', 'pilih', 'pilih', '$nama_organisasi', '$hobi', '$tempat_lahir', '$k_bahasa1', '$k_bahasa1', '$k_bahasa1', '$rincian_keahlian1', '$rincian_keahlian2', '$rincian_keahlian3', '$goldar', 'pilih', 'pilih', '', 168, 65);

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id_datakelas` int(6) NOT NULL,
  `id_siswa` int(6) NOT NULL,
  `id_kelas` int(6) NOT NULL,
  `id_tahun` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(6) NOT NULL,
  `nip` int(30) NOT NULL,
  `nip_baru` int(30) NOT NULL,
  `no_ktp` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mulai_tgl` date NOT NULL,
  `status_pgw` varchar(100) NOT NULL,
  `status_sertifikat` varchar(100) NOT NULL,
  `upload` varchar(150) NOT NULL,
  `pendidikan_akhir` varchar(30) NOT NULL,
  `jns_tng_pendidikan` varchar(100) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `bahasa` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `telp` int(15) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `no_rek` int(25) NOT NULL,
  `karis` int(50) NOT NULL,
  `askes` int(50) NOT NULL,
  `taspen` int(50) NOT NULL,
  `karpeg` int(50) NOT NULL,
  `npwp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nip`, `nip_baru`, `no_ktp`, `nama`, `mulai_tgl`, `status_pgw`, `status_sertifikat`, `upload`, `pendidikan_akhir`, `jns_tng_pendidikan`, `status_perkawinan`, `jk`, `bahasa`, `email`, `agama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `hobi`, `telp`, `bank`, `no_rek`, `karis`, `askes`, `taspen`, `karpeg`, `npwp`) VALUES
(2, 111, 232323, 23232, 'sdsdsd', '2019-03-27', 'sdsdsd', 'sdsdsd', 'sdsdsd', 'sdsdsd', 'sdsdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsds', 'sdsd', 'sdsdsd', '01-01-1995', '0000-00-00', 'sdsdsd', 232323, 'dsdsd', 232323, 23232, 232323, 232323, 2323, 232332);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `ekuivalensi_sks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `keterangan`, `ekuivalensi_sks`) VALUES
(1, 'sssss', '   sdsds', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(6) NOT NULL,
  `id_kelas` int(6) NOT NULL,
  `id_matkul` int(6) NOT NULL,
  `jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(6) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(2, 'B1'),
(3, 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(6) NOT NULL,
  `nama_lokasi` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `alamat`, `keterangan`) VALUES
(9, 'usu', 'dr. manshur', 'sadfsafa'),
(10, 'stadionteladan', 'teladan', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(6) NOT NULL,
  `kode` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_english` varchar(50) NOT NULL,
  `singkatan` varchar(50) NOT NULL,
  `sub_matkul` varchar(50) NOT NULL,
  `sks_sub_matkul` varchar(50) NOT NULL,
  `ekstakulikuler` varchar(50) NOT NULL,
  `j_matkul` varchar(50) NOT NULL,
  `kel_matkul` varchar(50) NOT NULL,
  `matkul_pra` varchar(50) NOT NULL,
  `matkul_umum` varchar(50) NOT NULL,
  `prodi_lain` varchar(50) NOT NULL,
  `tatap_muka` varchar(50) NOT NULL,
  `praktek` varchar(50) NOT NULL,
  `pk` varchar(50) NOT NULL,
  `simulasi` varchar(50) NOT NULL,
  `uts` varchar(50) NOT NULL,
  `uas` varchar(50) NOT NULL,
  `sks_tatap_muka` int(6) NOT NULL,
  `sks_praktikum` int(6) NOT NULL,
  `sks_kp` int(6) NOT NULL,
  `sks_simulasi` int(6) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `metode_kuliah` varchar(50) NOT NULL,
  `ada_sap` varchar(50) NOT NULL,
  `ada_silabus` varchar(50) NOT NULL,
  `ada_bahan_ajar` varchar(50) NOT NULL,
  `ada_acara_praktek` varchar(50) NOT NULL,
  `ada_diktat` varchar(50) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keberadaan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `kode`, `nama`, `nama_english`, `singkatan`, `sub_matkul`, `sks_sub_matkul`, `ekstakulikuler`, `j_matkul`, `kel_matkul`, `matkul_pra`, `matkul_umum`, `prodi_lain`, `tatap_muka`, `praktek`, `pk`, `simulasi`, `uts`, `uas`, `sks_tatap_muka`, `sks_praktikum`, `sks_kp`, `sks_simulasi`, `fakultas`, `prodi`, `jenjang`, `metode_kuliah`, `ada_sap`, `ada_silabus`, `ada_bahan_ajar`, `ada_acara_praktek`, `ada_diktat`, `tgl_mulai`, `tgl_akhir`, `keberadaan`, `keterangan`) VALUES
(3, 32412313, 'qweqwe', 'qweqweqwe', 'qweqwewe', '', '$sks_sub_matkul', '', 'jk', 'jk', '', '', '', '$tatap_muka', '', '', '$simulasi', '', '', 0, 0, 0, 0, 'jk', 'jk', 'qweqwe', 'qweqwe', '', '', '', '', '', '0000-00-00', '0000-00-00', 'jk', '$keterangan'),
(4, 2, '$nama', '$nama_english', '$singkatan', '$sub_matkul', '$sks_sub_matkul', '$ekstakulikuler', '$j_matkul', '$kel_matkul', '$matkul_pra', '$matkul_umum', '$prodi_lain', '$tatap_muka', '$praktek', '$pk', '$simulasi', '$uts', '$uas', 10, 10, 1, 10, '$fakultas', '$prodi', '$jenjang', '$metode_kuliah', '$ada_sap', '$ada_silabus', '$ada_bahan_ajar', '$ada_acara_praktek', '$ada_diktat', '2019-03-05', '2019-03-07', '$keberadaan', '$keterangan'),
(5, 1, '$nama', '$nama_english', '$singkatan', '$sub_matkul', '$sks_sub_matkul', '$ekstakulikuler', '$j_matkul', '$kel_matkul', '$matkul_pra', '$matkul_umum', '$prodi_lain', '$tatap_muka', '$praktek', '$pk', '$simulasi', '$uts', '$uas', 1, 2, 3, 4, '$fakultas', '$prodi', '$jenjang', '$metode_kuliah', '$ada_sap', '$ada_silabus', '$ada_bahan', '0', '0', '0000-00-00', '0000-00-00', '', ''),
(6, 12, '$nama', '$nama_english', '$singkatan', '$sub_matkul', '$sks_sub_matkul', '$ekstakulikuler', '$j_matkul', '$kel_matkul', '$matkul_pra', '$matkul_umum', '$prodi_lain', '$tatap_muka', '$praktek', '$pk', '$simulasi', '$uts', '$uas', 2, 2, 2, 2, '$fakultas', '$prodi', '$jenjang', '$metode_kuliah', '$ada_sap', '1', '1', '1', '1', '2019-03-04', '2019-03-05', '$keberadaan', '$keterangan'),
(7, 234234, 'asddadas', 'dasdasdasd', 'asdasdasd', 'on', 'on', 'on', 'jk', 'jk', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'jk', 'jk', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'jk', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_toefl_mhs`
--

CREATE TABLE `nilai_toefl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `mhs` varchar(100) NOT NULL,
  `tgl_test` date NOT NULL,
  `jns_test` varchar(100) NOT NULL,
  `section1` int(50) NOT NULL,
  `section2` int(50) NOT NULL,
  `section3` int(50) NOT NULL,
  `section4` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_toefl_mhs`
--

INSERT INTO `nilai_toefl_mhs` (`id_mhs`, `mhs`, `tgl_test`, `jns_test`, `section1`, `section2`, `section3`, `section4`) VALUES
(8, 'keren', '2019-03-14', 'IELTS', 56, 56, 56, 56),
(9, 'qqqq', '2019-03-06', 'TOEFL', 34, 34, 23, 25),
(10, 'mantap jos', '2019-03-05', 'TOEFL', 32, 35, 43, 54);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_asset`
--

CREATE TABLE `pemilik_asset` (
  `id_pemilik_asset` int(6) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `fakulas` varchar(200) NOT NULL,
  `prodi` varchar(200) NOT NULL,
  `instansi` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun` int(6) NOT NULL,
  `nama_tahun` varchar(50) NOT NULL,
  `status_ta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun`, `nama_tahun`, `status_ta`) VALUES
(2, '2018', 'inactive'),
(3, '2019', 'inactive'),
(4, '2020', 'inactive'),
(5, '2021', 'inactive'),
(6, '2022', 'inactive'),
(7, '2023', 'inactive'),
(8, '2024', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id_datakelas`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `nilai_toefl_mhs`
--
ALTER TABLE `nilai_toefl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `pemilik_asset`
--
ALTER TABLE `pemilik_asset`
  ADD PRIMARY KEY (`id_pemilik_asset`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id_datakelas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilai_toefl_mhs`
--
ALTER TABLE `nilai_toefl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemilik_asset`
--
ALTER TABLE `pemilik_asset`
  MODIFY `id_pemilik_asset` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
