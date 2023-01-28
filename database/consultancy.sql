-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 04:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `cID` varchar(15) NOT NULL,
  `pricmpny` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `email`, `phone`, `cID`, `pricmpny`) VALUES
(1, 'uttam', 'uttamk@gmail.com', 64545458, 'DS02', 'TCS'),
(2, 'nish', 'text@gmail.com', 2147483647, 'KI01', 'technos'),
(6, 'vaishak', 'vaishak@gmail.com', 2147483647, 'KI01', 'Ktech'),
(7, 'tikesh raj', 'tikesh@gmail.com', 2147483647, 'DS02', 'Msoft'),
(8, 'sudeep', 'sudeep@gmail.com', 2147483647, 'DS01', 'Msoft'),
(9, 'Rachan k', 'Rachan@gmail.com', 2147483647, 'KI01', 'DCX system'),
(10, 'Viraj ', 'viraj@gamil.com', 2147483647, 'DS02', 'Ncomp'),
(11, 'Naveena', 'naveen@gmail.com', 2147483647, 'DS01', 'msx soft'),
(12, 'Prajna', 'prajna@gmail.com', 2147483647, 'DS02', 'Google'),
(13, 'Dhanu', 'dhanu@gmail.com', 2147483647, 'KI01', 'Micro degree'),
(14, 'Arun', 'arun@gmail.com', 2147483647, 'DS02', 'micro new'),
(15, 'viraj', 'viraj@gamil.com', 2147483647, 'DS02', 'infosys');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(6) NOT NULL,
  `clgBid` varchar(15) NOT NULL,
  `clgname` varchar(99) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `availseats` int(6) NOT NULL,
  `mineducation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `clgBid`, `clgname`, `address`, `email`, `branch`, `availseats`, `mineducation`) VALUES
(1, 'AJBECS', 'AJ Institute of Engineering and Technology', 'Kottara chowki,Mangaluru', 'ajiet@gmail.com', 'CSE', 57, 'PU Science'),
(2, 'SJBECS', 'St Joseph Engineering College', 'Vamanjoor, Mangaluru', 'sjec@gmail.com', 'CSE', 80, 'PU Science'),
(4, 'SCBECS', 'Sahyadri College of Engineering & Management', 'Adyar', 'scem@gmail.com', 'CSE', 100, 'PU Science'),
(7, 'MIBECS', 'Mangalore Institute of Technology and Engineering', 'Badaga Mijar, Moodabidre', 'mite@gmail.com', 'CSE', 100, 'PU Science'),
(10, 'AJBEIS', 'AJ Institute of Engineering and Technology', 'Kottara chowki,Mangaluru', 'ajiet@gmail.com', 'ISE', 60, 'PU Science'),
(11, 'AJBEEC', 'AJ Institute of Engineering and Technology', 'Kottara chowki,Mangaluru', 'ajiet@gmail.com', 'ECE', 60, 'PU Science'),
(12, 'SJBEIS', 'St Joseph Engineering College', 'Vamanjoor, Mangaluru', 'sjec@gmail.com', 'ISE', 120, 'PU Science'),
(13, 'SJBEEC', 'St Joseph Engineering College', 'Vamanjoor, Mangaluru', 'sjec@gmail.com', 'ECE', 120, 'PU Science'),
(14, 'SCBEIS', 'Sahyadri College of Engineering & Management', 'Adyar', 'scem@gmail.com', 'ISE', 100, 'PU Science'),
(15, 'SCBEEC', 'Sahyadri College of Engineering & Management', 'Adyar', 'scem@gmail.com', 'ECE', 100, 'PU Science'),
(16, 'MIBEIS', 'Mangalore Institute of Technology and Engineering', 'Badaga Mijar, Moodabidre', 'mite@gmail.com', 'ISE', 100, 'PU Science'),
(17, 'MIBEEC', 'Mangalore Institute of Technology and Engineering', 'Badaga Mijar, Moodabidre', 'mite@gmail.com', 'ECE', 100, 'PU Science');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(6) NOT NULL,
  `cID` varchar(15) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` varchar(50) NOT NULL,
  `availjobs` int(6) NOT NULL,
  `qualification_req` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `cID`, `cname`, `address`, `email`, `position`, `availjobs`, `qualification_req`) VALUES
(1, 'DS01', 'Diya Systems Pvt. Ltd', 'Maryhill, Managlore', 'diyasys@gmail.com', 'software developer', 8, 'MTech/BTech'),
(3, 'KI01', 'Karanji Infotech Pvt. Ltd', 'Kankanady,Mangalore', 'karanji@gmail.com', 'Java Tech Lead', 4, 'MTech/BTech(CS/IS)'),
(14, 'DS02', 'Diya Systems Pvt. Ltd', 'Maryhill, Managlore', 'diyasys@gmail.com', 'Tech Support engineer', 5, 'MTech/BTech/BE/BSc(CS/IT)');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `clgBid` varchar(15) NOT NULL,
  `peducation` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `phone`, `email`, `clgBid`, `peducation`) VALUES
(1, 'nish', 808814460, 'nish@gmail.com', 'AJBECS', 'puc'),
(5, 'raju', 2147483647, '123@gmail.com', 'AJBECS', 'puc'),
(6, 'prajna', 789456157, 'jsdcj@gmail.com', 'AJBECS', 'PUC'),
(8, 'Dhanu', 2147483647, 'dhanu@gmail.com', 'AJBEIS', 'PU Science'),
(9, 'vaishak', 2147483647, 'vaishak@gmail.com', 'SCBEIS', 'PU Science'),
(10, 'tikesh raj', 2147483647, 'tikesh@gmail.com', 'SCBECS', 'PU Science'),
(11, 'Naveena', 1576498961, 'naveen@gmail.com', 'MIBECS', 'PU Science'),
(12, 'Arun', 2147483647, 'arun@gmail.com', 'MIBEIS', 'pu science'),
(13, 'sudeep', 2147483647, 'sudeep@gmail.com', 'SCBECS', 'PUC '),
(15, 'Rachan k', 2147483647, 'Rachan@gmail.com', ' SJBEEC', 'puc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
