-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2015 at 10:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `keymanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Pin` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Pin`) VALUES
(1321),
(1321);

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE IF NOT EXISTS `bookdetails` (
`SerialNo` int(11) NOT NULL,
  `UserId` int(4) DEFAULT NULL,
  `KeyId` int(4) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`SerialNo`, `UserId`, `KeyId`, `Time`) VALUES
(5, 101, 1, '2015-09-14 03:02:57'),
(7, 102, 4, '2015-09-14 03:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `currentuser`
--

CREATE TABLE IF NOT EXISTS `currentuser` (
  `UserId` int(3) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tracking` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `error`
--

CREATE TABLE IF NOT EXISTS `error` (
`ErrorId` int(6) NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error`
--

INSERT INTO `error` (`ErrorId`, `Type`) VALUES
(1, 'MisplacementError');

-- --------------------------------------------------------

--
-- Table structure for table `errorhistory`
--

CREATE TABLE IF NOT EXISTS `errorhistory` (
`SerialNo` int(1) NOT NULL,
  `ErrorId` int(4) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Description` varchar(45) NOT NULL,
  `AdminChecked` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `errorhistory`
--

INSERT INTO `errorhistory` (`SerialNo`, `ErrorId`, `Time`, `Description`, `AdminChecked`) VALUES
(1, 1, '2015-09-14 03:42:45', 'KeyId 2 is misplaced in the Location of 3', 1),
(2, 2, '2015-09-14 03:06:27', 'Key is not available for long time.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `keyhistory`
--

CREATE TABLE IF NOT EXISTS `keyhistory` (
`SerialNo` int(4) NOT NULL,
  `KeyId` int(11) NOT NULL,
  `UserId` int(4) NOT NULL,
  `Room No` int(2) NOT NULL,
  `AccessTime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyhistory`
--

INSERT INTO `keyhistory` (`SerialNo`, `KeyId`, `UserId`, `Room No`, `AccessTime`) VALUES
(1, 3, 101, 4, '2015-09-14 16:12:03.735674');

-- --------------------------------------------------------

--
-- Table structure for table `keystatus`
--

CREATE TABLE IF NOT EXISTS `keystatus` (
`SerialNo` int(11) NOT NULL,
  `KeyId` int(4) NOT NULL,
  `Availability` tinyint(1) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keyx`
--

CREATE TABLE IF NOT EXISTS `keyx` (
  `KeyId` int(11) NOT NULL,
  `RoomNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keyx`
--

INSERT INTO `keyx` (`KeyId`, `RoomNo`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(4) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Pin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `Pin`) VALUES
(101, 'Dineth', 1352),
(102, 'Nimash', 2141),
(103, 'Darshana', 1321),
(104, 'Amutheezan', 1234),
(105, 'VarunPirabhu', 1434),
(106, 'Pirashath', 1342);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
 ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `error`
--
ALTER TABLE `error`
 ADD PRIMARY KEY (`ErrorId`);

--
-- Indexes for table `errorhistory`
--
ALTER TABLE `errorhistory`
 ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `keyhistory`
--
ALTER TABLE `keyhistory`
 ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `keystatus`
--
ALTER TABLE `keystatus`
 ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `keyx`
--
ALTER TABLE `keyx`
 ADD PRIMARY KEY (`KeyId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`UserId`), ADD UNIQUE KEY `Pin` (`Pin`), ADD UNIQUE KEY `UserId` (`UserId`), ADD UNIQUE KEY `UserId_2` (`UserId`), ADD UNIQUE KEY `Pin_2` (`Pin`), ADD UNIQUE KEY `UserId_3` (`UserId`,`Pin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `error`
--
ALTER TABLE `error`
MODIFY `ErrorId` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `errorhistory`
--
ALTER TABLE `errorhistory`
MODIFY `SerialNo` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keyhistory`
--
ALTER TABLE `keyhistory`
MODIFY `SerialNo` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `keystatus`
--
ALTER TABLE `keystatus`
MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
