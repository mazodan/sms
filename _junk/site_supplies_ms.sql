-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2020 at 04:36 AM
-- Server version: 10.3.20-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_supplies_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_logs`
--

CREATE TABLE `item_logs` (
  `id` int(11) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `equipment` text NOT NULL,
  `date_borrow` date NOT NULL,
  `date_return` date DEFAULT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_logs`
--

INSERT INTO `item_logs` (`id`, `full_name`, `equipment`, `date_borrow`, `date_return`, `remark`) VALUES
(1, 'Dan Mikko S. Mazo', 'Projector', '2020-01-16', '2020-01-16', 'update remark test'),
(2, 'Test', 'Test', '2020-01-14', '2020-01-16', 'remark is functioning'),
(3, 'Dan Mikko S. Mazo', 'Chalk', '2020-01-07', '2020-01-16', 'update remark test 2'),
(4, 'Geno', 'Ballpen', '2020-01-13', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `manipulator`
--

CREATE TABLE `manipulator` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `acct_type` int(10) NOT NULL,
  `photo` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manipulator`
--

INSERT INTO `manipulator` (`id`, `username`, `password`, `firstname`, `lastname`, `acct_type`, `photo`, `status`) VALUES
(920202, 'bry', '123', 'gg', 'gg', 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_logs`
--
ALTER TABLE `item_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manipulator`
--
ALTER TABLE `manipulator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_logs`
--
ALTER TABLE `item_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
