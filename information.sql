-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2014 at 05:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `information`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `Licence_for` text NOT NULL,
  `FName` text NOT NULL,
  `Mname` text NOT NULL,
  `LName` text NOT NULL,
  `Father_Name` text NOT NULL,
  `Mother_Name` text NOT NULL,
  `Age` int(4) NOT NULL,
  `BG` varchar(3) NOT NULL,
  `Gender` text NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `DOB` date NOT NULL,
  `BirthPlace` text NOT NULL,
  `House_No.` varchar(5) NOT NULL,
  `Building_Name` varchar(20) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Pincode` mediumint(6) unsigned NOT NULL,
  `City` text NOT NULL,
  `Temp_State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`Licence_for`, `FName`, `Mname`, `LName`, `Father_Name`, `Mother_Name`, `Age`, `BG`, `Gender`, `Phone`, `DOB`, `BirthPlace`, `House_No.`, `Building_Name`, `Street`, `Pincode`, `City`, `Temp_State`) VALUES
('Transport vehicle', 'fwe', 'efwf', 'fqaf', 'fq', 'eff', 54, 'A+', 'Male', 48948, '2014-10-29', 'mjfhqw', '656', 'wdwv', 'eefiuewf', 6595, 'kfiuhqaf', 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `perma`
--

CREATE TABLE IF NOT EXISTS `perma` (
  `Licence_For` text NOT NULL,
  `Learner_No` int(6) NOT NULL,
  `Learner_Issue_Date` date NOT NULL,
  `FName` text NOT NULL,
  `MName` text NOT NULL,
  `LName` text NOT NULL,
  `Father_Name` text NOT NULL,
  `Mother_NAme` text NOT NULL,
  `Age` int(2) NOT NULL,
  `BG` varchar(3) NOT NULL,
  `Gender` text NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `DOB` date NOT NULL,
  `BirthPlace` varchar(30) NOT NULL,
  `House_No` varchar(6) NOT NULL,
  `Building_Name` varchar(10) NOT NULL,
  `Street` varchar(10) NOT NULL,
  `City` text NOT NULL,
  `Pincode` int(6) NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renew`
--

CREATE TABLE IF NOT EXISTS `renew` (
  `Licence_For` text NOT NULL,
  `Permanent_No` bigint(11) NOT NULL,
  `Permanent_issue_date` date NOT NULL,
  `PrevRenewal` date NOT NULL,
  `FName` text NOT NULL,
  `MName` text NOT NULL,
  `LName` text NOT NULL,
  `Father_Name` text NOT NULL,
  `Mother_Name` text NOT NULL,
  `Age` int(3) NOT NULL,
  `BG` varchar(3) NOT NULL,
  `Gender` text NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `DOB` date NOT NULL,
  `BirthPlace` varchar(40) NOT NULL,
  `House_No` varchar(5) NOT NULL,
  `Building_Name` varchar(10) NOT NULL,
  `Street` varchar(10) NOT NULL,
  `City` text NOT NULL,
  `Pincode` int(6) NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE IF NOT EXISTS `userid` (
  `Username` varchar(10) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`Username`, `pwd`) VALUES
('admin', 'ola007');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
