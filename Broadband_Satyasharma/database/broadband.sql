-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 02:48 PM
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
-- Database: `broadband`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '123456'),
(2, 'Satya Sharma', 'satya@sharma.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `email`, `password`) VALUES
(1, 'Satya Sharma', 'satya@sharma.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `speed` varchar(100) NOT NULL,
  `monthly_rentals` int(100) NOT NULL,
  `ott_vas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `package_name`, `speed`, `monthly_rentals`, `ott_vas`) VALUES
(1, 'ENTRY', '100 Mbps', 700, 'Hungama Play, Hungama Music, Addatimes'),
(2, 'SMART', '125 Mbps', 850, 'Hungama Play, Hungama Music, Addatimes, ZEE5'),
(3, 'CRUISE', '150 Mbps', 1000, 'Hungama Play, Hungama Music, SonyLIV, Addatimes, Hoichoi, HS, ZEE5'),
(4, 'PREMIUM+', '175 Mbps', 1150, 'Hungama Play, Hungama Music, SonyLIV, Addatimes, Hoichoi, HS, ZEE5'),
(5, 'SPEED+', '250 Mbps', 1500, 'Hungama Play, Hungama Music, SonyLIV, Addatimes, Hoichoi, HS, ZEE5'),
(6, 'FLASH+', '400 Mbps', 2600, 'Hungama Play, Hungama Music, SonyLIV, Addatimes, Hoichoi, HS, ZEE5'),
(7, 'INNOVATOR', '510 Mbps', 3500, 'Hungama Play, Hungama Music, Addatimes, ZEE5'),
(8, 'GIGABLAST', '1Gbps', 7000, 'Hungama Play, Hungama Music, Addatimes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
