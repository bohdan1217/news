-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 30 2017 р., 02:19
-- Версія сервера: 5.5.48
-- Версія PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `news`
--

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `text` text,
  `img` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `img`, `author`, `date`) VALUES
(80, 'ASUS представил в Украине новые ноутбуки', 'ASUS представил премиум-ноутбуки ZenBook 13 (UX331UN), ZenBook Flip 14 (UX461UN), а также игровой ноут ASUS ROG Strix GL503VS.', '15145891491 (1).jpg', 'Игорь Циферов2', '2017-12-30 02:13:07'),
(81, 'Смартфон Nokia 1 может появиться в марте', 'В сети появилась информация о подготовке компанией HMD Global к выпуску ее нового смартфона – Nokia 1.Новинка будет позиционироваться в бюджетном сегменте.Анонс терминала может состояться уже в марте 2018 года. В качестве программной платформы обещана Android Go. Кроме того, «трубка» будет с IPS-дисплеем, разрешение которого 720х1280 точек. Объем оперативной памяти - 1 ГБ, а встроенной пользовательской – 8 ГБ.Другие подробности пока не приводятся. ', '', 'Admin', '2017-12-30 02:12:57');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
