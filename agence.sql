-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2021 at 11:14 PM
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
-- Database: `agence`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(25) COLLATE utf8_bin NOT NULL,
  `title` varchar(254) COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(25) COLLATE utf8_bin NOT NULL,
  `photo` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `categorie`, `title`, `price`, `location`, `photo`) VALUES
(21, 'STUDIO', 'STUDIO FOR ISI STUDENTS', 600000, 'ARIANA', 'img/3.jpg'),
(20, 'APPARTEMENT', 'NICE FLAT IN BEN AROUS', 250000, 'BEN AROUS', 'img/9.jpg'),
(19, 'VILLA', 'HUGE VILLA IN MARSA', 9000000, 'TUNIS', 'img/2.jpg'),
(22, 'APPARTEMENT', 'NICE FAMILLY APPARTEMENT LOCATED IN MANOUBA', 120000, 'MANNOUBA', 'img/1.jpg'),
(23, 'FARMHOUSE', 'FARMHOUSE LOCATED IN SIDITHABET', 6500000, 'ARIANA', 'img/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(25) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `location` varchar(50) COLLATE utf8_bin NOT NULL,
  `gender` char(1) COLLATE utf8_bin NOT NULL,
  `password` varchar(25) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `dob`, `location`, `gender`, `password`) VALUES
(12, 'Anas', 'Daoud', 'daoudanas6969@gmail.com', '2021-05-02', 'Ariana', 'H', 'abc123456'),
(13, 'Moetaz', 'Aissaoui', 'moetezissaoui7@gmail.com', '2006-06-06', 'Fahs', 'H', '123456aaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
