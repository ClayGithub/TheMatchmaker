-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 01:34 PM
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
-- Table structure for table `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `device_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `device_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `disability_id` tinyint(3) unsigned NOT NULL,
  `manufacturer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `seller_id` tinyint(3) unsigned DEFAULT NULL,
  `compatibility` tinyint(1) NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `peri_device_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`device_id`),
  KEY `seller_id` (`seller_id`),
  KEY `disability_id` (`disability_id`),
  KEY `peri_device_id` (`peri_device_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_id`, `device_name`, `disability_id`, `manufacturer`, `seller_id`, `compatibility`, `price`, `description`, `peri_device_id`) VALUES
(1, 'apple', 1, 'Apple', 1, 1, 700, 'white color, lightweight', 1),
(2, 'hearing aid', 3, 'New Ear Device', 3, 0, 99, 'light weight and power saving device', 3),
(3, 'deaf aid', 2, 'New Sign Language', 2, 1, 100, ' new face, light weight and power saving device', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `device_ibfk_3` FOREIGN KEY (`peri_device_id`) REFERENCES `peripheral_device` (`peri_device_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `device_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `device_ibfk_2` FOREIGN KEY (`disability_id`) REFERENCES `disability` (`disability_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
