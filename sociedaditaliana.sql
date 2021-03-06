-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2015 a las 06:19:09
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sociedaditaliana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`usuario`, `contrasena`, `nombre`, `apellido`, `telefono`, `email`) VALUES
('administrador', 'administrador', 'Osvaldo', 'Stroppiana', '3464494965', ''),
('diegopujato', '1234', 'Diego', 'Stroppiana', '3464494965', ''),
('usuario1', '12345', 'Facundo', 'Corneta', '3464494123', ''),
('usuario2', 'usuario2', 'usuario2a', 'usuario2', 'usuario2', ''),
('usuario3', 'usuario3', 'usuario3', 'usuario3', 'usuario3', ''),
('usuario4', 'usuario4', 'usuario4', 'usuario4', 'usuario4', ''),
('usuario5', 'usuario5', 'usuario5', 'usuario5', 'usuario5', ''),
('usuario6', 'usuario5', 'usuario5', 'usuario5', 'usuario5', ''),
('usuario7', 'usuario7', 'usuario7', 'usuario7', 'usuario7', ''),
('usuario8', 'usuario8', 'usuario8', 'usuario8', 'usuario8', ''),
('usuario9', 'usuario9', 'usuario9', 'usuario9', 'usuario9', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mailboletin`
--

CREATE TABLE IF NOT EXISTS `mailboletin` (
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`direccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mailboletin`
--

INSERT INTO `mailboletin` (`direccion`) VALUES
('dstroppiana@gmail.com'),
('dstroppiana@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `dia` date NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `FK` FOREIGN KEY (`usuario`) REFERENCES `clientes` (`usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
