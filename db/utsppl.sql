-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for utsppl
CREATE DATABASE IF NOT EXISTS `utsppl` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `utsppl`;

-- Dumping structure for table utsppl.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table utsppl.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`) VALUES
	(2, 'Rifqi Ramadhani Almassar', 'rifqialmassar@yahoo.co.id', '$2y$10$i3Ifu5oVbd2Ar0KelTRNHONPod0fHXhC9gdttW4Y79Z/wUN0pIgGe', 1554468925),
	(3, 'Akhrom', 'akhrom@gmail.com', '$2y$10$w0QmV9jsEY4l/iEVzxmMneidbrJ3Y.rT6eEzIY6gX9F59LOf6R24m', 1554472172),
	(4, 'akhrom', 'akhrom13@gmail.com', '$2y$10$JLaVat9WjT4ueMFnIsc5zO7bARli7eJNEe4beO1C0vdgCxmfsQT8m', 1554472249);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
