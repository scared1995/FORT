-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2020 г., 13:05
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fort`
--

-- --------------------------------------------------------

--
-- Структура таблицы `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `position`
--

INSERT INTO `position` (`id`, `name`, `description`) VALUES
(83, 'тумба Бланка', 'Удобный и практичный предмет мебели для спальни. На ней можно разместить ночник, книгу или стакан с водой, а в двух выдвижных ящиках — аксессуары и массу полезных мелочей. Модель выполнена из ламинированной ДСП, отличающейся прочностью и долговечностью. Благодаря корпусу с текстурой под дерево и белым глянцевым фасадам тумба может с успехом использоваться и в классических, и в суперсовременных интерьерах. Особенно эффектно она будет выглядеть с изделиями из коллекции Бланка — такой единый ансамбль станет украшением спальни.'),
(108, 'Матрас Боннет', 'Периметр матраса усилен 50 мм вставками из пенополиуретана. Для получения максимального комфорта и продления срока службы матраса настоятельно рекомендуется его эксплуатация вместе с наматрасником. Наматрасники  Латекс, Мемори, Лайт- добавят мягкости и упругости матрасу, наматрасник Кокос увеличит его жесткость. Дополнительно рекомендуется защищать матрас с помощью чехла АкваСтоп, который не позволит попасть влаге внутрь матраса, что в свою очередь гарантирует увеличение срока эксплуатации матраса.'),
(109, 'Диван угловой Каир', 'Угловой диван Каир отличный эконом вариант для вашей квартиры или загородного дома, подойдни на кухню и в небольшую комнату. Имеется ящик для белья. Чтобы купить, выберете цвет обивки, разнообразие цветовых решений поможет создать диван согласно любого интерьерного решения. Обратите внимание, угловая часть может быть установлена справа и слева, угловой диван имеет универсальную сборку.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;