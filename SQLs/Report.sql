SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE Database Report;

Use Report;
CREATE TABLE `Reports` (
  `Name` varchar(500) NOT NULL,
  `Category` varchar(500) DEFAULT NULL,
  `ID` varchar(500) NOT NULL,
  `Date` datetime NOT NULL,
  `Status` varchar(500) NOT NULL,
  `Detail` varchar(500) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Reports` (`Name`, `Category`, `ID`, `Date`, `Status`, `Detail`, ) VALUES
('王小明', '介面與網頁問題', '00001', '2022-05-08 14:20:33', '未處理', '無法傳送訊息'),
('李相赫', '網路延遲與連接問題', '00002','2022-05-05 04:21:10' , '已處理', '網站35ping回應速度慢'),
('Chris Paul', '客服問題', '00003', '2022-05-01 18:29:19', '已處理', '沒有立刻得到客服回應');
COMMIT;