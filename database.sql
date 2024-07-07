-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/

-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 07:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company` varchar(30) NOT NULL,
  `balance` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company`, `balance`) VALUES
('CARZONE', 6000);
-- --------------------------------------------------------

--
-- Table structure for table `invoiceno`
--

CREATE TABLE `invoiceno` (
  `invoiceno` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoiceno`
--

INSERT INTO `invoiceno` (`invoiceno`) VALUES
(2109);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `sno` int(5) NOT NULL,
  `date` date NOT NULL,
  `vehicle` varchar(15) NOT NULL,
  `too` varchar(20) NOT NULL,
  `advance` int(5) NOT NULL,
  `balance` int(5) NOT NULL,
  `remark` varchar(30) NOT NULL,
  `advancetype` varchar(20) NOT NULL,
  `cashmode` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `bill` varchar(20) NOT NULL,
  `no` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `vehicle` (
  `vehicle` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle`) VALUES
('TN-18-AA-3787'),
('TN-38-AF-3129'),
('TN-59-AQ-7617'),
('TN-59-BF-9919'),
('TN-49-X-2255');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD UNIQUE KEY `company` (`company`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD UNIQUE KEY `vehicle` (`vehicle`),
  ADD UNIQUE KEY `vehicle_2` (`vehicle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
