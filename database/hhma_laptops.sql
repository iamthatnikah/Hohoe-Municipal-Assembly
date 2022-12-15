-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 09:33 AM
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
-- Table structure for table `hhma_laptops`
--

CREATE TABLE `hhma_laptops` (
  `id` int(11) NOT NULL,
  `computer_location` varchar(55) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `admin_acc_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `os_edition` varchar(30) NOT NULL,
  `system_rating` varchar(50) NOT NULL,
  `installed_memory` varchar(10) NOT NULL,
  `processor_speed` varchar(50) NOT NULL,
  `system_type` varchar(100) NOT NULL,
  `computer_name` varchar(100) NOT NULL,
  `workgroup` varchar(50) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `date_purchased` date NOT NULL,
  `update_schedule` varchar(100) NOT NULL,
  `user_acc` varchar(100) NOT NULL,
  `system_manufacturer` varchar(15) NOT NULL,
  `system_model` varchar(100) NOT NULL,
  `office_version` varchar(100) NOT NULL,
  `antivirus` varchar(100) NOT NULL,
  `browsers` varchar(255) NOT NULL,
  `hdd_capacity` varchar(10) NOT NULL,
  `monitor_brand` varchar(20) NOT NULL,
  `monitor_model` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hhma_laptops`
--
ALTER TABLE `hhma_laptops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hhma_laptops`
--
ALTER TABLE `hhma_laptops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
