-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 03:15 PM
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
-- Table structure for table `tangible_assets`
--

CREATE TABLE `intangible_assets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `asset_type` varchar(15) NOT NULL,
  `depreciate` varchar(3) NOT NULL,
  `category` varchar(100) NOT NULL,
  `unit` int(5) NOT NULL,
  `location_code` varchar(255) NOT NULL,
  `date_plcace_in_service` date NOT NULL,
  `cost` decimal(20,0) NOT NULL,
  `usage_type` varchar(15) NOT NULL,
  `registration_no` varchar(15) NOT NULL,
  `a/c_cost_center` varchar(255) NOT NULL,
  `cost_center_using_asset` varchar(255) NOT NULL,
  `staff_id` int(10) NOT NULL,
  `staff_fullname` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `method_of_aquisition` varchar(20) NOT NULL,
  `dept/unit` varchar(50) NOT NULL,
  `current_status` varchar(30) NOT NULL,
  `investment_property` varchar(3) NOT NULL,
  `condition` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tangible_assets`
--
ALTER TABLE `intangible_assets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tangible_assets`
--
ALTER TABLE `intangible_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
