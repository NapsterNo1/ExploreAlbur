-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2021 at 03:54 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `albursite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Email`, `Password`) VALUES
(9, 'Admin', 'Admin@yahoo.com', '12345'),
(4, 'albur', 'albur@yahoo.com', '12345'),
(5, 'administrator', 'admin@yahoo.com', '12345'),
(8, 'user', 'user@yahoo.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `email`, `comment`) VALUES
(1, ' Benjie', 'benjie_estal123@yahoo.com', 'What a Great History to read'),
(6, 'Sejun Nase', 'sejun@yahoo.com', 'Wow just wow'),
(5, 'Sejun Nase', 'sejun@yahoo.com', 'Wow just wow'),
(7, 'Sejun Nase', 'sejunl123@yahoo.com', 'A history that makes this place a better place to live.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Benjie G. Estal', 'benjie_estal123@yahoo.com', 'Can I ask where to locate tagbuane brodge?'),
(2, 'Sejun Nase', 'sejunl123@yahoo.com', 'May I ask where can I buy that Calamay for souvenir?');

-- --------------------------------------------------------

--
-- Table structure for table `spot`
--

CREATE TABLE IF NOT EXISTS `spot` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `spot`
--

INSERT INTO `spot` (`id`, `name`, `email`, `comment`) VALUES
(1, ' Benjie', 'benjie_estal123@yahoo.com', 'What nice place to visit'),
(9, 'Justin De Dios', 'justin@yahoo.com', 'Come Visit Albur'),
(12, 'Sejun Nase', 'sejunl123@yahoo.com', 'Been there to Santa Fe Beach what a nice white sand beach! Greeting from Florida!'),
(10, 'Justin De Dios', 'justin@yahoo.com', 'Come Visit Albur'),
(11, 'Justin De Dios', 'justin@yahoo.com', 'Come Visit Albur');
