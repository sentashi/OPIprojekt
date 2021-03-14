-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2021 at 05:11 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proizvodi`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

DROP TABLE IF EXISTS `proizvodi`;
CREATE TABLE IF NOT EXISTS `proizvodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cijenaBez` float NOT NULL,
  `PDV` float NOT NULL,
  `količina` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `mjernaJedinica` varchar(11) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `cijenaBez`, `PDV`, `količina`, `naziv`, `mjernaJedinica`) VALUES
(1, 10, 25, 100, 'Rajčica', 'kg'),
(8, 11, 25, 35, 'Banana', 'kg'),
(3, 5, 25, 500, 'Krompir', 'kg'),
(4, 5, 25, 40, 'Kupus', 'kg'),
(5, 8, 25, 15, 'Rotkvica', 'kg'),
(6, 9, 25, 24, 'Paprika', 'kg'),
(7, 10, 25, 50, 'Jabuka', 'kg'),
(9, 23, 213, 213, 'dda', 'da');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
