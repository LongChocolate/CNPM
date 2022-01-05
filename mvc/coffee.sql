-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 07:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check` bit(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`, `check`, `created_at`, `updated_at`) VALUES
(1, 'Dessert', 'Thưởng thức cái món tráng đến từ Châu Á', 'images/category/trangmiengindex.jpeg', b'0', '2021-10-22 01:56:29', '2021-10-22 01:56:29'),
(2, 'Drink', 'Thưởng thức cái thức uống đến từ Châu Á', 'images/category/drinkindex.jpeg', b'0', '2021-10-22 01:56:29', '2021-10-22 01:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(50) NOT NULL,
  `Gia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `Gia`) VALUES
(1, 1, 3, 45000),
(1, 2, 3, 45000),
(1, 3, 2, 60000),
(1, 11, 1, 35000),
(2, 1, 1, 15000),
(2, 2, 2, 30000),
(2, 3, 1, 30000),
(2, 6, 1, 30000),
(2, 11, 2, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `TenNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgayTao` date NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `TenNV`, `NgayTao`, `TongTien`, `TrangThai`) VALUES
(1, 'Hoàng Đức', '2021-12-21', 185000, 'Đã thanh toán'),
(2, 'Hoàng Đức', '2021-12-21', 175000, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(10) UNSIGNED NOT NULL,
  `SDT` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `CMND` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `SDT`, `HoTen`, `Anh`, `GioiTinh`, `CMND`, `created_at`, `updated_at`) VALUES
(1, '0123456755', 'Xuân Kim Long', 'http://localhost:8888/Coffee/cnpm-coffee/mvc/asset/images/douong/Cocktail-buoi-cay.jpg', 0, 123456, '2021-10-22 01:56:29', '2022-01-03 06:16:00'),
(9, '51900760', 'Hoàng Đức', 'http://localhost:8888/Coffee/cnpm-coffee/mvc/asset/image/avatar/user-avatar.png', 0, 348923138, '2021-12-14 15:39:05', '2021-12-14 15:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `Ten`, `Anh`, `SoLuong`, `Gia`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Cocktail bưởi cay', 'asset/image/sanpham/Cocktail-buoi-cay.jpg', 9, 15000, 2, '2021-10-22 01:56:29', '2022-01-02 19:26:11'),
(2, 'Nước ép cam', 'asset/image/sanpham/Nuoc-ep-cam.jpg', 21, 15000, 2, '2021-10-22 01:56:29', '2022-01-02 19:26:11'),
(3, 'Sinh tố dâu', 'asset/image/sanpham/Sinh-to-dau.jpg', 15, 30000, 2, '2021-10-22 01:56:29', '2022-01-02 19:26:11'),
(6, 'Nước ép cherry', 'asset/image/sanpham/Nuoc-ep-cherry.jpg', 16, 30000, 2, '2021-10-22 01:56:29', '2022-01-02 19:26:11'),
(9, 'Capuchino', 'asset/image/sanpham/Capuchino.jpg', 4, 350000, 2, '2021-10-22 01:56:29', '2022-01-02 19:26:11'),
(11, 'Espresso', 'asset/image/sanpham/Espresso.jpg', 7, 35000, 2, '2021-10-22 01:56:29', '2022-01-02 19:26:11'),
(20, 'Trà Đào', 'asset/image/sanpham/tra-dao.jpg', 50, 17000, 2, '2022-01-02 09:03:33', '2022-01-02 19:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `SDT` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Loai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `actived` tinyint(1) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`SDT`, `Password`, `Loai`, `actived`, `token`, `created_at`, `updated_at`) VALUES
('0123456766', '$2y$10$EwkbNz9opUbPDXV9XoxZfuvLXekG4/CWDYyRD6M/VhC49Jy55WToG', 'Quản lí', 0, 'null', '2021-10-22 01:56:29', '2022-01-03 06:15:39'),
('51900760', '$2y$10$9VeV.x.OfDC8Xtl6aT6Sg.S7BW.wz9ToI/oAFlG1tjMb21.a5K9K6', 'Nhân viên bán hàng', 0, '2dd9dd6e4772e2bbe78c2186eca5cf3d', '2021-12-14 15:39:05', '2021-12-14 15:39:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`),
  ADD KEY `chitiethoadon_sanpham_id` (`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `sdt` (`SDT`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `product_category_id` (`category_id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`SDT`) USING BTREE,
  ADD UNIQUE KEY `sdt` (`SDT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER Table `taikhoan`
  ADD CONSTRAINT `taikhoan_nhanvien_sdt` FOREIGN KEY (`SDT`) REFERENCES `nhanvien` (`SDT`) ON DELETE CASCADE ON UPDATE CASCADE;
  

ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_hoadon_id` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_sanpham_id` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `product_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
