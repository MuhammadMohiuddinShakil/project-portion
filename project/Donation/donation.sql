-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 01:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_table`
--

CREATE TABLE `donation_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_table`
--

INSERT INTO `donation_table` (`id`, `name`, `contact`, `amount`) VALUES
(1, 'asd', 'asd@gmail.com', 1500),
(2, 'ad', 'ad@gmail.com', 1200),
(3, 'abc', 'abc@gmail.com', 500),
(4, 'a', 'a@gmail.com', 2000),
(5, 'b', 'b@gmail.com', 200),
(6, 'c', 'c@gmail.com', 4000),
(7, 'c', 'c@gmail.com', 4000),
(8, 'c', 'c@gmail.com', 4000),
(9, 'c', 'c@gmail.com', 4000),
(10, 'c', 'c@gmail.com', 4000),
(12, 'tamim', 'tamim@gmail.com', 50000),
(13, 'asdsad', '', 0),
(14, 'asdsad', '', 15000),
(15, 'asdsad', '', 15000),
(16, 'asdsad', '', 15000),
(17, 'asdsad', '', 15000),
(18, '123123', '', 12312321),
(19, '21321312', '', 12312312),
(20, '', '', 0),
(21, '', '', 0),
(22, '', '', 0),
(23, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_table`
--
ALTER TABLE `donation_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_table`
--
ALTER TABLE `donation_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
