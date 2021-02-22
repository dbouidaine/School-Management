-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tdw
CREATE DATABASE IF NOT EXISTS `tdw` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `tdw`;

-- Dumping structure for table tdw.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Un titre',
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  CONSTRAINT `author` FOREIGN KEY (`author`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.article: ~31 rows (approximately)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `author`, `title`, `description`, `image`, `created_at`) VALUES
	(1, 1, 'Biden tells Munich Security Conference America is here', 'In his first big appearance on the global stage, President Joe Biden promised the Group of Seven (G7) leaders during the virtual Munich Security Conference that the United States was recommitted to multilateral engagement.Biden told US allies that they must stand firm against the challenges posed by China, Russia and Iran, saying Russia was seeking to weaken the transatlantic alliance and calling for a united front to counter what he called China’s abusive economic practices.', '/assets/my-assets/img/carousel2.jpg', '2021-02-21 22:42:25'),
	(3, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:32'),
	(4, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:32'),
	(5, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:33'),
	(6, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:33'),
	(7, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:33'),
	(8, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:34'),
	(9, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:34'),
	(10, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:34'),
	(11, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:35'),
	(12, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:35'),
	(13, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:43'),
	(14, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:43'),
	(15, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:44'),
	(16, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:44'),
	(17, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:44'),
	(18, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:45'),
	(19, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:45'),
	(20, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:46'),
	(21, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:46'),
	(22, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:51'),
	(23, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:51'),
	(24, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:51'),
	(25, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:52'),
	(28, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', '/assets/my-assets/img/carousel3.jpg', '2021-02-20 20:34:54'),
	(29, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', '/assets/my-assets/img/carousel3.jpg', '2021-02-20 20:35:02'),
	(30, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', '/assets/my-assets/img/carousel3.jpg', '2021-02-20 20:35:14'),
	(31, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', '/assets/my-assets/img/carousel2.jpg', '2021-02-20 20:35:48'),
	(32, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', '/assets/my-assets/img/carousel1.jpg', '2021-02-20 20:36:35'),
	(36, 2, 'New paragraphe', 'this is a new paragraphe', '/assets/my-assets/img/carousel1.jpg', '2021-02-20 20:40:13'),
	(37, 2, 'Palette', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', '/assets/my-assets/img/carousel3.jpg', '2021-02-20 20:42:43');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Dumping structure for table tdw.permission
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.permission: ~0 rows (approximately)
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;

-- Dumping structure for table tdw.presentation
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.presentation: ~0 rows (approximately)
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
INSERT INTO `presentation` (`id`, `paragraph`, `image`, `order`, `created_at`) VALUES
	(1, '2', '2', 1, '2021-02-22 02:18:20');
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;

-- Dumping structure for table tdw.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.role: ~0 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id`, `name`) VALUES
	(1, 'admin');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table tdw.role_has_permission
CREATE TABLE IF NOT EXISTS `role_has_permission` (
  `id_role` int(11) NOT NULL,
  `id_permission` int(11) NOT NULL,
  PRIMARY KEY (`id_role`,`id_permission`),
  KEY `id_permission` (`id_permission`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `id_permission` FOREIGN KEY (`id_permission`) REFERENCES `permission` (`id`),
  CONSTRAINT `id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.role_has_permission: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permission` ENABLE KEYS */;

-- Dumping structure for table tdw.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`) USING BTREE,
  KEY `role` (`role`),
  CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `email`, `role`, `first_name`, `last_name`, `password`, `created_at`) VALUES
	(1, 'admin@admin.com', 1, NULL, NULL, 'admin', '2021-02-19 21:40:25'),
	(2, 'admin2@admin.com', 1, NULL, NULL, 'admin', '2021-02-22 02:24:42');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
