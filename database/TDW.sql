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
  CONSTRAINT `author` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.article: ~29 rows (approximately)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `author`, `title`, `description`, `image`, `created_at`) VALUES
	(1, 1, 'Biden tells Munich Security Conference America is here', 'In his first big appearance on the global stage, President Joe Biden promised the Group of Seven (G7) leaders during the virtual Munich Security Conference that the United States was recommitted to multilateral engagement.Biden told US allies that they must stand firm against the challenges posed by China, Russia and Iran, saying Russia was seeking to weaken the transatlantic alliance and calling for a united front to counter what he called China’s abusive economic practices.', '/assets/my-assets/img/carousel2.jpg', '2021-02-21 22:42:25'),
	(3, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:32'),
	(4, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:32'),
	(5, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:33'),
	(6, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:33'),
	(7, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:33'),
	(8, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:34'),
	(10, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:34'),
	(12, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:35'),
	(13, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:43'),
	(14, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:43'),
	(16, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:44'),
	(17, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel2.jpg', '2021-02-19 21:42:44'),
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
	(37, 2, 'Palette', 'new article new article new article new article new article new article new article new article new article new article new article new article ', '/assets/my-assets/img/carousel3.jpg', '2021-03-03 11:14:22');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Dumping structure for table tdw.article_for_category
CREATE TABLE IF NOT EXISTS `article_for_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `article_category` (`article`,`category`),
  KEY `category` (`category`),
  CONSTRAINT `article` FOREIGN KEY (`article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category` FOREIGN KEY (`category`) REFERENCES `category` (`name`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.article_for_category: ~0 rows (approximately)
/*!40000 ALTER TABLE `article_for_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_for_category` ENABLE KEYS */;

-- Dumping structure for table tdw.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.category: ~0 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table tdw.class
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `year` (`year`),
  CONSTRAINT `year` FOREIGN KEY (`year`) REFERENCES `year` (`cycle`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.class: ~0 rows (approximately)
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
/*!40000 ALTER TABLE `class` ENABLE KEYS */;

-- Dumping structure for table tdw.cycle
CREATE TABLE IF NOT EXISTS `cycle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.cycle: ~0 rows (approximately)
/*!40000 ALTER TABLE `cycle` DISABLE KEYS */;
/*!40000 ALTER TABLE `cycle` ENABLE KEYS */;

-- Dumping structure for table tdw.permission
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.permission: ~14 rows (approximately)
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` (`id`, `name`) VALUES
	(5, 'addArticle'),
	(1, 'addUser'),
	(6, 'deleteArticle'),
	(2, 'deleteUser'),
	(8, 'editArticle'),
	(12, 'editPresentation'),
	(4, 'editUser'),
	(9, 'indexAdmin'),
	(10, 'indexArticles'),
	(14, 'indexPresentation'),
	(11, 'indexUsers'),
	(13, 'newPresentation'),
	(7, 'showArticle'),
	(3, 'showUser');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;

-- Dumping structure for table tdw.presentation
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.presentation: ~7 rows (approximately)
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
INSERT INTO `presentation` (`id`, `paragraph`, `image`, `order`, `created_at`) VALUES
	(1, 'ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2', 1, '2021-03-03 11:28:30'),
	(2, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2', 2, '2021-03-03 11:29:00'),
	(3, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2', 6, '2021-02-28 00:20:29'),
	(4, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2', 7, '2021-02-28 00:20:29'),
	(5, 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '2', 8, '2021-02-28 00:20:29'),
	(6, 'asdfasdsdf', '', 5, '2021-03-03 11:28:30'),
	(7, 'asdfasdsdf', '', 3, '2021-03-03 11:29:00'),
	(8, 'I added a new paragraph to the presentation', '', 4, '2021-03-03 11:28:30');
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;

-- Dumping structure for table tdw.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.role: ~3 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id`, `name`) VALUES
	(1, 'admin'),
	(4, 'parent'),
	(3, 'student'),
	(2, 'teacher');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table tdw.role_has_permission
CREATE TABLE IF NOT EXISTS `role_has_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_name_permission_name` (`role_name`,`permission_name`),
  KEY `permission_name` (`permission_name`),
  CONSTRAINT `permission_name` FOREIGN KEY (`permission_name`) REFERENCES `permission` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_name` FOREIGN KEY (`role_name`) REFERENCES `role` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.role_has_permission: ~8 rows (approximately)
/*!40000 ALTER TABLE `role_has_permission` DISABLE KEYS */;
INSERT INTO `role_has_permission` (`id`, `role_name`, `permission_name`) VALUES
	(1, 'admin', 'addArticle'),
	(4, 'admin', 'addUser'),
	(3, 'admin', 'deleteArticle'),
	(5, 'admin', 'deleteUser'),
	(2, 'admin', 'editArticle'),
	(6, 'admin', 'editUser'),
	(9, 'admin', 'indexAdmin'),
	(10, 'admin', 'indexArticles'),
	(11, 'admin', 'indexPresentation'),
	(12, 'admin', 'indexUsers'),
	(13, 'admin', 'newPresentation');
/*!40000 ALTER TABLE `role_has_permission` ENABLE KEYS */;

-- Dumping structure for table tdw.subject
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `class` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `class` (`class`),
  CONSTRAINT `class` FOREIGN KEY (`class`) REFERENCES `class` (`name`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.subject: ~0 rows (approximately)
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;

-- Dumping structure for table tdw.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`) USING BTREE,
  KEY `role` (`role`),
  CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.user: ~10 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `email`, `role`, `first_name`, `last_name`, `password`, `created_at`) VALUES
	(1, 'admin@admin.com', 1, 'Diaeddin', 'BOUIDAINE', '21232f297a57a5a743894a0e4a801fc3', '2021-02-23 21:56:26'),
	(2, 'admin2@admin.com', 1, 'Zineddine', 'BOUCHERIR', '21232f297a57a5a743894a0e4a801fc3', '2021-02-23 23:10:04'),
	(3, 'hd_bouidaine@esi.dz', 3, 'Ali Baba', 'BOUIDAINE', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-23 23:13:03'),
	(4, 'hd_bouidaine1@esi.dz', 3, 'Diaeddin', 'BOUIDAINE', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-23 23:17:00'),
	(5, 'admin@argon.com', 1, 'Manuel', 'Nuer', 'dcddb75469b4b4875094e14561e573d8', '2021-02-23 23:17:02'),
	(6, 'diaeddin@esi.dz', 2, 'Diaeddin', 'BOUIDAINE', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-24 20:50:42'),
	(7, 'dbouidaine2@esi.dz', 2, 'Diaeddin', 'BOUIDAINE', '202cb962ac59075b964b07152d234b70', '2021-02-24 20:51:02'),
	(8, 'hd_bouidaine3@esi.dz', 3, 'Diaeddin', 'BOUIDAINE', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-25 11:36:53'),
	(14, 'hd_bouidaine111@esi.dz', 3, 'Diaeddin9', 'BOUIDAINE', 'e10adc3949ba59abbe56e057f20f883e', '2021-02-25 12:11:08'),
	(17, 'diaa@esi.dz', 1, 'Diaeddin', 'BOUIDAINE', 'e10adc3949ba59abbe56e057f20f883e', '2021-03-03 14:14:57');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table tdw.year
CREATE TABLE IF NOT EXISTS `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cycle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `cycle` (`cycle`),
  CONSTRAINT `cycle` FOREIGN KEY (`cycle`) REFERENCES `cycle` (`name`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.year: ~0 rows (approximately)
/*!40000 ALTER TABLE `year` DISABLE KEYS */;
/*!40000 ALTER TABLE `year` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
