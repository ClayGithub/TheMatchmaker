-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2014 at 09:07 AM
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
  `android` tinyint(4) NOT NULL,
  `apple` tinyint(4) NOT NULL,
  `specialized` tinyint(4) NOT NULL,
  `entertainment` tinyint(4) NOT NULL,
  `communication` tinyint(4) NOT NULL,
  `everyday_tasks` tinyint(4) NOT NULL,
  `scheduling` tinyint(4) NOT NULL,
  PRIMARY KEY (`device_id`),
  KEY `seller_id` (`seller_id`),
  KEY `disability_id` (`disability_id`),
  KEY `peri_device_id` (`peri_device_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`device_id`, `device_name`, `disability_id`, `manufacturer`, `seller_id`, `compatibility`, `price`, `description`, `peri_device_id`, `android`, `apple`, `specialized`, `entertainment`, `communication`, `everyday_tasks`, `scheduling`) VALUES
(1, 'IPhone 6', 0, 'Apple', 0, 1, 299, 'Small in size with three screens size options.  Multiple memory sizes available as the price increases.  Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1),
(2, 'IPad Air 2', 0, 'Apple', 0, 1, 499, 'Large touch screen tablet, communication abilities, price increases with memory size increase, Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1),
(3, 'IPad Air', 0, 'Apple', 0, 1, 399, 'Large touch screen tablet, price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1),
(4, 'IPad Mini', 0, 'Apple', 0, 1, 249, 'Smaller version of the IPad Air but larger touch screen tablet than an IPhone. Price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1),
(5, 'IPad Mini 2', 0, 'Apple', 0, 1, 299, 'Smaller version of the IPad Air but larger touch screen tablet than an IPhone. Price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1),
(6, 'IPad Mini 3', 0, 'Apple', 0, 1, 399, 'Smaller version of the IPad Air but larger touch screen tablet than an IPhone. Price increases as the memory increases. Numerous application compatibility through the ITunes network.', 0, 0, 1, 0, 1, 1, 1, 1),
(7, 'Pronto Tech 7"', 0, 'Android', 0, 2, 49, '4 GB of memory, this device is compatible with all Android apps.  It has a double camera with a large 7" tablet touch screen and WiFi is available for this device.', 0, 1, 0, 0, 1, 1, 1, 1),
(8, 'Megafeis Tablet', 0, 'Android', 0, 2, 79, '8 GB of memory, this device is compatible with all Android Applications.  It has the addition of a microphone for speaking to text messages, as well as has a large tablet touch screen.', 0, 1, 0, 0, 1, 1, 1, 1),
(9, 'Digital Reins 9"', 0, 'Android', 0, 2, 179, 'A larger, 9" tablet touch screen, compatible with all Android Applications.  Has 8 GB of memory as well as a microphone for speaking to text messages', 0, 1, 0, 0, 1, 1, 1, 1),
(10, 'iRulu 7"', 0, 'Android', 0, 2, 59, 'Android Applications compatibility with a 7" tablet touch screen.  Blue Tooth and Skype built in along with 4 GB of memory and has a built in MP3 player.', 0, 1, 0, 0, 1, 1, 1, 1),
(11, 'Sky Devices Ski', 0, 'Android', 0, 2, 79, 'This is an Android phone with a larger touch screen,  it has 4 GB of ROM with an excellent microphone for speaking to text messages.', 0, 1, 0, 0, 1, 1, 1, 1),
(12, 'Allora Keyboard', 0, 'Spectronics', 0, 3, 2495, 'Allora offers this keyboard for simple text to speech generating.  It comes with a waterproof keyboard and word prediction.', 0, 0, 0, 1, 0, 1, 0, 0),
(13, 'Xpress', 0, 'Dynavox', 0, 4, 6514, 'Dynavox offers this systems which has Windows-based software as well as offers the user the ability to create sentences and conversations using pictures.', 0, 0, 0, 1, 0, 1, 1, 1),
(14, 'Maestro', 0, 'Dynavox', 0, 5, 12049, 'The Maestro allows the user to create custom pages and allows speaking to text messages.  The device contains a camera, preloaded voices, is Microsoft compatible and has an eye-tracking accessory.', 0, 0, 0, 1, 0, 1, 1, 1),
(15, 'Dynawrite', 0, 'Dynavox', 0, 6, 4995, 'Dynawrite is a small compact device that can record up to an hour of speaking and contains a computer keyboard for easy, familiar use.', 0, 0, 0, 1, 0, 1, 0, 0),
(16, 'V+', 0, 'Dynavox', 0, 7, 6548, 'Windows-based device that has Integrated reader software and comes with Eye-tracking software.', 0, 0, 0, 1, 1, 1, 0, 1),
(17, 'Lightwriter', 0, 'Toby Churchill', 0, 8, 6250, 'The Lightwriter receives texts, stores notes and can be used as a remote in the household.  This device has a large text display but does not speak.', 0, 0, 0, 1, 0, 1, 0, 0),
(18, 'SL40 and Connect', 0, 'Toby Churchill', 0, 9, 3500, 'This is a larger version of the Lightwriter that has text and mobile phone abilities.  It can save large Microsoft document and has various voices available for text to speech.', 0, 0, 0, 1, 0, 1, 1, 1),
(19, 'ECO2', 0, 'Prentke Romich', 0, 10, 7895, 'The ECO2 is a windows-based device with a large 14.1" screen and supports MP3 player files.  It has large keys, eye-tracking software and a built-in CD burner. ', 0, 0, 0, 1, 1, 1, 1, 1),
(20, 'NOVA Chat 5', 0, 'Saltillo', 0, 11, 3195, 'This device has an Android platform and is the smallest of the NOVA series.  It comes with switch scanning and preloaded vocabulary.', 0, 0, 0, 1, 0, 1, 1, 1),
(21, 'NOVA Chat 8', 0, 'Saltillo', 0, 12, 3970, 'This device begins with an Android platform it has many different vocabulary pages preloaded.', 0, 0, 0, 1, 0, 1, 1, 1),
(22, 'NOVA Chat 10', 0, 'Saltillo', 0, 12, 4395, 'This device also has an Android platform as well as a speech synthesizer.  The NOVA Chat 10 allows the user to save files and has numerous voice options for the speaking feature.', 0, 0, 0, 1, 0, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
