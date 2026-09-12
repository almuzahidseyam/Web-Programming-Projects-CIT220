-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 04:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` varchar(50) NOT NULL,
  `supervisor` int(3) DEFAULT NULL,
  `internal_1` int(3) DEFAULT NULL,
  `internal_2` int(3) DEFAULT NULL,
  `internal_3` int(3) DEFAULT NULL,
  `external_1` int(3) DEFAULT NULL,
  `external_2` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`student_id`, `supervisor`, `internal_1`, `internal_2`, `internal_3`, `external_1`, `external_2`) VALUES
('1702012', 50, 50, 50, 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(50) NOT NULL,
  `reg` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `session` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reg`, `name`, `session`) VALUES
('1502002', '6190', 'Tahmidur Rahman Tamim', '2015-16'),
('1502003', '6191', 'Md. Monjur Alahi Joarder', '2015-16'),
('1502004', '6192', 'Md. Khalid Ahmed Shakil', '2015-16'),
('1502006', '6194', 'S.M. Shadman akber Shuvo', '2015-16'),
('1502007', '6195', 'Md. Shadik Hossain', '2015-16'),
('1502010', '6198', 'Muhammad Abdur Rahman', '2015-16'),
('1502011', '6199', 'Md. Mujahidul Islam', '2015-16'),
('1502012', '6200', 'Arpita Rani Dey', '2015-16'),
('1502013', '6201', 'Nahary Jannath', '2015-16'),
('1502014', '6202', 'U. Shing Marma', '2015-16');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_cit`
--

CREATE TABLE `teacher_cit` (
  `id` varchar(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_cit`
--

INSERT INTO `teacher_cit` (`id`, `name`, `password`, `email`, `status`) VALUES
('1', 'thth', '111', 'a@gmail.com', 'Supervisor'),
('110', 'Chinmay Bepery', '110', 'chinmay.cse@pstu.ac.bd', 'supervisor'),
('111', 'Moinul Islam Sayed', '111', 'smoinul@pstu.ac.bd', 'internal1'),
('12', 'abdul', '12', 'a@gmail.com', 'Supervisor'),
('a', 'a', 'a', 'a@gmail.com', 'Supervisor'),
('A1000', 'Sayed', '123', 'a@gmail.com', 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `password`) VALUES
('admin123', 'admin', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_cit`
--
ALTER TABLE `teacher_cit`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
