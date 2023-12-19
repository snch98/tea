-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 19 2023 г., 22:12
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tea_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries_of_origin`
--

CREATE TABLE `countries_of_origin` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `countries_of_origin`
--

INSERT INTO `countries_of_origin` (`country_id`, `country_name`) VALUES
(1, 'China'),
(2, 'India'),
(4, 'Japan'),
(5, 'South Africa'),
(3, 'Sri Lanka');

-- --------------------------------------------------------

--
-- Структура таблицы `kinds_of_teas`
--

CREATE TABLE `kinds_of_teas` (
  `id` int(20) NOT NULL,
  `tea_kind` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `kinds_of_teas`
--

INSERT INTO `kinds_of_teas` (`id`, `tea_kind`) VALUES
(1, 'Black Tea'),
(3, 'Exotic Tea'),
(2, 'Green Tea');

-- --------------------------------------------------------

--
-- Структура таблицы `tea_inventory`
--

CREATE TABLE `tea_inventory` (
  `id` int(11) NOT NULL,
  `tea_id` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `quantity_in_stock` int(11) NOT NULL,
  `last_restock_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tea_inventory`
--

INSERT INTO `tea_inventory` (`id`, `tea_id`, `is_available`, `quantity_in_stock`, `last_restock_date`) VALUES
(1, 1, 1, 5, '2023-11-21'),
(2, 2, 1, 4, '2023-12-05'),
(3, 3, 1, 4, '2023-12-05'),
(4, 4, 1, 40, '2023-12-05'),
(5, 5, 0, 0, '2023-12-05'),
(6, 6, 0, 0, '2023-12-05'),
(7, 7, 1, 14, '2023-12-05'),
(8, 8, 1, 8, '2023-12-05'),
(9, 9, 1, 4, '2023-12-05'),
(10, 10, 1, 1, '2023-12-05'),
(11, 11, 1, 8, '2023-12-05'),
(12, 12, 1, 6, '2023-12-05'),
(13, 13, 1, 32, '2023-12-05'),
(14, 14, 0, 0, '2023-12-05'),
(15, 15, 1, 7, '2023-12-05');

-- --------------------------------------------------------

--
-- Структура таблицы `tea_varieties`
--

CREATE TABLE `tea_varieties` (
  `variety_id` int(11) NOT NULL,
  `variety_name` varchar(80) NOT NULL,
  `cost_per_unit` int(11) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `kind_id` int(11) NOT NULL,
  `origin_id` int(11) NOT NULL,
  `picture_name` varchar(35) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tea_varieties`
--

INSERT INTO `tea_varieties` (`variety_id`, `variety_name`, `cost_per_unit`, `unit`, `kind_id`, `origin_id`, `picture_name`, `description`) VALUES
(1, 'Earl Grey', 20, 'kg', 1, 3, 'earl-gray', 'Black tea infused with bergamot oil, giving it a distinct citrusy aroma and flavor.'),
(2, 'Ceylon Tea', 14, 'kg', 1, 2, 'ceylon-tea', 'Bright, brisk, citrusy, can range from light and floral to bold and robust'),
(3, 'Keemun Tea', 16, 'kg', 1, 1, 'keemun-tea', 'Winey, fruity, floral, with a hint of smokiness.'),
(4, 'Darjeeling Tea', 13, 'kg', 1, 2, 'darjeeling', 'Delicate, floral, muscatel, sometimes with a slightly astringent note.'),
(5, 'Assam Tea', 15, 'kg', 1, 2, 'assam', 'Bold, brisk, malty, sometimes with a hint of caramel.'),
(6, 'Sencha', 17, 'kg', 2, 4, 'sencha', 'Grassy, vegetal, bright, refreshing'),
(7, 'Matcha', 15, 'kg', 2, 4, 'matcha', 'Rich, creamy, umami, intense, vibrant green.'),
(8, 'Dragonwell', 15, 'kg', 2, 1, 'dragonwell', 'Mellow, slightly sweet, toasty, smooth.'),
(9, 'Gunpowder', 22, 'kg', 2, 1, 'gunpowder', 'Strong, slightly smoky, bold, brownish-yellow liquor.'),
(10, 'Gyokuro', 30, 'kg', 2, 4, 'gyokuro', 'Sweet, umami, smooth, velvety, deep green.'),
(11, 'Jasmine Pearl Tea', 24, 'kg', 3, 1, 'jasmine-pearls', 'Delicate, floral, sweet, with subtle jasmine aroma.'),
(12, 'Oolong Tea', 13, 'kg', 3, 1, 'olung', 'Varied (floral, creamy, toasty, fruity), mid-way between green and black tea.'),
(13, 'Masala Chai', 26, 'kg', 3, 2, 'masala-chai', 'Spicy (cinnamon, cardamom, cloves, ginger), often served with milk and sweeteners.'),
(14, 'Pu-erh Tea', 36, 'kg', 3, 1, 'pu-erh', 'Earthy, woody, sometimes sweet, complex with aging.'),
(15, 'Rooibos Tea', 15, 'kg', 3, 5, 'rooibos', 'Sweet, nutty, naturally caffeine-free, often blended with herbs and fruits for added flavors.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `created_at`) VALUES
(14, 'snch', '$2y$10$1M6G8m.R2wnu5Pm31yFY1uXL4cddYmry9eFuy7JIpZpGjHA68Ig/.', 'snch@gmail.com', '2023-12-12'),
(15, 'tsehla', '$2y$10$KfBFP2faHdmo8Wustd3.Q.irNqwwlzfXuLEzfYlwGvVX04YvSy4i.', 'tsehla@gmail.com', '2023-12-12'),
(16, 'Sonya', '$2y$10$fmDqjmUIg6uMFXkcuhnnXOaZYLhPjq9MKrTLadlCIBtgN3MQW/jie', 'sonya@gmail.com', '2023-12-18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries_of_origin`
--
ALTER TABLE `countries_of_origin`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `country_name` (`country_name`);

--
-- Индексы таблицы `kinds_of_teas`
--
ALTER TABLE `kinds_of_teas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tea_name` (`tea_kind`);

--
-- Индексы таблицы `tea_inventory`
--
ALTER TABLE `tea_inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tea_variety_foreign_key` (`tea_id`);

--
-- Индексы таблицы `tea_varieties`
--
ALTER TABLE `tea_varieties`
  ADD PRIMARY KEY (`variety_id`),
  ADD UNIQUE KEY `variety_name` (`variety_name`),
  ADD KEY `tea_origin_foreign_key` (`origin_id`),
  ADD KEY `tea_kind_foreign_key` (`kind_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `countries_of_origin`
--
ALTER TABLE `countries_of_origin`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `kinds_of_teas`
--
ALTER TABLE `kinds_of_teas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tea_inventory`
--
ALTER TABLE `tea_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `tea_varieties`
--
ALTER TABLE `tea_varieties`
  MODIFY `variety_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `tea_inventory`
--
ALTER TABLE `tea_inventory`
  ADD CONSTRAINT `tea_variety_foreign_key` FOREIGN KEY (`tea_id`) REFERENCES `tea_varieties` (`variety_id`);

--
-- Ограничения внешнего ключа таблицы `tea_varieties`
--
ALTER TABLE `tea_varieties`
  ADD CONSTRAINT `tea_kind_foreign_key` FOREIGN KEY (`kind_id`) REFERENCES `kinds_of_teas` (`id`),
  ADD CONSTRAINT `tea_origin_foreign_key` FOREIGN KEY (`origin_id`) REFERENCES `countries_of_origin` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
