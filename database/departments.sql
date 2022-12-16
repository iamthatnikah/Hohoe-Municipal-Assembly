-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 04:19 PM
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
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `office` varchar(10) NOT NULL,
  `inter_exten` int(4) NOT NULL,
  `hod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `office`, `inter_exten`, `hod`) VALUES
(1, 'Central Administration', 'Admin', 1003, 'Godwin Dzansi'),
(2, 'Management Information System', 'MIS', 1004, 'Wisdom Mawuli Adzokatse'),
(3, 'Procurement', 'Procure', 1014, 'Delight'),
(4, 'Revenue', 'REV', 1013, 'Theo'),
(5, 'Planning', 'Plan', 1005, 'Pla'),
(6, 'Human Resource', 'HR', 1010, 'Priscilla'),
(7, 'Budget', 'BDT', 1007, 'Emmanuel'),
(8, 'Internal Audit', 'IA', 1006, 'IA'),
(9, 'Operations', 'RM', 1016, 'Sarfo'),
(10, 'Client Service', 'CS', 1015, 'Bernice'),
(11, 'Statistic', 'STATS', 0, 'Kweikuma'),
(12, 'Environmental Health', 'Env. Healt', 0, 'MEHO'),
(13, 'Accounts', 'ACC', 1009, 'MFO'),
(14, 'Works', 'WKS', 0, 'Quansah'),
(15, 'Physical Planning ', 'PPD', 0, 'PPD'),
(16, 'Agriculture', 'Agric', 0, 'Agric');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
