-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2019 a las 11:13:23
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia_de_viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `ID_persona` int(11) NOT NULL,
  `Cod_Viaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajero`
--

CREATE TABLE `viajero` (
  `ID_persona` int(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Personal Identification` varchar(30) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Phone` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Información del viajero';

--
-- Volcado de datos para la tabla `viajero`
--

INSERT INTO `viajero` (`ID_persona`, `Name`, `Personal Identification`, `Address`, `Phone`) VALUES
(1, 'John Doe', '3-333-3333', 'qazedc st 123', '6834-3934'),
(2, 'Chuly Blanco', '7-90-289', 'La villa, Panama', '6799-0987');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `Cod_Viaje` int(50) NOT NULL,
  `Num_Plaza` int(30) DEFAULT NULL,
  `Destino` int(100) DEFAULT NULL,
  `Lugar_origen` int(100) DEFAULT NULL,
  `Precio` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD UNIQUE KEY `Cod_Viaje` (`Cod_Viaje`),
  ADD KEY `ID_persona` (`ID_persona`);

--
-- Indices de la tabla `viajero`
--
ALTER TABLE `viajero`
  ADD PRIMARY KEY (`ID_persona`),
  ADD KEY `ID_persona` (`ID_persona`),
  ADD KEY `ID_persona_2` (`ID_persona`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`Cod_Viaje`),
  ADD KEY `Cod_Viaje` (`Cod_Viaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `viajero`
--
ALTER TABLE `viajero`
  MODIFY `ID_persona` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`Cod_Viaje`) REFERENCES `viajes` (`Cod_Viaje`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`ID_persona`) REFERENCES `viajero` (`ID_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD CONSTRAINT `viajes_ibfk_1` FOREIGN KEY (`Cod_Viaje`) REFERENCES `r_viaje_viajero` (`Cod_Viaje`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
