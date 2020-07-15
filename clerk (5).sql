-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 03:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clerk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cse1`
--

CREATE TABLE `cse1` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub` text NOT NULL,
  `code` varchar(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse1`
--

INSERT INTO `cse1` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 1, 'BIT', '0983', 'P'),
(2, 1, 'PHY', '2355', 'T'),
(3, 1, 'WS', '3962', 'P'),
(4, 1, 'CS', '1151', 'P'),
(5, 1, 'CHEM', '2555', 'T'),
(6, 1, 'CHEM', '3555', 'P\r\n'),
(7, 1, 'CS', '0151', 'T'),
(8, 1, 'MATH', '2455', 'T'),
(9, 1, 'PHY', '3355', 'P'),
(10, 1, 'DRAWING', '2655', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `cse2`
--

CREATE TABLE `cse2` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse2`
--

INSERT INTO `cse2` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 2, 'PHY', '2154', 'T'),
(2, 2, 'BE', '0664', 'T'),
(3, 2, 'BEE', '3064', 'P'),
(4, 2, 'BEE', '0064', 'T'),
(5, 2, 'MATH', '2354', 'T'),
(6, 2, 'CS', '3051', 'P'),
(7, 2, 'WS', '9326', 'P'),
(8, 2, 'PHY', '3154', 'P'),
(9, 2, 'CS', '2051', 'T'),
(10, 2, 'BE', '2664', 'P'),
(11, 2, 'DTP', '9962', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `cse3`
--

CREATE TABLE `cse3` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse3`
--

INSERT INTO `cse3` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 3, 'SAD', '0621', 'T'),
(2, 3, 'C PROG', '1625', 'P'),
(3, 3, 'C PROG', '0625', 'T'),
(4, 3, 'EVS', '1018', 'P'),
(5, 3, 'MA', '0627', 'T'),
(6, 3, 'RDBMS', '1626', 'P'),
(7, 3, 'WS', '1628', 'P'),
(8, 3, 'EVS', '1008', 'T'),
(9, 3, 'DE', '1620', 'P'),
(10, 3, 'DE', '0620', 'T'),
(11, 3, 'MA', '1627', 'P'),
(12, 3, 'RDBMS', '0626', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `cse4`
--

CREATE TABLE `cse4` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse4`
--

INSERT INTO `cse4` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 4, 'IWT', '2628', 'P'),
(2, 4, 'GS', '0564', 'T'),
(3, 4, 'IWT', '0628', 'T'),
(4, 4, 'CA', '3621', 'T'),
(5, 4, 'OOPS', '0623', 'T'),
(6, 4, 'DS', '0622', 'T'),
(7, 4, 'DS', '2622', 'P'),
(8, 4, 'OOPS', '2623', 'P'),
(9, 4, 'MP', '2624', 'P'),
(10, 4, 'MP', '0624', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `cse5`
--

CREATE TABLE `cse5` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse5`
--

INSERT INTO `cse5` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 5, 'CPI', '3620', 'P'),
(2, 5, 'PROJ', '3333', 'P'),
(3, 5, 'VB.NET', '2627', 'T'),
(4, 5, 'OS', '3625', 'P'),
(5, 5, 'OS', '3625', 'P'),
(6, 5, 'CPI', '2620', 'T'),
(7, 5, 'TRAINING', '4444', 'P'),
(8, 5, 'CN', '2626', 'T'),
(9, 5, 'JAVA', '6629', 'P'),
(10, 5, 'OS', '2625', 'T'),
(11, 5, 'VB.NET', '3627', 'P'),
(12, 5, 'JAVA', '4629', 'T'),
(13, 5, 'CN', '3626', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `cse6`
--

CREATE TABLE `cse6` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse6`
--

INSERT INTO `cse6` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 6, 'CG', '6287', 'P'),
(2, 6, 'ASP.NET', '6226', 'P'),
(3, 6, 'IMTCN', '6218', 'T'),
(4, 6, 'BOM', '6666', 'T'),
(5, 6, 'PROJ', '3000', 'P'),
(6, 6, 'ASP.NET', '6206', 'T'),
(7, 6, 'IMTCN', '6248', 'P'),
(8, 6, 'NS', '6210', 'T'),
(9, 6, 'CG', '6217', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `reg` bigint(100) NOT NULL,
  `sem` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL,
  `dob` date NOT NULL,
  `class_rno` int(11) NOT NULL,
  `branch` text NOT NULL,
  `category` text NOT NULL,
  `mob` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `reg`, `sem`, `f_name`, `m_name`, `dob`, `class_rno`, `branch`, `category`, `mob`, `email`, `addr`, `gender`) VALUES
