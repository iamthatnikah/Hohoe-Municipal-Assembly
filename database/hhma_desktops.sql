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
-- Table structure for table `hhma_desktops`
--

CREATE TABLE `hhma_desktops` (
  `id` int(11) NOT NULL,
  `computer_location` varchar(55) NOT NULL,
  `owner` varchar(15) NOT NULL,
  `department` varchar(50) NOT NULL,
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
-- Dumping data for table `hhma_desktops`
--

INSERT INTO `hhma_desktops` (`id`, `computer_location`, `owner`, `department`, `admin_acc_name`, `password`, `processor`, `os_edition`, `system_rating`, `installed_memory`, `processor_speed`, `system_type`, `computer_name`, `workgroup`, `product_id`, `date_purchased`, `update_schedule`, `user_acc`, `system_manufacturer`, `system_model`, `office_version`, `antivirus`, `browsers`, `hdd_capacity`, `monitor_brand`, `monitor_model`) VALUES
(1, 'HHMA-MEHA', 'Assembly', 'Management Information System ', 'CLTS-HP', 'HYGIEA1409', 'Intel(R) Core(TM)', 'Win7 Pro', '64bit OS', '8 GB', 'i5-4590 CPU @3.30GHz (4.0 CPUS)', '45hdggs', 'CLTS-HP', 'WorkGroup', '1445-4545-1445-26-6554-5564-4546', '2022-11-27', 'Every last day in the month', 'Administrator', 'Intel Corporati', 'Intel', 'MS Office 2016', 'Windows Defender', 'Chrome, Firefox, Edge', '1 TB', 'HP', 'HP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hhma_desktops`
--
ALTER TABLE `hhma_desktops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hhma_desktops`
--
ALTER TABLE `hhma_desktops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
