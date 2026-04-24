-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2026-04-23 16:40:45
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `inventory2`
--
CREATE DATABASE IF NOT EXISTS `inventory2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `inventory2`;

-- --------------------------------------------------------

--
-- テーブルの構造 `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `brand`
--

INSERT INTO `brand` (`id`, `name`, `country`) VALUES
('ADD', 'アドデス', 'ドイツ'),
('FIS', 'ファインスカイ', '日本'),
('UDN', 'ウディナ', 'イタリア'),
('UTG', 'ウルトラゲート', 'アメリカ');

-- --------------------------------------------------------

--
-- テーブルの構造 `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `size` varchar(20) DEFAULT NULL,
  `brand` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE `stock` (
  `goods_id` varchar(10) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `stock`
--

INSERT INTO `stock` (`goods_id`, `quantity`) VALUES
('A12', 12),
('A13', 10),
('A301', 16),
('B21', 18),
('B33', 0),
('D05', 4);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand`);

--
-- テーブルのインデックス `stock`
--
ALTER TABLE `stock`
  ADD UNIQUE KEY `goods_id_index` (`goods_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
