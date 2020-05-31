-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 31 2020 г., 15:43
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `whydohow`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name`) VALUES
(1, 'asda');

-- --------------------------------------------------------

--
-- Структура таблицы `claim`
--

CREATE TABLE `claim` (
  `id_user` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_object` int(20) NOT NULL,
  `id_reason` int(20) NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_post` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `text` varchar(5000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `liked`
--

CREATE TABLE `liked` (
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `login_facebook`
--

CREATE TABLE `login_facebook` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `login_google`
--

CREATE TABLE `login_google` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `id_google` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login_google`
--

INSERT INTO `login_google` (`id_user`, `mail`, `id_google`) VALUES
(23, 'yevhen.ahatin@nure.ua', '100440386279675739158');

-- --------------------------------------------------------

--
-- Структура таблицы `login_mail`
--

CREATE TABLE `login_mail` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `login_mail`
--

INSERT INTO `login_mail` (`id_user`, `mail`, `password`) VALUES
(11, '1234.asd@gmail.com', '43788cde77afc7b2d4a6a450ee029404'),
(12, '123.asd@gmail.com', '43788cde77afc7b2d4a6a450ee029404');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `preview` blob NOT NULL,
  `header` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `privat` int(20) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `last_view_date` date NOT NULL,
  `view_count` int(20) NOT NULL,
  `like_count` int(20) NOT NULL,
  `date` date NOT NULL,
  `popularity` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `preview`, `header`, `id_category`, `id_subcategory`, `privat`, `text`, `last_view_date`, `view_count`, `like_count`, `date`, `popularity`) VALUES
(1, 12, 0x61736361, 'asca', 1, 1, 0, 'asdadasdd', '2020-05-31', 122, 1221, '2020-05-30', 1196.204);

-- --------------------------------------------------------

--
-- Структура таблицы `reson`
--

CREATE TABLE `reson` (
  `id_reson` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'user'),
(2, 'ban');

-- --------------------------------------------------------

--
-- Структура таблицы `stream`
--

