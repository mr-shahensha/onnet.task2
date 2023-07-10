-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 02:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task2`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sl` int(11) NOT NULL,
  `stud_id` varchar(11) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sl`, `stud_id`, `subject_id`, `marks`) VALUES
(1, 'st1', 'sb1', 50),
(2, 'st1', 'sb2', 90),
(3, 'st1', 'sb3', 40),
(4, 'st1', 'sb4', 85),
(5, 'st2', 'sb1', 98),
(6, 'st2', 'sb2', 73),
(7, 'st2', 'sb3', 86),
(8, 'st2', 'sb4', 93),
(9, 'st3', 'sb1', 88),
(10, 'st3', 'sb2', 99),
(11, 'st3', 'sb3', 10),
(12, 'st3', 'sb4', 100),
(13, 'st4', 'sb1', 99),
(14, 'st4', 'sb2', 100),
(15, 'st4', 'sb3', 98),
(16, 'st4', 'sb4', 96),
(17, 'st5', 'sb1', 42),
(18, 'st5', 'sb2', 31),
(19, 'st5', 'sb3', 15),
(20, 'st5', 'sb4', 23),
(21, 'st6', 'sb1', 33),
(22, 'st6', 'sb2', 98),
(23, 'st6', 'sb3', 75),
(24, 'st6', 'sb4', 75);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sl` int(11) NOT NULL,
  `sid` varchar(11) NOT NULL,
  `student_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sl`, `sid`, `student_name`) VALUES
(1, 'st1', 'harashit ghosh'),
(2, 'st2', 'shahensha alam'),
(3, 'st3', 'sourav de'),
(4, 'st4', 'bishankh tiwari'),
(5, 'st5', 'snigdha bhattacharjee'),
(6, 'st6', 'mark zuckerberg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sl` int(11) NOT NULL,
  `sid` varchar(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `total_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sl`, `sid`, `subject_name`, `total_marks`) VALUES
(1, 'sb1', 'bengali', 100),
(2, 'sb2', 'hindi', 100),
(3, 'sb3', 'mathametics', 100),
(4, 'sb4', 'physics', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
