-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2015 at 09:02 PM
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
-- Table structure for table `productinfo`
--

CREATE TABLE IF NOT EXISTS `productinfo` (
  `ProductId` varchar(10) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `ProductPrice` decimal(10,3) DEFAULT NULL,
  `ProductCategory` varchar(255) DEFAULT NULL,
  `ProductCompanyName` varchar(255) DEFAULT NULL,
  `ProductReleaseDate` varchar(10) DEFAULT NULL,
  `ProductDemoVideoLink` varchar(255) DEFAULT NULL,
  `ProductSpecification` varchar(255) DEFAULT NULL,
  `ProductAverageRating` int(1) DEFAULT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`ProductId`, `Product_Name`, `ProductPrice`, `ProductCategory`, `ProductCompanyName`, `ProductReleaseDate`, `ProductDemoVideoLink`, `ProductSpecification`, `ProductAverageRating`) VALUES
('11', 'Adobe Flux', '23.000', 'app', 'Adobe', '2004', '', 'Apache Flex, formerly Adobe Flex, is a software development kit (SDK) for the development and deployment of cross-platform rich Internet applications based on the Adobe Flash platform. Initially developed by Macromedia and then acquired by Adobe Systems, ', 4),
('12', 'Adobe Photoshop', '50.000', 'app', 'Adobe', '2004', '', 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Systems for Windows and OS X.\r\nPhotoshop was created in 1988 by Thomas and John Knoll. Since then, it has become the de facto industry standard in raster graphics editing, such t', 2),
('13', 'Microsoft Word', '100.000', 'app', 'Microsoft', '2013', '', 'A full-featured word processing program for Windows and Mac OS X from Microsoft. Available stand-alone or as part of the Microsoft Office suite, Word contains rudimentary desktop publishing capabilities and is the most widely used word processing program ', 5),
('21', 'Microsoft Windows 8', '76.000', 'sys', 'Microsoft', '2012', '', 'Windows 8 is a personal computer operating system developed by Microsoft as part of the Windows NT family of operating systems. Development of Windows 8 started before the release of its predecessor, Windows 7, in 2009. It was announced at CES 2011, and f', 5),
('22', 'RedHat Server', '43.000', 'sys', 'RedHat', '2009', '', 'Red Hat Enterprise Linux OpenStack Platform delivers an integrated foundation to create, deploy, and scale a secure and reliable public or private OpenStack cloud. Red Hat Enterprise Linux OpenStack Platform combines the world’s leading enterprise Linux a', 3),
('23', 'HP UX server', '89.000', 'sys', 'HP', '2003', '', 'HP-UX (Hewlett-Packard UniX) is Hewlett-Packards proprietary implementation of the Unix operating system, based on UNIX System V (initially System III) and first released in 1984. Recent versions support the HP 9000 series of computer systems, based on th', 1),
('31', 'Dreamweaver', '140.000', 'dev', 'Adobe', '2008', '', 'Adobe Dreamweaver is a proprietary web development tool developed by Adobe Systems. Dreamweaver was created by Macromedia in 1997,[1] and was maintained by them until Macromedia was acquired by Adobe Systems in 2005. Adobe Dreamweaver is available for OS ', 1),
('32', 'Visual Studio', '120.000', 'dev', 'Microsoft', '2004', '', 'Visual Studio is a suite of component-based software development tools and other technologies for building powerful, high-performance applications.', 5);

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
