-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 15:21:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(11) NOT NULL,
  `lugar` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `invitados` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(100) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `responsable` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` varchar(100) NOT NULL,
  `contacto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(100) NOT NULL,
  `tipoEvento` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `fecha`, `hora`, `lugar`, `info`, `invitados`, `precio`, `imagen`, `responsable`, `capacidad`, `contacto`, `estado`, `tipoEvento`) VALUES
(2, 'Cardozo fest', '2022-10-02', '12:30', 'mi casa', 'estan todos invitados trae a tu amig@ para pasarla bien y a tu novi@ para pasarla mejor ', 'todos los vagos ', '200', 'foto.jpg', 'cardozoCompany', '300', '3774475979', '1', 'familiar'),
(3, 'brothersparty', '2022-10-07', '23:30', 'psicosis', 'estan todos invitados traele a toda tu negrada', 'todos los vagos', '300', 'foto1.jpg', 'los diablitos ', '200', '3774475979', '1', 'familiar'),
(4, 'chamame', '2023-10-21', '23:40', 'acyac', 'un eventyo unico al que no puedes faltar ', 'toda la comunidad', '400', 'foto2.jpg', 'Mario Bofil', '200', '4929392', 'pendiente', 'aire libre');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
