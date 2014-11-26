-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2014 at 09:08 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `entertainment` tinyint(4) NOT NULL,
  `communication` tinyint(4) NOT NULL,
  `scheduling` tinyint(4) NOT NULL,
  `everyday_tasks` tinyint(4) NOT NULL,
  `website` char(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`peri_device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peripheral_device`
--

INSERT INTO `peripheral_device` (`peri_device_id`, `compatibility`, `peri_device_name`, `price`, `device_id`, `entertainment`, `communication`, `scheduling`, `everyday_tasks`, `website`) VALUES
(1, 1, 'Proloquo2Go', 220, 1, 1, 1, 0, 0, 'Itunes'),
(2, 1, 'Living Safely', 30, 1, 0, 0, 0, 1, 'Itunes'),
(3, 1, 'iStudies Pro.', 3, 1, 0, 1, 1, 1, 'Itunes'),
(4, 1, 'Conversation Builder Teen', 30, 1, 1, 1, 0, 0, 'Itunes'),
(5, 1, 'Counting Bills and Coins', 0, 1, 1, 0, 0, 1, 'Itunes'),
(6, 1, 'My Talk Tools', 100, 1, 1, 1, 0, 0, 'Itunes'),
(7, 2, 'AAC Speech Buddy', 28, 2, 0, 1, 0, 0, 'Google Play'),
(8, 2, 'Every Day To Do List Task List', 0, 2, 0, 0, 1, 1, 'Google Play'),
(9, 2, 'Life Skills Winner', 0, 2, 1, 0, 0, 1, 'Google Play'),
(10, 2, 'Smart Steps Mobile', 0, 2, 1, 1, 0, 0, 'Google Play'),
(11, 2, 'JAB Talk ', 0, 2, 0, 1, 0, 0, 'Google Play'),
(12, 2, 'Training Faces', 3, 2, 1, 1, 0, 0, 'Google Play'),
(13, 3, 'Natural-Sounding Real Speak Vo', 0, 3, 0, 1, 0, 0, 'http://www.spectronics.co'),
(14, 3, 'Word Prediction Software', 0, 3, 0, 1, 0, 0, 'http://www.spectronics.co'),
(15, 3, 'Pre-Programmed Messages ', 0, 3, 0, 1, 0, 0, 'http://www.spectronics.co'),
(16, 4, 'Series 5 Software w/ InterAACt', 0, 13, 1, 1, 0, 1, 'http://www.dynavoxtech.co'),
(17, 4, 'Picture Communication Symbols', 0, 13, 0, 1, 0, 1, 'http://www.dynavoxtech.co'),
(18, 4, 'AT&T Natural Voices ', 0, 13, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(19, 4, 'Acapela HQ Child and Adult Voi', 0, 13, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(20, 4, 'Loquendo Voices', 0, 13, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(21, 5, 'Page Editing Software', 0, 14, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(22, 5, 'Series 5 Software w/ InterAACt', 0, 14, 1, 1, 0, 1, 'http://www.dynavoxtech.co'),
(23, 5, 'Boardmaker w/ Speaking Dynamic', 0, 14, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(24, 5, 'Picture Communication Symbols', 0, 14, 0, 1, 0, 1, 'http://www.dynavoxtech.co'),
(25, 5, 'DynaSyms Symbols', 0, 14, 0, 1, 0, 1, 'http://www.dynavoxtech.co'),
(26, 5, 'Microsoft Voices', 0, 14, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(27, 6, 'Series 5 Software w/ InterAACt', 0, 15, 1, 1, 0, 1, 'http://www.dynavoxtech.co'),
(28, 7, 'Integrated Ebook Reader Softwa', 0, 16, 1, 1, 0, 0, 'http://www.dynavoxtech.co'),
(29, 7, 'Page Editing Software', 0, 16, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(30, 7, 'Series 5 Software w/ Interact', 0, 16, 1, 1, 0, 1, 'http://www.dynavoxtech.co'),
(31, 7, 'Eye Tracking System', 0, 16, 0, 1, 0, 1, 'http://www.dynavoxtech.co'),
(32, 8, 'Series 5 Software w/ InterAACt', 0, 17, 1, 1, 0, 1, 'http://www.dynavoxtech.co'),
(33, 8, 'Acapela HQ Child and Adult Voi', 0, 17, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(34, 9, 'Acapela HQ Child and Adult Voi', 0, 18, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(35, 9, 'Series 5 Software w/ InterAACt', 0, 18, 1, 1, 0, 1, ''),
(36, 9, 'Mobile Phone Connect Software', 0, 18, 0, 1, 0, 0, 'http://www.dynavoxtech.co'),
(37, 10, 'Windows 7', 0, 19, 1, 1, 1, 1, 'https://store.prentrom.co'),
(38, 10, 'Internal DVD/CD player/burner', 0, 19, 1, 1, 0, 0, 'https://store.prentrom.co'),
(39, 10, 'ECO point eye gaze module', 0, 19, 0, 1, 1, 1, 'https://store.prentrom.co'),
(40, 11, 'AACelerate with myVoice', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(41, 11, 'ChatPower', 0, 20, 1, 1, 0, 0, 'http://saltillo.com/produ'),
(42, 11, 'Essence', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(43, 11, 'Vocab PC', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(44, 11, 'SymbolStix', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(45, 11, 'PCS', 0, 20, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(46, 12, 'Social Chat', 0, 21, 1, 1, 0, 0, 'http://saltillo.com/produ'),
(47, 12, 'IVONA Speech Synthesizer', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(48, 12, 'AACelerate with myVoice', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(49, 12, 'ChatPower', 0, 21, 1, 1, 0, 0, 'http://saltillo.com/produ'),
(50, 12, 'Essence', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ'),
(51, 12, 'Vocab PC', 0, 21, 0, 1, 0, 0, 'http://saltillo.com/produ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
