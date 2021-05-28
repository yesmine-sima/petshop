-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 07:14 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'mihan', '202cb962ac59075b964b07152d234b70', 'shopniilmihan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mobile_no` int(15) DEFAULT NULL,
  `amount` int(15) DEFAULT NULL,
  `ids` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `uid`, `address`, `mobile_no`, `amount`, `ids`) VALUES
(4, NULL, 'dhanmondi', 12345, NULL, NULL),
(5, NULL, 'dhanmondi', 121212, NULL, NULL),
(6, NULL, 'ok', 12345, NULL, NULL),
(7, NULL, 'mirpur', 12345, 0, NULL),
(8, NULL, 'mirpur', 12345, 0, NULL),
(9, NULL, 'mirpur', 123456, 650, NULL),
(10, 1, 'dhanmondio', 1234, 650, NULL),
(11, 1, 'jhgfds', 13, 200, NULL),
(12, 1, 'mirpur', 123456789, 1000, NULL),
(13, 1, 'mirpur', 3456, 950, NULL),
(14, 1, 'mirpur', 8736573, 1750, NULL),
(15, 1, 'mirpur', 8709532, 1750, NULL),
(16, 1, 'mask', 888888, 800, NULL),
(17, 1, 'mask', 88888, 500, 1),
(18, 1, 'mask', 888888, 1500, 3),
(19, 1, 'mirpur', 1234, 200, 2);

-- --------------------------------------------------------

--
-- Table structure for table `prodetails`
--

CREATE TABLE `prodetails` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodetails`
--

INSERT INTO `prodetails` (`id`, `name`, `price`, `photo`) VALUES
(1, 'Yellow Bird', '500', 'images/bird.jpg'),
(2, 'Mini Cat', '150', 'images/cat_mini.jpg'),
(3, 'Dog BULL', '800', 'images/dog_bull.jpg'),
(4, 'Pengu Sima', '200', 'images/penguin.jpg'),
(21, 'Luca Dog', '200', 'images/luca.jpg'),
(22, 'Canaries', '150', 'images/canary.jpg'),
(23, 'Rabbit Su', '50', 'images/rabbit1.jpg'),
(26, 'Rat Jerry', '20', 'images/rat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_status`
--

CREATE TABLE `product_status` (
  `o_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `recv_sts` varchar(50) DEFAULT NULL,
  `cour_comp` varchar(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_status`
--

INSERT INTO `product_status` (`o_id`, `uid`, `recv_sts`, `cour_comp`, `id`) VALUES
(4, 1, NULL, NULL, NULL),
(6, 1, NULL, NULL, NULL),
(7, 1, NULL, NULL, NULL),
(8, 1, NULL, NULL, NULL),
(15, 1, NULL, NULL, NULL),
(16, 1, NULL, NULL, NULL),
(17, 1, NULL, NULL, NULL),
(16, 1, NULL, NULL, NULL),
(18, 1, NULL, NULL, NULL),
(1, 1, 'done', 'pathao', 1),
(10, 1, NULL, NULL, NULL),
(19, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'mihan', 'shopniilmihan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'mihu', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'mmmm', 'sh@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'sss', 'ac@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'abc', 'avc@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `prodetails`
--
ALTER TABLE `prodetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `prodetails`
--
ALTER TABLE `prodetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
