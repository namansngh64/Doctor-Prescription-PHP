-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 02:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project3`
--

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_sex` char(1) NOT NULL,
  `date` date NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_strength` varchar(255) NOT NULL,
  `m_dose` varchar(255) NOT NULL,
  `m_duration` varchar(255) NOT NULL,
  `extra` text NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `p_name`, `p_age`, `p_sex`, `date`, `m_name`, `m_strength`, `m_dose`, `m_duration`, `extra`, `ref_id`) VALUES
(1, 'Sumit', 20, 'M', '2020-07-01', 'Paracetamol', '650mg', '1-0-1', '3 days', 'Khaliyo re yaad se', 1212121212),
(2, 'aaaaaa', 32, 'F', '2020-07-08', 'Calpol', '500mg', '1-1-1', '3days', 'pta ni dekh liyo', 1212121213);

-- --------------------------------------------------------

--
-- Table structure for table `prescription1`
--

CREATE TABLE `prescription1` (
  `ID` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_age` int(3) NOT NULL,
  `p_sex` char(1) NOT NULL,
  `date` date NOT NULL,
  `presc` text NOT NULL,
  `ref_id` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription1`
--

INSERT INTO `prescription1` (`ID`, `p_name`, `p_age`, `p_sex`, `date`, `presc`, `ref_id`) VALUES
(1, 'Sumit', 20, 'M', '2020-07-01', 'Paracetamol 650mg 2 times a day\r\nand disprin 5 times a day\r\nsdfsdgsdfg', 1212121212),
(2, 'aaaaaaaa', 20, 'F', '2020-07-08', 'kuch bhio krle', 1212121213),
(3, 'asmjdba', 8, 'F', '2020-07-01', 'akldnajn,dajdna,jdna,nsd', 1212121214),
(4, 'akjsdnasjkdn', 11, 'M', '2020-07-30', 'ljnhakjsdbnkasjndkasjndjkasndjkasjkdnasjkdnjkasndjkasbndjkasnjkdnasjkdnjkasndkjasnd', 6965394834),
(5, 'Test', 19, 'M', '2020-07-30', 'asuodhaskjdnhasjkhd\r\naslkdjasjklfndkljfsdklfa\r\ndaslkfadsklfnadlkfja', 8945470105),
(6, 'test2', 78, 'F', '2020-07-30', 'kjansdkjasndkansdljn\r\na.djnas kljn.\r\nkajsndjasnd', 9881342264),
(7, 'aaa', 19, 'M', '2020-07-30', '89kuahsdkjashdjkahdkjh', 8904258313),
(8, 'Naman', 90, 'M', '2020-09-12', 'adasd adas das a a', 2884962852);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ref_id` (`ref_id`);

--
-- Indexes for table `prescription1`
--
ALTER TABLE `prescription1`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ref_id` (`ref_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription1`
--
ALTER TABLE `prescription1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
