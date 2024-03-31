-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 05:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Admins';

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `cpassword`) VALUES
(3, 'Silvia Kalekye', 'silvia@gmail.com', 'yeswecan', 'yeswecan'),
(4, 'wec bram', 'admin@gmail.com', 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `date`, `fullname`, `contact`, `speciality`, `reason`) VALUES
(1, '2022-04-07', 'Harvey Specter', 8005001, 'Dentist', 'Tooth ache for 7 days'),
(2, '2022-04-07', 'Maurice Anthony', 2147483647, 'Surgery - 5000/-', 'Bullet through head');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `residence` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `docFees` int(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specialization`, `fullname`, `email`, `residence`, `contact`, `docFees`, `password`, `cpassword`, `gender`) VALUES
(1, 'Surgery', 'Cadeela Simons', 'cadeela@gmail.com', 'Canada', 703653030, 5000, '236c093910', '236c093910', 'female'),
(2, 'Psychology', 'Dalienst Owino', 'dalienstowino@gmail.com', 'Mombasa', 710584581, 2000, '454c6aa470', '454c6aa470', 'male'),
(4, 'Dentist', 'Rachel Zane', 'rzane@gmail.com', 'Kisumu', 110010010, 3000, '7fd00ef290', '7fd00ef290', 'female'),
(5, 'Physiotherapist', 'Michael Ross', 'mross@gmail.com', 'Nairobi', 700110011, 4000, 'yellowcake', 'yellowcake', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `residence` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Table to store patient login details';

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fullname`, `email`, `residence`, `contact`, `password`, `cpassword`, `gender`) VALUES
(3, 'Sophia Pearson', 'sophiapear@gmail.com', 'Westham', 703653030, '9226227088a54c5', '9226227088a54c5', 'female'),
(4, 'Ariana Medusa', 'amedusa@gmail.com', 'Kiambu', 734567890, 'darkchoc', 'darkchoco', 'female'),
(6, 'Harvey Specter', 'hspecter@gmail.com', 'New York', 800500600, 'bagel', 'bagel', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `fullname`, `contact`, `email`, `gender`, `password`, `cpassword`) VALUES
(1, 'Donna Kalu', 800700200, 'dkalu@gmail.com', 'female', 'whitecap', 'whitecap');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `fullname`, `contact`, `email`, `gender`, `password`, `cpassword`) VALUES
(1, 'Gretchen Ombaka', 980865746, 'gombaka@gmail.com', 'female', 'blueold', 'blueold');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `diagnosis` varchar(300) NOT NULL,
  `treatment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id`, `date`, `fullname`, `diagnosis`, `treatment`) VALUES
(1, '2022-04-07', 'Harvey Specter', '', 'Cold juices');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
