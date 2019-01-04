-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 07:16 PM
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
  `id` int(11) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `mname` varchar(32) NOT NULL,
  `class` int(32) NOT NULL,
  `age` int(32) NOT NULL,
  `year` int(32) NOT NULL,
  `stddetails` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdinfo`
--

INSERT INTO `stdinfo` (`id`, `fullname`, `fname`, `mname`, `class`, `age`, `year`, `stddetails`) VALUES
(5, 'Mustafizur', 'Salam', 'Morzina', 9, 14, 2016, 'He is very cleaver boy.'),
(6, 'Rakib', 'Abdul', 'Fahima', 6, 12, 2017, 'He is very lazy boy.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
