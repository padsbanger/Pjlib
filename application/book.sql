/*
SQLyog Community Edition- MySQL GUI v5.21
Host - 5.1.33-community : Database - ci_project
*********************************************************************
Server version : 5.1.33-community
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `ci_project`;

USE `ci_project`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(32) DEFAULT NULL,
  `publisher` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`id`,`book_name`,`author`,`publisher`) values (1,'Programmer to programmer - Profesional Code Igniter','Thomas Myer','Wrox'),(2,'Code Igniter for Rapid Application Development','David Upson','Packt Publishing'),(3,'PHP 5 CMS Framework Development','Martin Brampton','Packt Publishing'),(7,'PHP Solutions - Dynamic Web Design Made Easy','David Power','Appress and PHP Solutions');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
