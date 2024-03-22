-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2023 at 10:41 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wise_datacenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Username` varchar(55) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Username`, `Password`) VALUES
(1, 'razan', 'RazanKhateeb', 'RR33@rraa'),
(2, 'Raghad', 'Raghadkatout', 'R@ghkat36'),
(3, 'Balqees', 'BalqeesHmoud', 'B$lqees88');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(4) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Phone` int(9) NOT NULL,
  `JobTitle` varchar(55) NOT NULL,
  `JoinDate` date NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `FirstName`, `LastName`, `Username`, `Phone`, `JobTitle`, `JoinDate`, `Password`) VALUES
(1, 'Bob', 'Bender', 'BobBender', 798585853, 'security offecier', '2019-10-16', 'BobBan#11'),
(5, 'Jeff', 'Chase', 'ChaseJeff', 795325896, 'Engineer', '2023-04-12', 'Chase@Jeff12'),
(6, 'Sammy', 'Hall', 'SammyHall', 774147423, 'security offecier', '2023-04-08', 'Sammy*Hall12'),
(7, 'Ray', 'King', 'RayKing', 796985633, 'Engineer', '2023-04-26', 'RayKing!55'),
(10, 'Admin', 'Admin', 'Admin', 785478523, 'ADMIN', '2019-05-07', 'AdminDC$10');

-- --------------------------------------------------------

--
-- Table structure for table `gassensor`
--

CREATE TABLE `gassensor` (
  `ID` int(11) NOT NULL,
  `sensor` varchar(15) NOT NULL,
  `value` float NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gassensor`
--

