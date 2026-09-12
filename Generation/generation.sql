-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 07:48 PM
-- Server version: 10.4.8-MariaDB
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
-- Database: `generation`
--

--
-- Dumping data for table `generation`
--

INSERT INTO `generation` (`id`, `ChildName`, `fatherName`, `MotherName`, `GrandFatherName`, `GrandMotherName`) VALUES
(5, 'AAAA', 'BBBB', 'CCCC', 'DDDD', 'EEEE'),
(6, 'A1', 'B1', 'C1', 'D1', 'E1'),
(7, 'A1', 'B1', 'C1', 'D2', 'E2'),
(8, 'Lynn', 'Ken', 'Karla', 'Andre', 'Kenneth'),
(9, 'Ash', 'Richard', 'May', 'Recardo', 'Martha'),
(10, 'Ash', 'Eisen', 'Sera', 'John', 'June'),
(11, 'Zed', 'Aaron', 'Seraphina', 'Peter', 'Rinne'),
(12, 'Arlo', 'Rick', 'Irena', 'Andrew', 'Shezen');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
