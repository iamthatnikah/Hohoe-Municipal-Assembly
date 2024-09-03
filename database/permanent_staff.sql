-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 03:09 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hohoe_municipal_assembly`
--

-- --------------------------------------------------------

--
-- Table structure for table `permanent_staff`
--

CREATE TABLE `permanent_staff` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `official_email` varchar(100) NOT NULL,
  `personal_email` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `class` varchar(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_first_appointment` date NOT NULL,
  `date_last_promotion` date NOT NULL,
  `salary_level` float NOT NULL,
  `ssn` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `tel` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent_staff`
--

INSERT INTO `permanent_staff` (`id`, `staff_id`, `department_id`, `image`, `first_name`, `middle_name`, `last_name`, `official_email`, `personal_email`, `grade`, `class`, `date_of_birth`, `date_first_appointment`, `date_last_promotion`, `salary_level`, `ssn`, `gender`, `tel`, `mobile`, `department`) VALUES
(5, 0, 0, '', 'Princess', 'Boateng', 'Bonsu', 'princessboatengb@gmail.com', 'princessboatengb@gmail.com', 'MIS', 'Assistant P', '2022-12-01', '2022-12-12', '2022-12-05', 18, 'GDF5477455hd', 'Female', 555413594, 551315787, 'Management Information System ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permanent_staff`
--
ALTER TABLE `permanent_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `STAFF_ID` (`staff_id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permanent_staff`
--
ALTER TABLE `permanent_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;