-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 03:50 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perumnas`
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
(1, 3, 'K001', '1', 'Reg.I/05/382/v/2017', '2017-05-31', 'General Manager Regional - I', 'Mengikuti Upacara Bendera', 'uploads/surat_keluar/1. Surat Intruksi.jpg', 1, '2017-09-03 03:53:48', '2017-09-03 03:53:48', NULL, NULL);

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
(1, 2, '001', 'A001', 'Reg.I/KEPRI/718/VI/2017', '2017-06-06', 'IBRAHIM TOLHA RANGKUTI', 'Surat Izin Cuti', '1', 'uploads/surat_masuk/1. Ajuan Surat Izin Cuti.jpg', 1, '2017-09-03 17:48:23', '2017-09-03 17:48:23', 'admin', NULL);

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
(1, 'Desimeri Laoli', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Staff Admin SDM', '2017-08-31', 'P', 'Jalan Mongonsidi Medan', 'info@perumnas.id', '+628123456789', 1, 'uploads/avatar/admin.jpg', '2017-09-08 10:45:14', 1, 'admin', '2017-07-24 01:20:54', 'admin', '2017-08-31 05:24:39');

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
(1, 'Nota Dinas', 'Surat nota dinas blablaa', 1, 'admin', '2017-09-02 15:54:53', NULL, '2017-09-02 15:54:53'),
(2, 'Surat Edaran', 'Surat Edaran Perusahaan', 1, 'admin', '2017-09-02 15:55:11', NULL, '2017-09-02 15:55:11'),
(3, 'EDARAN', '-', 1, 'admin', '2017-09-03 17:50:05', NULL, '2017-09-03 17:50:05');

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
(1, 'Memo Dinas', 'Memo internal perusahaan', 1, 'admin', '2017-09-02 15:55:31', NULL, '2017-09-02 15:55:31'),
(2, 'Izin Cuti', '-', 1, 'admin', '2017-09-02 15:59:51', NULL, '2017-09-02 15:59:51'),
(3, 'Nota Dinas', '-', 1, 'admin', '2017-09-02 17:57:41', NULL, '2017-09-02 17:57:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_arsip_surat_keluar`
--
ALTER TABLE `tp_arsip_surat_keluar`
  ADD PRIMARY KEY (`id_arsip_surat_keluar`),
  ADD KEY `FK_tp_arsip_surat_keluar_tr_jenis_surat_keluar` (`id_jenis_surat_keluar`),
  ADD KEY `FK_tp_arsip_surat_keluar_tp_user` (`id_rekam`);

--
-- Indexes for table `tp_arsip_surat_masuk`
--
ALTER TABLE `tp_arsip_surat_masuk`
  ADD PRIMARY KEY (`id_arsip_surat_masuk`),
  ADD KEY `FK_tp_arsip_surat_masuk_tp_user` (`id_rekam`),
  ADD KEY `FK_tp_arsip_surat_masuk_tr_jenis_surat_masuk` (`id_jenis_surat_masuk`);

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
  ADD PRIMARY KEY (`id_jenis_surat_keluar`),
  ADD KEY `FK_tr_jenir_surat_keluar_tp_user` (`id_rekam`);

--
-- Indexes for table `tr_jenis_surat_masuk`
--
ALTER TABLE `tr_jenis_surat_masuk`
  ADD PRIMARY KEY (`id_jenis_surat_masuk`),
  ADD KEY `FK_tr_jenir_surat_masuk_tp_user` (`id_rekam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_arsip_surat_keluar`
--
ALTER TABLE `tp_arsip_surat_keluar`
  MODIFY `id_arsip_surat_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_arsip_surat_masuk`
--
ALTER TABLE `tp_arsip_surat_masuk`
  MODIFY `id_arsip_surat_masuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_user`
--
ALTER TABLE `tp_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tr_jenis_surat_keluar`
--
ALTER TABLE `tr_jenis_surat_keluar`
  MODIFY `id_jenis_surat_keluar` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tr_jenis_surat_masuk`
--
ALTER TABLE `tr_jenis_surat_masuk`
  MODIFY `id_jenis_surat_masuk` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tp_arsip_surat_keluar`
--
ALTER TABLE `tp_arsip_surat_keluar`
  ADD CONSTRAINT `FK_tp_arsip_surat_keluar_tp_user` FOREIGN KEY (`id_rekam`) REFERENCES `tp_user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tp_arsip_surat_keluar_tr_jenis_surat_keluar` FOREIGN KEY (`id_jenis_surat_keluar`) REFERENCES `tr_jenis_surat_keluar` (`id_jenis_surat_keluar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tp_arsip_surat_masuk`
--
ALTER TABLE `tp_arsip_surat_masuk`
  ADD CONSTRAINT `FK_tp_arsip_surat_masuk_tp_user` FOREIGN KEY (`id_rekam`) REFERENCES `tp_user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tp_arsip_surat_masuk_tr_jenis_surat_masuk` FOREIGN KEY (`id_jenis_surat_masuk`) REFERENCES `tr_jenis_surat_masuk` (`id_jenis_surat_masuk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tr_jenis_surat_masuk`
--
ALTER TABLE `tr_jenis_surat_masuk`
  ADD CONSTRAINT `FK_tr_jenir_surat_masuk_tp_user` FOREIGN KEY (`id_rekam`) REFERENCES `tp_user` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
