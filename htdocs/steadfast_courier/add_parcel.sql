-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 01:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `add_parcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `next_day`
--

CREATE TABLE `next_day` (
  `id` int(11) NOT NULL,
  `invoice` int(100) NOT NULL,
  `cod_amount` int(100) NOT NULL,
  `cus_name` varchar(300) NOT NULL,
  `cus_address` varchar(100) NOT NULL,
  `cus_phone` varchar(30) NOT NULL,
  `note` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `next_day`
--

INSERT INTO `next_day` (`id`, `invoice`, `cod_amount`, `cus_name`, `cus_address`, `cus_phone`, `note`) VALUES
(1, 1111, 1233, 'ss', '', '12344', 'sgd'),
(2, 1111, 1233, 'ss', '', '12344', 'sgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `next_day`
--
ALTER TABLE `next_day`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `next_day`
--
ALTER TABLE `next_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
