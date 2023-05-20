-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2023 a las 03:36:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_grado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_prestamo` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `valor_prestamo` int(70) NOT NULL,
  `tiempo_pago` varchar(70) NOT NULL,
  `deuda_actual` int(11) NOT NULL,
  `interes` varchar(150) NOT NULL,
  `estado` text NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `id_usuario`, `valor_prestamo`, `tiempo_pago`, `deuda_actual`, `interes`, `estado`) VALUES
(1, 10, 2000000, '2 meses', 2000000, '2', 'Activo'),
(2, 10, 500000, '5 meses', 0, '5', 'Activo'),
(3, 10, 17000000, '1 año', 17000000, '6', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyectos` int(5) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `objetivo` varchar(150) NOT NULL,
  `costo_fijos` varchar(70) NOT NULL,
  `costos_variables` varchar(70) NOT NULL,
  `presupuesto` varchar(150) NOT NULL,
  `estado` varchar(30) NOT NULL DEFAULT 'Activo',
  `categoria` text NOT NULL,
  `ahorro_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyectos`, `id_usuario`, `objetivo`, `costo_fijos`, `costos_variables`, `presupuesto`, `estado`, `categoria`, `ahorro_total`) VALUES
(1, 10, 'vieaje cancun', '200000', '1212', '33332', '', 'largo plazo', 0),
(2, 2, 'Comprar avion', '12', '2', '50', '', 'medio plazo', 0),
(3, 0, 'Comprar apartamento', '11111', '22222', '33333', 'Activo', 'corto plazo', 0),
(4, 10, 'nicolas', '22', '33', '44', 'Activo', 'Largo Plaso', 0),
(5, 10, 'compra carro', '22222', '3333', '4444', 'Activo', 'Mediano Plaso', 589);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(5) NOT NULL,
  `rol` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol`) VALUES
(1, 'comercio'),
(2, 'natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tips`
--

CREATE TABLE `tips` (
  `id_tip` int(4) NOT NULL,
  `tip` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tips`
--

INSERT INTO `tips` (`id_tip`, `tip`) VALUES
(1, 'Haz un presupuesto mensual y cúmplelo.'),
(2, 'Identifica tus gastos fijos y variables.'),
(3, 'Prioriza tus gastos esenciales.'),
(4, 'Ahorra un porcentaje de tus ingresos.'),
(5, 'Reduce tus gastos innecesarios.'),
(6, 'Evita las deudas innecesarias.'),
(7, 'Usa una tarjeta de crédito solo en casos de emergencia.'),
(8, 'No gastes más de lo que ganas.'),
(9, 'Registra tus ingresos y gastos.'),
(10, 'Aprende a cocinar para ahorrar dinero.'),
(11, 'Compra en tiendas de segunda mano o de descuento.'),
(12, 'Usa cupones y promociones.'),
(13, 'Comparte gastos con amigos.'),
(14, 'Aprende a decir “no” a las compras impulsivas.'),
(15, 'No te compares con los demás en cuanto a gastos.'),
(16, 'Aprende a invertir en fondos de inversión.'),
(17, 'Consulta a un asesor financiero antes de invertir.'),
(18, 'No inviertas en algo que no entiendes.'),
(19, 'Invierte en educación y formación.'),
(20, 'Busca trabajos temporales o de medio tiempo para obtener ingresos adicionales.'),
(21, 'Considera trabajar como freelancer o en línea.'),
(22, 'Abre una cuenta de ahorros.'),
(23, 'Considera abrir una cuenta de inversión.'),
(24, 'No te endeudes para pagar cosas de lujo.'),
(25, 'Paga tus deudas a tiempo.'),
(26, 'Evita las deudas con altos intereses.'),
(27, 'Mantén una buena reputación crediticia.'),
(28, 'No solicites más crédito del que puedes manejar.'),
(29, 'Mantén un fondo de emergencia.'),
(30, 'Usa aplicaciones para hacer un seguimiento de tus finanzas.'),
(31, 'Lee libros y artículos sobre finanzas personales.'),
(32, 'Aprende sobre impuestos y deducciones fiscales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(5) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `contraseña` varchar(70) NOT NULL,
  `correo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `contraseña`, `correo`) VALUES
(1, '1052982260', '1052982260', 'nivarmo00@gmail.com'),
(2, 'Nicolas Vargas', '2010', 'nicovarmo9@hotmail.com'),
(3, 'Sergio', 'uncatolica', 'checho21@hotmail.com'),
(4, 'jorge', 'thor2010', 'navargas61@ucatolica.edu.co'),
(5, 'jorge', 'thor', 'navargas61@ucatolica.edu.co'),
(6, 'jorge', '1052982260', 'nicovarmo9@hotmail.com'),
(7, 'pepe', '112233', 'hola@hotmail.com'),
(8, 'pepe', '112233', 'hola@hotmail.com'),
(10, 'Nicolas Montealegre', 'bWVzc2k=', 'prueba1@gmail.com'),
(11, 'Nicolas Vargas', 'dGhvcg==', 'prueba2@gmail.com'),
(12, 'root', 'Y2hlY2hvcw==', 'prueba3@gmail.com'),
(13, 'Juan felipe tamayo', 'Tmljb2xhc3ZtMTIz', 'trabajo@gmail.com'),
(14, 'Juan felipe tamayo', 'Tmljb2xhc3ZtMTIz', 'trabajo2@gmail.com'),
(15, 'qqqqq', 'MTEyMjMzNDQ=', 'hola@hotmail.com'),
(16, 'santiago vargas', 'MTIzNDU2Nzg=', 'santi@gmail.com'),
(17, 'Nicolas', 'MjIzMzQ0NTU=', 'prueba6@gmail.com'),
(18, 'prueba5', 'MTIzNDU2Nzg=', 'prueba5@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyectos`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id_tip`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyectos` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tips`
--
ALTER TABLE `tips`
  MODIFY `id_tip` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
