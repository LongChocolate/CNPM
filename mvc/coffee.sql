-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:23 AM
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
(2, 11, 2, 70000),
(3, 1, 2, 50000),
(4, 1, 1, 25000),
(4, 2, 1, 15000),
(6, 1, 1, 25000),
(7, 2, 1, 15000),
(8, 3, 2, 60000),
(9, 3, 1, 30000),
(70, 2, 2, 30000),
(71, 6, 13, 390000),
(72, 2, 1, 15000),
(72, 3, 2, 60000),
(73, 3, 1, 30000),
(74, 3, 1, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenDM` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `TenDM`, `created_at`, `updated_at`) VALUES
(1, 'Món tráng miệng', '2021-10-22 01:56:29', '2022-01-08 18:50:08'),
(2, 'Cà phê', '2021-10-22 01:56:29', '2022-01-03 11:30:14'),
(3, 'Fresh ', '2021-10-22 01:56:29', '2022-01-03 11:33:21'),
(4, 'Trà sữa', '2022-01-08 18:50:58', '2022-01-08 18:50:58'),
(5, 'Trà', '2022-01-08 18:51:16', '2022-01-08 18:51:16');

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
(2, 'Hoàng Đức', '2021-12-21', 175000, 'Đã thanh toán'),
(3, 'Hoàng Đức', '2022-01-05', 50000, 'Chưa thanh toán'),
(4, 'Hoàng Đức', '2022-01-05', 40000, 'Chưa thanh toán'),
(6, 'Hoàng Đức', '2022-01-05', 25000, 'Chưa thanh toán'),
(7, 'Hoàng Đức', '2022-01-05', 15000, 'Chưa thanh toán'),
(8, 'Hoàng Đức', '2022-01-05', 60000, 'Chưa thanh toán'),
(9, 'Hoàng Đức', '2022-01-05', 30000, 'Chưa thanh toán'),
(70, 'Hoàng Đức', '2022-01-05', 30000, 'Đã thanh toán'),
(71, 'Hoàng Đức', '2022-01-08', 390000, 'Đã thanh toán'),
(72, 'Hoàng Đức', '2022-01-08', 75000, 'Đã thanh toán'),
(73, 'Hoàng Đức', '2022-01-08', 30000, 'Đã thanh toán'),
(74, 'Hoàng Đức', '2022-01-09', 30000, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Table structure for table `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `MaNL` int(10) NOT NULL,
  `TenNL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoLuong` int(10) NOT NULL,
  `NhaCungCap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NguonCungCap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HanSuDung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`MaNL`, `TenNL`, `SoLuong`, `NhaCungCap`, `NguonCungCap`, `HanSuDung`) VALUES
(1, 'Nguyên liệu Bột trà sữa', 17, '', 'Việt Nam', '6 tháng'),
(2, 'Nguyên liệu bột Cà phê', 10, '', 'Việt Nam', '6 tháng'),
(3, 'Nguyên liệu Chocolate', 15, '', 'Việt Nam', '6 tháng'),
(4, 'Nguyên liệu Dâu', 20, '', 'Việt Nam', '6 tháng'),
(5, 'Nguyên liệu Bưởi', 20, '', 'Việt Nam', '6 tháng'),
(6, 'Nguyên liệu Cam', 30, '', 'Việt Nam', '6 tháng'),
(7, 'Nguyên liệu Cherry', 50, '', 'Việt Nam', '6 tháng');

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
(1, '01234567', 'Xuân Kim Long', 'http://localhost:8888/Coffee/cnpm-coffee/mvc/asset/image/Nhanvien/1641240596251.jpg', 0, 123456, '2021-10-22 01:56:29', '2022-01-03 20:10:00'),
(9, '51900760', 'Hoàng Đức', 'http://localhost:8888/Coffee/cnpm-coffee/mvc/asset/image/Nhanvien/1641236411000.jpg', 1, 348923138, '2021-12-14 15:39:05', '2022-01-03 19:26:54'),
(48, '51900761', 'Long Xuan', 'asset/image/Nhanvien/1641240329503.jpg', 0, 12345778, '2022-01-03 20:05:32', '2022-01-03 20:05:32'),
(49, '51900777', 'Long', 'asset/image/Nhanvien/1641240708932.jpg', 0, 13131555, '2022-01-03 20:12:16', '2022-01-03 20:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaNL` int(10) NOT NULL,
  `Gia` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `Ten`, `Anh`, `MaNL`, `Gia`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Cocktail bưởi cay', 'http://localhost:8888/Coffee/cnpm-coffee/mvc/asset/image/sanpham/Cocktail-buoi-cay.jpg', 5, 25000, 3, '2021-10-22 01:56:29', '2022-01-09 15:31:43'),
(2, 'Nước ép cam', 'asset/image/sanpham/Nuoc-ep-cam.jpg', 6, 25000, 3, '2021-10-22 01:56:29', '2022-01-10 03:14:25'),
(3, 'Sinh tố dâu', 'asset/image/sanpham/Sinh-to-dau.jpg', 4, 30000, 3, '2021-10-22 01:56:29', '2022-01-09 15:31:43'),
(6, 'Nước ép cherry', 'asset/image/sanpham/Nuoc-ep-cherry.jpg', 7, 30000, 3, '2021-10-22 01:56:29', '2022-01-09 15:31:43'),
(9, 'Capuchino', 'asset/image/sanpham/Capuchino.jpg', 2, 35000, 2, '2021-10-22 01:56:29', '2022-01-10 03:15:10'),
(11, 'Espresso', 'asset/image/sanpham/Espresso.jpg', 2, 35000, 2, '2021-10-22 01:56:29', '2022-01-09 15:31:43'),
(37, 'Cà phê nóng', 'asset/image/Sanpham/1641235295570.jpg', 2, 15000, 2, '2022-01-03 15:00:45', '2022-01-10 03:17:38'),
(39, 'Chocolate Đá xay', 'asset/image/Sanpham/1641234892177.jpg', 3, 35000, 3, '2022-01-03 18:35:53', '2022-01-09 15:31:44'),
(44, 'Trà sữa truyền thống', 'asset/image/Sanpham/1641745630285.jpg', 1, 25000, 4, '2022-01-09 16:27:17', '2022-01-10 03:22:07'),
(47, 'Trà sữa Hoàng kim', 'asset/image/Sanpham/1641784895600.jpg', 1, 25000, 4, '2022-01-10 03:21:45', '2022-01-10 03:21:45');

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
('01234567', '$2y$10$EwkbNz9opUbPDXV9XoxZfuvLXekG4/CWDYyRD6M/VhC49Jy55WToG', 'Quản lí', 0, 'null', '2021-10-22 01:56:29', '2022-01-03 06:34:38'),
('51900760', '$2y$10$9VeV.x.OfDC8Xtl6aT6Sg.S7BW.wz9ToI/oAFlG1tjMb21.a5K9K6', 'Nhân viên bán hàng', 0, '2dd9dd6e4772e2bbe78c2186eca5cf3d', '2021-12-14 15:39:05', '2021-12-14 15:39:05'),
('51900761', '$2y$10$Tyh16sXehiJR1AWONdpKDe33UkbmefxfmfCSMvxLGalK9Vr/9nFZu', 'Nhân viên kho', 0, '0ea8e309aa7a32cbd1d996622a0667a9', '2022-01-03 20:05:32', '2022-01-09 08:21:01'),
('51900777', '$2y$10$MxTcx9hv9UKEJnJsriTJyeFz8rfyW3m12.9L2BFIitGYmLML1QN7u', 'Nhân viên kho', 0, '860ae0d9458c2e30eb159752802fea71', '2022-01-03 20:12:16', '2022-01-08 19:33:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`),
  ADD KEY `chitiethoadon_sanpham_id` (`MaSP`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`);

--
-- Indexes for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`MaNL`);

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
  ADD KEY `product_category_id` (`category_id`),
  ADD KEY `sanpham_nguyenlieu_MaNL` (`MaNL`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`SDT`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `MaNL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_hoadon_id` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_sanpham_id` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `product_category_id` FOREIGN KEY (`category_id`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_nguyenlieu_MaNL` FOREIGN KEY (`MaNL`) REFERENCES `nguyenlieu` (`MaNL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_nhanvien_sdt` FOREIGN KEY (`SDT`) REFERENCES `nhanvien` (`SDT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
