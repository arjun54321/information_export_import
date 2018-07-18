-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 03:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `checkbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `inserted`
--

CREATE TABLE `inserted` (
  `name` varchar(20) NOT NULL,
  `email` varchar(23) NOT NULL,
  `mobile` int(23) NOT NULL,
  `id` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inserted`
--

INSERT INTO `inserted` (`name`, `email`, `mobile`, `id`) VALUES
('abhi  ', '  abhi@gmail.com  ', 9876, 6),
('anush  ', '  anush@gmail.com  ', 13579, 7),
('hello', 'hello@gmail.com', 123456789, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `email` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `flag`, `email`, `mobile`, `id`) VALUES
('abhi  ', 1, '  abhi@gmail.com  ', 9876, 6),
('anush  ', 1, '  anush@gmail.com  ', 13579, 7),
('alok', 0, 'alok@gmail.com', 2011331, 8),
('qwerty', 0, 'qwerty@gmail.com', 248002, 9),
('hello', 1, 'hello@gmail.com', 123456789, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`,`mobile`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
