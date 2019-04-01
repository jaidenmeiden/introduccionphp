-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-04-2019 a las 00:45:54
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
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `visible`, `months`, `created_at`, `updated_at`) VALUES
(1, 'Titulo 1', 'Descripción 1', 0, 0, '2019-04-01 23:29:08', '2019-04-01 23:29:08'),
(2, 'PHP Developer', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:44:51', '2019-04-01 23:44:51'),
(3, 'Python Dev', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:44:57', '2019-04-01 23:44:57'),
(4, 'Devops', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:46:28', '2019-04-01 23:46:28'),
(5, 'NodeJS Dev', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:46:35', '2019-04-01 23:46:35'),
(6, 'Frontend Dev', 'This is an awesome job!!!', 0, 0, '2019-04-01 23:46:43', '2019-04-01 23:46:43');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
