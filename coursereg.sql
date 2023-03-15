-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 12:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursereg`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accID`, `name`, `email`, `pass`) VALUES
(1, 'testaccuser01', 'accdeptuser@uni.com', 'accdept');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminEmail`, `adminPass`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `advID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`advID`, `name`, `email`, `pass`) VALUES
(1, 'testadvuser01', 'advdeptuser@uni.com', 'advdept');

-- --------------------------------------------------------

--
-- Table structure for table `confirmcourses`
--

CREATE TABLE `confirmcourses` (
  `id` int(11) NOT NULL,
  `stuID` int(11) NOT NULL,
  `courID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courID` int(11) NOT NULL,
  `courName` varchar(255) NOT NULL,
  `courDetails` varchar(255) NOT NULL,
  `courPic` varchar(255) NOT NULL,
  `courTeacher` varchar(255) NOT NULL,
  `courStarts` date NOT NULL,
  `courEnds` date NOT NULL,
  `courSchedule` varchar(255) NOT NULL,
  `courseFees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courID`, `courName`, `courDetails`, `courPic`, `courTeacher`, `courStarts`, `courEnds`, `courSchedule`, `courseFees`) VALUES
(1, 'Hacking', '', '', 'Hacker', '2023-02-28', '2023-03-31', '', 12000),
(2, 'Finance', '', '', 'teacher', '2023-02-22', '2023-04-07', '', 5000),
(3, 'IELTS', '', '', 'boss', '2023-02-21', '2023-06-16', '', 5000),
(4, 'Test', '', '', 'Tester', '2023-03-15', '2023-03-24', '', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `pendingreq`
--

CREATE TABLE `pendingreq` (
  `id` int(11) NOT NULL,
  `stuID` int(11) NOT NULL,
  `courID` int(11) NOT NULL,
  `stuPayments` varchar(255) NOT NULL,
  `regConfirm` varchar(255) NOT NULL,
  `advConfirm` varchar(255) NOT NULL,
  `accConfirm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingreq`
--

INSERT INTO `pendingreq` (`id`, `stuID`, `courID`, `stuPayments`, `regConfirm`, `advConfirm`, `accConfirm`) VALUES
(2, 0, 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `regID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regID`, `name`, `email`, `pass`) VALUES
(1, 'testregistrar01', 'regdeptuser@uni.com', 'regdept');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stuID` int(11) NOT NULL,
  `stuEmail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `stuPass` varchar(255) NOT NULL,
  `universityID` int(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stuID`, `stuEmail`, `username`, `stuPass`, `universityID`, `batch`, `payment`) VALUES
(1, 'demostu01@uni.com', 'demostudent01', 'demostu01', 191120067, '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`advID`);

--
-- Indexes for table `confirmcourses`
--
ALTER TABLE `confirmcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courID`);

--
-- Indexes for table `pendingreq`
--
ALTER TABLE `pendingreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stuID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `advID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `confirmcourses`
--
ALTER TABLE `confirmcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendingreq`
--
ALTER TABLE `pendingreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `regID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
