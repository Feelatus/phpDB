-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 13 2021 г., 21:13
-- Версия сервера: 5.7.24-log
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `disc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text,
  `trueprovider` varchar(100) DEFAULT NULL,
  `servers` text,
  `downloads` text,
  `speed` text,
  `btnlink` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `discounts`
--

INSERT INTO `discounts` (`id`, `title`, `price`, `description`, `trueprovider`, `servers`, `downloads`, `speed`, `btnlink`) VALUES
(1, 'Hosting 1', 2, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', 'True Provider', 'XXXX Days Retention - U.S. + E.U. Servers', 'Unlimited downloads', 'Unlimited speed', '#'),
(2, 'Hosting 2', 3, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', 'True Provider', 'XXXX Days Retention - U.S. + E.U. Servers', 'Unlimited downloads', 'Unlimited speed', '#'),
(3, 'Hosting 3', 4, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', 'True Provider', 'XXXX Days Retention - U.S. + E.U. Servers', 'Unlimited downloads', 'Unlimited speed', '#'),
(5, 'Hosting 5', 35, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', 'True Provider', 'XXXX Days Retention - U.S. + E.U. Servers', 'Unlimited downloads', 'Unlimited speed', '#'),
(6, 'Hosting 32', 42, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', 'True Provider', 'XXXX Days Retention - U.S. + E.U. Servers', 'Unlimited downloads', 'Unlimited speed', '#');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
