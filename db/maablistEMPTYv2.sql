-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2018 at 02:14 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maabtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `maablist`
--

DROP TABLE IF EXISTS `maablist`;
CREATE TABLE IF NOT EXISTS `maablist` (
  `orNumber` varchar(25) DEFAULT NULL,
  `IDNumber` varchar(255) NOT NULL,
  `memType` enum('Classic','Premier Bronze','Premier Silver','Premier Gold','Premier Platinum','Senior','Senior Plus') DEFAULT NULL,
  `chapter` varchar(25) DEFAULT 'BAGUIO CITY',
  `lastName` varchar(50) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(25) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` varchar(3) DEFAULT 'F',
  `gender` enum('M','F') DEFAULT NULL,
  `validDate` date DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  PRIMARY KEY (`IDNumber`),
  UNIQUE KEY `IDNumber` (`IDNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
