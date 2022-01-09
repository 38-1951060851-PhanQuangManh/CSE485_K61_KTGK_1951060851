-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: quanlythuvien
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng  DOCGIA
--

CREATE TABLE `DOCGIA` (
  `madg` int(3) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `namsinh` date NOT NULL DEFAULT current_timestamp(),
  `nghenghiep` varchar(30) NOT NULL,
  `ngaycapthe` date NOT NULL DEFAULT current_timestamp(),
  `ngayhethan` date NOT NULL DEFAULT current_timestamp(),
  `diachi` varchar (50) NOT NULL,
  

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO DOCGIA (madg, hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan,diachi) VALUES
(1, 'Phan Quang Manh', 'Nam', '2001-10-13','sinhvien', '2021-12-05','2022-12-05','HaNoi'),
(2, 'Nguyễn Văn A', 'Nam', '2001-10-05','sinhvien', '2021-12-05','2022-12-05','HaNoi');


--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng  DOCGIA
--
ALTER TABLE  DOCGIA
  ADD PRIMARY KEY (madg);

--
--
ALTER TABLE  DOCGIA
  MODIFY madg int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
