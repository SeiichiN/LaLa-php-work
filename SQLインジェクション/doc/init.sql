--
-- データベース: `userdb`
--
CREATE DATABASE IF NOT EXISTS `userdb`;
USE `userdb`;

--
-- テーブルの構造 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` char(6) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- テーブルのデータのダンプ `member`
--

INSERT INTO `member` (`name`, `password`) VALUES
('田中太郎', '111111'),
('佐々木次郎', '222222'),
('木村花子', '333333'),
('山本百合子', '444444'),
('木下五郎', '555555'),
('花山絹子', '666666'),
('山下千代子', '777777'),
('坂本四郎', '888888');

--
-- ユーザー
--

CREATE USER IF NOT EXISTS 'userdbuser'@'localhost' 
IDENTIFIED BY 'userdbuser';

GRANT ALL ON userdb.* TO 'userdbuser'@'localhost';



