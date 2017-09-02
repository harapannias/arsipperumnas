-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2017 at 07:19 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengarsipan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tp_arsip_surat_keluar`
--

CREATE TABLE `tp_arsip_surat_keluar` (
  `id_arsip_surat_keluar` int(10) NOT NULL,
  `id_jenis_surat_keluar` int(1) DEFAULT NULL,
  `nomor_urut` varchar(50) DEFAULT NULL,
  `nomor_berkas` varchar(50) DEFAULT NULL,
  `nomor_surat_keluar` varchar(50) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `path_berkas` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `wk_rekam` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `wk_ubah` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_rekam` varchar(15) DEFAULT NULL,
  `id_ubah` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_arsip_surat_keluar`
--

INSERT INTO `tp_arsip_surat_keluar` (`id_arsip_surat_keluar`, `id_jenis_surat_keluar`, `nomor_urut`, `nomor_berkas`, `nomor_surat_keluar`, `tanggal_keluar`, `penerima`, `perihal`, `path_berkas`, `status`, `wk_rekam`, `wk_ubah`, `id_rekam`, `id_ubah`) VALUES
(3, 1, '1', 'NOB/01/08/2017', '12323', '2017-08-29', 'Kepala bagian Sumber Daya Manusia Di Gunugsitoli', 'Mohon Perbaikan Komputer di Bagian Sumber Daya Manusia 1 Mohon Perbaikan Komputer di Bagian Sumber Daya Manusia 1', 'uploads/surat_keluar/04 Waterfall.pdf', 1, '2017-08-28 22:45:54', '2017-09-01 06:31:57', NULL, 'admin'),
(4, 1, '1', 'NOB/01/08/2017', '12323', '2017-08-29', 'Kepala bagian Sumber Daya Manusia Di Gunugsitoli', 'Mohon Perbaikan Komputer di Bagian Sumber Daya Manusia 1 Mohon ', 'uploads/surat_keluar/04 Waterfall.pdf', 1, '2017-08-28 22:45:54', '2017-09-01 06:31:57', '', 'admin'),
(5, 1, '1', 'NOB/01/08/2017', '12323', '2017-08-29', 'Kepala bagian Sumber Daya Manusia Di Gunugsitoli', 'Mohon Perbaikan Komputer di Bagian Sumber Daya Manusia 1 Mohon ', 'uploads/surat_keluar/04 Waterfall.pdf', 1, '2017-08-28 22:45:54', '2017-09-01 06:31:57', '', 'admin'),
(6, 1, '1', 'NOB/01/08/2017', '12323', '2017-08-29', 'Kepala bagian Sumber Daya Manusia Di Gunugsitoli', 'Mohon Perbaikan Komputer di Bagian Sumber Daya Manusia 1 Mohon ', 'uploads/surat_keluar/04 Waterfall.pdf', 1, '2017-08-28 22:45:54', '2017-09-01 06:31:57', '', 'admin'),
(8, 1, '123', '12/AR-SM/8/2012', '145', '2017-09-11', 'Harefa Barani', 'Famareso barani nano igadego kabu kho a.fiti', 'uploads/surat_keluar/bukuzinuno_72.psd', 1, '2017-09-01 10:15:51', '2017-09-01 10:15:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tp_arsip_surat_masuk`
--

