-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2017 a las 02:54:15
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sauna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientesauna`
--

CREATE TABLE `clientesauna` (
  `idclientesauna` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `nsauna` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `total` float NOT NULL,
  `fecha` date NOT NULL,
  `horainicio` time(5) NOT NULL,
  `horafinal` time(5) NOT NULL,
  `modificado` varchar(20) NOT NULL,
  `horamodificado` time NOT NULL,
  `ci` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientesauna`
--

INSERT INTO `clientesauna` (`idclientesauna`, `nombre`, `nsauna`, `tipo`, `total`, `fecha`, `horainicio`, `horafinal`, `modificado`, `horamodificado`, `ci`) VALUES
(91, 'JOSE JOSE', 0, 'INGRESO', 18, '2016-11-02', '14:54:13.00000', '15:54:13.00000', 'MODIFICADO', '14:55:47', '123'),
(92, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 22, '2016-11-02', '19:58:02.00000', '20:58:02.00000', 'MODIFICADO', '19:58:10', '456'),
(93, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 2.5, '2016-11-02', '20:19:41.00000', '21:19:41.00000', 'NO MODIFICADO', '00:00:00', '123'),
(94, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 5, '2016-11-02', '20:20:39.00000', '21:20:39.00000', 'NO MODIFICADO', '00:00:00', '123'),
(95, 'JOSE JOSE', 0, 'INGRESO', 9, '2016-11-02', '20:30:39.00000', '21:30:39.00000', 'NO MODIFICADO', '00:00:00', '123'),
(96, 'JOSE JOSE', 0, 'INGRESO', 29, '2016-11-15', '20:16:25.00000', '21:16:25.00000', 'NO MODIFICADO', '00:00:00', '1010'),
(97, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 37, '2016-11-24', '23:26:33.00000', '24:26:33.00000', 'NO MODIFICADO', '00:00:00', '123'),
(98, 'JOSE JOSE', 0, 'INGRESO', 3, '2016-11-24', '23:26:50.00000', '24:26:50.00000', 'NO MODIFICADO', '00:00:00', '123'),
(99, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 58, '2016-11-24', '23:27:12.00000', '24:27:12.00000', 'NO MODIFICADO', '00:00:00', '123'),
(100, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 29, '2016-11-24', '23:30:34.00000', '24:30:34.00000', 'NO MODIFICADO', '00:00:00', '123'),
(101, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 29, '2016-11-24', '23:32:16.00000', '24:32:16.00000', 'NO MODIFICADO', '00:00:00', '123'),
(102, 'JAVIER CARPIO', 0, 'INGRESO', 29, '2016-11-24', '23:32:47.00000', '24:32:47.00000', 'NO MODIFICADO', '00:00:00', '123'),
(103, 'JAVIER CARPIO', 0, 'INGRESO', 29, '2016-11-24', '23:34:41.00000', '24:34:41.00000', 'NO MODIFICADO', '00:00:00', '123'),
(104, 'CAELI YUCRA', 0, 'INGRESO', 29, '2016-11-24', '23:35:18.00000', '24:35:18.00000', 'NO MODIFICADO', '00:00:00', '123'),
(105, 'CAELI YUCRA', 0, 'INGRESO', 5, '2016-11-27', '07:54:27.00000', '08:54:27.00000', 'NO MODIFICADO', '00:00:00', '123'),
(106, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 58, '2016-11-27', '08:01:17.00000', '09:01:17.00000', 'MODIFICADO', '17:13:28', '123'),
(107, 'JOSE JOSE', 0, 'INGRESO', 58, '2016-11-27', '17:13:49.00000', '18:13:49.00000', 'MODIFICADO', '17:14:06', '123'),
(108, 'ALBETO FLORES CALLE', 0, 'INGRESO', 33, '2016-11-27', '17:45:52.00000', '18:45:52.00000', 'MODIFICADO', '22:01:13', '123'),
(109, 'RUDY IGNACIO CALANI', 0, 'INGRESO', 66, '2016-11-27', '17:55:48.00000', '18:55:48.00000', 'MODIFICADO', '17:57:44', '123'),
(110, 'CARLOS RIVAS', 0, 'INGRESO', 66, '2016-11-27', '18:00:15.00000', '19:00:15.00000', 'MODIFICADO', '18:00:33', '123'),
(111, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 66, '2016-11-27', '18:35:14.00000', '19:35:14.00000', 'MODIFICADO', '18:35:35', '123'),
(112, 'ANAMARI', 0, 'INGRESO', 66, '2016-11-27', '18:36:29.00000', '19:36:29.00000', 'MODIFICADO', '18:36:46', '123'),
(113, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 6.5, '2016-11-29', '07:45:27.00000', '08:45:27.00000', 'NO MODIFICADO', '00:00:00', '123'),
(114, 'CAELI YUCRA', 0, 'INGRESO', 5, '2016-11-29', '07:45:40.00000', '08:45:40.00000', 'NO MODIFICADO', '00:00:00', '123'),
(115, 'ANAMARI', 0, 'INGRESO', 1.5, '2017-02-16', '13:29:38.00000', '14:29:38.00000', 'MODIFICADO', '14:01:27', '1010'),
(116, 'ANAMARI', 0, 'INGRESO', 6, '2017-02-16', '13:56:26.00000', '14:56:26.00000', 'MODIFICADO', '13:56:36', '1010'),
(117, 'ADIMER PAUL CHAMBI AJATA', 0, 'INGRESO', 75, '2017-02-16', '14:01:47.00000', '15:01:47.00000', 'MODIFICADO', '14:05:38', '1010'),
(118, 'ANAMARI', 0, 'INGRESO', 3, '2017-10-02', '20:52:52.00000', '21:52:52.00000', 'NO MODIFICADO', '00:00:00', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `iddetalle` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `cantidad` float NOT NULL,
  `precio` float NOT NULL,
  `total` float NOT NULL,
  `idclientesauna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`iddetalle`, `tipo`, `cantidad`, `precio`, `total`, `idclientesauna`) VALUES
(1, 'FOSA MENOR', 2, 1.5, 3, 91),
(2, 'FOSA INDIVIDUAL', 0, 3, 0, 91),
(3, 'FOSA ESPECIAL', 2, 5, 10, 91),
(4, 'SAUNA MAYOR', 1, 5, 5, 91),
(5, 'SAUNA MENOR', 0, 2.5, 0, 91),
(6, 'DUCHAS', 0, 2, 0, 91),
(7, 'PISINA MAYOR', 0, 3, 0, 91),
(8, 'PISINA MENOR', 0, 1.5, 0, 91),
(9, 'SAUNA MAYOR ESPECIAL', 0, 5, 0, 91),
(10, 'FOSA MENOR', 1, 1.5, 1.5, 92),
(11, 'FOSA INDIVIDUAL', 1, 3, 3, 92),
(12, 'FOSA ESPECIAL', 1, 5, 5, 92),
(13, 'SAUNA MAYOR', 1, 5, 5, 92),
(14, 'SAUNA MENOR', 1, 2.5, 2.5, 92),
(15, 'DUCHAS', 0, 2, 0, 92),
(16, 'PISINA MAYOR', 0, 3, 0, 92),
(17, 'PISINA MENOR', 0, 1.5, 0, 92),
(18, 'SAUNA MAYOR ESPECIAL', 1, 5, 5, 92),
(19, 'FOSA MENOR', 0, 1.5, 0, 93),
(20, 'FOSA INDIVIDUAL', 0, 3, 0, 93),
(21, 'FOSA ESPECIAL', 0, 5, 0, 93),
(22, 'SAUNA MAYOR', 0, 5, 0, 93),
(23, 'SAUNA MENOR', 1, 2.5, 2.5, 93),
(24, 'DUCHAS', 0, 2, 0, 93),
(25, 'PISINA MAYOR', 0, 3, 0, 93),
(26, 'PISINA MENOR', 0, 1.5, 0, 93),
(27, 'SAUNA MAYOR ESPECIAL', 0, 5, 0, 93),
(28, 'FOSA MENOR', 0, 1.5, 0, 94),
(29, 'FOSA INDIVIDUAL', 0, 3, 0, 94),
(30, 'FOSA ESPECIAL', 0, 5, 0, 94),
(31, 'SAUNA MAYOR', 1, 5, 5, 94),
(32, 'SAUNA MENOR', 0, 2.5, 0, 94),
(33, 'DUCHAS', 0, 2, 0, 94),
(34, 'PISINA MAYOR', 0, 3, 0, 94),
(35, 'PISINA MENOR', 0, 1.5, 0, 94),
(36, 'SAUNA MAYOR ESPECIAL', 0, 5, 0, 94),
(37, 'FOSA MENOR', 2, 1.5, 3, 95),
(38, 'FOSA INDIVIDUAL', 2, 3, 6, 95),
(39, 'FOSA ESPECIAL', 0, 5, 0, 95),
(40, 'SAUNA MAYOR', 0, 5, 0, 95),
(41, 'SAUNA MENOR', 0, 2.5, 0, 95),
(42, 'DUCHAS', 0, 2, 0, 95),
(43, 'PISINA MAYOR', 0, 3, 0, 95),
(44, 'PISINA MENOR', 0, 1.5, 0, 95),
(45, 'SAUNA MAYOR ESPECIAL', 0, 5, 0, 95),
(46, 'FOSA MENOR', 2, 1.5, 3, 96),
(47, 'FOSA INDIVIDUAL', 2, 3, 6, 96),
(48, 'FOSA ESPECIAL', 2, 5, 10, 96),
(49, 'SAUNA MAYOR', 2, 5, 10, 96),
(50, 'SAUNA MENOR', 0, 2.5, 0, 96),
(51, 'DUCHAS', 0, 2, 0, 96),
(52, 'PISINA MAYOR', 0, 3, 0, 96),
(53, 'PISINA MENOR', 0, 1.5, 0, 96),
(54, 'SAUNA MAYOR ESPECIAL', 0, 5, 0, 96),
(55, 'INDIVIDUALES MAYORES', 3, 3, 9, 97),
(56, 'INDIVIDUALES MENORES', 1, 1.5, 1.5, 97),
(57, 'SAUNAS MAYORES', 1, 5, 0, 97),
(58, 'SAUNAS MENORES', 1, 2.5, 2.5, 97),
(59, 'SAUNAS INDIVIDUALES MAYORES', 1, 5, 5, 97),
(60, 'SAUNAS INDIVIDUALES MENORES', 1, 2.5, 0, 97),
(61, 'FOSAS ESPECIALES MAYORES', 1, 5, 5, 97),
(62, 'FOSAS ESPECIALES MENORES', 1, 2.5, 0, 97),
(63, 'DUCHAS ', 2, 2, 4, 97),
(64, 'INDIVIDUALES MAYORES', 1, 3, 3, 98),
(65, 'INDIVIDUALES MENORES', 0, 1.5, 0, 98),
(66, 'SAUNAS MAYORES', 0, 5, 0, 98),
(67, 'SAUNAS MENORES', 0, 2.5, 0, 98),
(68, 'SAUNAS INDIVIDUALES MAYORES', 0, 5, 0, 98),
(69, 'SAUNAS INDIVIDUALES MENORES', 0, 2.5, 0, 98),
(70, 'FOSAS ESPECIALES MAYORES', 0, 5, 0, 98),
(71, 'FOSAS ESPECIALES MENORES', 0, 2.5, 0, 98),
(72, 'DUCHAS ', 0, 2, 0, 98),
(73, 'INDIVIDUALES MAYORES', 2, 3, 6, 99),
(74, 'INDIVIDUALES MENORES', 2, 1.5, 3, 99),
(75, 'SAUNAS MAYORES', 2, 5, 0, 99),
(76, 'SAUNAS MENORES', 2, 2.5, 5, 99),
(77, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 99),
(78, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 0, 99),
(79, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 99),
(80, 'FOSAS ESPECIALES MENORES', 2, 2.5, 0, 99),
(81, 'DUCHAS ', 2, 2, 4, 99),
(82, 'INDIVIDUALES MAYORES', 1, 3, 3, 104),
(83, 'INDIVIDUALES MENORES', 1, 1.5, 1.5, 104),
(84, 'SAUNAS MAYORES', 1, 5, 5, 104),
(85, 'SAUNAS MENORES', 1, 2.5, 2.5, 104),
(86, 'SAUNAS INDIVIDUALES MAYORES', 1, 5, 5, 104),
(87, 'SAUNAS INDIVIDUALES MENORES', 1, 2.5, 2.5, 104),
(88, 'FOSAS ESPECIALES MAYORES', 1, 5, 5, 104),
(89, 'FOSAS ESPECIALES MENORES', 1, 2.5, 2.5, 104),
(90, 'DUCHAS ', 1, 2, 2, 104),
(91, 'INDIVIDUALES MAYORES', 0, 3, 0, 105),
(92, 'INDIVIDUALES MENORES', 0, 1.5, 0, 105),
(93, 'SAUNAS MAYORES', 0, 5, 0, 105),
(94, 'SAUNAS MENORES', 0, 2.5, 0, 105),
(95, 'SAUNAS INDIVIDUALES MAYORES', 1, 5, 5, 105),
(96, 'SAUNAS INDIVIDUALES MENORES', 0, 2.5, 0, 105),
(97, 'FOSAS ESPECIALES MAYORES', 0, 5, 0, 105),
(98, 'FOSAS ESPECIALES MENORES', 0, 2.5, 0, 105),
(99, 'DUCHAS', 0, 2, 0, 105),
(100, 'INDIVIDUALES MAYORES', 1, 3, 3, 106),
(101, 'INDIVIDUALES MENORES', 2, 1.5, 3, 106),
(102, 'SAUNAS MAYORES', 2, 5, 10, 106),
(103, 'SAUNAS MENORES', 2, 2.5, 5, 106),
(104, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 106),
(105, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 106),
(106, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 106),
(107, 'FOSAS ESPECIALES MENORES', 2, 2.5, 5, 106),
(108, 'DUCHAS', 2, 2, 4, 106),
(109, 'INDIVIDUALES MAYORES', 1, 3, 3, 107),
(110, 'INDIVIDUALES MENORES', 2, 1.5, 3, 107),
(111, 'SAUNAS MAYORES', 2, 5, 10, 107),
(112, 'SAUNAS MENORES', 2, 2.5, 5, 107),
(113, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 107),
(114, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 107),
(115, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 107),
(116, 'FOSAS ESPECIALES MENORES', 2, 2.5, 5, 107),
(117, 'DUCHAS', 2, 2, 4, 107),
(118, 'INDIVIDUALES MAYORES', 1, 3, 3, 108),
(119, 'INDIVIDUALES MENORES', 1, 1.5, 1.5, 108),
(120, 'SAUNAS MAYORES', 1, 5, 5, 108),
(121, 'SAUNAS MENORES', 1, 2.5, 2.5, 108),
(122, 'SAUNAS INDIVIDUALES MAYORES', 1, 5, 5, 108),
(123, 'SAUNAS INDIVIDUALES MENORES', 1, 2.5, 2.5, 108),
(124, 'FOSAS ESPECIALES MAYORES', 1, 5, 5, 108),
(125, 'FOSAS ESPECIALES MENORES', 1, 2.5, 2.5, 108),
(126, 'DUCHAS', 1, 2, 2, 108),
(127, 'INDIVIDUALES MAYORES', 1, 3, 3, 109),
(128, 'INDIVIDUALES MENORES', 2, 1.5, 3, 109),
(129, 'SAUNAS MAYORES', 2, 5, 10, 109),
(130, 'SAUNAS MENORES', 2, 2.5, 5, 109),
(131, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 109),
(132, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 109),
(133, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 109),
(134, 'FOSAS ESPECIALES MENORES', 2, 2.5, 5, 109),
(135, 'DUCHAS', 2, 2, 4, 109),
(136, 'DELEGACIONES', 1, 2, 2, 109),
(137, 'ADULTO MAYOR', 1, 2, 2, 109),
(138, 'INDIVIDUALES MAYORES', 1, 3, 3, 110),
(139, 'INDIVIDUALES MENORES', 2, 1.5, 3, 110),
(140, 'SAUNAS MAYORES', 2, 5, 10, 110),
(141, 'SAUNAS MENORES', 2, 2.5, 5, 110),
(142, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 110),
(143, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 110),
(144, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 110),
(145, 'FOSAS ESPECIALES MENORES', 2, 2.5, 5, 110),
(146, 'DUCHAS', 2, 2, 4, 110),
(147, 'DELEGACIONES', 2, 2, 4, 110),
(148, 'ADULTO MAYOR', 2, 2, 4, 110),
(149, 'INDIVIDUALES MAYORES', 1, 3, 3, 111),
(150, 'INDIVIDUALES MENORES', 2, 1.5, 3, 111),
(151, 'SAUNAS MAYORES', 2, 5, 10, 111),
(152, 'SAUNAS MENORES', 2, 2.5, 5, 111),
(153, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 111),
(154, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 111),
(155, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 111),
(156, 'FOSAS ESPECIALES MENORES', 2, 2.5, 5, 111),
(157, 'DUCHAS', 2, 2, 4, 111),
(158, 'DELEGACIONES', 2, 2, 4, 111),
(159, 'ADULTO MAYOR', 2, 2, 4, 111),
(160, 'INDIVIDUALES MAYORES', 2, 3, 6, 112),
(161, 'INDIVIDUALES MENORES', 2, 1.5, 3, 112),
(162, 'SAUNAS MAYORES', 2, 5, 10, 112),
(163, 'SAUNAS MENORES', 2, 2.5, 5, 112),
(164, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 112),
(165, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 112),
(166, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 112),
(167, 'FOSAS ESPECIALES MENORES', 2, 2.5, 5, 112),
(168, 'DUCHAS', 2, 2, 4, 112),
(169, 'DELEGACIONES', 2, 2, 4, 112),
(170, 'ADULTO MAYOR', 2, 2, 4, 112),
(171, 'INDIVIDUALES MAYORES', 0, 3, 0, 113),
(172, 'INDIVIDUALES MENORES', 1, 1.5, 1.5, 113),
(173, 'SAUNAS MAYORES', 1, 5, 5, 113),
(174, 'SAUNAS MENORES', 0, 2.5, 0, 113),
(175, 'SAUNAS INDIVIDUALES MAYORES', 0, 5, 0, 113),
(176, 'SAUNAS INDIVIDUALES MENORES', 0, 2.5, 0, 113),
(177, 'FOSAS ESPECIALES MAYORES', 0, 5, 0, 113),
(178, 'FOSAS ESPECIALES MENORES', 0, 2.5, 0, 113),
(179, 'DUCHAS', 0, 2, 0, 113),
(180, 'DELEGACIONES', 0, 2, 0, 113),
(181, 'ADULTO MAYOR', 0, 2, 0, 113),
(182, 'INDIVIDUALES MAYORES', 0, 3, 0, 114),
(183, 'INDIVIDUALES MENORES', 0, 1.5, 0, 114),
(184, 'SAUNAS MAYORES', 0, 5, 0, 114),
(185, 'SAUNAS MENORES', 0, 2.5, 0, 114),
(186, 'SAUNAS INDIVIDUALES MAYORES', 0, 5, 0, 114),
(187, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 114),
(188, 'FOSAS ESPECIALES MAYORES', 0, 5, 0, 114),
(189, 'FOSAS ESPECIALES MENORES', 0, 2.5, 0, 114),
(190, 'DUCHAS', 0, 2, 0, 114),
(191, 'DELEGACIONES', 0, 2, 0, 114),
(192, 'ADULTO MAYOR', 0, 2, 0, 114),
(193, 'INDIVIDUALES MAYORES', 0, 3, 0, 115),
(194, 'INDIVIDUALES MENORES', 0, 1.5, 0, 115),
(195, 'SAUNAS MAYORES', 0, 5, 0, 115),
(196, 'SAUNAS MENORES', 0, 2.5, 0, 115),
(197, 'SAUNAS INDIVIDUALES MAYORES', 0, 5, 0, 115),
(198, 'SAUNAS INDIVIDUALES MENORES', 0, 2.5, 0, 115),
(199, 'FOSAS ESPECIALES MAYORES', 0, 5, 0, 115),
(200, 'FOSAS ESPECIALES MENORES', 0, 2.5, 0, 115),
(201, 'DUCHAS', 0, 2, 0, 115),
(202, 'DELEGACIONES', 0, 2, 0, 115),
(203, 'ADULTO MAYOR', 0, 2, 0, 115),
(204, 'PISINA MAYOR', 1, 3, 3, 115),
(205, 'PISINA MENOR', 1, 1.5, 1.5, 115),
(206, 'INDIVIDUALES MAYORES', 1, 3, 3, 116),
(207, 'INDIVIDUALES MENORES', 0, 1.5, 0, 116),
(208, 'SAUNAS MAYORES', 0, 5, 0, 116),
(209, 'SAUNAS MENORES', 0, 2.5, 0, 116),
(210, 'SAUNAS INDIVIDUALES MAYORES', 0, 5, 0, 116),
(211, 'SAUNAS INDIVIDUALES MENORES', 0, 2.5, 0, 116),
(212, 'FOSAS ESPECIALES MAYORES', 0, 5, 0, 116),
(213, 'FOSAS ESPECIALES MENORES', 0, 2.5, 0, 116),
(214, 'DUCHAS', 0, 2, 0, 116),
(215, 'DELEGACIONES', 0, 2, 0, 116),
(216, 'ADULTO MAYOR', 0, 2, 0, 116),
(217, 'PISINA MAYOR', 0, 3, 0, 116),
(218, 'PISINA MENOR', 0, 1.5, 0, 116),
(219, 'INDIVIDUALES MAYORES', 2, 3, 6, 117),
(220, 'INDIVIDUALES MENORES', 2, 1.5, 3, 117),
(221, 'SAUNAS MAYORES', 2, 5, 10, 117),
(222, 'SAUNAS MENORES', 2, 2.5, 5, 117),
(223, 'SAUNAS INDIVIDUALES MAYORES', 2, 5, 10, 117),
(224, 'SAUNAS INDIVIDUALES MENORES', 2, 2.5, 5, 117),
(225, 'FOSAS ESPECIALES MAYORES', 2, 5, 10, 117),
(226, 'FOSAS ESPECIALES MENORES', 2, 2.5, 5, 117),
(227, 'DUCHAS', 2, 2, 4, 117),
(228, 'DELEGACIONES', 2, 2, 4, 117),
(229, 'ADULTO MAYOR', 2, 2, 4, 117),
(230, 'PISINA MAYOR', 0, 3, 0, 117),
(231, 'PISINA MENOR', 1, 1.5, 1.5, 117),
(232, 'INDIVIDUALES MAYORES', 1, 3, 3, 118),
(233, 'INDIVIDUALES MENORES', 0, 1.5, 0, 118),
(234, 'SAUNAS MAYORES', 0, 5, 0, 118),
(235, 'SAUNAS MENORES', 0, 2.5, 0, 118),
(236, 'SAUNAS INDIVIDUALES MAYORES', 0, 5, 0, 118),
(237, 'SAUNAS INDIVIDUALES MENORES', 0, 2.5, 0, 118),
(238, 'FOSAS ESPECIALES MAYORES', 0, 5, 0, 118),
(239, 'FOSAS ESPECIALES MENORES', 0, 2.5, 0, 118),
(240, 'DUCHAS', 0, 2, 0, 118),
(241, 'DELEGACIONES', 0, 2, 0, 118),
(242, 'ADULTO MAYOR', 0, 2, 0, 118),
(243, 'PISINA MAYOR', 0, 3, 0, 118),
(244, 'PISINA MENOR', 0, 1.5, 0, 118);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `icono` varchar(75) NOT NULL,
  `url` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idmenu`, `nombre`, `icono`, `url`) VALUES
