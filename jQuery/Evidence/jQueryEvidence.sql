-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2022 at 02:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jQuery_evidence`
--
CREATE DATABASE IF NOT EXISTS `jQuery_evidence` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jQuery_evidence`;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` tinyint(2) NOT NULL,
  `district_name` varchar(15) NOT NULL,
  `division_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `division_id`) VALUES
(1, 'Dhaka', 1),
(2, 'Faridpur', 1),
(3, 'Gazipur', 1),
(4, 'Gopalganj', 1),
(5, 'Kishoreganj', 1),
(6, 'Madaripur', 1),
(7, 'Manikganj', 1),
(8, 'Narayanganj', 1),
(9, 'Narsingdi', 1),
(10, 'Rajbari', 1),
(11, 'Shariatpur', 1),
(12, 'Tangail', 1),
(13, 'Natore', 2),
(14, 'Rajshahi', 2),
(15, 'Sirajganj', 2),
(16, 'Pabna', 2),
(17, 'Bogura', 2),
(18, 'Chapainawabganj', 2),
(19, 'Naogaon', 2),
(20, 'Joypurhat', 2),
(21, 'Bagerhat', 3),
(22, 'Chuadanga', 3),
(23, 'Jashore', 3),
(24, 'Jhenaidah', 3),
(25, 'Khulna', 3),
(26, 'Kushtia', 3),
(27, 'Magura', 3),
(28, 'Meherpur', 3),
(29, 'Narail', 3),
(30, 'Satkhira', 3);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` tinyint(1) NOT NULL,
  `division_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`) VALUES
(1, 'Dhaka'),
(2, 'Rajshahi'),
(3, 'Khulna'),
(4, 'Chattogram');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'naymur@example.com', '7ce0359f12857f2a90c7de465f40a95f01cb5da9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
