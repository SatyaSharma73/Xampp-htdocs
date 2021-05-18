-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 09:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampleform`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `SlNo` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `columns` varchar(255) NOT NULL,
  `rows` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`SlNo`, `name`, `age`, `phone`, `date`, `time`, `columns`, `rows`) VALUES
(1, 'Akash Mondal', '23', '324455', '2021-04-19', '9to12', 'A', '1'),
(2, 'akash', '21', '4343', '2021-04-01', '9to12', 'A', '1'),
(3, 'pig', '2', '123456', '2021-04-13', '1to4', 'D', '12'),
(4, 'akash', '21', '54321', '2021-04-07', '9to12', 'A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `sino` int(3) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`sino`, `Name`, `Email`, `Phone`, `msg`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, 'AKASH', 'akashmondal142000@gmail.com', '07908046760', 'hi guys i have no issue'),
(7, 'asd', 'abc@gmail.com', '07908046760', 'hi'),
(8, '', '', '', ''),
(9, 'akash', '', '', ''),
(10, 'akash', '', '', ''),
(11, 'akash', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, 'akashas', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, 'aka', 'aka@a.com', '2249', 'hi'),
(19, 'assd', 'a@g.m', '3232', 'bye'),
(20, 'State bank of India', 'akashmondal142000@gmail.com', '07908046760', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signin`
--

CREATE TABLE `tbl_signin` (
  `sno` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_signin`
--

INSERT INTO `tbl_signin` (`sno`, `name`, `email`, `password`) VALUES
(9, 'akash', '', ''),
(10, '', '', ''),
(11, 'AKASH', '', ''),
(12, 'akash', 'akashmondal142000@gmail.com', 'asd'),
(13, 'State bank of India', 'abc@gmail.com', 'asdf'),
(14, 'State bank of India', 'abc@gmail.com', 'vcgf'),
(15, 'hhh', 'akashmondal142000@gmail.com', 'hhh'),
(16, 'State bank of India', '', ''),
(17, 'akash kejriwal', 'shivamumar.44808@gmail.com', 'adhd'),
(18, 'aaaaa', 'aaaa@a.com', 'aaaa'),
(19, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `serial` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`serial`, `name`, `email`, `password`) VALUES
(1, 'akash', 'abc@gmail.com', 'aba'),
(2, 'aaaaa', 'aaaa@a.com', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`sino`);

--
-- Indexes for table `tbl_signin`
--
ALTER TABLE `tbl_signin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `SlNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `sino` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_signin`
--
ALTER TABLE `tbl_signin`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  MODIFY `serial` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
