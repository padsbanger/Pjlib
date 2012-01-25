-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2012 at 01:36 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pjlib`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tytul` varchar(255) DEFAULT NULL,
  `imie_autor` varchar(32) DEFAULT NULL,
  `nazwisko_autor` varchar(32) DEFAULT NULL,
  `wydawnictwo` varchar(255) DEFAULT NULL,
  `rok_wydania` int(11) DEFAULT NULL,
  `kategoria` varchar(32) DEFAULT NULL,
  `data_usuniecia` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` VALUES(33, 'ad', 'ad', 'ad', 'ad', 64, 'a', '2012-01-24 22:35:13');
INSERT INTO `archives` VALUES(32, 'Wstęp do HTML5 i CSS3 Wstęp do HTML5 i CSS3', 'Bartosz', 'Danowski', 'Helion', 2011, 'Podręczniki', '2012-01-24 22:10:22');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` VALUES(57, 'Projektowanie systemów CMS przy użyciu PHP i jQuery', 'Kae', 'Verens', 'Helion', 2011, 'Webmasterstwo');
INSERT INTO `book` VALUES(9, 'Symfonia C++ Tom II', 'Gustaw', 'Grębosz', 'Helion', 2010, 'Podręczniki');
INSERT INTO `book` VALUES(12, 'Symfonia C++ Tom I', 'Gustaw', 'Grębosz', 'Helion', 2009, 'Podręczniki');
INSERT INTO `book` VALUES(62, 'Macromedia Flash 8 Professional. Oficjalny podręcznik', 'Tom', 'Green', 'Helion', 2006, 'Podręczniki');
INSERT INTO `book` VALUES(61, 'Apache 2.0 dla zaawansowanych', 'Peter', 'Wainwright', 'Helion', 2003, 'Podręczniki');
INSERT INTO `book` VALUES(60, 'Objective-C. Vademecum profesjonalisty. Wydanie III', 'Stephen', 'G. Kochan', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(59, 'GIMP 2.6 dla fotografów - techniki cyfrowej obróbki zdjęć.', 'Klaus', 'Gaskler', 'Helion', 2011, 'Grafika');
INSERT INTO `book` VALUES(58, 'Wirtualizacja w praktyce', 'Marek', 'Serafin', 'Helion', 2011, 'System Operacyjne');
INSERT INTO `book` VALUES(63, 'Microsoft Access. Podręcznik administratora', 'Helen', 'Feddema', 'Helion', 2006, 'Podręczniki');
INSERT INTO `book` VALUES(64, 'Algorytmy teorii liczb i kryptografii w przykładach', 'Chrzęszczyk', 'Andrzej', 'BTC', 2008, 'Podręczniki');
INSERT INTO `book` VALUES(65, 'Sztuka zarządzania projektami', 'Scott', 'Berkun', 'Helion', 2009, 'Podręczniki');
INSERT INTO `book` VALUES(66, 'Sztuka zarządzania projektami II', 'Scott', 'Berkun', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(67, 'Język C++ Mechanizmy wzorce biblioteki', 'Nowak', 'Robert', 'Helion', 2009, 'Podręczniki');
INSERT INTO `book` VALUES(68, 'Język C++ Mechanizmy wzorce biblioteki II', 'Nowak', 'Robert', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(69, 'GIMP 2.6. Receptury', 'Juan Manuel', 'Ferreyra', 'Helion', 2009, 'Grafika');
INSERT INTO `book` VALUES(70, 'Zwinny samuraj. Jak programują mistrzowie zwinności', 'Jonathan', 'Rasmusson', 'Helion', 2007, 'Podręczniki');
INSERT INTO `book` VALUES(71, '3ds Max. Leksykon', 'Wojciech', 'Pazdur', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(72, 'Japanese for Busy People', '-', '-', '-', 2009, 'Podręczniki');
INSERT INTO `book` VALUES(73, 'Japanese for Busy People', '-', '-', '-', 2010, 'Podręczniki');
INSERT INTO `book` VALUES(74, 'Japanese for Busy People', '-', '-', '-', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(75, 'Java 4 Swing. Tom 1', 'J.', 'Bielicki', 'Helion', 2011, 'Programowanie');
INSERT INTO `book` VALUES(76, 'Java 4 Swing. Tom 2', 'J.', 'Bielicki', 'Helion', 2011, 'Programowanie');
INSERT INTO `book` VALUES(77, 'Java 4 Swing. Tom 3', 'J.', 'Bielicki', 'Helion', 2011, 'Programowanie');
INSERT INTO `book` VALUES(78, 'Java 4 Swing. Tom 4', 'J.', 'Bielicki', 'Helion', 2011, 'Programowanie');
INSERT INTO `book` VALUES(79, 'Thinking in Java. Edycja polska  [wyd. 4]', 'B', 'Eckle', 'Helion', 2009, 'Programowanie');
INSERT INTO `book` VALUES(80, 'An Introduction Neural Networks 1', 'K', 'Gurney', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(81, 'An Introduction Neural Networks 2', 'K', 'Gurney', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(82, 'An Introduction Neural Networks 3', 'K', 'Gurney', 'Helion', 2011, 'Podręczniki');
INSERT INTO `book` VALUES(83, 'Core Java 2', '- -', 'Cornell', 'Helion', 2009, 'Programowanie');
INSERT INTO `book` VALUES(84, 'Java 2D TM API Graphics', '- -', 'Cornell', 'Helion', 2009, 'Programowanie');
INSERT INTO `book` VALUES(85, 'Core Java.Techniki zaawansowane', '- -', 'Cornell', 'Helion', 2009, 'Programowanie');
INSERT INTO `book` VALUES(86, 'An Introduction to Genetic Algorithms 1', 'M', 'Mitchell', 'Helion', 2008, 'Podręczniki');
INSERT INTO `book` VALUES(87, 'An Introduction to Genetic Algorithms 2', 'M', 'Mitchell', 'Helion', 2008, 'Podręczniki');
INSERT INTO `book` VALUES(88, 'An Introduction to Genetic Algorithms 3', 'M', 'Mitchell', 'Helion', 2008, 'Podręczniki');
INSERT INTO `book` VALUES(89, 'An Introduction to Genetic Algorithms 4', 'M', 'Mitchell', 'Helion', 2009, 'Podręczniki');
INSERT INTO `book` VALUES(90, 'TCP/IP: Illustrated Volume 1. The Protocols', 'W R', 'Stevens', 'Helion', 2006, 'Podręczniki');
INSERT INTO `book` VALUES(91, 'Adobe Photoshop CS3/CS3 PL. Oficjalny podręcznik', '-', '-', 'Helion', 2008, 'Podręczniki');
INSERT INTO `book` VALUES(92, 'Adobe After Effects CS3 Professional. Oficjalny podręcznik', '-', '-', 'Helion', 2008, 'Podręczniki');

-- --------------------------------------------------------

--
-- Table structure for table `ci_query`
--

CREATE TABLE `ci_query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_string` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `ci_query`
--

INSERT INTO `ci_query` VALUES(75, 'tytul=Symfonia+C%2B%2B&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(76, 'tytul=&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(77, 'tytul=symfonia+c%2B%2B&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(78, 'tytul=&kategoria=Podr%C4%99czniki&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(79, 'tytul=&kategoria=&rok_wydania_comparison=gte&rok_wydania=1');
INSERT INTO `ci_query` VALUES(80, 'tytul=&kategoria=&rok_wydania_comparison=eq&rok_wydania=1');
INSERT INTO `ci_query` VALUES(81, 'tytul=c&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(82, 'tytul=HTML&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(83, 'tytul=&kategoria=&rok_wydania_comparison=eq&rok_wydania=2011');
INSERT INTO `ci_query` VALUES(84, 'tytul=&kategoria=&rok_wydania_comparison=gt&rok_wydania=2008');
INSERT INTO `ci_query` VALUES(85, 'tytul=a&kategoria=&rok_wydania_comparison=eq&rok_wydania=');
INSERT INTO `ci_query` VALUES(86, 'tytul=&kategoria=&rok_wydania_comparison=eq&rok_wydania=2009');
INSERT INTO `ci_query` VALUES(87, 'tytul=Java&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(88, 'tytul=0&kategoria=0&rok_wydania_comparison=0&rok_wydania=0');
INSERT INTO `ci_query` VALUES(89, 'tytul=c%2B%2B&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(90, 'tytul=c%2B%2B&kategoria=&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(91, 'tytul=&kategoria=System+Operacyjne&rok_wydania_comparison=gt&rok_wydania=');
INSERT INTO `ci_query` VALUES(92, 'tytul=&kategoria=Grafika&rok_wydania_comparison=gt&rok_wydania=');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES(3, 'root', 'root');
