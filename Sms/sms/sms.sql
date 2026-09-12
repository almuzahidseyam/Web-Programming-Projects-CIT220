-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 04:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--
CREATE DATABASE IF NOT EXISTS `sms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nstudent`
--

CREATE TABLE `nstudent` (
  `id` int(11) NOT NULL,
  `sn` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `class` int(11) NOT NULL,
  `pcont` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(55) NOT NULL,
  `marks` int(12) NOT NULL,
  `result` varchar(10) NOT NULL,
  `year` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nstudent`
--

INSERT INTO `nstudent` (`id`, `sn`, `name`, `fname`, `mname`, `class`, `pcont`, `address`, `date`, `marks`, `result`, `year`) VALUES
(1, 0, 'ghghhg', 'esddf', 'esrer', 0, '', '', '02/02/2021', 0, '', ''),
(2, 0, 'ghghhg', 'esddf', 'esrer', 0, '', '', '02/02/2021', 0, '', ''),
(3, 0, 'ghghhg', 'esddf', 'esrer', 0, '', '', '02/02/2021', 0, '', ''),
(4, 0, 'ghghhg', 'esddf', 'esrer', 0, '', '', '02/02/2021', 0, '', ''),
(5, 0, 'dghhg', 'ftftt', 'rdttyty', 0, '', '', '2154365', 0, '', ''),
(6, 0, 'Dina', 'Abdul', 'mohoma', 6, '017256478', 'Nithpur', '30/12/2004', 100, '10', '2020'),
(7, 0, 'Rina', 'Rahim', 'Momiton', 6, '015487623', 'Nithpur', '30/2/2004', 87, '9', '2020'),
(8, 0, 'Mina', 'Abdul Jabbar', 'Soinur', 6, '018546923', 'Nithpur', '3/12/2004', 95, '8', '2020'),
(10, 0, 'Rajkumari', 'Rajib', 'Rahela', 6, '0172456935', 'Nithpur', '2/11/2004', 99, '9.9', '2020'),
(11, 0, 'Bina', 'Bonola', 'Sana', 6, '02155455', 'Nithpur', '30/12/1999', 96, '', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `pcont` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `marks` int(11) NOT NULL,
  `result` float NOT NULL,
  `year` varchar(15) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `class`, `name`, `fname`, `mname`, `pcont`, `address`, `religion`, `date`, `marks`, `result`, `year`, `image`) VALUES
(19, 1, 9, 'Suraiya', 'Sajib', 'Sanjida', '0172564889', 'Nithpur', 'Islam', '30/12/2000', 0, 0, '2020', 'a.jpg'),
(20, 2, 9, 'Sabiha', 'Sadikul', 'Sonali', '0174589632', 'Nithpur', 'Islam', '20/5/2000', 0, 0, '2020', 'b.jpg'),
(21, 3, 9, 'Sharmin', 'Sadikul', 'Nargis', '0135469872', 'Nithpur', 'Islam', '12/02/2001', 0, 0, '2020', 'a.jpg'),
(22, 4, 9, 'Nondita rani', 'Sukumar', 'Lota', '0171254698', 'Nithpur', 'Hindu', '25/6/2001', 0, 0, '2020', 'a.jpg'),
(23, 5, 9, 'Tanjila', 'Lokman', 'Moriom', '017254639', 'Nithpur', 'Islam', '23/01/2000', 0, 0, '2020', 'a.jpg'),
(24, 6, 9, 'Nuraja', 'Nur Alam', 'Sajenur', '017546925', 'Nithpur', 'Islam', '30/11/2000', 0, 0, '2020', 'a.jpg'),
(25, 1, 8, 'Tanjila', 'Lokman', 'Moriom', '017254639', 'Nithpur', 'Islam', '23/01/2000', 1000, 3.5, '2019', 'a.jpg'),
(26, 2, 8, 'Sharmin', 'Sadikul', 'Nargis', '0135469872', 'Nithpur', 'Islam', '12/02/2001', 1040, 3.65, '2019', ''),
(27, 3, 8, 'Suraiya', 'Sajib', 'Sanjida', '0172564889', 'Nithpur', 'Islam', '30/12/2000', 1100, 4, '2019', ''),
(28, 4, 8, 'Sabiha', 'Sadikul', 'Sonali', '0174589632', 'Nithpur', 'Islam', '20/5/2000', 1050, 4, '2019', ''),
(29, 5, 8, 'Nondita rani', 'Sukumar', 'Lota', '0171254698', 'Nithpur', 'Hindu', '25/6/2001', 980, 3.25, '2019', ''),
(30, 1, 8, 'Tania', 'Sarif', 'Rina', '015426897', 'Nithpur', 'Islam', '30/12/2001', 0, 0, '2020', ''),
(31, 5, 7, 'Tania', 'Sarif', 'Rina', '015426897', 'Nithpur', 'Islam', '30/12/2001', 1150, 4, '2019', ''),
(32, 2, 8, 'Sabrina', 'Sohidul', 'Jolly', '018256478', 'Naogaon', 'Islam', '25/5/2002', 0, 0, '2020', ''),
(33, 4, 7, 'Sabrina', 'Sohidul', 'Jolly', '018256478', 'Naogaon', 'Islam', '25/5/2002', 1070, 3.75, '2019', ''),
(34, 3, 8, 'Farjana', 'Usuf', 'Fatema', '015782465', 'Naogaon', 'Islam', '22/04/2002', 0, 0, '2020', ''),
(35, 2, 7, 'Farjana', 'Usuf', 'Fatema', '015782465', 'Naogaon', 'Islam', '22/04/2002', 1135, 4, '2019', ''),
(36, 4, 8, 'Karima', 'Karim', 'Kakoli', '01845263', 'Nithpur', 'Islam', '30/12/2002', 0, 0, '2020', ''),
(38, 1, 7, 'Karima', 'Karim', 'Kakoli', '01845263', 'Nithpur', 'Islam', '30/12/2002', 1140, 4, '2019', ''),
(39, 3, 7, 'Tanjila', 'Momin', 'Momeda', '013569847', 'Naogaon', 'Islam', '12/5/2002', 1075, 3.75, '2019', 'a.jpg'),
(40, 1, 7, 'Sumaiya', 'Momim', 'Sana', '01712546987', 'Nithpur', 'Islam', '20/3/2003', 0, 0, '2020', 'a.jpg'),
(41, 2, 6, 'Sumaiya', 'Momin', 'Sana', '01712546987', 'Nithpur', 'Islam', '20/3/2003', 1080, 3.75, '2019', ''),
(42, 2, 7, 'Alia', 'Alim', 'Amena', '013654875', 'Naogaon', 'Islam', '30/8/2000', 0, 0, '2020', ''),
(43, 1, 6, 'Alia', 'Alim', 'Amena', '013654875', 'Naogaon', 'Islam', '30/8/2000', 1050, 3.7, '2019', ''),
(44, 3, 7, 'Raseda', 'Rahman', 'Jully', '01718376548', 'Nithpur', 'Islam', '30/12/2003', 0, 0, '2020', ''),
(45, 3, 6, 'Raseda', 'Rahman', 'Jully', '01718376548', 'Nithpur', 'Islam', '30/12/2003', 1020, 3.5, '2019', 'a.jpg'),
(46, 4, 7, 'Mim', 'Shamsur', 'Sokhina', '015468723', 'Nithpur', 'Islam', '30/12/2002', 0, 0, '2020', ''),
(47, 5, 6, 'Mim', 'Shamsur', 'Sokhina', '015468723', 'Nithpur', 'Islam', '30/12/2002', 1000, 3.25, '2019', ''),
(48, 5, 7, 'Tonny', 'Tonmoy', 'Tuki', '013564785', 'Naogaon', 'Islam', '20/12/2003', 0, 0, '2020', 'a.jpg'),
(49, 4, 6, 'Tonny', 'Tonmoy', 'Tuki', '013564785', 'Naogaon', 'Islam', '20/12/2003', 980, 3, '2019', 'b.jpg'),
(50, 1, 6, 'Dina', 'Abdul', 'mohoma', '017256478', 'Nithpur', 'Islam', '30/12/2004', 0, 0, '2020', ''),
(51, 2, 6, 'Rajkumari', 'Rajib', 'Rahela', '0172456935', 'Nithpur', 'Islam', '2/11/2004', 0, 0, '2020', 'b.jpg'),
(52, 3, 6, 'Bina', 'Bonola', 'Sana', '017254698', 'Nithpur', 'Hindu', '30/12/2004', 0, 0, '2020', ''),
(53, 4, 6, 'Mina', 'Abdul Jabbar', 'Soinur', '018546923', 'Nithpur', 'Islam', '3/12/2004', 0, 0, '2020', ''),
(54, 5, 6, 'Rina', 'Rahim', 'Momiton', '015487623', 'Nithpur', 'Islam', '30/2/2004', 0, 0, '2020', ''),
(55, 1, 8, 'Tania', 'Sarif', 'Rina', '015426897', 'Nithpur', 'Islam', '30/12/2001', 0, 0, '2019', ''),
(56, 5, 8, 'Tanjila', 'Momin', 'Momeda', '013569847', 'Naogaon', 'Islam', '12/5/2002', 0, 0, '2020', 'b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cont` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(100) NOT NULL,
  `class` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `designation` varchar(55) NOT NULL,
  `salary` int(11) NOT NULL,
  `image` text NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `cont`, `email`, `address`, `class`, `sub`, `designation`, `salary`, `image`, `year`) VALUES
