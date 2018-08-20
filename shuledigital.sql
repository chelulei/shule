-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 09:01 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classId` int(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Classteacher` varchar(50) NOT NULL,
  `Nostudents` int(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classId`, `Class`, `Classteacher`, `Nostudents`, `Status`) VALUES
(1, 'Scinc', 'kim', 34, 'Activ');

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
  `classid` int(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `classteacher` varchar(50) NOT NULL,
  `Nostudents` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gradingsystem`
--

CREATE TABLE `gradingsystem` (
  `idno` int(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Passmark` varchar(50) NOT NULL,
  `Createdby` date NOT NULL,
  `Createdon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '2018-07-17', 'pencils', 23, 10, 230, 'Female', '35884070_10209863814791713_6045226568597372928_n.j', 'pencils'),
(2, '2018-07-25', 'kit', 23, 10, 2320, 'Male', 'adwcleaner_7.2.1.exe', 'jhdijihs');

-- --------------------------------------------------------

--
-- Table structure for table `leaving`
--

CREATE TABLE `leaving` (
  `leavingid` int(50) NOT NULL,
  `Activities` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Activities` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`adm_No`, `Surname`, `Firstname`, `Middlename`, `Dateofbirth`, `Gender`, `Class`, `Homeaddress`, `Parentname`, `Phone`, `Email`, `Formerschool`, `Entrymarks`, `Activities`, `Remarks`) VALUES
(1, 'ndfskjh', 'hsdfjkjh', 'jhfusdh i', '1994-12-23', 'Female', 'KFDHSNHKJH', 'RHFD', 'FJDSNKH', '0900839048', 'NDSD@GMAIl.com', 'huysgyudf', 0, '', ''),
(2, 'Koech', 'Jemimah', 'Chepkorir', '2014-10-04', 'Female', 'Pre-primary one', 'Kutete 51', 'Stella Koech', '09098489327', 'Stellagmail.com', 'None', 0, '', ''),
(3, 'Cherono', 'Chepkemoi', 'Mercy', '1992-12-12', 'Female', 'From 2', 'Mulot', 'Chirchir Amos', '07873468726', 'chirchir@gmail.com', 'amalo ', 0, '', ''),
(4, 'Cherono', 'Chepkemoi', 'Mercy', '1992-12-12', 'Female', 'From 2', 'Mulot', 'Chirchir Amos', '07873468726', 'chirchir@gmail.com', 'amalo ', 0, '', ''),
(5, 'Mercy ', 'Nancy', 'Chelangat', '1992-11-30', 'Female', 'form 1', 'mulot ', 'dad kim', '0732874364', 'sarah@gmail.com', 'kim kim', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubIdNo` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Term` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubIdNo`, `Name`, `Code`, `Type`, `Description`, `Class`, `Term`) VALUES
(1, 'Kiswahili', '', 'Elective Subject', 'pre-primary', 'Form 1', 'Term 1'),
(2, 'English', '033', 'General Subject', 'Introductory', 'Form 2', 'Term 2'),
(3, 'Science', '006', 'General Subject', 'Advanced Science', 'Form 3', 'Term 1'),
(4, 'dress', 'uihie', 'Elective Subject', 'gdfhsgh', 'Form 1', 'Term 1');

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
  `Homeaddess` varchar(50) NOT NULL,
  `DateEmp` int(50) NOT NULL,
  `YearsExp` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Resume` int(20) NOT NULL,
  `Salary` int(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Idno`, `TSC_No`, `Surname`, `Firstname`, `Middlename`, `Dateofbirth`, `Gender`, `Homeaddress`, `Phone`, `Classes`, `Designation`, `Homeaddess`, `DateEmp`, `YearsExp`, `Email`, `Resume`, `Salary`, `Status`) VALUES
(1, 2147483647, 'fdsjhui', 'dnfjkh', 'jfdshjk', '2002-12-31', 'Female', 'dhsfh', 2147483647, '45', 'Teacher', '', 2015, '0000-00-00', 'hdfs@gmail.com', 0, 34000, ''),
(2, 17371718, 'home', 'hdhsfdf', 'dfdsfajshfd', '1992-12-02', 'Female', 'hjdgash', 90934289, '', 'Principal', '', 1992, '0000-00-00', 'dshj@gmail.com', 35971883, 34000, ''),
(3, 123123, 'jshjkjkfdskk', 'djksndfkj', 'mkdsjk', '2012-12-12', 'Female', 'jkdjsjk', 939009484, '', 'Teacher', '', 2018, '0000-00-00', 'jdskj@gmail.com', 0, 0, ''),
(4, 191393923, 'rono', 'kim', 'kem', '1992-12-12', 'Male', 'kimoi', 90382094, '4', 'Principal', '', 1993, '0000-00-00', 'kimoi@gmail.com', 0, 34000, ''),
(5, 12334455, 'yhghhihyg', 'hgguhuytwewwe', 'hbgjhjkh', '0993-12-21', 'Male', 'dffghhhh', 2147483647, '34', 'Principal', '', 1994, '0000-00-00', 'ghhjkkj@gmail.com', 0, 34000, ''),
(6, 0, 'hello', 'hello', 'hello', '1998-12-12', 'Female', 'hello', 2147483647, '2', 'Deputy Principal', '', 1989, '0000-00-00', 'hello@gmail.com', 0, 23400, 'Active');

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
  `Login` date NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `Firstname`, `Middlename`, `Surname`, `Phone`, `Email`, `password`, `role`, `status`, `Login`, `Description`) VALUES
(1, 'sarah', 'chero', 'Akinyi', 'Omondi', '08738762874', '', '12345', 'Secretary', '', '0000-00-00', ''),
(2, 'kim', '', '', '', '', '', '12345', 'Manager', '', '0000-00-00', ''),
(3, 'meda', '', '', '', '', '', '12345', 'Teacher', '', '0000-00-00', ''),
(13, 'GTkoikeldo', 'Grace', 'Towett', 'koikeldo', '073465729', 'koikeldo@gmail.com', '89ea1c85de76a90480e83329027820c1', 'Secretary', 'active', '0000-00-00', ''),
(6, 'Ann', '', '', '', '', '', '12345', 'Accountant', '', '0000-00-00', ''),
(7, 'XYZ', '', '', '', '', '', '12345', 'moderator', '', '0000-00-00', ''),
(8, '', 'sarah', 'chepwogen', 'Towett', '099271398', 'hdsdgfh@gmail.com', '', 'Teacher', '', '0000-00-00', ''),
(10, '', 'Joan Cherono', 'menona', 'munene', '0930210104', 'menene@gmail.com', '', 'Teacher', 'active', '0000-00-00', ''),
(14, 'AkChirchir', 'Amos', 'kiprono', 'Chirchir', '97324768721', 'kiprono@gmail.com', '8ab7bbdf01a24e988c50c4cfe9557814', 'Teacher', 'active', '0000-00-00', '');

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
(4, 'Seceretary', 'Secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`);

--
-- Indexes for table `giveitems`
--
ALTER TABLE `giveitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `gradingsystem`
--
ALTER TABLE `gradingsystem`
  ADD PRIMARY KEY (`idno`);

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
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giveitems`
--
ALTER TABLE `giveitems`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `classid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gradingsystem`
--
ALTER TABLE `gradingsystem`
  MODIFY `idno` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `InventIdNo` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemsIdno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaving`
--
ALTER TABLE `leaving`
  MODIFY `leavingid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `adm_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SubIdNo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Idno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `groupid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
