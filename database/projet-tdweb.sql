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


-- Dumping database structure for tdweb-projet
CREATE DATABASE IF NOT EXISTS `tdweb-projet` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `tdweb-projet`;

-- Dumping structure for table tdweb-projet.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Un titre',
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  CONSTRAINT `author` FOREIGN KEY (`author`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdweb-projet.article: ~0 rows (approximately)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `author`, `title`, `description`, `image`, `created_at`) VALUES
	(1, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:25'),
	(2, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:31'),
	(3, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:32'),
	(4, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:32'),
	(5, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:33'),
	(6, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:33'),
	(7, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:33'),
	(8, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:34'),
	(9, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:34'),
	(10, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:34'),
	(11, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:35'),
	(12, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:35'),
	(13, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:43'),
	(14, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:43'),
	(15, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:44'),
	(16, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:44'),
	(17, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:44'),
	(18, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:45'),
	(19, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:45'),
	(20, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:46'),
	(21, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:46'),
	(22, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:51'),
	(23, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:51'),
	(24, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:51'),
	(25, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel1.jpg', '2021-02-19 21:42:52');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Dumping structure for table tdweb-projet.permission
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdweb-projet.permission: ~0 rows (approximately)
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;

-- Dumping structure for table tdweb-projet.presentation
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdweb-projet.presentation: ~0 rows (approximately)
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;

-- Dumping structure for table tdweb-projet.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdweb-projet.role: ~0 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id`, `name`) VALUES
	(1, 'admin');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table tdweb-projet.role_has_permission
CREATE TABLE IF NOT EXISTS `role_has_permission` (
  `id_role` int(11) NOT NULL,
  `id_permission` int(11) NOT NULL,
  KEY `id_permission` (`id_permission`),
  KEY `id_role` (`id_role`),
  CONSTRAINT `id_permission` FOREIGN KEY (`id_permission`) REFERENCES `permission` (`id`),
  CONSTRAINT `id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdweb-projet.role_has_permission: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permission` ENABLE KEYS */;

-- Dumping structure for table tdweb-projet.tests
CREATE TABLE IF NOT EXISTS `tests` (
  `id_test` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_test`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdweb-projet.tests: ~2 rows (approximately)
/*!40000 ALTER TABLE `tests` DISABLE KEYS */;
INSERT INTO `tests` (`id_test`, `type`) VALUES
	(4, 'one'),
	(5, 'two');
/*!40000 ALTER TABLE `tests` ENABLE KEYS */;

-- Dumping structure for table tdweb-projet.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `email` (`email`) USING BTREE,
  KEY `role` (`role`),
  CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdweb-projet.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `email`, `role`, `first_name`, `last_name`, `password`, `created_at`) VALUES
	(1, 'admin@admin.com', 1, NULL, NULL, 'admin', '2021-02-19 21:40:25'),
	(2, 'admin2@admin.com', 1, NULL, NULL, 'admin', '2021-02-19 21:40:08');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
