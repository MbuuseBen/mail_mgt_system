-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 05:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mail_delivery_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_fname` varchar(20) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `admin_username` varchar(20) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL,
  `admin_email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_username`, `admin_password`, `admin_email`) VALUES
(1, '', '', '', '12345', 'admin1@admin.com'),
(2, '', '', '', '3456', 'admin1@admin.com'),
(4, '', '', 'web', '2345', 'web@admin.com'),
(5, '', '', 'web2', '2344', 'web2@admin.com'),
(6, '', '', 'ben', '827ccb0eea8a706c4c34a16891f84e7b', 'ben@web.com'),
(7, '', '', 'ben', '827ccb0eea8a706c4c34a16891f84e7b', 'ben@web.com'),
(9, '', '', 'kray', '25f9e794323b453885f5181f1b624d0b', 'kray@kray.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_fname` varchar(50) NOT NULL,
  `client_lname` varchar(50) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `client_password` varchar(15) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_fname`, `client_lname`, `client_address`, `email`, `client_password`) VALUES
(1, 'r', 'e', 're', 're@re.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `delivery_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `delivery_type` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `receiver_name` varchar(20) NOT NULL,
  `receiver_address` varchar(20) NOT NULL,
  `delivery_status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`delivery_id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
