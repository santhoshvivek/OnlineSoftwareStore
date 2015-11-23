-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2015 at 08:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geeksoftwareshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `userId` int(10) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `State` varchar(2) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `postalCode` varchar(5) DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userId`, `LastName`, `FirstName`, `Address`, `State`, `City`, `postalCode`, `EmailId`, `Username`, `Password`, `Phone`) VALUES
(1, 'sdf', 'khk', 'sdf', 'sd', 'sdf', 'sdf', 'sankar88e@gmail.com', 'sdf', 'jhkh', 'sdf'),
(4, 'qwe', 'qwe', 'qwe', 'qw', 'qwe', 'qwe', 'qwe@sf.com', 'qwe', 'qwe', 'qwe'),
(5, 'user3', 'user3', 'user3', 'us', 'user3', 'user3', 'user3@sdf.com', 'user3', 'user3', 'user3'),
(6, 'user4', 'user4', 'user4', 'us', 'user4', 'user4', 'user4@user4.com', 'user4', 'user4', 'user4'),
(7, 'user5', 'user5', 'user5', 'us', 'user5', 'user5', 'user5@something.om', 'user5', 'user5', 'user5'),
(8, 'sdf', 'sdf', 'sdfj', 'sd', 'sdf', 'sf', 'sf@sdf.com', 'sdfkj', 'sdf', 'sdf'),
(9, 'hello1', 'hello1', 'hello1', 'tx', 'dallas', '75252', 'hello1@hello1.com', 'hello1', 'hello1', 'sfhd;sjf'),
(10, 'user6', 'user6', 'user6', 'us', 'user6', 'user6', 'user6@kdf.com', 'user6', 'user6', 'user6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
