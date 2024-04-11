-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para portfolionew
CREATE DATABASE IF NOT EXISTS `u297136653_porfolio` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `u297136653_porfolio`;

-- Volcando estructura para tabla portfolionew.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portfolionew.imagens
CREATE TABLE IF NOT EXISTS `imagens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_proyecto` int NOT NULL,
  `ruta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.imagens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portfolionew.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contador` int unsigned DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.mensajes: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portfolionew.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.migrations: ~6 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_08_191611_create_stacks_table', 2),
	(6, '2023_11_08_191912_create_proyectos_table', 3),
	(7, '2023_11_11_211913_create_mensajes_table', 4),
	(8, '2023_11_22_181440_create_imagenes_table', 5);

-- Volcando estructura para tabla portfolionew.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portfolionew.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portfolionew.proyectos
CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resumen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.proyectos: ~2 rows (aproximadamente)
INSERT INTO `proyectos` (`id`, `nombre`, `resumen`, `descripcion`, `status`, `link`, `imagen`, `imagenes`, `created_at`, `updated_at`) VALUES
	(5, 'Prolinko', 'Plataforma de ventas creada en HTML, CSS, Javascript, Bootstrap, PHP y MariaDB como BBDD.', 'Prolinko: Plataforma de ventas versátil, orientada a ofrecer\r\nuna experiencia de compra eficiente y amigable para el\r\nusuario. Diseño frontend realizado con HTML, CSS,\r\nBootstrap y Javascript. Backend robusto desarrollado en\r\nPHP con persistencia de datos en MySQL.', 'Desarrollo', NULL, '1699651293-903B29B9-F884-44D2-9DAD-97EE3B8BCF44.png', NULL, '2023-11-11 00:21:33', '2023-11-11 00:21:33'),
	(6, 'Easy Bakery', 'Sitio web full stack en Laravel, Tailwind, Bootstrap, Vite, y MySQL en BBDD', 'Easy Bakery: Portal culinario especializado en recetas de\r\npanadería, destacándose por su diseño atractivo y\r\nfuncionalidad robusta. Desarrollado en el ecosistema de\r\nLaravel, aplicando patrones MVC y funcionalidades CRUD\r\nen Backend. Frontend diseñado con HTML, CSS, Bootstrap y\r\nJavascript para una experiencia de usuario dinámica.', 'Producción', 'https://easybakery.online/', '1699651324-2023071702073307.png', NULL, '2023-11-11 00:22:04', '2023-11-11 00:22:04');

-- Volcando estructura para tabla portfolionew.stacks
CREATE TABLE IF NOT EXISTS `stacks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.stacks: ~14 rows (aproximadamente)
INSERT INTO `stacks` (`id`, `nombre`, `imagen`, `created_at`, `updated_at`) VALUES
	(5, 'HTML', '1699501025-HTML.png', '2023-11-09 06:37:05', '2023-11-09 06:37:05'),
	(6, 'CSS', '1699501039-CSS.png', '2023-11-09 06:37:19', '2023-11-09 06:37:19'),
	(7, 'Javascript', '1699501056-Javascript.jpeg', '2023-11-09 06:37:36', '2023-11-09 06:37:36'),
	(8, 'PHP', '1699501070-PHP.jpg', '2023-11-09 06:37:50', '2023-11-09 06:37:50'),
	(9, 'Laravel', '1699501084-laravel.png', '2023-11-09 06:38:04', '2023-11-09 06:38:04'),
	(10, 'Node.js', '1699501097-node.png', '2023-11-09 06:38:17', '2023-11-09 06:38:17'),
	(11, 'Git', '1699501126-git.png', '2023-11-09 06:38:46', '2023-11-09 06:38:46'),
	(12, 'Bootstrap', '1699501299-bootstrap.png', '2023-11-09 06:41:39', '2023-11-09 06:41:39'),
	(13, 'Tailwind CSS', '1699501339-tailwind.jpg', '2023-11-09 06:42:19', '2023-11-09 06:42:19'),
	(14, 'JQuery', '1699501390-2023032512034544.jpg', '2023-11-09 06:43:10', '2023-11-09 06:43:10'),
	(15, 'Mercado Pago', '1699501418-2023032512030544.jpg', '2023-11-09 06:43:38', '2023-11-09 06:43:38'),
	(16, 'Apache', '1699501443-2023041905041622.png', '2023-11-09 06:44:03', '2023-11-09 06:44:03'),
	(17, 'Laragon', '1699501498-laragon7302.jpg', '2023-11-09 06:44:58', '2023-11-09 06:44:58'),
	(18, 'MariaDB', '1699501534-2023032512032045.png', '2023-11-09 06:45:34', '2023-11-09 06:45:34'),
	(19, 'express.js', '1700191654-express.png', '2023-11-17 06:27:34', '2023-11-17 06:27:34');

-- Volcando estructura para tabla portfolionew.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portfolionew.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Nicolás Alvez', 'nicoalvez99@gmail.com', NULL, '$2y$10$X5XfEgckSdGkpj3b8mZlmesrIqXoqIcb8Z59DB83uM3hQufAWkGtS', NULL, '2023-10-31 04:09:06', '2023-10-31 04:09:06');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
