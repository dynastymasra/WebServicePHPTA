-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2015 at 01:07 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webservice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ws_location`
--

CREATE TABLE IF NOT EXISTS `ws_location` (
  `id_location` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `longtitude` double NOT NULL,
  `latitude` double NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ws_location`
--

INSERT INTO `ws_location` (`id_location`, `title`, `address`, `photo`, `longtitude`, `latitude`, `category`, `description`) VALUES
(1, 'tes', 'tes', 'photo/8-Ruang Tamu Cantik Dengan Pola Warna-Warni.', 324234, 32424, 'sdfsd', 'ffsdfsdf'),
(2, 'esadsads', 'dsadas', 'photo/00975.jpg', 32432434, 3242342, 'fsdf', 'dsfsdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
