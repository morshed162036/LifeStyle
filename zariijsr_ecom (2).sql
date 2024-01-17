-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zariijsr_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL DEFAULT 'Active',
  `type` enum('long','short') NOT NULL DEFAULT 'short',
  `view_section` enum('bellow_slider','bellow_trending_categories','bellow_new_arrivals','bellow_featured_products','bellow_product_type') NOT NULL DEFAULT 'bellow_slider',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image`, `status`, `type`, `view_section`, `created_at`, `updated_at`) VALUES
(2, '1703108648.jpg', 'Active', 'long', 'bellow_new_arrivals', '2023-12-20 15:44:08', '2024-01-04 01:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'color', NULL, NULL),
(2, 'size', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, '1705223011.png', 'Active', '2024-01-14 20:03:31', '2024-01-14 20:03:31'),
(7, '1705223055.png', 'Active', '2024-01-14 20:04:15', '2024-01-14 20:04:15'),
(8, '1705223110.png', 'Active', '2024-01-14 20:05:10', '2024-01-14 20:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `address`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'WaaW Bangladesh', '', '', '', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalogues`
--

CREATE TABLE `catalogues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogues`
--

INSERT INTO `catalogues` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MEN', 'Active', NULL, NULL),
(2, 'WOMEN', 'Active', NULL, NULL),
(3, 'KIDS', 'Active', NULL, '2024-01-17 12:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) NOT NULL,
  `catalogue_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `catalogue_id`, `name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(9, 0, 1, 'Shirt', '1705380333.jpg', NULL, 'Active', '2023-12-06 21:31:53', '2024-01-16 15:45:33'),
(13, 0, 1, 'Pant', '1702822080.png', NULL, 'Inactive', '2023-12-06 21:34:01', '2024-01-14 20:12:14'),
(17, 13, 1, 'Funky', '1702822080.png', NULL, 'Inactive', '2023-12-06 21:35:45', '2024-01-13 20:00:14'),
(18, 0, 3, 'Boys', '1702822080.png', NULL, 'Inactive', '2023-12-06 21:36:18', '2023-12-23 04:00:10'),
(20, 0, 2, 'Salwar Kameez', '1705380441.jpg', NULL, 'Active', '2023-12-06 21:39:21', '2024-01-16 15:47:21'),
(21, 0, 2, 'Abaya', '1702822241.png', NULL, 'Inactive', '2023-12-06 21:39:40', '2024-01-14 20:12:37'),
(23, 0, 1, 'Panjabi', '1705380401.jpg', NULL, 'Active', '2023-12-25 10:18:42', '2024-01-16 15:46:41'),
(25, 0, 1, 'Hoodie', '1705387183.jpg', NULL, 'Active', '2024-01-14 20:13:31', '2024-01-16 17:39:43'),
(26, 0, 1, 'Lifestyle', NULL, NULL, 'Inactive', '2024-01-14 20:27:36', '2024-01-17 12:13:13'),
(28, 0, 1, 'Koti', '1705380047.jpg', NULL, 'Active', '2024-01-14 21:36:28', '2024-01-16 16:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `size_guide` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `support_hour` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `fb_order` varchar(2) DEFAULT '1',
  `youtube_order` varchar(2) DEFAULT '2',
  `insta_order` varchar(2) DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `logo`, `favicon`, `size_guide`, `phone`, `email`, `support_hour`, `facebook`, `youtube`, `instagram`, `fb_order`, `youtube_order`, `insta_order`, `created_at`, `updated_at`) VALUES
(1, '1705486276.jpeg', '1705486276.jpeg', '1704951713.jpg', '+880195-232231', 'easyecommerce@gmail.com', 'SUNDAY-THURSDAY (10:30 AM-5:00 PM)', 'https://www.facebook.com', 'https://youtube.com/', 'https://instagram.com/', '1', '2', '3', NULL, '2024-01-17 10:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bod` date DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `bod`, `company_name`, `country`, `street_address`, `city`, `created_at`, `updated_at`) VALUES
(3, 7, 'new customer', NULL, NULL, NULL, NULL, NULL, '2023-12-07 12:11:51', '2023-12-07 12:11:51'),
(4, 8, 'Zariq Ltd', NULL, NULL, NULL, NULL, NULL, '2023-12-24 02:54:51', '2023-12-24 02:54:51'),
(5, 10, 'mehejabul', NULL, NULL, NULL, NULL, NULL, '2023-12-25 00:56:16', '2023-12-25 00:56:16'),
(6, 11, 'Akash', NULL, NULL, NULL, NULL, NULL, '2023-12-25 15:24:46', '2023-12-25 15:24:46'),
(7, 15, 'Morshed', NULL, NULL, NULL, NULL, NULL, '2024-01-11 18:47:57', '2024-01-11 18:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_030116_create_brands_table', 2),
(6, '2023_11_27_030454_create_catalogues_table', 3),
(7, '2023_11_27_031320_create_categories_table', 4),
(8, '2023_11_27_080300_create_attributes_table', 5),
(9, '2023_11_27_081510_create_product_variations_table', 6),
(10, '2023_11_27_082505_create_products_table', 7),
(11, '2023_11_27_101532_create_stocks_table', 7),
(12, '2023_11_27_104727_create_units_table', 8),
(13, '2023_11_28_054136_create_customers_table', 9),
(14, '2023_12_02_065417_create_orders_table', 9),
(15, '2023_12_02_065447_create_order_items_table', 9),
(16, '2023_12_02_065511_create_shippings_table', 9),
(17, '2023_12_02_065606_create_transactions_table', 9),
(18, '2023_12_04_023940_create_product_variation_details_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 15, '1703562215_1040-x-1300-pix-Model002.jpg', '2023-12-26 14:43:35', '2023-12-26 14:43:35'),
(6, 15, '1703562299_1040-x-1300-pix-Model-02.jpg', '2023-12-26 14:44:59', '2023-12-26 14:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `subtotal` double NOT NULL,
  `discount` double NOT NULL DEFAULT 0,
  `tax` double NOT NULL DEFAULT 0,
  `shipping` double DEFAULT 0,
  `total` double NOT NULL,
  `status` enum('ordered','delivered','canceled','shipping','confirm') NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `shipping`, `total`, `status`, `is_shipping_different`, `created_at`, `updated_at`) VALUES
(4, 7, 500, 0, 0, 0, 550, 'ordered', 0, '2023-12-07 12:55:17', '2023-12-07 12:55:17'),
(5, 2, 500, 0, 0, 0, 500, 'canceled', 0, '2023-12-15 16:15:35', '2023-12-15 20:37:50'),
(6, 2, 500, 0, 0, 0, 500, 'ordered', 0, '2023-12-15 16:24:42', '2023-12-15 16:24:42'),
(7, 2, 500, 0, 0, 0, 500, 'ordered', 0, '2023-12-15 16:28:18', '2023-12-15 16:28:18'),
(8, 2, 500, 0, 0, 0, 500, 'ordered', 0, '2023-12-15 16:29:50', '2023-12-15 16:29:50'),
(9, 2, 500, 0, 0, 0, 500, 'shipping', 0, '2023-12-15 16:30:08', '2023-12-15 21:06:44'),
(10, 7, 2000, 0, 0, 0, 2000, 'ordered', 0, '2023-12-18 00:11:55', '2023-12-18 00:11:55'),
(11, 7, 500, 0, 0, 120, 620, 'ordered', 0, '2023-12-23 10:55:10', '2023-12-23 10:55:10'),
(12, 7, 500, 0, 0, 120, 620, 'ordered', 0, '2023-12-23 10:55:51', '2023-12-23 10:55:51'),
(13, 7, 1000, 0, 0, 70, 1070, 'ordered', 0, '2023-12-25 00:47:27', '2023-12-25 00:47:27'),
(14, 10, 300, 0, 0, 70, 370, 'delivered', 0, '2023-12-25 01:00:15', '2023-12-25 01:04:18'),
(15, 11, 5200, 0, 0, 70, 5270, 'ordered', 0, '2023-12-25 15:26:41', '2023-12-25 15:26:41'),
(16, 10, 2600, 0, 0, 70, 2670, 'ordered', 0, '2023-12-25 15:53:44', '2023-12-25 15:53:44'),
(17, 2, 10000, 0, 0, 120, 10120, 'ordered', 0, '2023-12-26 00:09:50', '2023-12-26 00:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_variations_id` bigint(20) NOT NULL DEFAULT 0,
  `order_id` bigint(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `product_variations_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(4, 6, 0, 4, 500, 1, '2023-12-07 12:55:17', '2023-12-07 12:55:17'),
(5, 4, 1, 9, 500, 1, '2023-12-15 16:30:08', '2023-12-15 16:30:08'),
(6, 4, 2, 10, 500, 4, '2023-12-18 00:11:55', '2023-12-18 00:11:55'),
(7, 4, 4, 12, 500, 1, '2023-12-23 10:55:51', '2023-12-23 10:55:51'),
(8, 4, 1, 13, 500, 2, '2023-12-25 00:47:27', '2023-12-25 00:47:27'),
(9, 14, 1, 14, 150, 2, '2023-12-25 01:00:15', '2023-12-25 01:00:15'),
(10, 15, 1, 15, 5200, 1, '2023-12-25 15:26:41', '2023-12-25 15:26:41'),
(11, 19, 1, 16, 2600, 1, '2023-12-25 15:53:44', '2023-12-25 15:53:44'),
(12, 18, 1, 17, 5000, 2, '2023-12-26 00:09:50', '2023-12-26 00:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) NOT NULL,
  `catalogue_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `brand_id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `type` bigint(20) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `has_stock` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `discount_type` enum('Fixed','Percentage','Not_Apply') NOT NULL DEFAULT 'Not_Apply',
  `discount_amount` double NOT NULL DEFAULT 0,
  `cost` double NOT NULL,
  `mrp` double NOT NULL,
  `alert_stock` int(11) NOT NULL DEFAULT 0,
  `view_section` enum('New_Arrival','Best_Seller','Flash_Sell','Feature_Products','Just_For_You','Most_Popular','On_Sale','Speacial_Offer','Special_Products','Trending_Products') NOT NULL DEFAULT 'New_Arrival',
  `size_guide` varchar(255) DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `description` longtext DEFAULT NULL,
  `details_description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `unit_id`, `catalogue_id`, `category_id`, `brand_id`, `title`, `code`, `color`, `type`, `weight`, `has_stock`, `discount_type`, `discount_amount`, `cost`, `mrp`, `alert_stock`, `view_section`, `size_guide`, `tags`, `status`, `description`, `details_description`, `image`, `created_at`, `updated_at`) VALUES
(15, 1, 1, 23, 1, 'Fashionable Premium Panjabi', 'WNS23PK027', 'Mixed', 0, NULL, 'Yes', 'Not_Apply', 0, 5200, 5200, 2, 'Feature_Products', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Bembo Cotton</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Bend Colar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703482995.jpg', '2023-12-25 10:27:45', '2024-01-14 20:15:17'),
(16, 1, 1, 28, 1, 'Man\'s Waistcoat', 'MNK2300003', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 2500, 2500, 2, 'Most_Popular', '1704952057.jpg', NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Jacquard&nbsp;</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Bend Colar</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703482673.jpg', '2023-12-25 10:37:53', '2024-01-15 15:58:47'),
(17, 1, 1, 23, 1, 'Platinum Panjabi', 'WNS23PK033', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 4800, 4800, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Jacquard Weave</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Bend Colar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703483648.jpg', '2023-12-25 10:40:31', '2023-12-25 10:54:08'),
(18, 1, 1, 23, 1, 'Platinum  Panjabi', 'WNS23PK018', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 5000, 5000, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Suiting&nbsp;</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703483315.jpg', '2023-12-25 10:48:35', '2023-12-25 10:48:35'),
(19, 1, 1, 23, 1, 'Exclusive Cotton Panjabi', 'WNS23PK025', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 2600, 2600, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Bembo Cotton</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703483462.jpg', '2023-12-25 10:51:02', '2024-01-14 20:16:43'),
(20, 1, 1, 28, 1, 'Man\'s Waistcoat', 'MNK2300008', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 2500, 2500, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Jacquard</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703483887.jpg', '2023-12-25 10:58:07', '2024-01-15 15:59:14'),
(21, 1, 1, 23, 1, 'Exclusive Men Panjabi', 'WNS23PK015', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 3500, 3500, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Triblazer</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703484182.jpg', '2023-12-25 11:03:02', '2023-12-25 11:03:02'),
(22, 1, 1, 23, 1, 'Premium Men\'s Panjabi', 'WNS23PK002', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 3600, 3600, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703484314.jpg', '2023-12-25 11:05:14', '2023-12-25 11:05:14'),
(23, 1, 1, 8, 1, 'Platinum Waistcoat for Men\'s', 'MNK2300002', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 2800, 2800, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Silk</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703484529.jpg', '2023-12-25 11:08:49', '2023-12-25 11:08:49'),
(24, 1, 1, 23, 1, 'Premium Men\'s Panjabi', 'WNS23PK019', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 4800, 4800, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Bamboo Fibre</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703484686.jpg', '2023-12-25 11:11:26', '2024-01-14 20:18:34'),
(25, 1, 1, 28, 1, 'Man\'s Waistcoat', 'MNK2300001', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 2500, 2500, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>KATAN</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703484794.jpg', '2023-12-25 11:13:14', '2024-01-15 15:59:38'),
(26, 1, 1, 23, 1, 'Premium Karchupi Panjabi', 'WNS23PK030', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 5000, 5000, 2, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Dobby Cotton</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Band Collar</td></tr><tr><td><strong>Pocket:</strong></td><td>Side Pocket</td></tr><tr><td><strong>Side Cut:</strong></td><td>Side Open</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703484968.jpg', '2023-12-25 11:16:08', '2023-12-25 11:16:08'),
(31, 1, 2, 20, 1, 'platinum  Salwar Kameez', 'AW23SK0019', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Pure Silk</td></tr><tr><td><strong>Work Description</strong></td><td>Applike Embrodery &amp; Karcupi Work</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Length:</strong></td><td>46</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703490946.jpg', '2023-12-25 12:55:46', '2023-12-25 12:55:46'),
(32, 1, 2, 20, 1, 'Premium Salwar Kameez', 'AW23SK0022', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Pure Silk</td></tr><tr><td><strong>Work Description</strong></td><td>Embordary &amp; Karchupi Work</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Length:</strong></td><td>48</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703491075.jpg', '2023-12-25 12:57:55', '2024-01-15 15:40:51'),
(33, 1, 2, 20, 1, 'Premium Salwar Kameez', 'AW23SK0029', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Silk</td></tr><tr><td><strong>Work Description</strong></td><td>Embordary &amp; Karchupi Work</td></tr><tr><td><strong>Pocket:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>Full Sleeve</td></tr><tr><td><strong>Length:</strong></td><td>46</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703491201.jpg', '2023-12-25 13:00:01', '2023-12-25 13:00:01'),
(34, 1, 2, 20, 1, 'platinum Salwar Kameez', 'AW23SK0009', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 8000, 8000, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Muslin&nbsp;</td></tr><tr><td><strong>Work Description</strong></td><td>karchupi</td></tr><tr><td><strong>Sleeve:</strong></td><td>full sleeve</td></tr><tr><td><strong>Length:</strong></td><td>46</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703492244.jpg', '2023-12-25 13:17:24', '2023-12-25 13:17:24'),
(35, 1, 2, 20, 1, 'Luxury Salwar Kameez', 'AW23SK0021', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Silk</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>22</td></tr><tr><td><strong>Length:</strong></td><td>50</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703492400.jpg', '2023-12-25 13:20:00', '2023-12-25 13:20:00'),
(36, 1, 2, 20, 1, 'Luxury Salwar Kameez', 'aw23sk0017', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Silk</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>22</td></tr><tr><td><strong>Length:</strong></td><td>50</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703492575.jpg', '2023-12-25 13:22:55', '2023-12-25 13:22:55'),
(37, 1, 2, 20, 1, 'Premium Salwar Kameez', 'AW23SK0027', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Muslin&nbsp;</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>22</td></tr><tr><td><strong>Length:</strong></td><td>48</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703492895.jpg', '2023-12-25 13:28:15', '2023-12-25 13:28:15'),
(38, 1, 2, 20, 1, 'Platinum Salwar Kameez', 'AW23SK0032', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Silk</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>22</td></tr><tr><td><strong>Length:</strong></td><td>48</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703493001.jpg', '2023-12-25 13:30:01', '2023-12-25 13:30:01'),
(39, 1, 2, 20, 1, 'Luxury Salwar Kameez', 'AW23SK0023', 'Same as Image', 0, NULL, 'Yes', 'Not_Apply', 0, 9500, 9500, 1, 'New_Arrival', NULL, NULL, 'Active', NULL, '<figure class=\"table\"><table><tbody><tr><td><strong>Fabric:</strong></td><td>Silk</td></tr><tr><td><strong>Collar/Neck:</strong></td><td>Raund neck</td></tr><tr><td><strong>Sleeve:</strong></td><td>22</td></tr><tr><td><strong>Length:</strong></td><td>46</td></tr><tr><td><strong>Care:</strong></td><td>Dry Clean</td></tr></tbody></table></figure>', '1703496615.jpg', '2023-12-25 14:30:15', '2023-12-25 14:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `image`, `title`, `status`, `created_at`, `updated_at`) VALUES
(2, '1703108506.jfif', 'Comfort Casual', 'Active', '2023-12-20 15:41:47', '2023-12-20 15:41:47'),
(3, '1703108529.jfif', 'Formal', 'Active', '2023-12-20 15:42:09', '2024-01-17 11:37:40'),
(4, '1703108551.jfif', 'Funky', 'Active', '2023-12-20 15:42:32', '2023-12-20 15:42:32'),
(5, '1703108579.jfif', 'Weekend Collection', 'Active', '2023-12-20 15:42:59', '2023-12-20 15:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'S', NULL, NULL),
(2, 'M', NULL, NULL),
(3, 'L', NULL, NULL),
(4, 'XL', NULL, NULL),
(5, 'XXL', NULL, NULL),
(10, '32', NULL, NULL),
(11, '34', NULL, NULL),
(12, '36', NULL, NULL),
(13, '38', NULL, NULL),
(14, '40', NULL, NULL),
(15, '42', NULL, NULL),
(16, '44', NULL, NULL),
(17, '46', NULL, NULL),
(18, '48', NULL, NULL),
(19, '4-5 YEARS', NULL, NULL),
(20, '6-7 YEARS', NULL, NULL),
(21, '8-9 YEARS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variation_details`
--

CREATE TABLE `product_variation_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `product_variations_id` bigint(20) NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variation_details`
--

INSERT INTO `product_variation_details` (`id`, `product_id`, `product_variations_id`, `price`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(4, 13, 1, 0, 5, NULL, '2023-12-17 12:12:30', '2023-12-17 12:12:30'),
(5, 13, 2, 0, 10, NULL, '2023-12-17 12:12:30', '2023-12-17 12:12:30'),
(7, 15, 13, 0, 1, NULL, '2023-12-25 15:18:16', '2023-12-25 15:18:16'),
(8, 15, 14, 0, 1, NULL, '2023-12-25 15:18:16', '2023-12-25 15:18:16'),
(9, 15, 15, 0, 1, NULL, '2023-12-25 15:18:16', '2023-12-25 15:18:16'),
(10, 15, 16, 0, 1, NULL, '2023-12-25 15:18:16', '2023-12-25 15:18:16'),
(11, 15, 17, 0, 1, NULL, '2023-12-25 15:18:16', '2023-12-25 15:18:16'),
(12, 16, 13, 0, 1, NULL, '2023-12-25 15:23:41', '2023-12-25 15:23:41'),
(13, 16, 14, 0, 1, NULL, '2023-12-25 15:23:41', '2023-12-25 15:23:41'),
(14, 16, 15, 0, 1, NULL, '2023-12-25 15:23:41', '2023-12-25 15:23:41'),
(15, 16, 16, 0, 1, NULL, '2023-12-25 15:23:41', '2023-12-25 15:23:41'),
(16, 16, 17, 0, 1, NULL, '2023-12-25 15:23:41', '2023-12-25 15:23:41'),
(17, 17, 13, 0, 1, NULL, '2023-12-25 15:24:32', '2023-12-25 15:24:32'),
(18, 17, 14, 0, 1, NULL, '2023-12-25 15:24:32', '2023-12-25 15:24:32'),
(19, 17, 15, 0, 1, NULL, '2023-12-25 15:24:32', '2023-12-25 15:24:32'),
(20, 17, 16, 0, 1, NULL, '2023-12-25 15:24:32', '2023-12-25 15:24:32'),
(21, 17, 17, 0, 1, NULL, '2023-12-25 15:24:32', '2023-12-25 15:24:32'),
(22, 18, 13, 0, 1, NULL, '2023-12-25 15:25:14', '2023-12-25 15:25:14'),
(23, 18, 14, 0, 1, NULL, '2023-12-25 15:25:14', '2023-12-25 15:25:14'),
(24, 18, 15, 0, 1, NULL, '2023-12-25 15:25:14', '2023-12-25 15:25:14'),
(25, 18, 16, 0, 1, NULL, '2023-12-25 15:25:14', '2023-12-25 15:25:14'),
(26, 18, 17, 0, 1, NULL, '2023-12-25 15:25:14', '2023-12-25 15:25:14'),
(27, 19, 13, 0, 1, NULL, '2023-12-25 15:36:29', '2023-12-25 15:36:29'),
(28, 19, 14, 0, 1, NULL, '2023-12-25 15:36:29', '2023-12-25 15:36:29'),
(29, 19, 15, 0, 1, NULL, '2023-12-25 15:36:29', '2023-12-25 15:36:29'),
(30, 19, 16, 0, 1, NULL, '2023-12-25 15:36:29', '2023-12-25 15:36:29'),
(31, 19, 17, 0, 1, NULL, '2023-12-25 15:36:29', '2023-12-25 15:36:29'),
(32, 20, 13, 0, 1, NULL, '2023-12-25 15:37:15', '2023-12-25 15:37:15'),
(33, 20, 15, 0, 1, NULL, '2023-12-25 15:37:15', '2023-12-25 15:37:15'),
(34, 20, 16, 0, 1, NULL, '2023-12-25 15:37:15', '2023-12-25 15:37:15'),
(35, 20, 14, 0, 1, NULL, '2023-12-25 15:37:15', '2023-12-25 15:37:15'),
(36, 21, 13, 0, 1, NULL, '2024-01-15 14:12:22', '2024-01-15 14:12:22'),
(37, 21, 14, 0, 1, NULL, '2024-01-15 14:12:22', '2024-01-15 14:12:22'),
(38, 21, 15, 0, 1, NULL, '2024-01-15 14:12:22', '2024-01-15 14:12:22'),
(39, 21, 16, 0, 1, NULL, '2024-01-15 14:12:22', '2024-01-15 14:12:22'),
(40, 21, 17, 0, 1, NULL, '2024-01-15 14:12:22', '2024-01-15 14:12:22'),
(41, 23, 13, 0, 1, NULL, '2024-01-15 14:25:41', '2024-01-15 14:25:41'),
(42, 23, 14, 0, 1, NULL, '2024-01-15 14:25:41', '2024-01-15 14:25:41'),
(43, 23, 15, 0, 1, NULL, '2024-01-15 14:25:41', '2024-01-15 14:25:41'),
(44, 23, 16, 0, 1, NULL, '2024-01-15 14:25:41', '2024-01-15 14:25:41'),
(45, 25, 13, 0, 1, NULL, '2024-01-15 14:27:45', '2024-01-15 14:27:45'),
(46, 25, 14, 0, 1, NULL, '2024-01-15 14:27:45', '2024-01-15 14:27:45'),
(47, 25, 15, 0, 1, NULL, '2024-01-15 14:27:45', '2024-01-15 14:27:45'),
(48, 25, 16, 0, 1, NULL, '2024-01-15 14:27:45', '2024-01-15 14:27:45'),
(49, 26, 13, 0, 1, NULL, '2024-01-15 14:36:02', '2024-01-15 14:36:02'),
(50, 26, 14, 0, 1, NULL, '2024-01-15 14:36:02', '2024-01-15 14:36:02'),
(51, 26, 15, 0, 1, NULL, '2024-01-15 14:36:02', '2024-01-15 14:36:02'),
(52, 26, 16, 0, 1, NULL, '2024-01-15 14:36:02', '2024-01-15 14:36:02'),
(53, 26, 17, 0, 1, NULL, '2024-01-15 14:36:02', '2024-01-15 14:36:02'),
(54, 22, 13, 0, 1, NULL, '2024-01-15 14:38:10', '2024-01-15 14:38:10'),
(55, 22, 14, 0, 1, NULL, '2024-01-15 14:38:10', '2024-01-15 14:38:10'),
(56, 22, 15, 0, 1, NULL, '2024-01-15 14:38:10', '2024-01-15 14:38:10'),
(57, 22, 16, 0, 1, NULL, '2024-01-15 14:38:10', '2024-01-15 14:38:10'),
(58, 22, 17, 0, 1, NULL, '2024-01-15 14:38:10', '2024-01-15 14:38:10'),
(59, 24, 13, 0, 1, NULL, '2024-01-15 14:39:00', '2024-01-15 14:39:00'),
(60, 24, 14, 0, 1, NULL, '2024-01-15 14:39:00', '2024-01-15 14:39:00'),
(61, 24, 15, 0, 1, NULL, '2024-01-15 14:39:00', '2024-01-15 14:39:00'),
(62, 24, 16, 0, 1, NULL, '2024-01-15 14:39:00', '2024-01-15 14:39:00'),
(63, 24, 17, 0, 1, NULL, '2024-01-15 14:39:00', '2024-01-15 14:39:00'),
(64, 32, 13, 0, 1, NULL, '2024-01-15 14:52:03', '2024-01-15 14:52:03'),
(65, 32, 14, 0, 1, NULL, '2024-01-15 14:52:13', '2024-01-15 14:52:13'),
(66, 32, 16, 0, 2, NULL, '2024-01-15 14:52:25', '2024-01-15 14:52:25'),
(67, 36, 14, 0, 1, NULL, '2024-01-15 15:00:10', '2024-01-15 15:00:10'),
(68, 36, 14, 0, 1, NULL, '2024-01-15 15:27:41', '2024-01-15 15:27:41'),
(69, 35, 14, 0, 2, NULL, '2024-01-15 15:32:54', '2024-01-15 15:32:54'),
(70, 39, 15, 0, 2, NULL, '2024-01-15 15:33:38', '2024-01-15 15:33:38'),
(71, 34, 13, 0, 1, NULL, '2024-01-15 15:38:33', '2024-01-15 15:38:33'),
(72, 34, 14, 0, 1, NULL, '2024-01-15 15:38:33', '2024-01-15 15:38:33'),
(73, 34, 16, 0, 1, NULL, '2024-01-15 15:38:33', '2024-01-15 15:38:33'),
(74, 31, 14, 0, 1, NULL, '2024-01-15 15:39:30', '2024-01-15 15:39:30'),
(75, 32, 13, 0, 1, NULL, '2024-01-15 15:42:34', '2024-01-15 15:42:34'),
(76, 32, 14, 0, 1, NULL, '2024-01-15 15:42:34', '2024-01-15 15:42:34'),
(77, 32, 15, 0, 2, NULL, '2024-01-15 15:42:34', '2024-01-15 15:42:34'),
(78, 33, 15, 0, 1, NULL, '2024-01-15 15:44:35', '2024-01-15 15:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `line1` varchar(255) NOT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `alert_stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `quantity`, `alert_stock`, `created_at`, `updated_at`) VALUES
(4, 15, 10, 2, '2023-12-25 10:27:45', '2024-01-15 15:22:25'),
(5, 16, 10, 2, '2023-12-25 10:37:53', '2024-01-15 15:23:03'),
(6, 17, 10, 2, '2023-12-25 10:40:31', '2024-01-15 15:25:16'),
(7, 18, 10, 2, '2023-12-25 10:48:35', '2024-01-15 15:23:29'),
(8, 19, 10, 2, '2023-12-25 10:51:02', '2024-01-15 15:22:08'),
(9, 20, 10, 2, '2023-12-25 10:58:07', '2024-01-15 15:23:10'),
(10, 21, 10, 2, '2023-12-25 11:03:02', '2024-01-15 15:22:16'),
(11, 22, 10, 2, '2023-12-25 11:05:14', '2024-01-15 15:24:22'),
(12, 23, 10, 2, '2023-12-25 11:08:49', '2024-01-15 15:24:43'),
(13, 24, 10, 2, '2023-12-25 11:11:26', '2024-01-15 15:24:13'),
(14, 25, 10, 2, '2023-12-25 11:13:14', '2024-01-15 15:23:17'),
(15, 26, 10, 2, '2023-12-25 11:16:08', '2024-01-15 15:24:31'),
(20, 31, 10, 1, '2023-12-25 12:55:46', '2024-01-15 15:23:43'),
(21, 32, 10, 1, '2023-12-25 12:57:55', '2024-01-15 15:24:02'),
(22, 33, 10, 1, '2023-12-25 13:00:01', '2024-01-15 15:23:52'),
(23, 34, 10, 1, '2023-12-25 13:17:24', '2024-01-15 15:25:06'),
(24, 35, 10, 1, '2023-12-25 13:20:00', '2024-01-15 15:22:37'),
(25, 36, 10, 1, '2023-12-25 13:22:55', '2024-01-15 15:22:45'),
(26, 37, 10, 1, '2023-12-25 13:28:15', '2024-01-15 15:25:28'),
(27, 38, 10, 1, '2023-12-25 13:30:01', '2024-01-15 15:24:54'),
(28, 39, 10, 1, '2023-12-25 14:30:15', '2024-01-15 15:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `mode` enum('cod','card','mobile_banking') NOT NULL DEFAULT 'cod',
  `status` enum('pending','approved','declined','refunded') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'cod', 'pending', '2023-12-02 21:13:03', '2023-12-02 21:13:03'),
(2, 3, 2, 'cod', 'pending', '2023-12-03 19:53:45', '2023-12-03 19:53:45'),
(3, 3, 3, 'cod', 'pending', '2023-12-03 19:58:39', '2023-12-03 19:58:39'),
(4, 7, 4, 'cod', 'pending', '2023-12-07 12:55:17', '2023-12-07 12:55:17'),
(5, 2, 9, 'cod', 'pending', '2023-12-15 16:30:08', '2023-12-15 16:30:08'),
(6, 7, 10, 'cod', 'pending', '2023-12-18 00:11:55', '2023-12-18 00:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'piece', NULL, NULL, NULL),
(2, 'box', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `designation_id` bigint(20) NOT NULL DEFAULT 0,
  `district` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` enum('Admin','Customer') NOT NULL DEFAULT 'Customer',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `designation_id`, `district`, `address`, `image`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morshed Ahmed', 'superadmin@gmail.com', '017', NULL, '$2y$10$7MoHhANxFYCYBRPI.kpTm.SmlyfOXLWhazIOuAbBrMFvtr/d1MPzm', 0, NULL, 'abc', NULL, 'Admin', 'Active', NULL, NULL, NULL),
(2, 'ADMIN', 'admin@gmail.com', '018', NULL, '$2y$10$zlxJUt.sadyhCCOCTguwr.JQukfmAS.4f..vHrYprRpmbFilR9Wga', 0, NULL, 'abc', NULL, 'Admin', 'Active', NULL, NULL, NULL),
(7, 'new customer', 'customer@gmail.com', '01658745986', NULL, '$2y$12$o6UhMq1LuTFOUMWvvPvQQu2eH/JwjpWpfvHwR4oh.KlSJOUw.GF4q', 0, 'Faridpur', 'test', NULL, 'Customer', 'Active', NULL, '2023-12-07 12:11:51', '2023-12-07 12:11:51'),
(8, 'Zariq Ltd', 'zariqltd@gmail.com', '01714024689', NULL, '$2y$12$DSC/6EJcOelJfxztD1S.o.xtND/PTbq5gL1nUKIqzPN6SIEDCG1kG', 0, NULL, 'zariqltd@gmail.com', NULL, 'Customer', 'Active', NULL, '2023-12-24 02:54:51', '2023-12-24 02:54:51'),
(10, 'mehejabul', 'mehejabul@gmail.com', '01714294499', NULL, '$2y$12$U7qcdcfaaiD.WThRupL0suhVxm5FHuHXmPAEyR214tIOyqxOSM2gO', 0, NULL, 'mirpur', NULL, 'Customer', 'Active', NULL, '2023-12-25 00:56:16', '2023-12-25 00:56:16'),
(11, 'Akash', 'mhakash@gmail.com', '01000000000', NULL, '$2y$12$fi/QpduJU.SOmISvQ99jBOweMfTSeooGFqMINfFvhLAdI0rma4yIW', 0, NULL, 'Gulshan', NULL, 'Customer', 'Active', NULL, '2023-12-25 15:24:46', '2023-12-25 15:24:46'),
(15, 'Morshed', 'morshed@gmail.com', '01988776655', NULL, '$2y$12$AeitUReX3bVQXcUzSW7Zt.vF6tQ2ajjhqYSge5jx/lQTDSCQxqg2O', 0, NULL, 'Dhaka', NULL, 'Customer', 'Active', NULL, '2024-01-11 18:47:57', '2024-01-11 18:47:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variation_details`
--
ALTER TABLE `product_variation_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_variation_details`
--
ALTER TABLE `product_variation_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
