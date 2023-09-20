-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2023 a las 10:55:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `healine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_medica`
--

CREATE TABLE `agenda_medica` (
  `idagenda` int(10) UNSIGNED NOT NULL,
  `turno_cita_asignacion_cita_remision_id_remision` int(10) UNSIGNED NOT NULL,
  `turno_cita_asignacion_cita_id_asignacion` int(10) UNSIGNED NOT NULL,
  `turno_cita_horario_medico_consultorio_id_consultorio` int(10) UNSIGNED NOT NULL,
  `turno_cita_horario_medico_id_disponibilidad` int(10) UNSIGNED NOT NULL,
  `turno_cita_horario_medico_calendario_año_idcalendario_año` int(10) UNSIGNED NOT NULL,
  `turno_cita_horario_medico_calendario_mes_idcalendario_mes` int(10) UNSIGNED NOT NULL,
  `turno_cita_horario_medico_calendario_semana_idcalendario_semana` int(10) UNSIGNED NOT NULL,
  `turno_cita_horario_medico_turno_laboral_id_turno2` int(10) UNSIGNED NOT NULL,
  `turno_cita_id_turno_cita` int(10) UNSIGNED NOT NULL,
  `especialidad_Usuarios_sede_id_sede` int(10) UNSIGNED NOT NULL,
  `especialidad_Usuarios_id_Usuario` int(10) UNSIGNED NOT NULL,
  `especialidad_Usuarios_Cargos_id_Cargos` int(10) UNSIGNED NOT NULL,
  `especialidad_Usuarios_Estado_usuario_id_Estado` int(10) UNSIGNED NOT NULL,
  `especialidad_id_especialidad` int(10) UNSIGNED NOT NULL,
  `fecha_creacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_cita`
--

CREATE TABLE `asignacion_cita` (
  `id_asignacion` int(10) UNSIGNED NOT NULL,
  `remision_id_remision` int(10) UNSIGNED NOT NULL,
  `hora_asiganacion` time NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_año`
--

CREATE TABLE `calendario_año` (
  `idcalendario_año` int(10) UNSIGNED NOT NULL,
  `año` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_mes`
--

CREATE TABLE `calendario_mes` (
  `idcalendario_mes` int(10) UNSIGNED NOT NULL,
  `mes` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_semana`
--

CREATE TABLE `calendario_semana` (
  `idcalendario_semana` int(10) UNSIGNED NOT NULL,
  `numero_semana` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_Cargos` int(10) UNSIGNED NOT NULL,
  `nom_cargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_Cargos`, `nom_cargo`) VALUES
(1, 'medico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudades` int(10) UNSIGNED NOT NULL,
  `sede_id_sede` int(10) UNSIGNED NOT NULL,
  `nombre_ciudades` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `id_consultorio` int(10) UNSIGNED NOT NULL,
  `sede_id_sede` int(10) UNSIGNED NOT NULL,
  `piso` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cita`
--

CREATE TABLE `detalle_cita` (
  `id_det_cita` int(10) UNSIGNED NOT NULL,
  `remision_id_remision` int(10) UNSIGNED NOT NULL,
  `estado_cita_id_estado_cita` int(10) UNSIGNED NOT NULL,
  `incapacidad_historial_medico_idhistorial_medico` int(10) UNSIGNED NOT NULL,
  `incapacidad_id_incapacidad` int(10) UNSIGNED NOT NULL,
  `incapacidad_historial_medico_orden_examenes_id_examenes` int(10) UNSIGNED NOT NULL,
  `incapacidad_historial_medico_formula_id_formula` int(10) UNSIGNED NOT NULL,
  `incapacidad_historial_medico_orden_medica` int(10) UNSIGNED NOT NULL,
  `incapacidad_historial_medico_orden_examenes_tip_examen` int(10) UNSIGNED NOT NULL,
  `diagnostico` varchar(45) NOT NULL,
  `recomendaciones` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle_factura` int(10) UNSIGNED NOT NULL,
  `factura_remision_id_remision` int(10) UNSIGNED NOT NULL,
  `factura_id_factura` int(10) UNSIGNED NOT NULL,
  `fecha_pago` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` int(10) UNSIGNED NOT NULL,
  `Usuarios_Estado_usuario_id_Estado` int(10) UNSIGNED NOT NULL,
  `Usuarios_Cargos_id_Cargos` int(10) UNSIGNED NOT NULL,
  `Usuarios_id_Usuario` int(10) UNSIGNED NOT NULL,
  `Usuarios_sede_id_sede` int(10) UNSIGNED NOT NULL,
  `nom_especialidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_cita`
--

CREATE TABLE `estado_cita` (
  `id_estado_cita` int(10) UNSIGNED NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

CREATE TABLE `estado_usuario` (
  `id_Estado` int(10) UNSIGNED NOT NULL,
  `Estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_usuario`
--

INSERT INTO `estado_usuario` (`id_Estado`, `Estado`) VALUES
(1, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(10) UNSIGNED NOT NULL,
  `remision_id_remision` int(10) UNSIGNED NOT NULL,
  `nit_eps` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formula`
--

CREATE TABLE `formula` (
  `id_formula` int(10) UNSIGNED NOT NULL,
  `medicamentos` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_medico`
--

CREATE TABLE `historial_medico` (
  `idhistorial_medico` int(10) UNSIGNED NOT NULL,
  `orden_examenes_id_examenes` int(10) UNSIGNED NOT NULL,
  `orden_examenes_tip_examen_id_tip_examen` int(10) UNSIGNED NOT NULL,
  `formula_id_formula` int(10) UNSIGNED NOT NULL,
  `orden_medica_id_orden_medica` int(10) UNSIGNED NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_medico`
--

CREATE TABLE `horario_medico` (
  `id_disponibilidad` int(10) UNSIGNED NOT NULL,
  `calendario_año_idcalendario_año` int(10) UNSIGNED NOT NULL,
  `calendario_mes_idcalendario_mes` int(10) UNSIGNED NOT NULL,
  `calendario_semana_idcalendario_semana` int(10) UNSIGNED NOT NULL,
  `turno_laboral_id_turno2` int(10) UNSIGNED NOT NULL,
  `consultorio_id_consultorio` int(10) UNSIGNED NOT NULL,
  `consultorio_sede_id_sede` int(10) UNSIGNED NOT NULL,
  `Usuarios_sede_id_sede` int(10) UNSIGNED NOT NULL,
  `Usuarios_Estado_usuario_id_Estado` int(10) UNSIGNED NOT NULL,
  `Usuarios_Cargos_id_Cargos` int(10) UNSIGNED NOT NULL,
  `Usuarios_id_Usuario` int(10) UNSIGNED NOT NULL,
  `comentario` varchar(45) NOT NULL,
  `cantidad_turnos` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incapacidad`
--

CREATE TABLE `incapacidad` (
  `id_incapacidad` int(10) UNSIGNED NOT NULL,
  `historial_medico_idhistorial_medico` int(10) UNSIGNED NOT NULL,
  `historial_medico_orden_examenes_id_examenes` int(10) UNSIGNED NOT NULL,
  `historial_medico_formula_id_formula` int(10) UNSIGNED NOT NULL,
  `historial_medico_orden_examenes_tip_examen_id_tip_examen` int(10) UNSIGNED NOT NULL,
  `historial_medico_orden_medica_id_orden_medica` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `dias` varchar(45) NOT NULL,
  `incapacidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_examenes`
--

CREATE TABLE `orden_examenes` (
  `id_examenes` int(10) UNSIGNED NOT NULL,
  `tip_examen_id_tip_examen` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha_emision` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_medica`
--

CREATE TABLE `orden_medica` (
  `id_orden_medica` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha_emision` date NOT NULL,
  `vigencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pqrs`
--

INSERT INTO `pqrs` (`id`, `tipo`, `mensaje`, `nombre`, `correo_electronico`) VALUES
(9, 'Peticion', 'No me respondieron ', 'samir', 'samir@gmail.com'),
(10, 'Peticion', 'No me respondieron ', 'samir', 'samir@gmail.com'),
(11, 'Queja', 'Esta pagina  esta muy mal hecha ademas esa bd fo JAJSJAAJSDJA', 'Anonimo ', 'torocritian@gmail.com'),
(12, 'Queja', 'adadad', 'adadad', 'adad@gmail.com'),
(13, 'Reclamo', 'puto', 'negra', 'aña@cartagena.com'),
(14, 'Reclamo', 'puto', 'negra', 'aña@cartagena.com'),
(15, 'Reclamo', 'puto', 'negra', 'aana@dcartagena.com'),
(16, 'Queja', 'ry', 'tr', 'hjyt'),
(17, 'Reclamo', 'tttttt', 'patricia ', 'tttttttt@gmail.com'),
(18, 'Reclamo', 'tttttttt', 'tttttttt', 'ttttttttt'),
(19, 'Reclamo', 'citas mas rapidas', 'Luz', 'tatarrieta@knoib'),
(20, 'Sugerencia', 'mejorar aña', 'bety', 'bety@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remision`
--

CREATE TABLE `remision` (
  `id_remision` int(10) UNSIGNED NOT NULL,
  `precio` varchar(255) NOT NULL,
  `estado_cobro` varchar(45) NOT NULL,
  `nombre_paciente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(10) UNSIGNED NOT NULL,
  `nombre` int(10) UNSIGNED NOT NULL,
  `calle` int(10) UNSIGNED NOT NULL,
  `carrera` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `nombre`, `calle`, `carrera`) VALUES
(1, 1231, 1233, 123334);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_examen`
--

CREATE TABLE `tip_examen` (
  `id_tip_examen` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno_cita`
--

CREATE TABLE `turno_cita` (
  `id_turno_cita` int(10) UNSIGNED NOT NULL,
  `horario_medico_turno_laboral_id_turno2` int(10) UNSIGNED NOT NULL,
  `horario_medico_calendario_semana_idcalendario_semana` int(10) UNSIGNED NOT NULL,
  `horario_medico_calendario_mes_idcalendario_mes` int(10) UNSIGNED NOT NULL,
  `horario_medico_calendario_año_idcalendario_año` int(10) UNSIGNED NOT NULL,
  `horario_medico_id_disponibilidad` int(10) UNSIGNED NOT NULL,
  `horario_medico_consultorio_id_consultorio` int(10) UNSIGNED NOT NULL,
  `asignacion_cita_id_asignacion` int(10) UNSIGNED NOT NULL,
  `asignacion_cita_remision_id_remision` int(10) UNSIGNED NOT NULL,
  `horario_medico_consultorio_sede_id_sede` int(10) UNSIGNED NOT NULL,
  `numero_turno` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno_laboral`
--

CREATE TABLE `turno_laboral` (
  `id_turno2` int(10) UNSIGNED NOT NULL,
  `hora_inicio` varchar(45) NOT NULL,
  `descanso` varchar(45) NOT NULL,
  `hora_fin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuario` int(10) UNSIGNED NOT NULL,
  `Cargos_id_Cargos` int(10) UNSIGNED NOT NULL,
  `Estado_usuario_id_Estado` int(10) UNSIGNED NOT NULL,
  `sede_id_sede` int(10) UNSIGNED NOT NULL,
  `nombre1` varchar(45) NOT NULL,
  `nombre2` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `email` int(10) UNSIGNED NOT NULL,
  `telefono` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_Usuario`, `Cargos_id_Cargos`, `Estado_usuario_id_Estado`, `sede_id_sede`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `email`, `telefono`) VALUES
(1, 1, 1, 1, 'samir', 'Andres', 'Jiménez', 'jimenez', 232, 1231);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda_medica`
--
ALTER TABLE `agenda_medica`
  ADD PRIMARY KEY (`idagenda`,`turno_cita_asignacion_cita_remision_id_remision`,`turno_cita_asignacion_cita_id_asignacion`,`turno_cita_horario_medico_consultorio_id_consultorio`,`turno_cita_horario_medico_id_disponibilidad`,`turno_cita_horario_medico_calendario_año_idcalendario_año`,`turno_cita_horario_medico_calendario_mes_idcalendario_mes`,`turno_cita_horario_medico_calendario_semana_idcalendario_semana`,`turno_cita_horario_medico_turno_laboral_id_turno2`,`turno_cita_id_turno_cita`,`especialidad_Usuarios_sede_id_sede`,`especialidad_Usuarios_id_Usuario`,`especialidad_Usuarios_Cargos_id_Cargos`,`especialidad_Usuarios_Estado_usuario_id_Estado`,`especialidad_id_especialidad`),
  ADD KEY `agenda_medica_FKIndex1` (`turno_cita_id_turno_cita`,`turno_cita_horario_medico_turno_laboral_id_turno2`,`turno_cita_horario_medico_calendario_semana_idcalendario_semana`,`turno_cita_horario_medico_calendario_mes_idcalendario_mes`,`turno_cita_horario_medico_calendario_año_idcalendario_año`,`turno_cita_horario_medico_id_disponibilidad`,`turno_cita_horario_medico_consultorio_id_consultorio`,`turno_cita_asignacion_cita_id_asignacion`,`turno_cita_asignacion_cita_remision_id_remision`),
  ADD KEY `agenda_medica_FKIndex2` (`especialidad_id_especialidad`,`especialidad_Usuarios_Estado_usuario_id_Estado`,`especialidad_Usuarios_Cargos_id_Cargos`,`especialidad_Usuarios_id_Usuario`,`especialidad_Usuarios_sede_id_sede`);

--
-- Indices de la tabla `asignacion_cita`
--
ALTER TABLE `asignacion_cita`
  ADD PRIMARY KEY (`id_asignacion`,`remision_id_remision`),
  ADD KEY `asignacion_cita_FKIndex1` (`remision_id_remision`);

--
-- Indices de la tabla `calendario_año`
--
ALTER TABLE `calendario_año`
  ADD PRIMARY KEY (`idcalendario_año`);

--
-- Indices de la tabla `calendario_mes`
--
ALTER TABLE `calendario_mes`
  ADD PRIMARY KEY (`idcalendario_mes`);

--
-- Indices de la tabla `calendario_semana`
--
ALTER TABLE `calendario_semana`
  ADD PRIMARY KEY (`idcalendario_semana`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_Cargos`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudades`,`sede_id_sede`),
  ADD KEY `ciudades_FKIndex1` (`sede_id_sede`);

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`id_consultorio`,`sede_id_sede`),
  ADD KEY `consultorio_FKIndex1` (`sede_id_sede`);

--
-- Indices de la tabla `detalle_cita`
--
ALTER TABLE `detalle_cita`
  ADD PRIMARY KEY (`id_det_cita`,`remision_id_remision`,`estado_cita_id_estado_cita`,`incapacidad_historial_medico_idhistorial_medico`,`incapacidad_id_incapacidad`,`incapacidad_historial_medico_orden_examenes_id_examenes`,`incapacidad_historial_medico_formula_id_formula`,`incapacidad_historial_medico_orden_medica`,`incapacidad_historial_medico_orden_examenes_tip_examen`),
  ADD KEY `detalle_cita_FKIndex1` (`remision_id_remision`),
  ADD KEY `detalle_cita_FKIndex2` (`estado_cita_id_estado_cita`),
  ADD KEY `detalle_cita_FKIndex3` (`incapacidad_id_incapacidad`,`incapacidad_historial_medico_idhistorial_medico`,`incapacidad_historial_medico_orden_examenes_id_examenes`,`incapacidad_historial_medico_formula_id_formula`,`incapacidad_historial_medico_orden_examenes_tip_examen`,`incapacidad_historial_medico_orden_medica`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle_factura`,`factura_remision_id_remision`,`factura_id_factura`),
  ADD KEY `detalle_factura_FKIndex1` (`factura_id_factura`,`factura_remision_id_remision`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`,`Usuarios_Estado_usuario_id_Estado`,`Usuarios_Cargos_id_Cargos`,`Usuarios_id_Usuario`,`Usuarios_sede_id_sede`),
  ADD KEY `especialidad_FKIndex1` (`Usuarios_id_Usuario`,`Usuarios_Cargos_id_Cargos`,`Usuarios_Estado_usuario_id_Estado`,`Usuarios_sede_id_sede`);

--
-- Indices de la tabla `estado_cita`
--
ALTER TABLE `estado_cita`
  ADD PRIMARY KEY (`id_estado_cita`);

--
-- Indices de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  ADD PRIMARY KEY (`id_Estado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`,`remision_id_remision`),
  ADD KEY `factura_FKIndex1` (`remision_id_remision`);

--
-- Indices de la tabla `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`id_formula`);

--
-- Indices de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD PRIMARY KEY (`idhistorial_medico`,`orden_examenes_id_examenes`,`orden_examenes_tip_examen_id_tip_examen`,`formula_id_formula`,`orden_medica_id_orden_medica`),
  ADD KEY `historial_medico_FKIndex1` (`orden_examenes_id_examenes`,`orden_examenes_tip_examen_id_tip_examen`),
  ADD KEY `historial_medico_FKIndex2` (`formula_id_formula`),
  ADD KEY `historial_medico_FKIndex3` (`orden_medica_id_orden_medica`);

--
-- Indices de la tabla `horario_medico`
--
ALTER TABLE `horario_medico`
  ADD PRIMARY KEY (`id_disponibilidad`,`calendario_año_idcalendario_año`,`calendario_mes_idcalendario_mes`,`calendario_semana_idcalendario_semana`,`turno_laboral_id_turno2`,`consultorio_id_consultorio`,`consultorio_sede_id_sede`,`Usuarios_sede_id_sede`,`Usuarios_Estado_usuario_id_Estado`,`Usuarios_Cargos_id_Cargos`,`Usuarios_id_Usuario`),
  ADD KEY `horario_medico_FKIndex1` (`calendario_año_idcalendario_año`),
  ADD KEY `horario_medico_FKIndex2` (`calendario_mes_idcalendario_mes`),
  ADD KEY `horario_medico_FKIndex3` (`calendario_semana_idcalendario_semana`),
  ADD KEY `horario_medico_FKIndex4` (`turno_laboral_id_turno2`),
  ADD KEY `horario_medico_FKIndex5` (`consultorio_id_consultorio`,`consultorio_sede_id_sede`),
  ADD KEY `horario_medico_FKIndex6` (`Usuarios_id_Usuario`,`Usuarios_Cargos_id_Cargos`,`Usuarios_Estado_usuario_id_Estado`,`Usuarios_sede_id_sede`);

--
-- Indices de la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  ADD PRIMARY KEY (`id_incapacidad`,`historial_medico_idhistorial_medico`,`historial_medico_orden_examenes_id_examenes`,`historial_medico_formula_id_formula`,`historial_medico_orden_examenes_tip_examen_id_tip_examen`,`historial_medico_orden_medica_id_orden_medica`),
  ADD KEY `incapacidad_FKIndex1` (`historial_medico_idhistorial_medico`,`historial_medico_orden_examenes_id_examenes`,`historial_medico_orden_examenes_tip_examen_id_tip_examen`,`historial_medico_formula_id_formula`,`historial_medico_orden_medica_id_orden_medica`);

--
-- Indices de la tabla `orden_examenes`
--
ALTER TABLE `orden_examenes`
  ADD PRIMARY KEY (`id_examenes`,`tip_examen_id_tip_examen`),
  ADD KEY `orden_examenes_FKIndex1` (`tip_examen_id_tip_examen`);

--
-- Indices de la tabla `orden_medica`
--
ALTER TABLE `orden_medica`
  ADD PRIMARY KEY (`id_orden_medica`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `remision`
--
ALTER TABLE `remision`
  ADD PRIMARY KEY (`id_remision`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`);

--
-- Indices de la tabla `tip_examen`
--
ALTER TABLE `tip_examen`
  ADD PRIMARY KEY (`id_tip_examen`);

--
-- Indices de la tabla `turno_cita`
--
ALTER TABLE `turno_cita`
  ADD PRIMARY KEY (`id_turno_cita`,`horario_medico_turno_laboral_id_turno2`,`horario_medico_calendario_semana_idcalendario_semana`,`horario_medico_calendario_mes_idcalendario_mes`,`horario_medico_calendario_año_idcalendario_año`,`horario_medico_id_disponibilidad`,`horario_medico_consultorio_id_consultorio`,`asignacion_cita_id_asignacion`,`asignacion_cita_remision_id_remision`,`horario_medico_consultorio_sede_id_sede`),
  ADD KEY `turno_cita_FKIndex1` (`horario_medico_id_disponibilidad`,`horario_medico_calendario_año_idcalendario_año`,`horario_medico_calendario_mes_idcalendario_mes`,`horario_medico_calendario_semana_idcalendario_semana`,`horario_medico_turno_laboral_id_turno2`,`horario_medico_consultorio_id_consultorio`,`horario_medico_consultorio_sede_id_sede`),
  ADD KEY `turno_cita_FKIndex2` (`asignacion_cita_id_asignacion`,`asignacion_cita_remision_id_remision`);

--
-- Indices de la tabla `turno_laboral`
--
ALTER TABLE `turno_laboral`
  ADD PRIMARY KEY (`id_turno2`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuario`,`Cargos_id_Cargos`,`Estado_usuario_id_Estado`,`sede_id_sede`),
  ADD KEY `Usuarios_FKIndex1` (`Cargos_id_Cargos`),
  ADD KEY `Usuarios_FKIndex2` (`Estado_usuario_id_Estado`),
  ADD KEY `Usuarios_FKIndex3` (`sede_id_sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda_medica`
--
ALTER TABLE `agenda_medica`
  MODIFY `idagenda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignacion_cita`
--
ALTER TABLE `asignacion_cita`
  MODIFY `id_asignacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendario_año`
--
ALTER TABLE `calendario_año`
  MODIFY `idcalendario_año` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendario_mes`
--
ALTER TABLE `calendario_mes`
  MODIFY `idcalendario_mes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendario_semana`
--
ALTER TABLE `calendario_semana`
  MODIFY `idcalendario_semana` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_Cargos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudades` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  MODIFY `id_consultorio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_cita`
--
ALTER TABLE `detalle_cita`
  MODIFY `id_det_cita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle_factura` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_cita`
--
ALTER TABLE `estado_cita`
  MODIFY `id_estado_cita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  MODIFY `id_Estado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formula`
--
ALTER TABLE `formula`
  MODIFY `id_formula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  MODIFY `idhistorial_medico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario_medico`
--
ALTER TABLE `horario_medico`
  MODIFY `id_disponibilidad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  MODIFY `id_incapacidad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden_examenes`
--
ALTER TABLE `orden_examenes`
  MODIFY `id_examenes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden_medica`
--
ALTER TABLE `orden_medica`
  MODIFY `id_orden_medica` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `remision`
--
ALTER TABLE `remision`
  MODIFY `id_remision` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tip_examen`
--
ALTER TABLE `tip_examen`
  MODIFY `id_tip_examen` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turno_cita`
--
ALTER TABLE `turno_cita`
  MODIFY `id_turno_cita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turno_laboral`
--
ALTER TABLE `turno_laboral`
  MODIFY `id_turno2` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_cita`
--
ALTER TABLE `asignacion_cita`
  ADD CONSTRAINT `asignacion_cita_ibfk_1` FOREIGN KEY (`remision_id_remision`) REFERENCES `remision` (`id_remision`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`sede_id_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD CONSTRAINT `consultorio_ibfk_1` FOREIGN KEY (`sede_id_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `detalle_factura_ibfk_1` FOREIGN KEY (`factura_id_factura`,`factura_remision_id_remision`) REFERENCES `factura` (`id_factura`, `remision_id_remision`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD CONSTRAINT `especialidad_ibfk_1` FOREIGN KEY (`Usuarios_id_Usuario`,`Usuarios_Cargos_id_Cargos`,`Usuarios_Estado_usuario_id_Estado`,`Usuarios_sede_id_sede`) REFERENCES `usuarios` (`id_Usuario`, `Cargos_id_Cargos`, `Estado_usuario_id_Estado`, `sede_id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`remision_id_remision`) REFERENCES `remision` (`id_remision`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD CONSTRAINT `historial_medico_ibfk_1` FOREIGN KEY (`orden_examenes_id_examenes`,`orden_examenes_tip_examen_id_tip_examen`) REFERENCES `orden_examenes` (`id_examenes`, `tip_examen_id_tip_examen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `historial_medico_ibfk_2` FOREIGN KEY (`formula_id_formula`) REFERENCES `formula` (`id_formula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `historial_medico_ibfk_3` FOREIGN KEY (`orden_medica_id_orden_medica`) REFERENCES `orden_medica` (`id_orden_medica`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horario_medico`
--
ALTER TABLE `horario_medico`
  ADD CONSTRAINT `horario_medico_ibfk_1` FOREIGN KEY (`calendario_año_idcalendario_año`) REFERENCES `calendario_año` (`idcalendario_año`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `horario_medico_ibfk_2` FOREIGN KEY (`calendario_mes_idcalendario_mes`) REFERENCES `calendario_mes` (`idcalendario_mes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `horario_medico_ibfk_3` FOREIGN KEY (`calendario_semana_idcalendario_semana`) REFERENCES `calendario_semana` (`idcalendario_semana`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `horario_medico_ibfk_4` FOREIGN KEY (`turno_laboral_id_turno2`) REFERENCES `turno_laboral` (`id_turno2`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `horario_medico_ibfk_5` FOREIGN KEY (`consultorio_id_consultorio`,`consultorio_sede_id_sede`) REFERENCES `consultorio` (`id_consultorio`, `sede_id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `horario_medico_ibfk_6` FOREIGN KEY (`Usuarios_id_Usuario`,`Usuarios_Cargos_id_Cargos`,`Usuarios_Estado_usuario_id_Estado`,`Usuarios_sede_id_sede`) REFERENCES `usuarios` (`id_Usuario`, `Cargos_id_Cargos`, `Estado_usuario_id_Estado`, `sede_id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  ADD CONSTRAINT `incapacidad_ibfk_1` FOREIGN KEY (`historial_medico_idhistorial_medico`,`historial_medico_orden_examenes_id_examenes`,`historial_medico_orden_examenes_tip_examen_id_tip_examen`,`historial_medico_formula_id_formula`,`historial_medico_orden_medica_id_orden_medica`) REFERENCES `historial_medico` (`idhistorial_medico`, `orden_examenes_id_examenes`, `orden_examenes_tip_examen_id_tip_examen`, `formula_id_formula`, `orden_medica_id_orden_medica`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_examenes`
--
ALTER TABLE `orden_examenes`
  ADD CONSTRAINT `orden_examenes_ibfk_1` FOREIGN KEY (`tip_examen_id_tip_examen`) REFERENCES `tip_examen` (`id_tip_examen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Cargos_id_Cargos`) REFERENCES `cargos` (`id_Cargos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Estado_usuario_id_Estado`) REFERENCES `estado_usuario` (`id_Estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`sede_id_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
