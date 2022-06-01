-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `book`
--

-- --------------------------------------------------------

--
-- 資料表結構 `authority`
--
drop DATABASE book;
CREATE DATABASE book;
use book;
CREATE TABLE `authority` (
  `name` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `service_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `authority`
--

INSERT INTO `authority` (`name`, `account`, `password`, `level`, `service_id`) VALUES
('gaga', '987654321', 'ladygaga', 'user', ''),
('hihiihi', '10909090', 'hihi', 'user', ''),
('joanna', '0905176218', '1009', 'user', ''),
('koko', 'root', '12345678', 'user', ''),
('kooko', '9999999', 'koko', 'user', ''),
('popo', '1111122222', 'popo', 'user', ''),
('sophie', 'sophie@gmail.com', 'sophie', 'user', ''),
('yoyo', '091111111', '1111', 'user', ''),
('管理員', '0912345678', '0000', 'admin', '');

-- --------------------------------------------------------

--
-- 資料表結構 `bookdata`
--

CREATE TABLE `bookdata` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `translator` varchar(100) NOT NULL,
  `Introduction` varchar(100) NOT NULL,
  `press` varchar(100) NOT NULL,
  `publicationDate` date NOT NULL,
  `Category` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `coverphoto` varchar(100) NOT NULL,
  `addtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `comment_id` varchar(50) NOT NULL,
  `comment_score` varchar(100) NOT NULL,
  `comment_content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_score`, `comment_content`) VALUES
('', '1', 'bad bad');

-- --------------------------------------------------------

--
-- 資料表結構 `costomer_service`
--

CREATE TABLE `costomer_service` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(80) NOT NULL,
  `end` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `costomer_service`
--

INSERT INTO `costomer_service` (`id`, `name`, `email`, `title`, `content`, `end`) VALUES
('', 'com', 'com', 'oc ', 'co ', 0),
('', 'ff', 'ff@gmail.com', '', 'fff', 0),
('', 'hihihihi', 'hihiihi@gmail.com', 'jey', '', 0),
('', 'hoho', 'hoho@gmail.com', 'hoho', 'hooooo', 0),
('', 'jjjjj', 'jjjjj@gmail.com', 'jijijijijij', 'cute\r\n', 0),
('', 'joannna', 'jojojojjaa@gmail.com', 'jojojo', 'jojojo', 0),
('', 'koko', 'koko@gmail.com', 'koko', 'koooooooo', 0),
('', 'ladygaga', 'gagagaga@gmail.com', 'gaga pretty', 'gaga really pretty', 0),
('', 'sophie', 'sophie@gmail.com', '服務態度不好', '有待加強', 0),
('', 'taylor', 'taylor@gmail.com', 'pretty girl', 'I like to sing.', 0),
('', '窩窩窩', 'wo@gmail.com', '窩窩窩', '窩窩窩窩窩喔', 0),
('', '金世正', 'juan@gmail.com', '網站可更優化', '指示不明確', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `report`
--

CREATE TABLE `report` (
  `report_id` varchar(50) NOT NULL,
  `report_people1` varchar(50) NOT NULL,
  `report_people2` varchar(50) NOT NULL,
  `report_reason` varchar(100) NOT NULL,
  `report_content` varchar(200) NOT NULL,
  `record_id` varchar(50) NOT NULL,
  `end` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `report`
--

INSERT INTO `report` (`report_id`, `report_people1`, `report_people2`, `report_reason`, `report_content`, `record_id`) VALUES
('', '', '', '服務有夠爛', 'bad bad', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`name`);

--
-- 資料表索引 `bookdata`
--
ALTER TABLE `bookdata`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- 資料表索引 `costomer_service`
--
ALTER TABLE `costomer_service`
  ADD PRIMARY KEY (`name`);

--
-- 資料表索引 `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
