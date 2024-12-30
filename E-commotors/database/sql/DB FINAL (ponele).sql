-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2024 a las 19:52:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.27

CREATE DATABASE IF NOT EXISTS `motorcycle_management`;
USE `motorcycle_management`;

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
(1, 'Casco AGV K1', 150.00, 'casco_agv_k1.jpg', 1, 'Casco integral de alta calidad, con un diseño aerodinámico y gran confort. Ideal para motociclistas urbanos y deportivos.'),
(2, 'Casco Shark Spartan GT', 400.00, 'casco_shark_spartan_gt.jpg', 1, 'Casco integral premium con ventilación avanzada y visera anti-rayas, diseñado para mayor seguridad y comodidad en rutas largas.'),
(3, 'Antiparras Oakley Airbrake MX', 120.00, 'antiparras_oakley_airbrake.jpg', 2, 'Antiparras para motocross con lentes intercambiables, diseño anti-vaho y gran protección para los ojos en condiciones extremas.'),
(4, 'Antiparras 100% Accuri 2', 90.00, 'antiparras_100_accuri2.jpg', 2, 'Antiparras deportivas con lente de alta definición y ventilación estratégica, perfectas para motocross y enduro.'),
(5, 'Guantes Alpinestars SMX-2 Air Carbon V2', 100.00, 'guantes_alpinestars_smx2.jpg', 3, 'Guantes ligeros y ventilados, con protección de carbono en los nudillos, ideales para conducción deportiva y urbana.'),
(6, 'Guantes Dainese 4 Stroke', 150.00, 'guantes_dainese_4stroke.jpg', 3, 'Guantes de alta protección y confort, con piel de cabra y refuerzos de carbono. Perfectos para motociclistas de pista y carretera.'),
(7, 'Botas Sidi Crossfire 3 SRS', 500.00, 'botas_sidi_crossfire.jpg', 4, 'Botas de motocross de alta gama, con protección avanzada y diseño de ajuste perfecto para terrenos difíciles.'),
(8, 'Botas Alpinestars Tech 7', 350.00, 'botas_alpinestars_tech7.jpg', 4, 'Botas de motocross con excelente protección para tobillos y pantorrillas. Perfectas para pilotos que buscan máximo control y seguridad.'),
(9, 'Puños Renthal Grip', 30.00, 'punos_renthal_grip.jpg', 5, 'Puños de goma para moto con excelente agarre, ideales para todo tipo de motocross, enduro y motos deportivas.'),
(10, 'Puños ProGrip 714', 25.00, 'punos_progrip_714.jpg', 5, 'Puños ergonómicos con excelente adherencia y confort. Diseñados para reducir la fatiga en largas travesías.'),
(11, 'Casco Bell Moto-9S Flex', 650.00, 'casco_bell_moto9s.jpg', 1, 'Casco de motocross con sistema de protección avanzada para impacto, gran ventilación y comodidad durante rutas largas y extremas.'),
(12, 'Casco HJC CL-17', 120.00, 'casco_hjc_cl17.jpg', 1, 'Casco integral con sistema de ventilación eficiente, visera anti-rayas y un diseño cómodo para todo tipo de motociclistas.');

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
(1, 'Thiago Mathus', 'Reclamo', 'mensaje de prueba 123', 'se tendría que cargar automaticamente (arreglar)', '2024-12-28 02:32:03', '2024-12-28 02:32:03');

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
(1, 'Honda CB500X', 'Nuevo', 7000.00, 'foto_honda_cb500x.jpg', 4, 1, 'Honda CB500X 2024', 'Moto Touring ideal para viajes largos, con una excelente relación calidad-precio. Motor de 471cc y tecnología avanzada.', 'imagen1.jpg', 'Negro'),
(2, 'Zanella ZB 110', 'Usada', 1500.00, 'foto_zanella_zb110.jpg', 3, 2, 'Zanella ZB 110 2021', 'Scooter urbana ideal para moverse en la ciudad, fácil de manejar y económica. Motor de 110cc.', 'imagen1.jpg', 'Rojo'),
(3, 'Yamaha FZ25', 'Nuevo', 4500.00, 'foto_yamaha_fz25.jpg', 5, 5, 'Yamaha FZ25 2024', 'Moto Naked con un diseño agresivo y motor de 249cc, perfecta para conducción deportiva y urbana.', 'imagen1.jpg', 'Azul'),
(4, 'BMW G 310 GS', 'Nuevo', 5000.00, 'foto_bmw_g310gs.jpg', 2, 6, 'BMW G 310 GS 2024', 'Moto Enduro ideal para aventuras fuera de carretera, motor de 313cc y diseño robusto para terrenos difíciles.', 'imagen1.jpg', 'Blanco'),
(5, 'Kawasaki Ninja 400', 'Nuevo', 6500.00, 'foto_kawasaki_ninja400.jpg', 1, 7, 'Kawasaki Ninja 400 2024', 'Deportiva ligera con un motor de 399cc, ideal para quienes buscan velocidad y agilidad en la ciudad o carretera.', 'imagen1.jpg', 'Verde'),
(6, 'Motomel Skua 250', 'Nuevo', 3800.00, 'foto_motomel_skua250.jpg', 2, 3, 'Motomel Skua 250 2024', 'Moto Enduro con motor de 250cc, ideal para aventuras fuera de carretera con excelente suspensión y rendimiento.', 'imagen1.jpg', 'Amarillo'),
(7, 'Gilera SM 50', 'Usada', 1200.00, 'foto_gilera_sm50.jpg', 3, 4, 'Gilera SM 50 2020', 'Scooter económica y compacta, ideal para principiantes y para moverse por la ciudad. Motor de 50cc.', 'imagen1.jpg', 'Negro'),
(8, 'Yamaha MT-03', 'Nuevo', 5000.00, 'foto_yamaha_mt03.jpg', 5, 5, 'Yamaha MT-03 2024', 'Moto Naked con un diseño agresivo y motor de 321cc, perfecta para quienes buscan agilidad y estilo urbano.', 'imagen1.jpg', 'Gris'),
(9, 'Honda CBR500R', 'Nuevo', 7000.00, 'foto_honda_cbr500r.jpg', 1, 1, 'Honda CBR500R 2024', 'Deportiva de 500cc con motor bicilíndrico, ideal para quienes buscan velocidad y control en la ciudad y carretera.', 'imagen1.jpg', 'Rojo'),
(10, 'BMW R 1250 GS', 'Nuevo', 22000.00, 'foto_bmw_r1250gs.jpg', 4, 6, 'BMW R 1250 GS 2024', 'Moto Touring con motor de 1250cc, ideal para largos viajes con gran comodidad y tecnología avanzada.', 'imagen1.jpg', 'Negro Mate'),
(11, 'Kawasaki Versys 650', 'Nuevo', 8500.00, 'foto_kawasaki_versys650.jpg', 4, 7, 'Kawasaki Versys 650 2024', 'Moto Touring con motor de 649cc, ideal para viajes largos y una excelente estabilidad en todo tipo de carreteras.', 'imagen1.jpg', 'Verde'),
(12, 'Motomel Blitz 110', 'Usada', 1200.00, 'foto_motomel_blitz110.jpg', 3, 3, 'Motomel Blitz 110 2020', 'Scooter pequeña y económica con motor de 110cc, ideal para moverse rápidamente por la ciudad.', 'imagen1.jpg', 'Blanco'),
(13, 'Zanella RX 150', 'Nuevo', 2500.00, 'foto_zanella_rx150.jpg', 2, 2, 'Zanella RX 150 2024', 'Moto Enduro con motor de 150cc, perfecta para quienes buscan aventura fuera de la carretera con gran fiabilidad.', 'imagen1.jpg', 'Verde'),
(14, 'Honda CRF250L', 'Nuevo', 6500.00, 'foto_honda_crf250l.jpg', 2, 1, 'Honda CRF250L 2024', 'Moto Enduro ligera y manejable, con motor de 249cc, ideal para rutas fuera de carretera y de aventura.', 'imagen1.jpg', 'Rojo'),
(15, 'Yamaha XTZ 250', 'Nuevo', 5000.00, 'foto_yamaha_xtz250.jpg', 2, 5, 'Yamaha XTZ 250 2024', 'Moto Enduro con gran rendimiento en terrenos difíciles, motor de 249cc y diseño optimizado para aventuras.', 'imagen1.jpg', 'Azul'),
(16, 'Gilera 110', 'Usada', 1200.00, 'foto_gilera_110.jpg', 3, 4, 'Gilera 110 2020', 'Scooter práctica y económica para moverse en la ciudad, con motor de 110cc ideal para uso diario.', 'imagen1.jpg', 'Rojo'),
(17, 'Kawasaki Z400', 'Nuevo', 7500.00, 'foto_kawasaki_z400.jpg', 5, 7, 'Kawasaki Z400 2024', 'Moto Naked con motor de 399cc, agresiva y con una excelente relación peso-potencia para la conducción urbana y deportiva.', 'imagen1.jpg', 'Verde'),
(18, 'BMW F 750 GS', 'Nuevo', 12000.00, 'foto_bmw_f750gs.jpg', 4, 6, 'BMW F 750 GS 2024', 'Moto Touring con motor de 853cc, ideal para viajes largos y terrenos mixtos, con tecnología avanzada y gran confort.', 'imagen1.jpg', 'Azul');

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
  `nombre_repuesto` varchar(255) DEFAULT NULL,
  `precio_repuesto` decimal(10,2) DEFAULT NULL,
  `estado_repuesto` varchar(50) DEFAULT NULL,
  `foto_repuesto` varchar(255) DEFAULT NULL,
  `tipo_de_repuesto` int(11) DEFAULT NULL,
  `descripcion_repuesto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repuesto`
