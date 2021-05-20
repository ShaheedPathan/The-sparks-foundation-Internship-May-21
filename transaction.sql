-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 11:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `Amount` varchar(10000) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Transaction` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `Name`, `Emailid`, `Amount`, `Time`, `Transaction`) VALUES
(1, 'shaheed', 'shshs@gshsh', '5000', '2021-05-18 10:53:32', 'SENT'),
(2, 'Kakashi Hatake', 'hatakekakashi09@gmai', '100', '0000-00-00 00:00:00', 'Sent'),
(3, 'Willson Wade', 'wadewillson01@gmail.', '100', '0000-00-00 00:00:00', 'Recieved'),
(4, 'Kakashi Hatake', 'hatakekakashi09@gmai', '500', '2021-05-18 11:07:48', 'Sent'),
(5, 'Willson Wade', 'wadewillson01@gmail.', '500', '2021-05-18 11:07:48', 'Recieved'),
(6, 'Kakashi Hatake', 'hatakekakashi09@gmai', '100', '2021-05-18 11:09:35', 'Sent'),
(7, 'Willson Wade', 'wadewillson01@gmail.', '100', '2021-05-18 11:09:35', 'Recieved'),
(8, 'Jimmy Xang', 'xangjimmy03@gmail.co', '500', '2021-05-19 07:28:15', 'Sent'),
(9, 'Peter Parker', 'parkerpeter05@gmail.', '500', '2021-05-19 07:28:15', 'Recieved'),
(10, 'Jimmy Xang', 'xangjimmy03@gmail.com', '200', '2021-05-19 07:30:04', 'Sent'),
(11, 'Peter Parker', 'parkerpeter05@gmail.com', '200', '2021-05-19 07:30:04', 'Recieved'),
(12, 'Bruce Banner', 'bannerbruce08@gmail.com', '500', '2021-05-19 10:22:17', 'Sent'),
(13, 'Naruto Uzamaki', 'uzamakinaruto10@gmail.com', '500', '2021-05-19 10:22:17', 'Recieved'),
(14, 'Jimmy Xang', 'xangjimmy03@gmail.com', '500', '2021-05-20 07:57:56', 'Sent'),
(15, 'Peter Parker', 'parkerpeter05@gmail.com', '500', '2021-05-20 07:57:56', 'Recieved'),
(16, 'Jimmy Xang', 'xangjimmy03@gmail.com', '500', '2021-05-20 08:15:51', 'Sent'),
(17, 'Peter Parker', 'parkerpeter05@gmail.com', '500', '2021-05-20 08:15:51', 'Recieved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
