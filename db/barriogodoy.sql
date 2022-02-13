-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2022 a las 07:08:25
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barriogodoy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_mujeres`
--

CREATE TABLE `informes_mujeres` (
  `idinformes_mujeres` int(11) NOT NULL,
  `idmujeres` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `tema` varchar(30) NOT NULL,
  `sala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_varones`
--

CREATE TABLE `informes_varones` (
  `idinformes_varones` int(11) NOT NULL,
  `idvarones` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `tema` varchar(30) NOT NULL,
  `sala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mujeres`
--

CREATE TABLE `mujeres` (
  `idmujeres` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `contacto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `varones`
--

CREATE TABLE `varones` (
  `idvarones` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `contacto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informes_mujeres`
--
ALTER TABLE `informes_mujeres`
  ADD PRIMARY KEY (`idinformes_mujeres`),
  ADD KEY `idmujeres` (`idmujeres`);

--
-- Indices de la tabla `informes_varones`
--
ALTER TABLE `informes_varones`
  ADD PRIMARY KEY (`idinformes_varones`),
  ADD KEY `idvarones` (`idvarones`);

--
-- Indices de la tabla `mujeres`
--
ALTER TABLE `mujeres`
  ADD PRIMARY KEY (`idmujeres`);

--
-- Indices de la tabla `varones`
--
ALTER TABLE `varones`
  ADD PRIMARY KEY (`idvarones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informes_mujeres`
--
ALTER TABLE `informes_mujeres`
  MODIFY `idinformes_mujeres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informes_varones`
--
ALTER TABLE `informes_varones`
  MODIFY `idinformes_varones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mujeres`
--
ALTER TABLE `mujeres`
  MODIFY `idmujeres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `varones`
--
ALTER TABLE `varones`
  MODIFY `idvarones` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `informes_mujeres`
--
ALTER TABLE `informes_mujeres`
  ADD CONSTRAINT `informes_mujeres_ibfk_1` FOREIGN KEY (`idmujeres`) REFERENCES `mujeres` (`idmujeres`) ON DELETE CASCADE;

--
-- Filtros para la tabla `informes_varones`
--
ALTER TABLE `informes_varones`
  ADD CONSTRAINT `informes_varones_ibfk_1` FOREIGN KEY (`idvarones`) REFERENCES `varones` (`idvarones`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
