-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 06:50 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `idappoint` int(11) NOT NULL,
  `doctor` varchar(20) DEFAULT NULL,
  `date1` varchar(15) DEFAULT NULL,
  `time1` varchar(30) DEFAULT NULL,
  `patient_login` varchar(10) DEFAULT NULL,
  `patname` varchar(20) DEFAULT NULL,
  `patphone` varchar(15) DEFAULT NULL,
  `pataddress` varchar(50) DEFAULT NULL,
  `pat_pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(15) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `profile_pic` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--



--
-- Triggers `doctor`
--
DELIMITER $$
CREATE TRIGGER `add` BEFORE INSERT ON `doctor` FOR EACH ROW INSERT INTO login 
      (username, password) 
  VALUES
      (new.id,new.name)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--



-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `id` varchar(10) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--



-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `patient_pic` varchar(100) DEFAULT NULL,
  `patient_login` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--



--
-- Triggers `patient`
--
DELIMITER $$
CREATE TRIGGER `addpatient` BEFORE INSERT ON `patient` FOR EACH ROW INSERT INTO login 
      (username, password) 
  VALUES
      (new.patient_login,new.password)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `doctor` varchar(200) NOT NULL,
  `patient` varchar(200) NOT NULL,
  `prescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--



-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `patient_login` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `check_in` varchar(50) NOT NULL,
  `days` varchar(3) NOT NULL,
  `compan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--



-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `warden_login` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`idappoint`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `idappoint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