--

INSERT INTO `repuesto` (`id_repuesto`, `nombre_repuesto`, `precio_repuesto`, `estado_repuesto`, `foto_repuesto`, `tipo_de_repuesto`, `descripcion_repuesto`) VALUES
(1, 'Piñón Honda CRF450R', 45.00, NULL, 'pinon_honda_crf450r.jpg', 1, 'Piñón de transmisión para Honda CRF450R, fabricado en acero forjado de alta resistencia, ideal para uso en motocross y enduro.'),
(2, 'Piñón Yamaha WR250F', 50.00, NULL, 'pinon_yamaha_wr250f.jpg', 1, 'Piñón de 13 dientes para Yamaha WR250F, diseñado para optimizar el rendimiento en terrenos accidentados y mejorar la aceleración.'),
(3, 'Piñón Kawasaki KX125', 40.00, NULL, 'pinon_kawasaki_kx125.jpg', 1, 'Piñón de transmisión de alta calidad para Kawasaki KX125, ideal para mejorar el rendimiento en competiciones y entrenamientos de motocross.'),
(4, 'Piñón Suzuki RM-Z450', 55.00, NULL, 'pinon_suzuki_rmz450.jpg', 1, 'Piñón para Suzuki RM-Z450, fabricado en acero tratado para una mayor durabilidad y fiabilidad en competiciones de motocross y rally.'),
(5, 'Piñón KTM 350 EXC-F', 52.00, NULL, 'pinon_ktm_350exc.jpg', 1, 'Piñón de 14 dientes para KTM 350 EXC-F, diseñado para mejorar la aceleración y ofrecer un rendimiento superior en condiciones de enduro y rally.'),
(6, 'Manubrio Pro Taper', 85.00, NULL, 'manubrio_pro_taper.jpg', 2, 'Manubrio Pro Taper de aleación ligera y resistente, ideal para motocross.'),
(7, 'Manubrio Renthal FatBar', 90.00, NULL, 'manubrio_renthal_fatbar.jpg', 2, 'Manubrio Renthal FatBar para motocicletas de alto rendimiento, fabricado con aluminio de calidad aeronáutica.'),
(8, 'Manubrio Enduro Cross', 70.00, NULL, 'manubrio_enduro_cross.jpg', 2, 'Manubrio diseñado para motocicletas de enduro y cross, resistente a impactos.'),
(9, 'Manubrio Custom Negro', 65.00, NULL, 'manubrio_custom_negro.jpg', 2, 'Manubrio customizado negro mate para motocicletas personalizadas.'),
(10, 'Pastilla de Freno Brembo', 55.00, NULL, 'pastilla_freno_brembo.jpg', 3, 'Pastilla de freno Brembo de alto rendimiento, diseñada para motocicletas deportivas.'),
(11, 'Pastilla de Freno Semi-Metálica', 40.00, NULL, 'pastilla_freno_semi_metalica.jpg', 3, 'Pastilla de freno semi-metálica para uso en ciudad y carretera.'),
(12, 'Pastilla de Freno Cerámica', 60.00, NULL, 'pastilla_freno_ceramica.jpg', 3, 'Pastilla de freno cerámica de larga duración y gran efectividad.'),
(13, 'Pastilla de Freno Trasera', 45.00, NULL, 'pastilla_freno_trasera.jpg', 3, 'Pastilla de freno trasera compatible con múltiples modelos de motocicletas.'),
(14, 'Pastilla de Freno Racing', 70.00, NULL, 'pastilla_freno_racing.jpg', 3, 'Pastilla de freno para competición, fabricada con materiales de alta fricción.');

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
('eaSfqymsKqZi26ite8XkAg7vWDH6vrynwjfGqAmr', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMjVOQWpaMm9VUm9oV0FWNTk2N0lhTllwMWt6NmZvT1JENGpydEhWZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hY2Npb24tbWVuc2FqZS1zaW5fcmVzcG9uZGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1735588193);

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
(1, 'Cascos'),
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

--
-- Volcado de datos para la tabla `tipo_de_repuesto`
--

INSERT INTO `tipo_de_repuesto` (`id_repuesto`, `nombre_repuesto`) VALUES
(1, 'Piñones'),
(2, 'Manubrios'),
(3, 'Pastillas de Freno');

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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan Perez', 'juan@example.com', NULL, '$2y$12$pKjj9DnK6vfVTWLaqnioUOR7EaEDoazapX/orjJG6Pkv1Md.xcRCK', NULL, '2024-12-28 00:37:03', '2024-12-28 00:37:03');

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
  MODIFY `id_accesorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id_moto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tipo_de_accesorio`
--
ALTER TABLE `tipo_de_accesorio`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_de_repuesto`
--
ALTER TABLE `tipo_de_repuesto`
  MODIFY `id_repuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
