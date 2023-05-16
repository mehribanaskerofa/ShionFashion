-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 16 2023 г., 19:33
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shionhouse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Penergy', '53bbf3ae-06a3-4a23-8ab7-c8a011aceaba.png', 'penergy', NULL, '2023-05-09 07:15:02'),
(3, 'Offire', '9c025099-c4f5-4c47-b091-f52350f56083.png', 'offire', NULL, '2023-05-09 07:14:05');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `title`, `address`, `iframe`, `phone`, `email`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Contact with us', 'Mammad Araz, 109, Baku, Narimanov, AZ1069.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12152.214104309094!2d49.8476844!3d40.407665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403087f5efa5887d%3A0x9c60fab32c8927e7!2sAvesta!5e0!3m2!1sen!2saz!4v1683486978272!5m2!1sen!2saz\" width=\"800\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '(+994 12) 448-16-18', 'm.askerova.99@gmail.com', 'Mon to Fri 9am to 9pm', NULL, '2023-05-07 14:19:36');

-- --------------------------------------------------------

--
-- Структура таблицы `contactform`
--

CREATE TABLE `contactform` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contactform`
--

INSERT INTO `contactform` (`id`, `email`, `name`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'm.askerova.99@mail.ru', 'mehribsn', 'salam', 'salam house', '2023-05-08 05:59:52', '2023-05-08 05:59:52'),
(3, 'm.askerova.99@mail.ru', 'mehribsn', 'salam', 'salam house', '2023-05-08 06:04:57', '2023-05-08 06:04:57'),
(4, 'm.askerova.99@mail.ru', 'mehribsn', 'salam', 'salam housedcsvdaf', '2023-05-08 06:38:48', '2023-05-08 06:38:48'),
(6, 'm.askerova.99@mail.ru', 'salam', 'salam', 'salam', '2023-05-12 07:22:16', '2023-05-12 07:22:16');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `parent_id` smallint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `title`, `url`, `is_active`, `deleted_at`, `parent_id`) VALUES
(5, 'Home', 'http://localhost:8000/', 1, NULL, NULL),
(6, 'Shop', 'http://localhost:8000/shop', 1, NULL, NULL),
(7, 'About', 'http://localhost:8000/about', 1, NULL, NULL),
(8, 'Contact', 'http://localhost:8000/contact', 1, NULL, NULL),
(10, 'asd', 'http://localhost:8000/', 1, NULL, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_03_202619_create_menu_table', 1),
(3, '2023_05_04_084717_create_pages_table', 2),
(4, '2023_05_04_192534_create__contact_table', 3),
(5, '2023_05_04_213826_create_contactform_table', 4),
(6, '2023_05_04_224555_create_sosialmediaicons_table', 4),
(7, '2023_05_06_195117_create_users_table', 5),
(8, '2023_05_06_215440_create_category_table', 6),
(9, '2023_05_06_232220_create_product_table', 7),
(10, '2023_05_07_142206_create_productimage_table', 7),
(12, '2023_05_07_154311_drop_productimage_table', 8),
(13, '2023_05_07_154924_drop_productimage_table', 9),
(14, '2023_05_07_155125_create_productimage_table', 10),
(15, '2023_05_13_202929_add_active_column_to_menu_table', 11),
(16, '2023_05_13_214109_add_softdelete_column_to_menu_table', 12),
(17, '2023_05_13_231824_add_parent_id_column_to_menu_table', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(13, 'Head Page', 'convert from JPG, PNG', 'head', '9d814454-6971-452b-a6e5-a0515cfcb894.jpg', '2023-05-04 12:44:44', '2023-05-07 12:22:25'),
(14, 'About us', 'There are some recent market trends in power bank industry.The global power bank market size was US$ 18.1 billion in\r\n2021. The global power bank market is forecast to reach US$ 29.34 billion by 2030 by growing at a compound annual\r\ngrowth rate (CAGR) of 5.9% during the forecast period from 2022 to 2030.\r\nThere can be listed two main trends in power bank market', 'about', '3094a8b9-088c-43a0-b062-8f785e6cc7c8.png', '2023-05-04 13:40:37', '2023-05-09 06:11:16');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `text`, `price`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'fire', 'Stay protected and comfortable', '23', '33d550ce-750b-4d1c-9d0a-266bebd5744c.png', 2, '2023-05-08 09:59:34', '2023-05-09 06:04:27'),
(8, 'fires', 'Don\'t let the heat slow you down', '12', 'b396ade9-038e-427d-9ffa-18083f28b36c.jpg', 2, '2023-05-08 09:59:53', '2023-05-09 06:09:02'),
(9, 'product1', 'products', '23', 'e9dd13cf-583c-4ab0-922a-038d90ca2d0c.png', 2, '2023-05-08 10:00:09', '2023-05-09 06:07:29'),
(10, 'Product2', 'prod', '23', '5c7f8154-55c9-4ded-9952-a7aff8749313.png', 3, '2023-05-08 10:00:52', '2023-05-09 06:08:41');

-- --------------------------------------------------------

--
-- Структура таблицы `productimage`
--

CREATE TABLE `productimage` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `productimage`
--

INSERT INTO `productimage` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(5, '3d82705c-179a-4bdc-ad7e-b79f3d9459b6.png', 7, '2023-05-08 10:01:11', '2023-05-08 10:01:11'),
(6, '57f4fbaa-b4b1-4ce2-b4a6-ae306e6b55c5.png', 9, '2023-05-08 10:01:21', '2023-05-08 10:01:21'),
(10, '5b4001b5-ab75-4323-9380-6f1361f2ad4b.png', 7, '2023-05-09 06:05:08', '2023-05-09 06:05:08'),
(11, '1bd5be05-bbd7-4e33-8250-f22070e165c4.png', 7, '2023-05-09 06:05:23', '2023-05-09 06:05:23'),
(12, '24798ba8-469c-4375-b305-7c46d4567275.png', 7, '2023-05-09 06:05:40', '2023-05-09 06:05:40');

-- --------------------------------------------------------

--
-- Структура таблицы `sosialmediaicons`
--

CREATE TABLE `sosialmediaicons` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hurl` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sosialmediaicons`
--

INSERT INTO `sosialmediaicons` (`id`, `title`, `icon`, `hurl`) VALUES
(1, 'twitter', '<i class=\"fab fa-twitter\"></i>', 'https://twitter.com/'),
(2, 'facebook', '<i class=\"fa-brands fa-facebook\"></i>', 'https://www.facebook.com/'),
(3, 'instagram', '<i class=\"fa-brands fa-instagram\"></i>', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'meh@mail.ru', '$2y$10$d./KgerZxm0NeYHySsV/wOIuUnr4sL8gv6luerSFJ3yhfWsgOgiRq', NULL, '2023-05-06 15:18:37', '2023-05-06 15:18:37'),
(2, 'xebon@mailinator.com', '$2y$10$2vthDp/G.HK.4kHFb00qnOHp6hRE0/GP2B6cFtQc.G65SSpZIfg6m', NULL, '2023-05-14 14:43:45', '2023-05-14 14:43:45'),
(3, 'xijy@mailinator.com', '$2y$10$8NU/w6BIcXPE.BaqktyVS.eSzt2/NR9hKT3Hc2fWpjqiWQJUZ7a32', NULL, '2023-05-14 14:44:18', '2023-05-14 14:44:18'),
(4, 'dexogixy@mailinator.com', '$2y$10$lN1pl1n.EUG3O0xeiIyZ6uCV7IuNQXrpjKUvlk.sXW1h9yaxlDH/O', NULL, '2023-05-14 15:20:04', '2023-05-14 15:20:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`);

--
-- Индексы таблицы `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productimage_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `sosialmediaicons`
--
ALTER TABLE `sosialmediaicons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `productimage`
--
ALTER TABLE `productimage`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `sosialmediaicons`
--
ALTER TABLE `sosialmediaicons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `productimage`
--
ALTER TABLE `productimage`
  ADD CONSTRAINT `productimage_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
