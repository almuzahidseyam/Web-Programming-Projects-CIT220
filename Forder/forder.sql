-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 06:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `forder`
--

CREATE TABLE `forder` (
  `SL` int(200) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `contactno` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forder`
--

INSERT INTO `forder` (`SL`, `username`, `email`, `address`, `password`, `contactno`) VALUES
(1, 'sadia', 'sdfghjk@gmail.com', 'khulna', '1234', 0),
(10, 'Tanjila', 'tanjila@gmail.com', 'Barisal', '7777', 1767453421),
(11, 'Ayrin', 'ayrin@gmail.com', 'Rajshahi', '9000', 1768987645),
(12, 'Ritu', 'ritu@gmail.com', 'Dhaka', '3456', 1876456789),
(13, 'Shouvic', 'shouvic@gmail.com', 'dhaka', '4567', 1678675434),
(14, 'Nourin', 'nourin@gmail.com', 'khulna', '7890', 1786564323);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forder`
--
ALTER TABLE `forder`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forder`
--
ALTER TABLE `forder`
  MODIFY `SL` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
