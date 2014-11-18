-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 01:35 PM
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
-- Table structure for table `disability`
--

CREATE TABLE IF NOT EXISTS `disability` (
  `disability_id` tinyint(3) unsigned NOT NULL,
  `category` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`disability_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `disability`
--

INSERT INTO `disability` (`disability_id`, `category`, `description`) VALUES
(1, 'physical', 'leg problem'),
(2, 'hearing', 'hearing aid'),
(3, 'deaf', 'sign language aid');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
