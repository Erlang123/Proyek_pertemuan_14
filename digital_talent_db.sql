-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for digital_talent_db
CREATE DATABASE IF NOT EXISTS `digital_talent_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `digital_talent_db`;

-- Dumping structure for table digital_talent_db.peserta
CREATE TABLE IF NOT EXISTS `peserta` (
  `id` varchar(50) NOT NULL DEFAULT 'idkosong',
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `agama` varchar(60) DEFAULT NULL,
  `asal_sekolah` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table digital_talent_db.peserta: ~3 rows (approximately)
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;
REPLACE INTO `peserta` (`id`, `nama`, `jenis_kelamin`, `alamat`, `agama`, `asal_sekolah`) VALUES
	('1', 'Er lang', 'L', 'Kota Mojokerto', 'Islam', NULL),
	('2', 'Iqbal', 'L', 'Kota Surabaya', 'Islam', NULL),
	('3', 'Michel', 'L', 'Kota Madiun', 'Kristen', NULL);
/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
