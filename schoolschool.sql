-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2018 at 10:34 AM
-- Server version: 5.7.23
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(3, 'vamsi', 'vsr'),
(2, 'sai', 'sai');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` varchar(150) NOT NULL,
  `admin` varchar(150) NOT NULL,
  `student_name` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `admin`, `student_name`) VALUES
('6', 'sai', 'sai');

-- --------------------------------------------------------

--
-- Table structure for table `attendacne`
--

DROP TABLE IF EXISTS `attendacne`;
CREATE TABLE IF NOT EXISTS `attendacne` (
  `S.No` int(11) NOT NULL AUTO_INCREMENT,
  `RollNo` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Class` varchar(150) NOT NULL,
  `Sec` varchar(150) NOT NULL,
  PRIMARY KEY (`S.No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

DROP TABLE IF EXISTS `attendance_records`;
CREATE TABLE IF NOT EXISTS `attendance_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `attendence_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `student_name`, `roll_number`, `attendence_status`, `date`) VALUES
(1, 'sai', 'S105', 'Present', '2018-11-24'),
(2, 'vamsi', 'S106', 'Absent', '2018-11-24'),
(3, 'rajesh', 'S107', 'Absent', '2018-11-24'),
(4, 'Sai Vamsi', 'S109', 'Absent', '2018-11-24'),
(5, 'apoorva', 'S110', 'Absent', '2018-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE IF NOT EXISTS `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `student_name`, `roll_number`) VALUES
(1, 'John', '68'),
(3, 'Ponting', '26'),
(4, 'sai vamsi', '86');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `CNAME` varchar(150) NOT NULL,
  `CSEC` varchar(150) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CID`, `CNAME`, `CSEC`) VALUES
(1, 'VIII', 'B'),
(2, 'III', 'C'),
(5, 'V', 'A'),
(6, 'III', 'B'),
(7, 'I', 'A'),
(8, 'X', 'A'),
(9, 'VII', 'B'),
(10, 'I', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `complaints_to_principal`
--

DROP TABLE IF EXISTS `complaints_to_principal`;
CREATE TABLE IF NOT EXISTS `complaints_to_principal` (
  `ID` int(10) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `complaint` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaints_to_teacher`
--

DROP TABLE IF EXISTS `complaints_to_teacher`;
CREATE TABLE IF NOT EXISTS `complaints_to_teacher` (
  `ID` int(10) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `ENAME` varchar(150) NOT NULL,
  `ETYPE` varchar(150) NOT NULL,
  `EDATE` varchar(150) NOT NULL,
  `SESSION` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`EID`, `ENAME`, `ETYPE`, `EDATE`, `SESSION`, `CLASS`, `SUB`) VALUES
