-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `regresi_linear`;
CREATE TABLE `regresi_linear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `index` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `regresi_linear` (`id`, `index`, `x`, `y`) VALUES
(16,	1,	164,	121),
(17,	2,	298,	226),
(18,	3,	284,	231),
(19,	4,	240,	218),
(20,	5,	270,	209),
(21,	6,	310,	215),
(22,	7,	240,	203),
(23,	8,	174,	125),
(24,	9,	285,	212),
(25,	10,	239,	206),
(26,	11,	293,	211),
(27,	12,	232,	221),
(28,	13,	272,	216),
(29,	14,	240,	217),
(30,	15,	192,	135);

-- 2022-05-24 12:03:08
