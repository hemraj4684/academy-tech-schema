-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2014 at 02:50 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techschema`
--

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE IF NOT EXISTS `join_us` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `name`, `email`, `mobile_number`, `comment`, `type`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '9920518910', 'interested', '', '2014-07-27 19:27:20'),
(2, 'Sandip', 'sandip@gmail.com', '9604737556', 'Very much interested', '', '2014-07-27 19:29:07'),
(3, 'Prahlad Agrahari', 'prahlad@gmail.com', '9865321514', 'Interested', 'on,on', '2014-07-28 17:42:17'),
(4, 'Prahlad Agrahari', 'prahlad@gmail.com', '9865321514', 'Interested', 'on,on', '2014-07-28 17:43:22'),
(5, 'Prahlad Agrahari', 'prahlad@gmail.com', '9865321514', 'Interested', 'on,on', '2014-07-28 17:44:35'),
(6, 'Prahlad Agrahari', 'prahlad@gmail.com', '99999999999999', 'iiiiiiiiiiiiiiiiii', 'project,training', '2014-07-28 17:44:58');
