-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2022 a las 14:53:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gasolineria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_ser` int(4) NOT NULL,
  `nom_ser` varchar(20) DEFAULT NULL,
  `precio_ser` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_ser`, `nom_ser`, `precio_ser`) VALUES
(1, 'gasolina normal', 9.317),
(2, 'gasolina extra', 9.144),
(3, 'acpm', 9.631),
(4, 'gas vehiculas', 5.044),
(123, 'sdasd', 32131);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `id_tipo_usu` int(3) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usu`
--

INSERT INTO `tipo_usu` (`id_tipo_usu`, `tipo`) VALUES
(1, 'administrador'),
(2, 'empleado'),
(3, 'cliente'),
(3123, 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_veh`
--

CREATE TABLE `tipo_veh` (
  `id_veh` int(6) NOT NULL,
  `nom_veh` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_veh`
--

INSERT INTO `tipo_veh` (`id_veh`, `nom_veh`) VALUES
(1, 'carro'),
(2, 'moto'),
(3, 'mula'),
(4, 'camioneta'),
(5, 'buseta'),
(6, 'taxi'),
(231123, 'sdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `id_tipo_usu` int(3) DEFAULT NULL,
  `nom_usu` varchar(20) DEFAULT NULL,
  `ape_usu` varchar(10) NOT NULL,
  `cel_usu` bigint(11) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varbinary(20) NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `id_tipo_usu`, `nom_usu`, `ape_usu`, `cel_usu`, `usuario`, `email`, `contraseña`, `foto`) VALUES
(123, 1, 'nicolas', 'andres', 231123, 'andres123', 'asdasd@sfasd.com', 0x73616461733132333133, 0x342e6a666966),
(12312, 3, 'qweqwe', 'qweqwe', 0, 'asdas1', 'asda@gmail.com', 0x7361646131323331, 0x362e6a666966),
(21312, 1, 'sadaasd', 'asdaad', 2312, 'sada21', 'asda@gmail.com', 0x61736468617364313233, 0x7573756172696f2e6a7067),
(123123, 2, 'eawds', 'asdasd', 132134, 'asda1', 'nasdta@gmail.com', 0x64617364617373313233313432, 0x322e6a666966),
(124124, 3, 'dasda', 'sdasdasd', 12443, 'asda21', 'asda@gmial.com', 0x61647364617364313233, 0x352e6a666966),
(212323, 2, 'dasdasd', 'adsda', 231234, 'easdeq2', 'asdas@gmail.com', 0x64617364333233, 0x332e6a666966);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `factura` int(11) NOT NULL,
  `id_usu` int(11) DEFAULT NULL,
  `id_veh` int(6) DEFAULT NULL,
  `id_ser` int(4) DEFAULT NULL,
  `vendedor` int(3) DEFAULT NULL,
  `placa` varchar(11) DEFAULT NULL,
  `cant_ven` int(11) DEFAULT NULL,
  `fecha_ven` date DEFAULT NULL,
  `total_ven` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_ser`);

--
-- Indices de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD PRIMARY KEY (`id_tipo_usu`);

--
-- Indices de la tabla `tipo_veh`
--
ALTER TABLE `tipo_veh`
  ADD PRIMARY KEY (`id_veh`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`),
  ADD KEY `id_tipo_usu` (`id_tipo_usu`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`factura`),
  ADD KEY `id_usu` (`id_usu`),
  ADD KEY `id_veh` (`id_veh`),
  ADD KEY `id_ser` (`id_ser`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo_usu`) REFERENCES `tipo_usu` (`id_tipo_usu`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_veh`) REFERENCES `tipo_veh` (`id_veh`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_ser`) REFERENCES `servicios` (`id_ser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
