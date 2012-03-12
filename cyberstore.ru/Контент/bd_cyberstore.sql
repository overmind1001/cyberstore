-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2012 at 09:33 PM
-- Server version: 5.1.40
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_cyberstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE IF NOT EXISTS `basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '0',
  `session_id` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_basket_constraint` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `user_id`, `session_id`) VALUES
(1, 0, 'b93fe4a186be4af44d49016a9c568697');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_div`
--

CREATE TABLE IF NOT EXISTS `catalog_div` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `parent_catalog_div_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `parent_catalog_constraint` (`parent_catalog_div_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `catalog_div`
--

INSERT INTO `catalog_div` (`id`, `name`, `parent_catalog_div_id`) VALUES
(1, 'root', NULL),
(3, 'Запчасти', 1),
(4, 'Спутники', 1),
(5, 'Оружие', 1),
(6, 'Обслуживание', 1),
(8, 'Руки', 3),
(9, 'Ноги', 3),
(19, 'Инструменты', 6),
(11, 'Лица', 3),
(12, 'Зверюшки', 4),
(13, 'Охранники', 4),
(14, 'Лазеры', 5),
(15, 'Мозги', 3),
(16, 'Память', 3),
(17, 'Ракеты', 5),
(18, 'Бластеры', 5),
(20, 'Детали', 6);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `mark` int(11) DEFAULT NULL,
  `good_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `good_id_constraint` (`good_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price_current` float NOT NULL,
  `count` int(11) NOT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `catalog_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price_current`, `count`, `picture_id`, `catalog_id`) VALUES
(4, 'EH1 Milano Hand', 'Супер кибер рука под красноречивым названием: EH1 Milano Hand', 1050, 30, 13, 8),
(3, 'Smart Motor Hand (C6M)', 'Супер кибер рука под красноречивым названием: Smart Motor Hand (C6M)', 1300, 10, 14, 8),
(5, 'Actuated Sheffield Hand', 'Супер кибер рука под красноречивым названием: Actuated Sheffield Hand', 700, 5, 15, 8),
(6, 'Elu-2 Hand', 'Супер кибер рука под красноречивым названием: Elu-2 Hand', 500, 42, 16, 8),
(7, 'Harada Hand', 'Супер кибер рука под красноречивым названием: Harada Hand', 730, 29, 17, 8),
(8, 'MechaTE Hand', 'Супер кибер рука под красноречивым названием: MechaTE Hand', 920, 63, 18, 8),
(9, 'MAC-HAND', 'Супер кибер рука под красноречивым названием: MAC-HAND', 1000, 18, 19, 8),
(10, 'Dextrous Hand (C5M)', 'Супер кибер рука под красноречивым названием: Dextrous Hand (C5M)', 2000, 5, 20, 8),
(11, 'IH1 Azzurra Hand', 'Супер кибер рука под красноречивым названием: IH1 Azzurra Hand', 2300, 20, 21, 8),
(12, 'i-LIMB Hand', 'Супер кибер рука под красноречивым названием: i-LIMB Hand', 1700, 6, 22, 8),
(13, 'Bebionic v2 Hand', 'Супер кибер рука под красноречивым названием: Bebionic v2 Hand', 2500, 31, NULL, 8),
(14, 'DLR-HIT Hand II', 'DLR-HIT Hand II', 3000, 8, 23, 8),
(15, 'Bebionic Hand', 'Bebionic Hand', 2130, 37, 24, 8),
(16, 'MIT Ankle', 'MIT Ankle', 750, 30, NULL, 9),
(17, 'PowerFoot BiOM', 'PowerFoot BiOM', 840, 10, 25, 9),
(18, 'PROPRIO FOOT', 'PROPRIO FOOT', 1500, 36, 26, 9),
(19, 'Energy-Recycling Foot', 'Energy-Recycling Foot', 1270, 7, 27, 9),
(20, 'Pathfinder II Foot', 'Pathfinder II Foot', 980, 15, 28, 9),
(21, 'BotBrain', 'BotBrain', 5700, 3, 29, 11),
(22, 'Intelligent Robotics', 'Intelligent Robotics', 6700, 5, 30, 11),
(23, 'ARYAN', 'ARYAN', 3000, 12, 31, 11),
(24, 'Amd 64 athlon X2', 'Socket 939 (S939), 2.2Ghz, 1MB Cache L2, Dual-Core, ADO4200IAA5CU', 2000, 20, 32, 15),
(25, 'Intel Core i3', '3.06 ГГц/SVGA/0.5+ 4Мб/2.5 ГТ/с LGA1156', 1900, 30, 33, 15),
(26, 'Pentium D', '3.0 ГГц/ 4Мб/ 800МГц LGA775', 730, 18, 34, 15),
(27, 'Core 2 Quad Q8200', 'OEM 2.33GHz, 1333FSB, 4Mb, EM64T, VT, LGA775', 4000, 20, 35, 15);

-- --------------------------------------------------------

--
-- Table structure for table `goods_in_sale`
--

CREATE TABLE IF NOT EXISTS `goods_in_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `count` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sale_constraint` (`sale_id`),
  KEY `good1_constraint` (`good_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `goods_in_sale`
--


-- --------------------------------------------------------

--
-- Table structure for table `good_in_basket`
--

CREATE TABLE IF NOT EXISTS `good_in_basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `basket_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `good_constraint` (`good_id`),
  KEY `basket_constraint` (`basket_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `good_in_basket`
--


-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id1_constraint` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sales`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--

