-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 02:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `cloud`
--

CREATE TABLE `cloud` (
  `ID` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` text NOT NULL,
  `Email` text NOT NULL,
  `Phone_Number` text NOT NULL,
  `Photo` text NOT NULL,
  `Category` text NOT NULL,
  `Education` text NOT NULL,
  `Skills` text NOT NULL,
  `Hobbies` text NOT NULL,
  `Why` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cloud`
--

INSERT INTO `cloud` (`ID`, `First_Name`, `Last_Name`, `Gender`, `DOB`, `Email`, `Phone_Number`, `Photo`, `Category`, `Education`, `Skills`, `Hobbies`, `Why`) VALUES
(1, 'Nitesh', 'Manandhar', 'Male', '08/10/1996', 'manandharnitesh84@gmail.com', '9843713662', '77.jpg', 'Home based', 'sjfbwdkjfhigeifgbeifgfpeihfeh', 'bweljfnweljhnjhweiufhweoigweioogfowei~', 'llnfqeljhfnilewjfhweiufheoighoweibdweih', 'jbfkewjbfewkjbgwlhdnwqkhdvbsdlkfnwdkjfbwdkjdbwdkjnsdkvlbksdjg'),
(2, 'Rolisha', 'Sthapit', 'Female', '04/21/2001', 'rolishaSthapit@gmail.com', '9949123456', 'graduated.png', 'Office Based', 'Master', 'Teaching', 'sketching', 'Becasue I am Smart');

-- --------------------------------------------------------

--
-- Table structure for table `hawan`
--

CREATE TABLE `hawan` (
  `ID` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` text NOT NULL,
  `Email` text NOT NULL,
  `Phone_Number` text NOT NULL,
  `Photo` text NOT NULL,
  `Category` text NOT NULL,
  `Education` text NOT NULL,
  `Skills` text NOT NULL,
  `Hobbies` text NOT NULL,
  `Why` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `ID` int(11) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` text NOT NULL,
  `Email` text NOT NULL,
  `Phone_Number` text NOT NULL,
  `Photo` text NOT NULL,
  `Category` text NOT NULL,
  `Education` text NOT NULL,
  `Skills` text NOT NULL,
  `Hobbies` text NOT NULL,
  `Why` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`ID`, `First_Name`, `Last_Name`, `Gender`, `DOB`, `Email`, `Phone_Number`, `Photo`, `Category`, `Education`, `Skills`, `Hobbies`, `Why`) VALUES
(1, 'Sumanta', 'Gurung', 'Male', '01/12/2001', 'sumanta@gmailc,com', '9845123677', 'graduated.png', 'Programmer', 'khsdbsdihgfbeoug', 'bsdjhbsdjfevb', 'bfhebfwebdhjb', 'yditfcljfvljfvigfxd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloud`
--
ALTER TABLE `cloud`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hawan`
--
ALTER TABLE `hawan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloud`
--
ALTER TABLE `cloud`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hawan`
--
ALTER TABLE `hawan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `it`
--
ALTER TABLE `it`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
