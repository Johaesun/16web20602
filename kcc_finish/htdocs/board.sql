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
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `notice` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `name`, `notice`, `date`, `hit`) VALUES
(1, 'fdgdfgdfgdf', '31231321', 'fgfg', '0000-00-00', 3),
(2, 'fgdfgdf', '', 'dfdfgdg', '0000-00-00', 0),
(3, 'fdfd', 'fdfddfdfd', 'fdfdf', '2016-11-22', 23123),
(4, '', '', '', '2016-12-04', 0),
(5, '', '', '', '2016-12-04', 0),
(6, '', '', '', '2016-12-04', 0),
(7, '', '', '', '2016-12-04', 0),
(8, '', '', '', '2016-12-04', 0),
(9, '', '', '', '2016-12-04', 0),
(10, '', '', '', '2016-12-04', 0),
(11, '', '', '', '2016-12-04', 0),
(12, '', '', '', '2016-12-04', 0),
(13, '', '', '', '2016-12-04', 0),
(14, '', '', '', '2016-12-04', 0),
(15, '', '', '', '2016-12-04', 0),
(16, 'nbmn ', '', '', '2016-12-04', 5),
(17, 'efefefef', '', '', '2016-12-04', 0),
(18, '', '', '', '2016-12-04', 0),
(19, 'vdvd', '', '', '2016-12-04', 1),
(20, 'dvdvdvdvd', '', '', '2016-12-04', 27);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
