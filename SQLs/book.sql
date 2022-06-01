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
-- 資料表結構 `admin_prefer`
--
drop DATABASE book;
CREATE DATABASE book;
use book;
CREATE TABLE `admin_prefer` (
  `prefer_id` int(50) NOT NULL,
  `bk_ISBN` varchar(500) CHARACTER SET utf8 NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `bk_img` varchar(500) CHARACTER SET utf8 NOT NULL,
  `add_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `admin_prefer`
--

INSERT INTO `admin_prefer` (`prefer_id`, `bk_ISBN`, `name`, `bk_img`, `add_time`) VALUES
(1, '9571039640985', '暮光之城', 'feature-1.jpg', '2022-05-11'),
(2, '978014313015', 'Me Before You', 'feature-2.jpg', '2022-05-09'),
(3, '95719789576587405039640985', '大概是時間在煮我吧', 'feature-4.jpg', '2022-05-17'),
(4, '9789869968737', '從此好好過生活', '1.jpg', '2022-05-11'),
(5, '9789573289982', '老派少女購物路線', '2.jpg', '2022-05-09'),
(6, '9789571386508', '此生，你我皆短暫燦爛', '5.jpg', '2022-05-03'),
(7, '9789573266815', '一個都不留', '一個都不留.jpg', '2022-05-10'),
(8, '9786267061190', '我們想去的地方', '3.jpg', '2022-05-04');

-- --------------------------------------------------------

--
-- 資料表結構 `authority`
--

CREATE TABLE `authority` (
  `account` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` char(20) NOT NULL,
  `service_ID` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `point` int(100) NOT NULL,
  `report_count` int(11) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `authority`
--

INSERT INTO `authority` (`account`, `password`, `name`, `level`, `service_ID`, `point`) VALUES
('0905176218', 'joanna1009', 'joanna', 'user', NULL, 50),
('0912345678', '0000', 'A', 'admin', '', 0),
('0918482618', '0313', 'jimmy', 'user', NULL, 0),
('0922222222', '12345678', 'sophie', 'user', NULL, 0),
('0923423423', '77777', 'fly', 'user', NULL, 0),
('0963852741', 'ladygaga', 'ladygaga', 'user', '', 0),
('09655432371', '0808', 'shawn', 'user', NULL, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `book_data`
--

CREATE TABLE `book_data` (
  `bk_ID` int(18) NOT NULL,
  `bk_ISBN` varchar(500) DEFAULT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `bk_author` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `bk_trans` varchar(30) DEFAULT NULL,
  `bk_intro` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `bk_public` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `bk_publicdate` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `bk_type` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `bk_img` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `bk_adddate` date DEFAULT NULL,
  `apply_date` date NOT NULL,
  `apply_status` varchar(500) NOT NULL,
  `apply_applicant` varchar(500) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `book_data`
--

INSERT INTO `book_data` (`bk_ID`, `bk_ISBN`, `name`, `bk_author`, `bk_trans`, `bk_intro`, `bk_public`, `bk_publicdate`, `bk_type`, `bk_img`, `bk_adddate`, `apply_date`, `apply_status`, `apply_applicant`) VALUES
(1, '9789869968737', '從此好好過生活', '張琉珍', '王品涵', NULL, '新經典文化', '2021/02/03', '文學小說', '1.jpg', '2022-05-17', '2022-05-10', '1', '11'),
(2, '9789573289982', '老派少女購物路線', '洪愛珠', NULL, NULL, '遠流', '2021 / 03 / 26', '生活與旅遊', '2.jpg', '2022-05-09', '2022-05-05', '1', '11'),
(3, '9571039640985', '暮光之城', '史蒂芬妮．梅爾', '瞿秀蕙', '', '尖端出版', '2001 / 04 / 23', '文學小說', 'feature-1.jpg', '0000-00-00', '2022-05-17', '1', ''),
(4, '978014313015', 'Me Before You', 'Moyes, Jojo', '', '', 'Penguin Group U', '2005 / 03 / 18', '文學小說', 'feature-3.jpg', '0000-00-00', '2022-05-17', '1', ''),
(5, '9789860629392', '30年青春‧震耳欲聾', '許理平(虎哥)', '', '', '出色文化', '2008 / 08 / 06', '藝術設計', 'feature-2.jpg', '0000-00-00', '2022-05-17', '1', ''),
(6, '9789576587405', '大概是時間在煮我吧', '張西', '', '', '三采文化股份有限公司', '2011 / 05 / 28', '心理勵志', 'feature-4.jpg', '0000-00-00', '2022-05-17', '1', ''),
(7, '9781984814692', 'How It Feels to Float', 'Helena Fox', '', '', 'Penguin Group (', '2001 / 06 / 10', '文學小說', 'feature-5.jpg', '0000-00-00', '2022-05-17', '1', ''),
(8, '9789571386508', '此生，你我皆短暫燦爛', '王鷗行', ' 何穎怡', NULL, '時報出版', '2021 / 03 / 05', '文學小說', '5.jpg', NULL, '0000-00-00', '1', ''),
(9, '9789573266815', '一個都不留', '克里絲蒂', '劉萬男', '', '遠流', '2010 / 08 / 01', '文學小說', '一個都不留.jpg', '0000-00-00', '2022-05-19', '1', 'joanna'),
(10, '9786267061190', '我們想去的地方', '張琉珍', '胡椒筒', '', '新經典文化', '2022 / 04 / 27', '人生史地', '3.jpg', '0000-00-00', '2022-05-19', '1', '11'),
(20, '9789574449644', '傷心咖啡店之歌', '朱少麟', '', '', '九歌', '2014/10/30', '文學小說', '傷心咖啡店之歌.jpg', '0000-00-00', '2022-05-20', '0', 'joanna');

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(50) NOT NULL,
  `trade_lend` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `comment_write` varchar(100) NOT NULL,
  `comment_book` varchar(100) NOT NULL,
  `comment_score` varchar(100) NOT NULL,
  `comment_content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `comment`
--

INSERT INTO `comment` (`comment_id`, `trade_lend`, `comment_write`, `comment_book`, `comment_score`, `comment_content`) VALUES
(1, 'shawn mendes', 'joanna', '新文化苦旅', '2', 'can be better'),
(2, 'jimmy', 'joanna', '名偵探柯南', '3', 'better'),
(3, 'jimmy', 'joanna', '名偵探柯南', '1', 'can be more better'),
(4, 'shawn mendes', 'joanna', '新文化苦旅', '3', 'kokokok'),
(5, 'jimmy', 'joanna', '名偵探柯南', '4', 'pretty good\r\n'),
(6, 'joanna', 'ladygaga', '別鬧了，費曼先生', '5', '服務態度良好'),
(7, 'joanna', 'love couple', '安妮日記', '2', '回訊息速度有點慢'),
(8, 'jimmy', 'joanna', '名偵探柯南', '1', 'bad bad'),
(11, 'shawn mendes', 'joanna', '新文化苦旅', '3', 'pretty good'),
(14, 'jimmy', 'joanna', '名偵探柯南', '1', 'can be mush better');

-- --------------------------------------------------------

--
-- 資料表結構 `customer_service`
--

CREATE TABLE `customer_service` (
  `service_id` int(20) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_email` varchar(50) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_content` varchar(100) NOT NULL,
  `service_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `customer_service`
--

INSERT INTO `customer_service` (`service_id`, `service_name`, `service_email`, `service_title`, `service_content`, `service_end`) VALUES
(1, 'ting ', 'ting@gmail.com', 'dadewwwwedq', 'efqwedas', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `middle`
--

CREATE TABLE `middle` (
  `trade_id` int(20) NOT NULL DEFAULT '0',
  `authority_account` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `middle`
--

INSERT INTO `middle` (`trade_id`, `authority_account`) VALUES
(1, ''),
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- 資料表結構 `middlee`
--

CREATE TABLE `middlee` (
  `account` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `trade_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `middlee`
--

INSERT INTO `middlee` (`account`, `trade_id`) VALUES
('0905176218', 0),
('0912345678', 999),
('0918482618', 0),
('095555555', 0),
('0958756717', 0),
('0963852741', 0),
('0987654321', 0),
('156555', 0),
('35363', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `point`
--

CREATE TABLE `point` (
  `point_id` int(11) NOT NULL,
  `point_date` date NOT NULL,
  `point_bookname` varchar(100) NOT NULL,
  `point_plus` varchar(50) NOT NULL,
  `point_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `report`
--

CREATE TABLE `report` (
  `report_id` int(50) NOT NULL,
  `report_write` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `report_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `reported_account` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `report_reason` varchar(100) NOT NULL,
  `report_content` varchar(200) NOT NULL,
  `report_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `report`
--

INSERT INTO `report` (`report_id`, `report_write`, `report_name`,`reported_account`, `report_reason`, `report_content`) VALUES
(1, '', '','0905176218','服務有夠爛', 'bad bad'),
(2, '', '','0922222222' ,'haha', 'haaaa'),
(3, '', '','0922222222', 'jaaa', 'kaaa'),
(4, '', '','0922222222', '服務有夠爛', '態度不好'),
(5, '', '','0923423423', '我很生氣 ', '寄件速度太慢'),
(17, '', '','0923423423', '騷擾', '訊息騷擾\r\n'),
(22, '', '','0923423423', '寄件速度慢', 'very slow\r\n'),
(23, '', '','09655432371', '服務有夠爛', 'jijij'),
(24, '', '','0923423423', 'jiji', 'ijia'),
(25, '', '','0963852741', 'jojo', 'ojoj'),
(27, '', '','0923423423', '母湯', 'vet t t t '),
(28, 'joanna','', '0963852741', 'jijie ', 'awex'),
(32, 'joanna', 'bear','0963852741', 'not good', 'unlike this experience'),
(33, 'joanna', 'bear','0905176218', 'bad', 'dislike this experience'),
(34, 'joanna', 'bear','0918482618', 'very bad', 'badb bad');

-- --------------------------------------------------------

--
-- 資料表結構 `sharer`
--

CREATE TABLE `sharer` (
  `sharer_id` int(50) NOT NULL,
  `state` varchar(500) CHARACTER SET utf8 NOT NULL,
  `bk_name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `bk_isbn` varchar(500) CHARACTER SET utf8 NOT NULL,
  `trade_lend` varchar(500) CHARACTER SET utf8 NOT NULL,
  `time` varchar(500) NOT NULL,
  `continue_lend` varchar(500) NOT NULL,
  `gmail` varchar(500) CHARACTER SET utf8 NOT NULL,
  `bk_state` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `sharer`
--

INSERT INTO `sharer` (`sharer_id`, `state`, `bk_name`, `bk_isbn`, `trade_lend`, `time`, `continue_lend`, `gmail`, `bk_state`) VALUES
(3, '1', '因為愛，我們呼吸', '9789863614210', 'ladygaga', '1 month', 'no', '', ''),
(5, '1', '列車上的女孩', '9789869932974', 'shawn mendes', '', '', '', ''),
(6, '0', '微積分', '9789574837168', 'joanna', '', '', '', ''),
(7, '1', '以太奇襲', '9789869932974', 'joanna', '', '', '', ''),
(8, '', '', '', '', '一個月', '可以', '', ''),
(9, '', '', '', '', '兩個月', '不要', 'ting@gmail.com', '');

-- --------------------------------------------------------

--
-- 資料表結構 `trade`
--

CREATE TABLE `trade` (
  `trade_id` int(50) NOT NULL,
  `trade_bookname` varchar(50) NOT NULL,
  `trade_date` date NOT NULL,
  `trade_lend` varchar(50) NOT NULL,
  `trade_borrow` varchar(50) NOT NULL,
  `trade_level` varchar(50) NOT NULL,
  `comment_times` int(10) NOT NULL,
  `point_ID` varchar(50) NOT NULL,
  `report_ID` varchar(50) NOT NULL,
  `sharer_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `trade`
--

INSERT INTO `trade` (`trade_id`, `trade_bookname`, `trade_date`, `trade_lend`, `trade_borrow`, `trade_level`, `comment_times`, `point_ID`, `report_ID`, `sharer_id`) VALUES
(1, '以太奇襲', '2022-03-11', 'joanna', 'bear', 'lend', 0, '', '', 0),
(2, '哈利波特', '2022-04-18', 'joanna', 'sophie', 'lend', 0, '', '', 0),
(3, '名偵探柯南', '2022-05-12', 'jimmy', 'ladygaga', 'lend', 1, '', '', 0),
(4, '新文化苦旅', '2022-05-08', 'shawn mendes', 'joanna', 'done', 1, '', '', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin_prefer`
--
ALTER TABLE `admin_prefer`
  ADD PRIMARY KEY (`prefer_id`);

--
-- 資料表索引 `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`account`);

--
-- 資料表索引 `book_data`
--
ALTER TABLE `book_data`
  ADD PRIMARY KEY (`bk_ID`);

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- 資料表索引 `customer_service`
--
ALTER TABLE `customer_service`
  ADD PRIMARY KEY (`service_id`);

--
-- 資料表索引 `middle`
--
ALTER TABLE `middle`
  ADD PRIMARY KEY (`trade_id`);

--
-- 資料表索引 `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`point_id`);

--
-- 資料表索引 `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- 資料表索引 `sharer`
--
ALTER TABLE `sharer`
  ADD PRIMARY KEY (`sharer_id`);

--
-- 資料表索引 `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`trade_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_prefer`
--
ALTER TABLE `admin_prefer`
  MODIFY `prefer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `book_data`
--
ALTER TABLE `book_data`
  MODIFY `bk_ID` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `customer_service`
--
ALTER TABLE `customer_service`
  MODIFY `service_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `point`
--
ALTER TABLE `point`
  MODIFY `point_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `sharer`
--
ALTER TABLE `sharer`
  MODIFY `sharer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `trade`
--
ALTER TABLE `trade`
  MODIFY `trade_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
