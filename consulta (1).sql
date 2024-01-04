-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-01-2024 a las 05:02:40
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21631221_utnphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `signo` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `nombre`, `signo`, `mail`) VALUES
(1, 'juno', 'escorpio', 'laffarguejuno@gmail.com'),
(2, 'juno', 'escorpio', 'laffarguejuno@gmail.com'),
(3, 'juno', 'cancer', 'laffarguejuno@gmail.com'),
(4, 'juno', 'escorpio', 'laffarguejuno@gmail.com'),
(5, 'juno', 'escorpio', 'laffarguejuno@gmail.com'),
(6, 'pepe', 'libra', 'laffarguejuno@gmail.com'),
(7, 'ejemplo', 'acuario', 'laffarguejuno@gmail.com'),
(8, 'otra prueba', 'libra', 'laffarguejuno@gmail.com'),
(9, 'pepe', 'cancer', 'laffarguejuno@gmail.com'),
(10, 'juno', 'escorpio', 'laffarguejuno@gmail.com'),
(11, 'juno', 'escorpio', 'laffarguejuno@gmail.com'),
(12, 'juno', 'escorpio', 'laffarguejuno@gmail.com'),
(13, 'pepe', 'test', 'laffarguejuno@gmail.com'),
(14, 'juno', 'test', 'laffarguejuno@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
