-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2012 at 03:26 PM
-- Server version: 5.1.40
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

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
(1, 0, 'adf7e86fdd49207c001c1ac78cd662e0');

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
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `catalog_div`
--

INSERT INTO `catalog_div` (`id`, `name`, `parent_catalog_div_id`) VALUES
(1, 'root', NULL),
(2, 'Части тела', 1),
(3, 'Неживые', 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price_current`, `count`, `picture_id`, `catalog_id`) VALUES
(1, 'Глаз-алмаз', 'Описание глаза-алмаза', 12, 2, 1, 3),
(2, 'Золотая рука', 'фытваапфцдлрпцрупругфргрукдр г\r\n', 5, 3, 2, 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'alex', 'aaa');
