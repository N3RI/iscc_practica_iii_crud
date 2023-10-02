-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2023 a las 12:57:07
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calendario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `lugar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `informacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `invitados` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `contacto` int(10) NOT NULL,
  `estado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `fecha`, `hora`, `lugar`, `informacion`, `categoria`, `invitados`, `precio`, `imagen`, `responsable`, `capacidad`, `contacto`, `estado`, `tipo`) VALUES
(1, 'Lectura Juvenil 2023', '2023-09-19', '19hs', 'Biblioteca Cuatiá Rendá', 'Apta para mayores de 16 años', 'Juvenil', 'Sergio Poe', 'Gratuito', '', 'Maria Blass', '50 Persona', 377564312, 'Cancelado', 'Benefico'),
(2, 'Feria del Libro', '2023-10-18', '20hs', 'Espacio verde', 'Apto para todo público', 'Fiesta', 'Marcos Suarez', '$300', '', 'Rita Alonso', '150 Person', 37786412, 'Activo', 'Benefico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
