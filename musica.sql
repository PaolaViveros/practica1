-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2025 a las 20:06:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

CREATE TABLE `songs` (
  `ID` int(10) NOT NULL,
  `Artista` varchar(50) NOT NULL,
  `Cancion` varchar(50) NOT NULL,
  `Album` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`ID`, `Artista`, `Cancion`, `Album`) VALUES
(1, 'Lana Del Rey', 'Black Beauty', 'Ultraviolence '),
(2, 'Cigarettes After Sex', 'Dreaming Of You', 'I.'),
(3, 'Leon ', 'Locos', 'Voluma'),
(4, 'Cigarettes After Sex', 'Dreaming Of You', 'I.'),
(5, 'Leon ', 'Locos', 'Voluma'),
(6, 'Lana Del Rey', 'Black Beauty', 'Ultraviolence '),
(7, 'Lana Del Rey', 'Black Beauty', 'Ultraviolence '),
(8, 'Calibre 50', 'Amor Del Bueno', 'Desde el rancho'),
(9, 'Calibre 50', 'Amor Del Bueno', 'Desde el rancho'),
(10, 'Agust D', 'Daechwita', 'D-2'),
(11, 'Agust D', 'Daechwita', 'D-2'),
(12, 'Ed Maverick', 'Niño', 'eduardo'),
(13, 'Ed Maverick', 'Niño', 'eduardo'),
(14, 'Elvis Presley', 'Can\'t  Help Falling In Love', 'Elvis'),
(15, 'Elvis Presley', 'Can\'t  Help Falling In Love', 'Elvis'),
(16, 'Kevin Kaarl', 'Vete', 'San Lucas'),
(17, 'Kevin Kaarl', 'Vete', 'San Lucas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `songs`
--
ALTER TABLE `songs`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
