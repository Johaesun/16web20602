-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-12-04 14:39
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
-- 테이블 구조 `kcc_form`
--

CREATE TABLE `kcc_form` (
  `idx` int(11) NOT NULL,
  `name_Ko` varchar(225) NOT NULL,
  `name_En` varchar(225) NOT NULL,
  `birth_Year` int(100) NOT NULL,
  `birth_Month` int(100) NOT NULL,
  `birth_Day` int(100) NOT NULL,
  `id` varchar(255) NOT NULL,
  `pw` varchar(225) NOT NULL,
  `pw_Re` varchar(225) NOT NULL,
  `number_1` int(100) NOT NULL,
  `number_2` int(100) NOT NULL,
  `number_3` int(100) NOT NULL,
  `phonNum_1` int(100) NOT NULL,
  `phonNum_2` int(100) NOT NULL,
  `phonNum_3` int(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `home_post` int(100) NOT NULL,
  `home_post2` int(100) NOT NULL,
  `home_address1` int(100) NOT NULL,
  `home_address2` int(100) NOT NULL,
  `stay` varchar(100) NOT NULL,
  `work_name` varchar(100) NOT NULL,
  `work_kinds` varchar(100) NOT NULL,
  `work_spot` varchar(100) NOT NULL,
  `work_post1` int(100) NOT NULL,
  `work_post2` int(100) NOT NULL,
  `work_address1` int(100) NOT NULL,
  `work_address2` int(100) NOT NULL,
  `work_number1` int(100) NOT NULL,
  `work_number2` int(100) NOT NULL,
  `work_number3` int(100) NOT NULL,
  `fax_number1` int(100) NOT NULL,
  `fax_number2` int(100) NOT NULL,
  `fax_number3` int(100) NOT NULL,
  `wed` varchar(100) NOT NULL,
  `wed_year` int(100) NOT NULL,
  `wed_month` int(100) NOT NULL,
  `wed_day` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `kcc_form`
--

INSERT INTO `kcc_form` (`idx`, `name_Ko`, `name_En`, `birth_Year`, `birth_Month`, `birth_Day`, `id`, `pw`, `pw_Re`, `number_1`, `number_2`, `number_3`, `phonNum_1`, `phonNum_2`, `phonNum_3`, `answer`, `email`, `home_post`, `home_post2`, `home_address1`, `home_address2`, `stay`, `work_name`, `work_kinds`, `work_spot`, `work_post1`, `work_post2`, `work_address1`, `work_address2`, `work_number1`, `work_number2`, `work_number3`, `fax_number1`, `fax_number2`, `fax_number3`, `wed`, `wed_year`, `wed_month`, `wed_day`) VALUES
(12, 'ㅗ', '', 1950, 1, 1, 'ㅌ', 'd', 'd', 2, 0, 0, 10, 0, 0, '', '991015a@naver.com', 0, 0, 0, 0, 'on', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(13, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(14, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(15, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(16, 'd', '', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', '991015a@naver.com', 0, 0, 0, 0, 'office', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, '', 1950, 1, 1),
(17, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@asda', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(18, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(19, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(20, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(21, 'd', 'd', 1950, 1, 1, 'd', 'd', 'd', 2, 0, 0, 10, 0, 0, 'agreement_y', 'd@d', 0, 0, 0, 0, 'home', 'd', 'd', 'd', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(22, 'g', 'g', 1950, 1, 1, 'g', 'g', 'g', 2, 0, 0, 10, 0, 0, 'agreement_y', 'fdf@fdfd', 0, 0, 0, 0, 'home', 'n', 'jn', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(23, 'g', 'g', 1950, 1, 1, 'g', 'h', 'h', 2, 0, 0, 10, 0, 0, 'agreement_y', 'fdf@fdfd', 0, 0, 0, 0, 'home', 'n', 'jn', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(24, 'l', 'l', 1950, 1, 1, 'l', 'l', 'l', 2, 0, 0, 10, 0, 0, 'agreement_y', 'l@naver', 0, 0, 0, 0, 'home', 'l', 'l', 'l', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(25, 'j', 'j', 1950, 1, 1, 'j', 'j', 'j', 2, 0, 0, 10, 0, 0, 'agreement_y', 'j@g', 0, 0, 0, 0, 'home', 'j', '', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1),
(26, 'j', 'j', 1950, 1, 1, 'j', 'j', 'j', 2, 0, 0, 10, 0, 0, 'agreement_y', 'j@g', 0, 0, 0, 0, 'home', 'j', '', 'j', 0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 'single', 1950, 1, 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `kcc_form`
--
ALTER TABLE `kcc_form`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `kcc_form`
--
ALTER TABLE `kcc_form`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
