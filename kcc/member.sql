-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-20 02:42
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 5.6.20

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
  `jobname` varchar(30) NOT NULL,
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
  `marry_day` int(2) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
