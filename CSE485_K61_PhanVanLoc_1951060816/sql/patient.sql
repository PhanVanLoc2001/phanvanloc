-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 09:56 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `list_blood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `blood_type` varchar(2) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
('SV001', 'Phan Văn', 'A', '2001-10-01', 1, 123456789, 'phanvana@gmail.com', 170, 30, 'A', '2021-10-21 08:23:58', '2021-10-21 13:24:47'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:23:32'),
('đư', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:18'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:18'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:18'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:19'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:19'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:19'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:19'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:25:20'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:26:19'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:26:20'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:26:20'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:26:20'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:26:20'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:26:21'),
('', '', 'lastname', '0000-00-00', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00', '2021-10-21 14:34:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
