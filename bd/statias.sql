-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2015 г., 17:03
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `monitoring`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statias`
--

CREATE TABLE IF NOT EXISTS `statias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` tinytext NOT NULL,
  `cat_cen_id` tinytext NOT NULL,
  `cat_god_id` tinytext NOT NULL,
  `name_categoria` tinytext NOT NULL,
  `editor1` text NOT NULL,
  `file_foto` tinytext NOT NULL,
  `table-categoria` tinytext NOT NULL,
  `data_reg` datetime NOT NULL,
  `blockunblock` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
