-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2019 a las 01:09:20
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `codarticulo` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidadarticulo` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `idcategoria` int(5) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `precioCompra` double(5,2) NOT NULL,
  `precioVenta` double(5,2) NOT NULL,
  PRIMARY KEY (`codarticulo`),
  KEY `cantidadarticulo` (`cantidadarticulo`),
  KEY `cantidadarticulo_2` (`cantidadarticulo`),
  KEY `idcategoria` (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`codarticulo`, `nombre`, `cantidadarticulo`, `idcategoria`, `descripcion`, `precioCompra`, `precioVenta`) VALUES
(1, 'ALU-Escaleras', '11', 1, 'Escaleras de aluminio', 3.00, 56.00),
(5, 'Escalera2', '1', 1, 'color naranja, dos bandas', 0.03, 0.06),
(6, 'clavos', '17', 2, 'acero 3plg', 0.01, 0.15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catarticulos`
--

CREATE TABLE IF NOT EXISTS `catarticulos` (
  `codCategoria` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `catarticulos`
--

INSERT INTO `catarticulos` (`codCategoria`, `nombre`, `descripcion`) VALUES
(1, 'ALU-Escaleras', 'Escaleras de aluminio'),
(2, 'Clavo', 'clavo pequeño'),
(3, 'Ancla plastica', 'Ancla plastica 1/4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catempleados`
--

CREATE TABLE IF NOT EXISTS `catempleados` (
  `codcatempleado` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codcatempleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `catempleados`
--

INSERT INTO `catempleados` (`codcatempleado`, `Nombre`, `descripcion`) VALUES
(1, 'Administrador', 'encargado de administrar el control de inventario y generador de costos totales'),
(2, 'Vendedor', 'Encargado de ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `codcompra` int(5) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(5) NOT NULL,
  `producto` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` decimal(10,0) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  PRIMARY KEY (`codcompra`),
  KEY `idproveedor` (`idproveedor`),
  KEY `idproveedor_2` (`idproveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `Cod` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `nickname` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Salario` decimal(10,0) NOT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `idcat` int(5) NOT NULL,
  PRIMARY KEY (`Cod`),
  KEY `idcat` (`idcat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Cod`, `nombre`, `apellido`, `nickname`, `password`, `email`, `telefono`, `direccion`, `Salario`, `Estado`, `idcat`) VALUES
(1, 'Adonis', 'Arevalo', 'adonis', 'ads12345', 'adonis@hotmail.com', 22334455, 'san salvador', '0', 'A', 1),
(4, 'jorge', 'perez', 'jpp', '12345678', 'jpp@hotmial.com', 4455, 'Soyapango', '0', 'A', 1),
(5, 'jorge', 'perez', 'jpj', '12345678', 'jpjp@hotmial.com', 44557788, 'Soyapango', '0', 'A', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fechafin` date NOT NULL,
  `precio` double(30,0) NOT NULL,
  `lugar` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `fechafin`, `precio`, `lugar`, `empresa`) VALUES
(25, '2019-04-20', 56, 'Soyapango', 'Unimetal'),
(54, '2019-04-20', 1, 'Soyapango', 'Unimetal'),
(55, '2019-04-23', 1, 'Soyapango', 'Unimetal'),
(56, '2019-04-23', 56, 'Soyapango', 'Unimetal'),
(57, '2019-04-26', 112, 'Soyapango', 'Unimetal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `codlogin` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `idempleado` int(5) NOT NULL,
  PRIMARY KEY (`codlogin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `codProveedor` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `nombreempresa` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codProveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`codProveedor`, `nombre`, `apellido`, `direccion`, `telefono`, `nombreempresa`) VALUES
(1, 'Pablo', 'Ramirez', 'Soyapango', 44557788, 'INCO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idventas` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Cantidad` decimal(10,0) NOT NULL,
  `total` double(10,0) NOT NULL,
  `fechadeventa` date NOT NULL,
  `idarticulo` int(11) NOT NULL,
  PRIMARY KEY (`idventas`),
  KEY `idarticulo` (`idarticulo`),
  KEY `idarticulo_2` (`idarticulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasconcretadas`
--

CREATE TABLE IF NOT EXISTS `ventasconcretadas` (
  `idventas` int(10) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total` double(10,0) NOT NULL,
  `fechadeventa` date NOT NULL,
  `idarticulo` int(10) NOT NULL,
  `idventasc` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idventasc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=109 ;

--
-- Volcado de datos para la tabla `ventasconcretadas`
--

INSERT INTO `ventasconcretadas` (`idventas`, `nombre`, `cantidad`, `total`, `fechadeventa`, `idarticulo`, `idventasc`) VALUES
(61, 'clavos', 5, 1, '2019-04-20', 6, 102),
(61, 'clavos', 5, 1, '2019-04-20', 6, 103),
(62, 'clavos', 1, 0, '2019-04-23', 6, 104),
(63, 'clavos', 1, 0, '2019-04-23', 6, 105),
(64, 'ALU-Escaleras', 1, 56, '2019-04-23', 1, 106),
(65, 'clavos', 1, 0, '2019-04-23', 6, 107),
(1, 'ALU-Escaleras', 2, 112, '2019-04-26', 1, 108);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `catarticulos` (`codCategoria`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idproveedor`) REFERENCES `proveedores` (`codProveedor`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `catempleados` (`codcatempleado`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idarticulo`) REFERENCES `articulos` (`codarticulo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
