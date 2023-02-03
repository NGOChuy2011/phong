-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 03, 2023 lúc 06:31 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_qlbd`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cauthu`
--

CREATE TABLE `tbl_cauthu` (
  `ma_ct` int(11) NOT NULL,
  `ten_ct` varchar(255) NOT NULL,
  `ngay_sinh` datetime NOT NULL,
  `que_quan` varchar(255) NOT NULL,
  `ma_clb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cauthu`
--

INSERT INTO `tbl_cauthu` (`ma_ct`, `ten_ct`, `ngay_sinh`, `que_quan`, `ma_clb`) VALUES
(2, 'Nguyễn Văn A', '2023-02-03 23:37:00', 'Thái Nguyên', 0),
(3, 'Nguyễn Văn B', '2023-02-03 23:39:00', 'Bắc Giang', 0),
(5, 'Nguyễn Văn C', '2023-02-04 00:27:00', 'Lào Cai', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_clb`
--

CREATE TABLE `tbl_clb` (
  `ma_clb` int(11) NOT NULL,
  `ten_clb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_clb`
--

INSERT INTO `tbl_clb` (`ma_clb`, `ten_clb`) VALUES
(1, 'CLB_17A'),
(2, 'CLB_17B'),
(3, 'CLB_17C');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cauthu`
--
ALTER TABLE `tbl_cauthu`
  ADD PRIMARY KEY (`ma_ct`);

--
-- Chỉ mục cho bảng `tbl_clb`
--
ALTER TABLE `tbl_clb`
  ADD PRIMARY KEY (`ma_clb`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cauthu`
--
ALTER TABLE `tbl_cauthu`
  MODIFY `ma_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_clb`
--
ALTER TABLE `tbl_clb`
  MODIFY `ma_clb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