CREATE TABLE `tp_arsip_surat_masuk` (
  `id_arsip_surat_masuk` int(10) NOT NULL,
  `id_jenis_surat_masuk` int(1) DEFAULT NULL,
  `nomor_urut` varchar(50) DEFAULT NULL,
  `nomor_berkas` varchar(50) DEFAULT NULL,
  `nomor_surat_masuk` varchar(50) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `disposisi` varchar(100) DEFAULT NULL,
  `path_berkas` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `wk_rekam` datetime DEFAULT CURRENT_TIMESTAMP,
  `wk_ubah` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_rekam` varchar(15) DEFAULT NULL,
  `id_ubah` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_arsip_surat_masuk`
--

INSERT INTO `tp_arsip_surat_masuk` (`id_arsip_surat_masuk`, `id_jenis_surat_masuk`, `nomor_urut`, `nomor_berkas`, `nomor_surat_masuk`, `tanggal_masuk`, `pengirim`, `perihal`, `disposisi`, `path_berkas`, `status`, `wk_rekam`, `wk_ubah`, `id_rekam`, `id_ubah`) VALUES
(1, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(2, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(3, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(4, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(5, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(6, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(7, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(8, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(9, 1, '1', 'NOB/01/08/2017', '2113/N4/8/2017', '2017-08-28', 'Bagian Sumber Daya Manusia', 'Mohon Perbaikan Komputer di Bagian SDM', '1', 'uploads/surat_masuk/document.pdf', 1, '2017-08-28 04:23:04', '2017-08-28 04:23:04', 'admin', 'admin'),
(10, 5, '12334', '12/AR-SM/8/2012', '126', '2017-09-19', 'Starla', 'Surat Cinta Untuk Starla', '1', 'uploads/surat_masuk/bukuzinuno.psd', 1, '2017-09-01 17:17:54', '2017-09-01 17:17:54', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tp_user`
--

CREATE TABLE `tp_user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bidang_pekerjaan` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `login_terakhir` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `id_rekam` varchar(15) NOT NULL,
  `wk_rekam` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_ubah` varchar(15) DEFAULT NULL,
  `wk_ubah` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tp_user`
--

INSERT INTO `tp_user` (`id_user`, `nama`, `username`, `password`, `bidang_pekerjaan`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `nomor_hp`, `level`, `avatar`, `login_terakhir`, `status`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 'Desi Laoli', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Staff Admin SDM', '2017-08-31', 'P', 'Jalan Mongonsidi Medan', 'info@perumnas.id', '+628123456789', 1, 'uploads/avatar/admin.jpg', '2017-09-01 17:07:53', 1, 'admin', '2017-07-24 08:20:54', 'admin', '2017-08-31 12:24:39'),
(2, 'Berkat Jaya Harefa', 'berkat', '5816ce4849acd8c84bc8642b9037d284', NULL, '2017-01-09', 'L', NULL, NULL, NULL, 2, 'uploads/avatar/berkat.jpg', '2017-09-01 17:00:21', 1, 'admin', '2017-09-01 03:50:54', 'admin', '2017-09-01 03:50:54'),
(3, 'Harapan Jaya Harefa', 'harapan', '58dfc596f429eae7bbec270f88c89cd9', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 1, 'admin', '2017-09-01 10:18:58', NULL, '2017-09-01 10:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_surat_keluar`
--

CREATE TABLE `tr_jenis_surat_keluar` (
  `id_jenis_surat_keluar` int(1) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `id_rekam` varchar(15) NOT NULL,
  `wk_rekam` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_ubah` varchar(15) DEFAULT NULL,
  `wk_ubah` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tr_jenis_surat_keluar`
--

INSERT INTO `tr_jenis_surat_keluar` (`id_jenis_surat_keluar`, `jenis`, `keterangan`, `status`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(1, 'Memo Dinas', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09'),
(2, 'Laporan Absensi', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09'),
(3, 'Pengajuan Diklat', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09'),
(4, 'Ajuan Uang Makan', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `tr_jenis_surat_masuk`
--

CREATE TABLE `tr_jenis_surat_masuk` (
  `id_jenis_surat_masuk` int(1) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `id_rekam` varchar(15) NOT NULL,
  `wk_rekam` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_ubah` varchar(15) DEFAULT NULL,
  `wk_ubah` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tr_jenis_surat_masuk`
--

INSERT INTO `tr_jenis_surat_masuk` (`id_jenis_surat_masuk`, `jenis`, `keterangan`, `status`, `id_rekam`, `wk_rekam`, `id_ubah`, `wk_ubah`) VALUES
(2, 'Laporan Absensi', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09'),
(3, 'Pengajuan Diklat', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09'),
(4, 'Ajuan Uang Makan', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09'),
(5, 'Transportasi dan Gaji', NULL, 1, 'admin', '2017-08-12 10:48:09', NULL, '2017-08-12 10:48:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_arsip_surat_keluar`
--
ALTER TABLE `tp_arsip_surat_keluar`
  ADD PRIMARY KEY (`id_arsip_surat_keluar`);

--
-- Indexes for table `tp_arsip_surat_masuk`
--
ALTER TABLE `tp_arsip_surat_masuk`
  ADD PRIMARY KEY (`id_arsip_surat_masuk`);

--
-- Indexes for table `tp_user`
--
ALTER TABLE `tp_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tr_jenis_surat_keluar`
--
ALTER TABLE `tr_jenis_surat_keluar`
  ADD PRIMARY KEY (`id_jenis_surat_keluar`);

--
-- Indexes for table `tr_jenis_surat_masuk`
--
ALTER TABLE `tr_jenis_surat_masuk`
  ADD PRIMARY KEY (`id_jenis_surat_masuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_arsip_surat_keluar`
--
ALTER TABLE `tp_arsip_surat_keluar`
  MODIFY `id_arsip_surat_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tp_arsip_surat_masuk`
--
ALTER TABLE `tp_arsip_surat_masuk`
  MODIFY `id_arsip_surat_masuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tp_user`
--
ALTER TABLE `tp_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_surat_keluar`
--
ALTER TABLE `tr_jenis_surat_keluar`
  MODIFY `id_jenis_surat_keluar` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tr_jenis_surat_masuk`
--
ALTER TABLE `tr_jenis_surat_masuk`
  MODIFY `id_jenis_surat_masuk` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
