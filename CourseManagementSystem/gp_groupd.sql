-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 12:34 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp_groupd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_password`, `gender`) VALUES
(7, 'admin', 'admin@gmail.com', '$2y$10$oAD01hxHQ2sJVV21Sq5qQ.e7KeLvdFNlG/5xzUAmOfaSJLWRm5fdW', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_surname` varchar(255) NOT NULL,
  `address_pr` varchar(255) NOT NULL,
  `address_tmp` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lcontact` int(11) NOT NULL,
  `cv` longblob NOT NULL,
  `pathname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courseleader_table`
--

CREATE TABLE `courseleader_table` (
  `courseLeader_id` int(11) NOT NULL,
  `courseLeader_email` varchar(255) NOT NULL,
  `courseLeader_password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `courseLeader_Address` varchar(255) NOT NULL,
  `courseLeader_pic` longblob NOT NULL,
  `courseLeader_picName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseleader_table`
--

INSERT INTO `courseleader_table` (`courseLeader_id`, `courseLeader_email`, `courseLeader_password`, `fullName`, `phoneNumber`, `courseLeader_Address`, `courseLeader_pic`, `courseLeader_picName`) VALUES
(1, 'cleader@gmail.com', '$2y$10$Tvd7IsWQt3VTPecXEOZBBui/Y48hc.AOelSSIwIjVMBsdNMYpWSPC', 'course leader', '190723019723', 'butwal', 0x636f757273654c65616465725f696d6167652f57494e5f32303138303431305f31325f34385f33375f50726f2e6a7067, 'WIN_20180410_12_48_37_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `courseLeader_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `courseLeader_id`) VALUES
(1, 'FSSS', 1),
(2, 'Group Project', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grade_per_student`
--

CREATE TABLE `grade_per_student` (
  `grade_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `grade` enum('No Grade','A+','A','A-','B+','B','B-','C+','C','C-','D+','D','D-','F') NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_per_student`
--

INSERT INTO `grade_per_student` (`grade_id`, `course_id`, `student_id`, `student_name`, `grade`, `remark`) VALUES
(3, 1, 1, 'abhinav@gmail.com', 'B+', 'asdsadasd'),
(4, 2, 1, 'abhinav@gmail.com', 'C', 'asdsadasd'),
(5, 1, 4, 'aasish@gmail.com', 'B+', 'asdsadasd'),
(11, 2, 4, 'aasish@gmail.com', 'A+', 'asdsadasd'),
(12, 1, 5, 'abhinav.kafle@gmail.com', 'A+', 'asdsadasd'),
(13, 2, 5, 'abhinav.kafle@gmail.com', 'B', 'asdsadasd'),
(15, 1, 3, 'sad@gmail.com', 'B-', 'asdsadasd'),
(16, 2, 3, 'sad@gmail.com', 'B-', 'asdsadasd'),
(17, 2, 4, 'new@gmail.com', 'A', 'asdsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_table`
--

CREATE TABLE `lecturer_table` (
  `lecturer_id` int(11) NOT NULL,
  `lecturer_email` varchar(255) NOT NULL,
  `lecturer_password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `lecturer_Address` varchar(255) NOT NULL,
  `lecturer_pic` longblob NOT NULL,
  `lecturer_picName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_table`
--

INSERT INTO `lecturer_table` (`lecturer_id`, `lecturer_email`, `lecturer_password`, `fullName`, `phoneNumber`, `lecturer_Address`, `lecturer_pic`, `lecturer_picName`) VALUES
(1, 'lect@gmail.com', '$2y$10$vHDAd1Wa2Nrpb6A0Q.e7cuokD2Yo8.e9JB8XvP4PcFxEuoxZhwnqS', 'lecturer', '7812378123', 'kathmandu', 0x6c656374757265725f696d6167652f57494e5f32303138303431305f31315f35335f35315f50726f2e6a7067, 'WIN_20180410_11_53_51_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_approve_by_admin`
--

CREATE TABLE `student_approve_by_admin` (
  `approve_id` int(11) NOT NULL,
  `approve_student_id` int(11) NOT NULL,
  `approve_email` varchar(255) NOT NULL,
  `approve_password` varchar(255) NOT NULL,
  `approve_fullName` varchar(255) NOT NULL,
  `approve_phoneNumber` varchar(255) NOT NULL,
  `approve_student_Address` varchar(255) NOT NULL,
  `approve_student_pic` longblob NOT NULL,
  `approve_student_picName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(11) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `student_Address` varchar(255) NOT NULL,
  `student_pic` longblob NOT NULL,
  `student_picName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_id`, `student_email`, `student_password`, `fullName`, `phoneNumber`, `student_Address`, `student_pic`, `student_picName`) VALUES
(4, 'new@gmail.com', '$2y$10$9fygdN2A24BeIymX4KHnMe3n1mTFwByWpD0mt3RmYt/WAauuBQfTS', 'abc', '1234', 'ktm', 0x73747564656e745f696d6167652f6d6f64756c652e706e67, 'module.png'),
(7, 'sandeep@gmail.com', '$2y$10$YiPd5qIQRszKhawP4x1AHOkQ9jSxBWs4sK/Uw7ISFN8h1a2sqR2oi', 'Sandeep Shrestha', '9834567897', 'Satungal', 0x2e2e2f73747564656e742f73747564656e745f696d6167652f6173736573736d656e742e706e67, 'assessment.png'),
(8, 'magar@gmail.com', '$2y$10$aEy26NNV2psJCfI.BbKnuuIUGbQiPNFBa/gdBi.qMj57XXzPoSBWK', 'Aashish Tangnami Magar', '9818950113', 'Kalanki', 0x2e2e2f73747564656e742f73747564656e745f696d6167652f706572736f6e2e706e67, 'person.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `us_firstname` varchar(255) NOT NULL,
  `us_lastname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `us_email` varchar(255) NOT NULL,
  `us_address` varchar(255) NOT NULL,
  `us_gender` varchar(255) NOT NULL,
  `us_contact` int(11) NOT NULL,
  `cv` longblob NOT NULL,
  `pathname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `us_firstname`, `us_lastname`, `dob`, `us_email`, `us_address`, `us_gender`, `us_contact`, `cv`, `pathname`) VALUES
(5, 'Abinav', 'Kafle', '0000-00-00', 'kafle@gmail.com', 'Nami', 'male', 985672378, '', ''),
(6, 'aashish', 'tangnami', '0000-00-00', 'magar@gmail.com', 'kalanki', 'male', 988950113, 0x35616439303166653261393565392e30383139393730332e646f63, '../CV/5ad901fe2a95e9.08199703.doc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseleader_table`
--
ALTER TABLE `courseleader_table`
  ADD PRIMARY KEY (`courseLeader_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `grade_per_student`
--
ALTER TABLE `grade_per_student`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `lecturer_table`
--
ALTER TABLE `lecturer_table`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `student_approve_by_admin`
--
ALTER TABLE `student_approve_by_admin`
  ADD PRIMARY KEY (`approve_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courseleader_table`
--
ALTER TABLE `courseleader_table`
  MODIFY `courseLeader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grade_per_student`
--
ALTER TABLE `grade_per_student`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lecturer_table`
--
ALTER TABLE `lecturer_table`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_approve_by_admin`
--
ALTER TABLE `student_approve_by_admin`
  MODIFY `approve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
