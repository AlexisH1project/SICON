-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2020 a las 08:21:38
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fomope2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m1ct_fechasnomina`
--

CREATE TABLE `m1ct_fechasnomina` (
  `id_qna` int(11) NOT NULL,
  `nombre_qna` varchar(7) COLLATE utf8_spanish_ci NOT NULL,
  `fechaIunidad` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fechaFunidad` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fechaIanalista` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fechaFanalista` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fechaPago` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `estadoActual` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `m1ct_fechasnomina`
--

INSERT INTO `m1ct_fechasnomina` (`id_qna`, `nombre_qna`, `fechaIunidad`, `fechaFunidad`, `fechaIanalista`, `fechaFanalista`, `fechaPago`, `estadoActual`) VALUES
(1, 'Qna 01', '10/12/2019', '', '', '', '10/01/2020', 'cerrada '),
(2, 'Qna 02', '26/12/2019', '', '', '', '24/01/2020', 'cerrada '),
(3, 'Qna 03', '08/01/2020', '', '', '', '10/02/2020', 'cerrada '),
(4, 'Qna 04', '22/01/2020', '', '', '', '25/02/2020', 'cerrada '),
(5, 'Qna 05', '07/02/2020', '', '', '', '10/03/2020', 'cerrada '),
(6, 'Qna 06', '21/02/2020', '', '', '', '25/03/2020', 'cerrada '),
(7, 'Qna 07', '06/03/2020', '', '', '', '08/04/2020', 'cerrada '),
(8, 'Qna 08', '23/03/2020', '27/03/2020', '27/03/2020', '02/04/2020', '24/04/2020', 'abierta '),
(9, 'Qna 09', '06/04/1900', '14/04/2020', '14/04/2020', '17/04/2020', '08/05/2020', 'proxima'),
(10, 'Qna 10', '21/04/2020', '27/04/2020', '27/04/2020', '05/05/2020', '25/05/2020', 'proxima'),
(11, 'Qna 11', '08/05/2020', '14/05/2020', '14/05/2020', '21/05/2020', '10/06/2020', 'proxima'),
(12, 'Qna 12', '25/05/2020', '29/05/2020', '29/05/2020', '05/06/2020', '25/06/2020', 'proxima'),
(13, 'Qna 13', '09/06/2020', '15/06/2020', '15/06/2020', '22/06/2020', '10/07/2020', 'proxima'),
(14, 'Qna 14', '24/06/2020', '30/06/2020', '30/06/2020', '06/07/2020', '24/07/2020', 'proxima'),
(15, 'Qna 15', '08/07/2020', '14/07/2020', '14/07/2020', '21/07/2020', '10/08/2020', 'proxima'),
(16, 'Qna 16', '23/07/2020', '29/07/2020', '29/07/2020', '05/08/2020', '25/08/2020', 'proxima'),
(17, 'Qna 17', '10/08/2020', '14/08/2020', '14/08/2020', '21/08/2020', '10/09/2020', 'proxima'),
(18, 'Qna 18', '25/08/2020', '31/08/2020', '31/08/2020', '03/09/2020', '25/09/2020', 'proxima'),
(19, 'Qna 19', '07/09/2020', '11/09/2020', '11/09/2020', '21/09/2020', '09/10/2020', 'proxima'),
(20, 'Qna 20', '23/09/2020', '29/09/2020', '29/09/2020', '05/10/2020', '23/10/2020', 'proxima'),
(21, 'Qna 21', '07/10/2020', '13/10/2020', '13/10/2020', '20/10/2020', '10/11/2020', 'proxima'),
(22, 'Qna 22', '22/10/2020', '28/10/2020', '28/10/2020', '04/11/2020', '25/11/2020', 'proxima'),
(23, 'Qna 23', '06/11/2020', '12/11/2020', '12/11/2020', '20/11/2020', '10/12/2020', 'proxima'),
(24, 'Qna 24', '24/11/2020', '30/11/2020', '30/11/2020', '03/12/2020', '23/12/2020', 'proxima');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `m1ct_fechasnomina`
--
ALTER TABLE `m1ct_fechasnomina`
  ADD PRIMARY KEY (`id_qna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