(1, 'frfddg', '5125312', 'rdgfv', 'hfgjkj', 7, 'English', 'asg', 5412, '', ''),
(2, 'Sadikul', '0172465696', 'msi.ece07@gmail.com', 'Nithpur', 7, 'bangla', 'assistant', 17000, '', '2020'),
(3, 'Sajib', '017569214', 'sajib@gmail.com', 'Nithpur', 8, 'English', 'teacher', 17000, '', ''),
(5, 'Mojharul Islam', '0171256438', 'moj.10@gmail.com', 'Porsa', 6, 'Islam', 'assistant teacher', 23000, '', '2020'),
(6, 'Safiul Islam', '0171546358', 'Safi@gmail.com', 'Nithpur', 6, 'bangla', 'assistant teacher', 23000, '', '2020'),
(7, 'Taslima', '0172453687', 'taslima@gmail.com', 'Naogaon', 6, 'General Science', 'assistant teacher', 23400, '', '2020'),
(8, 'Sohidul Islam', '0195243687', 'sohi.10@gmail.com', 'Nithpur', 6, 'Math', 'assistant teacher', 17000, '', '2020'),
(9, 'Nargis Begum', '017254689', 'nargis@gmail.com', 'Nithpur', 7, 'Social Science', 'Assistant teacher', 23400, 'a.jpg', '2020'),
(10, 'Nargis Begum', '017254689', 'nargis@gmail.com', 'Nithpur', 6, 'Social Science', 'Assistant teacher', 23400, 'a.jpg', '2020'),
(13, 'Sohidul Islam', '0195243687', 'sohi.10@gmail.com', 'Nithpur', 7, 'Math', 'assistant teacher', 17000, '', '2020'),
(14, 'Mojharul Islam', '0171256438', 'moj.10@gmail.com', 'Porsa', 7, 'Islam', 'assistant teacher', 23000, '', '2020'),
(15, 'Taslima', '0172453687', 'taslima@gmail.com', 'Naogaon', 7, 'General Science', 'assistant teacher', 23400, '', '2020'),
(16, 'frfddg', '5125312', 'rdgfv', 'hfgjkj', 8, 'English', 'asg', 5412, '', ''),
(17, 'Sadikul', '0172465696', 'msi.ece07@gmail.com', 'Nithpur', 8, 'bangla', 'assistant', 17000, '', '2020'),
(19, 'Mojharul Islam', '0171256438', 'moj.10@gmail.com', 'Porsa', 8, 'Islam', 'assistant teacher', 23000, '', '2020'),
(20, 'Mojharul Islam', '0171256438', 'moj.10@gmail.com', 'Porsa', 6, 'Islam', 'assistant teacher', 23000, '', '2020'),
(21, 'Taslima', '0172453687', 'taslima@gmail.com', 'Naogaon', 8, 'General Science', 'assistant teacher', 23400, '', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nstudent`
--
ALTER TABLE `nstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nstudent`
--
ALTER TABLE `nstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
