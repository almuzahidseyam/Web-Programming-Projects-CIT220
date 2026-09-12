-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 06:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pk5`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_users`
--

CREATE TABLE `crud_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud_users`
--

INSERT INTO `crud_users` (`id`, `name`, `email`) VALUES
(1, 'rabib', 'Sherpur'),
(2, 'Diganta', 'Sherpur'),
(3, 'Turjo', 'Mymensingh'),
(4, 'Roky', 'Sherpur'),
(5, 'Fiad', 'Mymensingh'),
(6, 'Mridul', 'Mymensingh'),
(7, 'Arif', 'Bogra'),
(8, 'Taha', 'Jessore'),
(9, 'Mamun', 'Mymensingh'),
(10, 'Mursaleen', 'Syleth'),
(11, 'Alim', 'Pabna'),
(12, 'Fazle Rabbi', 'Naogaon'),
(13, 'Noyon', 'Sherpur'),
(14, 'Rubayet', 'Dhaka'),
(15, 'Rajib', 'Cumilla'),
(16, 'Shuvo', 'Barisal'),
(17, 'Maksud', 'Jhalakathi'),
(18, 'Abid', 'Narayanganj'),
(19, 'Jahid', 'Jessore'),
(20, 'Sohag', 'Mymensingh'),
(21, 'Jitu', 'Mymensingh'),
(22, 'Niloy', 'Madaripur'),
(23, 'Nahiyan', 'Jhalakathi'),
(24, 'Tanjila', 'Jhalakathi'),
(25, 'Akash', 'Chittagong'),
(26, 'Rabiul', 'Jessore'),
(27, 'Anika', 'Barisal'),
(28, 'Nayeem', 'Jhalakathi'),
(29, 'Mahedi', 'Chittagong'),
(30, 'Ayrin', 'Pabna'),
(31, 'Ashraful', 'Mymensingh'),
(32, 'Green', 'Barisal'),
(33, 'Tanvir', 'Shariatpur'),
(34, 'Zunaid', 'Rangpur'),
(35, 'Samayun', 'Narayanganj'),
(36, 'Sukanta', 'Barisal'),
(37, 'Anik', 'Patuakhali'),
(38, 'Shampa', 'Barisal'),
(39, 'Nourin', 'Khulna'),
(40, 'Bishwajit', 'Khulna'),
(41, 'Swarna', 'Khulna'),
(42, 'Bipul', 'Jamalpur'),
(43, 'Tasnim', 'Barisal'),
(44, 'Saha', 'Chittagong'),
(45, 'Mou', 'Jessore'),
(46, 'Sadia', 'Khulna'),
(47, 'Rifat', 'Bogra'),
(48, 'Jamatul', 'Kishorganj'),
(49, 'Sefat', 'Dhaka'),
(50, 'Masum', 'Pabna'),
(51, 'Nazmul', 'Pabna'),
(52, 'Sharika', 'Barisal'),
(53, 'Souvic', 'Tangail'),
(54, 'Basu', 'Sathkhira'),
(55, 'Nadim', 'Dhaka'),
(56, 'Nil', 'Khulna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_users`
--
ALTER TABLE `crud_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_users`
--
ALTER TABLE `crud_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
