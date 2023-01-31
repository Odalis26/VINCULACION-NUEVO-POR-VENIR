-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2023 a las 00:12:03
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
(1, 'Productos agrícolas', '2022-12-23 03:01:40'),
(2, 'Productos pecuarios', '2022-12-23 03:02:20'),
(3, 'medicina animal', '2022-12-23 03:02:54'),
(4, 'semillas', '2022-12-23 03:05:28'),
(5, 'fertilizantes ', '2022-12-23 12:09:15'),
(6, 'agroquímicos', '2022-12-23 03:06:19'),
(7, 'herramientas de agricultura', '2022-12-22 02:04:03'),
(11, 'Hortalizas', '2023-01-26 21:53:22');

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
(14, 'Odalis Rea', 1752442267, 'ody@gmail.com', '(09) 9355-6321', 'Las Casas', '2000-05-16', 34, '2023-01-26 16:48:04', '2023-01-26 22:51:33'),
(16, 'José Centeno', 1754223657, 'jose@gmail.com', '(09) 9856-3214', 'La Gasca ', '2000-01-13', 49, '2023-01-26 16:02:09', '2023-01-26 21:02:09'),
(17, 'Boris Centeno', 1752442267, 'boris@gmail.com', '(09) 9956-9874', 'Las Casas', '2000-02-20', 7, '2023-01-26 16:59:45', '2023-01-26 21:59:45'),
(18, 'Camila Centeno', 1752442267, 'camila@gmail.com', '(09) 9988-7755', 'La Gasca ', '1999-01-25', 0, '0000-00-00 00:00:00', '2023-01-26 22:57:38');

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
(2, 1, '102', 'Saco  de 4kg de Zanahorias', 'vistas/img/productos/102/944.jpg', 0, 44, 55, 9, '2023-01-26 21:59:45'),
(3, 1, '103', 'Saco de 2kg de Sandias', 'vistas/img/productos/103/898.jpg', 16, 3, 4.2, 4, '2023-01-26 22:51:33'),
(4, 1, '104', 'Saco de 1kg de Maíz dulce', 'vistas/img/productos/104/104.jpg', 12, 4, 5.52, 8, '2023-01-26 22:51:33'),
(5, 1, '105', 'Saco de 1kg de Piñas', 'vistas/img/productos/105/997.jpg', 14, 15, 17.25, 6, '2023-01-26 22:51:33'),
(6, 1, '106', 'Saco de 1kg de Coles ', 'vistas/img/productos/106/508.jpg', 14, 11, 14.52, 6, '2023-01-26 22:51:33'),
(7, 1, '107', 'Saco de 2kg de Mangos', 'vistas/img/productos/107/379.jpg', 12, 15, 19.35, 8, '2023-01-26 22:51:33'),
(8, 1, '108', 'Saco de 1kg de Guayabas', 'vistas/img/productos/108/677.jpg', 11, 15, 20.4, 9, '2023-01-26 21:59:45'),
(9, 1, '109', 'Saco de 2kg de Chiles ', 'vistas/img/productos/109/341.jpg', 14, 26, 35.36, 6, '2023-01-26 21:00:45'),
(10, 1, '110', 'Saco de 3kg de Pimientos', 'vistas/img/productos/110/457.jpg', 14, 22, 28.6, 6, '2023-01-26 21:02:09'),
(11, 1, '111', 'Saco de 3kg de Fresas', 'vistas/img/productos/111/548.jpg', 12, 28, 36.68, 8, '2023-01-26 22:51:33'),
(12, 1, '112', 'Saco de 1kg de Limones', 'vistas/img/productos/112/705.jpg', 13, 24, 33.6, 7, '2023-01-26 22:51:33'),
(13, 1, '113', 'Saco de 2kg de Aguacates', 'vistas/img/productos/113/562.jpg', 15, 11, 15.4, 5, '2023-01-26 22:51:33'),
(14, 1, '114', 'Saco de 1kg de bananas', 'vistas/img/productos/114/750.jpg', 16, 44, 61.6, 4, '2023-01-26 21:02:59'),
(15, 1, '115', 'Saco de 4kg de pepinillos', 'vistas/img/productos/115/117.jpg', 17, 19, 24.32, 3, '2023-01-26 21:02:59'),
(16, 1, '116', 'Saco de 2kg de tomates ', 'vistas/img/productos/116/499.jpg', 17, 42, 58.8, 3, '2023-01-26 21:02:59'),
(17, 1, '117', 'Saco de 3kg de Cebollas ', 'vistas/img/productos/117/872.jpg', 15, 18, 25.2, 5, '2023-01-26 21:02:59'),
(18, 2, '201', 'carne de cerdo de 5kg', 'vistas/img/productos/201/208.jpg', 16, 56, 78.4, 4, '2023-01-26 21:02:59'),
(19, 2, '202', 'Miel de 1L', 'vistas/img/productos/202/855.jpg', 17, 96, 97.92, 3, '2023-01-26 21:01:25'),
(20, 2, '203', 'Carne de res de 3kg ', 'vistas/img/productos/203/664.jpg', 17, 38, 48.26, 3, '2023-01-26 21:01:25'),
(21, 2, '204', 'Bolsa de 2kg de huevos', 'vistas/img/productos/204/584.jpg', 16, 9, 11.97, 4, '2023-01-26 21:02:59'),
(22, 2, '205', 'Gallinas', 'vistas/img/productos/205/308.jpg', 18, 8, 11.2, 2, '2023-01-09 23:31:52'),
(23, 2, '206', 'Groning Plus 10 L Abono a base de aminoácidos Mejora la nutrición de tu cultivo', 'vistas/img/productos/206/782.jpg', 18, 39, 54.6, 2, '2023-01-26 21:55:06'),
(24, 2, '207', 'Velox L bionutriente sólido lisina 6 kg Nutriente biológico que favorece la floración y crecimiento del fruto', 'vistas/img/productos/207/138.jpg', 18, 46, 64.4, 2, '2023-01-07 17:40:29'),
(25, 3, '301', 'Primaxtend Abono 6 L para aplicación foliar en todo tipo de cultivos Induce la floración y cuajado y amarre del fruto', 'vistas/img/productos/301/880.jpg', 18, 14, 18.76, 2, '2023-01-07 17:40:29'),
(26, 3, '302', 'Maxbor 3 L Sulfato de Magnesio con Boro', 'vistas/img/productos/302/974.jpg', 19, 16, 21.92, 1, '2023-01-07 17:01:08'),
(27, 3, '303', 'Iron Plus 10 Litros para solución de abono a base de hierro con tecnología ACT para aplicación foliar o fertirriego en todo tipo de cultivos', 'vistas/img/productos/303/343.jpg', 18, 9, 12.24, 2, '2023-01-09 23:20:39'),
(28, 3, '304', 'Abono Solido LTA 10 Kg  para todo tipo de cultivos Favorece brotación y crecimiento y floración de las plantas', 'vistas/img/productos/304/545.jpg', 18, 10, 13.3, 2, '2023-01-09 23:20:39'),
(29, 3, '305', 'Cefa Milk Forte Infusión antibiótica antiinflamatoria para vacas en lactación Para el tratamiento de las mastitis en bovinos y ovinos y caprinos en producción láctea', 'vistas/img/productos/305/767.png', 19, 16, 21.92, 1, '2023-01-07 17:00:17'),
(30, 3, '306', 'Amoxigentin Combinación antibiótica sinérgica de amplio espectro de 100 mL Para el tratamiento de enteritis e infecciones  tales como artritis y meningitis y necrosis de la oreja e infecciones urinarias Para  caprinos y  equinos y ovinos y  porcinos y  vacunos', 'vistas/img/productos/306/385.png', 18, 27, 37.8, 2, '2023-01-07 17:38:41'),
(31, 3, '307', 'Tylvax OS Antibiótico macrólido de última generación 1L Para aves con  Enfermedad respiratoria crónica por micoplasmosis y enteritis necrótica y enteritis bacteriana e infecciones por Ornithobacterium rhinotracheale Porcinos con Neumonía micoplásmica enzoótica y ileítis y disentería y colitis porcina', 'vistas/img/productos/307/543.png', 18, 16, 22.4, 2, '2023-01-07 17:38:41'),
(32, 3, '308', 'Tylvax WS Antibiótico Macrólido de Última Generación de 1kg Para Pollos y gallos y pavos enfermedad respiratoria crónica CRD y Cerdos con enfermedades de micoplasmosis y neumonía micoplásmica enzoótica', 'vistas/img/productos/308/721.png', 17, 15, 21, 3, '2023-01-09 23:20:39'),
(33, 3, '309', 'Tylvax Px Antibiótico Macrólido de Última Generación de 1kg Para el tratamiento y prevención de las enfermedades entéricas y respiratorias Para cerdos y pollos y pavos', 'vistas/img/productos/309/227.png', 19, 14, 18.62, 1, '2023-01-07 16:59:13'),
(34, 3, '310', 'Tylvax C Px Asociación Sinérgica Tetraciclina y Macrólido de Última Generación y Amplio Espectro de 1kg  Para el tratamiento y prevención de las enfermedades entéricas y respiratorias y mixtas o complicadas Para aves como  pavos y pollos y cerdos', 'vistas/img/productos/310/880.png', 19, 13, 17.29, 1, '2023-01-07 16:59:13'),
(35, 3, '311', 'Aureomycin G200 Px y Aureocyclin  G200 Px Antibiótico  para infecciones sistémicas de 25kg para aves y porcino', 'vistas/img/productos/311/536.png', 19, 12, 16.8, 1, '2023-01-09 22:59:21'),
(36, 4, '401', 'Saco de 2kg de semillas de girasol ', 'vistas/img/productos/401/965.jpg', 20, 11, 15.4, 0, '2023-01-09 22:59:21'),
(37, 4, '402', 'Saco de 2kg de Chía ', 'vistas/img/productos/402/836.jpg', 20, 10, 13.7, 0, '2023-01-09 22:59:21'),
(38, 4, '403', 'Saco de 2kg de semillas de Calabaza', 'vistas/img/productos/403/784.jpg', 20, 36, 48.6, 0, '2023-01-09 21:42:04'),
(39, 4, '404', ' Saco de 5kg de Cáñamo', 'vistas/img/productos/404/868.jpg', 19, 33, 46.2, 1, '2023-01-09 23:22:39'),
(40, 4, '405', 'Saco de 3kg de Sésamo', 'vistas/img/productos/405/857.jpg', 20, 31, 42.78, 0, '2023-01-09 21:40:33'),
(41, 4, '406', ' Saco de 2kg de Amapola', 'vistas/img/productos/406/390.jpg', 20, 36, 50.4, 0, '2023-01-09 21:38:30'),
(42, 4, '407', ' Saco  de 1kg de Linaza', 'vistas/img/productos/407/908.jpg', 20, 31, 43.4, 0, '2023-01-09 21:39:54'),
(43, 4, '408', ' Saco  de 2 kg de Quinoa', 'vistas/img/productos/408/349.jpg', 17, 39, 53.82, 3, '2023-01-09 23:14:16'),
(44, 5, '501', 'Nitrato de Amonio  Fertilizante Nutrientes principales   N y p2o5', 'vistas/img/productos/501/433.jpg', 20, 35, 49, 0, '2023-01-07 16:57:41'),
(45, 5, '502', 'Ácido Bórico  Fertilizante de 25kg Nutrientes principales   B2O3  y B', 'vistas/img/productos/502/926.jpg', 20, 37, 51.8, 0, '2023-01-07 16:57:41'),
(46, 5, '503', 'Ácidos húmicos sólidos para el cuidado de los cultivos de 2 kg', 'vistas/img/productos/503/318.jpg', 19, 39, 54.6, 1, '2023-01-09 23:11:53'),
(47, 5, '504', 'Solución de calcio complejado se aplica a través de sistemas de fertirrigación de 5L', 'vistas/img/productos/504/651.jpg', 19, 38, 53.2, 1, '2023-01-09 23:17:39'),
(48, 5, '505', 'Abonos naturales aminoácidos para aplicación foliar y radicular 5L', 'vistas/img/productos/505/947.jpg', 19, 48, 67.2, 1, '2023-01-09 22:59:21'),
(49, 5, '506', 'Fertilizante orgánico  estable y homogéneo y de alta calidad  de 25kg', 'vistas/img/productos/506/961.jpg', 19, 60, 84, 1, '2023-01-09 23:15:55'),
(50, 5, '507', 'Urea Granular FERTISUR  Fertilizante de 50kg  Es el fertilizante más usado y de mayor concentración de Nitrógeno Para el  incremento de proteínas en la plantas', 'vistas/img/productos/507/105.jpg', 19, 9, 12.6, 1, '2023-01-09 23:19:26'),
(51, 5, '508', 'Fertilizantes orgáno minerales elevado contenido orgánico  con saco de 25 kg', 'vistas/img/productos/508/752.jpg', 18, 10, 14, 2, '2023-01-09 23:25:06'),
(52, 5, '509', 'Abonos orgánicos NPK 4 apto para agricultura ecológica de 25kg', 'vistas/img/productos/509/153.jpg', 17, 13, 18.2, 3, '2023-01-09 23:25:06'),
(53, 5, '510', 'Fertilizante organo mineral ecológico NPK especial para plantas hortícolas de 25kg', 'vistas/img/productos/510/693.jpg', 18, 77, 79.31, 2, '2023-01-26 20:59:16'),
(54, 5, '511', 'Fertilizante orgánico a base de estiércol natural de 25kg', 'vistas/img/productos/511/337.jpg', 20, 66, 92.4, 0, '2023-01-26 20:59:16'),
(56, 5, '513', 'Sulfato potásico ecológico de sulfato potásico para nutrigación en todos los cultivos de 25kg', 'vistas/img/productos/513/296.jpg', 17, 45, 63, 3, '2023-01-26 20:59:54'),
(57, 5, '514', 'Mezcla sólida de micronutrientes minerales con Bolsas de 3Kg', 'vistas/img/productos/514/474.jpg', 31, 58, 81.2, 2, '2023-01-26 20:59:54'),
(58, 5, '515', 'Abono orgánico de origen animal y vegetal de sacos de 25kg', 'vistas/img/productos/515/510.jpg', 15, 42, 58.8, 5, '2023-01-26 21:59:45'),
(59, 5, '516', 'Abono líquido vegetal constituido por algas marinas ', 'vistas/img/productos/516/983.jpg', 18, 14, 20.02, 2, '2023-01-26 21:03:59'),
(60, 5, '517', 'Formulado rico en aminoácidos libres de rápida absorción de 5 L', 'vistas/img/productos/517/416.jpg', 14, 9, 12.6, 6, '2023-01-26 21:03:59'),
(61, 2, '1222', 'Carne de pollo  entero', 'vistas/img/productos/1222/914.jpg', 6, 5, 7, 10, '2023-01-26 22:51:33'),
(62, 2, '701', 'Gallos', 'vistas/img/productos/701/523.jpg', 254, 14, 19.6, 11, '2023-01-26 22:51:33'),
(64, 2, '732', 'Pollos', 'vistas/img/productos/732/727.jpg', 2, 7, 9.8, 13, '2023-01-26 22:51:33');

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
(1, 'Administrador', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/649.jpg', 1, '2023-01-26 16:56:49', '2023-01-26 21:56:49'),
(57, 'Lucas Juan Hernández', 'juan', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/juan/802.jpg', 1, '2022-12-22 13:11:16', '2022-12-22 18:14:26'),
(58, 'Daniel Julio García', 'julio', '$2a$07$asxx54ahjppf45sd87a5auGZEtGHuyZwm.Ur.FJvWLCql3nmsMbXy', 'Administrador', 'vistas/img/usuarios/julio/728.jpg', 1, '2022-12-22 13:12:51', '2022-12-22 18:12:51'),
(59, 'Abel Ana Martínez', 'ana', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Especial', 'vistas/img/usuarios/ana/678.jpg', 1, '2023-01-26 16:52:07', '2023-01-26 21:52:07');

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
(55, 10001, 14, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255475\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"60\",\"descripcion\":\"Formulado rico en aminoácidos libres de rápida absorción de 5 L\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"12.6\",\"total\":\"12.6\"},{\"id\":\"58\",\"descripcion\":\"Abono orgánico de origen animal y vegetal de sacos de 25kg\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"58.8\",\"total\":\"58.8\"},{\"id\":\"18\",\"descripcion\":\"carne de cerdo de 5kg\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"78.4\",\"total\":\"78.4\"},{\"id\":\"17\",\"descripcion\":\"Saco de 3kg de Cebollas \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"25.2\",\"total\":\"25.2\"},{\"id\":\"16\",\"descripcion\":\"Saco de 2kg de tomates \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"58.8\",\"total\":\"58.8\"},{\"id\":\"15\",\"descripcion\":\"Saco de 4kg de pepinillos\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"24.32\",\"total\":\"24.32\"},{\"id\":\"14\",\"descripcion\":\"Saco de 1kg de bananas\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"61.6\",\"total\":\"61.6\"},{\"id\":\"13\",\"descripcion\":\"Saco de 2kg de Aguacates\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"15.4\",\"total\":\"15.4\"},{\"id\":\"21\",\"descripcion\":\"Bolsa de 2kg de huevos\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"11.97\",\"total\":\"11.97\"}]', 11.3637, 378.79, 390.154, 'Efectivo', '2023-01-26 21:02:59'),
(56, 10002, 14, 59, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"7\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255474\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"60\",\"descripcion\":\"Formulado rico en aminoácidos libres de rápida absorción de 5 L\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"12.6\",\"total\":\"12.6\"},{\"id\":\"21\",\"descripcion\":\"Bolsa de 2kg de huevos\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"11.97\",\"total\":\"11.97\"},{\"id\":\"20\",\"descripcion\":\"Carne de res de 3kg \",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"48.26\",\"total\":\"48.26\"},{\"id\":\"19\",\"descripcion\":\"Miel de 1L\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"97.92\",\"total\":\"97.92\"},{\"id\":\"18\",\"descripcion\":\"carne de cerdo de 5kg\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"78.4\",\"total\":\"78.4\"}]', 33.702, 280.85, 314.552, 'Efectivo', '2023-01-26 21:01:25'),
(59, 10003, 16, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"6\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255473\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"60\",\"descripcion\":\"Formulado rico en aminoácidos libres de rápida absorción de 5 L\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"12.6\",\"total\":\"12.6\"},{\"id\":\"53\",\"descripcion\":\"Fertilizante organo mineral ecológico NPK especial para plantas hortícolas de 25kg\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"79.31\",\"total\":\"79.31\"}]', 4.9444, 123.61, 128.554, 'Efectivo', '2023-01-26 20:55:56'),
(60, 10004, 16, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"5\",\"precio\":\"5.1\",\"total\":\"5.1\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255472\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"58\",\"descripcion\":\"Abono orgánico de origen animal y vegetal de sacos de 25kg\",\"cantidad\":\"1\",\"stock\":\"19\",\"precio\":\"58.8\",\"total\":\"58.8\"},{\"id\":\"57\",\"descripcion\":\"Mezcla sólida de micronutrientes minerales con Bolsas de 3Kg\",\"cantidad\":\"1\",\"stock\":\"32\",\"precio\":\"81.2\",\"total\":\"81.2\"},{\"id\":\"56\",\"descripcion\":\"Sulfato potásico ecológico de sulfato potásico para nutrigación en todos los cultivos de 25kg\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"63\",\"total\":\"63\"}]', 7.041, 234.7, 241.741, 'Efectivo', '2023-01-13 16:20:00'),
(62, 10005, 16, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"4\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255471\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"60\",\"descripcion\":\"Formulado rico en aminoácidos libres de rápida absorción de 5 L\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"12.6\",\"total\":\"12.6\"},{\"id\":\"53\",\"descripcion\":\"Fertilizante organo mineral ecológico NPK especial para plantas hortícolas de 25kg\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"79.31\",\"total\":\"79.31\"},{\"id\":\"2\",\"descripcion\":\"Saco  de 4kg de Zanahorias\",\"cantidad\":\"3\",\"stock\":\"1\",\"precio\":\"55\",\"total\":\"165\"}]', 11.5444, 288.61, 300.154, 'Efectivo', '2023-01-26 20:57:38'),
(63, 10006, 14, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"3\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255470\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"10\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"60\",\"descripcion\":\"Formulado rico en aminoácidos libres de rápida absorción de 5 L\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"12.6\",\"total\":\"12.6\"},{\"id\":\"59\",\"descripcion\":\"Abono líquido vegetal constituido por algas marinas \",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"20.02\",\"total\":\"20.02\"},{\"id\":\"58\",\"descripcion\":\"Abono orgánico de origen animal y vegetal de sacos de 25kg\",\"cantidad\":\"1\",\"stock\":\"18\",\"precio\":\"58.8\",\"total\":\"58.8\"},{\"id\":\"3\",\"descripcion\":\"Saco de 2kg de Sandias\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"4.2\",\"total\":\"4.2\"},{\"id\":\"4\",\"descripcion\":\"Saco de 1kg de Maíz dulce\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"5.52\",\"total\":\"5.52\"},{\"id\":\"5\",\"descripcion\":\"Saco de 1kg de Piñas\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"17.25\",\"total\":\"17.25\"},{\"id\":\"6\",\"descripcion\":\"Saco de 1kg de Coles \",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"14.52\",\"total\":\"14.52\"},{\"id\":\"7\",\"descripcion\":\"Saco de 2kg de Mangos\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"19.35\",\"total\":\"19.35\"}]', 3.6792, 183.96, 187.639, 'Efectivo', '2023-01-26 21:03:59'),
(64, 10007, 16, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"2\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255469\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"9\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"11\",\"descripcion\":\"Saco de 3kg de Fresas\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"36.68\",\"total\":\"36.68\"},{\"id\":\"10\",\"descripcion\":\"Saco de 3kg de Pimientos\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"28.6\",\"total\":\"28.6\"},{\"id\":\"9\",\"descripcion\":\"Saco de 2kg de Chiles \",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"35.36\",\"total\":\"35.36\"},{\"id\":\"8\",\"descripcion\":\"Saco de 1kg de Guayabas\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"20.4\",\"total\":\"20.4\"},{\"id\":\"7\",\"descripcion\":\"Saco de 2kg de Mangos\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"19.35\",\"total\":\"19.35\"}]', 3.4418, 172.09, 175.532, 'Efectivo', '2023-01-26 21:00:45'),
(65, 10008, 16, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"1\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"8\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"255468\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"58\",\"descripcion\":\"Abono orgánico de origen animal y vegetal de sacos de 25kg\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"58.8\",\"total\":\"58.8\"},{\"id\":\"57\",\"descripcion\":\"Mezcla sólida de micronutrientes minerales con Bolsas de 3Kg\",\"cantidad\":\"1\",\"stock\":\"31\",\"precio\":\"81.2\",\"total\":\"81.2\"},{\"id\":\"56\",\"descripcion\":\"Sulfato potásico ecológico de sulfato potásico para nutrigación en todos los cultivos de 25kg\",\"cantidad\":\"1\",\"stock\":\"17\",\"precio\":\"63\",\"total\":\"63\"},{\"id\":\"2\",\"descripcion\":\"Saco  de 4kg de Zanahorias\",\"cantidad\":\"1\",\"stock\":\"4\",\"precio\":\"55\",\"total\":\"55\"},{\"id\":\"9\",\"descripcion\":\"Saco de 2kg de Chiles \",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"35.36\",\"total\":\"35.36\"},{\"id\":\"8\",\"descripcion\":\"Saco de 1kg de Guayabas\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"20.4\",\"total\":\"20.4\"},{\"id\":\"7\",\"descripcion\":\"Saco de 2kg de Mangos\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"19.35\",\"total\":\"19.35\"}]', 10.9443, 364.81, 375.754, 'Efectivo', '2023-01-26 20:59:54'),
(66, 10009, 16, 1, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"9.8\",\"total\":\"5.1\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"6\",\"precio\":\"7\",\"total\":\"7\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"254\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"3\",\"descripcion\":\"Saco de 2kg de Sandias\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"4.2\",\"total\":\"4.2\"},{\"id\":\"4\",\"descripcion\":\"Saco de 1kg de Maíz dulce\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"5.52\",\"total\":\"5.52\"},{\"id\":\"5\",\"descripcion\":\"Saco de 1kg de Piñas\",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"17.25\",\"total\":\"17.25\"},{\"id\":\"6\",\"descripcion\":\"Saco de 1kg de Coles \",\"cantidad\":\"1\",\"stock\":\"16\",\"precio\":\"14.52\",\"total\":\"14.52\"},{\"id\":\"7\",\"descripcion\":\"Saco de 2kg de Mangos\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"19.35\",\"total\":\"19.35\"},{\"id\":\"8\",\"descripcion\":\"Saco de 1kg de Guayabas\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"20.4\",\"total\":\"20.4\"},{\"id\":\"10\",\"descripcion\":\"Saco de 3kg de Pimientos\",\"cantidad\":\"1\",\"stock\":\"14\",\"precio\":\"28.6\",\"total\":\"28.6\"},{\"id\":\"11\",\"descripcion\":\"Saco de 3kg de Fresas\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"36.68\",\"total\":\"36.68\"},{\"id\":\"12\",\"descripcion\":\"Saco de 1kg de Limones\",\"cantidad\":\"1\",\"stock\":\"12\",\"precio\":\"33.6\",\"total\":\"33.6\"}]', 2.1182, 211.82, 213.938, 'Efectivo', '2023-01-26 21:02:09'),
(68, 10011, 14, 59, '[{\"id\":\"64\",\"descripcion\":\"Pollos\",\"cantidad\":\"1\",\"stock\":\"1\",\"precio\":\"9.8\",\"total\":\"9.8\"},{\"id\":\"62\",\"descripcion\":\"Gallos\",\"cantidad\":\"1\",\"stock\":\"253\",\"precio\":\"19.6\",\"total\":\"19.6\"},{\"id\":\"61\",\"descripcion\":\"Carne de pollo  entero\",\"cantidad\":\"1\",\"stock\":\"5\",\"precio\":\"7\",\"total\":\"7\"}]', 0.728, 36.4, 37.128, 'Efectivo', '2023-01-26 21:48:04'),
(69, 10012, 17, 59, '[{\"id\":\"2\",\"descripcion\":\"Saco  de 4kg de Zanahorias\",\"cantidad\":\"1\",\"stock\":\"0\",\"precio\":\"55\",\"total\":\"55\"},{\"id\":\"4\",\"descripcion\":\"Saco de 1kg de Maíz dulce\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"5.52\",\"total\":\"5.52\"},{\"id\":\"5\",\"descripcion\":\"Saco de 1kg de Piñas\",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"17.25\",\"total\":\"17.25\"},{\"id\":\"6\",\"descripcion\":\"Saco de 1kg de Coles \",\"cantidad\":\"1\",\"stock\":\"13\",\"precio\":\"14.52\",\"total\":\"14.52\"},{\"id\":\"7\",\"descripcion\":\"Saco de 2kg de Mangos\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"19.35\",\"total\":\"19.35\"},{\"id\":\"8\",\"descripcion\":\"Saco de 1kg de Guayabas\",\"cantidad\":\"1\",\"stock\":\"11\",\"precio\":\"20.4\",\"total\":\"20.4\"},{\"id\":\"58\",\"descripcion\":\"Abono orgánico de origen animal y vegetal de sacos de 25kg\",\"cantidad\":\"1\",\"stock\":\"15\",\"precio\":\"58.8\",\"total\":\"58.8\"}]', 5.7252, 190.84, 196.565, 'Efectivo', '2023-01-26 22:00:05');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
