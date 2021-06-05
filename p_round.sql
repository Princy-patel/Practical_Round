-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 07:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_round`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_detail`
--

CREATE TABLE `e_detail` (
  `id` int(10) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_detail`
--

INSERT INTO `e_detail` (`id`, `ename`, `email`, `department`, `designation`, `salary`) VALUES
(1, 'kina', 'pa@gmail.com', 'comuter', 'CE', '20000'),
(2, 'kina', 'pa@gmail.com', 'it', 'CEO', '20000'),
(3, 'krinal', 'krinapatel@gmail.com', 'it', 'lead', '500000'),
(4, 'krinal', 'krinapatel@gmail.com', 'managmet', 'lead', '500000'),
(5, 'krinal', 'krinapatel@gmail.com', 'managmet', 'lead', '500000'),
(6, 'krinal', 'krinapatel@gmail.com', 'managmet', 'lead', '500000'),
(7, 'kina', 'pspatel@gmail.com', 'it', 'manager', '20000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e_detail`
--
ALTER TABLE `e_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e_detail`
--
ALTER TABLE `e_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
