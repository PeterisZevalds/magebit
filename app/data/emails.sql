-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 04:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebittaskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `date`) VALUES
(1, 'janedoe@gmail.com', '2021-03-08 17:19:32'),
(2, 'john.doe@hotmail.com', '2021-03-08 17:19:32'),
(3, 'janiscakste14@inbox.lv', '2021-03-08 17:20:39'),
(4, '11dollars@yahhoo.com', '2021-03-08 17:20:39'),
(5, 'janejane1990@gmail.com', '2021-03-08 17:29:27'),
(6, 'chaikin@gmail.com', '2021-03-10 12:48:17'),
(7, 'kuparine@yahoo.com', '2021-03-10 12:48:17'),
(8, 'hutton@yahoo.com', '2021-03-10 12:48:48'),
(9, 'rgarton@msn.com', '2021-03-10 12:48:48'),
(10, 'jlbaumga@yahoo.com', '2021-03-10 12:49:04'),
(11, 'lydia@msn.com', '2021-03-10 12:49:04'),
(12, 'iapetus@sbcglobal.net', '2021-03-10 12:49:24'),
(13, 'esasaki@yahoo.ca', '2021-03-10 12:49:24'),
(14, 'hermanab@comcast.net', '2021-03-10 12:49:51'),
(15, 'bflong@outlook.com', '2021-03-10 12:49:51'),
(16, 'penna@yahoo.ca', '2021-03-10 12:50:04'),
(17, 'schumer@live.com', '2021-03-10 12:50:04'),
(18, 'shrapnull@msn.com', '2021-03-10 12:50:17'),
(19, 'darin@aol.com', '2021-03-10 12:50:17'),
(20, 'johnbob@aol.com', '2021-03-10 12:50:28'),
(21, 'paley@yahoo.ca', '2021-03-10 12:50:28'),
(22, 'jacks@yahoo.com', '2021-03-10 12:51:02'),
(23, 'report@yahoo.ca', '2021-03-10 12:51:02'),
(24, 'iamcal@verizon.net', '2021-03-10 12:51:12'),
(25, 'dartlife@yahoo.ca', '2021-03-10 12:51:12'),
(26, 'jmorris@comcast.net', '2021-03-10 12:51:24'),
(27, 'gavinls@comcast.net', '2021-03-10 12:51:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
