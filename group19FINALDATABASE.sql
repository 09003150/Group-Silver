-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2017 at 12:19 PM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 5.6.29

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
  `bannedemails` varchar(60) NOT NULL,
  `banid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bannedusers`
--

CREATE TABLE `bannedusers` (
  `Banned` tinyint(1) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 8765432);

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
(4, 1),
(6, 1),
(8, 1),
(11, 2),
(1, 3),
(3, 3),
(18, 4),
(19, 4),
(21, 6),
(43, 6),
(14, 7),
(15, 7),
(20, 9),
(75, 11),
(30, 13),
(31, 13),
(80, 13),
(33, 15),
(88, 16),
(93, 18),
(96, 19),
(55, 20),
(103, 23),
(59, 25),
(112, 27),
(60, 29),
(120, 30),
(125, 32),
(127, 33),
(133, 35),
(40, 36),
(41, 36),
(137, 37),
(142, 39),
(153, 44),
(46, 46),
(47, 46),
(163, 48),
(167, 50),
(38, 55),
(178, 55),
(39, 57),
(183, 57),
(188, 59),
(194, 62),
(42, 64),
(199, 64),
(203, 66),
(206, 67),
(208, 68),
(223, 74),
(225, 74);

-- --------------------------------------------------------

--
-- Table structure for table `tagnames`
--

