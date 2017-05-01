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

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`idappoint`, `doctor`, `date1`, `time1`, `patient_login`, `patname`, `patphone`, `pataddress`, `pat_pic`) VALUES
(1, 'Apoorv garg', '05/04/2017', '1:00 pm to 3:00 pm', 'Yash9585', 'Yash', '958547850', 'Ganganagar,Bhopal', '1493217785-dev.jpg'),
(2, 'Apoorv garg', '29/04/2017', '1:00 pm to 3:00 pm', 'Vaib9003', 'Vaibhav', '9003718437', 'VIT', '');

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

INSERT INTO `doctor` (`id`, `name`, `department`, `qualification`, `age`, `experience`, `profile_pic`) VALUES
('Rake3215', 'Rakesh', 'Dermatology', 'M.B.B.S,M.S', 47, 15, ''),
('Apoorv9997', 'Apoorv garg', 'Orpadecian', 'M.B.B.S,M.S', 47, 15, '1493383019-WIN_20151129_16_03_52_Pro.jpg'),
('Vaibhav6523', 'Vaibhav Bhatt', 'Audiologist', 'MBBCh', 47, 5, ''),
('Naman1001', 'Naman Tejwani', 'Anesthesiologist', 'MBChirB', 26, 3, ''),
('Nishant2001', 'Nishant Mehta', 'Epidemiologist', 'MD and PhD', 66, 30, ''),
('Sunny5006', 'Sunny Arora', 'Psychiatrist', 'MD and PhD', 99, 0, '');

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

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin1478'),
('apoorv', '12345'),
('Apoorv9997', 'Apoorv garg'),
('Vaibhav6523', 'Vaibhav Bhatt'),
('Vaibhav6523', 'Vaibhav Bhatt'),
('Naman1001', 'Naman Tejwani'),
('Nishant2001', 'Nishant Mehta'),
('Sunny5006', 'Sunny Arora'),
('Vaib9003', '123456'),
('MOHI9790', '123456');

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

INSERT INTO `nurse` (`id`, `name`, `department`, `age`) VALUES
('Id', 'Shreya', 'Urology', 25),
('Id', 'Katrina', 'Urology', 26),
('Id', 'Swarnim', 'Orpadecian', 56),
('Id', 'Kareena', 'Dermatology', 30);

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

INSERT INTO `patient` (`fname`, `lname`, `phone`, `address`, `email`, `password`, `patient_pic`, `patient_login`) VALUES
('Vaibhav', 'Bhatt', '9003718437', 'VIT', 'vaibhav.bhatt2015@vit.ac.in', '123456', '1493379884-IMG_20161215_224354.jpg', 'Vaib9003'),
('MOHIT', 'SHARMA', '9790058741', 'VIT UNIVERSITY', 'msharma1188@gmail.com', '123456', NULL, 'MOHI9790');

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

INSERT INTO `prescription` (`doctor`, `patient`, `prescription`) VALUES
('Apoorv garg', 'Yash9585', 'Betadine'),
('Apoorv garg', 'Vaib9003', 'You need medicines');

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

INSERT INTO `room` (`id`, `patient_login`, `room_type`, `check_in`, `days`, `compan`) VALUES
(3, 'Vaib9003', 'Four Beded Non-AC Room', '29/04/2017', '1', '1');

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

INSERT INTO `warden` (`password`, `name`, `phone`, `address`, `email`, `warden_login`) VALUES
('123456', 'Vaibhav Bhatt', '9856321470', 'GV road,New Delhi', 'vaibhav.bhatt2015@vit.ac.in', 'Vaibhav6523');

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
