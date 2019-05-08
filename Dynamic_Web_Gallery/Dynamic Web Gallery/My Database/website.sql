-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 02:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `naruto`
--

CREATE TABLE `naruto` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `naruto`
--

INSERT INTO `naruto` (`id`, `image`, `text`) VALUES
(1, '385172.jpg', ''),
(2, 'Ino-naruto-shippuuden-34353186-500-313.jpg', ''),
(3, 'e82ce24e5f4b36cec2dfb7155c6b3ae8.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `onepiece`
--

CREATE TABLE `onepiece` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onepiece`
--

INSERT INTO `onepiece` (`id`, `image`, `text`) VALUES
(1, 'Bao-Hancock-one-piece-34263424-428-500.png', ''),
(2, '3d548ad37c12092c38edb51c1c604710.jpg', ''),
(3, 'maxresdefault.jpg', ''),
(4, 'boa_hancock_wallpaper_604__3d2y_version__by_cam6-d8mgbk3.jpg', ''),
(5, 'thumb-1920-606667.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pokemon`
--

INSERT INTO `pokemon` (`id`, `image`, `text`) VALUES
(1, 'download.jpg', ''),
(2, 'download (1).jpg', ''),
(3, 'QCH2kkw.jpg', ''),
(4, '9ecf42107e3df23005bea5b9ca2d8929.jpg', ''),
(5, 'VHH1EMf.jpg', ''),
(6, '636058.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `first` varchar(255) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `naruto`
--
ALTER TABLE `naruto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onepiece`
--
ALTER TABLE `onepiece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `naruto`
--
ALTER TABLE `naruto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `onepiece`
--
ALTER TABLE `onepiece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
