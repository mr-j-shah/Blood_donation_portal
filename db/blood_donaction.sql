-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 07:08 AM
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
-- Database: `blood_donaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_bottle`
--

CREATE TABLE `blood_bottle` (
  `blood` varchar(3) NOT NULL,
  `bottle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bottle`
--

INSERT INTO `blood_bottle` (`blood`, `bottle`) VALUES
('A+', 2),
('A-', 0),
('AB+', 0),
('AB-', 0),
('B+', 0),
('B-', 0),
('O+', 0),
('O-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `age` int(11) NOT NULL,
  `bloodgroup` varchar(2) NOT NULL,
  `time` varchar(10) NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`email`, `password`) VALUES
('shahjinay02@gmail.com', 'jinayshah141');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_bottle`
--
ALTER TABLE `blood_bottle`
  ADD UNIQUE KEY `blood` (`blood`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
