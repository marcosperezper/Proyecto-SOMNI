-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2019 a las 22:57:31
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterans`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `players`
--

INSERT INTO `players` (`id`, `name`, `lastname`, `nickname`, `number`, `position`) VALUES
(1, 'Andres', 'Santamaria', 'Andres ', 0, 'Por'),
(2, 'Jose', 'Luís Pérez', 'Pasti', 2, 'Ext'),
(3, 'Albert', 'Maria', 'Català', 3, 'Lat'),
(4, 'Abraham', 'Cerveró', 'Abraham', 4, 'Cen'),
(5, 'Carlos', 'Prats', 'Xarli', 5, 'Def'),
(6, 'Juan', 'Vicente ', 'Juanvi', 6, 'Cen'),
(7, 'Francesc', 'Torres', 'Torte', 7, 'Ext'),
(8, 'Ruben', 'Joaquín', 'Xifli', 8, 'Cen'),
(9, 'Óscar', 'Penella', 'Penella', 9, 'At'),
(10, 'Julio', 'Prats', 'Julio', 10, 'Ext'),
(11, 'Vicente', 'Prats', 'Cento', 11, 'At'),
(12, 'Francisco', 'Alemany', 'Paco', 12, 'Lat'),
(13, 'Blasco', 'Casas', 'Arturo', 13, 'Por'),
(14, 'Juan', 'Esteve', 'Mañano', 14, 'Dav'),
(15, 'José', 'Navarro', 'Albalero', 15, 'Def'),
(16, 'Gabriel', 'Guzmán', 'Gabi', 16, 'Cen'),
(17, 'Josep', 'Guillem', 'Josep', 17, 'Def'),
(18, 'Rafael', 'Cerveró', 'Rai', 18, 'At'),
(19, 'Raúl', 'Gomera', 'Goma', 19, 'Cen'),
(20, 'Oliva', 'Sala', 'Germán', 20, 'At'),
(21, 'Óscar', 'Pecero', 'Óscar', 21, 'Lat'),
(22, 'Juanjo', 'Martínez', 'Tramvia', 22, 'At'),
(23, 'Jorge', 'Campos Castellar', 'Jordi ', 23, 'Def'),
(24, 'Raúl', 'Gijón', 'Raúl', 24, 'Lat'),
(25, 'Juan', 'Manuel García', 'Juanma', 25, 'Ext'),
(26, 'Madramany', '', 'Madra', 26, 'Def'),
(27, 'Ángel', 'Clemente', 'Fenoll', 27, 'At'),
(28, 'Juanma', 'Laguna ', 'Laguna', 28, 'Def'),
(29, 'Vicent', 'Cardona', 'Cardona', 29, 'Cen'),
(30, 'Luís', 'Herrerías', 'Luiso', 30, 'Cen'),
(31, 'Marcos', 'Arocas', 'Arocas', 31, 'Cen');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_264E43A6A188FE64` (`nickname`),
  ADD UNIQUE KEY `UNIQ_264E43A696901F54` (`number`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
