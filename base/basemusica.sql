-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-07-2019 a las 22:22:07
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE IF NOT EXISTS `cancion` (
  `cod_can` int(5) NOT NULL AUTO_INCREMENT,
  `nom_can` varchar(15) NOT NULL,
  `cancion` varchar(250) NOT NULL,
  `genero` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_can`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`cod_can`, `nom_can`, `cancion`, `genero`) VALUES
(1, 'Spotify', '<iframe src="https://open.spotify.com/embed/track/03L9G5TQGdhASEknspRIZQ" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>', 'ElectrÃ³nica'),
(2, 'Spotify', '<iframe src="https://open.spotify.com/embed/track/4jJpQvBp06QjtcJsSCexQZ" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>', 'ElectrÃ³nica'),
(8, 'Spotify', '<iframe src="https://open.spotify.com/embed/track/6yqThFsiJG2jUEA6jdhruE" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>', 'ClÃ¡sica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `login` varchar(20) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`login`, `clave`, `tipo`, `nombre`) VALUES
('admin', 'admin', 'A', 'Administrador'),
('invi', '123', 'U', 'usuario'),
('admin1', 'admin1', 'A', 'Juan Esteban'),
('usuario2', 'usuario', 'U', 'Ignacio Paez'),
('usuario3', 'usuario', 'U', 'Matias Oliva'),
('usuario4', 'usuario', 'U', 'Manuel Tapia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
