-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 10:32 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xpeed_studio_buyer`
--
CREATE DATABASE IF NOT EXISTS `xpeed_studio_buyer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `xpeed_studio_buyer`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active,2=suspend',
  `created_by` int(11) NOT NULL,
  `created_ip` varchar(45) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  `updated_ip` varchar(45) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `status`, `created_by`, `created_ip`, `created_time`, `updated_by`, `updated_ip`, `update_time`) VALUES
(1, 'Shahaj', 'gshahaj@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '01913019820', 1, 1, '192.168.20', '2019-11-25 05:44:05', NULL, NULL, NULL),
(3, 'adcc', 'gshaha2j@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01913019821', 1, 1, '::1', '2019-11-25 16:18:28', NULL, NULL, NULL),
(4, 'adcc', 'gshaha3j@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01913019822', 1, 1, '::1', '2019-11-25 16:19:14', NULL, NULL, NULL),
(5, 'adcc', 'gshaha4j@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01913019823', 1, 1, '::1', '2019-11-25 16:19:56', NULL, NULL, NULL),
(6, 'adcc', 'gshaha5j@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01913019824', 1, 1, '::1', '2019-11-25 16:26:00', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
