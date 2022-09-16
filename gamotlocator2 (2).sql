-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 03:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamotlocator2`
--

-- --------------------------------------------------------

--
-- Table structure for table `drugprice090822`
--

CREATE TABLE `drugprice090822` (
  `ID` int(11) NOT NULL,
  `drug` varchar(200) NOT NULL,
  `pricerange` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugprice090822`
--

INSERT INTO `drugprice090822` (`ID`, `drug`, `pricerange`, `price`) VALUES
(3, 'medicine 1', '15.35', '15.35'),
(4, 'medicine 2', '14.93', '14.93'),
(6, 'medicine 3', '7.00-10.00\r\n', '7.70\r\n'),
(7, 'medicine 4', '82.00-137.30\r\n', '90.20\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `inventory090822`
--

CREATE TABLE `inventory090822` (
  `storeID` varchar(20) NOT NULL,
  `store` varchar(200) NOT NULL,
  `medicine 1` varchar(1) NOT NULL,
  `medicine 2` varchar(1) NOT NULL,
  `medicine 3` varchar(1) NOT NULL,
  `medicine 4` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory090822`
--

INSERT INTO `inventory090822` (`storeID`, `store`, `medicine 1`, `medicine 2`, `medicine 3`, `medicine 4`) VALUES
('CDRR-NCR-DS-100161', 'PQ HEALTHSHIELD INC.', '1', '0', '1', '1'),
('CDRR-NCR-DS-101400', 'SOUTH STAR DRUG', '1', '0', '0', '0'),
('CDRR-NCR-DS-104183', 'CADACEOUS DRUG & MEDICAL SUPPLIES', '1', '1', '0', '1'),
('CDRR-NCR-DS-105269', 'GAMOT PUBLIKO YOUR GENERIC DRUGSTORE', '0', '1', '1', '0'),
('CDRR-NCR-DS-106115', 'GLORINEL PHARMACY', '1', '0', '1', '1'),
('CDRR-NCR-DS-109641', 'P&V PHARMACY', '0', '1', '0', '1'),
('CDRR-NCR-DS-109973', 'HEALTHY VIBE DRUGSTORE', '1', '0', '1', '1'),
('CDRR-NCR-DS-111436', 'FARMACIA NI DOK', '1', '0', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `storeinfo090822`
--

CREATE TABLE `storeinfo090822` (
  `storeID` varchar(20) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lon` varchar(20) NOT NULL,
  `store` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storeinfo090822`
--

INSERT INTO `storeinfo090822` (`storeID`, `lat`, `lon`, `store`, `address`) VALUES
('CDRR-NCR-DS-100161', '14.6056001', '121.0814998', 'PQ HEALTHSHIELD INC.\r\n', '3rd Floor, Unit 20, Topy\'s Place, Calle Industria and Economia Sts., Bgy. Bagumbayan, Quezon City, NCR\r\n'),
('CDRR-NCR-DS-101400', '14.6877067', '121.0868015', 'SOUTH STAR DRUG\r\n', 'Block 17, Commonwealth Avenue, Brgy. Holy Spirit, Quezon City, NCR\r\n'),
('CDRR-NCR-DS-104183', '14.6577656', '121.0174485', 'CADACEOUS DRUG & MEDICAL SUPPLIES\r\n', '29-A Accolade T\'Homes Seminary Road, EDSA, Quezon City, NCR\r\n'),
('CDRR-NCR-DS-105269', '14.6854243', '121.0905193', 'GAMOT PUBLIKO YOUR GENERIC DRUGSTORE\r\n', 'No. 22 Filinvest 1 Phase 1, Batasan Hills 2, Quezon City, NCR\r\n'),
('CDRR-NCR-DS-106115', '14.6817214', '121.0741855', 'GLORINEL PHARMACY', '#1 Airforce Road, Holy Spirit, Quezon City, NCR'),
('CDRR-NCR-DS-109641', '14.7082126', '121.026018', 'P&V PHARMACY', '#5 Magsaysay Avenue, Doña Faustina Subdivision, San Bartolome, District V, Quezon City, NCR'),
('CDRR-NCR-DS-109973', '14.6995459', '121.023074', 'HEALTHY VIBE DRUGSTORE', '47 KATIPUNAN KALIWA ST BAGBAG 5, Quezon City, NCR'),
('CDRR-NCR-DS-111436', '14.6970258', '121.0300472', 'FARMACIA NI DOK', '01-2 # 15 Parokya ng Pagkabuhay Road, Bagbag 5, Quezon City, NCR');

-- --------------------------------------------------------

--
-- Table structure for table `users090822`
--

CREATE TABLE `users090822` (
  `storeID` varchar(20) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users090822`
--

INSERT INTO `users090822` (`storeID`, `username`, `password`, `created_at`) VALUES
('CDRR-NCR-DS-100161', 'testuser11', '$2y$10$hfkNNUZtmsK98ovRfqkLNeey1Sv1A./gTZl7mrLVzAlxGZG5dxU8e', '2022-09-15 07:42:32.492083'),
('CDRR-NCR-DS-101400', 'testuser12', '$2y$10$cY0k7RG0ZGW.yjE.JTeA.O1rz8ayRh3dxBuIX0/kRArFIgQaZCGsq', '2022-09-15 08:44:00.695815'),
('CDRR-NCR-DS-123456', 'testuser1', '$2y$10$xtZK5.nIOddD9TqOazMXUuwlZ9m5RNTpbtO3.mX0C9grVPzi5bXp6', '0000-00-00 00:00:00.000000'),
('CDRR-NCR-DS-123457', 'testuser2', '$2y$10$ryV/mUmISnBwxK.gBJjlOOaThuCM9H0BNG6seIiymhn7lqRR7IYTe', '2022-09-08 10:02:33.375854'),
('CDRR-NCR-DS-123458', 'testuser3', '$2y$10$DGVq29NB87.P.dvkdr/9S.Dnu90pWt/v8GQo7yU.d1ENhLJ9l3u1.', '2022-09-08 11:04:22.996193');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drugprice090822`
--
ALTER TABLE `drugprice090822`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inventory090822`
--
ALTER TABLE `inventory090822`
  ADD PRIMARY KEY (`storeID`);

--
-- Indexes for table `storeinfo090822`
--
ALTER TABLE `storeinfo090822`
  ADD PRIMARY KEY (`storeID`);

--
-- Indexes for table `users090822`
--
ALTER TABLE `users090822`
  ADD PRIMARY KEY (`storeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugprice090822`
--
ALTER TABLE `drugprice090822`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
