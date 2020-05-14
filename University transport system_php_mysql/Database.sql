-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 05:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uohtd`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `staffId` varchar(256) NOT NULL,
  `deptId` int(100) NOT NULL,
  `mobileNo` bigint(20) NOT NULL,
  `designation` char(200) NOT NULL,
  `email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `address` varchar(20) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `license` bigint(20) DEFAULT NULL,
  `training` varchar(256) DEFAULT NULL,
  `authority` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user_first`, `user_last`, `staffId`, `deptId`, `mobileNo`, `designation`, `email`, `user_uid`, `address`, `user_pwd`, `license`, `training`, `authority`) VALUES
('RAMA', 'BENIWAL', '16MCMC01', 101, 9000001234, 'teacher', 'rama123@gmail.com', 'rama', 'Hyderabad', '$2y$10$WwfHFB3bRqLQwoAdxWGx6Oaxchr9n9bsyJXKW/pXbU1eWVbJPkFua', 0, '', ''),
('ANJALI', 'KAMBOJ', '16MCMC02', 101, 9800001234, 'teacher', 'anjali123@gmail.com', 'anjali', 'Hyderabad', '$2y$10$3isAhgagwDB9ghek3u/8YObf5F2GqzUWcv0/6DOOC1GPocJQziuEK', 0, '', ''),
('Yashmi', 'Aggarwal', '16MCMC03', 103, 9910000001, 'Dean', 'yashmidhiman@gmail.com', 'Yashmi', 'A-08, DTCL, Delhi', '$2y$10$8AbItpKK6OIMj4Gh6dN5HuLlXlpqxsZA5AUxGlsA5iIz7cI9ucGjC', 0, '', ''),
('Anu', 'Beniwal', '16MCMC04', 104, 9910000002, 'Driver', 'anubeniwal@gmail.com', 'anu', 'Room No-221, LH-4', '$2y$10$QoWd/NX2vY3tuxvxuLuCsOwLuJHRr.hSxUPohQaUg5b22UqCxs5Wa', 0, '2', 'Basic'),
('Abhay', 'Deol', '16MCMC05', 104, 9910000003, 'Driver', 'abhay@gmail.com', 'abhay', 'Room No-222, LH-D', '$2y$10$YAOIVJTIWY8XIkJmzNpM3u/3WHCnqOd1rUGv9JJz/YVudgl/55ttW', 0, '5', 'Inspetor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