(1, 'Ventas', 'euro', 'ventas.php'),
(2, 'Vistas', 'map-marker', 'vista.php'),
(3, 'Reporte', 'folder-open', 'reportes2.php'),
(4, 'Usuario', 'user', 'usuario.php'),
(5, 'Totales ', 'file', 'totales.php'),
(6, 'Reporte_Dia', 'file', 'reportedia.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `ci` varchar(20) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `nombrei` varchar(55) NOT NULL,
  `clavei` varchar(55) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`ci`, `nombre`, `nombrei`, `clavei`, `tipo`, `estado`) VALUES
('1010', 'USER1', 'USER1', 'USER1', 'V', 'ACTIVO'),
('123', 'admin', 'admin', 'admin', 'A', 'ACTIVO'),
('2020', 'USER2', 'USER2', 'USER2', 'V', 'ACTIVO'),
('456', 'invi', 'invi', 'invi', 'V', 'ACTIVO'),
('456465', 'LOGAN STEVENS', 'LOGAN', 'LOGAN', 'V', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalmenu`
--

CREATE TABLE `personalmenu` (
  `tipo` varchar(25) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personalmenu`
--

INSERT INTO `personalmenu` (`tipo`, `idmenu`) VALUES
('A', 1),
('A', 2),
('A', 3),
('A', 4),
('A', 5),
('V', 1),
('V', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sauna`
--

CREATE TABLE `sauna` (
  `nsauna` int(11) NOT NULL,
  `des` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sauna`
--

INSERT INTO `sauna` (`nsauna`, `des`) VALUES
(0, '0'),
(1, 'simple'),
(2, 'simple'),
(3, 's'),
(4, 's'),
(5, 's');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientesauna`
--
ALTER TABLE `clientesauna`
  ADD PRIMARY KEY (`idclientesauna`,`nombre`,`nsauna`),
  ADD KEY `ci` (`nombre`),
  ADD KEY `nsauna` (`nsauna`),
  ADD KEY `ci_2` (`ci`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`iddetalle`),
  ADD KEY `idclientesauna` (`idclientesauna`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`ci`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `personalmenu`
--
ALTER TABLE `personalmenu`
  ADD PRIMARY KEY (`tipo`,`idmenu`),
  ADD KEY `idmenu` (`idmenu`);

--
-- Indices de la tabla `sauna`
--
ALTER TABLE `sauna`
  ADD PRIMARY KEY (`nsauna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientesauna`
--
ALTER TABLE `clientesauna`
  MODIFY `idclientesauna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `iddetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sauna`
--
ALTER TABLE `sauna`
  MODIFY `nsauna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientesauna`
--
ALTER TABLE `clientesauna`
  ADD CONSTRAINT `clientesauna_ibfk_2` FOREIGN KEY (`nsauna`) REFERENCES `sauna` (`nsauna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientesauna_ibfk_3` FOREIGN KEY (`ci`) REFERENCES `personal` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`idclientesauna`) REFERENCES `clientesauna` (`idclientesauna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personalmenu`
--
ALTER TABLE `personalmenu`
  ADD CONSTRAINT `personalmenu_ibfk_2` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