INSERT INTO `gassensor` (`ID`, `sensor`, `value`, `datetime`) VALUES
(1, 'Gas', 218, '2023-06-12 13:14:36'),
(2, 'Gas', 223, '2023-06-12 13:14:38'),
(3, 'Gas', 220, '2023-06-12 13:14:39'),
(4, 'Gas', 241, '2023-06-12 13:14:40'),
(5, 'Gas', 236, '2023-06-12 13:14:41'),
(6, 'Gas', 240, '2023-06-12 13:14:43'),
(7, 'Gas', 240, '2023-06-12 13:14:44'),
(8, 'Gas', 241, '2023-06-12 13:14:45'),
(9, 'Gas', 243, '2023-06-12 13:14:47'),
(10, 'Gas', 245, '2023-06-12 13:14:48'),
(11, 'Gas', 261, '2023-06-12 13:14:49'),
(12, 'Gas', 249, '2023-06-12 13:14:51'),
(13, 'Gas', 236, '2023-06-12 13:14:52'),
(14, 'Gas', 261, '2023-06-12 13:14:53'),
(15, 'Gas', 251, '2023-06-12 13:14:55'),
(16, 'Gas', 256, '2023-06-12 13:14:56'),
(17, 'Gas', 251, '2023-06-12 13:14:57'),
(18, 'Gas', 251, '2023-06-12 13:14:59'),
(19, 'Gas', 250, '2023-06-12 13:15:00'),
(20, 'Gas', 250, '2023-06-12 13:15:00'),
(21, 'Gas', 247, '2023-06-12 13:15:02'),
(22, 'Gas', 253, '2023-06-12 13:15:03'),
(23, 'Gas', 247, '2023-06-12 13:15:04'),
(24, 'Gas', 254, '2023-06-12 13:15:06'),
(25, 'Gas', 245, '2023-06-12 13:15:07'),
(26, 'Gas', 245, '2023-06-12 13:15:08'),
(27, 'Gas', 260, '2023-06-12 13:15:10'),
(28, 'Gas', 256, '2023-06-12 13:15:11'),
(29, 'Gas', 246, '2023-06-12 13:15:12'),
(30, 'Gas', 259, '2023-06-12 13:15:14'),
(31, 'Gas', 245, '2023-06-12 13:15:15'),
(32, 'Gas', 240, '2023-06-12 13:15:16'),
(33, 'Gas', 236, '2023-06-12 13:15:18'),
(34, 'Gas', 247, '2023-06-12 13:15:19'),
(35, 'Gas', 247, '2023-06-12 13:15:20'),
(36, 'Gas', 240, '2023-06-12 13:15:21'),
(37, 'Gas', 251, '2023-06-12 13:15:23'),
(38, 'Gas', 248, '2023-06-12 13:15:24'),
(39, 'Gas', 241, '2023-06-12 13:15:25'),
(40, 'Gas', 240, '2023-06-12 13:15:27'),
(41, 'Gas', 247, '2023-06-12 13:15:28'),
(42, 'Gas', 241, '2023-06-12 13:15:29'),
(43, 'Gas', 237, '2023-06-12 13:15:31'),
(44, 'Gas', 231, '2023-06-12 13:15:32'),
(45, 'Gas', 231, '2023-06-12 13:15:33'),
(46, 'Gas', 238, '2023-06-12 13:15:35'),
(47, 'Gas', 247, '2023-06-12 13:15:36'),
(48, 'Gas', 240, '2023-06-12 13:15:37'),
(49, 'Gas', 232, '2023-06-12 13:15:39'),
(50, 'Gas', 227, '2023-06-12 13:15:40'),
(51, 'Gas', 236, '2023-06-12 13:15:41'),
(52, 'Gas', 241, '2023-06-12 13:15:43'),
(53, 'Gas', 240, '2023-06-12 13:15:44'),
(54, 'Gas', 235, '2023-06-12 13:15:45'),
(55, 'Gas', 231, '2023-06-12 13:15:47'),
(56, 'Gas', 240, '2023-06-12 13:15:48'),
(57, 'Gas', 240, '2023-06-12 13:15:49'),
(58, 'Gas', 226, '2023-06-12 13:15:51'),
(59, 'Gas', 227, '2023-06-12 13:15:52'),
(60, 'Gas', 231, '2023-06-12 13:15:54'),
(61, 'Gas', 232, '2023-06-12 13:15:55'),
(62, 'Gas', 225, '2023-06-12 13:15:56'),
(63, 'Gas', 226, '2023-06-12 13:15:57'),
(64, 'Gas', 228, '2023-06-12 13:15:59'),
(65, 'Gas', 228, '2023-06-12 13:16:00'),
(66, 'Gas', 228, '2023-06-12 13:16:00'),
(67, 'Gas', 226, '2023-06-12 13:16:02'),
(68, 'Gas', 217, '2023-06-12 13:16:03'),
(69, 'Gas', 225, '2023-06-12 13:16:04'),
(70, 'Gas', 240, '2023-06-12 13:16:06'),
(71, 'Gas', 213, '2023-06-12 13:16:07'),
(72, 'Gas', 223, '2023-06-12 13:16:08'),
(73, 'Gas', 227, '2023-06-12 13:16:10'),
(74, 'Gas', 228, '2023-06-12 13:16:11'),
(75, 'Gas', 220, '2023-06-12 13:16:12'),
(76, 'Gas', 217, '2023-06-12 13:16:14'),
(77, 'Gas', 207, '2023-06-12 13:16:15'),
(78, 'Gas', 221, '2023-06-12 13:16:16'),
(79, 'Gas', 224, '2023-06-12 13:16:18'),
(80, 'Gas', 217, '2023-06-12 13:16:19'),
(81, 'Gas', 214, '2023-06-12 13:16:20'),
(82, 'Gas', 219, '2023-06-12 13:16:22'),
(83, 'Gas', 220, '2023-06-12 13:16:23'),
(84, 'Gas', 212, '2023-06-12 13:16:24'),
(85, 'Gas', 212, '2023-06-12 13:16:26'),
(86, 'Gas', 211, '2023-06-12 13:16:27'),
(87, 'Gas', 222, '2023-06-12 13:16:28'),
(88, 'Gas', 221, '2023-06-12 13:16:29'),
(89, 'Gas', 211, '2023-06-12 13:16:31'),
(90, 'Gas', 216, '2023-06-12 13:16:32'),
(91, 'Gas', 216, '2023-06-12 13:16:33'),
(92, 'Gas', 209, '2023-06-12 13:16:35'),
(93, 'Gas', 207, '2023-06-12 13:16:37'),
(94, 'Gas', 210, '2023-06-12 13:16:39'),
(95, 'Gas', 212, '2023-06-12 13:16:40'),
(96, 'Gas', 222, '2023-06-12 13:16:41'),
(97, 'Gas', 209, '2023-06-12 13:16:43'),
(98, 'Gas', 211, '2023-06-12 13:16:44'),
(99, 'Gas', 206, '2023-06-12 13:16:47'),
(100, 'Gas', 208, '2023-06-12 13:16:48'),
(101, 'Gas', 209, '2023-06-12 13:16:49'),
(102, 'Gas', 204, '2023-06-12 13:16:52'),
(103, 'Gas', 208, '2023-06-12 13:16:55'),
(104, 'Gas', 204, '2023-06-12 13:16:57'),
(105, 'Gas', 208, '2023-06-12 13:16:58'),
(106, 'Gas', 202, '2023-06-12 13:16:59'),
(107, 'Gas', 208, '2023-06-12 13:17:02'),
(108, 'Gas', 203, '2023-06-12 13:17:11'),
(109, 'Gas', 193, '2023-06-12 13:17:30'),
(110, 'Gas', 167, '2023-06-12 13:18:30'),
(111, 'Gas', 147, '2023-06-12 13:19:00'),
(112, 'Gas', 160, '2023-06-12 13:19:30'),
(113, 'Gas', 207, '2023-06-12 13:19:37'),
(114, 'Gas', 127, '2023-06-12 13:27:00'),
(115, 'Gas', 119, '2023-06-12 13:27:30'),
(116, 'Gas', 112, '2023-06-12 13:28:30'),
(117, 'Gas', 116, '2023-06-12 13:29:00'),
(118, 'Gas', 115, '2023-06-12 13:29:30'),
(119, 'Gas', 124, '2023-06-12 13:30:00'),
(120, 'Gas', 113, '2023-06-12 13:30:30'),
(121, 'Gas', 121, '2023-06-12 13:31:00'),
(122, 'Gas', 113, '2023-06-12 13:31:30'),
(123, 'Gas', 112, '2023-06-12 13:32:30'),
(124, 'Gas', 91, '2023-06-12 13:33:00'),
(125, 'Gas', 110, '2023-06-12 13:33:30'),
(126, 'Gas', 119, '2023-06-12 13:34:00'),
(127, 'Gas', 120, '2023-06-12 13:34:30'),
(128, 'Gas', 115, '2023-06-12 13:35:00'),
(129, 'Gas', 116, '2023-06-12 13:35:30'),
(130, 'Gas', 92, '2023-06-12 13:36:00'),
(131, 'Gas', 117, '2023-06-12 13:36:30'),
(132, 'Gas', 113, '2023-06-12 13:37:00'),
(133, 'Gas', 103, '2023-06-12 13:37:30'),
(134, 'Gas', 112, '2023-06-12 13:38:00'),
(135, 'Gas', 106, '2023-06-12 13:39:00'),
(136, 'Gas', 112, '2023-06-12 13:39:30'),
(137, 'Gas', 112, '2023-06-12 13:40:00'),
(138, 'Gas', 112, '2023-06-12 13:40:30'),
(139, 'Gas', 114, '2023-06-12 13:41:00'),
(140, 'Gas', 112, '2023-06-12 13:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `humiditysensor`
--

CREATE TABLE `humiditysensor` (
  `ID` int(11) NOT NULL,
  `sensor` varchar(15) NOT NULL,
  `value` float NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `humiditysensor`
--

INSERT INTO `humiditysensor` (`ID`, `sensor`, `value`, `datetime`) VALUES
(1, 'Humidity', 41.9, '2023-06-12 13:15:00'),
(2, 'Humidity', 41.7, '2023-06-12 13:16:00'),
(3, 'Humidity', 41.6, '2023-06-12 13:17:30'),
(4, 'Humidity', 41.5, '2023-06-12 13:18:30'),
(5, 'Humidity', 41.5, '2023-06-12 13:19:00'),
(6, 'Humidity', 41.4, '2023-06-12 13:19:30'),
(7, 'Humidity', 41.5, '2023-06-12 13:27:00'),
(8, 'Humidity', 41.4, '2023-06-12 13:27:30'),
(9, 'Humidity', 41.2, '2023-06-12 13:28:30'),
(10, 'Humidity', 41.1, '2023-06-12 13:29:00'),
(11, 'Humidity', 41.1, '2023-06-12 13:29:30'),
(12, 'Humidity', 41.1, '2023-06-12 13:30:00'),
(13, 'Humidity', 41.1, '2023-06-12 13:30:30'),
(14, 'Humidity', 41.1, '2023-06-12 13:31:00'),
(15, 'Humidity', 41.1, '2023-06-12 13:31:30'),
(16, 'Humidity', 41.1, '2023-06-12 13:32:30'),
(17, 'Humidity', 41.1, '2023-06-12 13:33:00'),
(18, 'Humidity', 41.1, '2023-06-12 13:33:30'),
(19, 'Humidity', 41.1, '2023-06-12 13:34:00'),
(20, 'Humidity', 41.1, '2023-06-12 13:34:30'),
(21, 'Humidity', 41.1, '2023-06-12 13:35:00'),
(22, 'Humidity', 41.1, '2023-06-12 13:35:30'),
(23, 'Humidity', 41.1, '2023-06-12 13:36:00'),
(24, 'Humidity', 41.1, '2023-06-12 13:36:30'),
(25, 'Humidity', 41.1, '2023-06-12 13:37:00'),
(26, 'Humidity', 41.1, '2023-06-12 13:37:30'),
(27, 'Humidity', 41.2, '2023-06-12 13:38:00'),
(28, 'Humidity', 41.1, '2023-06-12 13:39:00'),
(29, 'Humidity', 41.1, '2023-06-12 13:39:30'),
(30, 'Humidity', 41.1, '2023-06-12 13:40:00'),
(31, 'Humidity', 41.1, '2023-06-12 13:40:30'),
(32, 'Humidity', 41.2, '2023-06-12 13:41:00'),
(33, 'Humidity', 41.2, '2023-06-12 13:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `temperaturesensor`
--

CREATE TABLE `temperaturesensor` (
  `ID` int(11) NOT NULL,
  `sensor` varchar(15) NOT NULL,
  `value` float NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temperaturesensor`
--

INSERT INTO `temperaturesensor` (`ID`, `sensor`, `value`, `datetime`) VALUES
(1, 'Temperature', 25, '2023-06-12 13:15:00'),
(2, 'Temperature', 25.1, '2023-06-12 13:16:00'),
(3, 'Temperature', 25.2, '2023-06-12 13:17:30'),
(4, 'Temperature', 25.2, '2023-06-12 13:18:30'),
(5, 'Temperature', 25.2, '2023-06-12 13:19:00'),
(6, 'Temperature', 25.3, '2023-06-12 13:19:30'),
(7, 'Temperature', 25.4, '2023-06-12 13:27:00'),
(8, 'Temperature', 25.4, '2023-06-12 13:27:30'),
(9, 'Temperature', 25.5, '2023-06-12 13:28:30'),
(10, 'Temperature', 25.5, '2023-06-12 13:29:00'),
(11, 'Temperature', 25.5, '2023-06-12 13:29:30'),
(12, 'Temperature', 25.5, '2023-06-12 13:30:00'),
(13, 'Temperature', 25.5, '2023-06-12 13:30:30'),
(14, 'Temperature', 25.5, '2023-06-12 13:31:00'),
(15, 'Temperature', 25.5, '2023-06-12 13:31:30'),
(16, 'Temperature', 25.6, '2023-06-12 13:32:30'),
(17, 'Temperature', 25.6, '2023-06-12 13:33:00'),
(18, 'Temperature', 25.6, '2023-06-12 13:33:30'),
(19, 'Temperature', 25.6, '2023-06-12 13:34:00'),
(20, 'Temperature', 25.6, '2023-06-12 13:34:30'),
(21, 'Temperature', 25.6, '2023-06-12 13:35:00'),
(22, 'Temperature', 25.6, '2023-06-12 13:35:30'),
(23, 'Temperature', 25.6, '2023-06-12 13:36:00'),
(24, 'Temperature', 25.6, '2023-06-12 13:36:30'),
(25, 'Temperature', 25.6, '2023-06-12 13:37:00'),
(26, 'Temperature', 25.6, '2023-06-12 13:37:30'),
(27, 'Temperature', 25.6, '2023-06-12 13:38:00'),
(28, 'Temperature', 25.6, '2023-06-12 13:39:00'),
(29, 'Temperature', 25.6, '2023-06-12 13:39:30'),
(30, 'Temperature', 25.6, '2023-06-12 13:40:00'),
(31, 'Temperature', 25.6, '2023-06-12 13:40:30'),
(32, 'Temperature', 25.6, '2023-06-12 13:41:00'),
(33, 'Temperature', 25.6, '2023-06-12 13:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `vibrationsensor`
--

CREATE TABLE `vibrationsensor` (
  `ID` int(11) NOT NULL,
  `sensor` varchar(15) NOT NULL,
  `value` tinyint(1) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vibrationsensor`
--

INSERT INTO `vibrationsensor` (`ID`, `sensor`, `value`, `datetime`) VALUES
(1, 'Vibration', 0, '2023-06-12 13:15:00'),
(2, 'Vibration', 0, '2023-06-12 13:16:00'),
(3, 'vibration', 1, '2023-06-12 13:16:18'),
(4, 'Vibration', 0, '2023-06-12 13:17:30'),
(5, 'Vibration', 0, '2023-06-12 13:18:30'),
(6, 'Vibration', 0, '2023-06-12 13:19:00'),
(7, 'Vibration', 0, '2023-06-12 13:19:30'),
(8, 'Vibration', 0, '2023-06-12 13:27:00'),
(9, 'Vibration', 0, '2023-06-12 13:27:30'),
(10, 'Vibration', 0, '2023-06-12 13:28:30'),
(11, 'Vibration', 0, '2023-06-12 13:29:00'),
(12, 'Vibration', 0, '2023-06-12 13:29:30'),
(13, 'Vibration', 0, '2023-06-12 13:30:00'),
(14, 'Vibration', 0, '2023-06-12 13:30:30'),
(15, 'Vibration', 0, '2023-06-12 13:31:00'),
(16, 'Vibration', 0, '2023-06-12 13:31:30'),
(17, 'Vibration', 0, '2023-06-12 13:32:30'),
(18, 'Vibration', 0, '2023-06-12 13:33:00'),
(19, 'Vibration', 0, '2023-06-12 13:33:30'),
(20, 'Vibration', 0, '2023-06-12 13:34:00'),
(21, 'Vibration', 0, '2023-06-12 13:34:30'),
(22, 'Vibration', 0, '2023-06-12 13:35:00'),
(23, 'Vibration', 0, '2023-06-12 13:35:30'),
(24, 'Vibration', 0, '2023-06-12 13:36:00'),
(25, 'Vibration', 0, '2023-06-12 13:36:30'),
(26, 'Vibration', 0, '2023-06-12 13:37:00'),
(27, 'Vibration', 0, '2023-06-12 13:37:30'),
(28, 'Vibration', 0, '2023-06-12 13:38:00'),
(29, 'Vibration', 0, '2023-06-12 13:39:00'),
(30, 'Vibration', 0, '2023-06-12 13:39:30'),
(31, 'Vibration', 0, '2023-06-12 13:40:00'),
(32, 'Vibration', 0, '2023-06-12 13:40:30'),
(33, 'Vibration', 0, '2023-06-12 13:41:00'),
(34, 'Vibration', 0, '2023-06-12 13:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `waterleaksensor`
--

CREATE TABLE `waterleaksensor` (
  `ID` int(11) NOT NULL,
  `sensor` varchar(15) NOT NULL,
  `value` float NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waterleaksensor`
--

INSERT INTO `waterleaksensor` (`ID`, `sensor`, `value`, `datetime`) VALUES
(1, 'Water leak', 0, '2023-06-12 13:15:00'),
(2, 'Water leak', 0, '2023-06-12 13:16:00'),
(3, 'Water leak', 0, '2023-06-12 13:17:30'),
(4, 'Water leak', 0, '2023-06-12 13:18:30'),
(5, 'Water leak', 0, '2023-06-12 13:19:00'),
(6, 'Water leak', 0, '2023-06-12 13:19:30'),
(7, 'Water leak', 0, '2023-06-12 13:27:00'),
(8, 'Water leak', 0, '2023-06-12 13:27:30'),
(9, 'Water leak', 0, '2023-06-12 13:28:30'),
(10, 'Water leak', 0, '2023-06-12 13:29:00'),
(11, 'Water leak', 0, '2023-06-12 13:29:30'),
(12, 'Water leak', 0, '2023-06-12 13:30:00'),
(13, 'Water leak', 0, '2023-06-12 13:30:30'),
(14, 'Water leak', 0, '2023-06-12 13:31:00'),
(15, 'Water leak', 0, '2023-06-12 13:31:30'),
(16, 'Water leak', 0, '2023-06-12 13:32:30'),
(17, 'Water leak', 0, '2023-06-12 13:33:00'),
(18, 'Water leak', 0, '2023-06-12 13:33:30'),
(19, 'Water leak', 0, '2023-06-12 13:34:00'),
(20, 'Water leak', 0, '2023-06-12 13:34:30'),
(21, 'Water leak', 0, '2023-06-12 13:35:00'),
(22, 'Water leak', 0, '2023-06-12 13:35:30'),
(23, 'Water leak', 0, '2023-06-12 13:36:00'),
(24, 'Water leak', 0, '2023-06-12 13:36:30'),
(25, 'Water leak', 0, '2023-06-12 13:37:00'),
(26, 'Water leak', 0, '2023-06-12 13:37:30'),
(27, 'Water leak', 0, '2023-06-12 13:38:00'),
(28, 'Water leak', 0, '2023-06-12 13:39:00'),
(29, 'Water leak', 0, '2023-06-12 13:39:30'),
(30, 'Water leak', 0, '2023-06-12 13:40:00'),
(31, 'Water leak', 0, '2023-06-12 13:40:30'),
(32, 'Water leak', 0, '2023-06-12 13:41:00'),
(33, 'Water leak', 0, '2023-06-12 13:41:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `gassensor`
--
ALTER TABLE `gassensor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `humiditysensor`
--
ALTER TABLE `humiditysensor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temperaturesensor`
--
ALTER TABLE `temperaturesensor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vibrationsensor`
--
ALTER TABLE `vibrationsensor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `waterleaksensor`
--
ALTER TABLE `waterleaksensor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `gassensor`
--
ALTER TABLE `gassensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `humiditysensor`
--
ALTER TABLE `humiditysensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `temperaturesensor`
--
ALTER TABLE `temperaturesensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vibrationsensor`
--
ALTER TABLE `vibrationsensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `waterleaksensor`
--
ALTER TABLE `waterleaksensor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
