-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 14 2021 г., 21:10
-- Версия сервера: 5.6.47
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `med_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Грант', 'grant@mail.ru', 'Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Natus, illo nihil corporis alias ex iusto dignissimos illum soluta non placeat quas tenetur maiores, delectus porro, quam a magnam pariatur sed.', '2020-12-15 18:34:01', '2020-12-15 18:34:01'),
(2, 'Админ', 'admin@mail.ru', 'Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Natus, illo nihil corporis alias ex iusto dignissimos illum soluta non placeat quas tenetur maiores, delectus porro, quam a magnam pariatur sed.', '2020-12-15 18:39:12', '2021-01-11 11:52:26');

-- --------------------------------------------------------

--
-- Структура таблицы `docs`
--

CREATE TABLE `docs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `docs`
--

INSERT INTO `docs` (`id`, `img`, `created_at`, `updated_at`) VALUES
(5, 'uploads/fSyKASu21NSmjMu8zWJC80OItitOUEQNk7NROLcx.jpeg', '2021-01-14 14:34:08', '2021-01-14 14:34:08'),
(6, 'uploads/xzQlE5xvZYhaarOe2nI0IF5xWkrrzwOERgyQoS35.jpeg', '2021-01-14 14:37:19', '2021-01-14 14:37:19');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Главная', '/', NULL, NULL),
(2, '«Гомеопатия»', '/homeopathy', NULL, NULL),
(3, 'Документы', '/docs', NULL, NULL),
(4, 'Контакты', '/contacts', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_12_15_170227_create_table_services', 1),
(2, '2020_12_15_181323_create_table_reviews', 1),
(3, '2020_12_15_181756_create_table_docs', 1),
(4, '2020_12_15_181957_create_table_contacts', 1),
(5, '2020_12_15_193714_create_menus_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Гость',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Гость', 'Отличный врач, обратилась к нему с женскими проблемами. Уже организм не воспринимал традиционые лекарства, желудок ипечень стали неадекватно реагировать на медикаментозное лечение. Подруга посоветовала попробовать гомеопатию, через 3 недели приема препаратов я забыла про боль. Курс лечения продолжаем, но показатели и на УЗИ, и крови в положительной динамике. Спасибо Александру Сергеевичу за грамотно подобранное лечение. Рекомендую всем этого доктора!', '2020-12-09 19:33:40', NULL),
(2, 'Гость', 'Александр Сергеевич мне очень понравился. Видно, что врач грамотный, думающий, диагнозов он не мне не придумывал, занимался той проблемой, которая у меня действительно была и с которой не смогли справиться другие врачи. Сначала я сомневалась, но так как рекомендовала хорошая знакомая, решила попробовать и не пожалела ни на секунду. Забыла о проблемах с желудком, теперь в этом вопросе только ему бы доверилась.', '2020-12-10 19:33:47', NULL),
(3, 'Гость', 'Я первый раз была на консультации у Сорокина Александра Сергеевича. Выбрала специалиста по отзывам. Об эффективности лечения пока что рано говорить, так как я недавно обратилась к врачу и только начинаю лечение. Доктор сказал, чтоя могу прийти к нему снова и пройти дополнительное обследование, если не будет значительного улучшения через неделю.', '2020-12-11 19:33:50', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Гомеопатия', 'fa-heartbeat', 'Регулирующая Терапия с помощью лекарственных средств растительного, животного и минерального происхождения. Использование малых доз перпаратов в гомеопатии исключает развитие аллергических реакций и других побочных токсических эффектов в процессе лечения', NULL, NULL),
(2, 'Гинекология', 'fa-heartbeat', 'Миома матки, эндометриоз, кисты яичников, аднекситы, нарушения менструального цикла, климактерический синдром и другие гормональные нарушения и др.', NULL, NULL),
(3, 'Эндокринология', 'fa-heartbeat', 'Болезни щитовидной железы,ожирение, диэнцефальный синдром, осложнения сахарного диабета и другие гормональные нарушения', NULL, NULL),
(4, 'Гематология', 'fa-heartbeat', 'Анемия, лимфогрануломатоз и другие забодевания крови', NULL, NULL),
(5, 'Дерматология', 'fa-heartbeat', 'Болезни щитовидной железы,ожирение, диэнцефальный синдром, осложнения сахарного диабета и другие гормональные нарушения', NULL, NULL),
(6, 'Эндокринология', 'fa-heartbeat', 'Аллергия, псориаз, нейродермит, системная красная волчанка и др.', NULL, NULL),
(7, 'Неврология', 'fa-heartbeat', 'Невралгии, энурез, заикание, головная боль, хорея, тики, судорожный синдром, сопутствующая терапия при демиелинизирующих заболеваниях и нарушении мозгового кровообращения', NULL, NULL),
(8, 'ЛОР, Урология, Хирургия', 'fa-heartbeat', 'ЛОР болезни – гайморит, синусит, аденоиды, хронический ринит, полипы носа и др.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Индексы таблицы `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `docs`
--
ALTER TABLE `docs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
