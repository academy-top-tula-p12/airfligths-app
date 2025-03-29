-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2025 г., 16:42
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `airflights_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `airlines`
--

CREATE TABLE `airlines` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int NOT NULL,
  `logotype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `airlines`
--

INSERT INTO `airlines` (`id`, `created_at`, `updated_at`, `title`, `city_id`, `logotype`) VALUES
(1, '2025-03-20 13:34:44', '2025-03-20 14:52:13', 'Аэрофлот', 1, 'logotypes/BBxkzkTD4lLMZ2pn47d1dguv8ucfMU1MSGZV0YJF.png'),
(2, '2025-03-20 13:37:47', '2025-03-20 13:37:47', 'Pobeda', 1, 'logotypes/FiIkWopdoAyc2bjAUMXPbC20k8eOloekcw39rLle.png'),
(5, '2025-03-25 13:51:36', '2025-03-25 13:51:36', 'S7 Airline', 7, 'logotypes/LB0G0S6dtVJEYXpInK838A8tdU93o71rNPWaI0qo.png'),
(6, '2025-03-29 10:10:10', '2025-03-29 10:10:10', 'Azimut', 11, 'logotypes/oTaqFKGjtttaVangFtdEdwS3K7ZVf8VMvHBQDBxD.png'),
(7, '2025-03-29 10:10:59', '2025-03-29 10:11:21', 'Azur Air', 12, 'logotypes/86HUAIsK8KuFf8EqOTKCJRbRUHMtkE9Y8dO9RHV7.png'),
(8, '2025-03-29 10:13:31', '2025-03-29 10:13:31', 'NordStar', 13, 'logotypes/xce88JivwIYr8ciC7jtM2lkvMqVvZcpDgOUMLDef.png'),
(9, '2025-03-29 10:14:28', '2025-03-29 10:14:28', 'NordWind', 5, 'logotypes/a1jC0uICc93M5wmlmI4kCQKC2xawNLTWibI4bft7.png'),
(10, '2025-03-29 10:15:17', '2025-03-29 10:15:17', 'RedWings', 8, 'logotypes/x0IRgFzwSSeuBRUGTA4ATb0F0cu5wmBvDTZXcvZ6.png');

-- --------------------------------------------------------

--
-- Структура таблицы `airports`
--

CREATE TABLE `airports` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity` tinyint(1) NOT NULL DEFAULT '1',
  `international` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `airports`
--

INSERT INTO `airports` (`id`, `created_at`, `updated_at`, `title`, `city_id`, `image`, `activity`, `international`) VALUES
(6, '2025-03-25 13:23:47', '2025-03-29 10:08:04', 'Domodedovo', 1, 'images/dE456FjLjxWU5ZNZps4wPAvwL3BhZquUDNOJV0SL.jpg', 1, 1),
(7, '2025-03-25 13:46:02', '2025-03-29 10:07:34', 'Sheremetyevo', 1, 'images/VJGUHkQWwX036lXKjrZg0ACWF9RqVePxlAgz43Ac.png', 1, 1),
(8, '2025-03-29 10:07:24', '2025-03-29 10:07:49', 'Vnukovo', 1, 'images/blb88ebhBYoJO7ygyFWhNhIFUxoeW0G8AlAk9nJ6.png', 1, 1),
(9, '2025-03-29 10:16:10', '2025-03-29 10:16:57', 'Pulkovo', 2, NULL, 1, 1),
(10, '2025-03-29 10:18:11', '2025-03-29 10:18:11', 'Named Tukay', 5, NULL, 1, 1),
(11, '2025-03-29 10:19:05', '2025-03-29 10:19:05', 'Tolmachevo', 7, NULL, 1, 1),
(12, '2025-03-29 10:19:50', '2025-03-29 10:19:50', 'Arsenyevo', 9, NULL, 1, 1),
(13, '2025-03-29 10:20:47', '2025-03-29 10:20:47', 'Named Great Ekaterina', 11, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `airport_airline`
--

CREATE TABLE `airport_airline` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `airport_id` int NOT NULL,
  `airline_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `airport_airline`
--

