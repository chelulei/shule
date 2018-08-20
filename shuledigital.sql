-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 03:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shuledigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, 'noel.titus', '2016-10-24 09:12:05', 'Add Class Form 6'),
(2, 'noel.titus', '2016-10-24 09:12:58', 'Edit Class Form 6'),
(3, 'noel.titus', '2016-10-24 09:15:07', 'Add Student aaa bbb'),
(4, 'noel.titus', '2016-10-24 09:15:36', 'Updated Student aaa bbb'),
(5, 'noel.titus', '2016-10-24 09:17:50', 'Add Student buel bol'),
(6, 'noel.titus', '2016-10-24 09:23:17', 'Add User abdul.hemedy');

-- --------------------------------------------------------

--
-- Table structure for table `aprjun`
--

CREATE TABLE `aprjun` (
  `aprjun_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aprjun`
--

INSERT INTO `aprjun` (`aprjun_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(255) NOT NULL,
  `student` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `day`, `student`, `class_id`, `status`, `remarks`) VALUES
(89, '2018-08-08', 'Morning', 14, 34, 'Present', ''),
(90, '2018-08-08', 'Morning', 15, 34, 'Present', ''),
(91, '2018-08-02', 'Morning', 14, 34, 'Present', ''),
(92, '2018-08-02', 'Morning', 15, 34, 'Present', ''),
(93, '2018-08-09', ' Afternoon', 17, 38, 'Present', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classId` int(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Classteacher` int(11) NOT NULL,
  `Nostudents` int(50) NOT NULL,
  `students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classId`, `Class`, `Classteacher`, `Nostudents`, `students`) VALUES
(38, 'english 11', 3, 40, 1),
(41, 'cosmas', 3, 777, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Description` text NOT NULL,
  `Audience` varchar(255) NOT NULL,
  `Venue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_id`, `Title`, `Start`, `End`, `Description`, `Audience`, `Venue`) VALUES
(2, 'josken', '2018-08-06', '2018-08-06', '', 'All', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(11) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam`, `term`, `class`, `subject`, `date`) VALUES
(15, 'exam 7', 'Term 2', 38, 0, '2018-08-21'),
(16, 'exam 10', 'Term 1', 38, 5, '2018-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `giveitems`
--

CREATE TABLE `giveitems` (
  `id` int(50) NOT NULL,
  `date` date NOT NULL,
  `item` varchar(50) NOT NULL,
  `quanitity` int(50) NOT NULL,
  `givento` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giveitems`
--

INSERT INTO `giveitems` (`id`, `date`, `item`, `quanitity`, `givento`, `comment`) VALUES
(1, '0000-00-00', '', 0, '', ''),
(2, '0000-00-00', '', 0, '', 'jdhskjhjk'),
(3, '2018-07-27', '', 0, 'Deputy Principal', 'big pall bens'),
(4, '2018-07-27', 'ndjsbjkfb', 0, 'Principal', 'for official use only ');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `gradeid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` int(11) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`gradeid`, `user`, `student`, `year`, `term`, `subject`, `exam`, `score`) VALUES
(4, 3, 12, '2018', 'Term2', 0, 'midterm', 70),
(5, 3, 17, '2018', 'Term 3', 0, 'midterm', 70),
(7, 3, 11, '2017', 'Term 1', 5, 'midterm', 80);

-- --------------------------------------------------------

--
-- Table structure for table `gradingsystem`
--

CREATE TABLE `gradingsystem` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `low_mark` varchar(50) NOT NULL,
  `high_mark` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aggregate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gradingsystem`
--

INSERT INTO `gradingsystem` (`id`, `user`, `subject`, `low_mark`, `high_mark`, `createdon`, `aggregate`) VALUES
(1, 17, '5', ' 80', 60, '2018-08-18 23:31:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `InventIdNo` int(50) NOT NULL,
  `Date` date NOT NULL,
  `Itemname` varchar(50) NOT NULL,
  `Totalcost` int(50) NOT NULL,
  `ItemGivenOut` int(50) NOT NULL,
  `Uncounted` int(50) NOT NULL,
  `Remainingstock` int(50) NOT NULL,
  `Reorderstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemsIdno` int(50) NOT NULL,
  `Date` date NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Unitprice` int(50) NOT NULL,
  `Total` int(50) NOT NULL,
  `Person` varchar(50) NOT NULL,
  `Receipt` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemsIdno`, `Date`, `Productname`, `Quantity`, `Unitprice`, `Total`, `Person`, `Receipt`, `Description`) VALUES
(10, '2018-08-19', 'pencil', 50, 10, 500, 'Principal', 'drivers envc.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `leaving`
--

CREATE TABLE `leaving` (
  `leavingid` int(50) NOT NULL,
  `Student` int(11) NOT NULL,
  `activities` text NOT NULL,
  `remarks` text NOT NULL,
  `lev_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaving`
--

INSERT INTO `leaving` (`leavingid`, `Student`, `activities`, `remarks`, `lev_date`) VALUES
(8, 12, 'nnnn', 'mikeeee', '2019-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `medic_id` int(11) NOT NULL,
  `Student` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Report` varchar(255) NOT NULL,
  `Action` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `User` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`medic_id`, `Student`, `Date`, `Report`, `Action`, `description`, `User`) VALUES
(9, 11, '2018-08-08', 'injection', 'inject', ' vv', 2);

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `place_id` int(11) NOT NULL,
  `Student` int(11) NOT NULL,
  `Start_date` date NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Class` int(11) NOT NULL,
  `Date_upto` date NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`place_id`, `Student`, `Start_date`, `Position`, `Class`, `Date_upto`, `Description`) VALUES
(1, 11, '2018-08-02', 'Dorm Captain', 34, '2018-08-21', '                                             lorem                                                                                                                                                               ');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `closing` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `takenby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `item`, `closing`, `description`, `date`, `takenby`) VALUES
(1, 'name', 6, 'jihkjhk', '2018-07-16', 'john'),
(2, 'mnhbkj', 7, 'jljhlkjlkjl;kpo', '2018-07-19', 'kim');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `adm_No` int(11) NOT NULL,
  `Surname` varchar(11) NOT NULL,
  `Firstname` varchar(11) NOT NULL,
  `Middlename` varchar(11) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Homeaddress` varchar(50) NOT NULL,
  `Parentname` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Formerschool` varchar(50) NOT NULL,
  `Entrymarks` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Activities` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  `Suspension` varchar(255) NOT NULL DEFAULT 'suspend'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`adm_No`, `Surname`, `Firstname`, `Middlename`, `Dateofbirth`, `Gender`, `Class`, `Homeaddress`, `Parentname`, `Phone`, `Email`, `Formerschool`, `Entrymarks`, `date`, `Activities`, `Remarks`, `Suspension`) VALUES
(11, 'mike', 'jos', 'josken', '2018-08-08', 'Male', '41', '550', 'josken', '49994944', 'jos@yahoo.com', 'kipkoror', 500, '2018-08-20 01:19:02', '', '', 'suspend'),
(12, 'bomori', 'bomori', 'josken', '2018-08-22', 'Male', '41', '400', 'josken', '6666', 'jos@yahoo.com', 'kipkoror', 6000, '2018-08-20 01:19:04', '', '', 'suspend'),
(13, 'chebochok', 'joskeni', 'daniel', '2018-08-14', 'Male', '32', '200b', 'josken', '67899', 'jos@yahoo.com', 'kipkoror', 600, '0000-00-00 00:00:00', '', '', ''),
(14, 'josken', 'bomori', 'josken', '2018-08-09', 'Male', '34', 'ggg', 'bbbb', '888888888', 'jos@gmail.com', 'ccccc', 77, '0000-00-00 00:00:00', '', '', ''),
(15, 'bomori', 'sikilai', 'dan', '2018-08-14', 'Male', '34', '300b', 'mike', '29999', 'jos@gmail.com', 'kk', 600, '0000-00-00 00:00:00', '', '', ''),
(16, 'new student', 'new', 'new', '2018-08-08', 'Female', '36', '200b', 'new parent', '00000', 'new@gmail.com', 'nairo', 490, '2018-08-12 16:00:00', '', '', ''),
(17, 'mike', 'mike', 'mike', '2018-08-01', 'Female', '38', 'mike', 'mike', '7777', 'jos@yahoo.com', 'gggg', 800, '2018-08-20 01:18:58', '', '', 'suspended');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubIdNo` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(2555) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Term` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubIdNo`, `Name`, `Code`, `Type`, `Description`, `Class`, `Term`) VALUES
(5, 'prono', '666', 'Term 2', '                 lorem                            ', '34', 'Term 1'),
(8, 'bb', '99', 'Elective Subject', 'bbbb', '35', 'Term 2'),
(10, 'Seceretary', '77', 'Term 1', '                   lorem                          ', '38', 'Term 1'),
(12, 'mike', '888', 'General Subject', '8888', '41', 'Term 3');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Idno` int(50) NOT NULL,
  `TSC_No` int(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Homeaddress` varchar(50) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Classes` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `DateEmp` date NOT NULL,
  `YearsExp` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Resume` int(20) NOT NULL,
  `Salary` int(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Idno`, `TSC_No`, `Surname`, `Firstname`, `Middlename`, `Dateofbirth`, `Gender`, `Homeaddress`, `Phone`, `Classes`, `Designation`, `DateEmp`, `YearsExp`, `Email`, `Resume`, `Salary`, `Date`, `Status`) VALUES
(1, 2147483647, 'mike', 'mike', 'mike', '2002-12-31', 'Male', 'dhsfh', 2147483647, '45', 'Deputy Principal', '2018-07-02', '20', 'hdfs@gmail.com', 0, 50000, '2018-08-18 07:14:37', ''),
(2, 17371718, 'home', 'hdhsfdf', 'dfdsfajshfd', '1992-12-02', 'Female', 'hjdgash', 90934289, '555', 'Deputy Principal', '2018-07-18', '555', 'dshj@gmail.com', 0, 34000, '2018-08-19 03:52:52', ''),
(3, 123123, 'jshjkjkfdskk', 'djksndfkj', 'mkdsjk', '2012-12-12', 'Female', 'jkdjsjk', 939009484, '', 'Teacher', '0000-00-00', '', 'jdskj@gmail.com', 0, 0, '2018-08-13 11:59:44', ''),
(4, 191393923, 'rono', 'kim', 'kem', '1992-12-12', 'Male', 'kimoi', 90382094, '4', 'Principal', '0000-00-00', '', 'kimoi@gmail.com', 0, 34000, '2018-08-13 11:59:44', ''),
(5, 12334455, 'yhghhihyg', 'hgguhuytwewwe', 'hbgjhjkh', '0993-12-21', 'Male', 'dffghhhh', 2147483647, '34', 'Principal', '0000-00-00', '', 'ghhjkkj@gmail.com', 0, 34000, '2018-08-13 11:59:44', ''),
(6, 0, 'hello', 'hello', 'hello', '1998-12-12', 'Female', 'hello', 2147483647, '2', 'Deputy Principal', '0000-00-00', '', 'hello@gmail.com', 0, 23400, '2018-08-13 11:59:44', 'Active'),
(7, 555, 'ptum', 'ptum', 'potum', '2018-07-12', 'Female', 'RHFD', 2147483647, '8', 'Principal', '2018-07-11', '99', 'NDSD@GMAIl.com', 0, 8000, '2018-08-13 11:59:44', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Login` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `Firstname`, `Middlename`, `Surname`, `Phone`, `Email`, `password`, `role`, `status`, `date`, `Login`) VALUES
(3, 'teach', 'mike', 'mike', 'mike', '556788888', 'jos@yahoo.com', '1234', 'Deputy Principal', '', '2018-08-19 23:25:58', '0000-00-00'),
(13, 'sec', 'Grace', 'Towett', 'koikeldo', '073465729', 'koikeldo@gmail.com', '1234', 'Secretary', 'active', '2018-08-18 05:00:13', '0000-00-00'),
(8, 'towet', 'sarah', 'chepwogen', 'Towett', '099271398', 'hdsdgfh@gmail.com', '1234', 'Deputy Principal', '', '2018-08-20 00:48:09', '0000-00-00'),
(10, '', 'Joan Cherono', 'menona', 'munene', '0930210104', 'menene@gmail.com', '', 'Teacher', 'active', '2018-08-13 12:22:20', '0000-00-00'),
(14, 'AkChirchir', 'Amos', 'kiprono', 'Chirchir', '97324768721', 'kiprono@gmail.com', '8ab7bbdf01a24e988c50c4cfe9557814', 'Deputy Principal', 'active', '2018-08-19 23:25:23', '0000-00-00'),
(20, 'jpmike', 'josken', 'prono', 'mike', '072485854728', 'jos@yahoo.com', '30269022e9d8f51beaabb52e5d0de2b7', 'Parent', 'active', '2018-08-20 00:52:57', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `groupid` int(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`groupid`, `role`, `Description`) VALUES
(1, 'Teacher', 'Teacher'),
(2, 'Seceretary', 'Secretary'),
(3, 'Teacher', 'Teacher'),
(5, 'Parent', 'Parent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `giveitems`
--
ALTER TABLE `giveitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`gradeid`);

--
-- Indexes for table `gradingsystem`
--
ALTER TABLE `gradingsystem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`InventIdNo`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemsIdno`);

--
-- Indexes for table `leaving`
--
ALTER TABLE `leaving`
  ADD PRIMARY KEY (`leavingid`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`medic_id`);

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`adm_No`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubIdNo`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Idno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`groupid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `giveitems`
--
ALTER TABLE `giveitems`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `gradeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gradingsystem`
--
ALTER TABLE `gradingsystem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `InventIdNo` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemsIdno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `leaving`
--
ALTER TABLE `leaving`
  MODIFY `leavingid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `medic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `placements`
--
ALTER TABLE `placements`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `adm_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SubIdNo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Idno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `groupid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
