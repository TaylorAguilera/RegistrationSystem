-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 04:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest2`
--

-- --------------------------------------------------------

--
-- Table structure for table `606posts`
--

CREATE TABLE `606posts` (
  `msg` text NOT NULL,
  `name` int(25) NOT NULL,
  `Group_by` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `666posts`
--

CREATE TABLE `666posts` (
  `msg` int(200) NOT NULL,
  `name` int(25) NOT NULL,
  `Group_by` int(25) NOT NULL,
  `admin_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `706posts`
--

CREATE TABLE `706posts` (
  `msg` int(200) NOT NULL,
  `name` int(25) NOT NULL,
  `Group_by` int(25) NOT NULL,
  `admin_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `766posts`
--

CREATE TABLE `766posts` (
  `msg` int(200) NOT NULL,
  `name` int(25) NOT NULL,
  `Group_by` int(25) NOT NULL,
  `admin_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `806posts`
--

CREATE TABLE `806posts` (
  `msg` int(200) NOT NULL,
  `name` int(25) NOT NULL,
  `Group_by` int(25) NOT NULL,
  `admin_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminposts`
--

CREATE TABLE `adminposts` (
  `msg` text NOT NULL,
  `name` int(25) NOT NULL,
  `Group_by` int(25) NOT NULL,
  `admin_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `RecordID` int(13) NOT NULL,
  `FrontText` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`RecordID`, `FrontText`) VALUES
(13, 'Hello students!');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `msg` int(50) NOT NULL,
  `name` int(50) NOT NULL,
  `Group_by` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `Group_by` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Group_by`, `Email`) VALUES
(1, 'Taylor Aguilera', '735f272fc03b756d2329f6b37b32ef4e', '606E', 'taguilera19@mail.wou.edu'),
(2, 'Sarah', '735f272fc03b756d2329f6b37b32ef4e', '606E', 'sarah19@mail.wou.edu'),
(3, 'Richard Aguilera', '735f272fc03b756d2329f6b37b32ef4e', '606E - Computer Science', 'Richard@mail.wou.edu'),
(4, 'Chris Coady', '735f272fc03b756d2329f6b37b32ef4e', '606E', 'CCoady19@mail.wou.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`RecordID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `RecordID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
