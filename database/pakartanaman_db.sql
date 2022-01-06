-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pakartanaman_db
DROP DATABASE IF EXISTS `pakartanaman_db`;
CREATE DATABASE IF NOT EXISTS `pakartanaman_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `pakartanaman_db`;

-- Dumping structure for table pakartanaman_db.cart
DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pembayaran_id` int(11) DEFAULT NULL,
  `jumlah` varchar(50) NOT NULL,
  `total_pembelian` varchar(50) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `produk_id` (`produk_id`),
  KEY `pembeli` (`user_id`) USING BTREE,
  KEY `pembayaran_id` (`pembayaran_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.indexsocial
DROP TABLE IF EXISTS `indexsocial`;
CREATE TABLE IF NOT EXISTS `indexsocial` (
  `index_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '',
  `sosial_id` int(11) NOT NULL,
  PRIMARY KEY (`index_id`),
  KEY `sosial_id` (`sosial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.pengelola
DROP TABLE IF EXISTS `pengelola`;
CREATE TABLE IF NOT EXISTS `pengelola` (
  `pengelola_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(50) DEFAULT NULL,
  `poto` varchar(50) DEFAULT NULL,
  `index_id` int(11) NOT NULL,
  PRIMARY KEY (`pengelola_id`),
  KEY `index_id` (`index_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.pengiriman
DROP TABLE IF EXISTS `pengiriman`;
CREATE TABLE IF NOT EXISTS `pengiriman` (
  `pengiriman_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pengiriman` int(11) DEFAULT NULL,
  `status_pengiriman` enum('Sedang Diproses','Dikirim') DEFAULT NULL,
  PRIMARY KEY (`pengiriman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.produk
DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `produk_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `stok` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.sosial_media
DROP TABLE IF EXISTS `sosial_media`;
CREATE TABLE IF NOT EXISTS `sosial_media` (
  `sosial_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sosial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_gejala
DROP TABLE IF EXISTS `tabel_gejala`;
CREATE TABLE IF NOT EXISTS `tabel_gejala` (
  `KodeGejala` varchar(10) NOT NULL,
  `NamaGejala` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KodeGejala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_keluhan
DROP TABLE IF EXISTS `tabel_keluhan`;
CREATE TABLE IF NOT EXISTS `tabel_keluhan` (
  `id_keluhan` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(15) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `keluhan` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id_keluhan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_login
DROP TABLE IF EXISTS `tabel_login`;
CREATE TABLE IF NOT EXISTS `tabel_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `noKTP` varchar(50) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_pembayaran
DROP TABLE IF EXISTS `tabel_pembayaran`;
CREATE TABLE IF NOT EXISTS `tabel_pembayaran` (
  `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_pembayaran` enum('Sudah','Belum') DEFAULT NULL,
  PRIMARY KEY (`pembayaran_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_penyakit
DROP TABLE IF EXISTS `tabel_penyakit`;
CREATE TABLE IF NOT EXISTS `tabel_penyakit` (
  `KodePenyakit` varchar(50) NOT NULL,
  `NamaPenyakit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KodePenyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_pertanyaan
DROP TABLE IF EXISTS `tabel_pertanyaan`;
CREATE TABLE IF NOT EXISTS `tabel_pertanyaan` (
  `KodePertanyaan` varchar(10) NOT NULL,
  `Pertanyaan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KodePertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_pesan
DROP TABLE IF EXISTS `tabel_pesan`;
CREATE TABLE IF NOT EXISTS `tabel_pesan` (
  `pesan_id` int(11) NOT NULL AUTO_INCREMENT,
  `subjek` varchar(50) DEFAULT NULL,
  `isi_pesan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` enum('Sudah Dibaca','Belum Dibaca') DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`pesan_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table pakartanaman_db.tabel_rule
DROP TABLE IF EXISTS `tabel_rule`;
CREATE TABLE IF NOT EXISTS `tabel_rule` (
  `KodeRule` varchar(50) NOT NULL,
  `kodepertanyaan` varchar(50) DEFAULT NULL,
  `KodePenyakit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KodeRule`),
  KEY `Kode_pertanyaan` (`KodePenyakit`),
  CONSTRAINT `FK_tabel_rule_tabel_penyakit` FOREIGN KEY (`KodePenyakit`) REFERENCES `tabel_penyakit` (`KodePenyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
tabel_logintabel_logintabel_login