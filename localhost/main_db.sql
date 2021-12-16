-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 14 2021 г., 16:32
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `main_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `decript` text NOT NULL,
  `cost` double NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `decript`, `cost`, `tag`) VALUES
(1, 'test3', 'img/products/test.jpg', 'Добрый день, являюсь новичком в пхп, разбираюсь в хтмл, работаю с кусками кода пхп которые мне знакомые написали и которые работают.\r\n\r\nЕсть база данных и есть код работающей страницы выводящей из базы данные по строкам.\r\nА мне нужно сделать каждую строку ссылкой (или просто ссылку в строке каждой) и чтобы при клике на эту ссылку на новой странице отображалась только одна эта строка (новая страница для всех строк будет так понимаю одна например stroka.php но с разным параметром id).\r\n\r\nif (!empty($filter)) {$my_query = \'select Sur,Nm,Ln,Sc,Yr,Gb from tablitsa1 WHERE Sur LIKE \"%\'.$filter.\'%\" limit \'.$start_pos.\', \'.$perpage;} else $my_query =\'select Sur,Nm,Ln,Sc,Yr,Gb from tablitsa1 limit \'.$start_pos.\', \'.$perpage;\r\n$result = mysql_query($my_query) or die(\'error!\');\r\nwhile ($row = mysql_fetch_array($result)) {\r\necho \'<tr>\r\n<td>\'.$row[\'Sur\'].\'</td>\r\n<td>\'.$row[\'Nm\'].\'</td>\r\n<td>\'.$row[\'Ln\'].\'</td>\r\n<td>\'.$row[\'Sc\'].\'</td>\r\n<td>\'.$row[\'Yr\'].\'</td>\r\n<td>\'.$row[\'Gb\'].\'</td>\r\n</tr>\';}\r\n\r\nДанный абзац выводит все из базы построчно. Ссылку в строке могу сделать, но так понимаю мне нужно id передать на следующую страницу. Как это сделать? Что должно быть на этой странице исходящего и на той входящего\r\n2-й : Вместо window.location() просто используйте функцию header() в php .\r\n\r\nheader(\'Location:property_add_address.php?id=\'.$id);\r\nexit();\r\n3-й : Доступ к значению, подобному этому, на странице назначения .\r\n\r\n  echo $_GET[\'id\'];', 0, 'oneEng'),
(2, 'C-5', 'img/products/C-5.jpg', 'test2', 12.43, 'JET'),
(3, 'Cesna-172', '../img/products/172.jpg', 'cesna!', 12000000, 'oneEng'),
(4, 'AN-12', '../img/products/AN-12.jpg', 'Что-то должно быть', 12000000, 'thoEng'),
(5, 'AN-2', '../img/products/AN-2.jpg', 'Что-то должно быть', 12000000, 'oneEng'),
(6, 'L-39', '../img/products/L_39.jpg', 'Описание', 12000000, 'JET'),
(7, 'zephir', '../img/products/zephir.jpg', 'Описание', 12000000, 'heli');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `last_name` text NOT NULL,
  `phone` text NOT NULL,
  `pasword` text NOT NULL,
  `mail` text NOT NULL,
  `link` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `last_name`, `phone`, `pasword`, `mail`, `link`) VALUES
(1, 'test', 'test', '+000000000', '12345', 'test@mail.com', 1),
(6, '12344', '', '123456@errer.re', '4567', '4355@r43', 0),
(7, '12344', '12345', '123456@errer.re', '4567', '4355@r43', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
