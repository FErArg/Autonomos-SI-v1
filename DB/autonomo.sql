-- phpMyAdmin SQL Dump
-- version 3.3.7deb6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-10-2011 a las 10:51:19
-- Versión del servidor: 5.1.49
-- Versión de PHP: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `autonomo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cif` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ano` int(4) NOT NULL,
  `trimestre` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `proveedor_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nro_factura` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pagada` tinyint(4) NOT NULL,
  `base` float NOT NULL,
  `iva` float NOT NULL,
  `total` float NOT NULL,
  `cargada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE IF NOT EXISTS `gastos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ano` int(4) NOT NULL,
  `trimestre` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `proveedor_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nro_factura` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pagada` tinyint(4) NOT NULL,
  `base` float NOT NULL,
  `iva` float NOT NULL,
  `total` float NOT NULL,
  `cargada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_s_iva`
--

CREATE TABLE IF NOT EXISTS `gastos_s_iva` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ano` int(4) NOT NULL,
  `trimestre` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `proveedor_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nro_factura` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pagada` tinyint(4) NOT NULL,
  `total` float NOT NULL,
  `cargada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irpf`
--

CREATE TABLE IF NOT EXISTS `irpf` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `trimestre` int(2) NOT NULL,
  `ventas` float NOT NULL,
  `iva_ventas` float NOT NULL,
  `compras` float NOT NULL,
  `iva_compras` float NOT NULL,
  `gastos` float NOT NULL,
  `iva_gastos` float NOT NULL,
  `gastos_s_iva` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iva`
--

CREATE TABLE IF NOT EXISTS `iva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trimestre` int(1) NOT NULL,
  `iva_ventas` float NOT NULL,
  `iva_compras` float NOT NULL,
  `iva_gastos` float NOT NULL,
  `gastos_s_iva` float NOT NULL,
  `total` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pooveedores`
--

CREATE TABLE IF NOT EXISTS `pooveedores` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ultimo_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ip` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ano` int(4) NOT NULL,
  `trimestre` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `cliente_id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nro_factura` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cobrada` tinyint(4) NOT NULL,
  `base` float NOT NULL,
  `iva` float NOT NULL,
  `total` float NOT NULL,
  `cargada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
