-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 05:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `un` varchar(20) NOT NULL,
  `ps` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`un`, `ps`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `coin` varchar(40) DEFAULT NULL,
  `coout` varchar(40) DEFAULT NULL,
  `m` varchar(40) DEFAULT NULL,
  `idno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `address`, `city`, `state`, `email`, `coin`, `coout`, `m`, `idno`) VALUES
(6, 'sarah', 'juhu', 'Mumbai', 'Maharashtra', 'sarah@gmail.com', '27/11/2020', '29/11/2020', '3', '4567'),
(7, 'armaan', 'frazer town', 'Bangalore', 'Karnataka', 'armaan@gmail.com', '27/11/2020', '29/11/2020', '3', '5678'),
(8, 'farhaan', 'Mount Road', 'Chennai', 'Tamil Nadu', 'farhaan@gmail.com', '27/11/2020', '29/11/2020', '3', '6789'),
(66, 'armaan', 'frazer town', 'Bangalore', 'Karnataka', 'armaan@gmail.com', '2020-11-27', '2020-11-29', '2', '5678'),
(67, 'armaan', 'frazer town', 'Bangalore', 'Karnataka', 'armaan@gmail.com', '2020-11-27', '2020-11-29', '3', '5678'),
(68, 'armaan', 'frazer town', 'Bangalore', 'Karnataka', 'armaan@gmail.com', '2020-11-27', '2020-11-29', '2', '5678'),
(69, 'armaan', 'frazer town', 'Bangalore', 'Karnataka', 'armaan@gmail.com', '2020-11-27', '2020-11-29', '2', '5678'),
(70, 'armaan', 'frazer town', 'Bangalore', 'Karnataka', 'armaan@gmail.com', '2020-11-27', '2020-11-29', '2', '5678'),
(71, 'armaan', 'frazer town', 'Bangalore', 'Karnataka', 'armaan@gmail.com', '2020-11-27', '2020-11-29', '2', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `rno` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unbook'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `rno`, `type`, `price`, `status`) VALUES
(7, '101', 'AC', 1500, 'Book'),
(8, '102', 'Non-AC', 1000, 'Book'),
(9, '103', 'AC', 12000, 'unbook');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `un` int(20) NOT NULL,
  `ps` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;


CREATE TABLE `user` (
  `un` varchar(20) NOT NULL,
  `ps` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
