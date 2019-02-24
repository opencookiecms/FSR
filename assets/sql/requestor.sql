-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2019 at 10:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsr`
--

-- --------------------------------------------------------

--
-- Table structure for table `requestor`
--

CREATE TABLE `requestor` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(150) DEFAULT NULL,
  `r_email` varchar(150) DEFAULT NULL,
  `r_date` date DEFAULT NULL,
  `r_customer` varchar(150) DEFAULT NULL,
  `r_pname` varchar(150) DEFAULT NULL,
  `r_ptype` varchar(150) DEFAULT NULL,
  `r_pdetails` text,
  `r_failure` varchar(150) DEFAULT NULL,
  `r_size` varchar(20) DEFAULT NULL,
  `r_special` text,
  `r_status` varchar(15) DEFAULT NULL,
  `r_timestap` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestor`
--

INSERT INTO `requestor` (`r_id`, `r_name`, `r_email`, `r_date`, `r_customer`, `r_pname`, `r_ptype`, `r_pdetails`, `r_failure`, `r_size`, `r_special`, `r_status`, `r_timestap`) VALUES
(9, 'SYED MOHD AFIQ SYED ABDUL RAHMAN', 'syed.m.afiq@outlook.com', '2019-02-07', 'OSRAM', 'Machine', 'Machine Type', 'Product Details', 'Failure', 'minm', 'Special', 'In Progress', '2019-02-24 00:19:44'),
(10, 'JJ', 'jj@email.com', '2019-03-03', 'TEST', 'Machine', 'Machine Type', 'Machine Problem', 'Failure', 'Minimum', 'Upgrade', 'In Progress', '2019-02-24 01:54:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requestor`
--
ALTER TABLE `requestor`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requestor`
--
ALTER TABLE `requestor`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
