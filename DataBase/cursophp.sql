-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2019 a las 16:43:28
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `months` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `visible`, `months`, `created_at`, `updated_at`, `logo`) VALUES
(1, 'Titulo 1', 'Descripción 1', 0, 0, '2019-04-01 23:29:08', '2019-04-01 23:29:08', NULL),
(2, 'PHP Developer', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:44:51', '2019-04-01 23:44:51', NULL),
(3, 'Python Dev', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:44:57', '2019-04-01 23:44:57', NULL),
(4, 'Devops', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:46:28', '2019-04-01 23:46:28', NULL),
(5, 'NodeJS Dev', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:46:35', '2019-04-01 23:46:35', NULL),
(6, 'Frontend Dev', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:46:43', '2019-04-01 23:46:43', NULL),
(7, 'Python DEv', 'Python DEv', 0, 0, '2019-04-07 06:57:23', '2019-04-07 06:57:23', NULL),
(8, 'job XSS', '<script>alert(\"Hola\");</script>', 0, 0, '2019-04-07 07:08:39', '2019-04-07 07:08:39', NULL),
(9, 'nuevo trabajo', 'nuevo trabajo', 0, 0, '2019-04-07 08:32:44', '2019-04-07 08:32:44', NULL),
(13, 'Full Stack Developer', 'Soy el mejor Full Stack Developer', 0, 0, '2019-04-07 15:28:37', '2019-04-07 15:28:37', '4af319148a3435f8f1d1ef91290e2cc9721bd5cc.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'Project X', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.', 0, '2019-04-02 00:01:57', '2019-04-02 00:01:57'),
(2, 'Project Y', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.', 0, '2019-04-02 00:03:24', '2019-04-02 00:03:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'jaidenmeiden', '$2y$10$k8DqlH2bPL4HO6/LvF6emu6yvki7wKNF9lYFup9vtK.1nzy/e.0TC', '2019-04-07 16:38:41', '2019-04-07 16:38:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;