(1, 'Khushboo Dhiman', 170176202517, 6, 'Bhupinder Kumar', 'Rama Rani', '2002-04-07', 1053, 'Computer', 'General', 8528838574, 'khushboodhiman716@gmail.com', 'street no.15, vishkarma colony, main market, Ludhiana', 'female'),
(2, 'Jasmeen Kaur', 170176202513, 6, 'Brinderjit Singh', 'Jyoti', '2000-07-26', 1031, 'Computer', 'General', 9646810112, 'jasmeenkaursyali@gmail.com', 'Ludhiana', 'female'),
(3, 'Harpreet Kaur', 1701762025, 6, 'Sukhdeep Singh', 'unti', '2000-02-18', 1028, 'Computer', 'General', 987716617, 'preetkaur@gmail.com', 'Guru Nanak Colony, Ludhiana', 'female'),
(5, 'Harshmeet Singh', 170176202511, 6, 'Inderpreet Singh', 'Harvinder Kaur', '2001-06-19', 1029, 'Computer', 'General', 9915590048, 'h.r8360389542@gmail.com', '#24 sec24, Guru Gian Vihar Jawaddi Model Town, Ludhiana', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` int(11) NOT NULL,
  `branch` text NOT NULL,
  `reg` bigint(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `max_marks` int(11) NOT NULL,
  `rep` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `sem`, `month`, `year`, `branch`, `reg`, `marks`, `max_marks`, `rep`) VALUES
(6, 1, 'Nov', 2017, 'CSE', 170176202517, 715, 875, '0'),
(7, 2, 'May', 2018, 'CSE', 170176202517, 722, 850, '0'),
(8, 3, 'Nov', 2018, 'CSE', 170176202517, 730, 875, '0'),
(9, 4, 'May', 2019, 'CSE', 170176202517, 726, 850, '0'),
(10, 5, 'Nov', 2019, 'CSE', 170176202517, 850, 1000, '0'),
(11, 6, 'May', 2020, 'CSE', 170176202517, 800, 900, '0'),
(12, 1, 'Nov', 2017, 'CSE', 170176202513, 676, 875, '0'),
(13, 1, 'Nov', 2017, 'CSE', 1701762025, 718, 875, '0'),
(14, 2, 'May', 2018, 'CSE', 170176202513, 726, 850, '0'),
(15, 2, 'May', 2018, 'CSE', 1701762025, 711, 850, '0'),
(16, 3, 'Nov', 2018, 'CSE', 170176202513, 744, 875, '0'),
(17, 3, 'Nov', 2018, 'CSE', 1701762025, 737, 875, '0'),
(18, 4, 'May', 2019, 'CSE', 170176202513, 726, 850, '0'),
(19, 4, 'May', 2019, 'CSE', 1701762025, 709, 850, '0'),
(20, 5, 'Nov', 2019, 'CSE', 170176202513, 850, 1000, '0'),
(21, 5, 'Nov', 2019, 'CSE', 1701762025, 850, 1000, '0'),
(24, 6, 'May', 2020, 'CSE', 170176202513, 800, 900, '0'),
(25, 6, 'May', 2020, 'CSE', 1701762025, 800, 900, '0'),
(26, 1, 'Nov', 2017, 'CSE', 170176202511, 0, 0, '2355,2555'),
(27, 2, 'May', 2018, 'CSE', 170176202511, 0, 0, '2354'),
(28, 2, 'Nov', 2018, 'CSE', 170176202511, 650, 850, '0'),
(29, 3, 'Nov', 2018, 'CSE', 170176202511, 662, 875, '0'),
(30, 4, 'May', 2019, 'CSE', 170176202511, 0, 0, '0564'),
(31, 4, 'Nov', 2019, 'CSE', 170176202511, 612, 850, '0'),
(32, 1, 'Nov', 2019, 'CSE', 170176202511, 0, 0, '2355'),
(33, 5, 'Nov', 2019, 'CSE', 170176202511, 784, 1000, '0'),
(35, 1, 'May', 2020, 'CSE', 170176202511, 600, 875, '0'),
(36, 6, 'May', 2020, 'CSE', 170176202511, 800, 900, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse1`
--
ALTER TABLE `cse1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse2`
--
ALTER TABLE `cse2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse3`
--
ALTER TABLE `cse3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse4`
--
ALTER TABLE `cse4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse5`
--
ALTER TABLE `cse5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cse6`
--
ALTER TABLE `cse6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse1`
--
ALTER TABLE `cse1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cse2`
--
ALTER TABLE `cse2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cse3`
--
ALTER TABLE `cse3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cse4`
--
ALTER TABLE `cse4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cse5`
--
ALTER TABLE `cse5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cse6`
--
ALTER TABLE `cse6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
