-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2022 a las 20:21:49
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'tech');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `privilege` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `password`, `privilege`, `start_date`) VALUES
(1, 'Roberto Cuberos', 'admin', 'robertocuberos@gmail.com', 'Tere2021@', '1', '2022-10-23 00:19:45'),
(9, '', '', 'databasemanager@gmail.com', '$2y$10$ylny0A0JZvELJrOtJY1Eau48rERrcT0mnYHq4ORst9fNcgN4yj12y', '', '2022-10-23 01:58:22'),
(11, '', '', 'tareasonline2236@protonmail.com', '$2y$10$4xUiWxfrUcVZ6YILSmGMoe0QMvnJUUekidzzXLh.A.5nx1HwqFj6m', '', '2022-11-02 16:03:06'),
(12, '', '', 'tareasonline2236@protonmail.com', '$2y$10$dY6sFsBeTGTFf3dpKbxse.pWUegJbFvdf41kJ9zuL1qu3N67cg.By', '', '2022-11-02 16:11:52'),
(13, '', '', 'mguntinas34@gmail.com', '$2y$10$67H34sQYQYhInpwfAlPyGO9yPP07HJLxLfcozjSa47YiJg4zIVgBu', '', '2022-11-02 16:15:39'),
(14, '', '', 'mguntinas34@gmail.com', '$2y$10$U159w7lpezQVV4jhlVUJgeG2fzv4ZCs8Mj6wfQ99GoDeWXTlp/DKu', '', '2022-11-02 16:22:46'),
(15, '', '', 'mguntinas34@gmail.com', '$2y$10$50aMFqeaq4BfmScIy8Yw.ebgOTZhqHiGe6SKvHCuAqY..Ukpw7Voy', '', '2022-11-02 16:24:27'),
(16, '', '', 'mguntinas34@gmail.com', '$2y$10$e6XcIs486aGz1hf5CseuUudCRNJdITbEccg0Yu8obuaEpKJCeoABa', '', '2022-11-02 16:24:38'),
(17, '', '', 'hector24@gmail.com', '$2y$10$8fkftnKuv0QCZKx2X7MJdOoOC4dXzgr5ADcU/CkbTYn7wYH9fkjzi', '', '2022-11-02 16:25:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
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
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
