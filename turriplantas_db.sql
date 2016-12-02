-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2016 a las 03:59:32
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turriplantas_db`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pcr_getOrganization` ()  NO SQL
select * from organizacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_getImagesHome` ()  NO SQL
select imagen_ruta from imagen where descripcion = "imageHome"$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre_usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contraseÃ±a` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `id_organizacion` int(11) NOT NULL,
  `imagen_ruta` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `descripcion`, `id_organizacion`, `imagen_ruta`) VALUES
(1, 'imageHome', 1, 'DSC02477.jpg'),
(2, 'imageHome', 1, 'DSC02486.jpg'),
(3, 'imageHome', 1, 'DSC02487.jpg'),
(4, 'imageHome', 1, 'DSC03130.jpg'),
(5, 'imageHome', 1, 'DSC03132.jpg'),
(6, 'imageHome', 1, 'DSC03153.jpg'),
(7, 'imageHome', 1, 'DSC03155.jpg'),
(8, 'imageHome', 1, 'DSC03158.jpg'),
(9, 'imageHome', 1, 'DSC03161.jpg'),
(10, 'imageHome', 1, 'DSC03162.jpg'),
(11, 'imageHome', 1, 'DSC03163.jpg'),
(12, 'imageHome', 1, 'DSC03164.jpg'),
(13, 'imageHome', 1, 'DSC03165.jpg'),
(14, 'imageHome', 1, 'DSC03166.jpg'),
(15, 'imageHome', 1, 'DSC03240.jpg'),
(16, 'imageHome', 1, 'DSC03240_1.jpg'),
(17, 'imageHome', 1, 'DSC03247.jpg'),
(18, 'imageHome', 1, 'DSC03257.jpg'),
(19, 'imageHome', 1, 'DSC03271.jpg'),
(20, 'imageHome', 1, 'DSC03350.jpg'),
(21, 'imageHome', 1, 'DSC03351.jpg'),
(22, 'imageHome', 1, 'DSC03366.jpg'),
(23, 'imageHome', 1, 'DSC04674.jpg'),
(24, 'imageHome', 1, 'DSC04685.jpg'),
(25, 'imageHome', 1, 'DSC04686.jpg'),
(26, 'imageHome', 1, 'DSC04687.jpg'),
(27, 'imageHome', 1, 'DSC04694.jpg'),
(28, 'imageHome', 1, 'DSC04701.jpg'),
(29, 'imageHome', 1, 'DSC05301.jpg'),
(30, 'imageHome', 1, 'DSC05302.jpg'),
(31, 'imageHome', 1, 'DSC05303.jpg'),
(32, 'imageHome', 1, 'DSC05304.jpg'),
(33, 'imageHome', 1, 'DSC05368.jpg'),
(34, 'imageHome', 1, 'DSC05374.jpg'),
(35, 'imageHome', 1, 'DSC05375.jpg'),
(36, 'imageHome', 1, 'DSC05473.jpg'),
(37, 'imageHome', 1, 'DSC05474.jpg'),
(38, 'imageHome', 1, 'DSC05692.jpg'),
(39, 'imageHome', 1, 'DSC02477.jpg'),
(40, 'imageHome', 1, 'DSC02486.jpg'),
(41, 'imageHome', 1, 'DSC02487.jpg'),
(42, 'imageHome', 1, 'DSC03130.jpg'),
(43, 'imageHome', 1, 'DSC03132.jpg'),
(44, 'imageHome', 1, 'DSC03153.jpg'),
(45, 'imageHome', 1, 'DSC03155.jpg'),
(46, 'imageHome', 1, 'DSC03158.jpg'),
(47, 'imageHome', 1, 'DSC03161.jpg'),
(48, 'imageHome', 1, 'DSC03162.jpg'),
(49, 'imageHome', 1, 'DSC03163.jpg'),
(50, 'imageHome', 1, 'DSC03164.jpg'),
(51, 'imageHome', 1, 'DSC03165.jpg'),
(52, 'imageHome', 1, 'DSC03166.jpg'),
(53, 'imageHome', 1, 'DSC03240.jpg'),
(54, 'imageHome', 1, 'DSC03240_1.jpg'),
(55, 'imageHome', 1, 'DSC03247.jpg'),
(56, 'imageHome', 1, 'DSC03257.jpg'),
(57, 'imageHome', 1, 'DSC03271.jpg'),
(58, 'imageHome', 1, 'DSC03350.jpg'),
(59, 'imageHome', 1, 'DSC03351.jpg'),
(60, 'imageHome', 1, 'DSC03366.jpg'),
(61, 'imageHome', 1, 'DSC04674.jpg'),
(62, 'imageHome', 1, 'DSC04685.jpg'),
(63, 'imageHome', 1, 'DSC04686.jpg'),
(64, 'imageHome', 1, 'DSC04687.jpg'),
(65, 'imageHome', 1, 'DSC04694.jpg'),
(66, 'imageHome', 1, 'DSC04701.jpg'),
(67, 'imageHome', 1, 'DSC05301.jpg'),
(68, 'imageHome', 1, 'DSC05302.jpg'),
(69, 'imageHome', 1, 'DSC05303.jpg'),
(70, 'imageHome', 1, 'DSC05304.jpg'),
(71, 'imageHome', 1, 'DSC05368.jpg'),
(72, 'imageHome', 1, 'DSC05374.jpg'),
(73, 'imageHome', 1, 'DSC05375.jpg'),
(74, 'imageHome', 1, 'DSC05473.jpg'),
(75, 'imageHome', 1, 'DSC05474.jpg'),
(76, 'imageHome', 1, 'DSC05692.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `id_organizacion` int(11) NOT NULL,
  `historia` varchar(1200) COLLATE utf8_spanish_ci NOT NULL,
  `localizacion` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristicas` varchar(1200) COLLATE utf8_spanish_ci NOT NULL,
  `valores` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `mision` varchar(700) COLLATE utf8_spanish_ci NOT NULL,
  `vision` varchar(700) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_organizacion` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`id_organizacion`, `historia`, `localizacion`, `caracteristicas`, `valores`, `mision`, `vision`, `nombre_organizacion`) VALUES
