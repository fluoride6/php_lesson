-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 31 2021 г., 16:27
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `time`
--

-- --------------------------------------------------------

--
-- Структура таблицы `secret_articles`
--

CREATE TABLE `secret_articles` (
                                   `id` int(10) UNSIGNED NOT NULL,
                                   `user_id` int(10) UNSIGNED NOT NULL,
                                   `title` varchar(255) NOT NULL,
                                   `text` text NOT NULL,
                                   `date` int(10) UNSIGNED NOT NULL,
                                   `hide` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `secret_articles`
--

INSERT INTO `secret_articles` (`id`, `user_id`, `title`, `text`, `date`, `hide`) VALUES
(1, 2, 'Моя первая статья!', 'Тут текст моей первой статьи...', 1484916250, 0),
(2, 2, 'Моя вторая статья!', 'Это ещё одна моя статья!', 1484916255, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `secret_time`
--

CREATE TABLE `secret_time` (
                               `id` int(10) UNSIGNED NOT NULL,
                               `name` varchar(255) NOT NULL,
                               `email` varchar(255) NOT NULL,
                               `passwords` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `secret_time`
--

INSERT INTO `secret_time` (`id`, `name`, `email`, `passwords`) VALUES
(1, 'Василий ', 'hochu_pizzu@mail.ru', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Михаил', 'hochu_rolly@mail.ru', '6a9edcb7b63821802aa44d35d531c9fc');

-- --------------------------------------------------------

--
-- Структура таблицы `secret_users`
--

CREATE TABLE `secret_users` (
                                `id` int(10) UNSIGNED NOT NULL,
                                `name` varchar(255) NOT NULL,
                                `email` varchar(255) NOT NULL,
                                `password` char(32) NOT NULL,
                                `balance` double(10,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `ip_reg` bigint(20) NOT NULL,
  `date_reg` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `secret_users`
--

INSERT INTO `secret_users` (`id`, `name`, `email`, `password`, `balance`, `ip_reg`, `date_reg`) VALUES
(1, 'Иван Петров', 'ivan@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', 0.00, 0, 1484915948),
(2, 'Василий', 'vasya@mail.ru', '202cb962ac59075b964b07152d234b70', 5.20, 0, 1484915974);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `secret_articles`
--
ALTER TABLE `secret_articles`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);
ALTER TABLE `secret_articles` ADD FULLTEXT KEY `text` (`text`);

--
-- Индексы таблицы `secret_time`
--
ALTER TABLE `secret_time`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `secret_users`
--
ALTER TABLE `secret_users`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `balance` (`balance`,`date_reg`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `secret_articles`
--
ALTER TABLE `secret_articles`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `secret_time`
--
ALTER TABLE `secret_time`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `secret_users`
--
ALTER TABLE `secret_users`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
