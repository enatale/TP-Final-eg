-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2015 a las 19:28:18
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
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`usuario`, `contrasena`, `nombre`, `apellido`, `telefono`) VALUES
('', '', '', '', ''),
('fsdgfhj', 'wer', 'qwere', 'qw', 'qwe'),
('q', 'q', 'q', 'q', 'q'),
('qqq', 'qq', 'q', 'q', 'q'),
('sadfghj', 'j23', 'sdf', 'af', '44982852');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

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
