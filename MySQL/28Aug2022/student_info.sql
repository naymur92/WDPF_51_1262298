-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2022 at 02:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf51`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stud_id` int(11) NOT NULL,
  `stud_code` int(11) DEFAULT NULL,
  `stud_name` varchar(30) DEFAULT NULL,
  `subject` varchar(15) DEFAULT NULL,
  `marks` tinyint(3) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stud_id`, `stud_code`, `stud_name`, `subject`, `marks`, `phone`) VALUES
(1, 101, 'Mark', 'English', 68, '34545236987'),
(2, 102, 'Joseph', 'Physics', 70, '98765435659'),
(3, 103, 'John', 'Maths', 70, '14523698745'),
(4, 104, 'Barack', 'Maths', 90, '25632587456'),
(5, 105, 'Rinky', 'Maths', 85, '85745823654'),
(6, 106, 'Adam', 'Science', 92, '79642256864'),
(7, 107, 'Andrew', 'Science', 83, '56742437579'),
(8, 108, 'Brayan', 'Science', 85, '75234165470'),
(9, 110, 'Alexandar', 'Bioligy', 67, '2347346438');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
