-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2021 at 08:46 PM
-- Server version: 8.0.23
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbjava`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(500) NOT NULL,
  `contenu` varchar(500) NOT NULL,
  `categorie_id` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `vues` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre`, `image`, `contenu`, `categorie_id`, `date`, `description`, `vues`, `type`) VALUES
(3, 'article 1', 'C:\\wamp64\\www\\PIJAVA\\uploads\\f_6080691742f88.jpg', '<html dir=\"ltr\"><head></head><body contenteditable=\"true\"><p><font face=\"Segoe UI\">rrrrrrrrrrrrttttttttttttttttttttttttt trrrrrrrrrrr yyyyy hhhhhhhhhhhhhhhhhhhhhh kkkkkkkkkkkkkkkkkkkk klllllllllllllllllll mmmmmmmmmmmmmm bbbbbbbbbbbbbbbbbbbbb sssssssssssssssssssss xxxxxxxxxxxxxxxxxxx yyyyyyyyy</font></p></body></html>', '1', '2021-04-20', 'this is article 1 descriptions', '0', '1'),
(4, 'article 21', 'C:\\wamp64\\www\\PIJAVA\\uploads\\f_60807aa427dfb.jpg', '<html dir=\"ltr\"><head></head><body contenteditable=\"true\"><p><font face=\"Segoe UI\">vvvvvvvvvvvvvvvvv fffffffffffffffffffffffffffffff ggggggggggggggggggggggg hhhhhhhhhhhhhhhhhhhh tttttttttttttttttttttttttttt rrrrrrrrrrrrrrrrrrrrrrrrrrrrr zzzzzzzzzzzzzzzzzzzzzzzzz wwwwwwwwwwwwwwwwwwww</font></p></body></html>', '2', '2021-04-21', 'this is article 2 description', '0', '1'),
(9, 'article 45', 'C:\\wamp64\\www\\PIJAVA\\uploads\\f_60807a9a7c1c4.jpg', '<html dir=\"ltr\"><head></head><body contenteditable=\"true\"><p><font face=\"Segoe UI\">hghhghfghgfhnhnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</font></p></body></html>', '2', '2021-04-21', 'descriogbbbbb', '0', '1'),
(12, 'jjjk', 'C:\\wamp64\\www\\PIJAVA\\uploads\\f_60807a89c8f8d.jpg', '<html dir=\"ltr\"><head></head><body contenteditable=\"true\"><p><font face=\"Segoe UI\">nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn</font></p></body></html>', '2', '2021-04-21', 'jb;hlk:j,:l', '0', '1'),
(14, 'fgdf', 'C:\\wamp64\\www\\PIJAVA\\uploads\\f_60807a654c665.jpg', '<html dir=\"ltr\"><head></head><body contenteditable=\"true\"><p><font face=\"Segoe UI\">bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</font></p></body></html>', '1', '2021-04-21', 'fdgf gdfg gfg', '0', '0'),
(15, 'hhhh', 'C:\\wamp64\\www\\PIJAVA\\uploads\\f_608072e48420c.jpg', '<html dir=\"ltr\"><head></head><body contenteditable=\"true\"><p><font face=\"Segoe UI\">hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</font></p></body></html>', '2', '2021-04-21', 'hhhhhhhhhhhhhhhhhhhhh', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `description`) VALUES
(1, 'category 1', 'this is cat 1 descriptionbbb'),
(2, 'category 2', 'this cat 2 descriptionh'),
(3, 'category 3', 'this is category 3 descriptionj');

-- --------------------------------------------------------

--
-- Table structure for table `cattag`
--

DROP TABLE IF EXISTS `cattag`;
CREATE TABLE IF NOT EXISTS `cattag` (
  `article_id` int NOT NULL,
  `tag_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cattag`
--

INSERT INTO `cattag` (`article_id`, `tag_id`) VALUES
(3, 1),
(14, 3),
(12, 3),
(9, 1),
(4, 3),
(15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `nom`) VALUES
(1, 'tag 1'),
(3, 'tag 2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
