-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-12-2022 a las 18:47:43
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `content` varchar(1200) NOT NULL,
  `photo` varchar(7000) NOT NULL,
  `date` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `state` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `title`, `author`, `content`, `photo`, `date`, `keywords`, `state`, `tipo`) VALUES
(23, 'Como administrar una base de datos', 'Ing. CarballoÂ´papa', 'ï¿½Por que es importante saber como administrar una base de datos? Tener una buena administracion de la base de datos significa que la empresa no esta en desorden administrativamente  \r\n          ', 'https://www.nutanix.com/content/dam/nutanix-cxo/thumbnails/database_thumb.jpg', '26/11/2022', 'Administracion de bases de datos', 1, '1'),
(24, 'Memoria de respaldo', 'Marta Elizabet', 'Es importante tener un reslpado de la base de datos\r\npara que en un futuro llegue pasar algo malo este respaldad\r\ny rapido se tenga un plan de emergencia', 'https://www.nutanix.com/content/dam/nutanix-cxo/thumbnails/database_thumb.jpg', '26/11/2022', 'Respaldo', 1, 'Articulo'),
(25, '\r\nFujo de la administracion', '\r\nSanchez Perez', 'Tener un flujo en la administracion nos ayuda a no\r\nsaturar la red que se tiene utilizando en el transcurso del dia \r\n', 'https://www.nutanix.com/content/dam/nutanix-cxo/thumbnails/database_thumb.jpg', '26/11/2022', 'Flujo', 1, 'Articulo'),
(26, 'ascsdsdv', 'daninel jose', 'dsvvsdvs  \r\n          ', 'https://images.app.goo.gl/wYmTwUJj5MdMZDbH9', '2022-12-13 22:38:48', 'Admisnistracion de base de datos', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutos`
--

DROP TABLE IF EXISTS `tutos`;
CREATE TABLE IF NOT EXISTS `tutos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `content` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  `state` int(3) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutos`
--

INSERT INTO `tutos` (`id`, `title`, `author`, `content`, `photo`, `date`, `keywords`, `state`, `tipo`) VALUES
(1, '¿Qué son las BASES DE DATOS y cómo funcionan?', 'EDteam', 'Los gestores de bases de datos son un tipo de software que permite estructurar una base de datos, almacenar la información y consultarla.', 'https://img.freepik.com/foto-gratis/disparo-gran-angular-solo-arbol-que-crece-cielo-nublado-puesta-sol-rodeada-cesped_181624-22807.jpg?w=2000', '13 feb 2020', 'BASES DE DATOS', 1, 'tutorial'),
(8, 'adzvcbxc', 'Ing. Carballo', 'sfgbdvb', 'https://img.freepik.com/foto-gratis/disparo-gran-angular-solo-arbol-que-crece-cielo-nublado-puesta-sol-rodeada-cesped_181624-22807.jpg?w=2000', '2022-12-13 21:50:57', 'BASE DE DATOS', 1, '1'),
(9, 'adzvcbxc', 'Ing. Carballo', 'sfgbdvb', 'https://img.freepik.com/foto-gratis/disparo-gran-angular-solo-arbol-que-crece-cielo-nublado-puesta-sol-rodeada-cesped_181624-22807.jpg?w=2000', '2022-12-13 21:51:15', 'BASE DE DATOS', 1, '1'),
(7, '¿Qué es una BASE DE DATOS?// características GENERALES', 'Develoteca', 'En este video se explica ? ¿Qué es una BASE DE DATOS y para que sirve?', 'https://img.freepik.com/foto-gratis/disparo-gran-angular-solo-arbol-que-crece-cielo-nublado-puesta-sol-rodeada-cesped_181624-22807.jpg?w=2000', '23 dic 2020', 'BASES DE DATOS', 1, 'tutorial'),
(10, 'ivam pers', 'jesus', 'asadasdasda  \r\n            \r\n            \r\n            \r\n          ', 'https://img.freepik.com/foto-gratis/disparo-gran-angular-solo-arbol-que-crece-cielo-nublado-puesta-sol-rodeada-cesped_181624-22807.jpg?w=2000', '2022-12-13 22:40:29', 'BASE DE DATOS sds', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(155) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `photo` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tipo`, `photo`) VALUES
(67, 'benito', 'benito@gmail.com', '741852', '1', 'https://images.app.goo.gl/DHs9zLmSxPSf5mQU6'),
(66, 'alanburgoin', 'alan.burgoin@gmail.com', '11111', '1', 'http://adminphp/edituser.php?id=66'),
(65, 'Jesus Daniel', 'danybalz@hotmail.com', '123456789', '1', 'https://tierragamer.com/wp-content/uploads/2021/10/Re-Zero-Rem-Arte.jpg'),
(68, 'alex martin', 'alex@gmail.com', '963852', '1', 'http://adminphp/edituser.php?id=68'),
(70, 'hola123', 'hola123@gmail.com', '11111', '1', 'foto.png'),
(71, 'hola123', 'hola123@gmail.com', '11111', '1', 'foto.png'),
(72, 'joaquin', 'joaquin@gmail.com', '11111', '1', 'foto.png'),
(73, 'paco', 'paco@gmail.com', '11111', '1', 'foto.png'),
(74, 'paco', 'paco1@gmail.com', '11111', '1', 'foto.png'),
(75, 'root', 'root@gmail.com', '11111', '1', 'foto.png'),
(77, 'juan', 'juan@gmail.com', '1234567', '2', 'foto.png'),
(78, 'irak', 'irak@gmail.com', '1234567', '2', 'foto.png'),
(79, 'luis', 'luis@gmail.com', '1234567', '2', 'foto.png'),
(80, 'kiriko', 'kiriko@gmail.com', '1234567', '2', 'foto.png'),
(81, 'suya', 'suya@gmail.com', '1234567', '2', 'foto.png'),
(82, 'qwerty', 'asdfgh@gmai.com', '1234567', '2', 'foto.png'),
(83, 'zxcvbn', 'zxcvbn@gmail.com', '1234567', '2', 'foto.png'),
(84, 'yuiop', 'yuiop@gmail.com', '1234567', '2', 'foto.png'),
(85, 'cvbnm', 'cvbnm@gmail.com', '1234567', '2', 'foto.png'),
(87, 'QWERTYUIO', 'asdfgaaaah@gmai.com', '1234567', '2', 'foto.png'),
(88, 'qwdefscxz', 'zxcvbnm@gmail.com', '1234567', '2', 'foto.png'),
(89, '123456789', 'oooooooooooo@gmail.com', '123456789', '2', 'foto.png'),
(90, '123456789', 'swedrftyu@gmail.com', '1234567890', '2', 'foto.png'),
(91, 'daniel', 'daniel@gmail.com', '123456', '2', 'foto.png'),
(92, 'daniel', 'alknsdas@gmail.com', '1234567', '2', 'foto.png'),
(93, '123456', 'asada@gmail.com', '123456', '1', 'foto.png'),
(94, 'se', 'danybalz@hotmail.com', '1234567', '2', 'foto.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
