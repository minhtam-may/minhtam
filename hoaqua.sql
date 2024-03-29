-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2024 lúc 07:57 AM
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
-- Cơ sở dữ liệu: `dulieuweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoaqua`
--

CREATE TABLE `hoaqua` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoaqua`
--

INSERT INTO `hoaqua` (`id`, `name`, `price`, `image`) VALUES
(2, 'Táo', 78888, 'tao.jpg'),
(3, 'Lê', 10000, 'le.png'),
(4, 'Ôỉ', 7000, 'oi.jpg'),
(5, 'Dâu', 8000, 'dau.png'),
(9, 'Đào', 700, 'dao.png'),
(28, 'Dứa', 1200, 'dua.jpg'),
(45, 'Cam', 300, 'cam.jpg'),
(47, 'Kiwi', 4500, 'trai-kiwi.jpg'),
(53, 'Cần tây', 1234, 'cantay.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoaqua`
--
ALTER TABLE `hoaqua`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoaqua`
--
ALTER TABLE `hoaqua`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
