-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 11, 2019 lúc 01:52 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `internship`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmsanpham`
--

CREATE TABLE `dmsanpham` (
  `id_dm` int(10) NOT NULL,
  `ten_dm` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dmsanpham`
--

INSERT INTO `dmsanpham` (`id_dm`, `ten_dm`) VALUES
(1, 'iPhone'),
(2, 'Samsung'),
(3, 'Sony Ericson'),
(4, 'LG'),
(5, 'HTC'),
(6, 'Nokia'),
(7, 'Blackberry'),
(8, 'Asus'),
(9, 'Lenovo'),
(10, 'Motorola'),
(11, 'Mobiado'),
(15, 'OPPO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recyclebin`
--

CREATE TABLE `recyclebin` (
  `id` int(11) NOT NULL,
  `mahang` varchar(255) DEFAULT NULL,
  `tenhang` varchar(255) DEFAULT NULL,
  `mausac` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitiet`
--

CREATE TABLE `tblchitiet` (
  `id` int(11) NOT NULL,
  `id_hoadon` varchar(255) NOT NULL,
  `id_sp` varchar(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongia` int(11) DEFAULT NULL,
  `thanhtien` int(11) DEFAULT NULL,
  `tensp` varchar(255) DEFAULT NULL,
  `thieu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblchitiet`
--

INSERT INTO `tblchitiet` (`id`, `id_hoadon`, `id_sp`, `soluong`, `dongia`, `thanhtien`, `tensp`, `thieu`) VALUES
(3, '16/10/2018 - 22:34:24', 'SP5', 2, 540000, 1080000, 'banphim', 0),
(11, '23/10/2018 - 19:58:14', 'SP3', 2, 90000000, 270000000, 'samsung-galaxy-s3', 0),
(12, '23/10/2018 - 23:36:33', 'SP6', 1, 82000000, 82000000, 'samsung-galaxy-note-2-den', 0),
(14, '23/10/2018 - 23:38:30', 'SP3', 0, 90000000, 90000000, 'samsung-galaxy-s3', 0),
(15, '23/10/2018 - 23:39:34', 'SP3', 0, 90000000, 90000000, 'samsung-galaxy-s3', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhoadon`
--

CREATE TABLE `tblhoadon` (
  `id` int(11) NOT NULL,
  `mahoadon` varchar(255) DEFAULT NULL,
  `hten` varchar(11) DEFAULT NULL,
  `sdt` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblhoadon`
--

INSERT INTO `tblhoadon` (`id`, `mahoadon`, `hten`, `sdt`, `email`, `diachi`, `tongtien`) VALUES
(2, '16/10/2018 - 22:34:24', 'tien', 123456, 'hocmai@gmail.com', 'Ha Noi', 1080000),
(7, '23/10/2018 - 19:58:14', 'hieuoccho', 961207197, 'tuanhoang@gmail.com', 'Ha Noi', 270000000),
(8, '23/10/2018 - 23:36:33', 'dovantien', 869178297, 'tuanhoang@gmail.com', 'Ha Noi', 82000000),
(10, '23/10/2018 - 23:38:30', 'dovantien', 961207197, 'tuanhoang@gmail.com', 'Ha Noi', 90000000),
(11, '23/10/2018 - 23:39:34', 'hieuoccho', 867178297, 'tiendovantien32@gmail.com', 'Ha Noi', 90000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `id` int(11) NOT NULL,
  `id_dm` int(10) NOT NULL,
  `mahang` varchar(255) NOT NULL,
  `tenhang` varchar(255) DEFAULT NULL,
  `mausac` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tblsanpham`
--

INSERT INTO `tblsanpham` (`id`, `id_dm`, `mahang`, `tenhang`, `mausac`, `price`, `img`, `soluong`) VALUES
(42, 6, 'SP5', 'lumia-920-hong', 'hong', '1300000', 'lumia-920-hong.jpg', 62),
(43, 2, 'SP6', 'samsung-galaxy-note-2-den', 'den', '82000000', 'samsung-galaxy-note-2-den.jpg', 65),
(44, 1, 'SP1', 'IPHONE 5s', 'black', '870000', 'iPhone-5-16GB-Quoc-Te-Den.jpg', 98),
(47, 2, 'SP2', 'tien', 'black', '90000000', 'samsung-galaxy-note-2-den.jpg', 98),
(55, 1, 'SP4', 'IPHONE 5c', 'black', '90000000', 'iPhone-5C-16GB-Blue.jpg', 3),
(56, 2, 'SP3', 'samsung-galaxy-s3', 'trang', '90000000', 'iPhone-4-16G-Quoc-Te-Trang.jpg', 0),
(59, 6, 'SP7', 'Blackberry-Bold-9000', 'black', '90000000', 'Blackberry-Bold-9000.jpg', 20),
(60, 3, 'SP8', 'sony-x10', 'den', '890000', 'Sony-Xperia-Z-Mau-Den.jpg', 10),
(61, 4, 'SP9', 'LG-optimus-2x-SU660', 'black', '230000', 'LG-optimus-2x-SU660.jpg', 15),
(64, 5, 'SP12', 'HTC-One-Den-16GB-cong-ty-FPT', 'den', '12345478', 'HTC-One-Trang-16GB-cong-ty-FPT.jpg', 17),
(65, 5, 'SP13', 'HTC-One-Trang-16GB-cong-ty-FPT', 'vang', '890000', 'HTC-One-Trang-16GB-cong-ty-FPT.jpg', 40),
(66, 3, 'SP14', 'Sony-arc-S-LT18i-Trang', 'trang', '890000', 'Sony-arc-S-LT18i-Trang.jpg', 20),
(67, 6, 'SP15', 'lumia-800-den', 'hong', '450000', 'lumia-900-trang.jpg', 20),
(68, 1, 'SP16', 'iphone 4', 'trang', '1300000', 'iPhone-4-16G-Quoc-Te-Trang.jpg', 20),
(69, 2, 'SP17', 'Sam-Galaxy-Note-N7000-pink', 'trang', '450000', 'Sam-Galaxy-Note-N7000-pink.jpg', 0),
(70, 3, 'SP18', 'sony-x10', 'black', '870000', 'sony-x10.jpg', 20),
(71, 3, 'SP19', 'Sony-Arc-S', 'trang', '90000000', 'Sony-Arc-S.jpg', 20),
(72, 4, 'SP20', 'LG-Optimus-3D-SU760', 'trang', '1000000', 'LG-Optimus-3D-SU760.jpg', 10),
(73, 2, 'SP21', 'samsung-galaxy-note-3', 'trang', '890000', 'samsung-galaxy-note-3.jpg', 20),
(74, 2, 'SP22', 'samsung-galaxy-s4-galaxy', 'trang', '450000', 'samsung-galaxy-s4-galaxy.jpg', 20),
(75, 6, 'SP23', '3-BlackBerry-Bold-9700', 'den', '3454000', '3-BlackBerry-Bold-9700.jpg', 10),
(76, 6, 'SP24', '5-BlackBerry-Curve-3G-9300', 'den', '52340000', '5-BlackBerry-Curve-3G-9300.jpg', 10),
(77, 6, 'SP25', 'Blackberry-8820', 'den', '1000000', 'Blackberry-8820.jpg', 20),
(78, 1, 'SP26', 'IPhone-3GS-32G-Mau-Den', 'trang', '1230000', 'IPhone-3GS-32G-Mau-Den.jpg', 20),
(79, 1, 'SP27', 'iphone-x', 'black', '350000000', 'iphone-x-256gb-h2-400x460-400x460.png', 10),
(80, 1, 'SP10', 'LG-F160-Optimus-LTE-2', 'den', '890000', 'LG-F160-Optimus-LTE-2.jpg', 3),
(81, 1, 'SP11', 'htc-one-x-white', 'trang', '45670000', 'htc-one-x-white.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `level`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 2),
(5, 'tien', '2a26569e98b26668f39e98e6baef2d54', 2),
(6, 'tiendovantien32@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'binhbinh', 'da4eec5bcaad942936f4c04f56e35020', 2),
(9, 'tien1', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dmsanpham`
--
ALTER TABLE `dmsanpham`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `recyclebin`
--
ALTER TABLE `recyclebin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblchitiet`
--
ALTER TABLE `tblchitiet`
  ADD PRIMARY KEY (`id`,`id_hoadon`);

--
-- Chỉ mục cho bảng `tblhoadon`
--
ALTER TABLE `tblhoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`id`,`mahang`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dmsanpham`
--
ALTER TABLE `dmsanpham`
  MODIFY `id_dm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `recyclebin`
--
ALTER TABLE `recyclebin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblchitiet`
--
ALTER TABLE `tblchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tblhoadon`
--
ALTER TABLE `tblhoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
