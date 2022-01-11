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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.cart: ~2 rows (approximately)
DELETE FROM `cart`;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` (`cart_id`, `user_id`, `produk_id`, `created_at`, `pembayaran_id`, `jumlah`, `total_pembelian`) VALUES
	(51, 2, 29, '2022-01-11 08:30:17', NULL, '0', ''),
	(52, 1, 29, '2022-01-11 16:46:09', NULL, '1', '5000');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.hasil
DROP TABLE IF EXISTS `hasil`;
CREATE TABLE IF NOT EXISTS `hasil` (
  `hasil_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `solusi` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`hasil_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.hasil: ~3 rows (approximately)
DELETE FROM `hasil`;
/*!40000 ALTER TABLE `hasil` DISABLE KEYS */;
INSERT INTO `hasil` (`hasil_id`, `user_id`, `penyakit`, `solusi`, `created_at`) VALUES
	(17, 1, 'Hama', '<ul><li>Pengendalian Mekanis</li>Mengendalikan hama dan penyakit tanaman secara mekanis adalah dengan tindakan nyata untuk mengurangi hama dan penyakit tersebut. Cara ini dapat dikatakan sebagai cara tradisional, dikarenakan tidak menggunakan zat kimia semacam insektisida, akan tetapi dengan alat-alat seperti sabit, gunting tanaman dan lain sebagainya. Cara ini membutuhkan waktu yang lama, hasilnya pun tidak maksimal dikarenakan perkembangan hama dan penyakit pada tanaman yang menyebar luas.<li>Pengendalian Biologis</li>Mengendalikan hama dan penyakit tanaman secara biologis adalah mengendalikan hama dengan menggunakan predator untuk memangsa para hama tersebut. Akan tetapi pengendalian secara biologis ini dapat dikatakan kurang maksimal, hal tersebut dikarenakan hewan predator yang kadang sulit ditemukan.<li>Pengendalian Kimia</li>Mengendalikan hama dan penyakit tanaman secara kimia adalah cara terakhir apabila cara sebelumnya tidak membuahkan hasil yang maksimal. Cara pengendalian hama dan penyakit dengan kimia adalah dengan menggunakan pestisida seperti insektisisa, fungisida dan herbisida. Pengendalian ini memang terbilang mudah dan hasilnya maksimal, akan tetapi memiliki dampak negatif bagi lingkungan sekitar, salah satunya adalah menimbulkan polusi udara. </ul>', '2022-01-11 21:00:37'),
	(18, 1, 'Hama', '<ul><li>Pengendalian Mekanis</li>Mengendalikan hama dan penyakit tanaman secara mekanis adalah dengan tindakan nyata untuk mengurangi hama dan penyakit tersebut. Cara ini dapat dikatakan sebagai cara tradisional, dikarenakan tidak menggunakan zat kimia semacam insektisida, akan tetapi dengan alat-alat seperti sabit, gunting tanaman dan lain sebagainya. Cara ini membutuhkan waktu yang lama, hasilnya pun tidak maksimal dikarenakan perkembangan hama dan penyakit pada tanaman yang menyebar luas.<li>Pengendalian Biologis</li>Mengendalikan hama dan penyakit tanaman secara biologis adalah mengendalikan hama dengan menggunakan predator untuk memangsa para hama tersebut. Akan tetapi pengendalian secara biologis ini dapat dikatakan kurang maksimal, hal tersebut dikarenakan hewan predator yang kadang sulit ditemukan.<li>Pengendalian Kimia</li>Mengendalikan hama dan penyakit tanaman secara kimia adalah cara terakhir apabila cara sebelumnya tidak membuahkan hasil yang maksimal. Cara pengendalian hama dan penyakit dengan kimia adalah dengan menggunakan pestisida seperti insektisisa, fungisida dan herbisida. Pengendalian ini memang terbilang mudah dan hasilnya maksimal, akan tetapi memiliki dampak negatif bagi lingkungan sekitar, salah satunya adalah menimbulkan polusi udara. </ul>', '2022-01-11 21:01:15'),
	(19, 1, 'Virus', '<p>Walaupun hampir tidak ada senyawa antivirus yang dapat menyembuhkan tanaman dari penyakit, dengan pengendalian dapat mencegah tanaman terserang penyakit. Langkah pertama yang wajib dalam pengendalian penyakit oleh virus adalah identifikasi, langkah berikutnya tergantung cara infeksi virus pada inang dan bagaimana penularan penyakit. Serta bagaimana virus bertahan ketika tidak tumbuh (pada inang). Tindakan pencegahan dapat dengan penggunaan benih atau bibit bersertifikat bebas virus, sanitasi sumber virus, dan modifikasi teknik budi daya dan pemanenan. Jika virus ditularkan melalui vektor tertentu, pengendalian vektor harus dilakukan, seperti pada vektor serangga dan nematoda yang dapat dikendalikan dengan insektisida, nematisida maupun fungisida bagi jamur.</p>', '2022-01-11 21:11:28'),
	(20, 1, NULL, NULL, '2022-01-11 21:50:00');
/*!40000 ALTER TABLE `hasil` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.indexsocial
DROP TABLE IF EXISTS `indexsocial`;
CREATE TABLE IF NOT EXISTS `indexsocial` (
  `index_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '',
  `sosial_id` int(11) NOT NULL,
  PRIMARY KEY (`index_id`),
  KEY `sosial_id` (`sosial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.indexsocial: ~0 rows (approximately)
DELETE FROM `indexsocial`;
/*!40000 ALTER TABLE `indexsocial` DISABLE KEYS */;
/*!40000 ALTER TABLE `indexsocial` ENABLE KEYS */;

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

-- Dumping data for table pakartanaman_db.pengelola: ~0 rows (approximately)
DELETE FROM `pengelola`;
/*!40000 ALTER TABLE `pengelola` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengelola` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.pengiriman
DROP TABLE IF EXISTS `pengiriman`;
CREATE TABLE IF NOT EXISTS `pengiriman` (
  `pengiriman_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pengiriman` int(11) DEFAULT NULL,
  `status_pengiriman` enum('Sedang Diproses','Dikirim') DEFAULT NULL,
  PRIMARY KEY (`pengiriman_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.pengiriman: ~0 rows (approximately)
DELETE FROM `pengiriman`;
/*!40000 ALTER TABLE `pengiriman` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengiriman` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.produk: ~1 rows (approximately)
DELETE FROM `produk`;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` (`produk_id`, `nama`, `gambar`, `stok`, `deskripsi`, `harga`) VALUES
	(29, 'adsfgh', 'bg_1.jpg', '12', 'SFasf', '5000');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.sosial_media
DROP TABLE IF EXISTS `sosial_media`;
CREATE TABLE IF NOT EXISTS `sosial_media` (
  `sosial_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sosial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.sosial_media: ~0 rows (approximately)
DELETE FROM `sosial_media`;
/*!40000 ALTER TABLE `sosial_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `sosial_media` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.tabel_gejala
DROP TABLE IF EXISTS `tabel_gejala`;
CREATE TABLE IF NOT EXISTS `tabel_gejala` (
  `KodeGejala` varchar(10) NOT NULL,
  `NamaGejala` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KodeGejala`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.tabel_gejala: ~21 rows (approximately)
DELETE FROM `tabel_gejala`;
/*!40000 ALTER TABLE `tabel_gejala` DISABLE KEYS */;
INSERT INTO `tabel_gejala` (`KodeGejala`, `NamaGejala`) VALUES
	('G001', 'Benjolan'),
	('G002', 'Layu'),
	('G003', 'Busuk'),
	('G004', 'Bercak'),
	('G005', 'Busuk'),
	('G006', 'Kurap'),
	('G007', 'Karat'),
	('G008', 'Damping Off'),
	('G010', 'Embun tepung'),
	('G011', 'Bau'),
	('G012', 'Lendir'),
	('G013', 'Hawar daun'),
	('G014', 'Daun keriting'),
	('G015', 'Mosaik'),
	('G016', 'Nekrotik'),
	('G017', 'Kerdil'),
	('G018', 'Menular'),
	('G019', 'Akar ganda'),
	('G020', 'Daun menggulung'),
	('G021', 'Lapuk '),
	('G022', 'Rontok');
/*!40000 ALTER TABLE `tabel_gejala` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.tabel_keluhan
DROP TABLE IF EXISTS `tabel_keluhan`;
CREATE TABLE IF NOT EXISTS `tabel_keluhan` (
  `id_keluhan` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(15) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `keluhan` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id_keluhan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.tabel_keluhan: ~0 rows (approximately)
DELETE FROM `tabel_keluhan`;
/*!40000 ALTER TABLE `tabel_keluhan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabel_keluhan` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.tabel_login
DROP TABLE IF EXISTS `tabel_login`;
CREATE TABLE IF NOT EXISTS `tabel_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `role` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.tabel_login: ~3 rows (approximately)
DELETE FROM `tabel_login`;
/*!40000 ALTER TABLE `tabel_login` DISABLE KEYS */;
INSERT INTO `tabel_login` (`user_id`, `username`, `password`, `role`, `email`, `alamat`, `nama`) VALUES
	(1, 'Dapis', '12345678', 'user', NULL, NULL, NULL),
	(2, 'Alpan', '12345678', 'admin', NULL, NULL, NULL),
	(3, 'SuperAdmin', 'Super123', 'superadmin', NULL, NULL, NULL),
	(5, 'Vinkah', '12345678', 'user', 'vinkah@gmail.com', 'Taman Adiyasa Blok F 14 n', 'Vinkah Nur Asih');
/*!40000 ALTER TABLE `tabel_login` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.tabel_pembayaran
DROP TABLE IF EXISTS `tabel_pembayaran`;
CREATE TABLE IF NOT EXISTS `tabel_pembayaran` (
  `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_pembayaran` enum('Sudah','Belum') DEFAULT NULL,
  PRIMARY KEY (`pembayaran_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.tabel_pembayaran: ~0 rows (approximately)
DELETE FROM `tabel_pembayaran`;
/*!40000 ALTER TABLE `tabel_pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabel_pembayaran` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.tabel_penyakit
DROP TABLE IF EXISTS `tabel_penyakit`;
CREATE TABLE IF NOT EXISTS `tabel_penyakit` (
  `KodePenyakit` varchar(50) NOT NULL,
  `NamaPenyakit` varchar(50) DEFAULT NULL,
  `Solusi` mediumtext DEFAULT NULL,
  `Gejala` mediumtext DEFAULT NULL,
  PRIMARY KEY (`KodePenyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.tabel_penyakit: ~4 rows (approximately)
DELETE FROM `tabel_penyakit`;
/*!40000 ALTER TABLE `tabel_penyakit` DISABLE KEYS */;
INSERT INTO `tabel_penyakit` (`KodePenyakit`, `NamaPenyakit`, `Solusi`, `Gejala`) VALUES
	('P001', 'Jamur', '<ul>\r\n<li>Gunakan varietas tahan. Misalnya untuk tomat, gunakan varietas yang tahan terhadap layu fusarium seperti Ohio MR 9 dan Walter.</li>\r\n<li>Pemakaian fungisida. Walaupun sampai sekarang belum ada tercatat fungisida yang benar-benar ampuh untuk mengatasi fusarium, namun beberapa bentuk pencegahan bisa dilakukan. Seperti mencelupkan benih yang akan ke dalam larutan fungisida berbahan aktif binomil.</li>\r\n<li>Mengendalikan nematoda di tanah. Luka di akar yang disebabkan nematoda adalah jalan masuknya fusarium ke akar. Dengan menekan jumlah nematoda, bisa menekan kemungkinan akar terinfeksi jamur.</li>\r\n<li>Menggunakan trichoderma. Penggunaan agen hayati ini diketahui bisa mematikan jamur lain. Menabur fusarium di lahan sangat dianjurkan sebelum melakukan penanaman untuk mencegah perkembangbiakan jamur di tanah.</li>\r\n<li>mencegah infeksi lahan. Alat yang digunakan di lahan yang terjangkit dapat direndam dulu dalam formalin 5% sebelum digunakan kembali. Dianjurkan pula menggunakan benih yang berasal dari benih yang berasal dari buah yang tidak sakit.</li>', '<ul>\r\n<li>Benjolan</li>\r\n<li>Layu</li>\r\n<li>Busuk</li>\r\n<li>Lendir</li>\r\n<li>Kurap</li>\r\n<li>Karat</li>\r\n<li>Damping Off</li>\r\n<li>Embun Tepung</li>\r\n</ul>'),
	('P002', 'Bakteri', '<ul>\r\n<li>Gunakan agen hayati seperti Pseudomonas fluerescens dan Bacillus subtilis. Agen hayati ini dikenal juga dapat memangsa bakteri penyakit.</li>\r\n<li>Gunakan pupuk kandang yang telah difermentasi masak. Pupuk kandang yang belum masak bisa meningkatkan jumlah bakteri Pseudomonas solanacearum dengan meningkatkan suhu tanah akibat fermentasi yang belum selesai.</li>\r\n<li>Gunakan pupuk urea secara bijaksana. Penggunaan urea yang berlebihan akan membuat tanaman mudah terserang bakteri ini.</li>\r\n<li>Mencelupkan bibit dengan bakterisida berbahan aktif agrimycin, akan mencegah tanaman terjangkit penyakit.</li>\r\n<li>Pengaturan irigasi yang baik. Jangan sampai lahan tergenang oleh air, karena bisa memudahkan bakteri berkembang biak.</li>\r\n</ul>', '<ul>\r\n<li>Layu</li>\r\n<li>Busuk</li>\r\n<li>Bercak</li>\r\n<li>Bau</li>\r\n<li>Lendir</li>\r\n<li>Hawar Daun</li>\r\n</li>'),
	('P003', 'Virus', 'Walaupun hampir tidak ada senyawa antivirus yang dapat menyembuhkan tanaman dari penyakit, dengan pengendalian dapat mencegah tanaman terserang penyakit. Langkah pertama yang wajib dalam pengendalian penyakit oleh virus adalah identifikasi, langkah berikutnya tergantung cara infeksi virus pada inang dan bagaimana penularan penyakit. Serta bagaimana virus bertahan ketika tidak tumbuh (pada inang). Tindakan pencegahan dapat dengan penggunaan benih atau bibit bersertifikat bebas virus, sanitasi sumber virus, dan modifikasi teknik budi daya dan pemanenan. Jika virus ditularkan melalui vektor tertentu, pengendalian vektor harus dilakukan, seperti pada vektor serangga dan nematoda yang dapat dikendalikan dengan insektisida, nematisida maupun fungisida bagi jamur.', '<ul>\r\n<li>Layu</li>\r\n<li>Bercak</li>\r\n<li>Daun Kriting</li>\r\n<li>Mosaik</li>\r\n<li>Nekrotik</li>\r\n<li>Kerdil</li>\r\n<li>Menular</li>\r\n</ul>'),
	('P004', 'Hama', '<ul>\r\n<li>Pengendalian Mekanis</li>\r\nMengendalikan hama dan penyakit tanaman secara mekanis adalah dengan tindakan nyata untuk mengurangi hama dan penyakit tersebut. Cara ini dapat dikatakan sebagai cara tradisional, dikarenakan tidak menggunakan zat kimia semacam insektisida, akan tetapi dengan alat-alat seperti sabit, gunting tanaman dan lain sebagainya. Cara ini membutuhkan waktu yang lama, hasilnya pun tidak maksimal dikarenakan perkembangan hama dan penyakit pada tanaman yang menyebar luas.\r\n<li>Pengendalian Biologis</li>\r\nMengendalikan hama dan penyakit tanaman secara biologis adalah mengendalikan hama dengan menggunakan predator untuk memangsa para hama tersebut. Akan tetapi pengendalian secara biologis ini dapat dikatakan kurang maksimal, hal tersebut dikarenakan hewan predator yang kadang sulit ditemukan.\r\n<li>Pengendalian Kimia</li>\r\nMengendalikan hama dan penyakit tanaman secara kimia adalah cara terakhir apabila cara sebelumnya tidak membuahkan hasil yang maksimal. Cara pengendalian hama dan penyakit dengan kimia adalah dengan menggunakan pestisida seperti insektisisa, fungisida dan herbisida. Pengendalian ini memang terbilang mudah dan hasilnya maksimal, akan tetapi memiliki dampak negatif bagi lingkungan sekitar, salah satunya adalah menimbulkan polusi udara. \r\n</ul>', '<ul>\r\n<li>Benjolan</li>\r\n<li>Busuk</li>\r\n<li>Berakar Ganda</li>\r\n<li>Menggulung</li>\r\n<li>Lapuk / Rapuh</li>\r\n<li>Rontok</li>\r\n</ul>');
/*!40000 ALTER TABLE `tabel_penyakit` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.tabel_pertanyaan
DROP TABLE IF EXISTS `tabel_pertanyaan`;
CREATE TABLE IF NOT EXISTS `tabel_pertanyaan` (
  `KodePertanyaan` varchar(10) NOT NULL,
  `Pertanyaan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KodePertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.tabel_pertanyaan: ~21 rows (approximately)
DELETE FROM `tabel_pertanyaan`;
/*!40000 ALTER TABLE `tabel_pertanyaan` DISABLE KEYS */;
INSERT INTO `tabel_pertanyaan` (`KodePertanyaan`, `Pertanyaan`) VALUES
	('Pt001', 'Apakah tanaman tersebut terdapat benjolan ?'),
	('Pt002', 'Apakah tanaman tersebut Layu ?'),
	('Pt003', 'Apakah tanaman teresbut membusuk ?'),
	('Pt004', 'Apakah tanaman tersebut mengeluarkan bercak ?'),
	('Pt005', 'Apakah tanaman tersebut kurap ?'),
	('Pt006', 'Apakah tanaman tersebut karat ?'),
	('Pt007', 'Apakah tanaman damping off ?'),
	('Pt008', 'Apakah tanaman embun tepung ?'),
	('Pt009', 'Apakah tanaman mengeluarkan bau ?'),
	('Pt010', 'Apakah tanaman mengeluarkan lendir ?'),
	('Pt011', 'Apakah tanaman hawar daun ?'),
	('Pt012', 'Apakah tanaman tumbuh daun keriting ?'),
	('Pt013', 'Apakah tanaman mosaik ?'),
	('Pt014', 'Apakah tanaman nekrotik ?'),
	('Pt015', 'Apakah tanaman kerdil ?'),
	('Pt016', 'Apakah tenaman tersebut menular ?'),
	('Pt017', 'Apakah tanaman tersebut berakar ganda ?'),
	('Pt018', 'Apakah tanaman tersebut daun menggulung ?'),
	('Pt019', 'Apakah tanaman tersebuk lapuk/rapuh ?'),
	('Pt020', 'Apakah tanaman tersebut rontok ?');
/*!40000 ALTER TABLE `tabel_pertanyaan` ENABLE KEYS */;

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

-- Dumping data for table pakartanaman_db.tabel_pesan: ~0 rows (approximately)
DELETE FROM `tabel_pesan`;
/*!40000 ALTER TABLE `tabel_pesan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabel_pesan` ENABLE KEYS */;

-- Dumping structure for table pakartanaman_db.tabel_rule
DROP TABLE IF EXISTS `tabel_rule`;
CREATE TABLE IF NOT EXISTS `tabel_rule` (
  `KodeRule` int(11) NOT NULL AUTO_INCREMENT,
  `KodePertanyaan` varchar(50) DEFAULT NULL,
  `KodePenyakit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`KodeRule`),
  KEY `Kode_pertanyaan` (`KodePenyakit`),
  KEY `KodeGejala` (`KodePertanyaan`) USING BTREE,
  CONSTRAINT `FK_tabel_rule_tabel_penyakit` FOREIGN KEY (`KodePenyakit`) REFERENCES `tabel_penyakit` (`KodePenyakit`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table pakartanaman_db.tabel_rule: ~27 rows (approximately)
DELETE FROM `tabel_rule`;
/*!40000 ALTER TABLE `tabel_rule` DISABLE KEYS */;
INSERT INTO `tabel_rule` (`KodeRule`, `KodePertanyaan`, `KodePenyakit`) VALUES
	(1, 'Pt001', 'P001'),
	(2, 'Pt002', 'P001'),
	(3, 'Pt003', 'P001'),
	(4, 'Pt004', 'P001'),
	(5, 'Pt005', 'P001'),
	(6, 'Pt006', 'P001'),
	(7, 'Pt007', 'P001'),
	(8, 'Pt008', 'P001'),
	(9, 'Pt002', 'P002'),
	(10, 'Pt003', 'P002'),
	(11, 'Pt004', 'P002'),
	(12, 'Pt009', 'P002'),
	(13, 'Pt010', 'P002'),
	(14, 'Pt011', 'P002'),
	(15, 'Pt002', 'P003'),
	(16, 'Pt004', 'P003'),
	(17, 'Pt012', 'P003'),
	(18, 'Pt013', 'P003'),
	(19, 'Pt014', 'P003'),
	(20, 'Pt015', 'P003'),
	(21, 'Pt016', 'P003'),
	(22, 'Pt001', 'P004'),
	(23, 'Pt003', 'P004'),
	(24, 'Pt017', 'P004'),
	(25, 'Pt018', 'P004'),
	(26, 'Pt019', 'P004'),
	(27, 'Pt020', 'P004');
/*!40000 ALTER TABLE `tabel_rule` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
