-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 08:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codertimerdtbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `coder`
--

CREATE TABLE `coder` (
  `C_id` int(11) NOT NULL,
  `C_handle` varchar(20) DEFAULT NULL,
  `C_name` varchar(30) DEFAULT NULL,
  `C_password` varchar(15) DEFAULT NULL,
  `C_mail` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coder`
--

INSERT INTO `coder` (`C_id`, `C_handle`, `C_name`, `C_password`, `C_mail`) VALUES
(1, 'd_joker', 'Jahin Hoossain', 'jahin123', 'Jahin.hsn101@gmail.com'),
(2, 'abc', 'abcd efg', 'abc123', 'abc@abc'),
(3, 'maruf', 'Maruf Billah', 'maruf123', 'mbkhan535@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `R_id` int(11) NOT NULL,
  `C_id` int(11) NOT NULL,
  `P_name` varchar(50) DEFAULT NULL,
  `p_time_hour` varchar(10) DEFAULT NULL,
  `p_time_minute` varchar(10) NOT NULL,
  `p_time_second` varchar(10) NOT NULL,
  `p_type` varchar(50) DEFAULT NULL,
  `P_difficulty` varchar(7) DEFAULT NULL,
  `p_judge` varchar(20) DEFAULT NULL,
  `P_tries` int(11) DEFAULT NULL,
  `P_link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`R_id`, `C_id`, `P_name`, `p_time_hour`, `p_time_minute`, `p_time_second`, `p_type`, `P_difficulty`, `p_judge`, `P_tries`, `P_link`) VALUES
(1, 1, 'tesing problem', '0', '0', '8', 'testerType', '600', 'codeforces', 4, 'https://www.sitepoint.com/get-url-parameters-with-'),
(2, 1, 'tesing problem', '0', '0', '5', 'testerType', '600', 'codeforces', 4, 'https://www.sitepoint.com/get-url-parameters-with-'),
(3, 1, 'tesing problem', '0', '0', '4', 'testerType', '600', 'codeforces', 4, 'https://www.sitepoint.com/get-url-parameters-with-'),
(4, 3, 'tesing problem maruf', '0', '0', '20', 'testerType', '700', 'codeforces', 3, 'https://meet.google.com/ygr-bmde-mce?authuser=1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coder`
--
ALTER TABLE `coder`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`R_id`,`C_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coder`
--
ALTER TABLE `coder`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
