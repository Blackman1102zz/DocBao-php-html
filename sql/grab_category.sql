-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 01, 2021 lúc 12:49 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `grab_category`
--

DROP TABLE IF EXISTS `grab_category`;
CREATE TABLE IF NOT EXISTS `grab_category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `home` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `grab_category`
--

INSERT INTO `grab_category` (`id`, `name`, `home`, `right`) VALUES
(1, 'Xã hội', 1, 0),
(2, 'Thế giới', 1, 0),
(3, 'Pháp luật', 1, 0),
(4, 'Kinh tế', 1, 0),
(5, 'Sao 360°', 1, 0),
(6, 'Giải trí', 1, 0),
(7, 'Gia đình', 1, 0),
(8, 'Thể thao', 1, 0);
INSERT INTO `grab_category` (`id`, `name`, `home`, `right`) VALUES
(9, 'Giới trẻ', 1, 0),
(10, 'Sức khỏe', 1, 0),
(11, 'Ôtô - Xe máy', 1, 0),
(12, 'Đời sống', 1, 0),
(13, 'Công nghệ', 1, 0),
(14, 'Đẹp', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
