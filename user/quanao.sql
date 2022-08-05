-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `khach`
--

CREATE TABLE `khach` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach`
--

INSERT INTO `khach` (`id`, `username`, `email`, `password`, `address`, `phone`) VALUES
(12, 'ngoanh', 'ngoanh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '12a', 12),
(16, 'ad', 'quan@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', 0),
(17, 'da', 'ngoanh@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'ad', 123),
(18, 'ng', 'qu@gmail.com', '3c59dc048e8850243be8079a5c74d079', 'wsad', 123),
(19, 'cuong', 'ngoanhd@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', 0),
(20, 'phuc', 'ngoanhsda@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'asd', 1212),
(23, 'asdds', 'ngoanh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '', 0),
(24, 'nam', 'nam@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updateAt` datetime NOT NULL,
  `khachID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `price` int(50) NOT NULL,
  `number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `content` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `content`) VALUES
(1, 'ao loai 1', './images/product-1.jpg', 12000, 'hang loại 1\nCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện lợi\nCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện lợi\nC'),
(2, 'ao loai 2', '\r\nimages/product-2.jpg', 12000, 'áo loại 2 thoáng mát\r\nCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện lợiCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện'),
(3, 'ao loai 3', './images/product-3.jpg', 12000, 'hang loại 3\r\nCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện lợi\r\nCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện lợi\r\nC'),
(4, 'ao loai 2', '\r\nimages/product-4.jpg', 12000, 'áo loại 4 thoáng mát\r\nCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện lợiCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện'),
(5, 'ao loai 2', '\r\nimages/product-5.jpg', 12000, 'áo loại 5 thoáng mát\r\nCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện lợiCOOLMATE - Áo thun nam 100% Coton Essential Tee thoải mái tiện');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khach`
--
ALTER TABLE `khach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `khachID` (`khachID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khach`
--
ALTER TABLE `khach`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`khachID`) REFERENCES `khach` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
