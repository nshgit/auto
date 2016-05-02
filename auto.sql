-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2016 г., 12:05
-- Версия сервера: 5.5.45
-- Версия PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attribute`
--

CREATE TABLE IF NOT EXISTS `attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `attribute`
--

INSERT INTO `attribute` (`id`, `name`) VALUES
(1, 'Цвет'),
(2, 'Коробка'),
(3, 'Привод'),
(4, 'Гарантия');

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `marka_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-auto-category-id` (`category_id`),
  KEY `idx-auto-marka-id` (`marka_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`id`, `category_id`, `marka_id`, `name`, `content`, `date`) VALUES
(1, 1, 1, 'LADA Granta', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2015-08-24'),
(2, 1, 1, 'LADA Kalina', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2015-08-24'),
(3, 2, 4, 'VS 350', 'Программа Trade-In – это максимально удобный и быстрый способ обменять подержанный автомобиль на новый. Вам не нужно задумываться о реализации автомобиля, эту задачу на себя возьмут специалисты дилерского центра LADA. Кроме того, участники программы Trade-In получают преимущество в виде выгоды на покупку нового автомобиля.', '2014-04-15'),
(4, 2, 1, 'LADA Granta', 'After you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2016-04-29'),
(5, 3, 1, 'LADA Vesta', 'After you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2014-04-15'),
(6, 4, 1, 'NIVA', 'After you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2014-04-15'),
(7, 1, 3, 'ГАЗ 3110', 'After you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2014-04-15'),
(8, 1, 5, 'rx30', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2015-08-24'),
(9, 1, 1, 'Лада Приора', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2015-08-24'),
(10, 3, 1, 'Лада Веста', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2015-08-24'),
(11, 1, 6, 'Королла', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2015-08-24'),
(12, 1, 6, 'Камри', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2016-04-29'),
(13, 4, 6, 'Ленд Крузер', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2014-04-15'),
(14, 4, 6, 'Прадо', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2014-04-15'),
(15, 1, 6, 'Авенсис', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2016-04-29'),
(16, 1, 6, 'Авенсис', 'This tutorial provides a very simple and quick introduction to the NetBeans IDE workflow by walking you through the creation of a simple "Hello World" Java console application. Once you are done with this tutorial, you will have a general knowledge of how to create and run applications in the IDE.\r\nThis tutorial takes less than 10 minutes to complete.\r\nAfter you finish this tutorial, you can move on to the learning trails, which are linked from the Documentation, Training & Support page. The learning trails provide comprehensive tutorials that highlight a wider range of IDE features and programming techniques for a variety of application types. If you do not want to do a "Hello World" application, you can skip this tutorial and jump straight to the learning trails.', '2016-04-29'),
(17, 1, 1, 'Ларгус', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2015-08-24'),
(18, 4, 7, 'RX350', 'Отличное состояние. 2008 г.э. 3.5/276 л.с. Куплен у официального дилера в Саратове в феврале 2008 г. ПТС оригинал. Честный пробег 134 т.км. Технически исправен, обслужен полностью на 130 т.км, двигатель, коробка, ходовая часть, полный привод без нареканий, ошибок нет. Без пневмоподвески. Салон чистый, ухоженный, кожа без повреждений. Безаварийный, в заводской краске, всё железо и стекла оригинальные, с заводскими стикерами vin. Раздельный климат-контроль, круиз-контроль, ESP, электроприводы руля и передних сидений с памятью, штатный ксенон, электродверь багажника, парктроники перед/зад, CD/MP3 ченджер. 2 комплекта резины зима/лето R18" в отличном состоянии. Юридически и технически чист, проверен по всем базам (угон, залог, ДТП и т.д.), вложений не требует, полный комплект ключей и документации. Осмотр: Чернышевского 100 (автостоянка Премиум авто). Готов к любым проверкам на любом СТО.', '2014-04-15');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Седан'),
(2, 'Лифтбэк'),
(3, 'Кроссовер'),
(4, 'Внедорожник');

-- --------------------------------------------------------

--
-- Структура таблицы `marka`
--

CREATE TABLE IF NOT EXISTS `marka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `marka`
--

INSERT INTO `marka` (`id`, `name`) VALUES
(1, 'ВАЗ'),
(2, 'УАЗ'),
(3, 'ГАЗ'),
(4, 'VOLVO'),
(5, 'Ягуар'),
(6, 'Тойота'),
(7, 'LEXUS');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1461871732),
('m160428_164329_category_marka_tab', 1461871734),
('m160428_164421_product_tab', 1461871764),
('m160428_164449_attribute_tab', 1461871765);

-- --------------------------------------------------------

--
-- Структура таблицы `value`
--

CREATE TABLE IF NOT EXISTS `value` (
  `auto_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`auto_id`,`attribute_id`),
  KEY `idx-value-auto_id` (`auto_id`),
  KEY `idx-value-attribute_id` (`attribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `value`
--

INSERT INTO `value` (`auto_id`, `attribute_id`, `value`) VALUES
(1, 1, 'Красный'),
(1, 2, 'Механическая'),
(1, 3, 'Передний'),
(1, 4, 'До 2018 года'),
(2, 3, 'Передний'),
(3, 1, 'Черный'),
(3, 2, 'Автоматическая'),
(3, 3, 'Задний'),
(3, 4, 'До 2017 года'),
(4, 2, 'Механическая'),
(5, 2, 'Механическая'),
(17, 1, 'Синий'),
(18, 1, 'Красный'),
(18, 2, 'Автоматическая');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `fk-auto-category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-auto-marka` FOREIGN KEY (`marka_id`) REFERENCES `marka` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `value`
--
ALTER TABLE `value`
  ADD CONSTRAINT `fk-value-attribute` FOREIGN KEY (`attribute_id`) REFERENCES `attribute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-value-auto` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
