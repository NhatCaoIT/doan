-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2019 lúc 06:36 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mnm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acc`
--

CREATE TABLE `acc` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `acc`
--

INSERT INTO `acc` (`id`, `username`, `password`, `email`) VALUES
(1, 'nhatcao', '1234', 'huy@gmail.com'),
(2, 'nhat', '123', 'nhatcaodl@gmail.com'),
(3, 'nam', '1234', 'nhatcaodl@gmail.com'),
(4, 'dungle', '1234', 'admin@gmail.com'),
(5, 'dungle', '1234', 'admin@gmail.com'),
(6, 'dungle', '1234', 'admin@gmail.com'),
(7, 'Cao Ba Nhat', '1', 'nhatcaodl@gmail.com'),
(8, '', '123', 'nhatcaodl@gmail.com'),
(9, '', '123', 'nhatcaodl@gmail.com'),
(10, '', '1', 'nhatcaodl@gmail.com'),
(11, '', '1', 'nhatcaodl@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `image`, `date`) VALUES
(1, 'Oppo - F9', 1000000, 100, '5c2f1f72b8fc1-5c1f8cecec5ed-táº£i xuá»‘ng (1).jpg', '2019-01-04'),
(3, 'Nokia', 1000000, 122, '5c2f41cae79b0-5c2244148b259-product-2.jpg', '2019-01-02'),
(4, 'Xiaomi', 9000000, 100, '5c2f42102b8d7-5c2d9629006aa-5c2226b888544-product-1.jpg', '2019-01-09'),
(6, 'Ipone6-Plus', 72000000, 12, '5c2f425605526-5c2243ef3a1b4-product-3.jpg', '2019-01-03'),
(7, 'Sony-Zend', 1000000, 122, '5c2f426ece179-5c22326c3f3ca-product-4.jpg', '2019-01-09'),
(8, 'Motorola', 72000000, 12, '5c2f42916dce5-5c2f1e994a8af-5c2edf6e0caee-5c2244148b259-product-2.jpg', '2019-01-16'),
(9, 'LG - LT3', 1000000, 110, '5c2f42a60862f-5c2243ef3a1b4-product-3.jpg', '2019-01-04'),
(10, 'Iphone5-SE', 5000000, 122, '5c2f63b825b0f-5c2d9629006aa-5c2226b888544-product-1.jpg', '2019-01-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'NhatCao', '12345', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
