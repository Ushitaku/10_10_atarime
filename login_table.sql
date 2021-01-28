-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-01-14 14:06:39
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
-- テーブルの構造 `login_table`
--

CREATE TABLE `login_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime(1) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `login_table`
--

INSERT INTO `login_table` (`id`, `username`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, '佐々木裕次郎', '1111', 0, 0, '2021-01-09 00:59:44.0', '2021-01-09 00:59:44'),
(3, 'takeshi1111', '2222', 0, 0, '2021-01-09 11:10:26.0', '2021-01-09 11:10:40'),
(4, 'seikinTV', '1212', 0, 0, '2021-01-09 16:00:32.0', '2021-01-09 16:00:32'),
(5, 'BBB', '1414', 0, 0, '2021-01-09 16:21:19.0', '2021-01-09 16:21:19'),
(6, 'seikinTV', '1111', 0, 0, '2021-01-14 20:47:43.0', '2021-01-14 20:47:43');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
