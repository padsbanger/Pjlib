-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2011 at 02:41 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pjlib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tytul` varchar(255) DEFAULT NULL,
  `imie_autor` varchar(32) DEFAULT NULL,
  `nazwisko_autor` varchar(32) DEFAULT NULL,
  `wydawnictwo` varchar(255) DEFAULT NULL,
  `rok_wydania` int(11) DEFAULT NULL,
  `kategoria` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` VALUES(1, 'Symfonia C++ Tom I', 'Gustaw', 'Grębosz', 'Helion', 2009, 'Podręczniki');
INSERT INTO `book` VALUES(8, 'Okładka książki Wstęp do HTML5 i CSS3 Wstęp do HTML5 i CSS3', 'Bartosz', 'Danowski', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(9, 'Symfonia C++ Tom II', 'Gustaw', 'Grębosz', 'Helion', 2009, 'Podręczniki');
INSERT INTO `book` VALUES(10, 'CSS według Erica Meyera. Kolejna odsłona', 'Eric', 'Meyer', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(11, 'Przewodnik Google Website Optimizer. Przewodnik .', 'Wojciech', 'Kyciak', 'Helion', 2011, 'Podręczniki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--

