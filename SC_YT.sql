-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2015 at 05:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SC_YT`
--

-- --------------------------------------------------------

--
-- Table structure for table `ws_location`
--

CREATE TABLE IF NOT EXISTS `ws_location` (
`id_location` int(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `longtitude` double NOT NULL,
  `latitude` double NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ws_location`
--

INSERT INTO `ws_location` (`id_location`, `title`, `address`, `photo`, `longtitude`, `latitude`, `category`, `description`) VALUES
(3, 'Prambanan', 'Jl. Raya Jogja Solo Km 16, Prambanan, Sleman Regency, Special Region of Yogyakarta 55571, Indonesia', 'photo/115432644.jpg', 110.492005, -7.751919, 'Temple', 'Expansive, 9th-century Hindu temple complex featuring structures with stone spires & sculptures'),
(4, 'Adisucipto International Airport', 'Jl. Raya Solo KM.9, Sleman Regency, Special Region of Yogyakarta 55282, Indonesia', 'photo/115266455.jpg', 110.431763, -7.787685, 'Airport', 'Adisucipto International Airport is the principal airport serving the Yogyakarta area on the island of Java, Indonesia.'),
(5, 'Jombor Terminal', 'Jl. Magelang, Mlati, Sleman Regency, Special Region of Yogyakarta, Indonesia', 'photo/115266404.jpg', 110.362107, -7.746715, 'Terminal', 'Yogyakarta Bus Terminal'),
(6, 'Giwangan Terminal', 'Jl. Imogiri 1, Bantul Regency, Special Region of Yogyakarta 55163, Indonesia', 'photo/115266091.jpg', 110.392441, -7.834253, 'Terminal', 'Giwangan Bus Terminal'),
(8, 'Lempuyangan Station', 'Jl. Lempuyangan, Danurejan, Special Region of Yogyakarta, Indonesia', 'photo/115265797.jpg', 110.375361, -7.790222, 'Station', 'Lempuyangan Station is a train station Yogyakarta'),
(9, 'Borobudur', 'Jl. Badrawati, Borobudur, Magelang, Central Java 56553, Indonesia', 'photo/borobudur.jpg', 110.203752, -7.607875, 'Temple', 'Borobudur, or Barabudur, is a 9th-century Mahayana Buddhist Temple in Magelang, Central Java, Indonesia'),
(10, 'Tugu Station', 'Jl. Ps. Kembang, Gedong Tengen, Yogyakarta City, Special Region of Yogyakarta 55271, Indonesia', 'photo/tugu.jpg', 110.363425, -7.789423, 'Station', 'Tugu station was a historically significant location during the Dutch colonial era in Java, being a location where Dutch colonial officials, and Yogyakarta royalty would travel to and from Batavia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ws_location`
--
ALTER TABLE `ws_location`
 ADD PRIMARY KEY (`id_location`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ws_location`
--
ALTER TABLE `ws_location`
MODIFY `id_location` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
