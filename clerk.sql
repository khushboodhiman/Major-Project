-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 02:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

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
CREATE DATABASE IF NOT EXISTS `clerk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `clerk`;

-- --------------------------------------------------------

--
-- Table structure for table `cse1`
--

CREATE TABLE `cse1` (
  `id` int(100) NOT NULL,
  `sem` int(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse1`
--

INSERT INTO `cse1` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 1, 'BIT', 983, 'P'),
(2, 1, 'PHY', 2355, 'T'),
(3, 1, 'WS', 3962, 'P'),
(4, 1, 'CS', 1151, 'P\r\n'),
(5, 1, 'CHEM', 2555, 'T'),
(6, 1, 'CHEM', 3555, 'P\r\n'),
(7, 1, 'CS', 151, 'T'),
(8, 1, 'MATHS', 2455, 'T'),
(9, 1, 'PHY', 3355, 'P'),
(10, 1, 'DRW', 2655, 'T');

-- --------------------------------------------------------

--
-- Table structure for table `cse2`
--

CREATE TABLE `cse2` (
  `id` int(100) NOT NULL,
  `sem` int(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse2`
--

INSERT INTO `cse2` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 2, 'PHY', 2154, 'T'),
(2, 2, 'BE', 664, 'T'),
(3, 2, 'BEE', 3064, 'P'),
(4, 2, 'BEE', 64, 'T'),
(5, 2, 'MATHS', 2354, 'T'),
(6, 2, 'CS', 3051, 'P'),
(7, 2, 'WS', 9362, 'P'),
(8, 2, 'PHY', 3154, 'P'),
(9, 2, 'CS', 2051, 'T'),
(10, 2, 'BE', 2664, 'P'),
(11, 2, 'DTP', 9962, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `cse5`
--

CREATE TABLE `cse5` (
  `id` int(100) NOT NULL,
  `sem` int(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse5`
--

INSERT INTO `cse5` (`id`, `sem`, `sub`, `code`, `type`) VALUES
(1, 5, 'VB.NET', 3627, 'P'),
(2, 5, 'OST', 3629, 'P'),
(3, 5, 'PROJ', 3333, 'P'),
(4, 5, 'CPI', 2620, 'T'),
(5, 5, 'CN', 2626, 'T'),
(6, 5, 'TRAINING', 4444, 'P\r\n'),
(7, 5, 'CN', 3626, 'P'),
(8, 5, 'OS', 3625, 'P\r\n'),
(9, 5, 'OST', 2629, 'T'),
(10, 5, 'VB.NET', 2627, 'T'),
(11, 5, 'CPI', 3620, 'P'),
(12, 5, 'OS', 2625, 'T\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `reg` bigint(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sem` int(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `class_rno` int(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` bigint(100) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `reg`, `fname`, `sem`, `course`, `class_rno`, `address`, `email`, `mob`, `gender`) VALUES
(2, 'Khushboo Dhiman', 170176202517, 'Bhupinder Kumar', 5, 'Computer', 1053, 'jdfvnhfdakjv', 'khushboodhiman716@gmail.com', 8528838574, 'female'),
(3, 'Arshpreet Singh', 170176202494, 'Gurpreet Singh', 5, 'Computer', 1013, 'dsjncf', 'arshpreet939@yahoo.com', 7508528383, 'male'),
(4, 'rajveer kaur', 170179570768, 'gurcharan singh', 5, 'computer', 1091, 'dehlon', 'rajveerkaur@gmail.com', 9592243146, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `sem` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `reg` bigint(100) NOT NULL,
  `marks` int(100) DEFAULT NULL,
  `rep` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `sem`, `type`, `month`, `year`, `reg`, `marks`, `rep`) VALUES
(66, 5, 'regular', 'Nov', '2019', 170176202517, 12, 0),
(67, 5, 'regular', 'Nov', '2019', 170176202494, 121, 0),
(68, 5, 'regular', 'Nov', '2019', 170179570768, 212, 0),
(69, 5, 'regular', 'Nov', '2019', 170176202517, 524, 3627),
(70, 5, 'regular', 'Nov', '2019', 170176202517, 524, 3333),
(71, 5, 'regular', 'Nov', '2019', 170176202517, 5241, 3629),
(72, 5, 'regular', 'Nov', '2019', 170176202517, 5241, 3333),
(73, 5, 'regular', 'Nov', '2019', 170176202517, 5241, 2620),
(74, 5, 'regular', 'Nov', '2019', 170176202494, 0, 3333),
(75, 5, 'regular', 'Nov', '2019', 170176202517, 0, 3627),
(76, 5, 'regular', 'Nov', '2019', 170176202494, 0, 3627),
(77, 5, 'regular', 'Nov', '2019', 170179570768, 0, 3627),
(78, 5, 'regular', 'Nov', '2019', 170176202517, 121, 0),
(79, 5, 'regular', 'Nov', '2019', 170176202494, 212, 0),
(80, 5, 'regular', 'Nov', '2019', 170179570768, 2, 0),
(81, 5, 'regular', 'Nov', '2019', 170176202517, 121, 0),
(82, 5, 'regular', 'Nov', '2019', 170176202494, 212, 0),
(83, 5, 'regular', 'Nov', '2019', 170179570768, 2, 0);

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
-- Indexes for table `cse5`
--
ALTER TABLE `cse5`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cse2`
--
ALTER TABLE `cse2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cse5`
--
ALTER TABLE `cse5`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
