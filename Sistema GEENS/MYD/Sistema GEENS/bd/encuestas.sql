-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 00:49:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `DNI` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestadores`
--

CREATE TABLE `encuestadores` (
  `DNI` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(50) DEFAULT NULL,
  `CONTRASEÑA` varchar(50) DEFAULT NULL,
  `E_REALIZADA` int(11) DEFAULT NULL,
  `HABILITADO` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuestadores`
--

INSERT INTO `encuestadores` (`DNI`, `ID`, `USUARIO`, `CONTRASEÑA`, `E_REALIZADA`, `HABILITADO`) VALUES
(1111, 0, 'agustin', '123', NULL, 'Si'),
(11111, 1, 'agustin', '12345', NULL, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `ID_ENCUESTA` int(11) NOT NULL,
  `ID_ENCUESTADOR` int(11) NOT NULL,
  `PREGUNTA_A` varchar(11) DEFAULT NULL,
  `PREGUNTA_B` int(11) DEFAULT NULL,
  `PREGUNTA_C` int(11) DEFAULT NULL,
  `PREGUNTA_D` int(11) DEFAULT NULL,
  `PREGUNTA_E` int(11) DEFAULT NULL,
  `PREGUNTA_F` int(11) DEFAULT NULL,
  `PREGUNTA_G` int(11) DEFAULT NULL,
  `PREGUNTA_H` int(11) DEFAULT NULL,
  `PREGUNTA_I` int(11) DEFAULT NULL,
  `PREGUNTA_J` int(11) DEFAULT NULL,
  `PREGUNTA_K` varchar(2) NOT NULL,
  `PREGUNTA_L` varchar(2) NOT NULL,
  `SEXO` varchar(1) NOT NULL,
  `PUNTAJE` int(11) NOT NULL,
  `NIVEL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`ID_ENCUESTA`, `ID_ENCUESTADOR`, `PREGUNTA_A`, `PREGUNTA_B`, `PREGUNTA_C`, `PREGUNTA_D`, `PREGUNTA_E`, `PREGUNTA_F`, `PREGUNTA_G`, `PREGUNTA_H`, `PREGUNTA_I`, `PREGUNTA_J`, `PREGUNTA_K`, `PREGUNTA_L`, `SEXO`, `PUNTAJE`, `NIVEL`) VALUES
(47, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'M', 79, 'Alto'),
(48, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'M', 79, 'Alto'),
(49, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'M', 79, 'Alto'),
(50, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'F', 79, 'Alto'),
(51, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'F', 79, 'Alto'),
(52, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'F', 79, 'Alto'),
(53, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'F', 79, 'Alto'),
(54, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'F', 79, 'Alto'),
(55, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'F', 79, 'Alto'),
(56, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'F', 79, 'Alto'),
(57, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'Si', 'F', 79, 'Alto'),
(58, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'Si', 'F', 79, 'Alto'),
(59, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'Si', 'F', 79, 'Alto'),
(60, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'F', 79, 'Alto'),
(61, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'F', 79, 'Alto'),
(62, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'M', 79, 'Alto'),
(63, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'M', 79, 'Alto'),
(64, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'M', 79, 'Alto'),
(65, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'M', 79, 'Alto'),
(66, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'M', 79, 'Alto'),
(67, 0, '18-25', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'M', 79, 'Alto'),
(68, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'M', 79, 'Alto'),
(69, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'M', 79, 'Alto'),
(70, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'No', 'M', 79, 'Alto'),
(71, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'M', 79, 'Alto'),
(72, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'No', 'M', 79, 'Alto'),
(73, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'Si', 'M', 79, 'Alto'),
(74, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'No', 'Si', 'M', 79, 'Alto'),
(75, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'F', 79, 'Alto'),
(76, 0, '36-45', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'F', 79, 'Alto'),
(77, 0, '36-45', 26, 4, 4, 2, 10, 5, 0, 0, 0, 'No', 'No', 'M', 51, 'Medio'),
(78, 0, '18-25', 26, 16, 12, 12, 15, 5, 5, 5, 5, 'Si', 'Si', 'M', 101, 'Alto'),
(79, 0, '26-35', 0, 0, 0, 12, 15, 5, 5, 0, 0, 'Si', 'No', 'M', 37, 'Medio'),
(80, 0, '26-35', 26, 8, 8, 12, 15, 0, 5, 0, 5, 'Si', 'Si', 'M', 79, 'Alto'),
(81, 0, '36-45', 26, 4, 8, 12, 15, 0, 5, 0, 5, '', '', '', 75, 'Alto'),
(82, 0, '26-35', 26, 8, 8, 5, 15, 0, 5, 0, 5, 'Si', 'No', 'F', 72, 'Alto'),
(83, 0, '26-35', 26, 8, 8, 5, 15, 0, 5, 0, 5, 'Si', 'No', 'F', 72, 'Alto'),
(84, 1, '36-45', 0, 0, 0, 2, 0, 0, 5, 0, 0, 'Si', 'No', 'M', 7, 'Bajo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superiores`
--

CREATE TABLE `superiores` (
  `DNI` int(11) NOT NULL,
  `USUARIO` varchar(50) DEFAULT NULL,
  `CONTRASEÑA` varchar(50) DEFAULT NULL,
  `CARGO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `superiores`
--

INSERT INTO `superiores` (`DNI`, `USUARIO`, `CONTRASEÑA`, `CARGO`) VALUES
(111, 'agustin', '12', 'Supervisor'),
(11122, 'admin', '123', 'Lider'),
(111222, 'Jefe', '123', 'JefeProyecto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `encuestadores`
--
ALTER TABLE `encuestadores`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`ID_ENCUESTA`);

--
-- Indices de la tabla `superiores`
--
ALTER TABLE `superiores`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `ID_ENCUESTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
