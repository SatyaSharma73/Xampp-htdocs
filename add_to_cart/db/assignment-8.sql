-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 04:15 PM
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
-- Database: `assignment-8`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `model`, `p_image`) VALUES
(1, 'MOTO', 10150, 'G5 Plus', 'af9507d43e2cf40be187fad6fbc50a97.png'),
(3, 'Samsung', 21000, 'F62', '563e3a1a5a6f830fac6f6f9fb5e86653.png'),
(4, 'Iphone', 38000, 'SE', 'bee6bc38b02ee45fe7fb62bac5b9071c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_session`
--

CREATE TABLE `order_session` (
  `id` int(100) NOT NULL,
  `p_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `session` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_session`
--

INSERT INTO `order_session` (`id`, `p_id`, `qty`, `session`) VALUES
(9, 4, 1, 'n1q1rq1pj033tb0sdcr5pmcrqo'),
(10, 4, 1, 'n1q1rq1pj033tb0sdcr5pmcrqo'),
(11, 4, 1, 'n1q1rq1pj033tb0sdcr5pmcrqo'),
(12, 3, 1, 'n1q1rq1pj033tb0sdcr5pmcrqo'),
(13, 1, 1, 'g2rkqbb7iiuro0nsgcfkkahllb'),
(14, 3, 1, 'g2rkqbb7iiuro0nsgcfkkahllb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_session`
--
ALTER TABLE `order_session`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
