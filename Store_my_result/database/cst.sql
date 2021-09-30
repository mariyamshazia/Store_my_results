-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 07:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cst`
--


CREATE TABLE `create_account` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`id`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `country`) VALUES
(4, 'sunil Vishwakarma', 'amitvish9999@gmail.com', '8190', 7275308190, 'kolpanday,azamgarh', 'male', 'China'),
(7, 'suraj vishwakarma', 'suraj@gmail.com', '8190', 9120140055, 'kolpanday,azamgarh', 'male', 'India'),
(8, 'Om', 'om@gmail.com', '8090', 7890809, 'bnjkghjbjb', 'male', 'india'),
(9, 'Ragini Vishwakarma', 'ragini@gmail.com', '1234`', 7275540965, 'kolpanday(Kolgghat),Azamgarh', 'male', 'India'),
(10, 'Anjali Vishwakarma', 'anjali@gmail.com', '123', 7275308190, 'kolpanday azamgarh', 'male', 'India'),
(11, 'mrityunjai', 'mr8090@gmail.com', '8190', 71727534567, 'kolpghta', 'male', 'India'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', '1234', 9015501897, 'Noida', 'male', 'India');

-- --------------------------------------------------------

ALTER TABLE `create_account`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `create_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
