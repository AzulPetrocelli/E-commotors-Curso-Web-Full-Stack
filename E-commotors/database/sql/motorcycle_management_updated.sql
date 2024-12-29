CREATE DATABASE IF NOT EXISTS motorcycle_management;
USE motorcycle_management;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2024 a las 02:35:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `motorcycle_management`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorio`
--

CREATE TABLE `accesorio` (
  `id_accesorio` int(11) NOT NULL,
  `nombre_accesorio` varchar(255) DEFAULT NULL,
  `precio_accesorio` decimal(10,2) DEFAULT NULL,
  `foto_accesorio` varchar(255) DEFAULT NULL,
  `id_tipo` int(11) DEFAULT NULL,
  `descripcion_accesorio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `accesorio`
--

INSERT INTO `accesorio` (`id_accesorio`, `nombre_accesorio`, `precio_accesorio`, `foto_accesorio`, `id_tipo`, `descripcion_accesorio`) VALUES
(1, 'Casquinho 123', 23311.00, 'casco1.jpg', 1, 'fdjfdifebfebfefbifebofebuiefbiufeboefbef'),
(2, 'Antiparras Facheras', 22883.00, 'casco2.jpg', 2, 'Unas antiparras re zarpadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Calle'),
(2, 'Enduro'),
(3, 'Scooter'),
(4, 'Touring'),
(5, 'Naked'),
(6, 'Retro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compatibilidad_repuesto`
--

CREATE TABLE `compatibilidad_repuesto` (
  `id_repuesto` int(11) NOT NULL,
  `id_moto` int(11) NOT NULL,
  `id_modelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(255) DEFAULT NULL,
  `descripcion_marca` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`, `descripcion_marca`) VALUES
(1, 'Honda', 'Una marca reconocida de motocicletas'),
(2, 'Zanella', 'blablablablablabla'),
(3, 'Motomel', '	\r\nblablablablablabla\r\n'),
(4, 'Gilera', '	\r\nblablablablablabla\r\n'),
(5, 'Yamaha', '	\r\nblablablablablabla\r\n'),
(6, 'BMW', '	\r\nblablablablablabla\r\n'),
(7, 'Kawasaki', '	\r\nblablablablablabla\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `nombre_mensaje` varchar(255) DEFAULT NULL,
  `tipo_mensaje` varchar(100) DEFAULT NULL,
  `descripcion_mensaje` text DEFAULT NULL,
  `productos_consultados` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `nombre_mensaje`, `tipo_mensaje`, `descripcion_mensaje`, `productos_consultados`, `created_at`, `updated_at`) VALUES
(1, 'Thiago Mathus', 'Reclamo', 'La verdad que me parecen unos Pelotudos', 'que se yo', '2024-12-28 02:32:03', '2024-12-28 02:32:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_27_232043_add_timestamps_to_mensaje_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion_modelo` text DEFAULT NULL,
  `motos_modelo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moto`
--

CREATE TABLE `moto` (
  `id_moto` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `precio_moto` decimal(10,2) DEFAULT NULL,
  `foto_moto` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `titulo_card` text DEFAULT NULL,
  `descripcion_moto` text DEFAULT NULL,
  `imagenes` text DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `moto`
--

INSERT INTO `moto` (`id_moto`, `nombre`, `estado`, `precio_moto`, `foto_moto`, `id_categoria`, `id_marca`, `titulo_card`, `descripcion_moto`, `imagenes`, `color`) VALUES
(1, 'Honda CBR', 'nuevo', 18000.00, 'hondaCBR.jpg', 1, 1, 'Conocimiento sobre Honda CBR', 'Descripción detallada de la Honda CBR', 'honda_cbr.jpg', 'rojo'),
(2, 'Royal Enfield Himalayan', NULL, 180000.00, 'reh.jpg', 3, 5, NULL, 'Descripción detallada de la Moto', NULL, NULL),
(3, 'Honda XR 400cc', NULL, 230000.00, 'moto3.jpg', 4, 5, NULL, 'Descripción detallada de la Moto', NULL, NULL),
(4, 'Kawasaki XD 300cc', NULL, 590000.00, 'moto2.jpg', 6, 2, NULL, 'Descripción detallada de la Moto', NULL, NULL),
(5, 'Moto sdasd', NULL, 23131.00, 'reh.jpg\r\n', 2, 5, NULL, 'Descripción detallada de la Moto', NULL, NULL),
(6, 'Moto', NULL, 32232.00, 'reh.jpg', 2, 4, NULL, 'Descripción detallada de la Moto', NULL, NULL),
(7, 'gfgffgfggf', NULL, 9992.00, 'reh.jpg', 1, 4, NULL, 'Descripción detallada de la Moto', NULL, NULL),
(8, 'ndasdajkad', NULL, 22222.00, 'reh.jpg', 5, 3, NULL, 'Descripción detallada de la Moto', NULL, NULL),
(9, 'fgfgdd', NULL, 11233.00, 'reh.jpg', 3, 3, NULL, 'Descripción detallada de la Moto', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moto_accesorio`
--

CREATE TABLE `moto_accesorio` (
  `id_moto` int(11) NOT NULL,
  `id_accesorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `id_repuesto` int(11) NOT NULL,
  `nombre_accesorio` varchar(255) DEFAULT NULL,
  `precio_accesorio` decimal(10,2) DEFAULT NULL,
  `estado_accesorio` varchar(50) DEFAULT NULL,
  `foto_accesorio` varchar(255) DEFAULT NULL,
  `tipo_de_repuesto` int(11) DEFAULT NULL,
  `descripcion_accesorio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ufU1xeoYLRF4bnHCWqKtWMwJCuAnrumqP4n7WaUs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVpncE9scUxVTEFZdGhBaHR3N29pMkplZXJGcUNsdUNHR3RoVW5JaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hY2Npb24tbW90by9hZ3JlZ2FyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1735438604);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_accesorio`
--

CREATE TABLE `tipo_de_accesorio` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_de_accesorio`
--

INSERT INTO `tipo_de_accesorio` (`id_tipo`, `nombre_tipo`) VALUES
(1, 'Casco'),
(2, 'Antiparras'),
(3, 'Guantes'),
(4, 'Botas'),
(5, 'Puños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_repuesto`
--

CREATE TABLE `tipo_de_repuesto` (
  `id_repuesto` int(11) NOT NULL,
  `nombre_repuesto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesorio`
--
ALTER TABLE `accesorio`
  ADD PRIMARY KEY (`id_accesorio`),
  ADD KEY `idx_nombre_accesorio` (`nombre_accesorio`),
  ADD KEY `idx_accesorio_tipo` (`id_tipo`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compatibilidad_repuesto`
--
ALTER TABLE `compatibilidad_repuesto`
  ADD PRIMARY KEY (`id_repuesto`,`id_moto`),
  ADD KEY `id_moto` (`id_moto`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD KEY `idx_nombre_marca` (`nombre_marca`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `idx_modelo_nombre` (`nombre`);

--
-- Indices de la tabla `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id_moto`),
  ADD KEY `idx_moto_categoria` (`id_categoria`),
  ADD KEY `idx_moto_marca` (`id_marca`),
  ADD KEY `idx_nombre_moto` (`nombre`);

--
-- Indices de la tabla `moto_accesorio`
--
ALTER TABLE `moto_accesorio`
  ADD PRIMARY KEY (`id_moto`,`id_accesorio`),
  ADD KEY `id_accesorio` (`id_accesorio`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD PRIMARY KEY (`id_repuesto`),
  ADD KEY `idx_repuesto_tipo` (`tipo_de_repuesto`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tipo_de_accesorio`
--
ALTER TABLE `tipo_de_accesorio`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tipo_de_repuesto`
--
ALTER TABLE `tipo_de_repuesto`
  ADD PRIMARY KEY (`id_repuesto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesorio`
--
ALTER TABLE `accesorio`
  MODIFY `id_accesorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `moto`
--
ALTER TABLE `moto`
  MODIFY `id_moto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_de_accesorio`
--
ALTER TABLE `tipo_de_accesorio`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_de_repuesto`
--
ALTER TABLE `tipo_de_repuesto`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesorio`
--
ALTER TABLE `accesorio`
  ADD CONSTRAINT `accesorio_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_de_accesorio` (`id_tipo`);

--
-- Filtros para la tabla `compatibilidad_repuesto`
--
ALTER TABLE `compatibilidad_repuesto`
  ADD CONSTRAINT `compatibilidad_repuesto_ibfk_1` FOREIGN KEY (`id_repuesto`) REFERENCES `repuesto` (`id_repuesto`),
  ADD CONSTRAINT `compatibilidad_repuesto_ibfk_2` FOREIGN KEY (`id_moto`) REFERENCES `moto` (`id_moto`);

--
-- Filtros para la tabla `moto`
--
ALTER TABLE `moto`
  ADD CONSTRAINT `moto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `moto_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `moto_accesorio`
--
ALTER TABLE `moto_accesorio`
  ADD CONSTRAINT `moto_accesorio_ibfk_1` FOREIGN KEY (`id_moto`) REFERENCES `moto` (`id_moto`),
  ADD CONSTRAINT `moto_accesorio_ibfk_2` FOREIGN KEY (`id_accesorio`) REFERENCES `accesorio` (`id_accesorio`);

--
-- Filtros para la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD CONSTRAINT `repuesto_ibfk_1` FOREIGN KEY (`tipo_de_repuesto`) REFERENCES `tipo_de_repuesto` (`id_repuesto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
