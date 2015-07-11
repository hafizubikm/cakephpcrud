-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 02:06 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `address`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladdress`
--

CREATE TABLE IF NOT EXISTS `tbladdress` (
`addid` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `thana` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbladdress`
--

INSERT INTO `tbladdress` (`addid`, `country`, `city`, `thana`) VALUES
(11, 'Bangladesh', 'Dhaka', 'Badda'),
(12, 'Bangladesh', 'Dhaka', 'Gulshan'),
(13, 'India', 'Dhilhi', 'Kolkata'),
(14, 'India', 'Lahor', 'Kannur'),
(15, 'Pakistan', 'Koriachi', 'Thana'),
(16, 'Pakistan', 'Islamabad', 'Thana2'),
(17, 'Bangladesh', 'Dhaka', 'Badda'),
(18, 'Pakistan', 'Dhilli', 'Kashmir'),
(26, 'Pakistan', 'Dhilli', 'Kashmirff'),
(27, 'Pakistan', 'Dhilli', 'Kashmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladdress`
--
ALTER TABLE `tbladdress`
 ADD PRIMARY KEY (`addid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladdress`
--
ALTER TABLE `tbladdress`
MODIFY `addid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
