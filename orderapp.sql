-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-01-2018 a las 21:08:36
-- Versión del servidor: 5.6.37
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `orderapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(10) unsigned NOT NULL,
  `order_date` date DEFAULT NULL,
  `arrived_date` date DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carts`
--

INSERT INTO `carts` (`id`, `order_date`, `arrived_date`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Pending', 1, '2017-12-29 03:02:59', '2017-12-29 17:59:07'),
(2, NULL, NULL, 'Pending', 1, '2017-12-29 17:59:07', '2018-01-08 00:44:07'),
(3, '2018-01-09', NULL, 'Pending', 1, '2018-01-08 00:44:07', '2018-01-09 17:34:39'),
(4, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 17:35:16', '2018-01-09 17:35:16'),
(5, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 17:36:46', '2018-01-09 17:36:46'),
(6, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 17:36:51', '2018-01-09 17:37:18'),
(7, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 17:45:06', '2018-01-09 17:45:06'),
(8, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 17:46:10', '2018-01-09 17:46:10'),
(9, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 17:52:57', '2018-01-09 17:53:20'),
(10, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 18:37:24', '2018-01-09 18:37:24'),
(11, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 22:31:59', '2018-01-09 22:32:24'),
(12, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 22:32:38', '2018-01-09 22:32:38'),
(13, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 22:34:15', '2018-01-09 22:34:19'),
(14, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 22:34:40', '2018-01-09 22:34:45'),
(15, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 22:54:43', '2018-01-09 22:54:43'),
(16, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 22:54:47', '2018-01-09 23:26:33'),
(17, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 23:26:35', '2018-01-09 23:29:23'),
(18, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 23:29:26', '2018-01-09 23:30:20'),
(19, '2018-01-09', NULL, 'Pending', 1, '2018-01-09 23:30:22', '2018-01-09 23:32:44'),
(20, NULL, NULL, 'Active', 1, '2018-01-09 23:32:46', '2018-01-09 23:32:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_details`
--

CREATE TABLE IF NOT EXISTS `cart_details` (
  `id` int(10) unsigned NOT NULL,
  `cart_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cart_details`
--

INSERT INTO `cart_details` (`id`, `cart_id`, `product_id`, `quantity`, `discount`, `created_at`, `updated_at`) VALUES
(17, 1, 3, 1, 0, '2017-12-29 17:55:56', '2017-12-29 17:55:56'),
(18, 3, 7, 4, 0, '2018-01-09 17:34:31', '2018-01-09 17:34:31'),
(19, 6, 14, 4, 0, '2018-01-09 17:37:10', '2018-01-09 17:37:10'),
(20, 9, 10, 4, 0, '2018-01-09 17:53:14', '2018-01-09 17:53:14'),
(21, 11, 7, 4, 0, '2018-01-09 22:32:16', '2018-01-09 22:32:16'),
(22, 14, 2, 1, 0, '2018-01-09 22:34:40', '2018-01-09 22:34:40'),
(23, 16, 14, 3, 0, '2018-01-09 23:14:43', '2018-01-09 23:14:43'),
(24, 16, 2, 4, 0, '2018-01-09 23:14:57', '2018-01-09 23:14:57'),
(25, 17, 12, 6, 0, '2018-01-09 23:29:18', '2018-01-09 23:29:18'),
(26, 18, 7, 1, 0, '2018-01-09 23:30:06', '2018-01-09 23:30:06'),
(28, 19, 2, 1, 0, '2018-01-09 23:32:39', '2018-01-09 23:32:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Opti2', 'Sapiente maxime deleniti porro autem vitae rem sit ipsa et quaerat dolorum.', NULL, '2017-12-29 02:26:04', '2017-12-30 04:20:26'),
(2, 'Optio', 'Ratione et esse vel minus in et reiciendis blanditiis deserunt qui iste ullam magnam.', NULL, '2017-12-29 02:26:04', '2017-12-30 02:55:57'),
(3, 'Facere', 'Maxime cupiditate praesentium sed mollitia officiis sunt est quasi omnis odio sint.', NULL, '2017-12-29 02:26:04', '2017-12-29 02:26:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(92, '2014_10_12_000000_create_users_table', 1),
(93, '2014_10_12_100000_create_password_resets_table', 1),
(94, '2017_12_27_161124_create_categories_table', 1),
(95, '2017_12_27_170439_create_products_table', 1),
(96, '2017_12_27_175927_create_product_images_table', 1),
(97, '2017_12_28_175558_create_carts_table', 1),
(98, '2017_12_28_175941_create_cart_details_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('newsletter@binweb.net', '$2y$10$5Zvy3MBuXaplWMTTNIJdL.WmfqIo3JWGNP.KKSk5bQPMqOQdsWgLC', '2017-12-29 21:18:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `price` double(8,2) NOT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `long_description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Laudantium distinctio aperiam velit', 'test', 'Ratione fuga et nihil consequatur. Earum qui eveniet asperiores voluptatum enim accusamus cupiditate. Porro harum voluptatem assumenda vitae aut. Non ut earum modi eius illo dolorem ex.', 748.78, 3, '2017-12-29 02:26:04', '2017-12-30 16:07:00'),
(2, 'Eligendi dolores minus', 'Repellat deleniti animi quo dicta vel rerum commodi.', 'Provident ex est consequatur doloremque. Porro omnis totam impedit quidem autem. Aliquid dolorem tenetur tempora ea. Ipsam iste nihil et iste et totam. Culpa distinctio molestiae dolor nam omnis.', 1564.58, 1, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(3, 'Debitis cumque quis', 'Veritatis nisi temporibus est hic voluptatem non rerum impedit libero molestias et iure.', 'Fugiat laborum sit quis dicta. Rem voluptates voluptas quo asperiores nobis autem accusamus. Sed voluptatem quia aliquam ut dolor.', 1214.64, 1, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(4, 'Odit veritatis', 'Voluptas asperiores voluptas deserunt ut omnis et debitis at dicta dolore distinctio fugiat.', 'Reprehenderit quia accusamus voluptatem doloremque. Nesciunt sapiente voluptatum temporibus animi adipisci. Non amet aut excepturi veniam et. Consequatur laudantium consequatur a praesentium.', 1063.92, 1, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(5, 'Soluta eos similique', 'Et nulla dolores vel iure ut qui nobis adipisci omnis error repellat porro.', 'Praesentium nesciunt illo qui labore est minus. Nesciunt cupiditate et dicta. Aliquam dolor doloribus quia id. Ea culpa assumenda rerum labore ipsa accusamus.', 1571.20, 1, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(6, 'Consequatur sed ducimus error', 'Autem nulla ducimus itaque quis ea sint odio qui eum numquam.', 'Veniam maiores repellendus cum aperiam nihil vero in. Ullam id magni veritatis sed doloremque sit. Et laboriosam qui eius.', 1879.65, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(7, 'Blanditiis harum ut eaque', 'Recusandae enim et omnis labore eius non porro eum fuga.', 'Quos aut sequi doloremque nostrum. Omnis repellendus consequuntur dolorem. Aut atque tempora exercitationem. Commodi et quidem molestias sequi ut.', 1361.79, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(8, 'Saepe debitis quidem', 'Impedit sit ad id est consectetur soluta et ea praesentium et dolorem est non.', 'In velit cupiditate ducimus autem ut labore. Ut laboriosam ipsa facilis et deserunt et natus temporibus. Soluta molestiae reprehenderit repudiandae consequatur laudantium.', 758.22, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(9, 'Ea ut fugit', 'Est cum sequi quis voluptatem adipisci sequi dolorum hic voluptas veritatis explicabo.', 'Et distinctio nisi ex voluptate id neque veritatis. Dolores vitae est voluptatum mollitia. Et sequi et similique nihil dolor ipsum deleniti.', 896.73, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(10, 'Qui quis est', 'Sint et nemo ut omnis ducimus quis eligendi ullam libero ducimus dolor consequatur non.', 'Rem assumenda doloribus minus voluptas quia in. Molestias numquam eligendi modi quasi. Architecto deserunt explicabo aut adipisci sint cum non. Fugit dignissimos voluptatem minus et.', 1281.90, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(11, 'Debitis eaque', 'Magni nostrum id soluta expedita voluptas excepturi qui.', 'Impedit quia quidem quisquam. Rerum facilis consequatur voluptatem architecto sed. Id nam voluptates doloremque laudantium illo voluptatem amet. Labore sed delectus est ducimus hic praesentium.', 725.37, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(12, 'In ut expedita est', 'Veritatis nihil aliquam in enim occaecati laborum et ratione in doloribus voluptas.', 'Odit sint quaerat voluptas maxime vitae sapiente magnam. Iusto qui provident enim tenetur quia occaecati. Ea consequatur qui ut numquam voluptas et.', 1956.69, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(13, 'Praesentium ab ullam et', 'Pariatur quidem placeat totam et mollitia voluptatum similique non occaecati perspiciatis.', 'Explicabo sit rerum sed eum ab dolorum ratione ex. Maxime quia veritatis quaerat omnis ipsum. Et enim quae dicta qui voluptas ipsum consectetur.', 1011.72, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(14, 'Enim laborum dolor consectetur possimus', 'Laudantium enim perspiciatis necessitatibus sed mollitia et ab tempora.', 'Quis nihil aliquam quia magni a aliquid voluptatem. Voluptates voluptas qui voluptatem molestiae occaecati. Et et animi expedita laborum similique quasi adipisci. Optio sit debitis et consequatur.', 705.41, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(15, 'Doloribus nemo sed illo', 'Beatae rem velit fugiat aliquid dolores voluptatem illum provident.', 'Dolorem quos voluptas velit ut incidunt id. Veniam dolorem suscipit commodi exercitationem doloribus qui voluptatum. Quia sed enim tempore atque velit ipsum.', 825.16, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(21, 'nuevo', 'nuevo', 'nuevo', 20.00, NULL, '2017-12-30 04:47:24', '2017-12-30 04:47:24'),
(22, 'Datos de prueba', 'prueba', 'prueba', 20.00, 3, '2017-12-30 15:14:32', '2017-12-30 15:14:32'),
(24, 'Prueba 4', 'Prueba sin categoria', 'test', 200.00, NULL, '2017-12-30 15:50:51', '2017-12-30 15:50:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(10) unsigned NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `featured`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'https://lorempixel.com/250/250/?10791', 0, 1, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(2, 'https://lorempixel.com/250/250/?69815', 0, 1, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(3, 'https://lorempixel.com/250/250/?13762', 0, 1, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(4, 'https://lorempixel.com/250/250/?76332', 0, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(5, 'https://lorempixel.com/250/250/?66067', 0, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(6, 'https://lorempixel.com/250/250/?56140', 0, 2, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(7, 'https://lorempixel.com/250/250/?40467', 0, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(8, 'https://lorempixel.com/250/250/?32219', 0, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(9, 'https://lorempixel.com/250/250/?68237', 0, 3, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(10, 'https://lorempixel.com/250/250/?87283', 0, 4, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(11, 'https://lorempixel.com/250/250/?13181', 0, 4, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(12, 'https://lorempixel.com/250/250/?32952', 0, 4, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(13, 'https://lorempixel.com/250/250/?16893', 0, 5, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(14, 'https://lorempixel.com/250/250/?97845', 0, 5, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(15, 'https://lorempixel.com/250/250/?80374', 0, 5, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(16, 'https://lorempixel.com/250/250/?26886', 0, 6, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(17, 'https://lorempixel.com/250/250/?11351', 0, 6, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(18, 'https://lorempixel.com/250/250/?43509', 0, 6, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(19, 'https://lorempixel.com/250/250/?97634', 0, 7, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(20, 'https://lorempixel.com/250/250/?96669', 0, 7, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(21, 'https://lorempixel.com/250/250/?63763', 0, 7, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(22, 'https://lorempixel.com/250/250/?16247', 0, 8, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(23, 'https://lorempixel.com/250/250/?60134', 0, 8, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(24, 'https://lorempixel.com/250/250/?50965', 0, 8, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(25, 'https://lorempixel.com/250/250/?89333', 0, 9, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(26, 'https://lorempixel.com/250/250/?81586', 0, 9, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(27, 'https://lorempixel.com/250/250/?17873', 0, 9, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(28, 'https://lorempixel.com/250/250/?67137', 0, 10, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(29, 'https://lorempixel.com/250/250/?50306', 0, 10, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(30, 'https://lorempixel.com/250/250/?44625', 0, 10, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(31, 'https://lorempixel.com/250/250/?77135', 0, 11, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(32, 'https://lorempixel.com/250/250/?50376', 0, 11, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(33, 'https://lorempixel.com/250/250/?89238', 0, 11, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(34, 'https://lorempixel.com/250/250/?67036', 0, 12, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(35, 'https://lorempixel.com/250/250/?49407', 0, 12, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(36, 'https://lorempixel.com/250/250/?85323', 0, 12, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(37, 'https://lorempixel.com/250/250/?36407', 0, 13, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(38, 'https://lorempixel.com/250/250/?71899', 0, 13, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(39, 'https://lorempixel.com/250/250/?64588', 0, 13, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(40, 'https://lorempixel.com/250/250/?48437', 0, 14, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(41, 'https://lorempixel.com/250/250/?96799', 0, 14, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(42, 'https://lorempixel.com/250/250/?19519', 0, 14, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(43, 'https://lorempixel.com/250/250/?57634', 0, 15, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(44, 'https://lorempixel.com/250/250/?44585', 0, 15, '2017-12-29 02:26:04', '2017-12-29 02:26:04'),
(45, 'https://lorempixel.com/250/250/?77208', 0, 15, '2017-12-29 02:26:04', '2017-12-29 02:26:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Binweb Newsletter', 'newsletter@binweb.net', '$2y$10$mpEJwNNCc.iBz2V1UiculOel7/p77NdtE5Xa/8gC1HrVvskE417b2', 1, 'MFpRaOvEoHXg0vtD9qBj4vxNoTb44bJF0vZUnU3obbhXh35z5gTECPUspDSq', '2017-12-29 02:26:04', '2017-12-29 02:26:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_details_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_details_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Filtros para la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
