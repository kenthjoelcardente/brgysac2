-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 09:45 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET PositionS utf8mb4 */;

--
-- Database: `db_barangaysacsac`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `AnnouncementID` int(10) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Details` varchar(100) NOT NULL,
  `Official_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blotter`
--

CREATE TABLE `tbl_blotter` (
  `BlotterID` int(10) NOT NULL,
  `Complianant` varchar(30) NOT NULL,
  `Respondent` varchar(30) NOT NULL,
  `Victim` varchar(30) NOT NULL,
  `Type_Of_Assualt` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Details` varchar(100) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `ResidentID` int(10) NOT NULL,
  `Official_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certification`
--

CREATE TABLE `tbl_certification` (
  `CertificationID` int(10) NOT NULL,
  `Cert_Type` varchar(30) NOT NULL,
  `Cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `EventID` int(10) NOT NULL,
  `EventPosition` varchar(30) NOT NULL,
  `EventDate` date NOT NULL,
  `Venue` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Official_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imStatus`
--

CREATE TABLE `tbl_imStatus` (
  `ImStatusID` int(10) NOT NULL,
  `ResidentID` int(10) NOT NULL,
  `imStatus` longblob NOT NULL,
  `imStatus_type` varchar(30) NOT NULL,
  `Project_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_official`
--

CREATE TABLE `tbl_official` (
  `Official_ID` int(10) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Term_Start` date NOT NULL,
  `Term_End` date NOT NULL,
  `ResidentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `ProjectId` int(10) NOT NULL,
  `Project_Position` varchar(30) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `Contractor` varchar(30) NOT NULL,
  `Budget` int(30) NOT NULL,
  `ImpOffice` varchar(30) NOT NULL,
  `Ofiicial_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purok`
--

CREATE TABLE `tbl_purok` (
  `PurokID` int(10) NOT NULL,
  `PurokPosition` varchar(30) NOT NULL,
  `Details` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resident`
--

CREATE TABLE `tbl_resident` (
  `ResidentId` int(10) NOT NULL,
  `fPosition` varchar(30) NOT NULL,
  `mPosition` varchar(30) NOT NULL,
  `lPosition` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `CivilStatus` varchar(30) NOT NULL,
  `Birthdate` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `ContactNo` int(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Purok` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Resdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `TransanctionID` int(10) NOT NULL,
  `ResidentID` int(10) NOT NULL,
  `Transanction_Date` date NOT NULL,
  `CertificationID` int(10) NOT NULL,
  `Official_ID` int(10) NOT NULL,
  `RequestDate` date NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`AnnouncementID`);

--
-- Indexes for table `tbl_blotter`
--
ALTER TABLE `tbl_blotter`
  ADD PRIMARY KEY (`BlotterID`);

--
-- Indexes for table `tbl_certification`
--
ALTER TABLE `tbl_certification`
  ADD PRIMARY KEY (`CertificationID`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `tbl_imStatus`
--
ALTER TABLE `tbl_imStatus`
  ADD PRIMARY KEY (`ImStatusID`);

--
-- Indexes for table `tbl_official`
--
ALTER TABLE `tbl_official`
  ADD PRIMARY KEY (`Official_ID`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `tbl_purok`
--
ALTER TABLE `tbl_purok`
  ADD PRIMARY KEY (`PurokID`);

--
-- Indexes for table `tbl_resident`
--
ALTER TABLE `tbl_resident`
  ADD PRIMARY KEY (`ResidentId`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`TransanctionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
