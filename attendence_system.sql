-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 02:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendence_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `attendence_status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `student_name`, `roll_number`, `attendence_status`, `date`) VALUES
(1, 'Ponting', '26', 'Present', '2017-08-10'),
(2, 'Ponting', '26', 'Present', '2017-08-10'),
(7, 'Ponting', '26', 'Present', '2017-08-13'),
(8, 'Ponting', '26', 'Present', '2017-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `student_name`, `roll_number`) VALUES
(1, 'John', '68'),
(3, 'Ponting', '26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
