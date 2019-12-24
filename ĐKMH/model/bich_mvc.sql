-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2019 lúc 12:07 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bich_mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthi`
--

CREATE TABLE `lichthi` (
  `maLichThi` int(11) NOT NULL,
  `maMon` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichthi`
--

INSERT INTO `lichthi` (`maLichThi`, `maMon`) VALUES
(4, '181-ELT2028-01'),
(1, '181-ELT2028-02'),
(2, '181-ELT2028-03'),
(10, '181-INT3301-20'),
(5, '181-INT3301-21'),
(3, '181-INT3306-02'),
(11, '181-INT3306-03'),
(6, '181-MAT1101-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mondkthi`
--

CREATE TABLE `mondkthi` (
  `maMon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenMon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngayThi` text COLLATE utf8_unicode_ci NOT NULL,
  `caThi` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhThucThi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phongThi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tongSinhVien` int(11) NOT NULL,
  `daDangKi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mondkthi`
--

INSERT INTO `mondkthi` (`maMon`, `tenMon`, `ngayThi`, `caThi`, `hinhThucThi`, `phongThi`, `tongSinhVien`, `daDangKi`) VALUES
('181-ELT2028-01', 'Chuyên nghiệp trong công nghệ', '20/12/2019', '1(8:00)', 'Viết', '305 GĐ2', 50, 30),
('181-ELT2028-02', 'Chuyên nghiệp trong công nghệ', '20/12/2019', '1(8:00)', 'Viết', '309 G2', 50, 20),
('181-ELT2028-03', 'Chuyên nghiệp trong công nghệ', '20/12/2019', '1(8:00)', 'Viết', '310 GĐ2', 50, 23),
('181-INT3301-20', 'Thực hành hệ điều hành mạng', '20/12/2019', '1(8:00)', 'Trên máy', 'PM 202-G2', 50, 30),
('181-INT3301-21', 'Thực hành hệ điều hành mạng', '20/12/2019', '2(8:00)', 'Trên máy', 'PM 202-G2', 50, 30),
('181-INT3306-02', 'Phát triển ứng dụng Web', '26/12/2019', '2(14:00)', 'Vấn đáp', 'PM 202-G2', 50, 27),
('181-INT3306-03', 'Phát triển ứng dụng Web', '26/12/2019', '2(14:00)', 'Vấn đáp', 'PM 207-G2', 50, 27),
('181-INT3306-04', 'Phát triển ứng dụng Web', '26/12/2019', '2(14:00)', 'Vấn đáp', 'PM 201-G2', 80, 50),
('181-INT3306-05', 'Phát triển ứng dụng Web', '26/12/2019', '2(14:00)', 'Vấn đáp', 'PM 302-G2', 50, 20),
('181-INT3306-06', 'Phát triển ứng dụng Web', '26/12/2019', '2(14:00)', 'Vấn đáp', 'PM 307-G2', 60, 40),
('181-MAT1101-21', 'Xác suất thống kê', '3/1/2019', '1(8:00)', 'Viết', '302 GĐ2', 50, 25),
('181-MAT1101-22', 'Xác suất thống kê', '3/1/2019', '1(8:00)', 'Viết', '301 GĐ2', 50, 40);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD PRIMARY KEY (`maLichThi`),
  ADD KEY `maMon` (`maMon`);

--
-- Chỉ mục cho bảng `mondkthi`
--
ALTER TABLE `mondkthi`
  ADD PRIMARY KEY (`maMon`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  MODIFY `maLichThi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD CONSTRAINT `lichthi_ibfk_1` FOREIGN KEY (`maMon`) REFERENCES `mondkthi` (`maMon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
