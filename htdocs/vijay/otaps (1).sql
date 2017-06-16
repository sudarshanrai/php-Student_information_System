-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2014 at 03:39 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `otaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `Username` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'not null',
  `Password` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'not null',
  PRIMARY KEY (`Username`,`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) COLLATE utf8_bin NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL,
  `branch` varchar(20) COLLATE utf8_bin NOT NULL,
  `min_qualification` varchar(20) COLLATE utf8_bin NOT NULL,
  `cgpa` float NOT NULL,
  `dop` date NOT NULL,
  `package` float NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `type`, `branch`, `min_qualification`, `cgpa`, `dop`, `package`) VALUES
(1, 'rfr', 'ff', 'CSE', 'd', 0, '2014-02-20', 5),
(2, '', '', '', '', 0, '0000-00-00', 0),
(3, 'tcs', 'natoinal', 'CSE', 'Btech', 6, '2014-12-31', 6);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int(9) NOT NULL AUTO_INCREMENT,
  `contactName` varchar(40) COLLATE utf8_bin NOT NULL,
  `contactEmail` varchar(40) COLLATE utf8_bin NOT NULL,
  `message` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`contactID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `contactName`, `contactEmail`, `message`) VALUES
(1, '', '', ''),
(2, 'kk', 'kk', 'mmm'),
(3, 'kkcccdc', 'kkc', 'sxxsxsxsxsx'),
(4, 'kkccrggrgr', 'kkceeee', 'hgjhgfsx'),
(5, 'vijay', 'vijay@gmail.com', 'hi hollo'),
(6, 'vijau', '', 'huhiuhiuhi'),
(7, 'dd', '', 'dd'),
(8, 'c', '', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `fname` varchar(30) COLLATE utf8_bin NOT NULL,
  `lname` varchar(30) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `sex` char(3) COLLATE utf8_bin NOT NULL,
  `fathername` varchar(30) COLLATE utf8_bin NOT NULL,
  `foccu` varchar(30) COLLATE utf8_bin NOT NULL,
  `faddr` text COLLATE utf8_bin NOT NULL,
  `mothername` varchar(30) COLLATE utf8_bin NOT NULL,
  `moccu` varchar(30) COLLATE utf8_bin NOT NULL,
  `maddr` text COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `usn` varchar(10) COLLATE utf8_bin NOT NULL,
  `sem` char(3) COLLATE utf8_bin NOT NULL,
  `branch` char(5) COLLATE utf8_bin NOT NULL,
  `yearofpassing` varchar(10) COLLATE utf8_bin NOT NULL,
  `teboard` varchar(20) COLLATE utf8_bin NOT NULL,
  `teinst` varchar(50) COLLATE utf8_bin NOT NULL,
  `teperc` float NOT NULL,
  `teyop` char(10) COLLATE utf8_bin NOT NULL,
  `tenoa` int(11) NOT NULL,
  `twboard` varchar(10) COLLATE utf8_bin NOT NULL,
  `twinst` varchar(50) COLLATE utf8_bin NOT NULL,
  `twperc` float NOT NULL,
  `twyop` char(10) COLLATE utf8_bin NOT NULL,
  `twnoa` int(11) NOT NULL,
  `dboard` varchar(10) COLLATE utf8_bin NOT NULL,
  `dinst` varchar(50) COLLATE utf8_bin NOT NULL,
  `dperc` float NOT NULL,
  `dyop` char(10) COLLATE utf8_bin NOT NULL,
  `dnoa` int(11) NOT NULL,
  `sem1` float NOT NULL,
  `yr1` char(10) COLLATE utf8_bin NOT NULL,
  `sem2` float NOT NULL,
  `yr2` char(10) COLLATE utf8_bin NOT NULL,
  `sem3` float NOT NULL,
  `yr3` char(10) COLLATE utf8_bin NOT NULL,
  `sem4` float NOT NULL,
  `yr4` char(10) COLLATE utf8_bin NOT NULL,
  `sem5` float NOT NULL,
  `yr5` char(10) COLLATE utf8_bin NOT NULL,
  `sem6` float NOT NULL,
  `yr6` char(10) COLLATE utf8_bin NOT NULL,
  `sem7` float NOT NULL,
  `yr7` char(10) COLLATE utf8_bin NOT NULL,
  `sem8` float NOT NULL,
  `yr8` char(10) COLLATE utf8_bin NOT NULL,
  `semno` char(3) COLLATE utf8_bin NOT NULL,
  `cgpa` float NOT NULL,
  `yeargap` char(3) COLLATE utf8_bin NOT NULL,
  `reason` varchar(80) COLLATE utf8_bin NOT NULL,
  `highedu` char(3) COLLATE utf8_bin NOT NULL,
  `highreas` varchar(80) COLLATE utf8_bin NOT NULL,
  `jobpref` char(3) COLLATE utf8_bin NOT NULL,
  `prefreas` varchar(80) COLLATE utf8_bin NOT NULL,
  `extrainfo` text COLLATE utf8_bin NOT NULL,
  `category` char(3) COLLATE utf8_bin NOT NULL,
  `handicapped` char(3) COLLATE utf8_bin NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `lefteye` float NOT NULL,
  `righteye` float NOT NULL,
  `blood_group` char(3) COLLATE utf8_bin NOT NULL,
  `commuaddr` text COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `lname`, `dob`, `sex`, `fathername`, `foccu`, `faddr`, `mothername`, `moccu`, `maddr`, `email`, `usn`, `sem`, `branch`, `yearofpassing`, `teboard`, `teinst`, `teperc`, `teyop`, `tenoa`, `twboard`, `twinst`, `twperc`, `twyop`, `twnoa`, `dboard`, `dinst`, `dperc`, `dyop`, `dnoa`, `sem1`, `yr1`, `sem2`, `yr2`, `sem3`, `yr3`, `sem4`, `yr4`, `sem5`, `yr5`, `sem6`, `yr6`, `sem7`, `yr7`, `sem8`, `yr8`, `semno`, `cgpa`, `yeargap`, `reason`, `highedu`, `highreas`, `jobpref`, `prefreas`, `extrainfo`, `category`, `handicapped`, `height`, `weight`, `lefteye`, `righteye`, `blood_group`, `commuaddr`, `tel`) VALUES
('vijay', 'tangadagi', '1993-03-28', 'Mal', 'mahadevappa', '', '', 'basamma', '', '', 'vijaytangadagi.msrit@gmail.com', '1ms11cs128', '5th', 'CSE', '', '', '', 0, '', 0, '', '', 0, '', 0, '', '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', '', 8.93, 'yes', 'family reason', 'yes', '', 'no', '', 'doing proj', 'GM', 'yes', 179, 80, 0, 0, 'A+', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
