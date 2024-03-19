-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2024 at 10:12 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqualife`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('bablu@535', 'bablu35'),
('bablu@535', 'bablu35'),
('jo@540', 'jo40'),
('jo@540', 'jo40');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `password`, `phone`, `message`) VALUES
('bablu', '8790305031', 0, 'helloo'),
('bablu23', '8790305031', 0, 'helloo');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idate` date NOT NULL,
  `rdate` date NOT NULL,
  `icount` int NOT NULL,
  `fcount` int NOT NULL,
  `ptop` float NOT NULL,
  `pmid` float NOT NULL,
  `pbot` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`name`, `email`, `idate`, `rdate`, `icount`, `fcount`, `ptop`, `pmid`, `pbot`) VALUES
('bablu', 'bablu@535', '2024-03-14', '2024-03-21', 100, 300, 8.9, 7, 9);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

DROP TABLE IF EXISTS `rental`;
CREATE TABLE IF NOT EXISTS `rental` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int NOT NULL,
  `idate` date NOT NULL,
  `rdate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `message` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`name`, `email`, `phone`, `idate`, `rdate`, `address`, `city`, `state`, `message`) VALUES
('jogendra', 'jo@123', 2147483647, '2024-03-13', '2024-03-29', 'bheemavaram', 'mumbai', 'andhrapradesh', 521229),
('jogendra12', 'jo@1234', 2147483647, '2024-03-20', '2024-03-21', 'bheemavaram', 'mumbai', 'andhrapradesh', 521229);

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

DROP TABLE IF EXISTS `sign`;
CREATE TABLE IF NOT EXISTS `sign` (
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cpassword` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`username`, `email`, `password`, `cpassword`) VALUES
(NULL, NULL, NULL, NULL),
('bablu', 'bablu@12', 'bablu12', 'bablu12'),
('jogendra', 'jo@540', 'jo40', 'jo40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
