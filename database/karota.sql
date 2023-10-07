-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 12:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karota`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `staff_id`, `password`, `rank`) VALUES
(1, 'Super Administrator', 'admin', 'p101', 'admin', 'Deputy Marshall'),
(2, 'Maimuna Abdullah', 'maimuna', 'p105', '1234567', 'Marshall');

-- --------------------------------------------------------

--
-- Table structure for table `offences`
--

CREATE TABLE `offences` (
  `id` int(20) NOT NULL,
  `offence` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `degree` int(20) NOT NULL,
  `penalty` int(20) NOT NULL,
  `point` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offences`
--

INSERT INTO `offences` (`id`, `offence`, `code`, `degree`, `penalty`, `point`) VALUES
(45, 'ATTEMPTING TO CORRUPT MARSHAL', 'ACS', 2, 10000, 3),
(42, 'ASSAULTING MARSHAL ON DUTY', 'AMD', 2, 10000, 1),
(33, 'CONSTRUCTION AREA SPEED LIMIT VIOLATION', 'CAV', 1, 3000, 1),
(26, 'CAUTION SIGN VIOLATION', 'CSV', 1, 3000, 1),
(27, 'DANGEROUS DRIVING', 'DGD', 1, 50000, 1),
(23, 'DRIVERâ€™S LICENCE VIOLATION', 'DLV', 1, 10000, 1),
(31, 'DO NOT MOVE VIOLATION', 'DNM', 1, 2000, 1),
(28, 'DRIVING UNDER ALCOHOL OR DRUG INFLUENCE', 'DUI', 1, 5000, 1),
(53, 'EXCESSIVE SMOKE EMISSION', 'ESE', 1, 5000, 3),
(35, 'FAILURE TO COVER UNSTABLE MATERIALS', 'FCM', 1, 3000, 1),
(47, 'DRIVING WITHOUT SPECIFIED FIRE EXTINGUISHER', 'FEV', 1, 3000, 1),
(39, 'FAILURE TO FIX RED FLAG ON PROJECTED LOAD', 'FFF', 2, 3000, 1),
(34, 'FAILURE TO MOVE OVER', 'FMO', 1, 3000, 1),
(40, 'FAILURE TO REPORT ACCIDENT', 'FRC', 3, 20000, 1),
(55, 'FAILURE TO INSTALL SPEED LIMITING DEVICE', 'FSLD', 1, 3000, 1),
(32, 'INADEQUATE CONSTRUCTION WARNING', 'ICW', 1, 50000, 1),
(54, 'MECHANICALLY DEFICIENT VEHICLE', 'MDV', 1, 5000, 1),
(22, 'VEHICLE NUMBER PLATE VIOLATION', 'NPV', 1, 3000, 1),
(29, 'OPERATING A VEHICLE WITH FORGED DOCUMENTS', 'OFD', 1, 20000, 1),
(44, 'OBSTRUCTING MARSHAL ON DUTY', 'OMD', 3, 3000, 2),
(36, 'OVERLOADING', 'OVL', 3, 10000, 2),
(48, 'DRIVING A COMMERCIAL VEHICLE WITHOUT PASSENGER MANIFEST', 'PMV', 1, 10000, 1),
(18, 'ROAD OBSTRUCTION', 'RB', 1, 3000, 1),
(41, 'MEDICAL PERSONNEL OR HOSPITAL REJECTION OF ROAD ACCIDENT VICTIM', 'RCV', 2, 50000, 2),
(52, 'RIDING MOTORCYCLE WITHOUT A CRASH HELMET', 'RMH', 3, 2000, 1),
(25, 'ROAD MARKING VIOLATION', 'RMV', 1, 3000, 1),
(17, 'ROAD OBSTRUCTION', 'ROB', 3, 1000, 2),
(19, 'ROUTE VIOLATION', 'RTV', 1, 5000, 1),
(20, 'SPEED LIMIT VIOLATION', 'SLV', 1, 3000, 1),
(49, 'DRIVING WITHOUT SEAT BELT', 'SUV', 1, 2000, 1),
(37, 'DRIVING WITH WORN-OUT TYRE OR WITHOUT SPARE TYRE', 'TYY', 2, 3000, 3),
(51, 'DRIVING A VEHICLE WHILE UNDER 18 YEARS', 'UDR', 2, 2000, 3),
(50, 'USE OF PHONE WHILE DRIVING', 'UPD', 1, 4000, 1),
(30, 'UNAUTHORIZED REMOVAL OF OR TAMPERING WITH ROAD SIGNS', 'UTS', 1, 5000, 1),
(21, 'VEHICLE LICENCE VIOLATION', 'VLV', 1, 3000, 1),
(38, 'DRIVING WITHOUT OR WITH SHATTERED WINDSCREEN', 'VWV', 2, 2000, 2),
(24, 'WRONGFUL OVERTAKING', 'WOV', 1, 3000, 1),
(46, ' CUSTODY FEE', '`CUST', 1, 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `offenders`
--

CREATE TABLE `offenders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `chasis_no` varchar(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `plate_no` varchar(10) NOT NULL,
  `offence` varchar(100) NOT NULL,
  `degree` varchar(3) NOT NULL,
  `confiscated_item` varchar(100) NOT NULL,
  `reporting_officer` varchar(200) NOT NULL,
  `committed_location` varchar(200) NOT NULL,
  `committed_date` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `remark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offenders`
--

INSERT INTO `offenders` (`id`, `name`, `chasis_no`, `vehicle_type`, `plate_no`, `offence`, `degree`, `confiscated_item`, `reporting_officer`, `committed_location`, `committed_date`, `phone`, `remark`) VALUES
(13, 'Muhammad Garba', 'AQ1298080474', 'pickup', 'AQ-390-GWL', 'ICW', '1', 'driving_license', '', 'CNTRAL market', '2018-10-16', '08081607142', 'G'),
(11, 'Maryam Mahgi', 'AQ21345657', '', 'tricycle', 'Donot Move Violation', '2', 'vehice_keys', 'aeigee', 'Cent', '2018-09-11', '090213435', 'hey'),
(14, 'Faith Atiku', 'GE2567660I87', 'car', 'RE-90-WRW', 'SLV', '1', 'vehicle_keys', 'Hassan Jalo', 'Abuja Highway, Kaduna', '2018-10-16', '09022399436', 'no'),
(12, 'Victor', 'gh2345678', 'pickup', 'GWL222QS', 'DGD', '3', 'driving_license', 'Gwany Badamasi', 'CNTRAL market', '2018-09-11', '8081607142', 'abuse me'),
(15, 'Halima D. Imam', 'QE34567979009880', 'tricycle', 'AS-211-KMC', 'DUI', '2', 'plate_number', 'Hassan Jalo', 'Zaria Nigeria', '2018-10-16', '07035421356', '');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `staff_id` varchar(30) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `name`, `username`, `password`, `staff_id`, `rank`, `email`, `phone`, `address`, `status`) VALUES
(2, 'Hassan Jalo', 'hassan_jalo', 'password', 'p102', 'Superitendent Marshall', 'hassanjalo@gmail.com', '09022399436', 'Yobe', 1),
(6, 'bitcoin digital', 'bitcoin', 'actorsee', 'p103', 'General', 'demo123@yahoo.com', '07035421356', 'Nassarawa', 1),
(7, 'Gwany Badamasi', 'uhuru', 'password', 'p111', 'Private', 'gwani@kastelea.com', '2147483647', 'Adamawa', 1),
(8, 'Victor Godwin', 'vshesky', 'password', 'p122', 'Private', 'demo32@yahoo.com', '080816456756', 'Kano', 0),
(9, 'Demo Account', 'demo', 'password', 'pdemo', 'Demo', 'demo@localhost.com', '09022399436', 'no3. fghdtyt', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`staff_id`);

--
-- Indexes for table `offences`
--
ALTER TABLE `offences`
  ADD PRIMARY KEY (`code`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `offenders`
--
ALTER TABLE `offenders`
  ADD PRIMARY KEY (`chasis_no`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offences`
--
ALTER TABLE `offences`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `offenders`
--
ALTER TABLE `offenders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
