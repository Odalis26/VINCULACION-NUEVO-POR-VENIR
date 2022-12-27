-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2022 a las 03:27:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `donacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(1, 'Equipos Electromecánicos', '2017-12-21 20:53:29'),
(2, 'Taladros', '2017-12-21 20:53:29'),
(3, 'Andamios', '2017-12-21 20:53:29'),
(4, 'Generadores de energía', '2017-12-21 20:53:29'),
(5, 'Equipos para construcción', '2017-12-21 20:53:29'),
(6, 'Martillos mecánicos', '2017-12-21 23:06:40'),
(7, 'herramientas de agricultura', '2022-12-22 02:04:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `compras` int(11) NOT NULL,
  `ultima_compra` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `compras`, `ultima_compra`, `fecha`) VALUES
(3, 'Juan Villegas', 2147483647, 'juan@hotmail.com', '(300) 341-2345', 'Calle 23 # 45 - 56', '1980-11-02', 8, '2022-12-22 18:52:23', '2022-12-22 23:52:23'),
(4, 'Pedro Pérez', 2147483647, 'pedro@gmail.com', '(399) 876-5432', 'Calle 34 N33 -56', '1970-08-07', 10, '2022-12-20 19:36:12', '2022-12-23 00:01:07'),
(5, 'Miguel Murillo', 325235235, 'miguel@hotmail.com', '(254) 545-3446', 'calle 34 # 34 - 23', '1976-03-04', 27, '2022-12-22 18:36:43', '2022-12-22 23:36:43'),
(6, 'Margarita Londoño', 34565432, 'margarita@hotmail.com', '(344) 345-6678', 'Calle 45 # 34 - 56', '1976-11-30', 9, '2022-12-22 20:08:03', '2022-12-23 01:08:03'),
(7, 'Julian Ramirez', 786786545, 'julian@hotmail.com', '(675) 674-5453', 'Carrera 45 # 54 - 56', '1980-04-05', 15, '2022-12-22 19:33:05', '2022-12-23 00:33:05'),
(8, 'Stella Jaramillo', 65756735, 'stella@gmail.com', '(435) 346-3463', 'Carrera 34 # 45- 56', '1956-06-05', 4, '2022-12-22 19:22:45', '2022-12-23 00:22:45'),
(9, 'Eduardo López', 2147483647, 'eduardo@gmail.com', '(534) 634-6565', 'Carrera 67 # 45sur', '1978-03-04', 4, '2022-12-22 18:55:49', '2022-12-22 23:55:49'),
(10, 'Ximena Restrepo', 436346346, 'ximena@gmail.com', '(543) 463-4634', 'calle 45 # 23 - 45', '1956-03-04', 19, '2022-12-22 20:20:22', '2022-12-23 01:20:22'),
(11, 'David Guzman', 43634643, 'david@hotmail.com', '(354) 574-5634', 'carrera 45 # 45 ', '1967-05-04', 3, '2022-12-22 20:06:17', '2022-12-23 01:06:17'),
(12, 'Gonzalo Pérez', 436346346, 'gonzalo@yahoo.com', '(235) 346-3464', 'Carrera 34 # 56 - 34', '1967-08-09', 16, '2022-12-22 19:17:01', '2022-12-23 00:17:01'),
(13, 'Odalis Rea', 1752442267, 'ody@gmail.com', '(099) 355-6321', 'Las Casas', '2022-12-21', 4, '2022-12-22 18:33:27', '2022-12-22 23:33:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `precio_compra` float NOT NULL,
  `precio_venta` float NOT NULL,
  `ventas` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `codigo`, `descripcion`, `imagen`, `stock`, `precio_compra`, `precio_venta`, `ventas`, `fecha`) VALUES
(2, 1, '102', 'Plato Flotante para Allanadora', 'vistas/img/productos/102/940.jpg', 9, 4500, 6300, 0, '2022-12-22 23:56:47'),
(3, 1, '103', 'Compresor de Aire para pintura', 'vistas/img/productos/103/763.jpg', 19, 3000, 4200, 1, '2022-12-22 23:54:55'),
(4, 1, '104', 'Cortadora de Adobe sin Disco ', 'vistas/img/productos/104/957.jpg', 18, 4000, 5600, 2, '2022-12-22 23:54:55'),
(5, 1, '105', 'Cortadora de Piso sin Disco ', 'vistas/img/productos/105/630.jpg', 17, 1540, 2156, 3, '2022-12-22 23:54:55'),
(6, 1, '106', 'Disco Punta Diamante ', 'vistas/img/productos/106/635.jpg', 17, 1100, 1540, 3, '2022-12-22 23:58:06'),
(7, 1, '107', 'Extractor de Aire ', 'vistas/img/productos/107/848.jpg', 19, 1540, 2156, 1, '2022-12-22 23:56:47'),
(8, 1, '108', 'Guadañadora ', 'vistas/img/productos/108/163.jpg', 19, 1540, 2156, 1, '2022-12-22 23:55:49'),
(9, 1, '109', 'Hidrolavadora Eléctrica ', 'vistas/img/productos/109/769.jpg', 17, 2600, 3640, 3, '2022-12-22 23:58:06'),
(10, 1, '110', 'Hidrolavadora Gasolina', 'vistas/img/productos/110/582.jpg', 19, 2210, 3094, 1, '2022-12-22 23:58:06'),
(11, 1, '111', 'Motobomba a Gasolina', 'vistas/img/productos/default/anonymous.png', 20, 2860, 4004, 0, '2017-12-21 21:56:28'),
(12, 1, '112', 'Motobomba El?ctrica', 'vistas/img/productos/default/anonymous.png', 20, 2400, 3360, 0, '2017-12-21 21:56:28'),
(13, 1, '113', 'Sierra Circular ', 'vistas/img/productos/default/anonymous.png', 20, 1100, 1540, 0, '2017-12-21 21:56:28'),
(14, 1, '114', 'Disco de tugsteno para Sierra circular', 'vistas/img/productos/default/anonymous.png', 20, 4500, 6300, 0, '2017-12-21 21:56:28'),
(15, 1, '115', 'Soldador Electrico ', 'vistas/img/productos/default/anonymous.png', 20, 1980, 2772, 0, '2017-12-21 21:56:28'),
(16, 1, '116', 'Careta para Soldador', 'vistas/img/productos/default/anonymous.png', 20, 4200, 5880, 0, '2017-12-21 21:56:28'),
(17, 1, '117', 'Torre de iluminacion ', 'vistas/img/productos/default/anonymous.png', 20, 1800, 2520, 0, '2017-12-21 21:56:28'),
(18, 2, '201', 'Martillo Demoledor de Piso 110V', 'vistas/img/productos/default/anonymous.png', 20, 5600, 7840, 0, '2017-12-21 21:56:28'),
(19, 2, '202', 'Muela o cincel martillo demoledor piso', 'vistas/img/productos/default/anonymous.png', 20, 9600, 13440, 0, '2017-12-21 21:56:28'),
(20, 2, '203', 'Taladro Demoledor de muro 110V', 'vistas/img/productos/default/anonymous.png', 20, 3850, 5390, 0, '2017-12-21 21:56:28'),
(21, 2, '204', 'Muela o cincel martillo demoledor muro', 'vistas/img/productos/default/anonymous.png', 20, 9600, 13440, 0, '2017-12-21 21:56:28'),
(22, 2, '205', 'Taladro Percutor de 1/2 Madera y Metal', 'vistas/img/productos/default/anonymous.png', 20, 8000, 11200, 0, '2017-12-21 22:28:24'),
(23, 2, '206', 'Taladro Percutor SDS Plus 110V', 'vistas/img/productos/default/anonymous.png', 20, 3900, 5460, 0, '2017-12-21 21:56:28'),
(24, 2, '207', 'Taladro Percutor SDS Max 110V (Mineria)', 'vistas/img/productos/default/anonymous.png', 20, 4600, 6440, 0, '2017-12-21 21:56:28'),
(25, 3, '301', 'Andamio colgante', 'vistas/img/productos/default/anonymous.png', 20, 1440, 2016, 0, '2017-12-21 21:56:28'),
(26, 3, '302', 'Distanciador andamio colgante', 'vistas/img/productos/default/anonymous.png', 20, 1600, 2240, 0, '2017-12-21 21:56:28'),
(27, 3, '303', 'Marco andamio modular ', 'vistas/img/productos/default/anonymous.png', 20, 900, 1260, 0, '2017-12-21 21:56:28'),
(28, 3, '304', 'Marco andamio tijera', 'vistas/img/productos/default/anonymous.png', 20, 100, 140, 0, '2017-12-21 21:56:28'),
(29, 3, '305', 'Tijera para andamio', 'vistas/img/productos/default/anonymous.png', 20, 162, 226, 0, '2017-12-21 21:56:28'),
(30, 3, '306', 'Escalera interna para andamio', 'vistas/img/productos/default/anonymous.png', 20, 270, 378, 0, '2017-12-21 21:56:28'),
(31, 3, '307', 'Pasamanos de seguridad', 'vistas/img/productos/default/anonymous.png', 20, 75, 105, 0, '2017-12-21 21:56:28'),
(32, 3, '308', 'Rueda giratoria para andamio', 'vistas/img/productos/default/anonymous.png', 20, 168, 235, 0, '2017-12-21 21:56:28'),
(33, 3, '309', 'Arnes de seguridad', 'vistas/img/productos/default/anonymous.png', 20, 1750, 2450, 0, '2017-12-21 21:56:28'),
(34, 3, '310', 'Eslinga para arnes', 'vistas/img/productos/default/anonymous.png', 20, 175, 245, 0, '2017-12-21 21:56:28'),
(35, 3, '311', 'Plataforma Met?lica', 'vistas/img/productos/default/anonymous.png', 20, 420, 588, 0, '2017-12-21 21:56:28'),
(36, 4, '401', 'Planta Electrica Diesel 6 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3500, 4900, 0, '2017-12-21 21:56:28'),
(37, 4, '402', 'Planta Electrica Diesel 10 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3550, 4970, 0, '2017-12-21 21:56:28'),
(38, 4, '403', 'Planta Electrica Diesel 20 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3600, 5040, 0, '2017-12-21 21:56:28'),
(39, 4, '404', 'Planta Electrica Diesel 30 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3650, 5110, 0, '2017-12-21 21:56:28'),
(40, 4, '405', 'Planta Electrica Diesel 60 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3700, 5180, 0, '2017-12-21 21:56:28'),
(41, 4, '406', 'Planta Electrica Diesel 75 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3750, 5250, 0, '2017-12-21 21:56:28'),
(42, 4, '407', 'Planta Electrica Diesel 100 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3800, 5320, 0, '2017-12-21 21:56:28'),
(43, 4, '408', 'Planta Electrica Diesel 120 Kva', 'vistas/img/productos/default/anonymous.png', 20, 3850, 5390, 0, '2017-12-21 21:56:28'),
(44, 5, '501', 'Escalera de Tijera Aluminio ', 'vistas/img/productos/default/anonymous.png', 20, 350, 490, 0, '2017-12-21 21:56:28'),
(45, 5, '502', 'Extension Electrica ', 'vistas/img/productos/default/anonymous.png', 20, 370, 518, 0, '2017-12-21 21:56:28'),
(46, 5, '503', 'Gato tensor', 'vistas/img/productos/default/anonymous.png', 20, 380, 532, 0, '2017-12-21 21:56:28'),
(47, 5, '504', 'Lamina Cubre Brecha ', 'vistas/img/productos/default/anonymous.png', 20, 380, 532, 0, '2017-12-21 21:56:28'),
(48, 5, '505', 'Llave de Tubo', 'vistas/img/productos/default/anonymous.png', 20, 480, 672, 0, '2017-12-21 21:56:28'),
(49, 5, '506', 'Manila por Metro', 'vistas/img/productos/default/anonymous.png', 20, 600, 840, 0, '2017-12-21 21:56:28'),
(50, 5, '507', 'Polea 2 canales', 'vistas/img/productos/default/anonymous.png', 20, 900, 1260, 0, '2017-12-21 21:56:28'),
(51, 5, '508', 'Tensor', 'vistas/img/productos/508/500.jpg', 19, 100, 140, 1, '2017-12-26 22:26:51'),
(52, 5, '509', 'Bascula ', 'vistas/img/productos/509/878.jpg', 12, 130, 182, 8, '2017-12-26 22:26:51'),
(53, 5, '510', 'Bomba Hidrostatica', 'vistas/img/productos/510/870.jpg', 9, 770, 1078, 11, '2022-12-22 23:34:52'),
(54, 5, '511', 'Chapeta', 'vistas/img/productos/511/239.jpg', 19, 660, 924, 1, '2022-12-23 00:01:07'),
(56, 5, '513', 'Cizalla de Palanca', 'vistas/img/productos/513/445.jpg', 3, 450, 630, 17, '2022-12-23 00:00:20'),
(57, 5, '514', 'Cizalla de Tijera', 'vistas/img/productos/514/249.jpg', 24, 580, 812, 9, '2022-12-23 00:00:20'),
(58, 5, '515', 'Coche llanta neumatica', 'vistas/img/productos/515/174.jpg', 19, 420, 588, 1, '2022-12-23 00:00:20'),
(59, 5, '516', 'Cono slump', 'vistas/img/productos/516/228.jpg', 6, 140, 196, 14, '2022-12-23 01:20:22'),
(60, 5, '517', 'Cortadora de Baldosin', 'vistas/img/productos/517/746.jpg', 18, 930, 1302, 2, '2022-12-22 23:59:44'),
(61, 1, '1222', 'andamios', 'vistas/img/productos/1222/450.jpg', 0, 6, 8.4, 10, '2022-12-21 21:29:16'),
(62, 2, '701', 'taladros para agricultura', 'vistas/img/productos/701/167.jpg', 255477, 14444, 19643.8, 0, '2022-12-22 00:11:46'),
(63, 2, '1222', 'taladro de terreno', 'vistas/img/productos/1222/942.jpg', 0, 5, 7, 4, '2022-12-23 00:13:42'),
(64, 2, '732', 'taladro de tierra', 'vistas/img/productos/732/557.jpg', 0, 5, 5.1, 5, '2022-12-22 23:49:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(1, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/649.jpg', 1, '2022-12-22 13:13:21', '2022-12-22 18:13:21'),
(57, 'Lucas Juan Hernández', 'juan', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/juan/802.jpg', 1, '2022-12-22 13:11:16', '2022-12-22 18:14:26'),
(58, 'Daniel Julio García', 'julio', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'Administrador', 'vistas/img/usuarios/julio/728.jpg', 1, '2022-12-22 13:12:51', '2022-12-22 18:12:51'),
(59, 'Abel Ana Martínez', 'ana', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/ana/678.jpg', 1, '2017-12-26 19:21:40', '2022-12-22 18:17:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `productos` text COLLATE utf8_spanish_ci NOT NULL,
  `impuesto` float NOT NULL,
  `neto` float NOT NULL,
  `total` float NOT NULL,
  `metodo_pago` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `codigo`, `id_cliente`, `id_vendedor`, `productos`, `impuesto`, `neto`, `total`, `metodo_pago`, `fecha`) VALUES
(17, 10001, 3, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"196\",\"total\":\"196\"}]', 1.96, 196, 197.96, 'Efectivo', '2022-12-22 23:38:31'),
(18, 10002, 4, 59, '[{\"id\":\"63\",\"descripcion\":\"taladro de terreno\",\"cantidad\":\"1\",\"stock\":\"3\",\"precio\":\"7\",\"total\":\"7\"}]', 0.21, 7, 7.21, 'Efectivo', '2022-12-22 23:36:06'),
(19, 10003, 5, 59, '[{\"id\":\"8\",\"descripcion\":\"Guadañadora \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"2156\",\"total\":\"2156\"},{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"7\",\"descripcion\":\"Extractor de Aire \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"2156\",\"total\":\"2156\"}]', 1510.88, 7952, 9462.88, 'Efectivo', '2018-01-18 14:57:40'),
(20, 10004, 5, 59, '[{\"id\":\"63\",\"descripcion\":\"taladro de terreno\",\"cantidad\":\"1\",\"stock\":\"2\",\"precio\":\"7\",\"total\":\"7\"}]', 0.07, 7, 7.07, 'Efectivo', '2022-12-22 23:36:43'),
(21, 10005, 6, 57, '[{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"5600\",\"total\":\"5600\"}]', 1064, 5600, 6664, 'Efectivo', '2022-12-22 23:54:55'),
(22, 10006, 10, 1, '[{\"id\":\"3\",\"descripcion\":\"Compresor de Aire para pintura\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"4200\",\"total\":\"4200\"},{\"id\":\"4\",\"descripcion\":\"Cortadora de Adobe sin Disco \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"5600\",\"total\":\"5600\"},{\"id\":\"5\",\"descripcion\":\"Cortadora de Piso sin Disco \",\"cantidad\":\"3\",\"stock\":\"13\",\"precio\":\"2156\",\"total\":\"6468\"},{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"1540\",\"total\":\"1540\"}]', 3383.52, 17808, 21191.5, 'Efectivo', '2018-01-26 15:03:22'),
(23, 10007, 9, 1, '[{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"1540\",\"total\":\"1540\"}]', 92.4, 1540, 1632.4, 'Efectivo', '2022-12-22 23:55:49'),
(24, 10008, 12, 1, '[{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"3640\",\"total\":\"3640\"}]', 36.4, 3640, 3676.4, 'Efectivo', '2022-12-22 23:56:48'),
(25, 10009, 11, 1, '[{\"id\":\"6\",\"descripcion\":\"Disco Punta Diamante \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"1540\",\"total\":\"1540\"}]', 15.4, 1540, 1555.4, 'Efectivo', '2022-12-22 23:58:06'),
(26, 10010, 8, 1, '[{\"id\":\"9\",\"descripcion\":\"Hidrolavadora Eléctrica \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"3640\",\"total\":\"3640\"},{\"id\":\"10\",\"descripcion\":\"Hidrolavadora Gasolina\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"3094\",\"total\":\"3094\"}]', 1279.46, 6734, 8013.46, 'Efectivo', '2017-12-07 15:05:09'),
(27, 10011, 7, 1, '[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"58\",\"descripcion\":\"Coche llanta neumatica\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"588\",\"total\":\"588\"},{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"812\",\"total\":\"812\"}]', 550.62, 2898, 3448.62, 'Efectivo', '2017-12-25 22:23:38'),
(28, 10012, 12, 57, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"196\",\"total\":\"196\"}]', 1.96, 196, 197.96, 'Efectivo', '2022-12-22 23:34:52'),
(29, 10013, 11, 57, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"196\",\"total\":\"196\"}]', 1.96, 196, 197.96, 'Efectivo', '2022-12-22 23:59:45'),
(30, 10014, 10, 57, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"196\",\"total\":\"196\"},{\"id\":\"54\",\"descripcion\":\"Chapeta\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"924\",\"total\":\"924\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"10\",\"stock\":\"9\",\"precio\":\"1078\",\"total\":\"10780\"}]', 2261, 11900, 14161, 'Efectivo', '2017-12-26 22:25:09'),
(31, 10015, 9, 57, '[{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"3\",\"stock\":\"16\",\"precio\":\"812\",\"total\":\"2436\"}]', 462.84, 2436, 2898.84, 'Efectivo', '2017-12-26 22:25:33'),
(32, 10016, 8, 57, '[{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"630\",\"total\":\"630\"}]', 119.7, 630, 749.7, 'Efectivo', '2022-12-23 00:00:20'),
(33, 10017, 7, 57, '[{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"4\",\"stock\":\"7\",\"precio\":\"812\",\"total\":\"3248\"},{\"id\":\"52\",\"descripcion\":\"Bascula \",\"cantidad\":\"3\",\"stock\":\"17\",\"precio\":\"182\",\"total\":\"546\"},{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"2\",\"stock\":\"18\",\"precio\":\"560\",\"total\":\"1120\"},{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"630\",\"total\":\"630\"}]', 1053.36, 5544, 6597.36, 'Efectivo', '2017-12-26 22:26:28'),
(34, 10018, 6, 57, '[{\"id\":\"51\",\"descripcion\":\"Tensor\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"140\",\"total\":\"140\"},{\"id\":\"52\",\"descripcion\":\"Bascula \",\"cantidad\":\"5\",\"stock\":\"12\",\"precio\":\"182\",\"total\":\"910\"},{\"id\":\"53\",\"descripcion\":\"Bomba Hidrostatica\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"1078\",\"total\":\"1078\"}]', 404.32, 2128, 2532.32, 'Efectivo', '2017-12-26 22:26:51'),
(35, 10019, 5, 57, '[{\"id\":\"56\",\"descripcion\":\"Cizalla de Palanca\",\"cantidad\":\"15\",\"stock\":\"3\",\"precio\":\"630\",\"total\":\"9450\"},{\"id\":\"55\",\"descripcion\":\"Cilindro muestra de concreto\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"560\",\"total\":\"560\"}]', 1901.9, 10010, 11911.9, 'Efectivo', '2017-12-26 22:27:13'),
(37, 10021, 3, 1, '[{\"id\":\"60\",\"descripcion\":\"Cortadora de Baldosin\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"1302\",\"total\":\"1302\"},{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"196\",\"total\":\"196\"}]', 149.8, 1498, 1647.8, 'Efectivo', '2018-02-06 22:47:02'),
(38, 10022, 3, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"196\",\"total\":\"196\"}]', 3.92, 196, 199.92, 'Efectivo', '2022-12-17 03:38:34'),
(39, 10023, 3, 1, '[{\"id\":\"57\",\"descripcion\":\"Cizalla de Tijera\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"812\",\"total\":\"812\"}]', 8.12, 812, 820.12, 'Efectivo', '2022-12-17 03:43:16'),
(40, 10024, 3, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"196\",\"total\":\"196\"}]', 1.96, 196, 197.96, 'Efectivo', '2022-12-17 03:44:17'),
(41, 10025, 4, 1, '[{\"id\":\"61\",\"descripcion\":\"andamios\",\"cantidad\":\"9\",\"stock\":\"1\",\"precio\":\"8.4\",\"total\":\"75.6\"}]', 3.024, 75.6, 78.624, 'Efectivo', '2022-12-21 00:36:12'),
(42, 10026, 5, 1, '[{\"id\":\"61\",\"descripcion\":\"andamios\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"8.4\",\"total\":\"8.4\"}]', 0.168, 8.4, 8.568, 'Efectivo', '2022-12-21 21:29:16'),
(43, 10027, 13, 1, '[{\"id\":\"64\",\"descripcion\":\"taladro de tierra\",\"cantidad\":\"4\",\"stock\":\"1\",\"precio\":\"5.1\",\"total\":\"20.4\"}]', 0.408, 20.4, 20.808, 'Efectivo', '2022-12-22 23:33:27'),
(44, 10028, 3, 1, '[{\"id\":\"63\",\"descripcion\":\"taladro de terreno\",\"cantidad\":\"1\",\"stock\":\"1\",\"precio\":\"7\",\"total\":\"7\"}]', 0.21, 7, 7.21, 'Efectivo', '2022-12-22 23:52:23'),
(45, 10029, 12, 1, '[{\"id\":\"63\",\"descripcion\":\"taladro de terreno\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"7\",\"total\":\"7\"}]', 0.21, 7, 7.21, 'Efectivo', '2022-12-23 00:13:42'),
(46, 10030, 12, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"196\",\"total\":\"196\"}]', 1.96, 196, 197.96, 'Efectivo', '2022-12-23 00:17:01'),
(47, 10031, 8, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"10\",\"precio\":\"196\",\"total\":\"196\"}]', 5.88, 196, 201.88, 'Efectivo', '2022-12-23 00:22:45'),
(48, 10032, 7, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"9\",\"precio\":\"196\",\"total\":\"196\"}]', 7.84, 196, 203.84, 'Efectivo', '2022-12-23 00:33:05'),
(49, 10033, 11, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"196\",\"total\":\"196\"}]', 3.92, 196, 199.92, 'TC-6', '2022-12-23 01:06:17'),
(50, 10034, 6, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"7\",\"precio\":\"196\",\"total\":\"196\"}]', 3.92, 196, 199.92, 'TD-4', '2022-12-23 01:08:03'),
(51, 10035, 10, 1, '[{\"id\":\"59\",\"descripcion\":\"Cono slump\",\"cantidad\":\"1\",\"stock\":\"6\",\"precio\":\"196\",\"total\":\"196\"}]', 3.92, 196, 199.92, 'TC-4', '2022-12-23 01:20:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
