-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2016 at 02:52 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `assessment_id` int(11) NOT NULL,
  `assessment_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`assessment_id`, `assessment_name`) VALUES
(1, 'Physics Test I'),
(2, 'Chemistry Test'),
(3, 'Maths Test');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(40) NOT NULL,
  `batch_time` varchar(20) DEFAULT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`batch_id`, `batch_name`, `batch_time`, `class_id`) VALUES
(1, 'Programming Batch I', '10:00', 1),
(2, 'Programming Batch II', '12:00', 1),
(3, 'Semiconductors Batch I', '18:00', 2),
(4, 'Semiconductors Batch II', '19:00', 2),
(5, 'Telecommunications Batch I', '14:00', 2),
(6, 'Telecommunications Batch II', '16:00', 2),
(7, 'Biology Batch', '09:00', 3),
(8, 'Sanskrit Batch I', '10:30', 3),
(9, 'History', '09:30', 4),
(10, 'Mathematics', '08:00', 4),
(11, 'Drawing', '12:30', 5),
(12, 'EECS', '19:30', 6),
(13, 'Microcontrollers Batch', '07:30', 6),
(14, 'Construction Management', '18:30', 7),
(15, 'Batch I', '11:00', 8),
(16, 'Science', '17:30', 4),
(17, 'Geography', '14:00', 4),
(18, 'Marathi', '09:00', 5),
(19, 'Programming Batch III', '12:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `board_id` int(11) NOT NULL,
  `board_name` varchar(40) NOT NULL,
  `board_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`board_id`, `board_name`, `board_desc`) VALUES
(1, 'Primary Board', 'A board to take care of primary students'),
(2, 'Secondary Board', 'Secondary board is meant for the kids coming out of school'),
(3, 'Higher Secondary Board (H.S.B)', 'Board formed for higher studies'),
(4, 'Montesary Board', 'A board provisioned for small kids'),
(5, 'Demo Board', 'Just for the demo sake');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`Date`) VALUES
('2016-06-01'),
('2016-06-02'),
('2016-06-03'),
('2016-06-04'),
('2016-06-05'),
('2016-06-06'),
('2016-06-07'),
('2016-06-08'),
('2016-06-09'),
('2016-06-10'),
('2016-06-11'),
('2016-06-12'),
('2016-06-13'),
('2016-06-14'),
('2016-06-15'),
('2016-06-16'),
('2016-06-17'),
('2016-06-18'),
('2016-06-19'),
('2016-06-20'),
('2016-06-21'),
('2016-06-22'),
('2016-06-23'),
('2016-06-24'),
('2016-06-25'),
('2016-06-26'),
('2016-06-27'),
('2016-06-28'),
('2016-06-29'),
('2016-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(40) NOT NULL,
  `board_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `board_id`) VALUES
(1, 'Computer Science', 2),
(2, 'Electronics', 2),
(3, 'General', 2),
(4, 'Fourth Standard', 1),
(5, 'Fifth Standard', 1),
(6, 'Electrical Engineering', 3),
(7, 'Civil Engineering', 3),
(8, 'Games Class', 4),
(9, 'Production Engineering', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_first_name` varchar(20) NOT NULL,
  `student_last_name` varchar(20) DEFAULT NULL,
  `student_contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_first_name`, `student_last_name`, `student_contact`) VALUES
(1, 'Ram', 'Kishore', '9611686002'),
(2, 'Rishi ', 'Shah', '9611686067'),
(3, 'Rushit ', 'Mehta', '9611686002'),
(4, 'Kiran ', 'Javkar', '1111234567'),
(5, 'Mintu', 'Dutta', '9065786756'),
(6, 'suraj', 'nair', '89373737737'),
(7, 'Siddharth', 'Vora', '9821350649'),
(8, 'Bhabesh', 'Chandra', '9089786756'),
(9, 'Girish', 'Chandra', '9012386756'),
(10, 'Mintu', 'Dutta', '8089786756'),
(11, 'Bhabesh', 'Jain', '9089722256'),
(12, 'Pranav', 'Shah', '9089789880'),
(13, 'Kundan', 'Kumar', '2323786756'),
(14, 'Karan', 'Chandra', '9089786234'),
(15, 'Tushar', 'Shah', '9089744756'),
(16, 'Mayank', 'Khair', '9087686756'),
(17, 'Bhabesh', 'Bisht', '9089786756'),
(18, 'Ankit', 'Chandra', '9089786756'),
(19, 'Jay', 'Chandra', '9089786756'),
(20, 'Jay', 'Shah', '9089700756'),
(21, 'Rakesh', 'Roshan', '9876543217');

-- --------------------------------------------------------

--
-- Table structure for table `student_assessment`
--

CREATE TABLE `student_assessment` (
  `assessment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assessment`
--

INSERT INTO `student_assessment` (`assessment_id`, `student_id`, `status`) VALUES
(1, 2, 1),
(1, 5, 1),
(1, 6, 1),
(1, 11, 0),
(1, 15, 0),
(2, 1, 1),
(2, 3, 0),
(2, 12, 0),
(2, 19, 0),
(2, 20, 1),
(3, 1, 0),
(3, 2, 0),
(3, 10, 0),
(3, 18, 0),
(3, 19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_batch`
--

CREATE TABLE `student_batch` (
  `student_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_batch`
--

INSERT INTO `student_batch` (`student_id`, `batch_id`) VALUES
(1, 1),
(1, 14),
(2, 1),
(2, 10),
(3, 1),
(3, 13),
(4, 11),
(5, 10),
(6, 3),
(7, 5),
(8, 1),
(9, 1),
(10, 12),
(11, 6),
(12, 8),
(13, 7),
(14, 3),
(15, 4),
(16, 3),
(17, 7),
(18, 14),
(19, 11),
(20, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absentees`
--

CREATE TABLE `tbl_absentees` (
  `date` date DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absentees`
--

INSERT INTO `tbl_absentees` (`date`, `status`, `student_id`) VALUES
('2016-06-01', 'A', 2),
('2016-06-01', 'A', 4),
('2016-06-02', 'A', 5),
('2016-06-03', 'A', 6),
('2016-06-04', 'A', 2),
('2016-06-04', 'A', 7),
('2016-06-04', 'A', 10),
('2016-06-04', 'A', 17),
('2016-06-06', 'A', 19),
('2016-06-06', 'A', 8),
('2016-06-09', 'A', 20),
('2016-06-12', 'A', 1),
('2016-06-15', 'A', 3),
('2016-06-22', 'A', 9),
('2016-06-04', 'A', 11),
('2016-06-04', 'A', 12),
('2016-06-28', 'A', 12),
('2016-06-04', 'A', 13),
('2016-06-02', 'A', 13),
('2016-06-27', 'A', 14),
('2016-06-29', 'A', 15),
('2016-06-22', 'A', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `tutor_id` int(11) NOT NULL,
  `tutor_username` varchar(20) NOT NULL,
  `tutor_password` char(40) NOT NULL,
  `tutor_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`tutor_id`, `tutor_username`, `tutor_password`, `tutor_email`) VALUES
(1, 'demo', 'demo', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_assessment`
--
ALTER TABLE `student_assessment`
  ADD PRIMARY KEY (`assessment_id`,`student_id`);

--
-- Indexes for table `student_batch`
--
ALTER TABLE `student_batch`
  ADD PRIMARY KEY (`student_id`,`batch_id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`tutor_id`),
  ADD UNIQUE KEY `tutor_username` (`tutor_username`),
  ADD UNIQUE KEY `tutor_email` (`tutor_email`),
  ADD UNIQUE KEY `tutor_email_2` (`tutor_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
