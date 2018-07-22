-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 03:27 AM
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
-- Database: `growth`
--

-- --------------------------------------------------------

--
-- Table structure for table `growth_goals`
--

CREATE TABLE `growth_goals` (
  `GoalID` int(11) NOT NULL,
  `GoalName` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Archived` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `growth_goals`
--

INSERT INTO `growth_goals` (`GoalID`, `GoalName`, `Status`, `Archived`) VALUES
(1, 'kiki', 'pending', 0),
(2, 'Do you love me', 'pending', 0),
(3, 'Do you love me', 'pending', 1),
(4, 'test', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `growth_schedule`
--

CREATE TABLE `growth_schedule` (
  `ScheduleID` int(11) NOT NULL,
  `ScheduleName` varchar(100) NOT NULL,
  `TimeStart` text NOT NULL,
  `TimeEnd` text NOT NULL,
  `Archived` int(11) NOT NULL,
  `DateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `growth_schedule`
--

INSERT INTO `growth_schedule` (`ScheduleID`, `ScheduleName`, `TimeStart`, `TimeEnd`, `Archived`, `DateAdded`) VALUES
(1, 'kiki', 'do u love me', 'ARivchced', 8, '2018-07-21 22:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `growth_todolist`
--

CREATE TABLE `growth_todolist` (
  `ToDoID` int(11) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Archived` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `growth_todolist`
--

INSERT INTO `growth_todolist` (`ToDoID`, `ItemName`, `Status`, `Archived`) VALUES
(1, 'test', 'pending', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `growth_goals`
--
ALTER TABLE `growth_goals`
  ADD PRIMARY KEY (`GoalID`);

--
-- Indexes for table `growth_schedule`
--
ALTER TABLE `growth_schedule`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `growth_todolist`
--
ALTER TABLE `growth_todolist`
  ADD PRIMARY KEY (`ToDoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `growth_goals`
--
ALTER TABLE `growth_goals`
  MODIFY `GoalID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `growth_schedule`
--
ALTER TABLE `growth_schedule`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `growth_todolist`
--
ALTER TABLE `growth_todolist`
  MODIFY `ToDoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