CREATE TABLE `stream` (
  `id_stream` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `preview` int(70) NOT NULL,
  `heder` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `privat` int(10) NOT NULL,
  `linck` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `view_count` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `subscribes`
--

CREATE TABLE `subscribes` (
  `id_user_lead` int(11) NOT NULL,
  `id_user_follow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sub_category`
--

CREATE TABLE `sub_category` (
  `id_subcategory` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `sub_category`
--

INSERT INTO `sub_category` (`id_subcategory`, `id_category`, `name`) VALUES
(1, 1, 'asda');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `privat` int(20) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `image`, `description`, `privat`, `id_role`) VALUES
(11, 'UserJack', 0x757365722e706e67, ' ', 0, 1),
(12, 'UserJack', 0x757365722e706e67, ' glhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg\r\n                         izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h\r\nglhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg\r\n                         izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h\r\nglhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg\r\n                         izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h\r\nglhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg\r\n                         izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h', 0, 1),
(23, 'Євген Агатін', 0x757365722e706e67, ' ', 0, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`id_user`,`type`,`id_object`),
  ADD KEY `claim_ibfk_1` (`id_reason`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`,`id_post`),
  ADD KEY `comment_ibfk_1` (`id_post`),
  ADD KEY `comment_ibfk_2` (`id_user`);

--
-- Индексы таблицы `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`id_user`,`id_post`),
  ADD KEY `liked_ibfk_1` (`id_post`);

--
-- Индексы таблицы `login_facebook`
--
ALTER TABLE `login_facebook`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `login_google`
--
ALTER TABLE `login_google`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `login_mail`
--
ALTER TABLE `login_mail`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `post_ibfk_1` (`id_category`),
  ADD KEY `post_ibfk_2` (`id_subcategory`),
  ADD KEY `post_ibfk_3` (`id_user`);

--
-- Индексы таблицы `reson`
--
ALTER TABLE `reson`
  ADD PRIMARY KEY (`id_reson`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`id_stream`),
  ADD KEY `stream_ibfk_1` (`id_user`),
  ADD KEY `stream_ibfk_2` (`id_category`),
  ADD KEY `stream_ibfk_3` (`id_subcategory`);

--
-- Индексы таблицы `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id_user_lead`,`id_user_follow`),
  ADD KEY `subscribes_ibfk_2` (`id_user_follow`);

--
-- Индексы таблицы `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id_subcategory`),
  ADD KEY `sub_category_ibfk_1` (`id_category`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_ibfk_1` (`id_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `claim`
--
ALTER TABLE `claim`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `liked`
--
ALTER TABLE `liked`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `login_facebook`
--
ALTER TABLE `login_facebook`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `reson`
--
ALTER TABLE `reson`
  MODIFY `id_reson` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `stream`
--
ALTER TABLE `stream`
  MODIFY `id_stream` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id_user_lead` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id_subcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `claim_ibfk_1` FOREIGN KEY (`id_reason`) REFERENCES `reson` (`id_reson`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `liked`
--
ALTER TABLE `liked`
  ADD CONSTRAINT `liked_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `liked_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `login_facebook`
--
ALTER TABLE `login_facebook`
  ADD CONSTRAINT `login_facebook_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `login_google`
--
ALTER TABLE `login_google`
  ADD CONSTRAINT `login_google_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `login_mail`
--
ALTER TABLE `login_mail`
  ADD CONSTRAINT `login_mail_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_subcategory`) REFERENCES `sub_category` (`id_subcategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `stream`
--
ALTER TABLE `stream`
  ADD CONSTRAINT `stream_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stream_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stream_ibfk_3` FOREIGN KEY (`id_subcategory`) REFERENCES `sub_category` (`id_subcategory`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subscribes`
--
ALTER TABLE `subscribes`
  ADD CONSTRAINT `subscribes_ibfk_1` FOREIGN KEY (`id_user_lead`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscribes_ibfk_2` FOREIGN KEY (`id_user_follow`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- События
--
CREATE DEFINER=`root`@`localhost` EVENT `Update_popularity` ON SCHEDULE EVERY 1 SECOND STARTS '2020-05-31 00:00:00' ENDS '2020-06-30 23:59:59' ON COMPLETION PRESERVE ENABLE DO UPDATE `post` SET `popularity`= (`view_count` * 0.1 + `like_count` + (SELECT COUNT(`id_comment`) FROM `comment` WHERE `comment`.`id_post` = `post`.`id_post`)) * (1 - (0.03 * 33 )) WHERE DATEDIFF( STR_TO_DATE (CURDATE(), '%Y-%m-%d'),STR_TO_DATE (`last_view_date`, '%Y-%m-%d')) >= 33$$

CREATE DEFINER=`root`@`localhost` EVENT `Update_popularity3` ON SCHEDULE EVERY 1 SECOND STARTS '2020-05-31 23:59:59' ENDS '2020-06-30 23:59:59' ON COMPLETION PRESERVE ENABLE DO UPDATE `post` SET `popularity`= (`view_count` * 0.1 + `like_count` + (SELECT COUNT(`id_comment`) FROM `comment` WHERE `comment`.`id_post` = `post`.`id_post` GROUP BY `id_comment`)) * (1 - (0.03 * 1 )) WHERE DATEDIFF( STR_TO_DATE (`last_view_date`, '%Y-%m-%d'),STR_TO_DATE (CURDATE(), '%Y-%m-%d')) = 0$$

CREATE DEFINER=`root`@`localhost` EVENT `Update_popularity2` ON SCHEDULE EVERY 1 SECOND STARTS '2020-05-31 00:00:00' ENDS '2020-06-30 23:59:59' ON COMPLETION PRESERVE ENABLE DO UPDATE `post` SET `popularity`= (`view_count` * 0.1 + `like_count` + (SELECT COUNT(`id_comment`) FROM `comment` WHERE `comment`.`id_post` = `post`.`id_post` )) * (1 - (0.03 * DATEDIFF( STR_TO_DATE (CURDATE(), '%Y-%m-%d'),STR_TO_DATE (`last_view_date`, '%Y-%m-%d')) )) WHERE DATEDIFF( STR_TO_DATE (CURDATE(), '%Y-%m-%d'),STR_TO_DATE (`last_view_date`, '%Y-%m-%d')) < 33 AND DATEDIFF( STR_TO_DATE (CURDATE(), '%Y-%m-%d'),STR_TO_DATE (`last_view_date`, '%Y-%m-%d')) > 0$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
