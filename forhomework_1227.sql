-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019 年 06 月 22 日 01:34
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `forhomework_1227`
--

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `product` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `introduce` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `contents` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cals` float NOT NULL,
  `price` int(11) NOT NULL,
  `note` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `menu`
--

INSERT INTO `menu` (`product`, `introduce`, `contents`, `meat`, `cals`, `price`, `note`) VALUES
('酒釀桂圓麵包', '桂圓是畫龍點睛的靈魂所在，選用的東山百年古法龍眼乾，透過老農六天五夜不斷火燻焙而成，與紅酒、胚芽及核果激盪出醇郁香氣', '高筋麵粉、熟胚芽粉、東山煙燻桂圓、法國紅酒、加州核桃', '全素含酒', 248, 360, '臺灣麵包第一次站上世界的舞台\r\n★將臺灣滋味注入歐式麵包\r\n★2008 世界麵包大賽亞軍作品'),
('荔枝玫瑰麵包', '歷時12個月鑽研的獨特層次，麵糰需要至少15小時的發酵，浸泡荔枝酒一夜的黑葉荔枝與玫瑰，才能充分散發清香', '高筋麵粉、法國麵包專用粉、埔里有機玫瑰花瓣，荔枝乾、加州核桃、荔枝酒', '全素含酒', 248, 360, '再度征服世界的味蕾\r\n★評審盛讚：「吳寶春作出最好吃的歐式麵包」\r\n★2010 世界麵包大師賽冠軍作品'),
('梅引茶香', '時光的滋味\r\n【2016年世界盃麵包大賽得獎作品】\r\n以獨特香氣的臺灣小麥麵粉，低溫發酵15小時培養出液種麵糰，，麵糰風味更提升，香氣更濃郁，加入日本湯種技術，改良成東方人適合的口感，再把臺灣代表性的醃漬梅子與阿里山茶，融合出一個美好的味蕾組合，帶有人生酸、鹹、甜美味麵包能停留在人們的回憶中！', '日本麵粉、清境有機小葉紅茶、梅山原梅、梅子清酒、腰果、核桃', '全素含酒', 211.1, 300, ''),
('法國小麥長棍', '【2016年世界盃麵包大賽亞軍得獎作品】\r\n使用法國T65&T80麵粉培養出的液種(Poolish)低溫長時間發酵，再搭配麵粉界的愛馬仕 「VIRON」T55麵粉，做出來的長棍，薄皮酥脆質地鬆軟細緻，小麥香氣豐富，不帶發酵酸氣，最能呈現出小麥粉本身的天然香甜味，在口中無限回甘\r\n\r\n在法國， 「VIRON」就是冠軍的代表，需從法國空運過來，原廠規定必須是全程18度Ｃ冷藏，是非常頂級的法國小麥粉，蟬聯多年的NO.1麵粉', '法國VIRON T55小麥粉、法國G.M.P T65小麥粉、法國安東磨坊T80石磨小麥粉、法國葛宏德海鹽', '全素', 0, 100, ''),
('df', 'fsdfs ', 'ffwg', '全素含酒', 111, 111, 'jsfdio'),
('乳酪麵包', '由乳酪製成', '麵粉、乳酪', '全素不含酒', 300, 80, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
