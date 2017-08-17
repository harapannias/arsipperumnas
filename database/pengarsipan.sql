/*
Navicat MySQL Data Transfer

Source Server         : MySQL Local sa
Source Server Version : 50714
Source Host           : 127.0.0.1:3306
Source Database       : pengarsipan

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-17 23:48:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_arsip_surat_keluar
-- ----------------------------
DROP TABLE IF EXISTS `tp_arsip_surat_keluar`;
CREATE TABLE `tp_arsip_surat_keluar` (
  `id_arsip_surat_keluar` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis_surat` int(1) DEFAULT NULL,
  `nomor_urut` varchar(50) DEFAULT NULL,
  `nomor_berkas` varchar(50) DEFAULT NULL,
  `nomor_surat_keluar` varchar(50) DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `path_berkas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_arsip_surat_keluar`),
  KEY `FK_id_jenis_surat` (`id_jenis_surat`),
  CONSTRAINT `tp_arsip_surat_keluar_ibfk_1` FOREIGN KEY (`id_jenis_surat`) REFERENCES `tr_jenis_surat` (`id_jenis_surat`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_arsip_surat_keluar
-- ----------------------------
INSERT INTO `tp_arsip_surat_keluar` VALUES ('1', '1', 'Nomor Urut', 'Nomor Berkas', 'aaaaa', '2017-08-06', '', 'Mohon Perbaikan Komputer di Bagian SDM', 'uploads/surat_keluar/jbptunikompp-gdl-andrianris-18258-4-daftari-i.doc');
INSERT INTO `tp_arsip_surat_keluar` VALUES ('2', '2', 'Nomor Urut', 'Nomor Berkas', 'aaaaa', '2017-08-06', 'Penerima', 'Mohon Perbaikan Komputer di Bagian SDM', 'uploads/surat_keluar/Screen Shot 2017-06-29 at 11.53.47.png');

-- ----------------------------
-- Table structure for tp_arsip_surat_masuk
-- ----------------------------
DROP TABLE IF EXISTS `tp_arsip_surat_masuk`;
CREATE TABLE `tp_arsip_surat_masuk` (
  `id_arsip_surat_masuk` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis_surat` int(1) DEFAULT NULL,
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
  `id_ubah` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_arsip_surat_masuk`),
  KEY `FK_id_jenis_surat` (`id_jenis_surat`),
  CONSTRAINT `FK_id_jenis_surat` FOREIGN KEY (`id_jenis_surat`) REFERENCES `tr_jenis_surat` (`id_jenis_surat`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_arsip_surat_masuk
-- ----------------------------
INSERT INTO `tp_arsip_surat_masuk` VALUES ('1', '1', '123', '12/AR-SM/8/2012', 'Istimewa', '2017-08-05', 'Harapan Jaya Harefa', 'Mohon Perbaika Komputer di Bagian SDM', '0', 'uploads/DESIGN WEB.docx', '1', '2017-08-05 20:01:55', '2017-08-05 20:01:55', null, null);
INSERT INTO `tp_arsip_surat_masuk` VALUES ('2', '1', '12334', 'Nomor Berkas', 'Istimewa', '2017-08-13', 'Test', 'Perihal Surat Masuk', '1', 'uploads/surat_masuk/document.pdf', '1', '2017-08-13 19:16:19', '2017-08-13 19:16:19', null, null);

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `login_terakhir` datetime DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `wk_rekam` datetime DEFAULT CURRENT_TIMESTAMP,
  `wk_ubah` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_rekam` varchar(15) DEFAULT NULL,
  `id_ubah` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
INSERT INTO `tp_user` VALUES ('1', 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '2017-08-17 20:19:39', '1', '2017-07-24 15:20:54', '2017-08-17 20:19:39', 'admin', null);
INSERT INTO `tp_user` VALUES ('12', 'Harapan Jaya Harefa', 'harapan', '21232f297a57a5a743894a0e4a801fc3', '2', '2017-08-06 16:06:43', '1', '2017-07-30 13:15:50', '2017-08-17 11:27:58', 'admin', 'admin');
INSERT INTO `tp_user` VALUES ('13', 'Herlina Zebua', 'herlina', '21232f297a57a5a743894a0e4a801fc3', '2', '2017-08-13 19:19:43', '1', '2017-08-01 19:47:39', '2017-08-13 19:19:43', 'admin', null);

-- ----------------------------
-- Table structure for tr_jenis_surat
-- ----------------------------
DROP TABLE IF EXISTS `tr_jenis_surat`;
CREATE TABLE `tr_jenis_surat` (
  `id_jenis_surat` int(1) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `id_rekam` varchar(15) NOT NULL,
  `wk_rekam` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_ubah` varchar(15) DEFAULT NULL,
  `wk_ubah` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_jenis_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tr_jenis_surat
-- ----------------------------
INSERT INTO `tr_jenis_surat` VALUES ('1', 'Memo Dinas', null, '1', 'admin', '2017-08-12 10:48:09', null, '2017-08-12 10:48:09');
INSERT INTO `tr_jenis_surat` VALUES ('2', 'Laporan Absensi', null, '1', 'admin', '2017-08-12 10:48:09', null, '2017-08-12 10:48:09');
INSERT INTO `tr_jenis_surat` VALUES ('3', 'Pengajuan Diklat', null, '1', 'admin', '2017-08-12 10:48:09', null, '2017-08-12 10:48:09');
INSERT INTO `tr_jenis_surat` VALUES ('4', 'Ajuan Uang Makan', null, '1', 'admin', '2017-08-12 10:48:09', null, '2017-08-12 10:48:09');
INSERT INTO `tr_jenis_surat` VALUES ('5', 'Transportasi dan Gaji', null, '1', 'admin', '2017-08-12 10:48:09', null, '2017-08-12 10:48:09');

-- ----------------------------
-- Table structure for tr_jenis_surat_keluar
-- ----------------------------
DROP TABLE IF EXISTS `tr_jenis_surat_keluar`;
CREATE TABLE `tr_jenis_surat_keluar` (
  `id_jenis_surat_keluar` int(2) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `id_rekam` varchar(20) DEFAULT NULL,
  `wk_rekam` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_ubah` varchar(20) DEFAULT NULL,
  `wk_ubah` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_jenis_surat_keluar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tr_jenis_surat_keluar
-- ----------------------------