INSERT INTO `airport_airline` (`id`, `created_at`, `updated_at`, `airport_id`, `airline_id`) VALUES
(22, NULL, NULL, 7, 1),
(23, NULL, NULL, 7, 5),
(24, NULL, NULL, 8, 1),
(25, NULL, NULL, 8, 2),
(26, NULL, NULL, 8, 5),
(27, NULL, NULL, 6, 1),
(28, NULL, NULL, 6, 2),
(29, NULL, NULL, 6, 5),
(30, NULL, NULL, 6, 6),
(36, NULL, NULL, 9, 1),
(37, NULL, NULL, 9, 5),
(38, NULL, NULL, 9, 8),
(39, NULL, NULL, 9, 9),
(40, NULL, NULL, 9, 10),
(41, NULL, NULL, 10, 2),
(42, NULL, NULL, 10, 6),
(43, NULL, NULL, 10, 7),
(44, NULL, NULL, 10, 8),
(45, NULL, NULL, 10, 9),
(46, NULL, NULL, 10, 10),
(47, NULL, NULL, 11, 2),
(48, NULL, NULL, 11, 5),
(49, NULL, NULL, 11, 6),
(50, NULL, NULL, 11, 8),
(51, NULL, NULL, 11, 9),
(52, NULL, NULL, 12, 1),
(53, NULL, NULL, 12, 7),
(54, NULL, NULL, 12, 9),
(55, NULL, NULL, 12, 10),
(56, NULL, NULL, 13, 2),
(57, NULL, NULL, 13, 6),
(58, NULL, NULL, 13, 7),
(59, NULL, NULL, 13, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `created_at`, `updated_at`, `title`) VALUES
(1, '2025-03-18 14:49:27', '2025-03-18 14:49:27', 'Moscow'),
(2, '2025-03-18 15:06:53', '2025-03-18 15:08:44', 'St Peterburg'),
(5, '2025-03-20 12:35:54', '2025-03-20 12:35:54', 'Kazan'),
(7, '2025-03-25 13:51:05', '2025-03-25 13:51:05', 'Novosibirsk'),
(8, '2025-03-29 10:04:53', '2025-03-29 10:04:53', 'Ekaterinburg'),
(9, '2025-03-29 10:05:03', '2025-03-29 10:05:03', 'Vladivostok'),
(10, '2025-03-29 10:05:15', '2025-03-29 10:05:15', 'Kaliningrad'),
(11, '2025-03-29 10:09:29', '2025-03-29 10:09:29', 'Krasnodar'),
(12, '2025-03-29 10:11:11', '2025-03-29 10:11:11', 'Krasnoyarsk'),
(13, '2025-03-29 10:13:13', '2025-03-29 10:13:13', 'Norilsk');

-- --------------------------------------------------------

--
-- Структура таблицы `flights`
--

CREATE TABLE `flights` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `departure_id` int NOT NULL,
  `arrival_id` int NOT NULL,
  `airline_id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` tinyint(1) NOT NULL DEFAULT '1',
  `passangers_count` int DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `flights`
--

INSERT INTO `flights` (`id`, `created_at`, `updated_at`, `departure_id`, `arrival_id`, `airline_id`, `date`, `time`, `duration`, `title`, `activity`, `passangers_count`, `price`) VALUES
(1, '2025-03-25 14:45:13', '2025-03-29 10:04:08', 7, 6, 5, '2025-03-30', '15:05:00', 40, 'AMD-340', 1, 120, '75000.00'),
(2, '2025-03-29 10:38:02', '2025-03-29 10:38:02', 9, 12, 8, '2025-04-06', '12:10:00', 120, 'QWW-909', 1, 110, '95000.00'),
(3, '2025-03-29 10:39:08', '2025-03-29 10:39:08', 7, 13, 10, '2025-04-10', '20:30:00', 150, 'PLK-562', 1, 125, '120000.00'),
(4, '2025-03-29 10:39:52', '2025-03-29 10:39:52', 10, 6, 6, '2025-04-15', '15:40:00', 110, 'TUL-099', 1, 105, '86000.00'),
(5, '2025-03-29 10:40:33', '2025-03-29 10:40:33', 6, 11, 2, '2025-04-14', '19:05:00', 130, 'LOW-226', 1, 110, '88000.00'),
(6, '2025-03-29 10:41:26', '2025-03-29 10:41:26', 8, 12, 9, '2025-04-18', '11:20:00', 145, 'LYN-834', 1, 115, '92000.00');

-- --------------------------------------------------------

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `airport_airline`
--
ALTER TABLE `airport_airline`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `airports`
--
ALTER TABLE `airports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `airport_airline`
--
ALTER TABLE `airport_airline`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


--
-- AUTO_INCREMENT для таблицы `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
