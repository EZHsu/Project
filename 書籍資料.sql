-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 05 月 19 日 12:18
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
-- 資料庫: `book_share`
--
CREATE DATABASE IF NOT EXISTS `book_share` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `book_share`;

-- --------------------------------------------------------

--
-- 資料表結構 `book_data`
--

CREATE TABLE `book_data` (
  `bk_id` int(18) NOT NULL,
  `bk_isbn` varchar(15) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `bk_author` varchar(30) DEFAULT NULL,
  `bk_trans` varchar(30) DEFAULT NULL,
  `bk_intro` text DEFAULT NULL,
  `bk_public` varchar(15) DEFAULT NULL,
  `bk_publicdate` date DEFAULT NULL,
  `bk_type` char(10) DEFAULT NULL,
  `bk_lang` char(5) DEFAULT NULL,
  `bk_img` varbinary(500) DEFAULT NULL,
  `bk_adddate` date DEFAULT NULL,
  `apply_date` date DEFAULT NULL,
  `apply_status` tinyint(1) DEFAULT NULL,
  `apply_applicant` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `book_data`
--

INSERT INTO `book_data` (`bk_id`, `bk_isbn`, `name`, `bk_author`, `bk_trans`, `bk_intro`, `bk_public`, `bk_publicdate`, `bk_type`, `bk_lang`, `bk_img`, `bk_adddate`, `apply_date`, `apply_status`, `apply_applicant`) VALUES
(8, '5-264-00257-6', '第一人稱(First Person)', '普丁', NULL, '俄文書名:От Первого Лица,英文版名為From the first person，在普京的競選團隊支持下於2000年出版）描述了他卑微的出身。根據這本傳記，普京早年生活在社團公寓中，不斷學習以期擁有像蘇聯電影中的官員們一樣的智慧。', 'Вагриус', '2000-01-01', '人文史地', '外文', '', '2022-05-16', '2022-05-16', 1, 'admin'),
(9, '9789573337843', '哈利波特7-死神的聖物【繁體中文版20週年紀念】', ' J.K.羅琳', ' 趙丕慧, 彭倩文, 張定綺, 林靜華', '【繁體中文版20週年紀念】', '皇冠', '2021-12-06', '文學小說', '繁中', NULL, '2022-05-16', '2022-05-16', 1, 'admin'),
(10, '9789867138095', '個體經濟學', '鄭鴻章', '', '個體經濟學', '高立圖書', '2006-01-01', '大專院校教科書', '繁中', '', '2022-05-17', '2022-05-17', 1, 'admin'),
(11, '99786269589319', '料理之道：從神的規則到人的選擇', 'Rachel Laudan', '馮奕達', '隨著帝國崛起、普世宗教誕生、近代民主發展、營養科學不斷演進……\n　　從神聖到世俗、從不可吃到可吃，\n　　料理不僅記錄世界的變動，更參與打造了文明的創新！', '二十張出版', '2022-04-08', '人文史地', '繁中', 0x433a66616b6570617468696d616765732e6a706567, '2022-05-17', '2022-05-17', 1, 'admin'),
(13, '9789573293040', '花的祕密：植物為什麼會開花？', 'Rachel Ignotofsky', '陳雅茜', '《花的祕密》先介紹不同地理環境的代表花卉，如熱帶雨林的大王花、沙漠的仙人掌……並從不同顏色、形狀、大小，帶領讀者領略花朵之美，從而進入花的祕密世界。', '遠流', '2021-10-27', '生活與旅遊', '繁中', 0x433a66616b6570617468696d616765732e6a706567, '2022-05-17', '2022-05-17', 1, 'admin'),
(14, '9789866536694', '秘密花園：媲美《哈利波特》的心靈魔法書', 'F．H．勃內特', '楚茵', '這是一部關於大自然魔法和心靈成長的經典名著，也是一部和《哈利波特》一樣領盡風騷的暢銷作品。\n\n　　《哈利波特》的魔法來自幻想，帶給讀者的是奇幻的故事和天馬行空的想像。《秘密花園》的魔法則來自於心靈的力量，訴說著愛和大自然的力量最終會改變一個人的愛情和命運。\n\n　　《秘密花園》不僅是一本適合青少年閱讀的心靈魔法書，同時也是適合成人閱讀的命運魔法書。', '前景', '2018-07-03', '文學小說', '繁中', '', '2022-05-20', '2022-05-19', 1, 'admin');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `book_data`
--
ALTER TABLE `book_data`
  ADD PRIMARY KEY (`bk_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `book_data`
--
ALTER TABLE `book_data`
  MODIFY `bk_id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

COMMIT;

