-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-12-04 14:40
-- 서버 버전: 10.1.19-MariaDB
-- PHP 버전: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kccdb`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `bar`
--

CREATE TABLE `bar` (
  `idx` int(11) NOT NULL,
  `upload` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `bar`
--

INSERT INTO `bar` (`idx`, `upload`) VALUES
(1, 'Tulips.jpg'),
(2, 'link_bg_e.gif'),
(3, 'link_bg4.png'),
(4, 'img_wth.png'),
(5, 'm_serch.png'),
(6, 'm_serch.png'),
(7, 'm_serch.png'),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, 'bg_footer.jpg'),
(15, ''),
(16, 'bg_footer.jpg'),
(17, 'btn_close.png'),
(18, 'bg_footer.jpg'),
(19, 'bg_footer.jpg'),
(20, 'C:/xampp/htdocsf_up1cb9ff1bb7c1aacb03f671e8a362391ebg_footer.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `bar`
--
ALTER TABLE `bar`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
