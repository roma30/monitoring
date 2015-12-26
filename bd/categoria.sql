-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2015 г., 17:02
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44
=======
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 14 2015 г., 12:43
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13
>>>>>>> 4d866e3013f605ade40a136b964915fc8539c4d7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
<<<<<<< HEAD
-- База данных: `monitoring`
=======
-- База данных: `novosti`
>>>>>>> 4d866e3013f605ade40a136b964915fc8539c4d7
--

-- --------------------------------------------------------

--
-- Структура таблицы `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
>>>>>>> 4d866e3013f605ade40a136b964915fc8539c4d7

--
-- Дамп данных таблицы `categoria`
--

INSERT INTO `categoria` (`id`, `name`) VALUES
<<<<<<< HEAD
(1, 'Республика Беларусь'),
(2, 'Российская Федерация'),
(3, 'Казахстан'),
(4, 'Украина'),
(5, 'Польша'),
(6, 'Литва');
=======
(1, 'qwert'),
(2, 'qwrqwrqw');
>>>>>>> 4d866e3013f605ade40a136b964915fc8539c4d7

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
