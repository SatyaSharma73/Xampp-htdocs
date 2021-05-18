-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 08:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `status`) VALUES
(1, 'Ayurveda', 'active'),
(2, 'Women Care', 'active'),
(3, 'Health Devices', 'active'),
(4, 'Baby Care', 'active'),
(5, 'Home Essentials', 'active'),
(6, 'Personal Care', 'active'),
(7, 'Health & Nutrition', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `M_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `c_id` int(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `m_image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`M_ID`, `Name`, `c_id`, `Description`, `Price`, `m_image`) VALUES
(1, 'Chyawanprasha', 1, 'Jiva Sugar Free Chyawanprasha 500Gm', '200', '9edb1d093dd23a23508240dfdb35d470.jpg'),
(2, 'Revital H Capsule 10', 7, 'Help in the development of bones, teeth.', '303', '12c47ecf86abf3c24be7f227d2d3dc8a.jpg'),
(3, 'Face Mask', 3, 'Wildcraft Outdoor N95 Black Large', '200', '6a2d945b3dd489c4170786907de70928.jpg'),
(4, 'Dettol Handwash', 5, 'Natural Germ Protection Handwash 750 ml ', '189', '94f0e113530604a6227e8423ddffbddf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_final`
--

CREATE TABLE `order_final` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `session` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_invoice`
--

CREATE TABLE `order_invoice` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `transaction_id` varchar(222) NOT NULL,
  `session` varchar(232) NOT NULL,
  `status` varchar(435) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_invoice`
--

INSERT INTO `order_invoice` (`id`, `name`, `address`, `email`, `phone`, `amount`, `transaction_id`, `session`, `status`) VALUES
(1, '', '', '', '', '0', '', 'm8gmu89hqr3c4p1afqnupdm1pc', 'unpaid'),
(2, 'Samir', 'Kolkata', 'smriti123@gmail.com', '9876543210', '0', '', 'm8gmu89hqr3c4p1afqnupdm1pc', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `order_session`
--

CREATE TABLE `order_session` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `session` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_session`
--

INSERT INTO `order_session` (`id`, `m_id`, `qty`, `session`) VALUES
(1, 1, 1, 'm8gmu89hqr3c4p1afqnupdm1pc'),
(2, 4, 1, 'm8gmu89hqr3c4p1afqnupdm1pc'),
(3, 4, 1, 'm8gmu89hqr3c4p1afqnupdm1pc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `order_final`
--
ALTER TABLE `order_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_invoice`
--
ALTER TABLE `order_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_session`
--
ALTER TABLE `order_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_final`
--
ALTER TABLE `order_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_invoice`
--
ALTER TABLE `order_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_session`
--
ALTER TABLE `order_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
