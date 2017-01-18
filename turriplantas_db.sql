-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 50.62.209.49:3306
-- Tiempo de generación: 17-01-2017 a las 17:44:31
-- Versión del servidor: 5.5.43-37.2-log
-- Versión de PHP: 5.5.30

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
CREATE  PROCEDURE `pcr_getImagesVarieties` (IN `idVariedad` INT)  NO SQL
SELECT imagen_planta.id_imagen, imagen_planta.ruta_imagen from imagen_planta inner join planta_x_imagen_planta on imagen_planta.id_imagen = planta_x_imagen_planta.id_imagen where planta_x_imagen_planta.id_variedad = idVariedad$$

CREATE PROCEDURE `pcr_getOrganization` ()  NO SQL
select * from organizacion$$

CREATE PROCEDURE `pcr_getPlants` ()  NO SQL
select * from planta$$

CREATE PROCEDURE `pcr_getPlantsByVariety` (IN `idVariedad` INT)  NO SQL
SELECT * FROM planta WHERE planta.id_variedad = idVariedad$$

CREATE PROCEDURE `pcr_getProducts` ()  NO SQL
SELECT * from producto$$

CREATE PROCEDURE `pcr_getVarieties` ()  NO SQL
SELECT * FROM variedad$$

CREATE PROCEDURE `prc_getImagesHome` ()  NO SQL
select imagen_ruta  from imagen where descripcion = "imageHome" ORDER BY imagen_ruta ASC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre_usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `contraseÃƒÂ±a` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
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
(1, 'imageHome', 1, 'BGSC02477.jpg'),
(2, 'imageHome', 1, 'DSC02486.jpg'),
(3, 'imageHome', 1, 'DSC02487.jpg'),
(4, 'imageHome', 1, 'DSC03130.jpg'),
(5, 'imageHome', 1, 'DSC03132.jpg'),
(6, 'imageHome', 1, 'DSC03153.jpg'),
(7, 'imageHome', 1, 'DSC03155.jpg'),
(15, 'imageHome1', 1, 'DSC03240.jpg'),
(17, 'imageHome1', 1, 'DSC03247.jpg'),
(18, 'imageHome1', 1, 'DSC03257.jpg'),
(20, 'imageHome1', 1, 'DSC03350.jpg'),
(21, 'imageHome1', 1, 'DSC03351.jpg'),
(22, 'imageHome1', 1, 'DSC03366.jpg'),
(23, 'imageHome1', 1, 'DSC04674.jpg'),
(24, 'imageHome1', 1, 'DSC04685.jpg'),
(25, 'imageHome1', 1, 'DSC04686.jpg'),
(26, 'imageHome1', 1, 'DSC04687.jpg'),
(27, 'imageHome1', 1, 'DSC04694.jpg'),
(28, 'imageHome1', 1, 'DSC04701.jpg'),
(29, 'imageHome1', 1, 'DSC05301.jpg'),
(30, 'imageHome1', 1, 'DSC05302.jpg'),
(31, 'imageHome1', 1, 'DSC05303.jpg'),
(32, 'imageHome1', 1, 'DSC05304.jpg'),
(33, 'imageHome1', 1, 'DSC05368.jpg'),
(34, 'imageHome1', 1, 'DSC05374.jpg'),
(35, 'imageHome1', 1, 'DSC05375.jpg'),
(36, 'imageHome1', 1, 'DSC05473.jpg'),
(37, 'imageHome1', 1, 'DSC05474.jpg'),
(38, 'imageHome1', 1, 'DSC05692.jpg'),
(77, 'imageHome', 1, 'ADCSTY001.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_planta`
--

CREATE TABLE `imagen_planta` (
  `id_imagen` int(11) NOT NULL,
  `ruta_imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen_planta`
--

INSERT INTO `imagen_planta` (`id_imagen`, `ruta_imagen`) VALUES
(1, 'Cord1.jpg'),
(2, 'Cord2.jpg'),
(3, 'Cord3.jpg'),
(4, 'Cr1.jpg'),
(5, 'Cr2.jpg'),
(6, 'Cr3.jpg'),
(7, 'Cr4.jpg'),
(8, 'Cr5.jpg'),
(9, 'Cr6.jpg'),
(10, 'Dr1.jpg'),
(11, 'Dr2.jpg'),
(12, 'Dr3.jpg'),
(13, 'Dr4.jpg'),
(14, 'Dr5.jpg'),
(15, 'Dr6.jpg'),
(16, 'Dr7.jpg'),
(17, 'Dr8.jpg'),
(18, 'Sans1.jpg'),
(19, 'Sans2.jpg'),
(20, 'Sans3.jpg'),
(21, 'Sans4.jpg'),
(22, 'Sans5.jpg'),
(23, 'Sans6.jpg'),
(24, 'Sc1.jpg'),
(25, 'Sc2.jpg'),
(26, 'Sc3.jpg'),
(27, 'Sc4.jpg'),
(28, 'Sc5.jpg'),
(29, 'Yu1.jpg'),
(30, 'Yu2.jpg'),
(31, 'Yu3.jpg'),
(32, 'Yu4.jpg'),
(33, 'Pol1.jpeg'),
(34, 'Pol2.jpeg'),
(35, 'Pol3.jpeg');

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
(1, 'Turriplantas es una empresa familiar que inicia operaciones en el año 2003, produciendo y\r\n\r\nexportando plantas ornamentales de alta calidad.\r\n\r\nEnfocados en producir sosteniblemente, contamos con 6 Ha de terreno para propagación y\r\n\r\nproducción, manteniendo 2 Ha para protección y reforestación, del total de 8 Ha con que cuenta la\r\n\r\nempresa.\r\n\r\nCon el fin de producir plantas de alta calidad, se cumple con todos los requisitos del programa de\r\n\r\nmaterial limpio (Clean Stock), requerimiento indispensable para exportar Dracaenas a USA, país\r\n\r\ncon el que se mantiene un mercado permanente, además de exportar a Europa y Asia.\r\n\r\nNuestra vocación siempre ha sido mantener una relación muy estrecha y directa con cada uno de\r\n\r\nnuestros clientes, los cuales con sus comentarios y exigencias nos han obligado hacer cada día lo\r\n\r\nmejor; de allí nuestro eslogan “¡LA CALIDAD NO NACE, SE HACE!”.', 'Turriplantas está localizado en Pavones – Turrialba, Costa Rica, en el sector de Valle Verde, a 850\r\n\r\nmetros sobre el nivel de mar, en una zona montañosa con un clima muy agradable e ideal para el\r\n\r\ncultivo de ciertas variedades de plantas ornamentales.', 'Turriplantas se caracteriza por producir plantas de alta calidad.\r\nDando prioridad a la satisfacción de  nuestros clientes sin miedo al futuro, e innovamos de acuerdo a sus necesidades.\r\nProduciendo en  armonía con la naturaleza, para lo cual se cuenta con un sistema agroforestal funcional.\r\nDonde se mezclan las plantas ornamentales con árboles maderables.\r\nAdemás de la producción de plantas ornamentales, se cuenta con 34 variedades de árboles                                maderables nativos.\r\nManteniendo un aproximado de 1300 árboles en activo crecimiento junto a las plantas ornamentales.\r\nLogrando un ambiente propicio para la producción y a la vez se garantiza   el abastecimiento de madera para la infraestructura necesaria dentro de la propia finca.\r\nSe cuenta con una fuente de agua propia haciendo a Turriplantas un gran aliado y protector del                                medio y se aporta a la zona con un paisaje hermoso.', 'Respeto;                                    Humildad;                                    Comunicación;                                    Honestidad;                                    Responsabilidad;                                    Entusiasmo;                                    Disciplina', 'Mantenernos como uno de los principales productores de plantas ornamentales de Costa Rica,\r\n\r\nguiada por los más altos niveles éticos. Utilizando prácticas agrícolas, agroeconómicas modernas,\r\n\r\nsostenibles y amigables con nuestro medio ambiente.\r\n\r\nSatisfacer a nuestros clientes en calidad y a su vez mantener su interés puesto en nuestro\r\n\r\nproducto.\r\n\r\nCon este concepto y la ayuda de Dios, cumpliremos nuestras metas.', 'Producir y exportar ornamentales de superior calidad a la existente en el Mercado. Llevar color y\r\n\r\nalegría a los puntos de destino. Mantener el interés de nuestros clientes, manteniendo\r\n\r\nconsistencia, calidad y servicio. Seguir con todas las regulaciones ambientales, de salud y\r\n\r\nseguridad laboral. Manteniendo un ambiente de trabajo justo y agradable para nuestros\r\n\r\ncolaboradores y sus familias.', 'Turriplantas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE `planta` (
  `id_planta` int(11) NOT NULL,
  `nombre_cientifico` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_comun` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_organizacion` int(11) NOT NULL,
  `id_variedad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planta`
--

INSERT INTO `planta` (`id_planta`, `nombre_cientifico`, `nombre_comun`, `id_organizacion`, `id_variedad`) VALUES
(1, 'Aralia Fabian', '', 1, 1),
(2, 'Aralia Ming', '', 1, 1),
(3, 'Aralia Roble', '', 1, 1),
(4, 'Cr. Brazil', '', 1, 2),
(5, 'Cr. Excellent', '', 1, 2),
(6, 'Cr. Mamey', '', 1, 2),
(7, 'Cr. Papey', '', 1, 2),
(8, 'Cr. Petra', '', 1, 2),
(9, 'Cr. Pictum', '', 1, 2),
(10, 'Cr. Red Banana', '', 1, 2),
(11, 'Cr. Red Batik', '', 1, 2),
(12, 'Cr. Sunny Star', '', 1, 2),
(13, 'Drac. Florida Beauty', '', 1, 3),
(14, 'Drac. Marginata Bicolor', '', 1, 3),
(15, 'Drac. Marginata Magenta', '', 1, 3),
(16, 'Drac. Sanderiana Gold', '', 1, 3),
(17, 'Drac. Sanderiana Regular', '', 1, 3),
(18, 'Drac. Sanderiana Borinquensis', '', 1, 3),
(19, 'Cord. Glauca', '', 1, 4),
(20, 'Drac. Green Stripe', '', 1, 3),
(21, 'Drac. Lemon Lime', '', 1, 3),
(22, 'Sans. Black Coral', '', 1, 6),
(23, 'Sans. Black Gold', '', 1, 6),
(24, 'Sans. Black Gold Compacta', '', 1, 6),
(25, 'Sans. Black Princess Sandy', '', 1, 6),
(26, 'Sans. Cylindrica', '', 1, 6),
(27, 'Sans. Frozen', '', 1, 6),
(28, 'Sans. Futura Superba', '', 1, 6),
(29, 'Sans. Futura Real', '', 1, 6),
(30, 'Sans. Green Hahnii', '', 1, 6),
(31, 'Sans. Green Mermaid', '', 1, 6),
(32, 'Sans. Moon Shine', '', 1, 6),
(33, 'Sans. Laurentii', '', 1, 6),
(34, 'Sans. Silver Laurentii', '', 1, 6),
(35, 'Sans. Snow Camp', '', 1, 6),
(36, 'Sans. Zeylanica', '', 1, 6),
(37, 'Sch. Gold Capella', '', 1, 7),
(38, 'Sch. Green Arboricola', '', 1, 7),
(39, 'Yucca Silver Star', '', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta_x_imagen_planta`
--

CREATE TABLE `planta_x_imagen_planta` (
  `id_variedad` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planta_x_imagen_planta`
--

INSERT INTO `planta_x_imagen_planta` (`id_variedad`, `id_imagen`) VALUES
(4, 1),
(4, 2),
(4, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(6, 18),
(6, 19),
(6, 20),
(6, 21),
(6, 22),
(6, 23),
(7, 24),
(7, 25),
(7, 26),
(7, 27),
(7, 28),
(8, 29),
(8, 30),
(8, 31),
(8, 32),
(1, 33),
(1, 34),
(1, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(60) NOT NULL,
  `imagen_ruta` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `imagen_ruta`) VALUES
(1, 'Plantas sin raí­z', 'SinRaiz.jpeg'),
(2, 'Plantas con raí­z', 'ConRaiz.jpeg'),
(3, 'Plantas enraizadas en cubo de oasis', 'CuboOasis.jpeg'),
(4, 'Plantas en callosidad', 'Callosidad.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedad`
--

CREATE TABLE `variedad` (
  `id_variedad` int(11) NOT NULL,
  `nombre_variedad` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_ruta` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `variedad`
--

INSERT INTO `variedad` (`id_variedad`, `nombre_variedad`, `imagen_ruta`) VALUES
(1, 'Polyscias Spp', 'Pol.jpg'),
(2, 'Codiaeumm Variegaton Spp (Crotons)', 'Cr1.jpg'),
(3, 'Dracaenas Spp', 'Dr4.jpg'),
(4, 'Cordyline Spp', 'Cord1.jpg'),
(6, 'Sansevieria Trifasciata Spp', 'Sans3.jpg'),
(7, 'Schefflear ArborÃ­cola Spp', 'Sc5.jpg'),
(8, 'Yucca Elephantipes Spp', 'Yu1.jpg');

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
-- Indices de la tabla `imagen_planta`
--
ALTER TABLE `imagen_planta`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`id_organizacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

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
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT de la tabla `imagen_planta`
--
ALTER TABLE `imagen_planta`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `id_organizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `variedad`
--
ALTER TABLE `variedad`
  MODIFY `id_variedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
