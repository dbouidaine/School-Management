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
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  CONSTRAINT `author` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.article: ~25 rows (approximately)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `author`, `title`, `description`, `image`, `created_at`) VALUES
	(3, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(5, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(6, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(7, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(8, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(10, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(12, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(13, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(14, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(16, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(17, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(19, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(20, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(21, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(22, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(23, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(24, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(25, 1, 'new article', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(28, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(29, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(30, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(31, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(32, 2, 'diaeddin bouidaine', 'asjd laskdj lkasjd lkasjd lkasdj lkasdj lkasdj ', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(36, 2, 'New paragraphe', 'this is a new paragraphe', 'carousel2.jpg', '2021-03-10 22:47:26'),
	(37, 2, 'Palette', 'new article new article new article new article new article new article new article new article new article new article new article new article ', 'carousel2.jpg', '2021-03-10 22:47:26');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Dumping structure for table tdw.article_concern_category
CREATE TABLE IF NOT EXISTS `article_concern_category` (
  `article` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`article`,`category`) USING BTREE,
  KEY `category` (`category`),
  CONSTRAINT `article` FOREIGN KEY (`article`) REFERENCES `article` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category` FOREIGN KEY (`category`) REFERENCES `category` (`name`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.article_concern_category: ~9 rows (approximately)
/*!40000 ALTER TABLE `article_concern_category` DISABLE KEYS */;
INSERT INTO `article_concern_category` (`article`, `category`) VALUES
	(5, 'moyen'),
	(8, 'all'),
	(10, 'secondaire'),
	(12, 'all'),
	(13, 'all'),
	(24, 'parent'),
	(28, 'all'),
	(29, 'all'),
	(30, 'moyen'),
	(30, 'parent'),
	(31, 'all');
/*!40000 ALTER TABLE `article_concern_category` ENABLE KEYS */;

-- Dumping structure for table tdw.calendar
CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class` (`class`),
  CONSTRAINT `calendar_class` FOREIGN KEY (`class`) REFERENCES `class` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.calendar: ~3 rows (approximately)
/*!40000 ALTER TABLE `calendar` DISABLE KEYS */;
INSERT INTO `calendar` (`id`, `class`) VALUES
	(5, '3s1'),
	(1, '3s2'),
	(12, '3s3');
/*!40000 ALTER TABLE `calendar` ENABLE KEYS */;

-- Dumping structure for table tdw.calendar_has_event
CREATE TABLE IF NOT EXISTS `calendar_has_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calendar` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `day` int(1) NOT NULL,
  `start` int(11) NOT NULL,
  `finish` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `calendar_day_start` (`calendar`,`day`,`start`),
  UNIQUE KEY `calendar_day_finish` (`calendar`,`day`,`finish`),
  KEY `calendar_has_event_event` (`event`),
  CONSTRAINT `calendar_has_event_calendar` FOREIGN KEY (`calendar`) REFERENCES `calendar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `calendar_has_event_event` FOREIGN KEY (`event`) REFERENCES `module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.calendar_has_event: ~30 rows (approximately)
/*!40000 ALTER TABLE `calendar_has_event` DISABLE KEYS */;
INSERT INTO `calendar_has_event` (`id`, `calendar`, `event`, `day`, `start`, `finish`) VALUES
	(1, 1, 1, 1, 8, 9),
	(2, 1, 6, 1, 9, 10),
	(3, 1, 2, 1, 10, 11),
	(4, 1, 3, 1, 13, 15),
	(6, 1, 5, 1, 15, 17),
	(7, 1, 3, 2, 15, 16),
	(9, 5, 8, 1, 7, 8),
	(13, 5, 8, 2, 7, 8),
	(14, 5, 8, 3, 7, 8),
	(15, 5, 8, 4, 7, 8),
	(16, 5, 8, 5, 7, 8),
	(17, 5, 8, 6, 7, 8),
	(18, 5, 8, 7, 7, 8),
	(19, 5, 8, 1, 15, 16),
	(20, 5, 8, 2, 15, 16),
	(21, 5, 8, 3, 15, 16),
	(22, 5, 8, 4, 15, 16),
	(23, 5, 8, 5, 15, 16),
	(24, 5, 8, 6, 15, 16),
	(25, 5, 8, 7, 15, 16),
	(26, 5, 8, 5, 8, 10),
	(65, 12, 12, 1, 7, 8),
	(66, 12, 12, 2, 7, 8),
	(67, 12, 12, 3, 7, 8),
	(68, 12, 12, 4, 7, 8),
	(69, 12, 12, 5, 7, 8),
	(70, 12, 12, 2, 15, 16),
	(71, 12, 12, 4, 15, 16),
	(72, 12, 12, 5, 15, 16),
	(73, 12, 12, 6, 7, 8),
	(79, 1, 4, 2, 8, 9),
	(80, 1, 6, 3, 8, 9),
	(81, 1, 4, 4, 8, 9),
	(82, 1, 7, 5, 8, 9),
	(83, 1, 1, 6, 8, 9);
/*!40000 ALTER TABLE `calendar_has_event` ENABLE KEYS */;

-- Dumping structure for table tdw.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.category: ~6 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`) VALUES
	(1, 'all'),
	(5, 'moyen'),
	(3, 'parent'),
	(4, 'primaire'),
	(6, 'secondaire'),
	(2, 'teacher');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table tdw.class
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calendar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `year` (`year`),
  KEY `class_calendar` (`calendar`),
  CONSTRAINT `class_calendar` FOREIGN KEY (`calendar`) REFERENCES `calendar` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `year` FOREIGN KEY (`year`) REFERENCES `year` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.class: ~25 rows (approximately)
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` (`id`, `name`, `year`, `calendar`) VALUES
	(1, '1p1', '1p', NULL),
	(2, '1p2', '1p', NULL),
	(3, '2p1', '2p', NULL),
	(4, '2p2', '2p', NULL),
	(5, '3p1', '3p', NULL),
	(6, '3p2', '3p', NULL),
	(7, '4p1', '4p', NULL),
	(8, '4p2', '4p', NULL),
	(9, '5p1', '5p', NULL),
	(10, '5p2', '5p', NULL),
	(11, '1m1', '1m', NULL),
	(12, '1m2', '1m', NULL),
	(13, '2m1', '2m', NULL),
	(14, '2m2', '2m', NULL),
	(15, '3m1', '3m', NULL),
	(16, '3m2', '3m', NULL),
	(17, '4m1', '4m', NULL),
	(18, '4m2', '4m', NULL),
	(19, '1s1', '1s', NULL),
	(20, '1s2', '1s', NULL),
	(21, '2s1', '2s', NULL),
	(22, '2s2', '2s', NULL),
	(23, '3s1', '3s', 5),
	(24, '3s2', '3s', 1),
	(52, '3s3', '3s', 12);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;

-- Dumping structure for table tdw.class_has_module
CREATE TABLE IF NOT EXISTS `class_has_module` (
  `class` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` int(11) NOT NULL,
  PRIMARY KEY (`class`,`module`),
  KEY `class_has_module_module` (`module`),
  CONSTRAINT `class_has_module_class` FOREIGN KEY (`class`) REFERENCES `class` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `class_has_module_module` FOREIGN KEY (`module`) REFERENCES `module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.class_has_module: ~11 rows (approximately)
/*!40000 ALTER TABLE `class_has_module` DISABLE KEYS */;
INSERT INTO `class_has_module` (`class`, `module`) VALUES
	('2s2', 9),
	('3s1', 6),
	('3s1', 8),
	('3s2', 1),
	('3s2', 2),
	('3s2', 3),
	('3s2', 4),
	('3s2', 5),
	('3s2', 6),
	('3s2', 7),
	('3s3', 12);
/*!40000 ALTER TABLE `class_has_module` ENABLE KEYS */;

-- Dumping structure for table tdw.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.contact: ~7 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `contact`, `type`) VALUES
	(1, '0599665255', 'telephone'),
	(2, '0599665255', 'fax'),
	(3, 'hd_bouidaine@esi.dz', 'email'),
	(4, 'admin@esi.dz', 'email'),
	(7, '78, Cité universitaire Bouraoui Amar, Elharach', 'address'),
	(8, '90D, Cité universitaire Bouraoui Amar, Elharach', 'address'),
	(9, '0540818672', 'telephone');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table tdw.cycle
CREATE TABLE IF NOT EXISTS `cycle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.cycle: ~3 rows (approximately)
/*!40000 ALTER TABLE `cycle` DISABLE KEYS */;
INSERT INTO `cycle` (`id`, `name`) VALUES
	(2, 'moyen'),
	(1, 'primaire'),
	(3, 'secondaire');
/*!40000 ALTER TABLE `cycle` ENABLE KEYS */;

-- Dumping structure for table tdw.module
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `year` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_year` (`name`,`year`),
  KEY `module_year` (`year`),
  CONSTRAINT `module_year` FOREIGN KEY (`year`) REFERENCES `year` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.module: ~10 rows (approximately)
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` (`id`, `name`, `year`) VALUES
	(1, 'Algebre', '3s'),
	(6, 'ANAD', '3s'),
	(2, 'Analyse', '3s'),
	(8, 'Analyse2', '3s'),
	(3, 'Archi', '3s'),
	(5, 'Compilation', '3s'),
	(9, 'Donnees', '2s'),
	(12, 'HPC', '3s'),
	(4, 'Mecanique', '3s'),
	(7, 'TPGO', '3s');
/*!40000 ALTER TABLE `module` ENABLE KEYS */;

-- Dumping structure for table tdw.parent_has_child
CREATE TABLE IF NOT EXISTS `parent_has_child` (
  `parent` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `parent_has_child_child` (`child`),
  CONSTRAINT `parent_has_child_child` FOREIGN KEY (`child`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `parent_has_child_parent` FOREIGN KEY (`parent`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.parent_has_child: ~2 rows (approximately)
/*!40000 ALTER TABLE `parent_has_child` DISABLE KEYS */;
INSERT INTO `parent_has_child` (`parent`, `child`) VALUES
	(6, 3),
	(6, 8);
/*!40000 ALTER TABLE `parent_has_child` ENABLE KEYS */;

-- Dumping structure for table tdw.permission
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.permission: ~25 rows (approximately)
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` (`id`, `name`) VALUES
	(5, 'addArticle'),
	(24, 'addClass'),
	(15, 'addPresentation'),
	(1, 'addUser'),
	(6, 'deleteArticle'),
	(25, 'deleteClass'),
	(16, 'deletePresentation'),
	(2, 'deleteUser'),
	(8, 'editArticle'),
	(23, 'editClass'),
	(12, 'editPresentation'),
	(4, 'editUser'),
	(9, 'indexAdmin'),
	(10, 'indexArticles'),
	(22, 'indexClasses'),
	(20, 'indexParentSpace'),
	(14, 'indexPresentation'),
	(19, 'indexStudentSpace'),
	(21, 'indexStudentSpaceByParent'),
	(11, 'indexUsers'),
	(13, 'newPresentation'),
	(7, 'showArticle'),
	(3, 'showUser'),
	(26, 'updateClass'),
	(18, 'updateOrderPresentation');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;

-- Dumping structure for table tdw.presentation
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.presentation: ~3 rows (approximately)
/*!40000 ALTER TABLE `presentation` DISABLE KEYS */;
INSERT INTO `presentation` (`id`, `paragraph`, `image`, `order`, `created_at`) VALUES
	(6, 'St. Francis Xavier\'s Girls\' High School is a Bengali Medium school in Old Dhaka, Bangladesh operated by the Sisters of Our Lady of the Missions, a Roman Catholic religious order.\r\n\r\n It is a very good school. It was started in the year 1912. It was started by the education minister. This renowned school is situated near the famous Bahadur Shah Park. Around this school there are many other schools and colleges. About 2500 students are studying in our school. Number of class room in my school is to 45. We like our school because the school is our second home. School is our life. It is very beautiful. We have wonderful teachers. They are qualified , talented, helpful, kind and friendly. I am really happy to become a student of St. Francis Xavier’s Girls High School. Students of this school are widely known as “The Xaverians”.', 'carousel2.jpg', 3, '2021-03-13 05:37:41'),
	(12, 'St. Francis Xavier\'s Girls\' High School is a Bengali Medium school in Old Dhaka, Bangladesh operated by the Sisters of Our Lady of the Missions, a Roman Catholic religious order. It is a very good school. It was started in the year 1912. It was started by the education minister. This renowned school is situated near the famous Bahadur Shah Park. Around this school there are many other schools and colleges.\r\n\r\nAbout 2500 students are studying in our school. Number of class room in my school is to 45. We like our school because the school is our second home. School is our life. It is very beautiful. We have wonderful teachers. They are qualified , talented, helpful, kind and friendly. I am really happy to become a student of St. Francis Xavier’s Girls High School. Students of this school are widely known as “The Xaverians”.', 'carousel1.jpg', 1, '2021-03-13 05:20:52'),
	(14, 'St. Francis Xavier\'s Girls\' High School is a Bengali Medium school in Old Dhaka, Bangladesh operated by the Sisters of Our Lady of the Missions, a Roman Catholic religious order. It is a very good school. It was started in the year 1912. It was started by the education minister. This renowned school is situated near the famous Bahadur Shah Park. Around this school there are many other schools and colleges. About 2500 students are studying in our school. Number of class room in my school is to 45. We like our school because the school is our second home. School is our life. It is very beautiful. We have wonderful teachers. They are qualified , talented, helpful, kind and friendly. I am really happy to become a student of St. Francis Xavier’s Girls High School. Students of this school are widely known as “The Xaverians”.\r\n\r\nThey are qualified , talented, helpful, kind and friendly. I am really happy to become a student of St. Francis Xavier’s Girls High School. Students of this school are widely known as “The Xaverians”.', '1.jpg', 1, '2021-03-13 05:41:27');
/*!40000 ALTER TABLE `presentation` ENABLE KEYS */;

-- Dumping structure for table tdw.restauration
CREATE TABLE IF NOT EXISTS `restauration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dessert` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.restauration: ~7 rows (approximately)
/*!40000 ALTER TABLE `restauration` DISABLE KEYS */;
INSERT INTO `restauration` (`id`, `day`, `starter`, `main`, `dessert`) VALUES
	(1, 'Dimanche', '', 'Loubia', ''),
	(2, 'Lundi', '', 'Loubiaaa', 'Yaourte'),
	(3, 'Mardi', '', '', ''),
	(4, 'Mercredi', '', '', ''),
	(5, 'Jeudi', '', '', ''),
	(6, 'Vendredi', '', '', ''),
	(7, 'Samedi', '', '', '');
/*!40000 ALTER TABLE `restauration` ENABLE KEYS */;

-- Dumping structure for table tdw.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.role: ~4 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.role_has_permission: ~23 rows (approximately)
/*!40000 ALTER TABLE `role_has_permission` DISABLE KEYS */;
INSERT INTO `role_has_permission` (`id`, `role_name`, `permission_name`) VALUES
	(1, 'admin', 'addArticle'),
	(26, 'admin', 'addClass'),
	(14, 'admin', 'addPresentation'),
	(4, 'admin', 'addUser'),
	(3, 'admin', 'deleteArticle'),
	(27, 'admin', 'deleteClass'),
	(16, 'admin', 'deletePresentation'),
	(5, 'admin', 'deleteUser'),
	(2, 'admin', 'editArticle'),
	(23, 'admin', 'editClass'),
	(18, 'admin', 'editPresentation'),
	(6, 'admin', 'editUser'),
	(9, 'admin', 'indexAdmin'),
	(10, 'admin', 'indexArticles'),
	(25, 'admin', 'indexClasses'),
	(11, 'admin', 'indexPresentation'),
	(12, 'admin', 'indexUsers'),
	(13, 'admin', 'newPresentation'),
	(28, 'admin', 'updateClass'),
	(17, 'admin', 'updateOrderPresentation'),
	(21, 'parent', 'indexParentSpace'),
	(22, 'parent', 'indexStudentSpaceByParent'),
	(20, 'student', 'indexStudentSpace');
/*!40000 ALTER TABLE `role_has_permission` ENABLE KEYS */;

-- Dumping structure for table tdw.student_has_activity
CREATE TABLE IF NOT EXISTS `student_has_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` int(11) DEFAULT NULL,
  `activity` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_has_activity_student` (`student`),
  CONSTRAINT `student_has_activity_student` FOREIGN KEY (`student`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.student_has_activity: ~2 rows (approximately)
/*!40000 ALTER TABLE `student_has_activity` DISABLE KEYS */;
INSERT INTO `student_has_activity` (`id`, `student`, `activity`) VALUES
	(1, 3, 'Football'),
	(2, 3, 'BasketBall');
/*!40000 ALTER TABLE `student_has_activity` ENABLE KEYS */;

-- Dumping structure for table tdw.student_has_mark
CREATE TABLE IF NOT EXISTS `student_has_mark` (
  `student` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `mark` float DEFAULT NULL,
  PRIMARY KEY (`student`,`module`),
  KEY `student_has_mark_module` (`module`),
  CONSTRAINT `student_has_mark_module` FOREIGN KEY (`module`) REFERENCES `module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_has_mark_student` FOREIGN KEY (`student`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.student_has_mark: ~7 rows (approximately)
/*!40000 ALTER TABLE `student_has_mark` DISABLE KEYS */;
INSERT INTO `student_has_mark` (`student`, `module`, `mark`) VALUES
	(3, 1, 15),
	(3, 2, 14),
	(3, 3, 18),
	(3, 4, 19.2),
	(3, 5, 12),
	(3, 6, 16),
	(3, 7, 9);
/*!40000 ALTER TABLE `student_has_mark` ENABLE KEYS */;

-- Dumping structure for table tdw.student_has_remark
CREATE TABLE IF NOT EXISTS `student_has_remark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` int(11) DEFAULT NULL,
  `teacher` int(11) DEFAULT NULL,
  `remark` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_has_remark_student` (`student`),
  KEY `student_has_remark_teacher` (`teacher`),
  CONSTRAINT `student_has_remark_student` FOREIGN KEY (`student`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_has_remark_teacher` FOREIGN KEY (`teacher`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.student_has_remark: ~2 rows (approximately)
/*!40000 ALTER TABLE `student_has_remark` DISABLE KEYS */;
INSERT INTO `student_has_remark` (`id`, `student`, `teacher`, `remark`) VALUES
	(1, 3, 2, 'Il est tres puissant cet étudiant'),
	(2, 8, 7, 'Il n\'est pas puissant');
/*!40000 ALTER TABLE `student_has_remark` ENABLE KEYS */;

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `class` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'all',
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_1` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_3` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`) USING BTREE,
  KEY `role` (`role`),
  KEY `class_name` (`class`) USING BTREE,
  KEY `user_category` (`category`),
  CONSTRAINT `class_name` FOREIGN KEY (`class`) REFERENCES `class` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `role` FOREIGN KEY (`role`) REFERENCES `role` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `user_category` FOREIGN KEY (`category`) REFERENCES `category` (`name`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.user: ~10 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `email`, `password`, `role`, `first_name`, `last_name`, `birth`, `class`, `category`, `address`, `phone_1`, `phone_2`, `phone_3`, `created_at`) VALUES
	(1, 'admin@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Diaeddin', 'BOUIDAINE', '2021-03-11', NULL, 'all', NULL, NULL, NULL, NULL, '2021-02-23 21:56:26'),
	(2, 'teacher@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 2, 'Zineddine', 'BOUCHERIR', NULL, NULL, 'all', NULL, NULL, NULL, NULL, '2021-02-23 23:10:04'),
	(3, 'student@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 3, 'Diaeddin', 'BOUIDAINE', '1998-12-15', '3s2', 'secondaire', 'D78, CITE UNIVERSITAIRE BOURAOUI AMAR, Elharrach', '0599665252', '0599665255', '0599665256', '2021-02-23 23:13:03'),
	(4, 'hd_bouidaine1@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 3, 'Diaeddin', 'BOUIDAINE', NULL, NULL, 'all', NULL, NULL, NULL, NULL, '2021-02-23 23:17:00'),
	(5, 'admin@argon.com', 'dcddb75469b4b4875094e14561e573d8', 1, 'Manuel', 'Nuer', NULL, NULL, 'all', NULL, NULL, NULL, NULL, '2021-02-23 23:17:02'),
	(6, 'parent@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 4, 'Diaeddin', 'BOUIDAINE', '2000-03-12', NULL, 'parent', NULL, NULL, NULL, NULL, '2021-02-24 20:50:42'),
	(7, 'dbouidaine2@esi.dz', '202cb962ac59075b964b07152d234b70', 2, 'Diaeddin', 'BOUIDAINE', NULL, NULL, 'all', NULL, NULL, NULL, NULL, '2021-02-24 20:51:02'),
	(8, 'hd_bouidaine3@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 3, 'Diaeddin', 'BOUIDAINE', '2021-03-12', '1p1', 'primaire', NULL, NULL, NULL, NULL, '2021-02-25 11:36:53'),
	(14, 'hd_bouidaine111@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 3, 'Diaeddin9', 'BOUIDAINE', NULL, NULL, 'all', NULL, NULL, NULL, NULL, '2021-02-25 12:11:08'),
	(17, 'diaa@esi.dz', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Diaeddin', 'BOUIDAINE', NULL, NULL, 'all', NULL, NULL, NULL, NULL, '2021-03-03 14:14:57');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tdw.year: ~12 rows (approximately)
/*!40000 ALTER TABLE `year` DISABLE KEYS */;
INSERT INTO `year` (`id`, `name`, `cycle`) VALUES
	(1, '1p', 'primaire'),
	(2, '2p', 'primaire'),
	(3, '3p', 'primaire'),
	(4, '4p', 'primaire'),
	(5, '5p', 'primaire'),
	(6, '1m', 'moyen'),
	(7, '2m', 'moyen'),
	(8, '3m', 'moyen'),
	(9, '4m', 'moyen'),
	(10, '1s', 'secondaire'),
	(11, '2s', 'secondaire'),
	(12, '3s', 'secondaire');
/*!40000 ALTER TABLE `year` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
