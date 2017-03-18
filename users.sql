-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2017 a las 21:13:13
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('member','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Zelma Schimmel', 'jeffry37@example.org', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', '9EDIp2kJ2r', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(5, 'Birdie Gutkowski', 'vyundt@example.com', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'PPUxmTYloH', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(4, 'admin', 'admin@gmail.com', 'admin', '$2y$10$em/F/nZsfGKZuCkxhTY6q.6R2YkrtERNY2tgnlL.DVK5DAeVeC2hG', '4w63h2eHdQqCFHGh4H1tx8xSN1syFyQYDX3A1EIDpKWow1wwjdurAAm1ERsz', '2017-03-12 23:52:39', '2017-03-12 23:54:36'),
(7, 'Mrs. Idella Lesch', 'elmo33@example.net', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'RuRj3pNDhB', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(8, 'Mac Jaskolski', 'bianka.effertz@example.net', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', '8vLXLYxvkv', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(9, 'Kristoffer McGlynn', 'emard.mackenzie@example.org', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'nI2pcKiEsh', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(10, 'Mrs. Evalyn Hahn III', 'cathryn.kuhlman@example.net', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'eDYkjMn28V', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(11, 'Melvin Balistreri DVM', 'alejandrin88@example.net', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'ygJXCoGOjs', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(12, 'Mollie Ritchie', 'sdurgan@example.org', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'Z18p4Ld8FP', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(13, 'Robert Murray DVM', 'antone61@example.net', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'KZJhu7nwh3', '2017-03-15 07:13:48', '2017-03-15 07:13:48'),
(14, 'Johann Hammes', 'zparker@example.net', 'member', '$2y$10$moHCNwOAtQpeiXDDtCHQ3e8mmYwWf/DO..bfP0l8Dvx93W38Mr6lG', 'gTkveYg22v', '2017-03-15 07:13:48', '2017-03-15 07:13:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
