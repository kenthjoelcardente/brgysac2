-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 07:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brgysac2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brgycertification`
--

CREATE TABLE `tbl_brgycertification` (
  `ClearanceId` int(255) NOT NULL,
  `ResidentId` int(255) NOT NULL,
  `RequesteeName` varchar(255) NOT NULL,
  `Name` varchar(75) NOT NULL,
  `Relation` text NOT NULL,
  `Purpose` varchar(255) NOT NULL,
  `ReqDate` date NOT NULL,
  `Status` text NOT NULL,
  `ReleaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brgycertification`
--

INSERT INTO `tbl_brgycertification` (`ClearanceId`, `ResidentId`, `RequesteeName`, `Name`, `Relation`, `Purpose`, `ReqDate`, `Status`, `ReleaseDate`) VALUES
(8, 1, '', '', 'Myself', 'Scholarship', '2022-12-05', 'Requested', '0000-00-00'),
(9, 1, '', '', 'Myself', 'Scholarship', '2022-12-06', 'Requested', '0000-00-00'),
(10, 1, '', 'Kenth Joel  Cardente', 'Myself', 'Scholarship', '2022-12-06', 'Requested', '0000-00-00'),
(11, 1, '', 'Mike Joel Cardente', 'FamilyMem', 'Motorcycle Rental', '2022-12-06', 'Requested', '0000-00-00'),
(12, 1, 'Kenth Joel  Cardente', 'Kenth Joel  Cardente', 'Myself', 'certif', '2022-12-06', 'Requested', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masteruser`
--

CREATE TABLE `tbl_masteruser` (
  `masterID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Pword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_masteruser`
--

INSERT INTO `tbl_masteruser` (`masterID`, `Name`, `Uname`, `Pword`) VALUES
(1, 'Punong Barangay', 'punongbrgy', '12345'),
(2, 'Barangay Secretary', 'brgysecretary', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_official`
--

CREATE TABLE `tbl_official` (
  `Official_ID` int(50) NOT NULL,
  `Position` text NOT NULL,
  `Status` text NOT NULL,
  `Term_Start` date NOT NULL,
  `Term_End` date NOT NULL,
  `Official_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_official`
--

INSERT INTO `tbl_official` (`Official_ID`, `Position`, `Status`, `Term_Start`, `Term_End`, `Official_name`) VALUES
(1, 'Purok Leader', 'on-going', '2021-01-05', '0000-00-00', 'Kenth Joel C. Cardente'),
(2, 'Punong Barangay', 'on-going', '2022-11-18', '0000-00-00', 'Virgilio I. Tindog'),
(3, 'Purok Leader', 'on-going', '2022-12-03', '0000-00-00', 'Jovixon I. Ventura ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resident`
--

CREATE TABLE `tbl_resident` (
  `ResidentId` int(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `CivilStatus` varchar(30) NOT NULL,
  `Birthdate` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `ContactNo` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Purok` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Resdate` date NOT NULL,
  `RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resident`
--

INSERT INTO `tbl_resident` (`ResidentId`, `fname`, `mname`, `lname`, `Gender`, `CivilStatus`, `Birthdate`, `email`, `ContactNo`, `Address`, `Purok`, `Password`, `Resdate`, `RegDate`) VALUES
(1, 'Kenth Joel', 'Caldoza', 'Cardente', 'Male', 'single', '1999-10-12', 'kenthjoel1@gmail.com', '09162669278', 'Pacific Sq. Maslog Sibulan', 'sangra', '827ccb0eea8a706c4c34a16891f84e7b', '2019-01-09', '2022-11-17'),
(2, 'Jovixon', 'Inoferio', 'Ventura ', 'Male', 'married', '2022-11-18', 'vjovixon@gmail.com', '09361263154', 'South poblacion', 'saging', '672d291e116f161411b2112aaf22db9d', '2022-11-18', '2022-11-18'),
(3, 'Philip Dan', 'Duran', 'Pareja', 'Male', 'single', '2022-11-18', 'niko39634@gmail.com', '0997316146131', 'Bacong', 'saging', 'd41d8cd98f00b204e9800998ecf8427e', '2022-11-18', '2022-11-18'),
(4, 'Virgilio', 'Inoferio', 'Tindog', 'Male', 'single', '2000-01-04', 'vtindog@gmail.com', '093234342', 'Kenth Street', 'sawali', '827ccb0eea8a706c4c34a16891f84e7b', '2022-11-01', '2022-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_residentimg`
--

CREATE TABLE `tbl_residentimg` (
  `imgID` int(11) NOT NULL,
  `uploaded` date NOT NULL,
  `Image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brgycertification`
--
ALTER TABLE `tbl_brgycertification`
  ADD PRIMARY KEY (`ClearanceId`);

--
-- Indexes for table `tbl_masteruser`
--
ALTER TABLE `tbl_masteruser`
  ADD PRIMARY KEY (`masterID`);

--
-- Indexes for table `tbl_official`
--
ALTER TABLE `tbl_official`
  ADD PRIMARY KEY (`Official_ID`);

--
-- Indexes for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  ADD PRIMARY KEY (`ResidentId`);

--
-- Indexes for table `tbl_residentimg`
--
ALTER TABLE `tbl_residentimg`
  ADD PRIMARY KEY (`imgID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brgycertification`
--
ALTER TABLE `tbl_brgycertification`
  MODIFY `ClearanceId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_masteruser`
--
ALTER TABLE `tbl_masteruser`
  MODIFY `masterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_official`
--
ALTER TABLE `tbl_official`
  MODIFY `Official_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  MODIFY `ResidentId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_residentimg`
--
ALTER TABLE `tbl_residentimg`
  MODIFY `imgID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
