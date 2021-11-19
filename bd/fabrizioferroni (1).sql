-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2021 a las 04:12:23
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fabrizioferroni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `ruta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `version` varchar(6) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cv`
--

INSERT INTO `cv` (`id`, `ruta`, `nombre`, `descripcion`, `version`) VALUES
(1, '../public/cv/cvfabrizioferronipdf-47.pdf', 'CV Fabrizio Ferroni', 'CV Personal actualizado a la fecha de hoy 21/07/21', '1.0.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargasweb`
--

CREATE TABLE `descargasweb` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `respuesta` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `comunico` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechadedesc` varchar(17) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `descargasweb`
--

INSERT INTO `descargasweb` (`id`, `nombre`, `apellido`, `email`, `whatsapp`, `respuesta`, `comunico`, `fechadedesc`) VALUES
(1, 'Fabrizio', 'Ferroni', 'fabrizioferroni@outlook.com', '3535693037', 'Reseteo de base de datos', 'No', '21/07/21 - 13:33'),
(2, 'Fabrizio', 'Ferroni', 'fabrizioferroni@outlook.com', '3535693037', 'Prueba select 1', 'Si por correo electronico', '22/07/21 - 12:35'),
(3, 'Fabrizio', 'Ferroni', 'fabrizioferroni@outlook.com', '3535693037', 'Prueba select 2', 'Si por whatsapp', '22/07/21 - 12:36'),
(4, 'Fabrizio', 'Ferroni', 'fabrizioferroni@outlook.com', '3535693037', 'Prueba select 3', 'No', '22/07/21 - 12:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `rutaimg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `user`, `pass`, `rutaimg`) VALUES
(1, 'Fabrizio', 'Ferroni', 'fabrizioferroni@outlook.com', 'fferroni', 'afd11db4673b64e4cc2afdff7348f2e5a1275f8dc3c376b7be249bac11cb62928310ed2e48903e45baee49a07758559362cb5c66f9b922ae5706eb4142319aeb', 'dist/img/yojpg-44.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pagina` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descargasweb`
--
ALTER TABLE `descargasweb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indice_fecha` (`fecha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `descargasweb`
--
ALTER TABLE `descargasweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
