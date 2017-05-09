-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 11:17 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--
CREATE DATABASE IF NOT EXISTS `voting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voting`;

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE IF NOT EXISTS `aadhar` (
  `aadhar_no` varchar(200) NOT NULL,
  `voter_id` varchar(200) NOT NULL,
  `aadhar_name` varchar(200) NOT NULL,
  `aadhar_father` varchar(200) NOT NULL,
  `aadhar_dob` varchar(200) NOT NULL,
  `aadhar_sex` varchar(200) NOT NULL,
  `cons_no` varchar(200) NOT NULL,
  `aadhar_mob` varchar(200) NOT NULL,
  `aadhar_email` varchar(200) NOT NULL,
  PRIMARY KEY (`aadhar_no`),
  KEY `cons_no` (`cons_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`aadhar_no`, `voter_id`, `aadhar_name`, `aadhar_father`, `aadhar_dob`, `aadhar_sex`, `cons_no`, `aadhar_mob`, `aadhar_email`) VALUES
('724101436802', '1111', 'Tarun Bathwal', 'Mahesh Bathwal', '03/06/1997', 'M', '302018', '9589266058', 'adityasos123@gmail.com'),
('724101436803', '2222', 'Aditya Gupta', 'Sanjay Gupta', '03/07/1997', 'M', '302019', '9589266023', 'adi123@gmail.com'),
('724101436804', '3333', 'Rishabh Jain', 'Vikas Jain', '05/01/1997', 'M', '244001', '7599291464', 'rr1997@gmail.com'),
('724101436816', '5555', 'Shashank Bothra', 'Sandeep Bothra', '03/06/1996', 'M', '302018', '9589266046', 'aditya89@gmail.com'),
('724101436892', '6666', 'Aditi Goyal', 'Sandeep Goyal', '03/06/1996', 'F', '302018', '9589266047', 'aditi897@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `cons_no` varchar(200) NOT NULL,
  `nota` int(20) NOT NULL,
  `bjp` varchar(200) DEFAULT NULL,
  `bjp_vote` int(11) NOT NULL,
  `congress` varchar(200) DEFAULT NULL,
  `congress_vote` int(11) NOT NULL,
  `aap` varchar(200) DEFAULT NULL,
  `aap_vote` int(11) NOT NULL,
  `sp` varchar(200) DEFAULT NULL,
  `sp_vote` int(11) NOT NULL,
  `indep_1` varchar(200) DEFAULT NULL,
  `indep_1_vote` int(11) NOT NULL,
  `indep_2` varchar(200) DEFAULT NULL,
  `indep_2_vote` int(11) NOT NULL,
  PRIMARY KEY (`cons_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`cons_no`, `nota`, `bjp`, `bjp_vote`, `congress`, `congress_vote`, `aap`, `aap_vote`, `sp`, `sp_vote`, `indep_1`, `indep_1_vote`, `indep_2`, `indep_2_vote`) VALUES
('244001', 0, 'L. K. Advani', 0, 'sonia gandhi', 0, 'mayawati singh', 0, NULL, 0, NULL, 0, NULL, 0),
('302018', 0, 'Vasundhara Raje', 0, 'Ashok Gehlot', 0, 'Arvind Kejrivaal', 1, NULL, 0, 'Ayushi Jain', 0, NULL, 0),
('302019', 0, 'Rajyavardhan Singh', 0, 'Navjot Sidhu', 0, 'Anna Hazare', 0, 'Mayawati', 1, NULL, 0, 'Anupam Kher', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_username` varchar(200) NOT NULL,
  `aadhar_no` varchar(200) NOT NULL,
  `login_password` varchar(200) NOT NULL,
  `cons_no` varchar(200) NOT NULL,
  `party_voted` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`login_username`),
  KEY `aadhar_no` (`aadhar_no`,`cons_no`),
  KEY `cons_no` (`cons_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_username`, `aadhar_no`, `login_password`, `cons_no`, `party_voted`) VALUES
('user1', '724101436802', 'pwd1', '302018', 'aap'),
('user2', '724101436803', 'pwd2', '302019', 'sp'),
('user3', '724101436804', 'pwd3', '244001', NULL),
('user4', '724101436816', 'pwd4', '302018', NULL),
('user5', '724101436892', 'pwd5', '302018', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE IF NOT EXISTS `registered` (
  `aadhar_no` varchar(200) NOT NULL,
  `voted` int(11) NOT NULL,
  PRIMARY KEY (`aadhar_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`aadhar_no`, `voted`) VALUES
('724101436802', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
