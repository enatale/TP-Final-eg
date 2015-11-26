-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2015 a las 01:45:23
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
('administrador', 'admin', 'Osvaldo', 'Stroppiana', '33334444'),
('diegostropp', 'diego', 'Diego', 'Stroppiana', '4623333'),
('elsita', 'lalalala', 'Elsa', 'Pallo', '4988025'),
('en', '11111111', 'Esteban', 'Natale', '4988025'),
('gonzi', 'rtyuio', 'Gonzalo', 'Lopez', '4444444'),
('lmg', 'mario', 'Lucio Mario', 'Guarneri', '4789563'),
('marita', 'lalala', 'Mariela', 'Sabetti', '4922983'),
('topo', 'lacueva', 'Franco', 'HernÃ¡ndez', '4995544');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`codigo`, `dia`, `estado`, `usuario`) VALUES
(7, '2015-11-18', 'Pendiente', 'elsita'),
(8, '2015-11-17', 'Paga', 'elsita'),
(9, '2016-10-13', 'Pendiente', 'topo'),
(10, '2015-11-26', 'Pendiente', 'topo'),
(11, '2015-12-05', 'Paga', 'topo'),
(12, '2016-11-19', 'Pendiente', 'en'),
(13, '2015-12-14', 'Pendiente', 'en'),
(14, '2016-07-06', 'Paga', 'en');

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
