-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2014 at 04:33 PM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matchmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `peripheral_device`
--

CREATE TABLE IF NOT EXISTS `peripheral_device` (
  `peri_device_id` tinyint(3) unsigned NOT NULL,
  `compatibility` tinyint(1) NOT NULL,
  `peri_device_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `device_id` tinyint(3) unsigned NOT NULL,
  `entertainment` tinyint(1) NOT NULL,
  `everyday_task` tinyint(1) NOT NULL,
  `communication_scheduling` tinyint(1) NOT NULL,
  `website` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`peri_device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peripheral_device`
--

INSERT INTO `peripheral_device` (`peri_device_id`, `compatibility`, `peri_device_name`, `price`, `device_id`, `entertainment`, `everyday_task`, `communication_scheduling`, `website`) VALUES
(1, 0, 'hearing-aid helper', 10.99, 1, 0, 0, 0, ''),
(2, 0, 'crutch', 30, 5, 0, 0, 0, ''),
(3, 1, 'weelchair', 100, 3, 0, 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

