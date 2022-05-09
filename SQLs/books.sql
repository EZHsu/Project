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
-- 資料表結構 `books`
--

CREATE TABLE `books` (
  `bk_id` varchar(500) NOT NULL,
  `bk_isbn` varchar(500) DEFAULT NULL,
  `bk_title` varchar(500) NOT NULL,
  `bk_img` varchar(500) NOT NULL,
  `bk_author` varchar(500) NOT NULL,
  `bk_tran` varchar(500) DEFAULT NULL,
  `bk_publish` varchar(500) NOT NULL,
  `bk_sort` varchar(500) NOT NULL,
  `bk_lang` varchar(500) NOT NULL,
  `bk_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `books`
--

INSERT INTO `books` (`bk_id`, `bk_isbn`, `bk_title`, `bk_img`, `bk_author`, `bk_tran`, `bk_publish`, `bk_sort`, `bk_lang`, `bk_date`) VALUES
('1367952695', '9571039640985', '暮光之城', 'feature-1', '史蒂芬妮．梅爾', '瞿秀蕙', '尖端出版', '文學小說', '外文', '2022-05-08 14:20:33'),
('7737469031', '9789860629392', '30年青春‧震耳欲聾', 'feature-2', '許理平(虎哥)', NULL, '出色文化', '藝術設計', '中文', '2022-05-05 04:21:10'),
('4973946393', '9780143130154', 'Me Before You', 'feature-3', 'Moyes, Jojo', NULL, 'Penguin Group USA', '文學小說', '外文', '2022-05-01 18:29:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
