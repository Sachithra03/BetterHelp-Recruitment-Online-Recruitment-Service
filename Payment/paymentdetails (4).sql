-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 01:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payement`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `PaymentID` int(10) NOT NULL,
  `PaymentOption` varchar(20) NOT NULL,
  `NameOfCard` varchar(50) NOT NULL,
  `Amount` float NOT NULL,
  `CardNumber` int(50) NOT NULL,
  `ExpMonth` varchar(30) NOT NULL,
  `ExpYear` varchar(20) NOT NULL,
  `CVV` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`PaymentID`, `PaymentOption`, `NameOfCard`, `Amount`, `CardNumber`, `ExpMonth`, `ExpYear`, `CVV`) VALUES
(12, 'on', 'RGEGE', 1233, 2147483647, '', '', 123),
(13, 'on', 'RGEGE', 1233, 2147483647, '', '', 123),
(14, 'on', 'RGEGE', 1233, 2147483647, '', '', 123),
(15, 'on', 'RGEGE', 1233, 2147483647, '', '', 123),
(16, 'on', 'RGEGE', 1233, 2147483647, '', '', 123),
(17, '', 'RGEGE', 1233, 2147483647, '', '', 1234),
(18, 'Credit Card', 'John Doe', 100, 2147483647, '06', '2025', 123),
(19, 'on', 'fdsg', 1233, 2147483647, '', '', 1234),
(20, 'on', 'fdsg', 1233, 2147483647, 'January', '2023', 1234),
(21, 'on', 'fdsg', 1233, 2147483647, 'January', '2023', 1234),
(22, 'on', 'cedcwfecwfcw', 4666, 2147483647, '', '', 123),
(23, 'on', 'fdsg', 1233, 2147483647, 'January', '2023', 1234),
(24, 'on', 'fdsg', 1233, 2147483647, '', '', 1234),
(25, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(26, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(27, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(28, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(29, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(30, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(31, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(32, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(33, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(34, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(39, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(40, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(41, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(42, '', 'ghftgh', 6565, 2147483647, '', '', 123),
(43, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(44, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(45, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(46, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(47, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(48, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(49, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(50, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(51, 'on', 'ghftgh', 6565, 2147483647, '', '', 123),
(52, 'Credit Card', 'John Doe', 100, 2147483647, '12', '2025', 123),
(53, 'Credit Card', 'John Doe', 100, 2147483647, '12', '2025', 123),
(54, 'on', 'jhkjgujb', 1235, 2147483647, 'January', '2025', 1234),
(55, 'on', 'Sirhum Deweni', 1000000, 2147483647, 'March', '2024', 123),
(56, 'on', 'Sirhum Deweni', 1000000, 2147483647, 'March', '2024', 123),
(57, 'on', 'Sirhum Deweni', 1000000, 2147483647, 'March', '2024', 123),
(58, 'on', 'Sirhum Deweni', 1000000, 2147483647, 'March', '2024', 123),
(59, 'on', 'Sirhum Deweni', 1000000, 2147483647, 'March', '2024', 123),
(60, 'Credit Card', 'John Doe', 100, 2147483647, '12', '2025', 123),
(61, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(62, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(63, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(64, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(65, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(66, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(67, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(68, 'on', 'hiughuigi', 6546, 2147483647, 'April', '2025', 123),
(69, 'on', 'hiughuigihbkhb', 6546, 2147483647, 'April', '2025', 123),
(70, 'on', 'hiughuigihbkhb', 6546, 2147483647, 'April', '2025', 121),
(71, 'on', 'hiughuigihbkhb', 6546, 2147483647, 'April', '2025', 121),
(72, 'Credit Card', 'John Doe', 50, 2147483647, 'January', '2025', 123),
(73, 'on', 'Sachithra', 10000000, 2147483647, 'April', '2025', 121),
(74, 'on', 'Sithum', 10000, 2147483647, 'January', '2023', 123),
(75, 'on', 'Sithum', 10000, 2147483647, 'January', '2023', 123),
(76, 'on', 'Sithum', 10000, 2147483647, 'January', '2023', 123),
(77, 'on', 'Sithum', 10000, 2147483647, 'January', '2023', 123),
(78, 'on', 'Sith', 10000, 2147483647, 'January', '2023', 123),
(79, 'on', 'Sith', 10000, 2147483647, 'January', '2023', 123),
(80, 'on', 'Sith', 10000, 2147483647, 'January', '2023', 123),
(81, 'on', 'Sith', 10000, 2147483647, 'January', '2023', 123),
(82, 'on', 'Sith', 10000, 2147483647, 'January', '2023', 123),
(83, 'on', 'Sith', 10000, 2147483647, 'January', '2023', 123),
(84, 'on', 'sachithra', 10000, 2147483647, 'Dectember', '2023', 1234),
(85, 'on', 'chanith', 10000, 2147483647, 'Dectember', '2023', 1234),
(86, 'on', 'chanith', 10000, 2147483647, 'Dectember', '2023', 1234),
(87, 'on', 'chanith', 10000, 2147483647, 'Dectember', '2023', 1234),
(88, 'on', 'Sachithra indrachapa', 10000000, 2147483647, 'January', '2025', 100),
(89, 'on', 'chanith', 10000, 2147483647, 'Dectember', '2023', 1234),
(90, 'on', 'chanith', 10000, 2147483647, 'Dectember', '2023', 1234),
(91, 'on', 'chanith', 10000, 2147483647, 'Dectember', '2023', 1234),
(92, 'on', 'chanith', 10000, 2147483647, 'Dectember', '2023', 1234),
(93, '', 'wjuiywui', 8465, 45, 'January', '2023', 4),
(94, '', 'wjhu', 54645, 565465, 'January', '2023', 556),
(95, '', 'jik', 4578, 454545, 'January', '2023', 454),
(96, '', 'uuuuu', 1000000000, 4455, 'January', '2023', 123),
(97, 'on', 'kiiiiii', 45000, 454545, 'January', '2023', 123),
(98, 'on', 'senrith', 1000, 1212, 'January', '2023', 123),
(99, 'on', 'Sithija', 15000, 2147483647, 'January', '2023', 123),
(100, 'on', 'ff', 555, 1563666, 'January', '2023', 178),
(101, 'on', 'mmm', 10000, 1111, 'October', '2023', 10),
(102, 'on', 'ssss', 5000, 2147483647, 'January', '2023', 12388),
(103, '', 'fdsgdddddd', 122, 2147483647, 'February', '2025', 444);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`PaymentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `PaymentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