(1, 'Term Exam', 'II-Term', '14-08-2018', '10:30 AM - 12:30 PM', 'VIII', 'Tamil'),
(3, 'Term Exam', 'II-Term', '10-09-2018', '10:30 AM - 12:30 PM', 'III', 'English'),
(4, 'Term Exam', 'II-Term', '18-09-2018', '2:30 PM - 4:30 PM', 'V', 'Maths'),
(5, 'Term Exam', 'III-Term', '19-11-2018', '10:30 AM - 12:30 PM', 'VIII', 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

DROP TABLE IF EXISTS `fee`;
CREATE TABLE IF NOT EXISTS `fee` (
  `class` varchar(50) NOT NULL,
  `fee` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`class`, `fee`) VALUES
('L.K.G , U.K.G ', '10,000.00 Rs/-'),
('CLASS I , CLASS II , CLASS III  ', '15,000.00 Rs/-'),
('CLASS IV , CLASS V   ', '20,000.00 Rs/-'),
('CLASS V , CLASS VII , CLASS VIII   ', '25,000.00 Rs/-'),
('CLASS IX   ', '30,000.00 Rs/-'),
('CLASS X   ', '35,000.00 Rs/-');

-- --------------------------------------------------------

--
-- Table structure for table `hclass`
--

DROP TABLE IF EXISTS `hclass`;
CREATE TABLE IF NOT EXISTS `hclass` (
  `HID` int(11) NOT NULL AUTO_INCREMENT,
  `TID` int(11) NOT NULL,
  `CLA` varchar(150) NOT NULL,
  `SEC` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  PRIMARY KEY (`HID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hclass`
--

INSERT INTO `hclass` (`HID`, `TID`, `CLA`, `SEC`, `SUB`) VALUES
(6, 4, 'VIII', 'C', 'English'),
(7, 4, 'V', 'C', 'Social Science'),
(8, 4, 'X', 'C', 'English'),
(9, 4, 'VII', 'B', 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
CREATE TABLE IF NOT EXISTS `leaves` (
  `TID` int(10) NOT NULL,
  `Teacher_Name` varchar(30) NOT NULL,
  `Date_of_Request` varchar(20) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

DROP TABLE IF EXISTS `leave_requests`;
CREATE TABLE IF NOT EXISTS `leave_requests` (
  `TID` int(11) NOT NULL,
  `Teacher_Name` varchar(25) NOT NULL,
  `Date_of_Request` varchar(50) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`TID`, `Teacher_Name`, `Date_of_Request`, `Reason`, `Contact`, `status`) VALUES
(4, 'sai', '13-08-2018', 'sfcsdvfdv', '8106031946', 'Rejected'),
(4, 'sai', '18-07-2018', 'sister marraige', '8106031946', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `MID` int(11) NOT NULL AUTO_INCREMENT,
  `REGNO` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  `MARK` varchar(150) NOT NULL,
  `TERM` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`MID`, `REGNO`, `SUB`, `MARK`, `TERM`, `CLASS`) VALUES
(1, 'S101', 'Tamil', '95', 'I-Term', 'III'),
(2, 'S101', 'English', '65', 'II-Term', 'III'),
(3, 's104', 'Tamil', '100', 'I-Term', 'VIII'),
(4, 's104', 'Tamil', '80', 'I-Term', 'VIII'),
(5, 's104', 'Maths', '79', 'II-Term', 'VIII'),
(6, 's104', 'Hindi', '100', 'II-Term', 'VIII'),
(7, 'S105', 'Social Science', '95', 'I-Term', 'VIII'),
(8, 'S105', 'software engineering', '100', 'III-Term', 'VIII');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `TNAME` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `QUAL` varchar(150) NOT NULL,
  `SAL` varchar(150) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`TID`, `TNAME`, `TPASS`, `QUAL`, `SAL`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(1, 'ram', 'vsr', 'MCA', '15000', '9875641230', 'ram@gmail.com', 'Salem', 'staff/2.jpg'),
(2, 'bhanu', 'vsr', 'MBA', '15000', '9874561230', 'sam@gmail.com', 'salem', 'staff/3.jpg'),
(3, 'raviteja', 'vsr', 'MCA', '20000', '7989209650', 'ravi@gmail.com', '', ''),
(4, 'sai', 'sai', 'BCOM', '100000', '8106031946', '1234@gmail.com', 'asxascaxas', 'staff/b2.jpg'),
(5, 'vivek', 'vsr', 'B.A', '10000', '', '', '', ''),
(6, 'kaki', 'vsr', 'btech', '5000', 'NUL', 'NULL', 'NULL', 'NULL'),
(11, 'vamsi', 'vsr', 'MBA', '15000', '8106031946', 'vsai9594@gmail.com', 'NIIT UNIVERSITY\r\nNIIT UNIVERSITY', 'staff/home.jpg'),
(12, 'preetham', 'vsr', 'sports', '19000', 'NUL', 'NULL', 'NULL', 'NULL'),
(13, 'bhanu', 'vsr', 'bh', '122', 'NUL', 'NULL', 'NULL', 'NULL'),
(14, 'oleti', 'vsr', 'mba', '1200', '123456789', '1234@gmail.com', 'hyderabad', 'staff/home.jpg'),
(15, 'saivamsi', 'vsr', 'MBA', '15000', 'NUL', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RNO` varchar(150) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FNAME` varchar(150) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `GEN` varchar(150) NOT NULL,
  `PHO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `ADDR` text NOT NULL,
  `SCLASS` varchar(150) NOT NULL,
  `SSEC` varchar(150) NOT NULL,
  `SIMG` varchar(150) NOT NULL,
  `TID` int(11) NOT NULL,
  `SPASS` varchar(50) NOT NULL,
  `bus` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `RNO`, `NAME`, `FNAME`, `DOB`, `GEN`, `PHO`, `MAIL`, `ADDR`, `SCLASS`, `SSEC`, `SIMG`, `TID`, `SPASS`, `bus`) VALUES
(1, 'S101', 'Anitha', 'Ram', '17-10-2003', 'Female', '9874561230', 'ram@gmail.com', 'Salem', 'III', 'C', 'student/4.jpg', 1, 'vsr', 'No'),
(6, 'S105', 'sai', 'aadiyya', '16-03-2002', 'Male', '8106031946', 'iitsaivamsi@gmail.com', 'NIIT UNIVERSITY\r\nNIIT UNIVERSITY', 'VIII', 'B', 'student/banner.jpg', 4, 'sai', 'Yes'),
(7, 'S106', 'vamsi', 'sai', '18-11-2002', 'Male', '8106031946', 'iitsaivamsi@gmail.com', 'NIIT UNIVERSITY\r\nNIIT UNIVERSITY', 'X', 'C', 'student/1.jpg', 4, 'vsr', 'Yes'),
(8, 'S107', 'rajesh', 'Sai', '19-12-2001', 'Male', '8106031946', 'iitsaivamsi@gmail.com', 'NIIT UNIVERSITY\r\nNIIT UNIVERSITY', 'VIII', 'C', 'student/1.PNG', 4, 'vsr', 'No'),
(12, 'S109', 'Sai Vamsi', 'Sai', '-Month-', 'Male', '8106031946', 'iitsaivamsi@gmail.com', 'NIIT UNIVERSITY\r\nNIIT UNIVERSITY', 'VIII', 'C', 'student/banner.png', 4, 'vsr', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `st_leaves`
--

DROP TABLE IF EXISTS `st_leaves`;
CREATE TABLE IF NOT EXISTS `st_leaves` (
  `ID` int(11) NOT NULL,
  `Student_Name` varchar(100) NOT NULL,
  `Date_of_Request` varchar(30) NOT NULL,
  `Reason` varchar(150) NOT NULL,
  `Contact` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_leaves`
--

INSERT INTO `st_leaves` (`ID`, `Student_Name`, `Date_of_Request`, `Reason`, `Contact`) VALUES
(6, 'sai', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `st_leave_requests`
--

DROP TABLE IF EXISTS `st_leave_requests`;
CREATE TABLE IF NOT EXISTS `st_leave_requests` (
  `ID` int(10) NOT NULL,
  `Student_Name` varchar(150) NOT NULL,
  `Date_of_Request` varchar(30) NOT NULL,
  `Reason` varchar(150) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_leave_requests`
--

INSERT INTO `st_leave_requests` (`ID`, `Student_Name`, `Date_of_Request`, `Reason`, `Contact`, `status`) VALUES
(6, 'sai', '2-03-2019', '1', '8106031946', 'Accepted'),
(6, 'sai', '17-12-2018', '2', '8552526511', 'Rejected'),
(6, 'sai', '', '', '', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

DROP TABLE IF EXISTS `sub`;
CREATE TABLE IF NOT EXISTS `sub` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `SNAME` varchar(150) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SID`, `SNAME`) VALUES
(2, 'English'),
(3, 'Maths'),
(5, 'Social Science'),
(6, 'Hindi'),
(7, 'software engineering');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
