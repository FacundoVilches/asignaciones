-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2022 a las 16:53:31
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

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarListaMujeres` ()  BEGIN
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE mujeres;
TRUNCATE TABLE informes_mujeres;
SET FOREIGN_KEY_CHECKS = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarListaVarones` ()  BEGIN
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE mujeres;
TRUNCATE TABLE informes_mujeres;
SET FOREIGN_KEY_CHECKS = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `resetDatabase` ()  BEGIN
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE mujeres;
TRUNCATE TABLE varones;
TRUNCATE TABLE informes_mujeres;
TRUNCATE TABLE informes_varones;
SET FOREIGN_KEY_CHECKS = 1;

END$$

DELIMITER ;

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

--
-- Volcado de datos para la tabla `informes_mujeres`
--

INSERT INTO `informes_mujeres` (`idinformes_mujeres`, `idmujeres`, `fecha`, `observaciones`, `tema`, `sala`) VALUES
(1, 1, '2022-01-06', '', 'Primera conversación', 'Sala B'),
(2, 4, '2022-01-06', '', 'Primera conversación', 'Sala B'),
(3, 7, '2022-01-13', '', 'Revisita', 'Sala A'),
(4, 8, '2022-01-13', '', 'Revisita', 'Sala B'),
(5, 11, '2022-01-13', '', 'Revisita', 'Sala A'),
(6, 12, '2022-01-13', '', 'Revisita', 'Sala B'),
(7, 15, '2022-01-20', '', 'Primera conversación', 'Sala A'),
(8, 16, '2022-01-20', '', 'Primera conversación', 'Sala B'),
(9, 19, '2022-01-20', '', 'Revisita', 'Sala A'),
(10, 20, '2022-01-20', '', 'Revisita', 'Sala B'),
(11, 23, '2022-01-20', '', 'Curso bíblico', 'Sala A'),
(12, 24, '2022-01-20', '', 'Curso bíblico', 'Sala B'),
(13, 27, '2022-01-27', '', 'Primera conversación', 'Sala A'),
(14, 28, '2022-01-27', '', 'Primera conversación', 'Sala B'),
(15, 31, '2022-01-27', '', 'Revisita', 'Sala A'),
(16, 32, '2022-01-27', '', 'Revisita', 'Sala B'),
(17, 35, '2022-02-03', '', 'Curso bíblico', 'Sala A'),
(18, 36, '2022-02-03', '', 'Curso bíblico', 'Sala B'),
(19, 39, '2022-02-10', '', 'Primera conversación', 'Sala A'),
(20, 9, '2022-02-10', '', 'Primera conversación', 'Sala B'),
(21, 14, '2022-02-10', '', 'Revisita', 'Sala A'),
(22, 41, '2022-02-10', '', 'Revisita', 'Sala B'),
(23, 13, '2022-02-10', '', 'Curso bíblico', 'Sala A'),
(24, 5, '2022-02-10', '', 'Curso bíblico', 'Sala B'),
(25, 1, '2022-02-15', '', 'Primera conversación', 'Sala A'),
(26, 11, '2022-02-15', '', 'Revisita', 'Sala A');

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

--
-- Volcado de datos para la tabla `informes_varones`
--

