-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2015 at 08:06 PM
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
CREATE DATABASE IF NOT EXISTS `colgtshirtfoundation` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `colgtshirtfoundation`;

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_calls`
--

DROP TABLE IF EXISTS `colgtshirt_calls`;
CREATE TABLE IF NOT EXISTS `colgtshirt_calls` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_groups`
--

DROP TABLE IF EXISTS `colgtshirt_groups`;
CREATE TABLE IF NOT EXISTS `colgtshirt_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_phone_group`
--

DROP TABLE IF EXISTS `colgtshirt_phone_group`;
CREATE TABLE IF NOT EXISTS `colgtshirt_phone_group` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `number_id` int(20) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `created_at` (`created_at`),
  KEY `number_id` (`number_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_phone_number`
--

DROP TABLE IF EXISTS `colgtshirt_phone_number`;
CREATE TABLE IF NOT EXISTS `colgtshirt_phone_number` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colgtshirt_voice_file`
--

DROP TABLE IF EXISTS `colgtshirt_voice_file`;
CREATE TABLE IF NOT EXISTS `colgtshirt_voice_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(250) NOT NULL,
  `location` varchar(500) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

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
