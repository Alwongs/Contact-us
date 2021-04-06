-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Апр 06 2021 г., 20:47
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `contact_us`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `hide` varchar(256) NOT NULL,
  `topic` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `name`, `surname`, `email`, `phone`, `gender`, `hide`, `topic`, `text`, `image`) VALUES
(71, 'Алексей', 'Козлов', 'Kozel@be.be', '45485454', '2', 'on', 'Услуги', 'Почешите бородку', '300px-Irish_Goat.jpg'),
(72, 'Baran', 'Baranov', 'Baran@armyan.me', '6544748484', '2', '', 'Цены', 'meeeeee', '7863602610.jpg'),
(77, 'Alexander', 'Martynov', 'Alwong@ya.ru', '+79278140834', '1', '', 'Цены', 'Мое сообщение', 'Изображение 200.jpg'),
(78, 'Юрий', 'Никулин', 'Nik@you.ty', '4646484', '1', '', 'Услуги', 'шутим, развлекаем', 'regnum_picture_148196498369509_small.jpg'),
(79, 'Юрий', 'Гагарин', 'Rocket@kosmos.un', '111111', '1', '', 'Товары', 'Поехали!!!', 's15079069.jpg'),
(81, 'Джоди', 'Форстер', 'Djody@forster.us', '6545446446', '1', '', 'Цены', 'hgrtghsrtgrs t st', 'Kazan.jpg'),
(82, 'Василий', 'Петров', 'Vasya@petrov.ru', '787878787', '1', '', 'Цены', 'test test test wrtwtwetw wtwtrwrtwertwe rr w wetwertwerwer w  twtrwrtwrtwer wtrw tw t w trw trw  wtr wt  weerewrwerw r wer w rt wet we trw', 'Samara.jpg'),
(83, 'Валилий', 'Пупкин', 'Pupk@das.rt', '888887878', '1', '', 'Услуги', 'ahkjarkfga kharkjh hrejkkjaher aerhkjhakjehr arekjhgjkahekjh gkjahr ekjhkjhakj karj hkjarhkjharkjh fkjareh kjhrkjgf harekjh kja hgkja hkjrk jhakrjeh k raekj raekj kjaerhkjarehf rekgh kh gk hkgj hsakjghka hgkja rehkrea h kj reahk harek hgakre hgkar hka hk hgka gkj hrekj hrekj krae kra hkra hkra hka rk aka hekhk ghke', 'Moscow.jpg'),
(87, 'Василий', 'Чапаев', 'Chapaj@don.ru', '454545', '1', '', 'Услуги', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempora qui maiores aut sed quod nihil tenetur dicta exercitationem, consectetur neque ea quo corporis quam suscipit quibusdam, quidem magnam eius?v\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempora qui maiores aut sed quod nihil tenetur dicta exercitationem, consectetur neque ea quo corporis quam suscipit quibusdam, quidem magnam eius?\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempora qui maiores aut sed quod nihil tenetur dicta exercitationem, consectetur neque ea quo corporis quam suscipit quibusdam, quidem magnam eius?', '1474711921_chapaev1.jpg'),
(88, 'newname', 'newsurname', 'new@email.new', '89787878878', '1', '', 'Товары', 'a agf gagg ag  gag ergaege geg a Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam asperiores assumenda temporibus beatae? Veritatis error, fugiat maiores, qui consequuntur accusantium veniam natus voluptate accusamus autem quos commodi pariatur hic totam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam asperiores assumenda temporibus beatae? Veritatis error, fugiat maiores, qui consequuntur accusantium veniam natus voluptate accusamus autem quos commodi pariatur hic totam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam asperiores assumenda temporibus beatae? Veritatis error, fugiat maiores, qui consequuntur accusantium veniam natus voluptate accusamus autem quos commodi pariatur hic totam?ge gg areg  gre ae gaegaeg', 'aGkj65f1SuA.jpg'),
(89, 'казябра', 'зебров', 'zebra@koin.sd', '878787', '1', '', 'Товары', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit iusto aliquid at earum dolorum nulla, commodi rerum, labore cumque totam fuga beatae et. Exercitationem, quo mollitia. Optio nemo sequi maxime?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit iusto aliquid at earum dolorum nulla, commodi rerum, labore cumque totam fuga beatae et. Exercitationem, quo mollitia. Optio nemo sequi maxime?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit iusto aliquid at earum dolorum nulla, commodi rerum, labore cumque totam fuga beatae et. Exercitationem, quo mollitia. Optio nemo sequi maxime?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit iusto aliquid at earum dolorum nulla, commodi rerum, labore cumque totam fuga beatae et. Exercitationem, quo mollitia. Optio nemo sequi maxime?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit iusto aliquid at earum dolorum nulla, commodi rerum, labore cumque totam fuga beatae et. Exercitationem, quo mollitia. Optio nemo sequi maxime?', 'Новый точечный рисунок.bmp'),
(90, 'strtghrtss', 'rthsrthrtsh', 'gh@dsgh.ts', '87878974', '1', '', 'Товары', 'shghgtght', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
