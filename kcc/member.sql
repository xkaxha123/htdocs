-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-21 04:16
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `member`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `kname` varchar(30) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `birth_year` int(4) NOT NULL,
  `birth_month` int(2) NOT NULL,
  `birth_day` int(2) NOT NULL,
  `id` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `check_pw` varchar(30) NOT NULL,
  `home_phone` int(3) NOT NULL,
  `home_front_num` int(4) NOT NULL,
  `home_back_num` int(4) NOT NULL,
  `cellphone` int(3) NOT NULL,
  `cellphone_front_num` int(4) NOT NULL,
  `cellphone_back_num` int(4) NOT NULL,
  `sms_receive` varchar(3) NOT NULL,
  `dm_address` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `home_zonecode` int(6) NOT NULL,
  `home_address` varchar(50) NOT NULL,
  `home_address2` varchar(50) NOT NULL,
  `workplace` varchar(30) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `workplace_zonecode` int(6) NOT NULL,
  `workplace_address` varchar(50) NOT NULL,
  `workplace_address2` varchar(50) NOT NULL,
  `workplace_phone` int(3) NOT NULL,
  `workplace_front_num` int(4) NOT NULL,
  `workplace_back_num` int(4) NOT NULL,
  `workplace_fax` int(3) NOT NULL,
  `workplace_fax_front` int(4) NOT NULL,
  `workplace_fax_back` int(4) NOT NULL,
  `marry_check` varchar(2) NOT NULL,
  `marry_year` int(4) NOT NULL,
  `marry_month` int(2) NOT NULL,
  `marry_day` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `kname`, `ename`, `birth_year`, `birth_month`, `birth_day`, `id`, `pw`, `check_pw`, `home_phone`, `home_front_num`, `home_back_num`, `cellphone`, `cellphone_front_num`, `cellphone_back_num`, `sms_receive`, `dm_address`, `email`, `home_zonecode`, `home_address`, `home_address2`, `workplace`, `job_name`, `position`, `workplace_zonecode`, `workplace_address`, `workplace_address2`, `workplace_phone`, `workplace_front_num`, `workplace_back_num`, `workplace_fax`, `workplace_fax_front`, `workplace_fax_back`, `marry_check`, `marry_year`, `marry_month`, `marry_day`) VALUES
(1, '123', '123', 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0),
(2, '123', '123', 0, 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0),
(3, '123', '123', 1917, 1, 1, '123', '123', '123', 123, 123, 123, 123, 123, 123, '123', '12', '123', 123, '123', '123', '123', '123', '123', 123, '123', '123', 123, 123, 123, 123, 123, 123, '12', 123, 123, 123),
(4, '123', '123', 1917, 1, 1, '123', '123', '123', 2, 123, 123, 10, 123, 123, '예', '자택', '123@123', 123, '123', '123', '123', '123', '123', 141414, '12312412', '124124124', 1, 124, 124124, 1, 124124, 124, '미혼', 1917, 1, 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
