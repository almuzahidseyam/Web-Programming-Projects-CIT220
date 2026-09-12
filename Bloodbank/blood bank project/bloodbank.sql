-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 08:49 AM
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
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1020191, 'fazlerabbi16091999@gmail.com', '$2y$10$4/vfycFjFVJGU/PtRjSPZeQAphqsFmfF8M.NBRizIjnfAQchvIdwW');

-- --------------------------------------------------------

--
-- Table structure for table `donation_history`
--

CREATE TABLE `donation_history` (
  `donation_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  `donation_place` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_history`
--

INSERT INTO `donation_history` (`donation_id`, `donor_id`, `donation_date`, `donation_place`) VALUES
(201901018, 2019016, '2020-01-22', 'naogaon'),
(201901019, 2019016, '2020-01-31', 'Bauphal'),
(201901020, 2019015, '2020-01-16', 'barishal'),
(201901023, 2019017, '2020-01-30', 'naogaon');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_history`
--

CREATE TABLE `receiver_history` (
  `SL` int(11) NOT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver_history`
--

INSERT INTO `receiver_history` (`SL`, `blood_group`, `contact_no`) VALUES
(38, 'O+', '01792540232'),
(39, 'O+', ''),
(42, 'A+', '01792540342'),
(43, 'A+', ''),
(60, 'B+', '017923121134'),
(61, 'B+', '018921321433');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `request_by` varchar(32) NOT NULL,
  `gender` varchar(8) NOT NULL DEFAULT 'male',
  `email` varchar(64) NOT NULL,
  `request_for` varchar(8) NOT NULL,
  `requried_date` date NOT NULL,
  `contact_no` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `request_by`, `gender`, `email`, `request_for`, `requried_date`, `contact_no`) VALUES
(49, 'my', 'male', 'my@gmail.com', 'AB-', '2020-01-20', '01792540212'),
(50, 'Mursalen', 'male', 'mu2@gmail.com', 'AB-', '2020-01-23', '01794540232'),
(52, 'habibul mursalen', 'male', 'hab12@gmail.com', 'B-', '2020-01-21', '01792540232'),
(54, 'najmul', 'male', 'n12@gmail.com', 'A+', '2020-01-30', '0192540232'),
(55, 'Fazle Rabbi Akash', 'male', 'akash12@gmail.com', 'B+', '2020-01-28', '0179231211343'),
(58, 'Najmul', 'male', 'Najmul12@gmail.com', 'B-', '2020-01-30', '01792540232'),
(59, 'akash halwader', 'male', 'a12@gmail.com', 'B+', '2020-01-31', '018921321433'),
(61, 'm', 'male', 'm12@gmail.com', 'O+', '2020-01-29', '01792540232'),
(68, 'k', 'male', 'k2@gmail.com', 'O+', '2020-01-28', ''),
(69, 'n', 'male', 'n@gmail.com', 'B-', '2020-01-30', '0179543213'),
(70, '', 'male', '', 'A+', '0000-00-00', ''),
(71, 'jithuw', 'male', 'd@gmail.com', 'O-', '2020-01-29', '9999929293');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `blood_group` varchar(8) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `blood_group`, `created_at`) VALUES
(2019001, 'a@gmail.com', 'Fazle Rabbi', '$2y$10$.voAUrmd6xWm6H2Ht3YOL.orJhaX0KdpI0efpkJdUBaEUWoX.l5bK', 'A+', '2019-11-04 21:21:43'),
(2019005, 'ahhh@gmail.com', 'fazle', '$2y$10$j/3UiXK7/NgH9rO8FpC6AeU8nrrB8iWGghOaB5doxjRHt0ZQV0St6', 'A+', '2020-01-12 22:15:43'),
(2019006, 'najmul@gmail.com', 'najmul', '$2y$10$sAsGkLVKvv3tKBHnISn8buVTaPRfoTFPQTLKKxtTTZqRqG.KOQFKq', 'A+', '2020-01-12 22:54:42'),
(2019007, 'bi@gmail.com', 'Bishawjit', '$2y$10$zWIkWSSVArgeG89gjzk98eaT0SQQwVdmAyJIn.r2xHtdsfSJDrocG', 'A+', '2020-01-13 09:34:06'),
(2019008, 'juwel12@gmail.com', 'juwel', '$2y$10$RKe3GVg5jbfVEW3MVSYfueYmRxUDY47OWVwohwyx.MJq.YVtPdY2.', 'B+', '2020-01-13 13:29:08'),
(2019009, 'sanin12@gmail.com', 'sanin', '$2y$10$u.75vffJ/W5ArXqnLrOaAO/76E.fOxLIvBfEOgMYWuWHwFELZMkSe', 'A+', '2020-01-13 13:33:43'),
(2019010, 'mahim12@gmail.com', 'mahim', '$2y$10$qOFIiQvYoYlOQQ/6Mo1uPOxMDrWkPcajx2rzEv6rbMgfSh1LP02fG', 'O-', '2020-01-14 21:14:47'),
(2019011, 'mahid12@gmail.com', 'mahid', '$2y$10$EFyF2U.uhEgL313wTb5hle1JMaTAiu.Y/P9aB.Fk0rhW6pfx0fTBq', 'O+', '2020-01-14 21:27:57'),
(2019012, 'joy@gmail.com', 'joy', '$2y$10$ndTXQyoFvGpax428BooQueGPC6rGySH2Nk1vZZMgJ7u0Bzwk9rND6', 'A+', '2020-01-18 16:25:18'),
(2019013, 'bipul12@gmail.com', 'bipul', '$2y$10$Fiy7/H1i.Emv5LKI7Sab4e83IzFByZy97joFm0410npYEovalsLQ6', 'O-', '2020-01-19 16:37:44'),
(2019014, 'bipul123@gmail.com', 'Akash ', '$2y$10$dYsxCpvdMNDHRwLL48Bq3epp9ulUwLF3ff1LY40ith5hROl7F5YBS', 'A+', '2020-01-23 20:20:10'),
(2019015, 'H@g.com', 'Jitu', '$2y$10$LiRg71m9qOFlLG1LAcg3L.7S3SlRquAomWIk09jVtVtZaWM.fbEbq', 'O+', '2020-01-24 02:11:48'),
(2019016, 'N123@gmail.com', 'najmul', '$2y$10$j1jKEDSlqhH84Xy1zqVbvOA5hoqvGgb.NyJorVs0ZtnmIN1py3o/q', 'AB-', '2020-01-24 12:10:14'),
(2019017, 'naja12@gmail.com', 'naja', '$2y$10$swfoija98cWU.Xbb/dmIaODkUX/QXs0SlCGiPpFCC/dzjUt00fxj2', 'AB-', '2020-01-24 20:33:47'),
(2019018, 'h1@gmail.com', 'h1', '$2y$10$MBtUdcTfvvjjliGxvj/57ujM1bzCMzuApiJKWKy17PJcGEx4M83z2', 'AB-', '2020-01-25 16:03:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_history`
--
ALTER TABLE `donation_history`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `receiver_history`
--
ALTER TABLE `receiver_history`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020192;

--
-- AUTO_INCREMENT for table `donation_history`
--
ALTER TABLE `donation_history`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201901024;

--
-- AUTO_INCREMENT for table `receiver_history`
--
ALTER TABLE `receiver_history`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2019019;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
