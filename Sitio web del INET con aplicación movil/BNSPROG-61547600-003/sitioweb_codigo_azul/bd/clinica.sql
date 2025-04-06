-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2023 a las 22:58:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_EMPLEADOS` int(11) NOT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL,
  `APELLIDO` varchar(30) DEFAULT NULL,
  `DNI` int(9) DEFAULT NULL,
  `OCUPACION` varchar(30) DEFAULT NULL,
  `LOCALIDAD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `internados`
--

CREATE TABLE `internados` (
  `ID` int(11) NOT NULL,
  `DNI_PACIENTE` int(11) DEFAULT NULL,
  `ID_RESPONSABLE` int(11) DEFAULT NULL,
  `AREA` int(11) DEFAULT NULL,
  `FECHA_ENTRADA` date DEFAULT NULL,
  `FECHA_SALIDA` date DEFAULT NULL,
  `HABITACION` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `ID` int(11) NOT NULL,
  `DNI_PACIENTE` int(11) DEFAULT NULL,
  `ID_RESPONSABLE` int(11) DEFAULT NULL,
  `NOM_OPERACION` varchar(50) DEFAULT NULL,
  `EMERGENCIA` tinyint(1) DEFAULT NULL,
  `UBICACION` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `DNI` int(8) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `LOCALIDAD` varchar(30) DEFAULT NULL,
  `OBRA_SOCIAL` varchar(15) DEFAULT NULL,
  `NUM_OBRA_SOCIAL` int(20) DEFAULT NULL,
  `H_CLINICO` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `ID_REPORTES` int(11) NOT NULL,
  `ID_INTERNADO` int(11) DEFAULT NULL,
  `ORIGEN` varchar(4) DEFAULT NULL,
  `HORA_FECHA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIOS` int(11) NOT NULL,
  `ID_EMPLEADOS` int(11) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `CONTRASEÑA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_EMPLEADOS`);

--
-- Indices de la tabla `internados`
--
ALTER TABLE `internados`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`ID_REPORTES`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIOS`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `internados`
--
ALTER TABLE `internados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `ID_REPORTES` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
