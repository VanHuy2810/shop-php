-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2023 lúc 08:48 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xxshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_addres` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1,
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0,
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_addres` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_addres`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_addres`, `receive_tel`) VALUES
(11, 0, '', '', '', 'builethaonhi154@gmail.com', 0, '06:28:28am 17/10/2023', 260, 0, NULL, NULL, NULL),
(17, 0, '', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '06:46:41am 17/10/2023', 130, 0, NULL, NULL, NULL),
(18, 0, '', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '06:52:03am 17/10/2023', 260, 0, NULL, NULL, NULL),
(19, 0, '', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '06:52:48am 17/10/2023', 520, 0, NULL, NULL, NULL),
(20, 0, '12', 'builethaonhi154@gmail.com', '123 hoa thi thap', '', 0, 'on', 7, 0, NULL, NULL, NULL),
(21, 12, '', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:22:32am 17/10/2023', 0, 0, NULL, NULL, NULL),
(22, 12, '', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:23:54am 17/10/2023', 0, 0, NULL, NULL, NULL),
(29, 12, 'builethaonhi', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:24:37am 18/10/2023', 130, 0, NULL, NULL, NULL),
(30, 12, 'builethaonhi', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:25:10am 18/10/2023', 0, 0, NULL, NULL, NULL),
(31, 12, 'builethaonhi', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:25:39am 18/10/2023', 130, 0, NULL, NULL, NULL),
(32, 12, 'builethaonhi', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:35:19am 18/10/2023', 100, 0, NULL, NULL, NULL),
(33, 12, '', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:40:13am 18/10/2023', 130, 0, NULL, NULL, NULL),
(34, 17, 'vanhu', '123 nguyen van cu', ' 0797265007 ', '  builethaonhi154@gmail.com', 0, '07:42:39am 18/10/2023', 130, 0, NULL, NULL, NULL),
(35, 12, 'builethaonhi', '123 hoa thi thap', '', 'builethaonhi154@gmail.com', 0, '07:44:53am 18/10/2023', 100, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 1),
(2, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 1),
(3, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 2),
(4, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 2),
(5, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 3),
(6, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 3),
(7, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 4),
(8, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 4),
(9, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 5),
(10, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 5),
(11, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 5),
(12, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 6),
(13, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 6),
(14, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 6),
(15, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 7),
(16, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 8),
(17, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 9),
(18, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 10),
(19, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 11),
(20, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 11),
(21, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 12),
(22, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 12),
(23, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 13),
(24, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 13),
(25, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 14),
(26, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 14),
(27, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 15),
(28, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 15),
(29, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 16),
(30, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 16),
(31, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 17),
(32, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 18),
(33, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 18),
(34, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 19),
(35, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 19),
(36, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 19),
(37, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 19),
(38, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 20),
(39, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 28),
(40, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 29),
(41, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 31),
(42, 12, 3, '2.jpg', 'day chuyen', 100, 1, 100, 32),
(43, 12, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 33),
(44, 17, 6, 'tonyy.jpg', 'Tony', 130, 1, 130, 34),
(45, 12, 3, '2.jpg', 'day chuyen', 100, 1, 100, 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'daychuyen'),
(3, 'Điện Thoại'),
(4, 'Đồng Hồ'),
(5, 'Lap Top'),
(6, 'Nhẫn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(3, 'day chuyen', 100, '2.jpg', 'dep ac', 10, 1),
(6, 'Tony', 130, 'tonyy.jpg', 'tony đẹp ác', 0, 5),
(8, 'Nhẫn cưới', 150, '1.jpg', 'nhẫn đám cưới', 0, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addres` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `addres`, `tel`, `role`) VALUES
(12, 'builethaonhi', '123456', 'builethaonhi154@gmail.com', '123 hoa thi thap', NULL, 1),
(17, 'vanhu', '123456  ', '  builethaonhi154@gmail.com', '123 nguyen van cu', ' 0797265007 ', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `lk_id_user` FOREIGN KEY (`id`) REFERENCES `cart` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
