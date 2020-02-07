-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 06 oct. 2019 à 22:32
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `duan`
--

-- --------------------------------------------------------

--
-- Structure de la table `blsanpham`
--

CREATE TABLE `blsanpham` (
  `id_bl` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `binh_luan` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_gio` datetime NOT NULL,
  `ht` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `blsanpham`
--

INSERT INTO `blsanpham` (`id_bl`, `id_sp`, `ten`, `dien_thoai`, `binh_luan`, `ngay_gio`, `ht`) VALUES
(9, 32, 'Lê Văn Tân', '12121212', 'sasasas', '2017-02-28 05:23:01', 0),
(11, 8, 'Nguyễn Thị Hồng', '0988888888', 'Lơp chúng ta là PHPK 106', '2017-03-14 03:34:35', 0),
(12, 28, 'Le Van Tan', '0979 598 500', 'Sản phẩm dùng rất tốt', '2017-04-07 12:40:38', 1),
(13, 5, 'Le Van Tan', '123456', 'Sản phẩm dùng rất tốt', '2017-04-22 05:42:44', 0),
(14, 5, 'Quat Dai CA', '1234', 'Hôm nay bạn mang chó đến lớp', '2017-04-22 05:44:52', 0),
(15, 21, 'Quat Dai Ca', '123456', 'qqqqqqqqqqq', '2017-04-27 14:44:25', 0),
(16, 31, 'qwqwq', '1111', '1111', '2017-04-27 14:50:29', 1),
(17, 1, 'wqwq', '123', 'wqwqw', '2017-04-27 15:18:07', 0),
(18, 2, 'cc', 'cc', 'ccc', '2018-09-07 10:31:57', 0);

-- --------------------------------------------------------

--
-- Structure de la table `chitiet_hd`
--

CREATE TABLE `chitiet_hd` (
  `id_ct_hd` int(200) NOT NULL,
  `ten_khach_hang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_gio` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sl` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `thanh_tien` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `chitiet_hd`
--

INSERT INTO `chitiet_hd` (`id_ct_hd`, `ten_khach_hang`, `email`, `sdt`, `dia_chi`, `ngay_gio`, `ten_sp`, `gia_sp`, `sl`, `thanh_tien`) VALUES
(45, 'binh', 'binh@gmail.com', '0869178297', 'HN', '2019-09-29 13:08:40', 'BlackBerry-Curve-3G-9300', '8600000000', '1', 2147483647),
(46, 'binh', 'binh@gmail.com', '0869178297', 'HN', '2019-09-29 13:15:35', 'BlackBerry-Curve-3G-9300', '8600000000', '1', 2147483647),
(47, 'binh', 'binh@gmail.com', '0869178297', 'HN', '2019-09-29 13:19:32', 'BlackBerry-Curve-3G-9300', '8600000000', '1', 2147483647),
(48, 'binh', 'binh@gmail.com', '0869178297', 'HN', '2019-09-29 13:20:26', 'BlackBerry-Curve-3G-9300', '8600000000', '1', 2147483647),
(57, 'binh', 'binh@gmail.com', '123132855', 'HN', '2019-09-29 17:30:52', 'LG LTE 3 (LG F260) ; LG Optimus 3D SU760', '8600000 ; 8600000', '2 ; 1', 25800000),
(58, 'xghdgfh', 'dfghdfgh@gmail.com', '132138', 'HN', '2019-09-29 17:41:31', 'iPhone 5S 32GB Quốc tế ; Nokia-8800-Sirocco-Gold', '100000000 ; 100000000', '1 ; 1', 200000000);

-- --------------------------------------------------------

--
-- Structure de la table `dmsanpham`
--

CREATE TABLE `dmsanpham` (
  `id_dm` int(10) NOT NULL,
  `ten_dm` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `dmsanpham`
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
(12, 'Vertu'),
(13, 'QMobile'),
(14, 'OPPO'),
(15, 'Huawei');

-- --------------------------------------------------------

--
-- Structure de la table `quangcao`
--

CREATE TABLE `quangcao` (
  `id_qc` int(100) NOT NULL,
  `nguoi_cung_cap` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `ht` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quangcao`
--

INSERT INTO `quangcao` (`id_qc`, `nguoi_cung_cap`, `sdt`, `email`, `anh`, `ht`) VALUES
(1, 'DVTT', '1900444', 'tiendovantien32@gmail.com', 'Jellyfish.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) UNSIGNED NOT NULL,
  `id_dm` int(11) UNSIGNED NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bao_hanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phu_kien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khuyen_mai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dac_biet` int(1) NOT NULL,
  `chi_tiet_sp` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_dm`, `ten_sp`, `anh_sp`, `gia_sp`, `bao_hanh`, `phu_kien`, `tinh_trang`, `khuyen_mai`, `trang_thai`, `dac_biet`, `chi_tiet_sp`) VALUES
(1, 1, 'IPhone 3GS 32G Màu Đen', 'IPhone-3GS-32G-Mau-Den.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(2, 1, 'iPhone 4 16G Quốc Tế Trắng', 'iPhone-4-16G-Quoc-Te-Trang.jpg', '86000000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>Tất cả c&aacute;c sản phẩm Điện thoại của Shop đều l&agrave; c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng, được bảo h&agrave;nh 12 th&aacute;ng tr&ecirc;n to&agrave;n quốc.</p>\r\n'),
(3, 1, 'iPhone 5 16GB Quốc Tế Đen', 'iPhone-5-16GB-Quoc-Te-Den.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(4, 1, 'iPhone 5C 16GB Blue', 'iPhone-5C-16GB-Blue.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(5, 1, 'iPhone 5S 32GB Quốc tế', 'iPhone-5S-32GB-Quoc-te-Mau-Trang.jpg', '100000000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>Tất cả c&aacute;c sản phẩm Điện thoại của Shop đều l&agrave; c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng, được bảo h&agrave;nh 12 th&aacute;ng tr&ecirc;n to&agrave;n quốc.</p>\r\n'),
(6, 2, 'Samsung Galaxy Note N7000 pink', 'Sam-Galaxy-Note-N7000-pink.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(7, 2, 'Samsung Galaxy Note 2 đen', 'samsung-galaxy-note-2-den.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(8, 2, 'Samsung Galaxy Note 3', 'samsung-galaxy-note-3.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(9, 2, 'Samsung Galaxy S2', 'samsung-galaxy-s2.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(10, 2, 'Samsung Galaxy S3', 'samsung-galaxy-s3.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(11, 2, 'Samsung Galaxy S4', 'samsung-galaxy-s4-galaxy.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(12, 3, 'Sony Arc S (LT18i) Trắng', 'Sony-arc-S-LT18i-Trang.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(13, 3, 'Sony Arc S', 'Sony-Arc-S.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(14, 3, 'Sony X10', 'sony-x10.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(15, 3, 'Sony Xperia TX (LT29i) Đen', 'Sony-Xperia-TX-LT29i-Den.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(16, 3, 'Sony Xperia Z Màu Đen', 'Sony-Xperia-Z-Mau-Den.jpg', '86000000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>Tất cả c&aacute;c sản phẩm Điện thoại của Shop đều l&agrave; c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng, được bảo h&agrave;nh 12 th&aacute;ng tr&ecirc;n to&agrave;n quốc.</p>\r\n'),
(17, 4, 'LG F160 Optimus LTE 2', 'LG-F160-Optimus-LTE-2.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(18, 4, 'LG LTE 3 (LG F260)', 'LG-LTE-3-LG F260.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(19, 4, 'LG Optimus 2X SU660', 'LG-optimus-2x-SU660.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(20, 4, 'LG Optimus 3D SU760', 'LG-Optimus-3D-SU760.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(21, 4, 'LG Optimus G', 'LG-Optimus-G.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>Tất cả c&aacute;c sản phẩm Điện thoại của Shop đều l&agrave; c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng, được bảo h&agrave;nh 12 th&aacute;ng tr&ecirc;n to&agrave;n quốc.</p>\r\n'),
(22, 4, 'LG Optimus L7(LG P705)', 'LG-Optimus-L7LG P705.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(23, 5, 'HTC EVO 3D', 'HTC-EVO-3D.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(24, 5, 'HTC One Đen 16GB công ty FPT', 'HTC-One-Den-16GB-cong-ty-FPT.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 0, 'Tất cả các sản phẩm Điện thoại của Shop đều là các sản phẩm chính hãng, được bảo hành 12 tháng trên toàn quốc.'),
(25, 5, 'HTC One Trắng 16GB FPT', 'HTC-One-Trang-16GB-cong-ty-FPT.jpg', '8600000', '12 tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>Tất cả c&aacute;c sản phẩm Điện thoại của Shop đều l&agrave; c&aacute;c sản phẩm ch&iacute;nh h&atilde;ng, được bảo h&agrave;nh 12 th&aacute;ng tr&ecirc;n to&agrave;n quốc.</p>\r\n'),
(28, 7, 'Blackberry-Bold-9000', '3-BlackBerry-Bold-9700.jpg', '8000000000', '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>(D&acirc;n tr&iacute;) - Đ&aacute;m ch&aacute;y b&ugrave;ng ph&aacute;t trưa nay, 7/4, tại khu nh&agrave; t&ocirc;n ngay gần t&ograve;a nh&agrave; Keangnam, đường Phạm H&ugrave;ng. Ngọn lửa c&ugrave;ng kh&oacute;i đen bốc l&ecirc;n dữ dội l&agrave;m đen kịt một g&oacute;c kh&ocirc;ng gian. Giao th&ocirc;ng quanh khu vực bị ảnh hưởng, trong đ&oacute; đường tr&ecirc;n cao bị tắc một đoạn kh&aacute; d&agrave;i...</p>\r\n'),
(29, 7, 'BlackBerry-Curve-3G-9300', '5-BlackBerry-Curve-3G-9300.jpg', '8600000000', '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>sasasa</p>\r\n'),
(30, 6, 'Nokia-8800-Sirocco-Gold', '6-Nokia-8800-Sirocco-Gold.jpg', '100000000', '12 Tháng', 'Hộp, sách, sạc, cáp, tai nghe', 'Máy Mới 100%', 'Dán Màn Hình 3 lớp', 'Còn hàng', 1, '<p>Tất cả sản phẩm đều c&oacute; rất nhiều.</p>\r\n'),
(31, 6, 'Lumia-800-Blackc', 'Desert.jpg', '8600000', '12 Năm', 'Hộp, sách, sạc, cáp, tai nghe, ...', 'Máy Mới 1000%', 'Dán Màn Hình 13 lớp', 'Còn hàng', 1, '<p>Tất cả sản phẩm đều có rất nhiều. Tất cả sản phẩm đều có rất nhiều. Tất cả sản phẩm đều có rất nhiều.</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_thanhvien` int(10) NOT NULL,
  `sdt` int(100) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quyen_truy_cap` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `thanhvien`
--

INSERT INTO `thanhvien` (`id_thanhvien`, `sdt`, `email`, `mat_khau`, `quyen_truy_cap`) VALUES
(9, 961207197, 'tranbinh@gmail.com', 'binh1234', 2),
(10, 123456789, 'thibinh@gmail.com', 'binh1234', 1),
(11, 12335, 'binhngu@gmail.com', 'binh1234', 1),
(12, 961207197, 'binhbinh@gmail.com', '123', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blsanpham`
--
ALTER TABLE `blsanpham`
  ADD PRIMARY KEY (`id_bl`);

--
-- Index pour la table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  ADD PRIMARY KEY (`id_ct_hd`);

--
-- Index pour la table `dmsanpham`
--
ALTER TABLE `dmsanpham`
  ADD PRIMARY KEY (`id_dm`);

--
-- Index pour la table `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`id_qc`);

--
-- Index pour la table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Index pour la table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blsanpham`
--
ALTER TABLE `blsanpham`
  MODIFY `id_bl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `chitiet_hd`
--
ALTER TABLE `chitiet_hd`
  MODIFY `id_ct_hd` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `dmsanpham`
--
ALTER TABLE `dmsanpham`
  MODIFY `id_dm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `id_qc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id_thanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
