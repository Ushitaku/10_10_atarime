-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-01-29 10:02:43
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d07_10`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `vote_table`
--

CREATE TABLE `vote_table` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `vote_table`
--

INSERT INTO `vote_table` (`id`, `product_id`, `username`, `created_at`) VALUES
(1, 2, 'seikinTV', '2021-01-29 16:00:11'),
(2, 1, 'seikinTV', '2021-01-29 16:16:33'),
(3, 2, 'seikinTV', '2021-01-29 16:23:44'),
(4, 2, 'seikinTV', '2021-01-29 16:23:52'),
(5, 2, 'seikinTV', '2021-01-29 16:23:59'),
(6, 3, 'seikinTV', '2021-01-29 16:25:00'),
(7, 4, 'seikinTV', '2021-01-29 16:25:08'),
(8, 2, 'seikinTV', '2021-01-29 16:30:26'),
(9, 2, 'seikinTV', '2021-01-29 16:31:24'),
(10, 2, 'seikinTV', '2021-01-29 16:46:14'),
(11, 1, 'seikinTV', '2021-01-29 17:06:08'),
(12, 1, 'seikinTV', '2021-01-29 17:06:41'),
(13, 3, 'seikinTV', '2021-01-29 17:11:44');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `vote_table`
--
ALTER TABLE `vote_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `vote_table`
--
ALTER TABLE `vote_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