(1, 'Turriplantas es una empresa familiar que inicia operaciones en el aÃ±o 2003, produciendo y exportando plantas ornamentales de alta calidad.\r\nEnfocados en producir sosteniblemente, contamos con 6 Ha de terreno para propagaciÃ³n y producciÃ³n, manteniendo 2 Ha para protecciÃ³n y reforestaciÃ³n, del total de 8 Ha con que cuenta la\r\nempresa. Con el fin de producir plantas de alta calidad, se cumple con todos los requisitos del programa de\r\nmaterial limpio (Clean Stock), requerimiento indispensable para exportar Dracaenas a USA, paÃ­s\r\ncon el que se mantiene un mercado permanente, ademÃ¡s de exportar a Europa y Asia.\r\nNuestra vocaciÃ³n siempre ha sido mantener una relaciÃ³n muy estrecha y directa con cada uno de nuestros clientes, los cuales con sus comentarios y exigencias nos han obligado hacer cada dÃ­a lo\r\nmejor; de allÃ­ nuestro eslogan â€œLA CALIDAD NO NACEâ€¦.SE HACEâ€.\r\nQUALITYâ€', 'Turriplantas estÃ¡ localizado en Pavones, Turrialba, Costa Rica; en el sector de Valle Verde, a 850 metros sobre el nivel de mar, en una zona montaÃ±osa con un clima muy agradable e ideal para el cultivo de ciertas variedades de plantas ornamentales.', 'Turriplantas se caracteriza por producir plantas de alta calidad, dando prioridad a la satisfacciÃ³n de nuestros clientes sin miedo al futuro, e innovamos de acuerdo a sus necesidades. Produciendo en armonÃ­a con la naturaleza, para lo cual se cuenta con un sistema agroforestal funcional,donde se mezclan las plantas ornamentales con Ã¡rboles maderables.\nAdemÃ¡s de la producciÃ³n de plantas ornamentales, se cuenta con 34 variedades de Ã¡rboles maderables nativos, manteniendo un aproximado de 1300 Ã¡rboles en activo crecimiento junto a las plantas ornamentales, logrando un ambiente propicio para la producciÃ³n y a la vez se garantiza\nel abastecimiento de madera para la infraestructura necesaria dentro de la propia finca.\nSe cuenta con una fuente de agua propia haciendo a Turriplantas un gran aliado y protector del medio y se aporta a la zona con un paisaje hermoso.', 'Respeto;                                    Humildad;                                    Comunicación;                                    Honestidad;                                    Responsabilidad;                                    Entusiasmo;                                    Disciplina', 'Mantenernos como uno de los principales productores de plantas ornamentales de Costa Rica, guiada por los mÃ¡s altos niveles Ã©ticos. Utilizando prÃ¡cticas agrÃ­colas, agroeconÃ³micas modernas, sostenibles y amigables con nuestro medio ambiente.\r\nSatisfacer a nuestros clientes en\r\ncalidad y a su vez mantener su interÃ©s puesto en nuestro producto. Con este concepto y la ayuda de Dios, cumpliremos nuestras metas.', 'Producir y exportar ornamentales de superior calidad a la existente en el Mercado. Llevar color y alegrÃ­a a los puntos de destino. Mantener el interÃ©s de nuestros clientes, manteniendo consistencia, calidad y servicio. Seguir con todas las regulaciones ambientales, de salud y seguridad laboral. Manteniendo un ambiente de trabajo justo y agradable para nuestros\r\ncolaboradores y sus familias.', 'Turriplantas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `id_planta` int(11) NOT NULL,
  `nombre_cientifico` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_comun` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_ruta` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `id_organizacion` int(11) NOT NULL,
  `id_variedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedad`
--

CREATE TABLE `variedad` (
  `id_variedad` int(11) NOT NULL,
  `nombre_variedad` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `variedad`
--

INSERT INTO `variedad` (`id_variedad`, `nombre_variedad`) VALUES
(1, 'Croton'),
(2, 'Dracaenas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`id_organizacion`);

--
-- Indices de la tabla `planta`
--
ALTER TABLE `planta`
  ADD PRIMARY KEY (`id_planta`);

--
-- Indices de la tabla `variedad`
--
ALTER TABLE `variedad`
  ADD PRIMARY KEY (`id_variedad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `id_organizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `planta`
--
ALTER TABLE `planta`
  MODIFY `id_planta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `variedad`
--
ALTER TABLE `variedad`
  MODIFY `id_variedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
