
--
-- Base de datos: `bd_bytesandbits`
--


create database if not exists bd_bytesandbits;
use bd_bytesandbits;

-- DROP DATABASE bd_bytesandbits; 


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `primer_nombre` varchar(60) NOT NULL,
  `segundo_nombre` varchar(60) NOT NULL,
  `primer_apellido` varchar(60) NOT NULL,
  `segundo_apellido` varchar(60) NOT NULL,
  `nit` int(8) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  `contrasenia_p` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `activacion` tinyint(4) DEFAULT NULL,
  `activation_token` varchar(100) DEFAULT NULL,
  `reset_token` varchar(100) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `telefono` int(8) DEFAULT NULL,
  `id_empresa` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `nit`, `contrasenia`, `contrasenia_p`, `email`, `activacion`, `activation_token`, `reset_token`, `reset_token_expires_at`, `created_at`, `updated_at`, `telefono`, `id_empresa`) VALUES
(20200001, 'Peréz', 'Alvarado', 'Juan', 'José', 2854965, '', '', 'juan@gmail.com', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 53521565, 1),
(20210003, 'Díaz', 'González', 'Luis', 'Antonio', 2659856, '', '', 'luis@gmail.com', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 56555251, 1),
(20220030, 'Holanda', 'Martínez', 'Julio', 'Armando', 2478546, '', '', 'julio@gmail.com', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 53895547, 1),
(20240019, 'Francia', 'Morales', 'Mbappe', 'Christian', 5845698, '', '', 'mbp@gmail.com', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 56123698, 1),
(20240020, 'Marta', 'Luiza', 'Monrroy', 'Luna', 2478456, '', '', 'monroy@gmail.com', 0, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 53224865, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id_colaborador` tinyint(4) NOT NULL,
  `nombre_colaborador` varchar(40) DEFAULT NULL,
  `telefono` int(8) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `imagen_colaborador` varchar(200) DEFAULT NULL,
  `nombre_contacto` varchar(50) DEFAULT NULL,
  `telefono_contacto` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colaboradores`
--

INSERT INTO `colaboradores` (`id_colaborador`, `nombre_colaborador`, `telefono`, `direccion`, `imagen_colaborador`, `nombre_contacto`, `telefono_contacto`) VALUES
(1, 'AMD', 58466525, 'Calle 12, Zona 10, Ciudad de Guatemala', 'https://i.ibb.co/zNtnXRp/10.png', 'Laura Mendrigo', 2345),
(2, 'Lenovo ', 58545452, 'Avenida Las Palmas, Zona 14, Ciudad de Guatemala', 'https://i.ibb.co/tBcyRKD/11.png', 'Javier Zoltán', 2456),
(3, 'BROCS.us', 45452565, 'Calle Real, Zona 1, Antigua Guatemala, Sacatepéquez', 'https://i.ibb.co/wQtvYW3/12.png', 'Clara Veltrán', 2567),
(4, 'Huawei', 59565855, '5ta Avenida, Zona 4, Mixco, Guatemala', 'https://i.ibb.co/5rDykJ9/13.png', 'Diego Nemar', 2678),
(5, 'Intel', 45658525, 'Boulevard Los Próceres, Zona 15, Ciudad de Guatemala', 'https://i.ibb.co/yBhGjjx/14.png', 'Sofía Cander', 2789),
(6, 'CISCO', 52355655, 'Colonia Vista Hermosa, Zona 16, Ciudad de Guatemala', 'https://i.ibb.co/bL1H1pd/15.png', 'Raúl Yundel', 2890),
(7, 'Microsoft 365', 45668512, 'Calle El Estadio, Zona 12, Quetzaltenango', 'https://i.ibb.co/qDqpKxx/16.png', 'Patricia Armesi', 2901),
(8, 'Western Digital', 42414445, 'Avenida La Reforma, Zona 9, Ciudad de Guatemala', 'https://i.ibb.co/YB5RYKr/17.png', 'Tomás Sildero', 3012),
(9, 'Kingston Technology', 45856565, 'Calle Del Comercio, Zona 3, Escuintla', 'https://i.ibb.co/tZZLKk1/18.png', 'Eliana Franso', 3123),
(10, 'DELL', 52555658, 'Avenida Los Cipreses, Zona 5, Ciudad de Guatemala', 'https://i.ibb.co/hYBb2zp/19.png', 'Martín Varelto', 3234),
(11, 'ARCTIC', 55899669, 'Carretera a El Salvador, Km 16.5, Santa Catarina Pinula', 'https://i.ibb.co/KWN8sCf/20.png', 'Camila Pritani', 3345),
(12, 'ORACLE', 59663268, '3ra Calle, Zona 8, Villa Nueva, Guatemala', 'https://i.ibb.co/N3mzZzq/21.png', 'Pablo Kaldir', 3456),
(13, 'ACER ', 54212236, 'Calle San Juan, Zona 13, Ciudad de Guatemala', 'https://i.ibb.co/F7vxCDZ/22.png', 'Natalia Brins', 3567),
(14, 'IBM ', 51345562, 'Calle Del Sol, Zona 7, San Miguel Petapa', 'https://i.ibb.co/NsVxJxj/23.png', 'Mateo Alveric', 3678),
(15, 'ASUS', 56632899, 'Avenida Central, Zona 2, Ciudad de Guatemala', 'https://i.ibb.co/867JMxT/24.png', 'Lucía Beltranis', 3789),
(16, 'SAMSUNG', 46523511, 'Colonia Las Flores, Zona 6, Amatitlán, Guatemala', 'https://i.ibb.co/3pvx1Gk/25.png', 'Alejandro Morque', 3890);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_servicio_reparacion`
--

CREATE TABLE `detalles_servicio_reparacion` (
  `id_detalle_srv_reparacion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `reparacion_id` int(11) DEFAULT NULL,
  `id_repuesto` int(11) DEFAULT NULL,
  `precio_detalle_reparacion` float(8,2) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalles_servicio_reparacion`
--

INSERT INTO `detalles_servicio_reparacion` (`id_detalle_srv_reparacion`, `fecha`, `reparacion_id`, `id_repuesto`, `precio_detalle_reparacion`, `descripcion`) VALUES
(1, '2023-08-24', 1, 220, 250.00, 'Falta de pasta térmica'),
(2, '2023-09-29', 2, 218, 4200.00, 'Cambio de procesador (Intel® Core™ Ultra 9)'),
(3, '2024-09-02', 3, 219, 1256.00, 'Cambio de fuente de alimentación (PSU H360EGM-00 360W)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_equipos`
--

CREATE TABLE `detalle_equipos` (
  `id_detalle_equipo` int(11) NOT NULL,
  `no_orden` int(11) DEFAULT NULL,
  `id_tipo_equipo` smallint(6) DEFAULT NULL,
  `id_marca` smallint(6) DEFAULT NULL,
  `modelo` varchar(70) DEFAULT NULL,
  `descripcion_cliente` varchar(100) DEFAULT NULL,
  `id_agente` int(11) DEFAULT NULL,
  `evaluacion_agente` varchar(150) DEFAULT NULL,
  `observaciones` varchar(150) DEFAULT NULL,
  `especificaciones_equipo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_equipos`
--

INSERT INTO `detalle_equipos` (`id_detalle_equipo`, `no_orden`, `id_tipo_equipo`, `id_marca`, `modelo`, `descripcion_cliente`, `id_agente`, `evaluacion_agente`, `observaciones`, `especificaciones_equipo`) VALUES
(1, 1, 2, 1, 'MacBook Air', 'Se calienta demasiado', 10010, 'Revision de pasta térmica, limpiar povo y verificación de ventiladores.', 'Laptop llena de polvo.', 'Con cargador'),
(2, 2, 2, 3, 'Galaxy Book', 'Computadora lenta', 10010, 'Esto implica reemplazar componentes como el procesador, la memoria RAM o el disco duro por otros más potentes.', '', 'Con cargador'),
(3, 3, 2, 2, 'XPS', 'La pantalla ya no enciende', 10012, 'Posible fallo en la fuente de alimentación.', 'rayada en la parte de atras de la pantalla  y pantalla dañada.', 'Sin cargador'),
(4, 4, 1, 1, 'IPhone 14 Pro', 'Celular lento', 10012, 'Optimizar la memoria RAM.', '', 'Sin cargador'),
(5, 5, 1, 1, 'Iphone 15', 'Celular lento', 10012, 'Optimizar la memoria RAM.', '', 'Con cargador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `dpi` bigint(13) DEFAULT NULL,
  `primer_nombre` varchar(60) NOT NULL,
  `segundo_nombre` varchar(60) NOT NULL,
  `primer_apellido` varchar(60) NOT NULL,
  `segundo_apellido` varchar(60) NOT NULL,
  `nit` int(8) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` int(8) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `id_rol` smallint(6) DEFAULT NULL,
  `id_empresa` smallint(6) DEFAULT NULL,
  `extension` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `dpi`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `nit`, `email`, `telefono`, `direccion`, `id_rol`, `id_empresa`, `extension`) VALUES
(10010, 5486223850101, 'Luis', 'ignacio', 'Pérez', 'Lopez', 23658564, 'agente1@gmail.com', 78565214, 'zona 6', 1, 1, 5025),
(10011, 5846255480101, 'Jose', 'Mario ', 'Álvarez ', 'Gonzales', 54578564, 'tec1@gmail.com', 14785236, 'zona 4', 2, 1, 5026),
(10012, 3548575850101, 'Lucia', 'Fernanda', 'Pérez ', 'Díaz', 52123545, 'agente2@gmail.com', 78945623, 'zona 9', 1, 1, 5027),
(10013, 2548665450101, 'Ian', 'Estuardo', 'poo', 'Sarga', 52548512, 'tec2@gmail.com', 20365984, 'zona 15', 2, 1, 5028),
(10014, 2548926842010, 'Lucas ', 'Estiven', 'Cruz', 'Salazar', 28512565, 'bodega1@gmail.com', 51226135, 'zona 4', 3, 1, 5029),
(10015, 2487890540101, 'Jacobo', 'Manolo', 'Lee', 'Cho', 25181251, 'bodega2@gmail.com', 47103256, 'zona 18', 3, 1, 5030),
(10016, 4586555420101, 'Marco', 'Luis', 'Luna', 'Fernandez', 15821254, 'bodega3@gmail.com', 54652512, 'zona 4', 3, 1, 5031),
(10017, 2945559650101, 'Monica', 'Lucia', 'Monson', 'Linarez', 23659584, 'gerente@gmail.com', 59642515, 'zona 10', 4, 1, 5032);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` smallint(6) NOT NULL,
  `nombre_empresa` varchar(70) NOT NULL,
  `eslogan` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `mascotas_1` varchar(200) DEFAULT NULL,
  `mascotas_2` varchar(200) DEFAULT NULL,
  `vision` varchar(250) DEFAULT NULL,
  `mision` varchar(250) DEFAULT NULL,
  `valores` varchar(250) DEFAULT NULL,
  `historia` varchar(1000) DEFAULT NULL,
  `img_historia` varchar(200) DEFAULT NULL,
  `telefono` int(8) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nombre_empresa`, `eslogan`, `logo`, `mascotas_1`, `mascotas_2`, `vision`, `mision`, `valores`, `historia`, `img_historia`, `telefono`, `direccion`) VALUES
(1, 'Bytes & Bits', 'Resalta el conocimiento técnico y la especialización.', '', 'https://i.ibb.co/bQZ7kPn/10.png', 'https://i.ibb.co/xqLyT01/11.png', 'Ser el referente líder en servicios técnicos en la región, reconocidos por nuestra capacidad para resolver problemas complejos de manera rápida y efectiva, y por nuestra dedicación a mantener la satisfacción y confianza de nuestros clientes.', 'Proporcionar servicios técnicos confiables y eficientes en reparación, recuperación de datos y mantenimiento de sistemas, asegurando que nuestros clientes puedan operar con tranquilidad y seguridad en un mundo digital.', '', 'Bytes and Bites: Innovación y Confiabilidad desde Guatemala. Fundada en 2024 en Guatemala, Bytes and Bites nació de la visión compartida de un grupo de colaboradores apasionados por la tecnología y la innovación. Desde el principio, su misión fue clara: ofrecer soluciones técnicas confiables y de alta calidad que facilitaran la vida digital de sus clientes.\r\n\r\nLo que comenzó como un pequeño taller se ha transformado en un referente en el campo de la reparación y recuperación de datos. El equipo de Bytes and Bites está compuesto por expertos en diversas áreas tecnológicas, todos unidos por un compromiso con la excelencia y un profundo respeto por las necesidades de sus clientes.\r\n\r\nHoy, Bytes and Bites sigue creciendo, manteniendo siempre su compromiso con la innovación y la satisfacción del cliente, asegurándose de que la tecnología siga siendo una herramienta poderosa y accesible para todos.', '', 23290000, ' Mateo Flores 7-51, Calle del Estadio, Cdad. de Guatemala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_colaborador`
--

CREATE TABLE `empresa_colaborador` (
  `id_empresa_colaborador` int(11) NOT NULL,
  `id_empresa` smallint(6) DEFAULT NULL,
  `id_colaborador` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa_colaborador`
--

INSERT INTO `empresa_colaborador` (`id_empresa_colaborador`, `id_empresa`, `id_colaborador`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `estado_id` tinyint(4) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estado_id`, `nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_ordenes`
--

CREATE TABLE `estado_ordenes` (
  `id_estado_orden` tinyint(4) NOT NULL,
  `estado_orden` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_ordenes`
--

INSERT INTO `estado_ordenes` (`id_estado_orden`, `estado_orden`) VALUES
(1, 'Pendiente'),
(2, 'En proceso'),
(3, 'Finalizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_repuesto`
--

CREATE TABLE `estado_repuesto` (
  `id_estado_repuesto` tinyint(4) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_repuesto`
--

INSERT INTO `estado_repuesto` (`id_estado_repuesto`, `estado`) VALUES
(1, 'Activo'),
(2, 'Descontinuado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` smallint(6) NOT NULL,
  `nombre_marca` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre_marca`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Dell'),
(4, 'Sony'),
(5, 'Microsoft'),
(6, 'NVIDIA'),
(7, 'Amazon'),
(8, 'Fitbit'),
(9, 'Trupper'),
(10, 'Stanley'),
(11, 'Kester '),
(12, 'Milwauke'),
(13, 'Dewalt'),
(14, 'Weller'),
(15, 'Kigston'),
(16, 'Toshiba'),
(17, 'Corsair'),
(18, 'Western Digital'),
(19, 'Seagate'),
(20, 'Corsair'),
(21, 'Intel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_servicio`
--

CREATE TABLE `orden_servicio` (
  `no_orden` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_recepcion` date DEFAULT NULL,
  `fecha_entrega_estimada` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `id_estado_orden` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `orden_servicio`
--

INSERT INTO `orden_servicio` (`no_orden`, `id_cliente`, `fecha_recepcion`, `fecha_entrega_estimada`, `fecha_entrega`, `id_estado_orden`) VALUES
(1, 20200001, '2023-08-22', '2023-09-01', '2023-08-31', 3),
(2, 20210003, '2023-09-28', '2023-10-11', '2023-10-09', 3),
(3, 20220030, '2024-08-31', '2024-09-14', '2024-09-14', 3),
(4, 20240019, '2024-08-31', '2024-09-12', '0000-00-00', 2),
(5, 20240020, '2024-09-03', '2024-09-15', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` smallint(6) NOT NULL,
  `nombre_proveedor` varchar(50) DEFAULT NULL,
  `telefono` int(8) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `nombre_contacto` varchar(50) DEFAULT NULL,
  `telefono_contacto` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `telefono`, `direccion`, `nombre_contacto`, `telefono_contacto`) VALUES
(1, 'unasa', 58543635, 'zona 2', 'Sofía  Ramírez ', 58325696),
(2, 'tecsa', 54525252, 'zona 5', 'Mateo  López ', 54856595),
(3, 'universal', 54212322, 'zona 7', 'Camila Martínez ', 54545758),
(4, 'nollgy', 56213325, 'zona10', 'Diego  Sánchez ', 54525551),
(5, 'paradise', 55598755, 'zona 15', 'Valentina  Castro ', 52565356),
(6, 'oklin', 52125668, 'zona 13', 'Lucas Morales ', 54859652);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_queja`
--

CREATE TABLE `reporte_queja` (
  `no_orden` int(11) NOT NULL,
  `descripcion_quejas` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporte_queja`
--

INSERT INTO `reporte_queja` (`no_orden`, `descripcion_quejas`) VALUES
(1, 'Sigue calentándose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `id_repuesto` int(11) NOT NULL,
  `nombre` varchar(70) DEFAULT NULL,
  `id_tipo_equipo` smallint(6) DEFAULT NULL,
  `id_marca` smallint(6) DEFAULT NULL,
  `modelo` varchar(70) DEFAULT NULL,
  `precio_repuesto` float(10,2) DEFAULT NULL,
  `img_repuesto` varchar(200) DEFAULT NULL,
  `cantidad` int(100) DEFAULT NULL,
  `id_proveedor` smallint(6) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `id_estado_repuesto` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`id_repuesto`, `nombre`, `id_tipo_equipo`, `id_marca`, `modelo`, `precio_repuesto`, `img_repuesto`, `cantidad`, `id_proveedor`, `descripcion`, `id_estado_repuesto`) VALUES
(200, 'Juegos de destornilladores de precisión', 12, 11, '66-752', 100.00, 'uploads/repuestos/1729757508_7a7fbcd55ba3853d2de3.jpg', 24, 3, 'Herramientas indispensables para manipular componentes electrónicos pequeños y delicados en reparaciones.', 1),
(201, 'Pinzas de punta fina', 12, 15, 'T0053695299', 100.00, 'uploads/repuestos/1729757523_8c55ff62891b950f6faf.jpg', 32, 2, 'Útiles para manejar pequeños cables, componentes y realizar ajustes de precisión en espacios reducidos.', 1),
(202, 'Estaciones de soldadura y desoldadura', 11, 15, 'WESD51', 3000.00, 'uploads/repuestos/1729757533_c1b4506be36c27d76990.jpg', 22, 1, 'Equipos necesarios para reparar y ensamblar componentes electrónicos mediante la aplicación o remoción de soldadura.', 1),
(203, 'Multímetro digital', 10, 10, 'MT-3', 500.00, 'uploads/repuestos/1729757552_cbb57f79a7c9d58a84f4.jpg', 32, 3, 'Instrumento versátil para medir voltaje, corriente y resistencia, ideal para diagnósticos electrónicos.', 2),
(204, 'discos duro toshiba 500 GB HDD', 9, 17, 'L200', 300.00, 'uploads/repuestos/1729757575_c1aa62bd3f78ee21137c.png', 31, 6, 'Almacenamiento confiable para guardar grandes cantidades de datos y archivos.', 2),
(205, 'discos duro  kingston 1TB SSD ', 9, 16, 'KC2000', 800.00, 'uploads/repuestos/1729757583_0816f84ce4fc28cfa9f2.jpg', 28, 6, 'Unidades de almacenamiento de alta velocidad que mejoran el rendimiento del sistema.', 1),
(206, 'disco duro Western Digital (WD) 1 TB HDD', 9, 19, 'WD Blue', 500.00, 'uploads/repuestos/1729757592_561c32db6d81ba0d6ebf.png', 15, 5, 'Soluciones económicas de gran capacidad para almacenamiento de datos.', 2),
(207, 'dico duro Seagate 500GB HDD', 9, 20, 'Barracuda', 600.00, 'uploads/repuestos/1729757601_c499119269ad3327a693.jpg', 16, 6, 'Almacenamiento confiable para guardar grandes cantidades de datos y archivos.', 1),
(208, 'RAM ddr3 4gb', 8, 18, 'Vengeance LPX', 400.00, 'uploads/repuestos/1729757614_80cbedaaef63b95ef1c7.jpg', 20, 4, 'Módulos de memoria que mejoran el rendimiento en sistemas más antiguos.', 2),
(209, 'RAM ddr3 8gb', 8, 16, 'ValueRAM', 600.00, 'uploads/repuestos/1729757625_297045d5786408a4eb84.jpg', 18, 5, 'Módulos de memoria que mejoran el rendimiento en sistemas más antiguos.', 2),
(210, 'RAM ddr3 16gb', 8, 18, 'Dominator Platinum', 800.00, 'uploads/repuestos/1729757637_69486ee5d0bfcf9391ef.png', 0, 5, 'Módulos de memoria que mejoran el rendimiento en sistemas más antiguos.', 2),
(211, 'RAM ddr4 4gb', 8, 16, 'HyperX Predator', 500.00, 'uploads/repuestos/1729757650_a74c676e9028fa554cf2.jpg', 24, 5, 'Módulos de alta velocidad que incrementan el rendimiento en tareas de computación modernas.', 2),
(212, 'RAM ddr4 8gb', 8, 18, 'Vengeance RGB Pro', 800.00, 'uploads/repuestos/1729757669_66d1227bf3c06ace47a5.jpg', 16, 4, 'Módulos de alta velocidad que incrementan el rendimiento en tareas de computación modernas.', 1),
(213, 'RAM ddr4 16gb', 8, 16, 'HyperX Fury', 1200.00, 'uploads/repuestos/1729757679_cadcec3f469a708b249f.jpg', 32, 4, 'Módulos de alta velocidad que incrementan el rendimiento en tareas de computación modernas.', 1),
(214, 'RAM ddr4 32gb', 8, 18, 'Vengeance LPX', 1500.00, 'uploads/repuestos/1729757697_75495200cafd7bcfb55c.jpg', 24, 4, 'Módulos de alta velocidad que incrementan el rendimiento en tareas de computación modernas.', 1),
(215, 'Tarjetas gráficas nvidia rtx 3060', 7, 7, 'rtx 3060', 3500.00, 'uploads/repuestos/1729757708_6d13097aefb6bbe01691.jpg', 18, 6, 'Potentes unidades de procesamiento gráfico ideales para juegos avanzados y aplicaciones de alto rendimiento visual.', 1),
(216, 'Tarjetas gráficas nvidia rtx 3080', 7, 7, 'rtx 3080', 4000.00, 'uploads/repuestos/1729757722_a62d5cceb485e1028dc4.jpg', 16, 6, 'Potentes unidades de procesamiento gráfico ideales para juegos avanzados y aplicaciones de alto rendimiento visual.', 1),
(217, 'Tarjetas gráficas nvidia rtx 3090', 7, 7, 'rtx 3090', 5000.00, 'uploads/repuestos/1729757738_b3dda5881d23bb0da967.jpg', 14, 6, 'Potentes unidades de procesamiento gráfico ideales para juegos avanzados y aplicaciones de alto rendimiento visual.', 1),
(218, 'Procesador (Intel® Core™ Ultra 9)', 14, 21, 'Intel Core Ultra 9 14900H', 4200.00, 'uploads/repuestos/1729757748_c49d277bf2a7382da5b5.png', 11, 5, 'Procesador de alto rendimiento diseñado para laptops de gama alta y estaciones de trabajo portátiles. ', 1),
(219, 'Unidad de Fuente de Alimentación', 15, 3, 'H360EGM-00', 1256.00, 'uploads/repuestos/1729757765_0a31b4c785aa80bdd8b3.jpg', 24, 2, 'Ofrece una alimentación estable y confiable para asegurar el correcto funcionamiento de tu equipo.', 1),
(220, 'Pasta térmica', 16, 20, 'TM30', 250.00, 'uploads/repuestos/1729757776_58713a7f636bc0da1b27.png', 21, 6, 'Es una opción asequible, pero con un rendimiento decente para aplicaciones en procesadores y tarjetas gráficas. ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` smallint(6) NOT NULL,
  `nombre_rol` varchar(40) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `descripcion`, `precio`) VALUES
(1, 'Agente', '', 1850.00),
(2, 'Técnico', '', 2000.00),
(3, 'Bodega', '', 1500.00),
(4, 'Gerente', '', 3000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secuencia_clientes`
--

CREATE TABLE `secuencia_clientes` (
  `next_not_cached_value` bigint(21) NOT NULL,
  `minimum_value` bigint(21) NOT NULL,
  `maximum_value` bigint(21) NOT NULL,
  `start_value` bigint(21) NOT NULL COMMENT 'start value when sequences is created or value if RESTART is used',
  `increment` bigint(21) NOT NULL COMMENT 'increment value',
  `cache_size` bigint(21) UNSIGNED NOT NULL,
  `cycle_option` tinyint(1) UNSIGNED NOT NULL COMMENT '0 if no cycles are allowed, 1 if the sequence should begin a new cycle when maximum_value is passed',
  `cycle_count` bigint(21) NOT NULL COMMENT 'How many cycles have been done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `secuencia_clientes`
--

INSERT INTO `secuencia_clientes` (`next_not_cached_value`, `minimum_value`, `maximum_value`, `start_value`, `increment`, `cache_size`, `cycle_option`, `cycle_count`) VALUES
(20240020, 1, 9223372036854775806, 20240020, 1, 1000, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secuencia_empleados`
--

CREATE TABLE `secuencia_empleados` (
  `next_not_cached_value` bigint(21) NOT NULL,
  `minimum_value` bigint(21) NOT NULL,
  `maximum_value` bigint(21) NOT NULL,
  `start_value` bigint(21) NOT NULL COMMENT 'start value when sequences is created or value if RESTART is used',
  `increment` bigint(21) NOT NULL COMMENT 'increment value',
  `cache_size` bigint(21) UNSIGNED NOT NULL,
  `cycle_option` tinyint(1) UNSIGNED NOT NULL COMMENT '0 if no cycles are allowed, 1 if the sequence should begin a new cycle when maximum_value is passed',
  `cycle_count` bigint(21) NOT NULL COMMENT 'How many cycles have been done'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `secuencia_empleados`
--

INSERT INTO `secuencia_empleados` (`next_not_cached_value`, `minimum_value`, `maximum_value`, `start_value`, `increment`, `cache_size`, `cycle_option`, `cycle_count`) VALUES
(10018, 1, 9223372036854775806, 10018, 1, 1000, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `servicio_id` tinyint(4) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `img_servicio` varchar(150) NOT NULL,
  `precio_servicio` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`servicio_id`, `nombre`, `img_servicio`, `precio_servicio`) VALUES
(1, 'Reparación de computadora', 'https://i.ibb.co/xJSy8HV/reparacioncomputadoras.jpg', 320.00),
(2, 'Mantenimiento preventivo', 'https://i.ibb.co/18SPFMm/mantenimientopreventivo.jpg', 300.00),
(3, 'Recuperación de datos', 'https://i.ibb.co/s1Nhmgx/recuperaciondedatos.jpg', 550.00),
(4, 'Instalación de software', 'https://i.ibb.co/4j09GFd/instalaciondesoftware.jpg', 200.00),
(5, 'Asistencia en la Migración de Datos', 'https://i.ibb.co/0F9sCrH/migraciondedatos.jpg', 400.00),
(6, 'Seguridad Informática', 'https://i.ibb.co/SRR4bQQ/seguridadinformatica.jpg', 600.00),
(7, 'upgrade total', 'https://i.ibb.co/ng1NDw2/update-total.jpg', 600.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_reparacion`
--

CREATE TABLE `servicios_reparacion` (
  `reparacion_id` int(11) NOT NULL,
  `id_detalle_equipo` int(11) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_finalizacion` date DEFAULT NULL,
  `tecnico_id` int(11) DEFAULT NULL,
  `servicio_id` tinyint(4) DEFAULT NULL,
  `precio_reparacion` float(8,2) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios_reparacion`
--

INSERT INTO `servicios_reparacion` (`reparacion_id`, `id_detalle_equipo`, `fecha_ingreso`, `fecha_finalizacion`, `tecnico_id`, `servicio_id`, `precio_reparacion`, `descripcion`) VALUES
(1, 1, '2023-08-23', '2023-08-29', 10011, 2, 300.00, 'Falta de pasta térmica'),
(2, 2, '2023-09-28', '2023-10-07', 10011, 7, 600.00, 'Cambio de procesador (Intel® Core™ Ultra 9)'),
(3, 3, '2024-09-01', '2024-09-13', 10013, 1, 320.00, 'Cambio de fuente de alimentación (PSU H360EGM-00 360W)'),
(4, 4, '2024-09-01', '2024-09-13', 10013, 2, 300.00, 'Optimizar la memoria RAM.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_empleo`
--

CREATE TABLE `solicitud_empleo` (
  `id_empleado` int(11) NOT NULL,
  `dpi` int(13) DEFAULT NULL,
  `primer_nombre` varchar(60) NOT NULL,
  `segundo_nombre` varchar(60) NOT NULL,
  `primer_apellido` varchar(60) NOT NULL,
  `segundo_apellido` varchar(60) NOT NULL,
  `nit` int(8) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` int(8) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `id_rol` smallint(6) DEFAULT NULL,
  `id_empresa` smallint(6) DEFAULT NULL,
  `curriculum` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_repuestos`
--

CREATE TABLE `solicitud_repuestos` (
  `id_solicitud` int(11) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `servicio_id` tinyint(4) NOT NULL,
  `no_orden` int(11) NOT NULL,
  `id_repuesto` int(11) DEFAULT NULL,
  `detalles_nuevo_repuesto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `solicitud_repuestos`
--

INSERT INTO `solicitud_repuestos` (`id_solicitud`, `fecha_solicitud`, `servicio_id`, `no_orden`, `id_repuesto`, `detalles_nuevo_repuesto`) VALUES
(1, '2024-09-03', 1, 1, 205, ''),
(2, '2023-08-24', 2, 3, 200, ''),
(3, '2024-09-01', 2, 4, 220, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE `tipo_equipo` (
  `id_tipo_equipo` smallint(6) NOT NULL,
  `nombre_tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_equipo`
--

INSERT INTO `tipo_equipo` (`id_tipo_equipo`, `nombre_tipo`) VALUES
(1, 'Telefono'),
(2, 'Laptop'),
(3, 'Teclado'),
(4, 'Mouse'),
(5, 'Auriculares'),
(6, 'Tablet'),
(7, 'Tarjeta de video o grafica '),
(8, 'Tarjeta RAM'),
(9, 'Disco Duro'),
(10, 'Multimetros'),
(11, 'Soldadura'),
(12, 'Herramientas Electronicas'),
(13, 'Desktop'),
(14, 'Procesador (Intel® Core™ Ultra 9)'),
(15, 'Unidad de Fuente de Alimentación'),
(16, 'Pasta térmica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_empleado` int(11) NOT NULL,
  `nombre_usuario` varchar(30) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  `contrasenia_p` varchar(100) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  `estado_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_empleado`, `nombre_usuario`, `contrasenia`, `contrasenia_p`, `fecha_creacion`, `fecha_modificacion`, `estado_id`) VALUES
(10010, 'agente1@gmail.com', '$2y$10$qP.JqFz4URLPFVVVI1uQOu8kcDOqQBtfjRgMC5Lk8kCD3O6wFKDw2', 'agente1', '2023-06-15', '2023-06-15', 1),
(10011, 'tec1@gmail.com', '$2y$10$0uEAhWDd48D42JFNPbxb0eT6KxMARcvXxPtr0mk9lGzo7EotYPdeC', 'tecnico1', '2022-07-20', '2022-07-20', 1),
(10012, 'agente2@gmail.com', '$2y$10$LFg33y1scQscPDL.or/aMOcxfACA2I7BKzXeFezBaiNCR51UMYyXC', 'agente2', '2022-04-07', '2022-04-07', 1),
(10013, 'tec2@gmail.com', '$2y$10$l8yPZ668frzhpAMq5E.33.E9ThSAeA22hA5kLBatmX9vn7T8TwCsO', 'tecnico2', '2023-05-31', '2023-05-31', 1),
(10014, 'bodega1@gmail.com', '$2y$10$p0no1mxBPb.IcHeSNxchkOgtVYiipAM4xeH20IbiUtT1XbE40tsOa', 'bodega1', '2021-03-25', '2023-11-15', 1),
(10015, 'bodega2@gmail.com', '$2y$10$rRFZ48cqsKKn.ni8rhO13.TeCzzjHtvNexFZHvyQ6i/gLpIpR37PG', 'bodega2', '2021-03-26', '2023-07-13', 2),
(10016, 'bodega3@gmail.com', '$2y$10$JxGF1bn06JCCjvV2U/5fl.vtJk.0ucF5bcS0zsyHEqJGoRBifszp6', 'bodega3', '2021-03-27', '2021-03-27', 1),
(10017, 'gerente@gmail.com', '$2y$10$/DKoN5zAtSo.dQ.BxNAMI.jZUsFe7/RNURlD0oT.9mpjX3vpxbzwm', 'gerente', '2024-09-01', '2024-09-01', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk3_id_empresa` (`id_empresa`);

--
-- Indices de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id_colaborador`);

--
-- Indices de la tabla `detalles_servicio_reparacion`
--
ALTER TABLE `detalles_servicio_reparacion`
  ADD PRIMARY KEY (`id_detalle_srv_reparacion`),
  ADD KEY `fk_reparacion_id` (`reparacion_id`),
  ADD KEY `fk_id_repuesto` (`id_repuesto`);

--
-- Indices de la tabla `detalle_equipos`
--
ALTER TABLE `detalle_equipos`
  ADD PRIMARY KEY (`id_detalle_equipo`),
  ADD KEY `fk_id_marca` (`id_marca`),
  ADD KEY `fk_id_tipo_equipo` (`id_tipo_equipo`),
  ADD KEY `fk_no_orden` (`no_orden`),
  ADD KEY `fk_id_agente` (`id_agente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_id_rol` (`id_rol`),
  ADD KEY `fk2_id_empresa` (`id_empresa`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `empresa_colaborador`
--
ALTER TABLE `empresa_colaborador`
  ADD PRIMARY KEY (`id_empresa_colaborador`),
  ADD KEY `fk_id_colaborador` (`id_colaborador`),
  ADD KEY `fk_id_empresa` (`id_empresa`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `estado_ordenes`
--
ALTER TABLE `estado_ordenes`
  ADD UNIQUE KEY `id_estado_orden` (`id_estado_orden`);

--
-- Indices de la tabla `estado_repuesto`
--
ALTER TABLE `estado_repuesto`
  ADD PRIMARY KEY (`id_estado_repuesto`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD PRIMARY KEY (`no_orden`),
  ADD KEY `fk_id_cliente` (`id_cliente`),
  ADD KEY `fk_id_estado_orden` (`id_estado_orden`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `reporte_queja`
--
ALTER TABLE `reporte_queja`
  ADD PRIMARY KEY (`no_orden`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`id_repuesto`),
  ADD KEY `fk2_id_marca` (`id_marca`),
  ADD KEY `fk2_id_tipo_equipo` (`id_tipo_equipo`),
  ADD KEY `fk_id_proveedor` (`id_proveedor`),
  ADD KEY `fk_id_estado_repuesto` (`id_estado_repuesto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`servicio_id`);

--
-- Indices de la tabla `servicios_reparacion`
--
ALTER TABLE `servicios_reparacion`
  ADD PRIMARY KEY (`reparacion_id`),
  ADD KEY `fk_id_detalle_equipo` (`id_detalle_equipo`),
  ADD KEY `fk_servicio_id` (`servicio_id`),
  ADD KEY `fk_tecnico_id` (`tecnico_id`);

--
-- Indices de la tabla `solicitud_empleo`
--
ALTER TABLE `solicitud_empleo`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `solicitud_repuestos`
--
ALTER TABLE `solicitud_repuestos`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `servicio_id` (`servicio_id`),
  ADD KEY `no_orden` (`no_orden`),
  ADD KEY `id_repuesto` (`id_repuesto`);

--
-- Indices de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  ADD PRIMARY KEY (`id_tipo_equipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_estado_id` (`estado_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20240021;

--
-- AUTO_INCREMENT de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id_colaborador` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `detalles_servicio_reparacion`
--
ALTER TABLE `detalles_servicio_reparacion`
  MODIFY `id_detalle_srv_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_equipos`
--
ALTER TABLE `detalle_equipos`
  MODIFY `id_detalle_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10018;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresa_colaborador`
--
ALTER TABLE `empresa_colaborador`
  MODIFY `id_empresa_colaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `estado_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_ordenes`
--
ALTER TABLE `estado_ordenes`
  MODIFY `id_estado_orden` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_repuesto`
--
ALTER TABLE `estado_repuesto`
  MODIFY `id_estado_repuesto` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  MODIFY `no_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `servicio_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicios_reparacion`
--
ALTER TABLE `servicios_reparacion`
  MODIFY `reparacion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitud_repuestos`
--
ALTER TABLE `solicitud_repuestos`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  MODIFY `id_tipo_equipo` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk3_id_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_servicio_reparacion`
--
ALTER TABLE `detalles_servicio_reparacion`
  ADD CONSTRAINT `fk_id_repuesto` FOREIGN KEY (`id_repuesto`) REFERENCES `repuestos` (`id_repuesto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reparacion_id` FOREIGN KEY (`reparacion_id`) REFERENCES `servicios_reparacion` (`reparacion_id`);

--
-- Filtros para la tabla `detalle_equipos`
--
ALTER TABLE `detalle_equipos`
  ADD CONSTRAINT `fk_id_agente` FOREIGN KEY (`id_agente`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_marca` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`),
  ADD CONSTRAINT `fk_id_tipo_equipo` FOREIGN KEY (`id_tipo_equipo`) REFERENCES `tipo_equipo` (`id_tipo_equipo`),
  ADD CONSTRAINT `fk_no_orden` FOREIGN KEY (`no_orden`) REFERENCES `orden_servicio` (`no_orden`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk2_id_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `empresa_colaborador`
--
ALTER TABLE `empresa_colaborador`
  ADD CONSTRAINT `fk_id_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_socio` FOREIGN KEY (`id_colaborador`) REFERENCES `colaboradores` (`id_colaborador`);

--
-- Filtros para la tabla `orden_servicio`
--
ALTER TABLE `orden_servicio`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_estado_orden` FOREIGN KEY (`id_estado_orden`) REFERENCES `estado_ordenes` (`id_estado_orden`);

--
-- Filtros para la tabla `reporte_queja`
--
ALTER TABLE `reporte_queja`
  ADD CONSTRAINT `fk2_no_orden` FOREIGN KEY (`no_orden`) REFERENCES `orden_servicio` (`no_orden`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD CONSTRAINT `fk2_id_marca` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`),
  ADD CONSTRAINT `fk2_id_tipo_equipo` FOREIGN KEY (`id_tipo_equipo`) REFERENCES `tipo_equipo` (`id_tipo_equipo`),
  ADD CONSTRAINT `fk_id_estado_repuesto` FOREIGN KEY (`id_estado_repuesto`) REFERENCES `estado_repuesto` (`id_estado_repuesto`),
  ADD CONSTRAINT `fk_id_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicios_reparacion`
--
ALTER TABLE `servicios_reparacion`
  ADD CONSTRAINT `fk_id_detalle_equipo` FOREIGN KEY (`id_detalle_equipo`) REFERENCES `detalle_equipos` (`id_detalle_equipo`),
  ADD CONSTRAINT `fk_servicio_id` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`servicio_id`),
  ADD CONSTRAINT `fk_tecnico_id` FOREIGN KEY (`tecnico_id`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud_repuestos`
--
ALTER TABLE `solicitud_repuestos`
  ADD CONSTRAINT `solicitud_repuestos_ibfk_1` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`servicio_id`),
  ADD CONSTRAINT `solicitud_repuestos_ibfk_2` FOREIGN KEY (`no_orden`) REFERENCES `orden_servicio` (`no_orden`),
  ADD CONSTRAINT `solicitud_repuestos_ibfk_3` FOREIGN KEY (`id_repuesto`) REFERENCES `repuestos` (`id_repuesto`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_estado_id` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`estado_id`),
  ADD CONSTRAINT `fk_id_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
