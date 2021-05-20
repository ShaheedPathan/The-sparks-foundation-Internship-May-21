-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 11:07 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email id` varchar(30) NOT NULL,
  `Balance` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email id`, `Balance`) VALUES
(1, 'Willson Wade', 'wadewillson01@gmail.com', '13000'),
(2, 'John Cartar', 'carterjohn02@gmail.com', '10000'),
(3, 'Jimmy Xang', 'xangjimmy03@gmail.com', '8300'),
(4, 'Millie Brown', 'brownmillie04@gmail.com', '10000'),
(5, 'Peter Parker', 'parkerpeter05@gmail.com', '11700'),
(6, 'Bucky Barnes', 'barnesbucky06@gmail.com', '10000'),
(7, 'Steve Rogers', 'rogerssteve07@gmail.com', '10000'),
(8, 'Bruce Banner', 'bannerbruce08@gmail.com', '9500'),
(9, 'Kakashi Hatake', 'hatakekakashi09@gmail.com', '200'),
(10, 'Naruto Uzamaki', 'uzamakinaruto10@gmail.com', '6500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