CREATE TABLE `tagnames` (
  `tagname` varchar(255) NOT NULL,
  `TagID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tagnames`
--

INSERT INTO `tagnames` (`tagname`, `TagID`) VALUES
('', 55),
('<h1> hello</h1>', 225),
('accounting', 137),
('accounting science', 153),
('applied maths', 17),
('average', 120),
('bio design', 188),
('bio systems', 183),
('biology', 38),
('biophysics', 45),
('business', 14),
('c#', 33),
('chemistry', 40),
('digital', 167),
('digital design', 47),
('economics', 1),
('economy', 125),
('engineering', 31),
('english', 18),
('equasion', 75),
('equasions', 103),
('file uploads', 11),
('finance', 15),
('finance accounting', 58),
('five eleven', 217),
('four', 216),
('german', 21),
('grammar', 43),
('grammar questions', 203),
('health', 59),
('health law', 60),
('history', 19),
('html', 27),
('java', 3),
('language', 206),
('maths', 20),
('mechanics', 26),
('micro economy', 133),
('micro elements', 41),
('microbiology', 39),
('microbiology science', 178),
('music', 46),
('needs', 112),
('nuclear', 127),
('one', 213),
('php', 4),
('physics', 16),
('power', 93),
('programming', 28),
('psychology', 29),
('python', 32),
('quize', 208),
('renewable', 30),
('ruby', 36),
('science', 80),
('simphony', 163),
('sintax', 199),
('social science', 54),
('software', 2),
('solar', 88),
('spanish', 42),
('spelling', 6),
('sql', 37),
('system design', 194),
('tables', 142),
('test', 8),
('three', 215),
('two', 214),
('vanilla', 223),
('wind', 96);

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
(2, 875112, 'spelling test', 1, 6, 'docx', 'proofreading', '2017-04-27', '2017-04-29', 'project', 0, 4),
(3, 875112, 'asdfdsf', 12, 345, 'docx', 'sadfdsaf', '2017-06-03', '2017-06-06', 'project', 0, 3),
(4, 875112, 'dsafasd', 33, 2345, 'docx', 'sadffads', '2017-06-06', '2017-06-09', 'essay', 0, 1),
(5, 875112, 'dfghgfdghfd', 456, 654373, 'docx', 'dsaagff', '2017-07-07', '2017-07-09', 'essay', 0, 1),
(6, 875112, 'fgdsfgdfs', 234, 4324, 'docx', 'fgsdgsdfg', '2017-06-05', '2017-06-09', 'essay', 0, 1),
(9, 123460, 'ergwr', 78, 2752, 'docx', 'wgdsg', '2017-05-04', '2017-05-05', 'essay', 0, 1),
(10, 123457, 'TestThree', 100, 700, 'docx', 'TestThree', '2017-06-15', '2017-06-22', 'essay', 0, 1),
(11, 123460, 'dfh', 2885, 8755, 'docx', 'dhy', '2017-05-06', '2017-05-07', 'essay', 0, 1),
(12, 123457, 'TestFour', 777, 20, 'docx', 'TestFour', '2017-06-03', '2017-06-17', 'essay', 0, 1),
(13, 123463, 'ftghs', 5451, 51465, 'docx', 'hykiu', '2017-05-10', '2017-05-11', 'essay', 0, 1),
(14, 123457, 'TestFive', 99, 30000, 'docx', 'TestFive', '2017-06-16', '2017-06-30', 'essay', 0, 1),
(15, 123463, 'rhukuy', 8757, 5688, 'docx', 'ydhjj', '2017-05-12', '2017-05-13', 'essay', 0, 1),
(16, 123463, 'rhtgdrty', 74, 88, 'docx', 'jhgt', '2017-05-13', '2017-05-14', 'essay', 0, 1),
(17, 123457, 'TestSix', 44, 7000, 'docx', 'TestSix', '2017-08-24', '2017-08-31', 'essay', 0, 1),
(18, 123463, 'erer', 75, 57, 'docx', 'drytyy', '2017-05-15', '2017-05-16', 'essay', 0, 1),
(19, 123463, 'brtw', 25828, 578, 'docx', 'tey', '2017-05-19', '2017-05-20', 'essay', 0, 1),
(20, 123457, 'TestSeven', 91, 60000, 'docx', 'TestSeven', '2017-12-01', '2017-12-05', 'essay', 0, 1),
(21, 123457, 'TestEight', 45, 1351527, 'docx', 'TestEight', '2017-07-18', '2017-08-01', 'essay', 0, 1),
(22, 123460, 'rthr', 5886, 5368, 'docx', 'li', '2017-05-22', '2017-05-23', 'essay', 0, 1),
(23, 123460, 'eg', 57, 69, 'docx', 'ki', '2017-05-25', '2017-05-26', 'essay', 0, 1),
(24, 123457, 'TestNine', 467, 2365363, 'docx', 'TestNine', '2017-06-14', '2017-06-20', 'essay', 0, 1),
(25, 123473, 'sftg', 47, 5368, 'docx', 'kl', '2017-05-04', '2017-05-05', 'essay', 0, 1),
(26, 123457, 'TestTen', 3456, 3245562, 'docx', 'TestTen', '2017-06-30', '2017-07-14', 'essay', 0, 1),
(27, 123473, 'uyuyk', 472, 579, 'docx', 'fhf', '2017-05-06', '2017-05-07', 'essay', 0, 1),
(28, 123457, 'NewTestOne', 456, 623542, 'docx', 'NewTestOne', '2017-07-29', '2017-08-12', 'essay', 0, 1),
(29, 123473, 'f', 785, 511, 'docx', 'jyy', '2017-05-09', '2017-05-10', 'essay', 0, 1),
(30, 123473, 'h', 28888, 2888, 'docx', 'h', '2017-05-12', '2017-05-13', 'essay', 0, 1),
(31, 123471, 'hufgyt', 45, 321, 'docx', 'yiggyu', '2017-05-04', '2017-05-05', 'essay', 0, 1),
(32, 123471, 'thr', 1684, 8498, 'docx', 'er', '2017-05-06', '2017-05-07', 'essay', 0, 1),
(33, 123471, 'r6ther', 541, 111, 'docx', 'ehby', '2017-05-07', '2017-05-08', 'essay', 0, 1),
(34, 123471, 'aergf', 9554, 558, 'docx', 'bhtht', '2017-05-11', '2017-05-13', 'essay', 0, 1),
(35, 123471, 'rthrt', 74747, 747, 'docx', 'tyj', '2017-05-22', '2017-05-24', 'essay', 0, 1),
(36, 123467, 'TaskOne', 5436, 265422, 'docx', 'TaskOne', '2017-06-04', '2017-06-18', 'essay', 0, 1),
(37, 123472, 'igu', 465, 666, 'docx', 'yudfk', '2017-05-22', '2017-05-23', 'essay', 0, 1),
(38, 123467, 'TaskTwo', 5637, 36256, 'docx', 'TaskTwo', '2017-07-13', '2017-07-27', 'essay', 0, 1),
(39, 123472, 'rtg', 5455, 155, 'docx', 'hee', '2017-05-24', '2017-05-25', 'essay', 0, 1),
(40, 123467, 'TaskThree', 487478, 336735565, 'docx', 'TaskThree', '2017-08-05', '2017-08-27', 'essay', 0, 1),
(41, 123472, 'nd', 112, 222, 'docx', 'th', '2017-05-25', '2017-05-26', 'essay', 0, 1),
(42, 123472, 'ytht', 855, 5875, 'docx', 'ytk', '2017-05-28', '2017-05-29', 'essay', 0, 1),
(43, 123467, 'TaskFour', 987, 987654, 'docx', 'TaskFour', '2017-08-09', '2017-08-23', 'essay', 0, 1),
(44, 123472, 'htr', 1745, 5878, 'docx', 'srt', '2017-05-30', '2017-05-31', 'essay', 0, 1),
(45, 123467, 'TaskFive', 4576, 476544, 'docx', 'TaskFive', '2017-06-03', '2017-07-01', 'essay', 0, 1),
(46, 123470, 'fhsd', 555, 553, 'docx', 'fyh', '2017-05-01', '2017-05-02', 'essay', 0, 1),
(47, 123467, 'TaskSix', 56733, 42425522, 'docx', 'TaskSix', '2017-06-21', '2017-06-22', 'essay', 0, 1),
(48, 123470, 'juuhy', 65, 12, 'docx', 'jhgtr', '2017-05-03', '2017-05-04', 'essay', 0, 1),
(49, 123467, 'TaskSeven', 3242, 34526224, 'docx', 'TaskSeven', '2017-06-17', '2017-06-30', 'essay', 0, 1),
(50, 123470, 'dtg', 852, 258, 'docx', 'cdsdss', '2017-05-05', '2017-05-06', 'essay', 0, 1),
(51, 123467, 'TaskEight', 2345, 345643, 'docx', 'TaskEight', '2017-07-15', '2017-07-23', 'essay', 0, 1),
(52, 123470, 'yhn', 5555, 44525, 'docx', 'bgt', '2017-05-07', '2017-05-08', 'essay', 0, 1),
(53, 123467, 'TaskNine', 2568, 56727, 'docx', 'TaskNine', '2017-08-04', '2017-08-31', 'essay', 0, 1),
(54, 123467, 'TaskTen', 46745, 4563578, 'docx', 'TaskTen', '2017-06-16', '2017-07-01', 'essay', 0, 1),
(55, 123466, 'gfkuyyg', 56456516, 5444, 'docx', 'gyftrdre', '2017-05-10', '2017-05-11', 'essay', 0, 1),
(56, 123467, 'NewTaskOne', 975, 366756, 'docx', 'NewTaskOne', '2017-06-09', '2017-06-12', 'essay', 0, 1),
(57, 123466, 'gge', 54238, 46, 'docx', 'ffff', '2017-05-12', '2017-05-13', 'essay', 0, 1),
(58, 123467, 'NewTaskTwo', 3731, 598463, 'docx', 'NewTaskTwo', '2017-06-04', '2017-06-15', 'essay', 0, 1),
(59, 123466, 'egt', 54621, 484555555, 'docx', 'xyyy', '2017-05-22', '2017-05-23', 'essay', 0, 1),
(60, 123466, 'hygtr', 887, 5855, 'docx', 'xyi', '2017-05-22', '2017-05-25', 'essay', 0, 1),
(61, 123467, 'NewTaskThree', 2468, 254422, 'docx', 'NewTaskThree', '2017-06-24', '2017-07-10', 'essay', 0, 1),
(62, 123466, 'ergerg', 6465, 5491, 'docx', 'huinirrr', '2017-05-23', '2017-05-25', 'essay', 0, 1),
(63, 123467, 'NewTaskFour', 36572, 5367355, 'docx', 'NewTaskFour', '2017-08-13', '2017-09-01', 'essay', 0, 1),
(64, 123468, 'sdfghj', 9521, 1485, 'docx', 'lkjhgf', '2017-05-02', '2017-05-03', 'essay', 0, 1),
(65, 123467, 'NewTaskFive', 2456, 36736556, 'docx', 'NewTaskFive', '2017-10-13', '2017-10-26', 'essay', 0, 1),
(66, 123468, 'btg', 51545, 484564, 'docx', 'erfr', '2017-05-04', '2017-05-05', 'essay', 0, 1),
(67, 123468, 'drtg', 6476, 6548, 'docx', 'yh', '2017-05-05', '2017-05-06', 'essay', 0, 1),
(68, 123468, 'hgwr', 789, 6546956, 'docx', 'sthrs', '2017-05-08', '2017-05-10', 'essay', 0, 1),
(69, 8765432, 'gfdsgfd', 42, 456, 'txt', 'gfdfdfg', '2017-07-07', '2017-09-07', 'essay', 0, 1),
(74, 123456111, 'test', 11, 5000, 'txt', 'firsttest', '1970-01-01', '1970-01-01', 'project', 0, 2);

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
(123344, 'test1@lk.com', '1a2b3c4d', 'Mary', 'Kelly', 'Science', 0, 0),
(123456, '123@g.com', 'hellow', 'Padraig', 'Punch', 'php', 0, 0),
(123457, '124@g.com', 'hi', 'Andrey', 'Gubarkov', 'business', 0, 0),
(123458, '125@g.com', 'dust', 'Terry', 'O\'Shea', 'physics', 0, 0),
(123459, '126@g.com', 'cat', 'Sonia', 'Coughlan', 'english', 0, 0),
(123460, '127@g.com', 'dog', 'John', 'Ryan', 'maths', 0, 0),
(123461, '128@g.com', 'fish', 'Neil', 'O\'Connor', 'programming', 0, 0),
(123462, '129@g.com', 'apple', 'James', 'Connor', 'programming', 0, 0),
(123463, '130@g.com', 'monkey', 'Sonia', 'Ryan', 'renewable', 0, 0),
(123464, '131@g.com', 'branch', 'Aaron', 'Murphy', 'programming', 0, 0),
(123465, '132@g.com', 'man', 'Abriel', 'Kelly', 'programming', 0, 0),
(123466, '133@g.com', 'copper', 'Jacob', 'Smith', 'biology', 0, 0),
(123467, '134@g.com', 'unite', 'Michael ', 'Johnson', 'chemistry', 0, 0),
(123468, '135@g.com', 'notice', 'Matthew', 'Williams', 'spanish', 0, 0),
(123469, '136@g.com', 'explain', 'Ethan ', 'Jones', 'physics', 0, 0),
(123470, '137@g.com', 'truck', 'Andrew', 'Davis', 'music', 0, 0),
(123471, '138@g.com', 'neat', 'Daniel', 'Miller', 'economics', 0, 0),
(123472, '139@g.com', 'hum', 'Anthony', 'Anderson', 'finance', 0, 0),
(123473, '140@g.com', 'corn', 'Christopher', 'Thomas', 'health', 0, 0),
(123474, '141@g.com', 'gun', 'Joseph', 'Jackson', 'german', 0, 0),
(875112, '0875112@gmail.com', 'hjiklo', 'Sean', 'Ryan', 'Economics', 9985, 0),
(1233440, 'test1@ul.ie', '1a2b3c4d5e', 'alert(\"Hello\");', 'Kelly', 'Science', 0, 0),
(8765432, '0875112@studentmail.ul.ie', 'hello', 'Sean', 'Ryan', 'Economics', 0, 0),
(123456111, '123456@ul.ie', 'password', 'Karl', 'Kelly', 'Economics', 0, 0),
(123456113, '123456@ul.ie', 'password', 'Select * From *', 'Kelly', 'Economics', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertags`
--

CREATE TABLE `usertags` (
  `TagID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertags`
--

INSERT INTO `usertags` (`TagID`, `UserID`) VALUES
(1, 875112),
(2, 875112),
(3, 875112),
(4, 875112),
(1, 875112),
(4, 123456),
(3, 123456),
(14, 123457),
(15, 123457),
(16, 123458),
(17, 123458),
(18, 123459),
(19, 123459),
(20, 123460),
(21, 123460),
(20, 123460),
(21, 123460),
(20, 123460),
(21, 123460),
(26, 123461),
(27, 123461),
(28, 123462),
(29, 123462),
(30, 123463),
(31, 123463),
(32, 123464),
(33, 123464),
(32, 123464),
(33, 123464),
(36, 123465),
(37, 123465),
(38, 123466),
(39, 123466),
(40, 123467),
(41, 123467),
(42, 123468),
(43, 123468),
(16, 123469),
(45, 123469),
(46, 123470),
(47, 123470),
(1, 123471),
(54, 123471),
(55, 123471),
(15, 123472),
(58, 123472),
(59, 123473),
(60, 123473),
(21, 123474),
(43, 123474),
(1, 8765432),
(20, 8765432),
(4, 8765432),
(213, 123456111),
(214, 123456111),
(215, 123456111),
(216, 123456111),
(217, 123456111),
(80, 123456111),
(80, 123456111),
(80, 123456111),
(55, 123456111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bannedemails`
--
ALTER TABLE `bannedemails`
  ADD PRIMARY KEY (`banid`);

--
-- Indexes for table `bannedusers`
--
ALTER TABLE `bannedusers`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `claimedtasks`
--
ALTER TABLE `claimedtasks`
  ADD PRIMARY KEY (`ClaimID`),
  ADD KEY `TaskID` (`TaskID`);

--
-- Indexes for table `flaggedtasks`
--
ALTER TABLE `flaggedtasks`
  ADD PRIMARY KEY (`FlagID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `TaskID` (`TaskID`);

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
  MODIFY `TagID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
--
-- AUTO_INCREMENT for table `taskstable`
--
ALTER TABLE `taskstable`
  MODIFY `TaskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
