-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 05:26 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `log`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ProductName` varchar(40) NOT NULL,
  `Price` int(40) NOT NULL,
  `MobileNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `UserName`, `Password`, `Email`, `ProductName`, `Price`, `MobileNumber`) VALUES
(26, 'Swarna', '1234', 'swarnasen2000@gmail.com', 'Product1(N)', 4500, 1835144598),
(27, 'Swarna', '1234', 'swarnasen2000@gmail.com', 'Product1(N)', 4500, 1835144598),
(31, 'Swarna', '1234', 'swarnasen2000@gmail.com', 'Product1(N)', 4500, 1835144598),
(34, 'Mugdho', '3434', 'mugdho1234@gmail.com', 'Product3(N)', 3800, 1676243435),
(35, 'Swarna', '1234', 'swarnasen2000@gmail.com', 'Product1(N)', 4500, 1835144598);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
