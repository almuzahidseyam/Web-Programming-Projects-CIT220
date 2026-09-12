-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 06:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lr`
--
CREATE DATABASE IF NOT EXISTS `db_lr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_lr`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, '', 'sagarakash', 'sagarakashhd1998@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(123456, '', 'asdfghhjkl', 'abchnbd647@gmail.com', '164ced40da0a61fa08cfed0412dc587f'),
(1602023, '', 'Shakil ', 'shakil@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(1701103, '', 'Labib', 'labib@gmail.com', 'fba181b041d157e75b0712e721bdd700'),
(1701173, '', 'Siam', 'siam@gmail.com', 'b3b644a7b06b255d18b9f615f775f8e1'),
(1702001, '', 'aaaa', 'aaaa@gmail.com', '74b87337454200d4d33f80c4663dc5e5'),
(1702002, '', 'bbbb', 'bbbb@gmail.com', '65ba841e01d6db7733e90a5b7f9e6f80'),
(1702003, '', 'cccc', 'cccc@gmail.com', '41fcba09f2bdcdf315ba4119dc7978dd'),
(1702005, '', 'Fiad', 'fiad@gmail.com', '359fa3780842b080394ed0e79d6d547d'),
(1702008, '', 'Arif Asha', 'arifasha2baby@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(1703081, '', 'lucifer', 'taifurujjal2@gmail.com', '48279f6eff213253edb306d38a4e9f47'),
(1122334894, '', 'abdjsgd', 'abchd647@gmail.com', '164ced40da0a61fa08cfed0412dc587f');

-- --------------------------------------------------------

--
-- Table structure for table `trnx`
--

CREATE TABLE `trnx` (
  `id` int(11) NOT NULL,
  `trnx` text NOT NULL,
  `student_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trnx`
--

INSERT INTO `trnx` (`id`, `trnx`, `student_id`) VALUES
(1, '1001', '1'),
(2, '1002', '1'),
(3, '1003', ''),
(4, '1004', ''),
(5, '1005', ''),
(6, '1006', ''),
(7, '1007', ''),
(8, '1008', ''),
(9, '1009', ''),
(10, '1010', ''),
(11, '1011', ''),
(12, '1012', ''),
(13, '1013', ''),
(14, '1014', ''),
(15, '1015', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trnx`
--
ALTER TABLE `trnx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122334895;

--
-- AUTO_INCREMENT for table `trnx`
--
ALTER TABLE `trnx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
