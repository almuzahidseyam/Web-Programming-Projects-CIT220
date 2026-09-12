-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 08:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--
CREATE DATABASE IF NOT EXISTS `register` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `register`;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `country` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `bdate` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `fathername`, `mothername`, `postalcode`, `address`, `email`, `password`, `gender`, `country`, `district`, `phone`, `bdate`, `age`) VALUES
(1, 'Muhammad Taha', 'Harun ar Rashid', 'Nazmun Nahar', 45788, 'jessore,khulna', 'tahaemon5@gmail.com', 'rywuwee', 'm', 'Bangladesh', 'Jessore', 1859071478, 2019, 21),
(2, 'Shahadat Rohan', 'Nasir Uddin', 'Shilpy Akhtar', 43267, 'Chuadanga,Jessore', 'sahadatrohan@gmail.c', 'reyiuy54', 'm', 'Bangladesh', 'Jessore', 1659071478, 2003, 18),
(3, 'Muhammad Taha', 'Harun ar Rashid', 'Nazmun Nahar', 34567, 'jessore,khulna', 'tahaemon5@gmail.com', 'rywuwee', 'm', 'Bangladesh', 'Jessore', 1859071478, 2019, 23),
(4, 'Utshob', 'Najibullah', 'Nurjahan', 6532, 'jessore,khulna', 'utshob@gmail.com', 'fte4iyyr', 'm', 'Bangladesh', 'Jessore', 1959071478, 2006, 18),
(5, 'Utshob', 'Najibullah', 'Nurjahan', 7643, 'jessore,khulna', 'tahaemon5@gmail.com', 'rywuwee', 'm', 'Bangladesh', 'Jessore', 1559071478, 1996, 25),
(6, 'Mugdho', 'Nasir Uddin', 'Shilpy Akhtar', 56785, 'Chuadanga,Jessore', 'mugdho5@gmail.com', 'hfftet6f', 'm', 'Bangladesh', 'Jessore', 1659071478, 1995, 26),
(7, 'Nishan', 'Harun ar Rashid', 'Nazmun Nahar', 54678, 'jessore,khulna', 'nishan@gmail.com', 'bhcshtw6', 'm', 'Bangladesh', 'Jessore', 1728261477, 2004, 19),
(8, 'Shad', 'Babu', 'Eity', 5467, 'jessore,khulna', 'shad5@gmail.com', 'hsgtdteu', 'm', 'Bangladesh', 'Jessore', 1728281477, 2006, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
