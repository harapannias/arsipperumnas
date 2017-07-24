-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 12:58 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip_suratmasuk`
--

CREATE TABLE `arsip_suratmasuk` (
  `nmr_urut` char(6) NOT NULL,
  `nomorberkas` varchar(50) DEFAULT NULL,
  `pengirim` varchar(50) DEFAULT NULL,
  `tglmasuk` date DEFAULT NULL,
  `nmrsurat` varchar(100) DEFAULT NULL,
  `jenissurat` varchar(50) DEFAULT NULL,
  `perihal` varchar(200) DEFAULT NULL,
  `disposisi` varchar(30) DEFAULT NULL,
  `lampiran` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip_suratmasuk`
--

INSERT INTO `arsip_suratmasuk` (`nmr_urut`, `nomorberkas`, `pengirim`, `tglmasuk`, `nmrsurat`, `jenissurat`, `perihal`, `disposisi`, `lampiran`) VALUES
('ASM002', '120/SU-BP/V/2017', 'Berkat Jaya Harefa', '2017-07-18', '01', 'Memo Dinas', 'Melamar Pekerjaan', 'Ya', '-'),
('ASM003', '120/SU-BP/V/2017', 'Gido', '2017-07-18', '01', 'Memo Dinas', 'Melamar Pekerjaan', 'Ya', '-'),
('ASM001', '120/SU-BP/V/2017', 'Otoni', '2017-07-18', '01', 'Memo Dinas', 'Melamar Pekerjaan', 'Ya', '-'),
('ASM004', '120/SU-BP/V/2017', 'Barani Harefa', '2017-07-18', '01', 'Laporan Absensi', 'Melamar Pekerjaan', 'Tidak', 'Barani Kawa.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_operator` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(2) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_rekam` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `wk_rekam` datetime NOT NULL,
  `id_ubah` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wk_ubah` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kode_operator`, `nama`, `username`, `password`, `level`, `keterangan`, `status`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
('OP001', 'Administrator Kecamatan', 'admin', 'admin', 1, 'Administrator Aplikasi, mengatur dan mengelola aplikasi', 'Aktif', 'SYSTEM', '2016-08-07 18:38:44', NULL, NULL),
('OP002', 'Yuda P. Setiawan, S.STP, MSP', 'sekip', 'sekip', 2, 'Kelurahan sekip. pw : sekip', 'Aktif', 'admin', '2016-08-31 08:51:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip_suratmasuk`
--
ALTER TABLE `arsip_suratmasuk`
  ADD PRIMARY KEY (`nmr_urut`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_operator`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
