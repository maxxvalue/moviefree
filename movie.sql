-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.40-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for movie
CREATE DATABASE IF NOT EXISTS `movie` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `movie`;

-- Dumping structure for table movie.data_list
CREATE TABLE IF NOT EXISTS `data_list` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `main_id` int(3) NOT NULL,
  `name` text NOT NULL,
  `vdo` text NOT NULL,
  `vdo02` text NOT NULL,
  `vdo03` text NOT NULL,
  `part` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table movie.data_list: ~2 rows (approximately)
/*!40000 ALTER TABLE `data_list` DISABLE KEYS */;
REPLACE INTO `data_list` (`id`, `main_id`, `name`, `vdo`, `vdo02`, `vdo03`, `part`) VALUES
	(1, 1, '	\r\nฮีโร่จอมปลอม', '1qBZok-h010', '1qBZok-h010', '1qBZok-h010', 1),
	(2, 1, 'ฮีโร่จอมปลอม', '1qBZok-h010', '', '', 2);
/*!40000 ALTER TABLE `data_list` ENABLE KEYS */;

-- Dumping structure for table movie.data_movie
CREATE TABLE IF NOT EXISTS `data_movie` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `name` text NOT NULL,
  `vdo_ex` text NOT NULL,
  `vdo_main` text NOT NULL,
  `vdo_main02` text NOT NULL,
  `vdo_main03` text NOT NULL,
  `status_list` enum('YES','NO') NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table movie.data_movie: ~10 rows (approximately)
/*!40000 ALTER TABLE `data_movie` DISABLE KEYS */;
REPLACE INTO `data_movie` (`id`, `img`, `name`, `vdo_ex`, `vdo_main`, `vdo_main02`, `vdo_main03`, `status_list`) VALUES
	(1, 'img/01.jpg', 'IPZ-339', 'j4S2fJX4NqY', 'https://feurl.com/v/5jo436lexv0.mp4', '', '', 'NO'),
	(2, 'img/02.jpg', 'WANZ-918', 'T7zqbSkygYU', 'https://th-jav.co/v/rxqp2fee-qp0k6r.mp4', '', '', 'NO'),
	(3, 'img/03.jpg', 'loli', '', 'https://s1.javpob.com/playads5eee3ad5c5d84_m5aOM3e20253c0c634782e161df1c5a2569a1.mp4', '', '', 'NO'),
	(4, 'img/04.jpg', 'จ้างผีมาเลี้่ยงเด็ก', 'bj-ZqqrgHgQ', 'https://cdn.jwplayer.com/players/bklD00ol-63CAtI3W.html', '', '', 'NO'),
	(5, 'img/05.jpg', '365-DNI(ซับไทย)', 'KEhdMW_6ba4', 'https://cdn.jwplayer.com/players/jongRD2U-63CAtI3W.html', '', '', 'NO'),
	(6, 'img/06.jpg', 'Extraction คนระห่ำภารกิจเดือด', 'L6P3nI6VnlY', 'https://cdn.jwplayer.com/players/fJeiCi5N-63CAtI3W.html', '', '', 'NO'),
	(7, 'img/07.jpg', 'THE MEG โครตหลามพันปี', 'udm5jUA-2bs', 'https://www543.o0-2.com/token=fXx1aKZnYIFJAJiEM-7OEA/1593338922/14.207.0.0/124/1/65/2091591b27fa6d998d0c2b47fe7f8651-1080p.mp4', '', '', 'NO'),
	(8, 'img/08.jpg', 'SONIC', 'szby7ZHLnkA', 'https://www1128.o0-3.com/token=Z8XANQ917z2iRzCRULKULQ/1593339235/14.207.0.0/75/7/1b/fb840dae09c355e7fa0ba0ea75ae11b7-1080p.mp4', '', '', 'NO'),
	(9, 'img/09.png', 'Low Season (2020) สุขสันต์วันโสด', 'XNIHIZt4_6M', 'https://cdn.jwplayer.com/players/nL2XmBQU-63CAtI3W.html', '', '', 'NO'),
	(10, 'img/10.jpg', 'Guns Akimbo (2019) โทษทีมือพี่ไม่ว่าง', 'JggpSpqxS6I', 'https://cdn.jwplayer.com/players/KZjtHkpV-63CAtI3W.html', '', '', 'NO');
/*!40000 ALTER TABLE `data_movie` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
