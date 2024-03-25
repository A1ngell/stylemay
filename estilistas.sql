-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2024 a las 01:01:16
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estilistas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoprecio`
--

CREATE TABLE `autoprecio` (
  `id` int(2) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `precio` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `autoprecio`
--

INSERT INTO `autoprecio` (`id`, `nombre`, `precio`) VALUES
(1, 'Lash Lifting', 3),
(2, 'Nutricion', 32),
(3, 'Tinte', 43000),
(4, 'Extenciones de Pestañas', 33),
(5, 'Mega volumen', 33),
(6, 'Efecto humedo', 33),
(7, 'Foxy lash', 33),
(8, 'Belleza de manos', 33),
(9, 'Kapping', 33),
(10, 'Semi permanente en manos y pies', 33),
(11, 'Uñas esculpidas en gel', 33),
(12, 'Reconstruccion de uñas', 33),
(13, 'Perfilado', 33),
(14, 'Laminado', 33),
(15, 'Henna', 33),
(16, 'Limpiezas Faciales', 33),
(17, 'Punta de Diamante', 33),
(18, 'Limpiezas y Pulido corporales', 33),
(19, 'Blanqueamiento de zonas', 33);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autoprecio`
--
ALTER TABLE `autoprecio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autoprecio`
--
ALTER TABLE `autoprecio`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
