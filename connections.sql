-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2021 at 03:23 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geofencing`
--

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE `connections` (
  `id` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`id`, `name`, `email`, `phone_number`, `industry`, `created_at`, `updated_at`) VALUES
(1, 'Brandon Austin Caylor', 'asd@asd', '6146878124', 'asdasdasd', '2021-06-22 00:00:00', NULL),
(2, 'Brandon Austin Caylor', 'bcaylor4129@outlook.com', '32165498763', 'Something', '2021-06-22 00:00:00', NULL),
(3, 'Brandon Austin Caylor', 'bcaylor4129@outlook.com', '32165498763', 'Something', '2021-06-22 00:00:00', NULL),
(4, 'Brandon Austin Caylor', 'bcaylor4129@outlook.com', '32165498763', 'Something', '2021-06-22 00:00:00', NULL),
(5, 'Brandon Austin Caylor', 'bcaylor4129@outlook.com', '32165498763', 'Something', '2021-06-22 00:00:00', NULL),
(6, 'Testing', 'testing@email.com', '6315987432', 'Tech', '2021-06-22 02:57:51', NULL),
(7, 'Testing', 'testing@email.com', '6315987432', 'Tech', '2021-06-22 02:59:00', NULL),
(8, 'Testing', 'testing@email.com', '6315987432', 'Tech', '2021-06-22 02:59:08', NULL),
(9, 'Testing', 'testing@email.com', '6315987432', 'Tech', '2021-06-22 03:01:44', NULL),
(10, 'Brandon Austin Caylor', 'bcaylor4129@outlook.com', '6146878124', 'asdasd', '2021-06-22 03:22:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connections`
--
ALTER TABLE `connections`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
