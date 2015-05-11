-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 11, 2015 at 09:19 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `colgtshirtfoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_groups`
--

CREATE TABLE IF NOT EXISTS `colgtshirt_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `colgtshirt_groups`
--

INSERT INTO `colgtshirt_groups` (`id`, `created_at`, `name`, `description`) VALUES
(1, '2015-05-10 13:10:16', 'Bangladesh', 'Bangladeshi client only'),
(2, '2015-05-10 13:10:39', 'India', 'Indian Client only');

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_phone_group`
--

CREATE TABLE IF NOT EXISTS `colgtshirt_phone_group` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `number_id` int(20) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `created_at` (`created_at`),
  KEY `number_id` (`number_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `colgtshirt_phone_group`
--

INSERT INTO `colgtshirt_phone_group` (`id`, `created_at`, `number_id`, `group_id`) VALUES
(1, '2015-05-10 13:11:16', 1, 1),
(2, '2015-05-10 13:11:53', 2, 1),
(3, '2015-05-10 13:12:10', 3, 2),
(4, '2015-05-10 13:12:32', 4, 1),
(5, '2015-05-10 13:13:08', 5, 1),
(6, '2015-05-10 13:23:50', 6, 1),
(7, '2015-05-10 13:24:06', 7, 1),
(8, '2015-05-11 04:51:40', 8, 2),
(9, '2015-05-11 04:51:41', 9, 2),
(10, '2015-05-11 04:51:41', 10, 2),
(11, '2015-05-11 04:52:17', 11, 2),
(12, '2015-05-11 04:52:17', 12, 2),
(13, '2015-05-11 04:52:17', 13, 2),
(14, '2015-05-11 04:57:34', 14, 2),
(15, '2015-05-11 04:57:34', 15, 2),
(16, '2015-05-11 04:57:34', 16, 2),
(17, '2015-05-11 04:58:22', 17, 2),
(18, '2015-05-11 04:58:22', 18, 2),
(19, '2015-05-11 04:58:22', 19, 2),
(20, '2015-05-11 06:52:13', 23, 1),
(21, '2015-05-11 06:52:13', 24, 1),
(22, '2015-05-11 06:52:13', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_phone_number`
--

CREATE TABLE IF NOT EXISTS `colgtshirt_phone_number` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `colgtshirt_phone_number`
--

INSERT INTO `colgtshirt_phone_number` (`id`, `created_at`, `name`, `phone`, `email`) VALUES
(1, '2015-05-10 13:11:16', 'Abu Sayem', '01718775095', 'sayem@gmail.com'),
(2, '2015-05-10 13:11:53', 'Sayem', '0174444444', ''),
(3, '2015-05-10 13:12:10', 'Sayem2', '01718775093', ''),
(4, '2015-05-10 13:12:32', 'Sayem4', '01718775091', ''),
(5, '2015-05-10 13:13:08', 'Sayem3', '01718775093', ''),
(6, '2015-05-10 13:23:50', 'Abu Sayem1', '01718775096', ''),
(7, '2015-05-10 13:24:06', 'Abu Sayem2', '01718775097', ''),
(8, '2015-05-11 04:51:40', 'Sae', '1738366363', 'sa@gmail.com'),
(9, '2015-05-11 04:51:41', 'Abu', '123654498', 'Sayem@asteriskbd.com'),
(10, '2015-05-11 04:51:41', 'Sa', '1545454544', 'sa1@g.com'),
(11, '2015-05-11 04:52:17', 'Sae', '1738366363', 'sa@gmail.com'),
(12, '2015-05-11 04:52:17', 'Abu', '123654498', 'Sayem@asteriskbd.com'),
(13, '2015-05-11 04:52:17', 'Sa', '1545454544', 'sa1@g.com'),
(14, '2015-05-11 04:57:34', 'Sae', '1738366363', 'sa@gmail.com'),
(15, '2015-05-11 04:57:34', 'Abu', '123654498', 'Sayem@asteriskbd.com'),
(16, '2015-05-11 04:57:34', 'Sa', '1545454544', 'sa1@g.com'),
(17, '2015-05-11 04:58:22', 'Sae', '1738366363', 'sa@gmail.com'),
(18, '2015-05-11 04:58:22', 'Abu', '123654498', 'Sayem@asteriskbd.com'),
(19, '2015-05-11 04:58:22', 'Sa', '1545454544', 'sa1@g.com'),
(23, '2015-05-11 06:52:13', 'Sae', '1000000', 'sa@gmail.com'),
(24, '2015-05-11 06:52:13', 'Abu', '1000000', 'Sayem@asteriskbd.com'),
(25, '2015-05-11 06:52:13', 'Sa', '10000000', 'sa1@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_voice_file`
--

CREATE TABLE IF NOT EXISTS `colgtshirt_voice_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(250) NOT NULL,
  `location` varchar(500) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `colgtshirt_voice_file`
--

INSERT INTO `colgtshirt_voice_file` (`id`, `created_at`, `name`, `location`, `description`) VALUES
(1, '2015-05-10 07:32:42', '1431243162_Dil_Ka_Baje_Ektara_-_I_Love_Desi(MyMp3Song_Com).mp3', '/var/www/html/colgtshirt/uploads/voice/1431243162_Dil_Ka_Baje_Ektara_-_I_Love_Desi(MyMp3Song_Com).mp3', 'This file is for calling in bangladeshi customer	 fffffffffffffffffff fffffff fffffffffffffffffffffffffffffffffffffffffffffff    			    ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colgtshirt_phone_group`
--
ALTER TABLE `colgtshirt_phone_group`
  ADD CONSTRAINT `group` FOREIGN KEY (`group_id`) REFERENCES `colgtshirt_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `phone_number` FOREIGN KEY (`number_id`) REFERENCES `colgtshirt_phone_number` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