INSERT INTO `informes_varones` (`idinformes_varones`, `idvarones`, `fecha`, `observaciones`, `tema`, `sala`) VALUES
(1, 1, '2022-01-06', '', 'Lectura de la Biblia', 'Sala A'),
(2, 2, '2022-01-06', '', 'Lectura de la Biblia', 'Sala B'),
(3, 3, '2022-01-13', '', 'Lectura de la Biblia', 'Sala A'),
(4, 4, '2022-01-13', '', 'Lectura de la Biblia', 'Sala B'),
(5, 5, '2022-01-20', '', 'Lectura de la Biblia', 'Sala A'),
(6, 6, '2022-01-20', '', 'Lectura de la Biblia', 'Sala B'),
(7, 7, '2022-01-27', '', 'Lectura de la Biblia', 'Sala A'),
(8, 8, '2022-01-27', '', 'Lectura de la Biblia', 'Sala B'),
(9, 9, '2022-01-27', '', 'Discurso', 'Sala A'),
(10, 10, '2022-01-27', '', 'Discurso', 'Sala B'),
(11, 11, '2022-02-03', '', 'Lectura de la Biblia', 'Sala A'),
(12, 12, '2022-02-03', '', 'Lectura de la Biblia', 'Sala B'),
(13, 13, '2022-02-10', '', 'Lectura de la Biblia', 'Sala A'),
(14, 14, '2022-02-10', '', 'Lectura de la Biblia', 'Sala B'),
(15, 15, '2022-02-15', 'Semana de la visita', 'Lectura de la Biblia', 'Sala A'),
(16, 16, '2022-02-15', '', 'Curso bíblico', 'Sala A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mujeres`
--

CREATE TABLE `mujeres` (
  `idmujeres` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `contacto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mujeres`
--

INSERT INTO `mujeres` (`idmujeres`, `nombre`, `contacto`) VALUES
(1, 'Mirta Canteros', ''),
(2, 'Gladis Farías', ''),
(3, 'Alicia Leguizamón', ''),
(4, 'María Boza', ''),
(5, 'Nicole Flores', ''),
(6, 'Camila Boza', ''),
(7, 'Mónica Rodríguez', ''),
(8, 'Marta Rizzotti', ''),
(9, 'Gladis Silvero', ''),
(10, 'Silvia Retamozo', ''),
(11, 'Débora Sosa', ''),
(12, 'Gianella Retamozo', ''),
(13, 'Ana Silva', ''),
(14, 'Marisol Pérez', ''),
(15, 'Estela Saavedra', ''),
(16, 'Sara Albornoz', ''),
(17, 'Samira Rodríguez', ''),
(18, 'Karen Flores', ''),
(19, 'Claudia Romero', ''),
(20, 'María Luz Flores', ''),
(21, 'Valeria Brochero', ''),
(22, 'Maricel Flores', ''),
(23, 'Aldana Flores', ''),
(24, 'Margarita González', ''),
(25, 'Valeria Escobar', ''),
(26, 'Lorena Masín', ''),
(27, 'Maira Benítez', ''),
(28, 'Nancy Soso', ''),
(29, 'Gabriela Boza', ''),
(30, 'Andrea Segovia', ''),
(31, 'Vanesa Pascua', ''),
(32, 'Lorena Benítez', ''),
(33, 'Raquel Monzón', ''),
(34, 'Pamela Brochero', ''),
(35, 'Magalí Ludueña', ''),
(36, 'Georgina Nieto', ''),
(37, 'Brisa Flores', ''),
(38, 'Claudia Rizzotti', ''),
(39, 'Alicia Nieto', ''),
(40, 'María Romero', ''),
(41, 'Yamile Ludueña', '');

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
-- Volcado de datos para la tabla `varones`
--

INSERT INTO `varones` (`idvarones`, `nombre`, `contacto`) VALUES
(1, 'Luka Miniello', ''),
(2, 'Alejandro Benítez', ''),
(3, 'Aarón Riveros', ''),
(4, 'Valentino Romero', ''),
(5, 'Iván Zárate', ''),
(6, 'Fabio Romero', ''),
(7, 'Facundo Pérez', ''),
(8, 'Jorge Zárate', ''),
(9, 'Diego Masín', ''),
(10, 'Ernesto Flores', ''),
(11, 'Rubén Pérez', ''),
(12, 'Hernán Vivas', ''),
(13, 'Lihué Masín', ''),
(14, 'Teodoro Maciel', ''),
(15, 'Facundo Vilches', '+543416582156'),
(16, 'Fernando Monzón', ''),
(17, 'Luis Miniello', '');

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
  MODIFY `idinformes_mujeres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `informes_varones`
--
ALTER TABLE `informes_varones`
  MODIFY `idinformes_varones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `mujeres`
--
ALTER TABLE `mujeres`
  MODIFY `idmujeres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `varones`
--
ALTER TABLE `varones`
  MODIFY `idvarones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
