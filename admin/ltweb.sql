-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2022 lúc 10:55 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_product`
--

CREATE TABLE `cate_product` (
  `cateID` int(11) NOT NULL,
  `catename` varchar(250) NOT NULL,
  `origin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cate_product`
--

INSERT INTO `cate_product` (`cateID`, `catename`, `origin`) VALUES
(13, 'Áo phông', 'Trung Quốc'),
(14, 'Quần jean', 'USA'),
(15, 'Nội Y', 'Italy'),
(18, 'Cà vạt', 'Úc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderr`
--

CREATE TABLE `orderr` (
  `orderID` int(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `createAt` varchar(250) NOT NULL,
  `updateAt` date NOT NULL,
  `userID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderr`
--

INSERT INTO `orderr` (`orderID`, `amount`, `status`, `createAt`, `updateAt`, `userID`) VALUES
(8, '2', '2', '2022-02-22', '2022-11-29', '33'),
(10, '20000', '2', '2022-02-22', '2022-11-29', '33'),
(11, '2', '1', '2022-12-30', '2022-12-31', '40'),
(12, '53', '4', '2003-03-31', '2020-02-22', '33'),
(13, '113', '2', '2003-03-31', '2006-06-06', '33'),
(14, '123', '2', '2003-02-02', '2222-03-02', '33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `number` int(250) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `number`, `category`) VALUES
(1, 'alo', 'product-2.jpg', '123', 13, 'Áo phông'),
(4, 'sadá', 'product-3.jpg', '132', 12, 'Áo phông'),
(5, 'acc', 'product-4.jpg', '12', 1, 'Quần jean');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `prefer` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `prefer`, `sex`, `role`, `avatar`) VALUES
(33, 'a@gmail.com', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', ',,football', 'Nam', 'user', ''),
(34, 'a@gmail.com     ', 'c@gmail.com', 'a01376bb9a92a9a36dff4b3b9df8e8b0', ',,', 'Khác', 'user', ''),
(39, 'a@gmail.com', 'xx1x@gmail.com', '202cb962ac59075b964b07152d234b70', ',,', 'Nam', 'user', ''),
(40, 'nam nè', 'vonam012345@gmail.com', '202cb962ac59075b964b07152d234b70', 'walking,swiming,football', 'Nam', 'user', ''),
(41, 'ad', 'lamnhungoc@gmail.com', '202cb962ac59075b964b07152d234b70', ',,football', 'Nữ', 'user', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cate_product`
--
ALTER TABLE `cate_product`
  ADD PRIMARY KEY (`cateID`);

--
-- Chỉ mục cho bảng `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`orderID`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_order_detail` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cate_product`
--
ALTER TABLE `cate_product`
  MODIFY `cateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `orderr`
--
ALTER TABLE `orderr`
  MODIFY `orderID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_orderr_order_detail` FOREIGN KEY (`id`) REFERENCES `orderr` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
