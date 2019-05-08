-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 02:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Sec_Q` text NOT NULL,
  `Answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Username`, `Name`, `Password`, `Sec_Q`, `Answer`) VALUES
('Falcha', 'nitesh', '123', 'What is your mother tongue?', 'newari'),
('rabindra', 'rabindra', 'rabindra', 'What is your nickname?', 'jhole'),
('suzan123', 'suzan', '123', 'What is your mother tongue?', 'khatri');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_ID` int(11) NOT NULL,
  `Book_Name` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_ID`, `Book_Name`, `Publisher`, `Quantity`) VALUES
(53, 'Biology', 'Nitesh', 9);

-- --------------------------------------------------------

--
-- Table structure for table `breturn`
--

CREATE TABLE `breturn` (
  `Issue_ID` int(11) NOT NULL,
  `Book_ID` int(11) NOT NULL,
  `Book_Name` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Phone_No` bigint(20) NOT NULL,
  `DateOfIssue` varchar(255) NOT NULL,
  `DateOfReturn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `File_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`File_Name`) VALUES
('HRM- Unit 3.pdf'),
('HaHaHaaayenaYaar.pptx'),
('hawa.txt'),
('comdey.txt'),
('CHAP5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `Issue_ID` text NOT NULL,
  `Book_ID` text NOT NULL,
  `Book_Name` text NOT NULL,
  `P_ID` text NOT NULL,
  `First_Name` text NOT NULL,
  `Phone_No` text NOT NULL,
  `DateOfIssue` text NOT NULL,
  `LimitDate` text NOT NULL,
  `FineAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`Issue_ID`, `Book_ID`, `Book_Name`, `P_ID`, `First_Name`, `Phone_No`, `DateOfIssue`, `LimitDate`, `FineAmount`) VALUES
('44', '53', 'Biology', '748', 'Fawa', '9843713662', 'May 1, 2018', 'May 6, 2018', 9175),
('88', '53', 'Biology', '857', 'hawa', '1234567890', 'May 1, 2018', 'May 6, 2018', 9175),
('881', '53', 'Biology', '918', 'Babu', '1111111111', 'Feb 7, 2019', 'Feb 12, 2019', 2125);

-- --------------------------------------------------------

--
-- Table structure for table `fineamnt`
--

CREATE TABLE `fineamnt` (
  `SN` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fineamnt`
--

INSERT INTO `fineamnt` (`SN`, `Amount`) VALUES
(1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `Issue_ID` int(11) NOT NULL,
  `Book_ID` int(11) NOT NULL,
  `Book_Name` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `P_ID` bigint(20) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Phone_No` bigint(20) NOT NULL,
  `DateOfIssue` text NOT NULL,
  `LimitDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`Issue_ID`, `Book_ID`, `Book_Name`, `Publisher`, `P_ID`, `First_Name`, `Last_Name`, `Address`, `Phone_No`, `DateOfIssue`, `LimitDate`) VALUES
(44, 53, 'Biology', 'Nitesh', 748, 'Fawa', 'Chalyo', 'sorakhutte', 9843713662, 'May 1, 2018', 'May 6, 2018'),
(88, 53, 'Biology', 'Nitesh', 857, 'hawa', 'manche', 'blabla', 1234567890, 'May 1, 2018', 'May 6, 2018'),
(881, 53, 'Biology', 'Nitesh', 918, 'Babu', 'Ram', 'dhasjhdj', 1111111111, 'Feb 7, 2019', 'Feb 12, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `limited`
--

CREATE TABLE `limited` (
  `lid` bigint(20) NOT NULL,
  `time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `P_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Phone_No` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`P_ID`, `First_Name`, `Last_Name`, `Address`, `Phone_No`) VALUES
(748, 'Fawa', 'Chalyo', 'sorakhutte', 9843713662),
(857, 'hawa', 'manche', 'blabla', 1234567890),
(918, 'Babu', 'Ram', 'dhasjhdj', 1111111111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `fineamnt`
--
ALTER TABLE `fineamnt`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`Issue_ID`);

--
-- Indexes for table `limited`
--
ALTER TABLE `limited`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fineamnt`
--
ALTER TABLE `fineamnt`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
