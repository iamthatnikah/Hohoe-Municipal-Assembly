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
-- Table structure for table `hhma_printers`
--

CREATE TABLE `hhma_printers` (
  `id` int(11) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `department` varchar(50) NOT NULL,
  `printer_manufacturer` varchar(50) NOT NULL,
  `cartridge_installed` varchar(50) NOT NULL,
  `printer_model` varchar(100) NOT NULL,
  `date_purchased` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hhma_printers`
--

INSERT INTO `hhma_printers` (`id`, `owner`, `department`, `printer_manufacturer`, `cartridge_installed`, `printer_model`, `date_purchased`) VALUES
(1, 'Assembly', 'Management Information System | MIS', 'HP', 'Enterprise M605', 'Enterprise M605', '2022-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hhma_printers`
--
ALTER TABLE `hhma_printers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hhma_printers`
--
ALTER TABLE `hhma_printers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
