-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 08:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std`
--

-- --------------------------------------------------------

--
-- Table structure for table `stdinfo`
--

CREATE TABLE `stdinfo` (
  `id` int(32) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `class` int(32) NOT NULL,
  `age` int(32) NOT NULL,
  `year` int(32) NOT NULL,
  `stddetails` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdinfo`
--

INSERT INTO `stdinfo` (`id`, `fullname`, `fname`, `mname`, `class`, `age`, `year`, `stddetails`) VALUES
(1, 'Md Mustafizur Rahman', 'Md A. Salam', 'Mst Morzina Begum', 17, 24, 2019, 'He is reading in CSE and he is coder boy.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stdinfo`
--
ALTER TABLE `stdinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stdinfo`
--
ALTER TABLE `stdinfo`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
