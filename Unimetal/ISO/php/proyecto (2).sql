-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2017 a las 19:35:02
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
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `codarticulo` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidadarticulo` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `idcategoria` int(5) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  PRIMARY KEY (`codarticulo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`codarticulo`, `nombre`, `cantidadarticulo`, `idcategoria`, `descripcion`, `precioCompra`, `precioVenta`) VALUES
(2, 'Conectores RJ-45', '30', 0, 'componentes basicos para la instalacion', '0.50', '1.00'),
(4, 'Fuentes ', '20', 0, 'Controlador', '15.00', '25.00'),
(5, 'Cables utp', '15', 0, 'componente necesario para la implementacion de una red local ', '0.20', '0.50'),
(6, 'Canaleta lenga', '20', 0, 'para cubrir los cables', '4.00', '7.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carticulo`
--

CREATE TABLE IF NOT EXISTS `carticulo` (
  `codCategoria` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `carticulo`
--

INSERT INTO `carticulo` (`codCategoria`, `nombre`, `descripcion`) VALUES
(1, 'Conectores', 'Todo tipo de conectores desde rj-45 macho, hembra y mas '),
(3, 'cables', 'componentes necesarios para las conexiones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaempleado`
--

CREATE TABLE IF NOT EXISTS `categoriaempleado` (
  `codcatempleado` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codcatempleado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categoriaempleado`
--

INSERT INTO `categoriaempleado` (`codcatempleado`, `Nombre`, `descripcion`) VALUES
(2, 'Administrador', 'encargado de administrar el control de inventario y generador de costos totales'),
(3, 'Administrador General', 'Encargado de todo el personal de la empresa'),
(4, 'Empleado de servicios', 'Encargado de instalar los servicios solicitados por nuestro clientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `codcliente` int(5) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `Email` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codcliente`, `Nombre`, `apellido`, `Direccion`, `telefono`, `Email`) VALUES
(1, 'Axel Jimmy', 'Mejia Mejia', 'san salvador', 22222222, 'axel@gmail.com'),
(2, 'Fernando', 'Romero', 'Por ahi', 76567890, 'erick@gmail.com');

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
  PRIMARY KEY (`codcompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costomensual`
--

CREATE TABLE IF NOT EXISTS `costomensual` (
  `codcostomensual` int(5) NOT NULL AUTO_INCREMENT,
  `ingresos` decimal(10,0) NOT NULL,
  `egresos` decimal(10,0) NOT NULL,
  PRIMARY KEY (`codcostomensual`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
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
  PRIMARY KEY (`Cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Cod`, `nombre`, `apellido`, `nickname`, `password`, `email`, `telefono`, `direccion`, `Salario`, `Estado`, `idcat`) VALUES
(8, 'Maria Karolina', 'garcia melendez', 'mafeh', '1234', 'mari123@gmail.com', 22222222, 'san salvador', '750', 'A', 2),
(9, 'Ronald Luis', 'Candray Hernández', 'ronald', '145', 'ronaldluis@hotmail.com', 72739175, 'san salvador', '800', 'A', 3),
(10, 'Miguel Andres ', 'Soriano Martinez', 'migue', '369', 'migue25@yahoo.com', 25639874, 'montes', '550', 'A', 4),
(11, 'Victor Alberto', 'Candray Bermudez', 'victor', '258', 'victor@gmail.com', 22222222, 'san salvador', '800', 'A', 4),
(12, 'Ricardo Antonio', 'Regalado Gonzales', 'Rega', '2207', 'ricardo@gmail.com', 12345678, 'Altos de Credisa', '1200', 'A', 2),
(13, 'Maria fernanda', 'Gomez Hernandez', 'mafe', '123456', 'mari12@gmail.com', 22222222, 'san salvador', '0', 'A', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fechafin` date NOT NULL,
  `precio` decimal(30,0) NOT NULL,
  `lugar` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

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
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `codProveedor` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `nombreempresa` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codProveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codProveedor`, `nombre`, `apellido`, `direccion`, `telefono`, `nombreempresa`) VALUES
(1, 'Ricardo', 'Regalado', 'Llegando a la esquina', 12345678, 'RegaladosINCOR'),
(3, 'Alejandro', 'Velasco', 'Altos de Credisa', 12345678, 'ProveedoresSV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporteservicio`
--

CREATE TABLE IF NOT EXISTS `reporteservicio` (
  `codreporteseservicio` int(5) NOT NULL AUTO_INCREMENT,
  `fechainicio` date NOT NULL,
  `idempleado` int(5) NOT NULL,
  `fechafin` date NOT NULL,
  `horarecibido` time NOT NULL,
  `precioservicio` decimal(30,0) NOT NULL,
  `observaciones` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`codreporteseservicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `reporteservicio`
--

INSERT INTO `reporteservicio` (`codreporteseservicio`, `fechainicio`, `idempleado`, `fechafin`, `horarecibido`, `precioservicio`, `observaciones`) VALUES
(1, '2017-05-18', 0, '2017-05-19', '10:50:00', '200', 'Sobro material de trabajo'),
(2, '2017-05-18', 0, '2017-05-19', '12:00:00', '100', 'Trabajo con dificultades de material'),
(3, '2017-05-04', 0, '2017-05-20', '15:00:00', '150', 'Hubo problemas con el personal'),
(4, '2017-05-12', 10, '2017-05-11', '14:00:00', '2500', 'Se completo el trabajo'),
(5, '2017-05-19', 11, '2017-05-20', '10:00:04', '200', 'Falto Material de Trabajo'),
(6, '2017-05-13', 11, '2017-05-27', '09:00:00', '100', 'Todo fue entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `idventas` int(5) NOT NULL AUTO_INCREMENT,
  `iva` decimal(10,0) NOT NULL,
  `idcliente` int(5) NOT NULL,
  `nombre-producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `instalacion` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `fechadeventa` date NOT NULL,
  `idfacura` int(11) NOT NULL,
  PRIMARY KEY (`idventas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
