-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2022 a las 01:08:55
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
-- Base de datos: `bd_actividades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_actividad`
--

CREATE TABLE `tbl_actividad` (
  `id_actividad` int(11) NOT NULL,
  `nom_act` text NOT NULL,
  `desc_act` longtext NOT NULL,
  `img_actividad` text NOT NULL,
  `autor_act` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_actividad`
--

INSERT INTO `tbl_actividad` (`id_actividad`, `nom_act`, `desc_act`, `img_actividad`, `autor_act`) VALUES
(5, 'HOLA', 'DFHGUH', 'asuka.jpg', NULL),
(6, 'QEUIRWHT', 'djigejkdjikegijfjifs', 'eren.png', NULL),
(7, 'QWRET', 'djigejkdjikeF', 'ñ.jpg', NULL),
(8, 'QDFGE', 'hjghfgfrh', 'eren.png', NULL),
(9, 'HGKFILFYI', 'aere6yrgd', 'pollo.jpg', NULL),
(10, 'HGKFILFYI', 'aere6yrgd', 'shrek.png', NULL),
(11, 'HGKFILFYI', 'aere6yrgd', 'pollo.jpg', NULL),
(21, 'asda', 'asdasd', 'static-assets-upload16797464217812612948.jpg', 29),
(22, 'asda', 'asdasd', 'static-assets-upload16797464217812612948.jpg', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_actividad_usuario`
--

CREATE TABLE `tbl_actividad_usuario` (
  `id_act_user` int(11) NOT NULL,
  `mg_user` int(11) NOT NULL,
  `act_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_topics`
--

CREATE TABLE `tbl_topics` (
  `id_topic` int(11) NOT NULL,
  `actividad_topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_topics`
--

INSERT INTO `tbl_topics` (`id_topic`, `actividad_topic`) VALUES
(1, 'Deporte'),
(2, 'Teatro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_topic_actividad`
--

CREATE TABLE `tbl_topic_actividad` (
  `id_topic_act` int(11) NOT NULL,
  `tipo_topic` int(11) NOT NULL,
  `tipo_act` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `correo_usuario` text NOT NULL,
  `nom_usuario` text NOT NULL,
  `pwd_usuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `correo_usuario`, `nom_usuario`, `pwd_usuario`) VALUES
(1, 'shey_se@gmail.com', 'SheylaSE', 'qweQWE123'),
(2, 'joelv@gmail.com', 'joel', '401c53225073e49ad5cdeb11fc25a9ffb76257a8'),
(3, 'asd@gmail.com', 'asd', 'c8499454bada15f6d76bbf8cf133960f93f9b4eb'),
(4, 'Wilson@gmail.com', 'Wilson', 'f9a7c6df341325822e3ea264cfe39e5ef8c73aa4'),
(24, 'milagro@gmail.com', 'sabrina', '401c53225073e49ad5cdeb11fc25a9ffb76257a8'),
(25, 'andre@gmail.com', 'andrea', 'c8499454bada15f6d76bbf8cf133960f93f9b4eb'),
(26, 'javi@gmail.com', 'javi', '401c53225073e49ad5cdeb11fc25a9ffb76257a8'),
(27, 'sergio@gmail.com', 'sergio', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(28, 'jn@gmail.com', 'jonny', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(29, 'n@gmail.com', 'nansi', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `autor_act_fk` (`autor_act`);

--
-- Indices de la tabla `tbl_actividad_usuario`
--
ALTER TABLE `tbl_actividad_usuario`
  ADD PRIMARY KEY (`id_act_user`),
  ADD KEY `act_user` (`act_user`),
  ADD KEY `mg_user` (`mg_user`);

--
-- Indices de la tabla `tbl_topics`
--
ALTER TABLE `tbl_topics`
  ADD PRIMARY KEY (`id_topic`);

--
-- Indices de la tabla `tbl_topic_actividad`
--
ALTER TABLE `tbl_topic_actividad`
  ADD PRIMARY KEY (`id_topic_act`),
  ADD KEY `tipo_act` (`tipo_act`),
  ADD KEY `tipo_topic` (`tipo_topic`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tbl_actividad_usuario`
--
ALTER TABLE `tbl_actividad_usuario`
  MODIFY `id_act_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_topics`
--
ALTER TABLE `tbl_topics`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_topic_actividad`
--
ALTER TABLE `tbl_topic_actividad`
  MODIFY `id_topic_act` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_actividad`
--
ALTER TABLE `tbl_actividad`
  ADD CONSTRAINT `autor_act_fk` FOREIGN KEY (`autor_act`) REFERENCES `tbl_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tbl_actividad_usuario`
--
ALTER TABLE `tbl_actividad_usuario`
  ADD CONSTRAINT `tbl_actividad_usuario_ibfk_1` FOREIGN KEY (`act_user`) REFERENCES `tbl_actividad` (`id_actividad`),
  ADD CONSTRAINT `tbl_actividad_usuario_ibfk_2` FOREIGN KEY (`mg_user`) REFERENCES `tbl_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tbl_topic_actividad`
--
ALTER TABLE `tbl_topic_actividad`
  ADD CONSTRAINT `tbl_topic_actividad_ibfk_1` FOREIGN KEY (`tipo_act`) REFERENCES `tbl_actividad` (`id_actividad`),
  ADD CONSTRAINT `tbl_topic_actividad_ibfk_2` FOREIGN KEY (`tipo_topic`) REFERENCES `tbl_topics` (`id_topic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
