-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2022 a las 20:20:04
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
-- Base de datos: `app_university`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities_repository`
--

CREATE TABLE `activities_repository` (
  `id` int(11) NOT NULL,
  `career` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `project` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observation` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `activities_repository`
--

INSERT INTO `activities_repository` (`id`, `career`, `project`, `observation`) VALUES
(8, 'Ingeniería de Sistemas', 'pregrado', 'semestre 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `career` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `observation` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `application_entry`
--

CREATE TABLE `application_entry` (
  `id` int(11) NOT NULL,
  `request` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observation` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `application_entry`
--

INSERT INTO `application_entry` (`id`, `request`, `title`, `observation`) VALUES
(1, 'Optar por grado', 'Ingeniería de Software', 'todos los requerimientos cumplidos'),
(2, 'Optar por grado', 'Ingeniería de Software', 'todos los requerimientos cumplidos'),
(3, 'Optar por grado', 'Ingeniería de Software', 'todos los requerimientos cumplidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `application_entry_student`
--

CREATE TABLE `application_entry_student` (
  `id` int(11) NOT NULL,
  `degree` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `modality` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observation` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charge_document`
--

CREATE TABLE `charge_document` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `career` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `charge_document`
--

INSERT INTO `charge_document` (`id`, `title`, `career`, `description`, `rol`) VALUES
(3, ' Capitulo 1', 'Ingeniería de Sistemas', 'entrega del capitulo 1', 'Tutor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creation_of_news`
--

CREATE TABLE `creation_of_news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `career` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `creation_of_news`
--

INSERT INTO `creation_of_news` (`id`, `title`, `career`, `description`, `target`) VALUES
(1, 'Students build drone for company security', 'Electronic Engineering\r\n ', 'Electronic Instrumentation joined the Technological University of the Americas for the project.\r\nThey taught the course-workshop \"Configuration and assembly of professional drones\".\r\nThey recently tested it on the UTA baseball field.', 'web'),
(2, 'Systems Engineering students awarded their projects focused on Disruptive Technologies', 'systems engineer', 'The Code Awards have 6 categories, among which are Software Development, Research, Innovation and Emerging Technologies. To participate in this event, each project must first have been exhibited at Expo Inventiva. ', 'web'),
(3, 'Technological University of the Americas offers English for everyone in Latin America', 'alls (free to everyone)', 'Through the massive online course (Mooc, for its acronym in English) anyone in the world can access courses for free. It will be given at all levels basic, intermediate and advanced', 'web'),
(4, 'High job performance of UTDA graduates recognized', 'ALL university', 'For witnessing the commitment and dedication in the professional training of its students, the HBC Bank gave UTDA recognition for the quality and professionalism of its graduates by showing high job performance in this banking institution and reaching 65% of their payroll in the Northwest of the country.', 'web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `external_register`
--

CREATE TABLE `external_register` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `direction` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `disability` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `homePhone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `career` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `modality` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `turn` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `external_register`
--

INSERT INTO `external_register` (`id`, `name`, `surname`, `date`, `direction`, `dni`, `disability`, `email`, `phone`, `homePhone`, `career`, `modality`, `turn`) VALUES
(4, 'ROBERTO', 'CUBEROS', '2022-10-10', '', '22953055', 'Yes', 'r4r', '04127799607', '04127799607', 'Information Technology', 'face-to-face', 'Day'),
(6, 'Angel ', 'Castillo', '0000-00-00', 'Ciudad Boli', 'V-31.456.453', 'Yes', 'angel_castillo2003@gmail.com', ' ', '+584163068941', 'Information Technology', 'Online', 'Night');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hours_of_class_by_group`
--

CREATE TABLE `hours_of_class_by_group` (
  `id` int(11) NOT NULL,
  `hours` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `assists` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `observation` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'tech');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `principal_score` int(20) NOT NULL,
  `aditional_score` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observation` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `topic_entry`
--

CREATE TABLE `topic_entry` (
  `id` int(11) NOT NULL,
  `activity` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observation` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor_asign`
--

CREATE TABLE `tutor_asign` (
  `id` int(11) NOT NULL,
  `degree` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `modality` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `turn` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `project` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `student` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `period` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tutor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tutor_asign`
--

INSERT INTO `tutor_asign` (`id`, `degree`, `modality`, `turn`, `title`, `project`, `student`, `period`, `tutor`, `start_date`, `end_date`, `delivery_date`) VALUES
(12, 'Information Technology', 'face-to-face', 'Day', '', '', '', '2022-3', '', '2022-10-22', '2022-10-22', '2022-10-22'),
(13, 'Information Technology', 'face-to-face', 'Day', '', '', '', '2022-3', '', '2022-10-22', '2022-10-22', '2022-10-22'),
(14, 'Information Technology', 'face-to-face', 'Day', '', '', '', '2022-3', '', '2022-10-22', '2022-10-22', '2022-10-22'),
(15, 'Tecnología de Sistemas', 'En línea', 'Noche', '', 'Crear un Ecommerce para la empresa Los Tres Reyes C.A', 'Angel Castillo', '2022-3', 'Andres Mendoza', '2023-01-18', '2023-02-08', '2023-02-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` int(50) NOT NULL,
  `password` int(10) NOT NULL,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities_repository`
--
ALTER TABLE `activities_repository`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `application_entry`
--
ALTER TABLE `application_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `application_entry_student`
--
ALTER TABLE `application_entry_student`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `charge_document`
--
ALTER TABLE `charge_document`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `creation_of_news`
--
ALTER TABLE `creation_of_news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `external_register`
--
ALTER TABLE `external_register`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hours_of_class_by_group`
--
ALTER TABLE `hours_of_class_by_group`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `topic_entry`
--
ALTER TABLE `topic_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutor_asign`
--
ALTER TABLE `tutor_asign`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_access` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities_repository`
--
ALTER TABLE `activities_repository`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `application_entry`
--
ALTER TABLE `application_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `application_entry_student`
--
ALTER TABLE `application_entry_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `charge_document`
--
ALTER TABLE `charge_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `creation_of_news`
--
ALTER TABLE `creation_of_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `external_register`
--
ALTER TABLE `external_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `hours_of_class_by_group`
--
ALTER TABLE `hours_of_class_by_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `topic_entry`
--
ALTER TABLE `topic_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tutor_asign`
--
ALTER TABLE `tutor_asign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_access` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
