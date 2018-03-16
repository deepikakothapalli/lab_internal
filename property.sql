-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(100) NOT NULL,
  `property_name` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `features` text NOT NULL,
  `description` text NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `property_name`, `image`, `features`, `description`, `rating`) VALUES
('Deepikakothapalli', 'house', 'download.jpg', 'sdfsdfsdf', 'sdfgsfgsdfgsdfgacvdvdfg', 0),
('Deepikakothapalli', 'house', 'images.jpg', 'dfsdfdsfgsdgfsh', 'ersertwetwtgdsfgsdftq5t3wrtsefsdfgerggt', 0),
('Deepikakothapalli', 'hgfghfgh', 'download.2png', 'fghfghdfghd', 'dfhdfghdfhjg', 0),
('Deepikakothapalli', 'dfgfdg', 'download.2png', 'dfgsdfgsdfgsdf', 'gjhjgfhjfhgjfgh', 0),
('Deepikakothapalli', 'dfhdfghdfg', 'images (2).jpg', 'dhfghdfghrghdrh', 'stryetrueyue', 0),
('Deepikakothapalli', 'fhgdfgh', 'images (1).jpg', 'fdjhjfgjhfghj', 'fghjfghjgjhfghj', 0),
('Deepikakothapalli', 'dfghdfgh', 'download.jpg', 'dfghfghnbnfghndh', 'gjghjdhjdfghjd', 0),
('Deepikakothapalli', 'dgffdghdf', 'download.jpg', 'ghdfghfghfghjgfh', 'dgsdfhdfgjhdfghj', 0),
('Deepikakothapalli', 'cghdfghsfg', 'download.jpg', 'hfghfghgfhd', 'sfgsdfgsfg', 0),
('Deepikakothapalli', 'vxcvxzcv', 'images (1).jpg', 'asrgtsefgs', 'gfbxcvbxfvb', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Deepika', '12345'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phoneno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `password`, `address`, `phoneno`) VALUES
('Deepikakothapalli', 'Deepika', '12345', '2-105B\r\npaningapalli\r\nEast Godavari dist\r\nAndhra pradesh', 9494476255),
('', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
