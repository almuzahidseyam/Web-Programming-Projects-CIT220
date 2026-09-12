-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2020 at 03:34 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agfaculty`
--
CREATE DATABASE IF NOT EXISTS `agfaculty` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `agfaculty`;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `SL` int(100) NOT NULL,
  `Department` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Contact` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`SL`, `Department`, `tName`, `designation`, `email`, `Contact`, `Password`) VALUES
(4, 'Botany', 'M. H. Kabir Howlader PhD', 'Professor', '@gamil.com', '018', '4321'),
(12, 'Agricultural  Chemistry', 'Md. Nizam Uddin', 'professor', 'Email:nizam_acm@yahoo.com', '01733094606', '123'),
(13, 'Biotechnology', 'Dr. Khadiza Khatun', 'Associate Professor', 'Email:kkr@pstu.ac.bd', 'Contact No: 01763405303', '321'),
(14, 'Biotechnoloy', 'Md. Shafikur Rahmanm', 'Associate Professor', 'Email: roni_jss@yahoo.com', ' +88017174691122', '321'),
(15, 'Biotechnology', 'Asmaul Husna', 'Assistant Professor', 'Email: ahusna@pstu.ac.bd', 'Contact No: 01732243929', '432'),
(17, 'Entomology', 'Dr. Md. Mohasin Hussain Khan', 'Professor', 'Email: mohasin1965@pstu.ac.bd', 'Contact No: 01911252617', '654'),
(18, 'Entomology', 'Dr. Md. Mamun ur Rashid', 'professor', 'Email: murashidpstu@gmail.com', 'Contact No: 01712143236', '654'),
(19, 'Entomology', 'Dr. Md. Habibur Rahmanl', 'professor', 'Email:atikentom@pstu.ac.bd', 'Contact No: 01967958808', '123'),
(20, 'Entomology', 'Dr. S.M. Hemayet Jahan', 'professor', 'Email:hemayet_pstu@yahoo.com', 'Contact No:01982221997', '34'),
(21, 'Entomology', 'Dr. Md. Asaduzzaman', 'Associate Professor', 'Email:asad@pstu.ac.bd', 'Contact No:01197101441', '432'),
(23, 'Agricultural Engineering', 'Md. Monirul Islam Chowdury', 'Professor', 'Email:monir67aa@yahoo.com', 'Contact No: 01712698487', '213'),
(24, 'xyz', 'eerrtrty', 'wedfg', 'sdf', '234', '123'),
(25, 'xyz', 'eerrtrty', 'wedfg', 'sdf', '234', '123');

-- --------------------------------------------------------

--
-- Table structure for table `navitems`
--

CREATE TABLE `navitems` (
  `nvid` int(10) DEFAULT NULL,
  `navitem` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `href` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stinformation`
--

CREATE TABLE `stinformation` (
  `id` int(11) NOT NULL,
  `batch` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phnno` int(50) NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `hall` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `semester` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stinformation`
--

INSERT INTO `stinformation` (`id`, `batch`, `name`, `gmail`, `phnno`, `address`, `hall`, `semester`) VALUES
(1502026, '17th', 'Tanjin Sultana Tithi', 'thithi@gmail.com', 1921762931, 'Faridpur', 'sk hall', 'MS'),
(1502031, '17th', 'Fahmida Faiza', 'faiza@gmail.com', 1529431076, 'Vhola', 'sk hall', 'MS'),
(1602020, '18th', 'Shaila Tajmim', 'shaila23@gmail.com', 1821562189, 'dhaka', 'SFMH', '7th'),
(1602037, '18th', '', 'tanjila32@gmail.com', 1723457182, 'jhalokathi', 'sufia kamal', '7th'),
(1602076, '18th', 'Afif ur Rahman', 'urrahman@gmail.com', 1732109854, 'Kustia', 'D-3', '7th'),
(1702022, '19th', 'asifa adri', 'asifaadri@gmail.com', 1523871321, 'dhaka', 'sk hall', '5th'),
(1702033, '19th', 'Joy Hossain', 'hossain@gmail.com', 1761985723, 'Rangpur', 'D-1', '5th'),
(1702047, '19th', 'Nitu Sengupta', 'nitu@gmail.com', 1721907856, 'Magura', 'SFMH', '5th'),
(1702056, '19th', 'Sonia Akter', 'akter@gmail.com', 1723431278, 'jessore', 'sk hall', '5th'),
(1802034, '20th', 'Nafisa Rokeya', 'nafisa21@gmail.com', 1790178254, 'Vola', 'sk hall', '3rd'),
(1802064, '20th', '', 'sadia@gmail.com', 1762963712, 'khulna', 'sufia kamal hall', '3rd'),
(1902032, '21th', 'Robious Sunny', 'robioussunny@gmail.com', 1628444141, 'Rajshahi', 'D-4', '1st'),
(1902078, '21th', 'Rafsun Jani Shawon', 'shawon@gmail.com', 1976231461, 'Dinajpur', 'D-4', '1st');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `stinformation`
--
ALTER TABLE `stinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `SL` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `stinformation`
--
ALTER TABLE `stinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1902079;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
