-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2017 at 01:08 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ILRdb`
--
CREATE DATABASE IF NOT EXISTS `ILRdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ILRdb`;

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `UniqueID` int(6) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Major` text NOT NULL,
  `Semster` text NOT NULL,
  `Year` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`UniqueID`, `FirstName`, `LastName`, `Major`, `Semster`, `Year`, `Date`, `image`) VALUES
(123456, 'Abdullah', 'Almusallm', 'CS', 'Fall', 'Junior', '2017-10-16 15:06:30', ''),
(122122, 'Batman', 'Superman', 'biochemestry', 'Summer', 'Senior', '2017-10-11 16:58:55', ''),
(112111, 'Jon', 'Snow', 'chemistry', 'Fall', 'Junior', '2017-10-11 16:59:15', ''),
(323232, 'Joe', 'Malachosky', 'chemistry', 'Spring', 'Senior', '2017-10-11 17:00:09', ''),
(332111, 'Jigar', 'Welsh', 'biochemestry', 'Fall', 'Freshmen', '2017-10-11 17:00:49', ''),
(333333, 'Ryan', 'Couch', 'chemistry', 'Spring', 'Freshmen', '2017-10-11 17:01:13', ''),
(435453, 'Ryan', 'O\'Grady', 'chemistry', 'Spring', 'Senior', '2017-10-11 17:01:32', ''),
(658673, 'Nate', 'Irwin', 'chemistry', 'Fall', 'Junior', '2017-10-11 17:01:53', ''),
(543555, 'Mohammed', 'Alqarawi', 'biochemestry', 'Summer', 'Junior', '2017-10-11 17:02:17', ''),
(458744, 'Batman', 'Superman', 'chemistry', 'Fall', 'Sophomore', '2017-10-11 17:02:52', ''),
(453455, 'Jane', 'Arnold', 'chemistry', 'Fall', 'Freshmen', '2017-10-11 17:03:20', ''),
(118383, 'Batman', 'Superman', 'CS', 'Spring', 'Junior', '2017-10-11 19:00:23', ''),
(222221, 'Dee', 'Abdulwahed', 'CJ', 'Summer', 'Freshmen', '2017-10-15 01:29:44', ''),
(122213, 'Antonio', 'Snow', 'biochemestry', 'Spring', 'Senior', '2017-10-16 15:08:05', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
