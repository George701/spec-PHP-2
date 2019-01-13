-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 13 2019 г., 21:06
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `eshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT 'Без названия',
  `author` varchar(255) DEFAULT NULL,
  `pubyear` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `title`, `author`, `pubyear`, `price`) VALUES
(3, 'Три товарища', 'Эрих Мария Ремарк', 1936, 198),
(4, 'Прощай, оружие!', 'Эрнест Хемингуэй', 1929, 199),
(5, 'Великий Гэтсби', 'Фрэнсис Скотт Фицджеральд', 1922, 198),
(6, 'Загадочная история Бенджамина Баттона', 'Фрэнсис Скотт Фицджеральд', 1922, 215);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `author` varchar(255) NOT NULL DEFAULT '',
  `pubyear` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `orderid` varchar(50) NOT NULL DEFAULT '',
  `datetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `title`, `author`, `pubyear`, `price`, `quantity`, `orderid`, `datetime`) VALUES
(1, 'Прощай, оружие!', 'Эрнест Хемингуэй', 1929, 199, 1, '5c32488a8c4e9', 1547404911),
(2, 'Великий Гэтсби', 'Фрэнсис Скотт Фицджеральд', 1922, 198, 1, '5c32488a8c4e9', 1547404911),
(3, 'Загадочная история Бенджамина Баттона', 'Фрэнсис Скотт Фицджеральд', 1922, 215, 1, '5c3b867451d06', 1547405064),
(4, 'Эрих Мария Ремарк', 'Три товарища', 1936, 198, 1, '5c3b87230740b', 1547405143),
(5, 'Прощай, оружие!', 'Эрнест Хемингуэй', 1929, 199, 1, '5c3b87230740b', 1547405143),
(6, 'Великий Гэтсби', 'Фрэнсис Скотт Фицджеральд', 1922, 198, 1, '5c3b87230740b', 1547405143),
(7, 'Загадочная история Бенджамина Баттона', 'Фрэнсис Скотт Фицджеральд', 1922, 215, 1, '5c3b87230740b', 1547405143);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
