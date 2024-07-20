-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 02, 2024 at 04:44 PM
-- Server version: 8.0.36
-- PHP Version: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ASSESSMENT`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_detail`
--

CREATE TABLE `asset_detail` (
  `sno` int NOT NULL,
  `asset_name` varchar(10) DEFAULT NULL,
  `asset_brand` varchar(10) DEFAULT NULL,
  `asset_current_location` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `asset_detail`
--

INSERT INTO `asset_detail` (`sno`, `asset_name`, `asset_brand`, `asset_current_location`) VALUES
(1, 'laptop1', 'b1', 'Chennai'),
(2, 'charger1', 'c2', 'Chennai'),
(3, 'laptop2', 'b2', 'Banglore'),
(4, 'charger2', 'c2', 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `customer data`
--

CREATE TABLE `customer data` (
  `sno` int NOT NULL,
  `type` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id` int DEFAULT NULL,
  `fname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer data`
--

INSERT INTO `customer data` (`sno`, `type`, `id`, `fname`, `lname`, `email`, `phone`, `password`) VALUES
(1, 'Site User', 12221, 'AABHAS', 'MATHUR', 'aabhas', 45806160, 'ratiobukshi'),
(2, 'admin', 1102, 'newAdmin', 'new', 'email@m.com', 123123, '234234'),
(3, 'Location Admin', 1103, 'NLA', 'LA', 'lname@example.com', 6377, '123'),
(4, 'Asset Admin', 1104, 'fname', 'lname', 'sname@example.com', 9145806160, '123123');

-- --------------------------------------------------------

--
-- Table structure for table `location_detail`
--

CREATE TABLE `location_detail` (
  `sno` int NOT NULL,
  `location_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `location_detail`
--

INSERT INTO `location_detail` (`sno`, `location_name`) VALUES
(1, 'Chennai'),
(2, 'Banglore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset_detail`
--
ALTER TABLE `asset_detail`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `customer data`
--
ALTER TABLE `customer data`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `location_detail`
--
ALTER TABLE `location_detail`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asset_detail`
--
ALTER TABLE `asset_detail`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer data`
--
ALTER TABLE `customer data`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location_detail`
--
ALTER TABLE `location_detail`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
