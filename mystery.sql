-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2015 a las 15:53:23
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mystery`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarSucursal`(IN `paramId` INT(11))
    NO SQL
delete from sucursales where idSucursal=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarUsuario`(IN `paramId` INT(11))
    NO SQL
delete from usuarios where idUsuario=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarSucursal`(IN `paramNombre` VARCHAR(50), IN `paramPro` VARCHAR(50), IN `paramDire` VARCHAR(50), IN `paramLoca` VARCHAR(50))
    NO SQL
insert into sucursales (nombre,provincia,direccion,localidad) values(paramNombre, paramPro, paramDire, paramLoca)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario`(IN `paramNombre` VARCHAR(50), IN `paramContrasenia` VARCHAR(50), IN `paramMail` VARCHAR(50))
    NO SQL
INSERT INTO usuarios (nombre,contrasenia,mail) VALUES(paramNombre,paramContrasenia,paramMail)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarContra`(IN `paramContrasenia` VARCHAR(30), IN `paramMail` VARCHAR(30))
    NO SQL
UPDATE usuarios SET contrasenia=paramContrasenia where mail=paramMail$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarSucursal`(IN `paramId` INT(11), IN `paramNombre` VARCHAR(50), IN `paramPro` VARCHAR(50), IN `paramDire` VARCHAR(50), IN `paramLoca` VARCHAR(50))
    NO SQL
UPDATE sucursales SET
nombre=paramNombre, provincia=paramPro,direccion=paramDire,localidad=paramLoca where idSucursal=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarUsuario`(IN `paramId` INT, IN `paramNombre` VARCHAR(30), IN `paramContrasenia` VARCHAR(30), IN `paramMail` VARCHAR(30))
    NO SQL
UPDATE usuarios SET nombre=paramNombre,contrasenia=paramContrasenia,mail=paramMail where idUsuario=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerEncuestaPorId`(IN `paramId` INT(11))
    NO SQL
select * from encuestas where idEncuesta=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerSucursalPorId`(IN `paramId` INT(11))
    NO SQL
select * from sucursales where idSucursal=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerSucursalPorNombre`(IN `paramNombre` VARCHAR(50))
    NO SQL
select * from sucursales where nombre=paramNombre$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodasLasEncuestas`()
    NO SQL
select * from encuestas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodasLasSucursales`()
    NO SQL
select * from sucursales$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodosLosUsuarios`()
    NO SQL
SELECT * FROM usuarios$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUsuarioPorId`(IN `paramId` INT(11))
    NO SQL
SELECT * FROM usuarios WHERE idUsuario=paramId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUsuarioPorMail`(IN `paramMail` VARCHAR(50))
    NO SQL
SELECT * FROM usuarios WHERE mail=paramMail$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUsuarioPorNombre`(IN `paramNombre` VARCHAR(50))
    NO SQL
SELECT * FROM usuarios WHERE nombre=paramNombre$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE IF NOT EXISTS `encuestas` (
`idEncuesta` int(11) NOT NULL,
  `nombrePro` varchar(25) NOT NULL,
  `tipoPro` varchar(25) NOT NULL,
  `calidad del producto` varchar(25) NOT NULL,
  `idSucursal` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`idEncuesta`, `nombrePro`, `tipoPro`, `calidad del producto`, `idSucursal`, `idUsuario`) VALUES
(1, 'coca cola', 'bebbida', 'buena ', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE IF NOT EXISTS `sucursales` (
`idSucursal` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`idSucursal`, `nombre`, `provincia`, `direccion`, `localidad`) VALUES
(5, 'aaaaaaa', 'aaaaaaa', 'vvvvvvaaaaaaa', 'vvvvvvaaaaaaaa'),
(6, 'aqqqqq', 'qqqqqqqqqq', 'qqqqqqqqqq', 'qqqqqqqqq'),
(7, 'hola', 'hola', 'hola', 'hola'),
(8, 'COTO', 'YOOOO', 'AAAAA', 'AAAA'),
(9, 'diaa', 'diaa', 'diaa', 'diaa'),
(10, 'cotoaaaaaaaa', 'buenos airesaaaaaaaa', 'mitre 753aaaaaaa', 'avellanedaaaaaaaaaa'),
(11, 'hola', 'aaaaaa', 'aaaaa', 'aaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idUsuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `contrasenia`, `mail`) VALUES
(13, 'claudio', '81dc9bdb52d04dc20036dbd8313ed0', 'c@l'),
(14, 'frank', '81dc9bdb52d04dc20036dbd8313ed055', 'frank@polack'),
(15, 'aaaa', '81dc9bdb52d04dc20036dbd8313ed0', 'a@a'),
(17, 'aaaaaaaa', '81dc9bdb52d04dc20036dbd8313ed055', 'a@a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
 ADD PRIMARY KEY (`idEncuesta`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
 ADD PRIMARY KEY (`idSucursal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
MODIFY `idEncuesta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
