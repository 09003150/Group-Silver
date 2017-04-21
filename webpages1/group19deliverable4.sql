-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 03:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group19`
--

-- --------------------------------------------------------

--
-- Table structure for table `bannedemails`
--

CREATE TABLE `bannedemails` (
  `bannedemails` varchar(60) CHARACTER SET utf8 NOT NULL,
  `banid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `claimedtasks`
--

CREATE TABLE `claimedtasks` (
  `TaskID` int(11) NOT NULL,
  `ClaimID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `claimedtasks`
--

INSERT INTO `claimedtasks` (`TaskID`, `ClaimID`) VALUES
(24, 456321),
(0, 0),
(22, 123456),
(23, 123456),
(29, 123456),
(29, 123456),
(35, 123456),
(35, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `flaggedtasks`
--

CREATE TABLE `flaggedtasks` (
  `FlagID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TaskID` int(11) NOT NULL,
  `FlagReason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flaggedtasks`
--

INSERT INTO `flaggedtasks` (`FlagID`, `UserID`, `TaskID`, `FlagReason`) VALUES
(0, 123456, 38, 'reddit');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `Status` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusID`, `Status`) VALUES
(1, 'Pending'),
(2, 'Expired'),
(3, 'Claimed'),
(4, 'Cancelled'),
(5, 'Failed'),
(6, 'Submitted'),
(7, 'Unpublished');

-- --------------------------------------------------------

--
-- Table structure for table `tagids`
--

CREATE TABLE `tagids` (
  `TagID` int(11) NOT NULL,
  `TaskID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tagids`
--

INSERT INTO `tagids` (`TagID`, `TaskID`) VALUES
(9, 37),
(10, 37),
(11, 37),
(12, 37),
(13, 38),
(14, 38),
(15, 39),
(16, 39),
(17, 39),
(18, 39),
(19, 40),
(20, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tagnames`
--

CREATE TABLE `tagnames` (
  `TagID` int(10) UNSIGNED NOT NULL,
  `tagname` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagnames`
--

INSERT INTO `tagnames` (`TagID`, `tagname`) VALUES
(11, ' ball'),
(17, ' goatse'),
(10, ' history'),
(12, ' math'),
(1, '1'),
(6, '2'),
(2, '3'),
(3, '4'),
(4, '5'),
(9, 'econ'),
(16, 'history'),
(19, 'literature'),
(14, 'lol'),
(18, 'math'),
(20, 'mockingbird'),
(13, 'reddit'),
(15, 'sjws');

-- --------------------------------------------------------

--
-- Table structure for table `taskstable`
--

CREATE TABLE `taskstable` (
  `TaskID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TaskTitle` tinytext NOT NULL,
  `TaskNoPages` int(11) NOT NULL,
  `TaskWordCount` int(11) NOT NULL,
  `TaskFileFormat` varchar(12) NOT NULL,
  `TaskDesc` text NOT NULL,
  `ClaimDeadline` date NOT NULL,
  `SubmissionDeadline` date NOT NULL,
  `TaskType` varchar(20) NOT NULL,
  `FlaggedTasks` tinyint(1) NOT NULL,
  `StatusID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taskstable`
--

INSERT INTO `taskstable` (`TaskID`, `UserID`, `TaskTitle`, `TaskNoPages`, `TaskWordCount`, `TaskFileFormat`, `TaskDesc`, `ClaimDeadline`, `SubmissionDeadline`, `TaskType`, `FlaggedTasks`, `StatusID`) VALUES
(35, 123456, '11111', 1111, 1111, 'docx', '11111', '2017-12-04', '1970-01-01', 'essay', 0, 3),
(36, 123456, '11111', 1111, 1111, 'docx', '11111', '2017-12-04', '1970-01-01', 'msc thesis', 0, 1),
(37, 123456, '3', 3, 3, 'docx', '3', '1970-01-01', '1970-01-01', 'essay', 0, 1),
(38, 123456, 'history', 42, 6969, 'doc', 'reddit', '2017-12-04', '1970-01-01', 'assignment', 1, 1),
(39, 123456, 'sa', 69, 420, 'docx', 'lol', '2017-04-12', '2017-04-19', 'essay', 0, 1),
(40, 123456, 'boo radley', 23, 123, 'docx', 'mockingbird', '2017-04-12', '2017-04-19', 'essay', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(40) NOT NULL,
  `UserPassword` varchar(64) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `UserDiscipline` text NOT NULL,
  `UserPoints` int(11) NOT NULL,
  `BanStatus` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`UserID`, `UserEmail`, `UserPassword`, `FirstName`, `LastName`, `UserDiscipline`, `UserPoints`, `BanStatus`) VALUES
(123456, 'bbb@g.com', 'hjiklo', 'Sean', 'Ryan', 'Economics', 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertags`
--

CREATE TABLE `usertags` (
  `tagid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannedemails`
--
ALTER TABLE `bannedemails`
  ADD PRIMARY KEY (`banid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `tagids`
--
ALTER TABLE `tagids`
  ADD PRIMARY KEY (`TagID`),
  ADD KEY `TaskID` (`TaskID`);

--
-- Indexes for table `tagnames`
--
ALTER TABLE `tagnames`
  ADD PRIMARY KEY (`TagID`),
  ADD UNIQUE KEY `tagname` (`tagname`);

--
-- Indexes for table `taskstable`
--
ALTER TABLE `taskstable`
  ADD PRIMARY KEY (`TaskID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `FlaggedTasks` (`FlaggedTasks`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bannedemails`
--
ALTER TABLE `bannedemails`
  MODIFY `banid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tagnames`
--
ALTER TABLE `tagnames`
  MODIFY `TagID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `taskstable`
--
ALTER TABLE `taskstable`
  MODIFY `TaskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tagids`
--
ALTER TABLE `tagids`
  ADD CONSTRAINT `tagids_ibfk_1` FOREIGN KEY (`TaskID`) REFERENCES `taskstable` (`TaskID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taskstable`
--
ALTER TABLE `taskstable`
  ADD CONSTRAINT `taskstable_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `usertable` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
