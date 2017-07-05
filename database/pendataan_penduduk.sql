-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 07:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendataan_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_balasan_komentar`
--

CREATE TABLE IF NOT EXISTS `tb_balasan_komentar` (
  `id_balasan_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `id_komentar` int(5) DEFAULT NULL,
  `balasan` text COLLATE utf8_unicode_ci,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_balasan_komentar`),
  KEY `FK_tb_balasan_komentar_tb_komentar` (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_balasan_komentar`
--

INSERT INTO `tb_balasan_komentar` (`id_balasan_komentar`, `id_komentar`, `balasan`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 1, 'Kami sudah mengoreksinya pak. Silahkan dicek.\r\nTrims.', 'admin', '2016-09-12 17:42:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_perpindahan`
--

CREATE TABLE IF NOT EXISTS `tb_jenis_perpindahan` (
  `id_jenis_perpindahan` int(1) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_jenis_perpindahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_jenis_perpindahan`
--

INSERT INTO `tb_jenis_perpindahan` (`id_jenis_perpindahan`, `jenis`, `keterangan`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 'Pindah Masuk', 'Perpindahan penduduk ke Kecamatan Medan Petisah', 'SYSTEM', '2016-08-24 10:54:48', NULL, NULL),
(2, 'Pindah Keluar', 'Perpindahan penduduk dari Kecamatan Medan Petisah', 'SYSTEM', '2016-08-24 10:54:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluarga`
--

CREATE TABLE IF NOT EXISTS `tb_keluarga` (
  `id_keluarga` int(5) NOT NULL AUTO_INCREMENT,
  `id_kelurahan` int(2) DEFAULT NULL,
  `id_status_keluarga` int(1) DEFAULT NULL,
  `nomor_kk` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `password_kk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_keluarga`),
  KEY `FK_tb_keluarga_tb_kelurahan` (`id_kelurahan`),
  KEY `FK_tb_keluaga_tb_status_keluarga_penduduk` (`id_status_keluarga`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tb_keluarga`
--

INSERT INTO `tb_keluarga` (`id_keluarga`, `id_kelurahan`, `id_status_keluarga`, `nomor_kk`, `password_kk`, `alamat`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(10, 3, 1, '1271190912100001', 'tunggul', 'Jl sei bayang gadis no 2b', 'admin', '2016-11-06 02:54:17', 'admin', '2016-11-06 02:56:46'),
(11, 3, 1, '1271192908070022', 'rela', 'jl titi papan gg pertama no 9', 'admin', '2016-11-06 03:08:32', NULL, NULL),
(12, 3, 1, '1271191104130006', 'supriono', 'jl. sei sibundong no 32', 'admin', '2016-11-06 03:20:31', NULL, NULL),
(13, 3, 1, '1271192808070066', 'tison', 'Jln Sei Siguti no 20', 'SeisikambingD', '2016-11-12 05:07:35', NULL, NULL),
(14, 3, 1, '1271190095805002', 'krismanta', 'Jln Sei Situmandi no 3c', 'SeisikambingD', '2016-11-12 05:09:00', NULL, NULL),
(15, 3, 1, '1271198095060081', 'muksin', 'Jln Sei Siguti no 105', 'SeisikambingD', '2016-11-12 05:10:19', NULL, NULL),
(16, 3, 1, '1271190806007020', 'rendi', 'Jln Dame gg Permai no 2', 'SeisikambingD', '2016-11-12 05:11:25', 'SeisikambingD', '2016-11-12 05:27:15'),
(17, 2, 1, '1171180960077200', 'togar', 'Jln Merbau no 201a', 'sekip', '2016-11-12 18:33:39', NULL, NULL),
(18, 2, 1, '1171180918720010', 'mali', 'Jln Punak no 104', 'sekip', '2016-11-12 18:34:50', NULL, NULL),
(19, 2, 1, '1171189009870012', 'julius', 'Jln Punak no 323', 'sekip', '2016-11-12 18:35:36', NULL, NULL),
(20, 1, 1, '1071170600820010', 'fahreza', 'Jln Orion no 32', 'petisah', '2016-11-12 19:06:11', NULL, NULL),
(21, 1, 1, '1071177006081003', 'erwin', 'Jln Rotan proyek no 55', 'petisah', '2016-11-12 19:07:07', NULL, NULL),
(22, 1, 1, '1071172100310081', 'Herianto', 'Jln Ibus Raya no 141', 'petisah', '2016-11-12 19:16:50', NULL, NULL),
(23, 4, 1, '137131200711010', 'jujung', 'Jln Notes no 45', 'seiputihbarat', '2016-11-12 20:23:52', NULL, NULL),
(24, 4, 1, '1371130390081201', 'sudaedi', 'Jln Batu Tulis no 4', 'seiputihbarat', '2016-11-12 20:24:54', NULL, NULL),
(25, 4, 1, '1371130400102010', 'suherman', 'Jln Sosial no 56', 'seiputihbarat', '2016-11-12 20:26:21', NULL, NULL),
(26, 6, 1, '1671160102081720', 'tonggo', 'Jln abrik Tenun no 77', 'seitimurI', '2016-11-13 00:02:13', NULL, NULL),
(27, 6, 1, '1671160010021008', 'sutrisna', 'Jln Surau no 90', 'seitimurI', '2016-11-13 00:03:14', NULL, NULL),
(28, 9, 1, '1571150567010020', 'habibi', 'Jln Moh, Idris gg Supir no 2', 'seitimurII', '2016-11-13 00:19:27', NULL, NULL),
(29, 9, 1, '1571154208003020', 'sugeng', 'Jln Moh. Idris gg Famili no 50', 'seitimurII', '2016-11-13 00:20:29', NULL, NULL),
(30, 9, 1, '1571150432001101', 'rudman', 'Jln, Moh. Idris gg Supir no 320', 'seitimurII', '2016-11-13 00:22:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelurahan`
--

CREATE TABLE IF NOT EXISTS `tb_kelurahan` (
  `id_kelurahan` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `luas_wilayah` int(10) DEFAULT NULL,
  `jumlah_penduduk` int(10) DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kelurahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`id_kelurahan`, `nama`, `luas_wilayah`, `jumlah_penduduk`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 'Petisah Tengah', 127, 1500, '', '2016-08-13 08:39:00', 'admin', '2016-08-30 08:34:00'),
(2, 'Sekip ', 61, 1500, 'admin', '2016-08-13 08:49:00', 'admin', '2016-08-30 08:47:00'),
(3, 'Sei Sikambing D', 92, 1500, 'admin', '2016-08-13 08:12:00', 'admin', '2016-08-30 08:01:00'),
(4, 'Sei Putih Barat', 86, 1500, 'admin', '2016-08-13 08:32:00', 'admin', '2016-08-30 08:11:00'),
(5, 'Sei Putih Tengah', 50, 1500, 'admin', '2016-08-13 08:58:00', 'admin', '2016-08-30 08:25:00'),
(6, 'Sei Timur I', 32, 1500, 'admin', '2016-08-13 08:25:00', 'admin', '2016-08-30 08:33:00'),
(9, 'Sei Timur II', 34, 1500, 'admin', '2016-08-14 08:28:00', 'admin', '2016-08-30 08:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE IF NOT EXISTS `tb_komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `id_kelurahan` int(1) DEFAULT NULL,
  `id_keluarga` int(5) DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `komentar` text COLLATE utf8_unicode_ci,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_kelurahan`, `id_keluarga`, `judul`, `komentar`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 3, 12, 'Nama Anak saya salah, mohon dikoreksi', 'Selamat sore Admin, nama anak saya......', '1271191104130006', '2016-09-12 17:41:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_penduduk_lahir`
--

CREATE TABLE IF NOT EXISTS `tb_laporan_penduduk_lahir` (
  `id_laporan_penduduk_lahir` int(10) NOT NULL AUTO_INCREMENT,
  `id_keluarga` int(5) DEFAULT NULL,
  `nomor_akte_kelahiran` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_lampiran` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_penduduk_ayah` int(10) DEFAULT NULL,
  `id_penduduk_ibu` int(10) DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `hubungan_keluarga` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anak_ke` int(2) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disetujui` int(1) DEFAULT '0',
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_laporan_penduduk_lahir`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_laporan_penduduk_lahir`
--

INSERT INTO `tb_laporan_penduduk_lahir` (`id_laporan_penduduk_lahir`, `id_keluarga`, `nomor_akte_kelahiran`, `file_lampiran`, `id_penduduk_ayah`, `id_penduduk_ibu`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `hubungan_keluarga`, `anak_ke`, `keterangan`, `disetujui`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(2, 7, '21/AKTE-KL/08/2016', '../upload/akte_kelahiran/2016-08-28_Pradana Sinaga_7.png', 20, 21, 'Pradana Sinaga', 'Laki-laki', 'Medan', '2016-08-28', 'Anak Kandung', 1, 'Keterangan Kelahiran', 1, '7', '2016-08-28 12:53:40', NULL, NULL),
(3, 12, '21/AKTE-KL/09/2016', '../upload/akte_kelahiran/2016-09-01_Tahan Sagala_14.pdf', 30, 31, 'Tahan Sagala', 'Laki-laki', 'Medan', '2016-09-01', 'Anak Kandung', 3, 'Anak lahir pada tanggall....', 1, '12', '2016-09-12 05:34:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_penduduk_meninggal`
--

CREATE TABLE IF NOT EXISTS `tb_laporan_penduduk_meninggal` (
  `id_laporan_penduduk_meninggal` int(10) NOT NULL AUTO_INCREMENT,
  `id_keluarga` int(5) DEFAULT NULL,
  `id_penduduk` int(10) DEFAULT NULL,
  `waktu_meninggal` date DEFAULT NULL,
  `nomor_surat_keterangan_kematian` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_lampiran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disetujui` int(1) DEFAULT '0',
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_laporan_penduduk_meninggal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_laporan_penduduk_meninggal`
--

INSERT INTO `tb_laporan_penduduk_meninggal` (`id_laporan_penduduk_meninggal`, `id_keluarga`, `id_penduduk`, `waktu_meninggal`, `nomor_surat_keterangan_kematian`, `file_lampiran`, `keterangan`, `disetujui`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 7, 23, '2016-08-28', '14/K/08/2016', '../upload/akte_kematian/2016-08-28_23_88.png', 'Keterangan Meninggal Dunia', 1, '12345678912346', '2016-08-28 13:40:19', NULL, NULL),
(2, 12, 95, '2016-09-12', '14/K/08/2016', '../upload/akte_kematian/2016-09-12_95_86.pdf', 'Keterangan coba ', 1, '1271191104130006', '2016-09-12 17:38:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE IF NOT EXISTS `tb_penduduk` (
  `id_penduduk` int(10) NOT NULL AUTO_INCREMENT,
  `id_keluarga` int(5) DEFAULT NULL,
  `id_status_penduduk` int(1) DEFAULT NULL,
  `id_perpindahan_penduduk` int(10) DEFAULT NULL,
  `id_laporan_penduduk_lahir` int(10) DEFAULT NULL,
  `id_laporan_penduduk_meninggal` int(5) DEFAULT NULL,
  `nik` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hubungan_keluarga` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_penduduk`),
  KEY `FK_tb_penduduk_tb_keluarga` (`id_keluarga`),
  KEY `FK_tb_penduduk_tb_status_keluarga_penduduk` (`id_status_penduduk`),
  KEY `FK_tb_penduduk_tb_perpindahan_penduduk` (`id_perpindahan_penduduk`),
  KEY `FK_tb_penduduk_tb_laporan_penduduk_lahir` (`id_laporan_penduduk_lahir`),
  KEY `FK_tb_penduduk_tb_laporan_penduduk_meninggal` (`id_laporan_penduduk_meninggal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=97 ;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `id_keluarga`, `id_status_penduduk`, `id_perpindahan_penduduk`, `id_laporan_penduduk_lahir`, `id_laporan_penduduk_meninggal`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pekerjaan`, `pendidikan`, `hubungan_keluarga`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(24, 10, 1, NULL, NULL, NULL, '1271033006670005', 'Tunggul Hamonangan Manurung', 'Laki-laki', 'Tangjung Balai', '1967-11-30', 'Kristen Protestan', 'Pegawai Negri Sipil', 'S1', 'Kepala Keluarga', 'admin', '2016-11-06 03:00:30', NULL, NULL),
(25, 10, 1, NULL, NULL, NULL, '1271036310870001', 'Isabella Oktavia ', 'Perempuan', 'Bt. Serangan', '1987-10-23', 'Kristen Protestan', 'Ibu Rumah Tangga', 'S1', 'Ibu Rumah Tangga', 'admin', '2016-11-06 03:03:02', NULL, NULL),
(26, 10, 1, NULL, NULL, NULL, '1271031408100002', 'Nicolas Habel Manurung', 'Laki-laki', 'Medan', '2010-08-14', 'Kristen Protestan', 'belum/tidak bekerja', 'belum/tidak sekolah', 'Anak Kandung', 'admin', '2016-11-06 03:06:45', NULL, NULL),
(27, 11, 1, NULL, NULL, NULL, '1271192508600003', 'Rela tarigan', 'Laki-laki', 'Lau Kapur', '1960-08-25', 'Kristen Protestan', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'admin', '2016-11-06 03:11:56', NULL, NULL),
(28, 11, 1, NULL, NULL, NULL, '1271192903900002', 'Edward Candra Tarigan', 'Laki-laki', 'Lau Maciho', '1997-03-29', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Anak Kandung', 'admin', '2016-11-06 03:16:36', NULL, NULL),
(29, 11, 1, NULL, NULL, NULL, '1271036310870001', 'Rysna br Karo-karo', 'Perempuan', 'Kutam baru', '1965-05-28', 'Kristen Protestan', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'admin', '2016-11-06 03:18:57', NULL, NULL),
(30, 12, 1, NULL, NULL, NULL, '3275112512870007', 'Supriono', 'Laki-laki', 'Medan', '1987-12-25', 'Islam', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'admin', '2016-11-06 03:22:39', NULL, NULL),
(31, 12, 1, NULL, NULL, NULL, '3275116802940008', 'Sri Wahyuni', 'Perempuan', 'Medan', '1994-02-28', 'Islam', 'Ibu Rumah Tangga', 'SLTP/sederajat', 'Ibu Rumah Tangga', 'admin', '2016-11-06 03:25:08', NULL, NULL),
(32, 12, 1, NULL, NULL, NULL, '1271190304130001', 'M Aliy Nugroho', 'Laki-laki', 'Medan', '2013-04-03', 'Islam', 'belum/tidak bekerja', 'belum/tidak sekolah', 'Anak Kandung', 'admin', '2016-11-06 03:27:06', NULL, NULL),
(33, 12, 1, NULL, NULL, NULL, '1271191507140002', 'Hafiz Djahit Al Khadri', 'Laki-laki', 'Medan', '2014-07-15', 'Islam', 'belum/tidak bekerja', 'belum/tidak sekolah', 'Anak Kandung', 'admin', '2016-11-06 03:28:59', NULL, NULL),
(34, 13, 1, NULL, NULL, NULL, '1271192702800004', 'Tison Simanjuntak', 'Laki-laki', 'Pematang Siantar', '1980-02-27', 'Kristen Protestan', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'SeisikambingD', '2016-11-12 05:14:29', NULL, NULL),
(35, 13, 1, NULL, NULL, NULL, '1271191608850003', 'Nirma Br Manurung', 'Perempuan', 'Medan', '1985-08-16', 'Kristen Protestan', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'SeisikambingD', '2016-11-12 05:17:37', NULL, NULL),
(36, 13, 1, NULL, NULL, NULL, '1271190705080003', 'Cintia br Simanjuntak', 'Perempuan', 'Medan', '2008-05-07', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:22:35', NULL, NULL),
(37, 13, 1, NULL, NULL, NULL, '1271192208120005', 'Laura br Simanjuntak', 'Perempuan', 'Medan', '2012-08-22', 'Kristen Protestan', 'belum/tidak bekerja', 'belum/tidak sekolah', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:25:03', NULL, NULL),
(38, 14, 1, NULL, NULL, NULL, '3071151502700007', 'Krismanta Tarigan', 'Laki-laki', 'Tebing Tinggi', '1970-02-15', 'Islam', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'SeisikambingD', '2016-11-12 05:30:07', NULL, NULL),
(39, 14, 1, NULL, NULL, NULL, '3071152109750001', 'Eva bi Ginting', 'Perempuan', 'Tiga Panah', '1975-09-21', 'Islam', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'SeisikambingD', '2016-11-12 05:32:21', NULL, NULL),
(40, 14, 1, NULL, NULL, NULL, '1271190111970002', 'Riko Simon Tarigan', 'Laki-laki', 'Tiga Panah', '1997-11-01', 'Islam', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:34:17', NULL, NULL),
(41, 14, 1, NULL, NULL, NULL, '1271190412990003', 'Rini  Tarigan', 'Perempuan', 'Medan', '1999-12-04', 'Islam', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:36:25', 'SeisikambingD', '2016-11-12 05:38:00'),
(42, 14, 1, NULL, NULL, NULL, '1271190402020002', 'Rianti Tarigan', 'Perempuan', 'Medan', '2002-02-04', 'Islam', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:43:59', NULL, NULL),
(43, 15, 1, NULL, NULL, NULL, '1271191003850005', 'Muksin Ali', 'Laki-laki', 'Medan', '1985-03-10', 'Islam', 'Pegawai Negri Sipil', 'Diploma 4/Strata 1', 'Kepala Keluarga', 'SeisikambingD', '2016-11-12 05:48:05', NULL, NULL),
(44, 15, 1, NULL, NULL, NULL, '1271192910870004', 'Sri Rahayu', 'Perempuan', 'Binjai', '1987-10-29', 'Islam', 'Ibu Rumah Tangga', 'Diploma 3', 'Ibu Rumah Tangga', 'SeisikambingD', '2016-11-12 05:49:40', NULL, NULL),
(45, 15, 1, NULL, NULL, NULL, '1271192711070003', 'Noor Risky', 'Laki-laki', 'Medan', '2007-11-27', 'Islam', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:51:13', NULL, NULL),
(46, 16, 1, NULL, NULL, NULL, '1271192405700007', 'Rendi Sijabat', 'Laki-laki', 'Jakarta', '1970-05-24', 'Katholik', 'wiraswasta', 'Diploma 3', 'Kepala Keluarga', 'SeisikambingD', '2016-11-12 05:53:36', NULL, NULL),
(47, 16, 1, NULL, NULL, NULL, '1271192508730008', 'Sinta Nababan', 'Perempuan', 'Sidikalang', '1973-08-25', 'Katholik', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'SeisikambingD', '2016-11-12 05:55:29', NULL, NULL),
(48, 16, 1, NULL, NULL, NULL, '1271190812040005', 'Renta Ria Sijabat', 'Perempuan', 'Medan', '2004-12-08', 'Katholik', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:56:48', NULL, NULL),
(49, 16, 1, NULL, NULL, NULL, '1271191510090004', 'Dina Sijabat', 'Perempuan', 'Medan', '2009-10-15', 'Katholik', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'SeisikambingD', '2016-11-12 05:58:46', NULL, NULL),
(50, 17, 1, NULL, NULL, NULL, '117118110118008', 'Togar Hutajulu', 'Laki-laki', 'Porsea', '1960-10-11', 'Kristen Protestan', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'sekip', '2016-11-12 18:38:35', NULL, NULL),
(51, 17, 1, NULL, NULL, NULL, '1171182204620005', 'Tiurma br Siahaan', 'Perempuan', 'Balige', '1962-04-22', 'Kristen Protestan', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'sekip', '2016-11-12 18:40:15', NULL, NULL),
(52, 17, 1, NULL, NULL, NULL, '1171183011887000', 'Sahat Hutajulu', 'Laki-laki', 'Porsea', '1987-11-30', 'Kristen Protestan', 'wiraswasta', 'SLTA/sederajat', 'Saudara/Famili', 'sekip', '2016-11-12 18:41:51', NULL, NULL),
(53, 17, 1, NULL, NULL, NULL, '1171182505930003', 'Tessa br Hutajulu', 'Perempuan', 'Porsea', '1993-05-25', 'Kristen Protestan', 'Guru', 'Diploma 4/Strata 1', 'Saudara/Famili', 'sekip', '2016-11-12 18:43:30', NULL, NULL),
(54, 17, 1, NULL, NULL, NULL, '1171182208970002', 'Trisnawati br Hutajulu', 'Perempuan', 'Porsea', '1997-08-22', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Anak Kandung', 'sekip', '2016-11-12 18:45:23', NULL, NULL),
(55, 17, 1, NULL, NULL, NULL, '1171180806990001', 'Ririn br Hutajulu', 'Perempuan', 'Medan', '1999-03-17', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Anak Kandung', 'sekip', '2016-11-12 18:46:51', NULL, NULL),
(56, 17, 1, NULL, NULL, NULL, '1171181703080008', 'Tunggu Hujtajulu', 'Laki-laki', 'Medan', '2008-03-17', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'sekip', '2016-11-12 18:48:17', NULL, NULL),
(57, 18, 1, NULL, NULL, NULL, '1171181606800001', 'M. Ali Sastra', 'Laki-laki', 'Tanah Jawa', '1980-06-16', 'Islam', 'Pegawai Negri Sipil', 'Diploma 4/Strata 1', 'Kepala Keluarga', 'sekip', '2016-11-12 18:49:51', NULL, NULL),
(58, 18, 1, NULL, NULL, NULL, '1171183007820003', 'Yuyun', 'Perempuan', 'Tiga Ras', '1982-07-30', 'Islam', 'Pegawai Negri Sipil', 'Diploma 4/Strata 1', 'Ibu Rumah Tangga', 'sekip', '2016-11-12 18:51:20', NULL, NULL),
(59, 18, 1, NULL, NULL, NULL, '1171182704040002', 'Nur Cahayu', 'Perempuan', 'Medan', '2004-04-27', 'Islam', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'sekip', '2016-11-12 18:53:05', NULL, NULL),
(60, 19, 1, NULL, NULL, NULL, '1171180412890007', 'Julius Sitepu', 'Laki-laki', 'Medan', '1989-12-04', 'Katholik', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'sekip', '2016-11-12 18:54:44', NULL, NULL),
(61, 19, 1, NULL, NULL, NULL, '117118305910003', 'Trianita br Sembiring', 'Perempuan', 'Medan', '1991-05-30', 'Katholik', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'sekip', '2016-11-12 18:56:13', NULL, NULL),
(62, 19, 1, NULL, NULL, NULL, '1171181010010002', 'Duma br Sitepu', 'Perempuan', 'Medan', '2001-10-10', 'Katholik', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Anak Kandung', 'sekip', '2016-11-12 18:57:39', NULL, NULL),
(63, 19, 1, NULL, NULL, NULL, '1171181308050004', 'Stevan Sitepu', 'Laki-laki', 'Medan', '2005-08-13', 'Katholik', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'sekip', '2016-11-12 18:58:57', NULL, NULL),
(64, 20, 1, NULL, NULL, NULL, '1071171809750005', 'Fahreza', 'Laki-laki', 'Kisaran', '1975-09-18', 'Islam', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'petisah', '2016-11-12 19:18:29', NULL, NULL),
(65, 20, 1, NULL, NULL, NULL, '1071172508770007', 'Nurmala Sari', 'Perempuan', 'Kisaran', '1977-08-25', 'Islam', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'petisah', '2016-11-12 19:19:46', NULL, NULL),
(66, 20, 1, NULL, NULL, NULL, '1071172907020002', 'Noor Fadli', 'Laki-laki', 'Medan', '2002-07-29', 'Islam', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Anak Kandung', 'petisah', '2016-11-12 19:21:33', NULL, NULL),
(67, 20, 1, NULL, NULL, NULL, '1071170103050005', 'Noor REZA', 'Laki-laki', 'Medan', '2005-03-01', 'Islam', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'petisah', '2016-11-12 19:22:58', NULL, NULL),
(68, 21, 1, NULL, NULL, NULL, '1071172001700007', 'Erwin Simamora', 'Laki-laki', 'Indrapura', '1970-01-20', 'Katholik', 'Guru', 'Diploma 4/Strata 1', 'Kepala Keluarga', 'petisah', '2016-11-12 19:24:41', NULL, NULL),
(69, 21, 1, NULL, NULL, NULL, '1071171009730003', 'Pratiwi br Siahaan', 'Perempuan', 'Kuala Tanjung', '1973-09-10', 'Katholik', 'Guru', 'Diploma 4/Strata 1', 'Ibu Rumah Tangga', 'petisah', '2016-11-12 19:26:21', NULL, NULL),
(70, 21, 1, NULL, NULL, NULL, '1071171405990001', 'Clara br Simamora', 'Perempuan', 'Indrapura', '1999-05-14', 'Katholik', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Saudara/Famili', 'petisah', '2016-11-12 19:27:52', NULL, NULL),
(71, 21, 1, NULL, NULL, NULL, '1071171306000001', 'Junior Simamora', 'Laki-laki', 'Medan', '2000-06-13', 'Katholik', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Anak Kandung', 'petisah', '2016-11-12 19:30:34', NULL, NULL),
(72, 21, 1, NULL, NULL, NULL, '1071172701070002', 'Simon Simamora', 'Laki-laki', 'Medan', '2007-01-27', 'Katholik', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'petisah', '2016-11-12 19:31:55', NULL, NULL),
(73, 22, 1, NULL, NULL, NULL, '1071171212670003', 'Herianto Pardede', 'Laki-laki', 'Medan', '1967-12-12', 'Katholik', 'Pegawai Negri Sipil', 'Diploma 4/Strata 1', 'Kepala Keluarga', 'petisah', '2016-11-12 19:33:21', NULL, NULL),
(74, 22, 1, NULL, NULL, NULL, '1071172106770007', 'Cristina Tampubolon', 'Perempuan', 'Medan', '1977-06-21', 'Katholik', 'Ibu Rumah Tangga', 'Diploma 3', 'Ibu Rumah Tangga', 'petisah', '2016-11-12 19:56:00', NULL, NULL),
(75, 22, 1, NULL, NULL, NULL, '1071172901001', 'Brigita br Pardede', 'Perempuan', 'Medan', '2001-01-29', 'Katholik', 'Pelajar/Mahasiswa', 'SMP/Sederajat', 'Anak Kandung', 'petisah', '2016-11-12 19:57:30', NULL, NULL),
(76, 22, 1, NULL, NULL, NULL, '1071170703110002', 'Claudia Sari br Pardede', 'Perempuan', 'Medan', '2011-03-07', 'Katholik', 'belum/tidak bekerja', 'belum/tidak sekolah', 'Anak Kandung', 'petisah', '2016-11-12 19:59:05', NULL, NULL),
(77, 23, 1, NULL, NULL, NULL, '1371132803600003', 'Jujung Manik', 'Laki-laki', 'Dolok Sanggul', '1960-03-28', 'Kristen Protestan', 'wiraswasta', 'SMP/Sederajat', 'Kepala Keluarga', 'seiputihbarat', '2016-11-12 20:28:05', NULL, NULL),
(78, 23, 1, NULL, NULL, NULL, '1371132107600002', 'Lusinda Nainggolan', 'Perempuan', 'Pematang Siantar', '1960-07-21', 'Kristen Protestan', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'seiputihbarat', '2016-11-12 20:30:07', NULL, NULL),
(79, 23, 1, NULL, NULL, NULL, '1371131704900001', 'Jansen Saputra Manik', 'Laki-laki', 'Pematang Siantar', '1990-04-17', 'Kristen Protestan', 'wiraswasta', 'SLTA/sederajat', 'Anak Kandung', 'seiputihbarat', '2016-11-12 20:31:50', NULL, NULL),
(80, 23, 1, NULL, NULL, NULL, '1371130401950002', 'Nicolas Manik', 'Laki-laki', 'Medan', '1995-01-04', 'Kristen Protestan', 'wiraswasta', 'SLTA/sederajat', 'Anak Kandung', 'seiputihbarat', '2016-11-12 20:33:05', NULL, NULL),
(81, 24, 1, NULL, NULL, NULL, '1371132009890008', 'Suhardi Sitepu', 'Laki-laki', 'Nias', '1989-09-20', 'Kristen Protestan', 'Pegawai Negri Sipil', 'Diploma 4/Strata 1', 'Kepala Keluarga', 'seiputihbarat', '2016-11-12 20:35:06', 'seiputihbarat', '2016-11-12 20:55:06'),
(82, 24, 1, NULL, NULL, NULL, '1371131701910001', 'Indah Sari Pardosi', 'Perempuan', 'Medan', '1991-01-17', 'Kristen Protestan', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'seiputihbarat', '2016-11-12 20:36:28', NULL, NULL),
(83, 24, 1, NULL, NULL, NULL, '1371130701100004', 'Cantika Verawati Siteu', 'Perempuan', 'Medan', '2010-03-07', 'Kristen Protestan', 'belum/tidak bekerja', 'belum/tidak sekolah', 'Anak Kandung', 'seiputihbarat', '2016-11-12 20:37:59', NULL, NULL),
(84, 25, 1, NULL, NULL, NULL, '1371130107700001', 'Suherman', 'Laki-laki', 'Perbaungan', '1970-07-01', 'Islam', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'seiputihbarat', '2016-11-12 20:47:14', NULL, NULL),
(85, 25, 1, NULL, NULL, NULL, '1371131205730002', 'Siti Aisyah', 'Perempuan', 'Medan', '1973-05-12', 'Islam', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'seiputihbarat', '2016-11-12 20:50:29', NULL, NULL),
(86, 25, 1, NULL, NULL, NULL, '1371131503940003', 'Nurida', 'Perempuan', 'Medan', '1994-03-15', 'Islam', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Anak Kandung', 'seiputihbarat', '2016-11-12 20:51:40', NULL, NULL),
(87, 25, 1, NULL, NULL, NULL, '1371131010196000', 'Lisda', 'Perempuan', 'Medan', '1996-10-10', 'Islam', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Anak Kandung', 'seiputihbarat', '2016-11-12 20:52:45', NULL, NULL),
(88, 26, 1, NULL, NULL, NULL, '1671162406800003', 'Tonggo Manurung', 'Laki-laki', 'Laguboti', '1980-06-24', 'Kristen Protestan', 'wiraswasta', 'SLTA/sederajat', 'Kepala Keluarga', 'seitimurI', '2016-11-13 00:07:45', NULL, NULL),
(89, 26, 1, NULL, NULL, NULL, '1671163009830002', 'Yohana Tambunan', 'Perempuan', 'Pematang Siantar', '1983-09-30', 'Kristen Protestan', 'Ibu Rumah Tangga', 'SLTA/sederajat', 'Ibu Rumah Tangga', 'seitimurI', '2016-11-13 00:09:10', NULL, NULL),
(90, 26, 1, NULL, NULL, NULL, '1671161905990001', 'Martian Manurung', 'Perempuan', 'Laguboti', '1999-05-19', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SLTA/sederajat', 'Saudara/Famili', 'seitimurI', '2016-11-13 00:10:37', 'seitimurI', '2016-11-13 00:11:00'),
(91, 26, 1, NULL, NULL, NULL, '1671162304060001', 'Luisha Manurung', 'Perempuan', 'Medan', '2006-04-23', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'seitimurI', '2016-11-13 00:12:39', 'seitimurI', '2016-11-13 00:15:12'),
(92, 26, 1, NULL, NULL, NULL, '1671161801080002', 'Tressia Manurung', 'Perempuan', 'Medan', '2008-01-18', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SD/Sederajat', 'Anak Kandung', 'seitimurI', '2016-11-13 00:14:46', NULL, NULL),
(93, 26, 1, NULL, NULL, NULL, '1671161311130003', 'Jaka Manurung', 'Laki-laki', 'Medan', '2013-11-13', 'Kristen Protestan', 'belum/tidak bekerja', 'belum/tidak sekolah', 'Anak Kandung', 'seitimurI', '2016-11-13 00:16:42', NULL, NULL),
(94, 28, 1, NULL, NULL, NULL, '1571151412790009', 'Habibi', 'Laki-laki', 'Bandar Lampung', '1979-12-14', 'Islam', 'Pegawai Negri Sipil', 'Diploma 3', 'Kepala Keluarga', 'seitimurII', '2016-11-13 00:24:35', NULL, NULL),
(95, 12, 4, NULL, 3, NULL, '-', 'Tahan Sagala', 'Laki-laki', 'Medan', '2016-09-01', 'Islam', '-', '-', 'Anak Kandung', 'admin', '2016-09-12 17:36:43', NULL, NULL),
(96, 12, 2, 13, NULL, NULL, '1204121110750002', 'Harimau Sinaga', 'Laki-laki', 'Medan', '2005-09-01', 'Kristen Protestan', 'Pelajar/Mahasiswa', 'SMP', 'Saudara/Famili', 'admin', '2016-09-12 17:45:19', 'admin', '2016-09-12 17:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perpindahan_penduduk`
--

CREATE TABLE IF NOT EXISTS `tb_perpindahan_penduduk` (
  `id_perpindahan_penduduk` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis_perpindahan` int(1) DEFAULT NULL,
  `nomor_surat_pindah` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_lampiran` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_pindah` date DEFAULT NULL,
  `alamat_asal_tujuan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kecamatan_asal_tujuan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kabupaten_asal_tujuan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provinsi_asal_tujuan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_perpindahan_penduduk`),
  KEY `FK_tb_perpindahan_penduduk` (`id_jenis_perpindahan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tb_perpindahan_penduduk`
--

INSERT INTO `tb_perpindahan_penduduk` (`id_perpindahan_penduduk`, `id_jenis_perpindahan`, `nomor_surat_pindah`, `file_lampiran`, `tanggal_pindah`, `alamat_asal_tujuan`, `kecamatan_asal_tujuan`, `kabupaten_asal_tujuan`, `provinsi_asal_tujuan`, `keterangan`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(10, 1, '1421/PD-M/08/2016', '../upload/lain_lain/pindah_masuk_2185430206960008_Balian_Sibuea_100.png', '2016-08-25', 'Jalan Sisingamangaraja No. 44 Sibolga', 'Pandan', 'Kota Sibolga', 'Sumatera Utara', 'Pindah karena kuliah', 'desa1', '2016-08-28 11:33:28', NULL, NULL),
(11, 2, '1422/PD-M/08/2016', '../upload/lain_lain/pindah_keluar_12345678912341_2016-08-27_56.jpg', '2016-08-27', 'Batam', 'Batam', 'Kota Batam', 'Kepulauan Riau', 'Pindah ke batam', 'niko', '2016-08-28 12:07:54', NULL, NULL),
(12, 1, '1421/PD-M/08/2016', '../upload/lain_lain/pindah_masuk_1204121110750002_Harimau_Sinaga_26.pdf', '2016-09-12', 'Jalan Cinge', 'Medan Poloni', 'Medan', 'Sumatera Utara', 'Keterangan Pindadh', 'admin', '2016-09-12 17:45:19', NULL, NULL),
(13, 2, '1422/PD-M/08/2016', '../upload/lain_lain/pindah_keluar_1204121110750002_2016-09-12_11.pdf', '2016-09-12', 'Jalan Sukaria', 'Medan Perjuangan', 'Medan', 'Sumatera Utara', 'Keterangan pindah keluar', 'admin', '2016-09-12 17:52:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_persetujuan_laporan_penduduk`
--

CREATE TABLE IF NOT EXISTS `tb_persetujuan_laporan_penduduk` (
  `id_persetujuan_laporan` int(5) NOT NULL AUTO_INCREMENT,
  `id_laporan_penduduk_lahir` int(5) DEFAULT NULL,
  `id_laporan_penduduk_meninggal` int(5) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_persetujuan_laporan`),
  KEY `FK_tb_persetujuan_laporan_penduduk_tb_laporan_penduduk_lahir` (`id_laporan_penduduk_lahir`),
  KEY `FK_tb_persetujuan_laporan_penduduk_tb_laporan_penduduk_meninggal` (`id_laporan_penduduk_meninggal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_keluarga_penduduk`
--

CREATE TABLE IF NOT EXISTS `tb_status_keluarga_penduduk` (
  `id_status_penduduk` int(1) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_rekam` datetime DEFAULT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_status_penduduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_status_keluarga_penduduk`
--

INSERT INTO `tb_status_keluarga_penduduk` (`id_status_penduduk`, `status`, `keterangan`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 'Aktif', 'Penduduk aktif', 'SYSTEM', '2016-08-07 18:39:50', NULL, NULL),
(2, 'Pindah', 'Penduduk yang pindah domisili di luar wilayah kecamatan medan petisah', 'SYSTEM', '2016-08-07 18:39:50', NULL, NULL),
(3, 'Membentuk Keluarga Baru', 'Penduduk yang membentuk keluarga baru', 'SYSTEM', '2016-08-07 18:39:50', NULL, NULL),
(4, 'Meninggal Dunia', 'Penduduk meninggal dunia', 'SYSTEM', '2016-08-07 18:39:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `id_kelurahan` int(1) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(2) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wk_rekam` datetime NOT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_kelurahan`, `nama`, `username`, `password`, `level`, `keterangan`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 0, 'Administrator Kecamatan', 'admin', 'admin', 1, 'Administrator Aplikasi, mengatur dan mengelola aplikasi', 'SYSTEM', '2016-08-07 18:38:44', NULL, NULL),
(10, 1, 'M. Agha Novrian, S.STP, M.si', 'petisah', 'petisah', 2, 'petisah', 'admin', '2016-08-31 08:50:00', 'admin', '2016-11-12 11:03:00'),
(11, 2, 'Yuda P. Setiawan, S.STP, MSP', 'sekip', 'sekip', 2, 'Kelurahan sekip. pw : sekip', 'admin', '2016-08-31 08:51:00', NULL, NULL),
(12, 3, 'Syarifuddin, SE', 'SeisikambingD', 'sikambing', 2, 'Pw : sikambing', 'admin', '2016-08-31 08:25:00', NULL, NULL),
(13, 4, 'Deny Mukhtar Z, SAP', 'seiputihbarat', 'seiputihbarat', 2, 'seiputihbarat', 'admin', '2016-08-31 08:08:00', 'admin', '2016-11-12 11:14:00'),
(14, 5, 'James R.E. Simanjuntak, S.STP', 'seiputihtengah', 'tengah', 2, 'Pw : tengah', 'admin', '2016-08-31 08:51:00', NULL, NULL),
(15, 6, 'Firza Putra MZ, S.STP, MAP', 'seitimurI', 'timurI', 2, 'timurI', 'admin', '2016-08-31 08:07:00', 'admin', '2016-11-12 11:34:00'),
(16, 9, 'Tondy P. Lubis, S.STP', 'seitimurII', 'timurII', 2, 'Pw : timurII', 'admin', '2016-08-31 08:33:00', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_balasan_komentar`
--
ALTER TABLE `tb_balasan_komentar`
  ADD CONSTRAINT `FK_tb_balasan_komentar_tb_komentar` FOREIGN KEY (`id_komentar`) REFERENCES `tb_komentar` (`id_komentar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_keluarga`
--
ALTER TABLE `tb_keluarga`
  ADD CONSTRAINT `FK_tb_keluaga_tb_status_keluarga_penduduk` FOREIGN KEY (`id_status_keluarga`) REFERENCES `tb_status_keluarga_penduduk` (`id_status_penduduk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tb_keluarga_tb_kelurahan` FOREIGN KEY (`id_kelurahan`) REFERENCES `tb_kelurahan` (`id_kelurahan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD CONSTRAINT `FK_tb_penduduk_tb_keluarga` FOREIGN KEY (`id_keluarga`) REFERENCES `tb_keluarga` (`id_keluarga`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tb_penduduk_tb_laporan_penduduk_lahir` FOREIGN KEY (`id_laporan_penduduk_lahir`) REFERENCES `tb_laporan_penduduk_lahir` (`id_laporan_penduduk_lahir`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tb_penduduk_tb_laporan_penduduk_meninggal` FOREIGN KEY (`id_laporan_penduduk_meninggal`) REFERENCES `tb_laporan_penduduk_meninggal` (`id_laporan_penduduk_meninggal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tb_penduduk_tb_perpindahan_penduduk` FOREIGN KEY (`id_perpindahan_penduduk`) REFERENCES `tb_perpindahan_penduduk` (`id_perpindahan_penduduk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tb_penduduk_tb_status_keluarga_penduduk` FOREIGN KEY (`id_status_penduduk`) REFERENCES `tb_status_keluarga_penduduk` (`id_status_penduduk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_perpindahan_penduduk`
--
ALTER TABLE `tb_perpindahan_penduduk`
  ADD CONSTRAINT `FK_tb_perpindahan_penduduk` FOREIGN KEY (`id_jenis_perpindahan`) REFERENCES `tb_jenis_perpindahan` (`id_jenis_perpindahan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_persetujuan_laporan_penduduk`
--
ALTER TABLE `tb_persetujuan_laporan_penduduk`
  ADD CONSTRAINT `FK_tb_persetujuan_laporan_penduduk_tb_laporan_penduduk_lahir` FOREIGN KEY (`id_laporan_penduduk_lahir`) REFERENCES `tb_laporan_penduduk_lahir` (`id_laporan_penduduk_lahir`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tb_persetujuan_laporan_penduduk_tb_laporan_penduduk_meninggal` FOREIGN KEY (`id_laporan_penduduk_meninggal`) REFERENCES `tb_laporan_penduduk_meninggal` (`id_laporan_penduduk_meninggal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
