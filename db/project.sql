-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 08:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `phoneno` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `description`, `pname`, `price`, `stock`, `phoneno`) VALUES
(1, 'Tushar the ghost finder', 'tushar@gmail.com', 'Samartha Nagari', 'Iphone 11', 90000, 1, 2147483647),
(2, 'Rudra gupta', 'rudra@gmail.com', 'Khamla nagpur', 'jwelleries', 90000, 1, 2147483647),
(3, 'shah rukh khan', 'srk@gmail.com', 'mannat mumbai', 'Iphone 11', 90000, 1, 2147483647),
(4, 'yash bansod', 'yash@gmail.com', 'gandhi chowk sadar nagpur', 'jwelleries', 900001, 1, 2147483647),
(5, 'Gaurav Khobragade', 'gaurav@gmail.com', 'surabardi nagpur', 'Iphone 11 ', 890000, 2, 2147483647),
(6, 'sanika', 'sanika@gmail.com', 'chhtrapati chowk nagpur', 'Iphone 11', 90000, 3, 2147483647),
(7, 'suraj', 'surajtiwari18@gmail.com', 'somalwada', 'jwelleries', 90000, 2, 898878787),
(8, 'duryodhan', 'duryodhan@gmail.com', 'hastinapur', 'Iphone 12', 90000, 1, 2147483647),
(9, 'salman khan', 'sallu@gmail.com', 'bandra mumbai', 'Iphone 12', 90001, 3, 2147483647),
(10, 'om', 'om@gmail.com', 'Savarkar nagar ', 'Iphone 12', 90000, 1, 2147483647),
(11, 'sarthak', 'sarthak@gmail.com', 'Samartha Nagari', 'Iphone 11', 90000, 6, 2147483647),
(12, 'sk', 'sk@gmail.com', 'Samartha Nagari', 'Iphone 11', 90000, 5, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `modified`) VALUES
(10, 'shah rukh khan', 'srk@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'vedant', 'vedant@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Gaurav Khobragade', 'gaurav@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'sanika', 'sanika@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'suraj', 'surajtiwari18@gmail.com', '289dff07669d7a23de0ef88d2f7129e7', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'duryodhan', 'duryodhan@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'atharv', 'atharv@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'sarthak', 'sarthaka@gmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'tush', 'tush@gmail.com', '202cb962ac59075b964b07152d234b70', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
