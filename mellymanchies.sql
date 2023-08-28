-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 02:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mellymanchies`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'demo', '2023-08-16 17:45:40', '2023-08-16 17:45:40'),
(2, 'my-demo', '2023-08-16 17:47:16', '2023-08-16 17:47:16'),
(3, 'clothes', '2023-08-16 23:39:58', '2023-08-16 23:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `brands_translation`
--

CREATE TABLE `brands_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands_translation`
--

INSERT INTO `brands_translation` (`id`, `brand_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'demo', '2023-08-16 17:45:40', '2023-08-16 17:45:40'),
(2, 2, 'English', 'my demo', '2023-08-16 17:47:16', '2023-08-16 17:47:16'),
(3, 3, 'English', 'clothes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(32, 'demo-category-2', NULL, '2023-06-15 22:37:19', '2023-06-15 22:38:59'),
(33, 'demo-category-1', NULL, '2023-06-15 22:37:49', '2023-06-15 22:38:47'),
(34, 'demo-category-3', NULL, '2023-06-15 22:38:26', '2023-06-15 22:39:09'),
(35, 'demo-category-4', NULL, '2023-06-15 22:39:30', '2023-06-15 22:39:30'),
(36, 'demo-category-5', NULL, '2023-06-15 22:39:55', '2023-06-15 22:39:55'),
(38, 'clothes', NULL, '2023-08-16 23:26:07', '2023-08-16 23:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `category_translation`
--

CREATE TABLE `category_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translation`
--

INSERT INTO `category_translation` (`id`, `category_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(32, 32, 'English', 'Demo Category 2', NULL, '2023-06-15 22:37:19', '2023-06-15 22:38:59'),
(33, 33, 'English', 'Demo Category 1', NULL, '2023-06-15 22:37:49', '2023-06-15 22:38:47'),
(34, 34, 'English', 'Demo Category 3', NULL, '2023-06-15 22:38:26', '2023-06-15 22:39:10'),
(35, 35, 'English', 'Demo Category 4', NULL, '2023-06-15 22:39:30', '2023-06-15 22:39:30'),
(36, 36, 'English', 'Demo Category 5', NULL, '2023-06-15 22:39:55', '2023-06-15 22:39:55'),
(37, 38, 'English', 'clothes', 'this  is category description', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) NOT NULL,
  `value` decimal(10,2) UNSIGNED DEFAULT NULL,
  `is_percent` tinyint(1) NOT NULL,
  `free_shipping` tinyint(1) NOT NULL,
  `minimum_spend` decimal(10,2) UNSIGNED DEFAULT NULL,
  `maximum_spend` decimal(10,2) UNSIGNED DEFAULT NULL,
  `usage_limit_per_coupon` int(10) UNSIGNED DEFAULT NULL,
  `usage_limit_per_customer` int(10) UNSIGNED DEFAULT NULL,
  `used` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_categories`
--

CREATE TABLE `coupon_categories` (
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `exclude` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_products`
--

CREATE TABLE `coupon_products` (
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `exclude` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_translations`
--

CREATE TABLE `coupon_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(3) NOT NULL,
  `base_currency` tinyint(4) NOT NULL,
  `exchange_rate` decimal(10,6) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `name`, `base_currency`, `exchange_rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'USD', 1, '1.000000', 1, NULL, NULL),
(2, 'EUR', 0, '0.850000', 1, NULL, NULL),
(3, 'INR', 0, '72.450000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(191) NOT NULL,
  `address` text NOT NULL,
  `post_code` varchar(50) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_addresses`
--

INSERT INTO `customer_addresses` (`id`, `customer_id`, `name`, `country`, `state`, `city`, `address`, `post_code`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'AS', 'Swains Island', 'Manchester', 'A 1 Cottage  Manchester r 393 fb area', '54754', 1, '2023-06-27 17:23:05', '2023-06-27 17:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `database_backups`
--

CREATE TABLE `database_backups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `subject` text NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(1, 'welcome_email', 'Welcome to Ultra Store', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Welcome to Ultra Store</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your account is now ready to use. You can now login to your portal using your email and password.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(2, 'order_placed', 'Your Order Placed Successfully', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Placed Successfully</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been placed sucessfully. Your order will be shipped within next 3 business days.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(3, 'order_processing', 'Your Order Marked as Processing', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been processed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been processed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(4, 'order_completed', 'Your Order Marked as Completed', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has Completed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has completed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(5, 'order_canceled', '	Your Order Marked as Canceled', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been canceled</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been canceled.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(6, 'order_on_hold', 'Your Order Marked as On Hold', '<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Marked as On Hold</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been hold.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>', NULL, NULL),
(7, 'order_refunded', 'Money Refunded', '<p>Your Order Money has been refunded.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `entity_files`
--

CREATE TABLE `entity_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `entity_type` varchar(191) NOT NULL,
  `entity_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entity_files`
--

INSERT INTO `entity_files` (`id`, `media_id`, `entity_type`, `entity_id`, `name`, `created_at`, `updated_at`) VALUES
(23, 3, 'App\\Entity\\Category\\Category', 33, 'logo', '2023-06-15 22:38:47', '2023-06-15 22:38:47'),
(24, 3, 'App\\Entity\\Category\\Category', 33, 'banner', '2023-06-15 22:38:47', '2023-06-15 22:38:47'),
(25, 4, 'App\\Entity\\Category\\Category', 32, 'logo', '2023-06-15 22:38:59', '2023-06-15 22:38:59'),
(26, 4, 'App\\Entity\\Category\\Category', 32, 'banner', '2023-06-15 22:38:59', '2023-06-15 22:38:59'),
(27, 2, 'App\\Entity\\Category\\Category', 34, 'logo', '2023-06-15 22:39:10', '2023-06-15 22:39:10'),
(28, 2, 'App\\Entity\\Category\\Category', 34, 'banner', '2023-06-15 22:39:10', '2023-06-15 22:39:10'),
(29, 4, 'App\\Entity\\Category\\Category', 35, 'logo', '2023-06-15 22:39:30', '2023-06-15 22:39:30'),
(30, 4, 'App\\Entity\\Category\\Category', 35, 'banner', '2023-06-15 22:39:30', '2023-06-15 22:39:30'),
(31, 4, 'App\\Entity\\Category\\Category', 36, 'logo', '2023-06-15 22:39:55', '2023-06-15 22:39:55'),
(32, 4, 'App\\Entity\\Category\\Category', 36, 'banner', '2023-06-15 22:39:55', '2023-06-15 22:39:55'),
(49, 1, 'App\\Entity\\Product\\Product', 3, 'product_image', '2023-06-27 16:57:18', '2023-06-27 16:57:18'),
(50, 1, 'App\\Entity\\Product\\Product', 3, 'gallery_images', '2023-06-27 16:57:18', '2023-06-27 16:57:18'),
(51, 4, 'App\\Entity\\Product\\Product', 3, 'gallery_images', '2023-06-27 16:57:18', '2023-06-27 16:57:18'),
(52, 3, 'App\\Entity\\Product\\Product', 3, 'gallery_images', '2023-06-27 16:57:18', '2023-06-27 16:57:18'),
(53, 2, 'App\\Entity\\Product\\Product', 3, 'gallery_images', '2023-06-27 16:57:18', '2023-06-27 16:57:18'),
(54, 1, 'App\\Entity\\Product\\Product', 2, 'product_image', '2023-06-27 16:57:35', '2023-06-27 16:57:35'),
(55, 1, 'App\\Entity\\Product\\Product', 2, 'gallery_images', '2023-06-27 16:57:35', '2023-06-27 16:57:35'),
(56, 3, 'App\\Entity\\Product\\Product', 2, 'gallery_images', '2023-06-27 16:57:35', '2023-06-27 16:57:35'),
(57, 2, 'App\\Entity\\Product\\Product', 2, 'gallery_images', '2023-06-27 16:57:35', '2023-06-27 16:57:35'),
(58, 1, 'App\\Entity\\Product\\Product', 1, 'product_image', '2023-06-27 16:57:55', '2023-06-27 16:57:55'),
(59, 1, 'App\\Entity\\Product\\Product', 1, 'gallery_images', '2023-06-27 16:57:55', '2023-06-27 16:57:55'),
(60, 3, 'App\\Entity\\Product\\Product', 1, 'gallery_images', '2023-06-27 16:57:55', '2023-06-27 16:57:55'),
(61, 2, 'App\\Entity\\Product\\Product', 1, 'gallery_images', '2023-06-27 16:57:55', '2023-06-27 16:57:55'),
(62, 4, 'App\\Entity\\Product\\Product', 1, 'gallery_images', '2023-06-27 16:57:55', '2023-06-27 16:57:55'),
(84, 4, 'App\\Entity\\Brand\\Brand', 1, 'logo', '2023-08-16 17:45:40', '2023-08-16 17:45:40'),
(85, 3, 'App\\Entity\\Brand\\Brand', 1, 'banner', '2023-08-16 17:45:40', '2023-08-16 17:45:40'),
(86, 4, 'App\\Entity\\Product\\Product', 7, 'product_image', '2023-08-16 17:46:14', '2023-08-16 17:46:14'),
(87, 4, 'App\\Entity\\Product\\Product', 7, 'gallery_images', '2023-08-16 17:46:14', '2023-08-16 17:46:14'),
(88, 3, 'App\\Entity\\Brand\\Brand', 2, 'logo', '2023-08-16 17:47:16', '2023-08-16 17:47:16'),
(89, 3, 'App\\Entity\\Brand\\Brand', 2, 'banner', '2023-08-16 17:47:16', '2023-08-16 17:47:16'),
(90, 4, 'App\\Entity\\Product\\Product', 13, 'product_image', '2023-08-16 21:41:51', '2023-08-16 21:41:51'),
(91, 1, 'App\\Entity\\Product\\Product', 13, 'gallery_images', '2023-08-16 21:41:51', '2023-08-16 21:41:51'),
(92, 2, 'App\\Entity\\Product\\Product', 13, 'gallery_images', '2023-08-16 21:41:51', '2023-08-16 21:41:51'),
(93, 21, 'App\\Entity\\Product\\Product', 16, 'product_image', '2023-08-17 23:36:30', '2023-08-17 23:36:30'),
(94, 21, 'App\\Entity\\Product\\Product', 16, 'gallery_images', '2023-08-17 23:36:30', '2023-08-17 23:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) NOT NULL,
  `file_path` varchar(191) NOT NULL,
  `file_type` varchar(191) NOT NULL,
  `file_size` varchar(191) NOT NULL,
  `file_extension` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `filename`, `file_path`, `file_type`, `file_size`, `file_extension`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'product-img01.png', 'media/KYOjs5P2fAtILz1V8hgxGnYQUDBY8Kx8NvbfWxSn.png', 'image/png', '148221', 'png', 1, '2023-05-23 23:49:07', '2023-05-23 23:49:07'),
(2, 'product-img03.png', 'media/r784pHHMqGtWwjAC8QJDQqmHfPjepltLrQvYBagl.png', 'image/png', '132476', 'png', 1, '2023-06-15 22:37:06', '2023-06-15 22:37:06'),
(3, 'product-img02.png', 'media/0xxET0prK5srGipsvrXvTPIHWQAOZru4zdonIrbr.png', 'image/png', '202232', 'png', 1, '2023-06-15 22:37:08', '2023-06-15 22:37:08'),
(4, 'product-img01.png', 'media/zqB9mHdiHe9sceS8d5BeSRqbpQjwwYp8KRLcX2x1.png', 'image/png', '148221', 'png', 1, '2023-06-15 22:37:08', '2023-06-15 22:37:08'),
(21, 'dihexa10mg.jpg', 'media/168e5dc7d96840f0fa08a1523821842c1781bc536a8f51304446a428fa6ee1bf.jpg', 'image/jpeg', '75301', 'jpg', 1, '2023-08-17 23:25:37', '2023-08-17 23:25:37'),
(22, 'dihexa10mg.jpg', 'media/168e5dc7d96840f0fa08a1523821842c1781bc536a8f51304446a428fa6ee1bf.jpg', 'image/jpeg', '75301', 'jpg', 1, '2023-08-18 00:50:52', '2023-08-18 00:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_type` varchar(191) NOT NULL,
  `entity_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`id`, `entity_type`, `entity_id`, `created_at`, `updated_at`) VALUES
(1, 'App\\Entity\\Product\\Product', 1, '2023-05-23 23:55:04', '2023-05-23 23:55:04'),
(2, 'App\\Entity\\Product\\Product', 2, '2023-05-23 23:55:48', '2023-05-23 23:55:48'),
(3, 'App\\Entity\\Product\\Product', 3, '2023-05-23 23:56:21', '2023-05-23 23:56:21'),
(7, 'App\\Entity\\Product\\Product', 7, '2023-08-16 17:46:14', '2023-08-16 17:46:14'),
(8, 'App\\Entity\\Product\\Product', 8, '2023-08-16 18:27:31', '2023-08-16 18:27:31'),
(9, 'App\\Entity\\Product\\Product', 9, '2023-08-16 18:38:54', '2023-08-16 18:38:54'),
(10, 'App\\Entity\\Product\\Product', 10, '2023-08-16 18:40:07', '2023-08-16 18:40:07'),
(11, 'App\\Entity\\Product\\Product', 11, '2023-08-16 21:01:21', '2023-08-16 21:01:21'),
(12, 'App\\Entity\\Product\\Product', 12, '2023-08-16 21:19:49', '2023-08-16 21:19:49'),
(13, 'App\\Entity\\Product\\Product', 13, '2023-08-16 21:27:32', '2023-08-16 21:27:32'),
(14, 'App\\Entity\\Product\\Product', 14, '2023-08-16 22:15:51', '2023-08-16 22:15:51'),
(15, 'App\\Entity\\Product\\Product', 15, '2023-08-16 22:25:44', '2023-08-16 22:25:44'),
(16, 'App\\Entity\\Product\\Product', 16, '2023-08-17 23:36:30', '2023-08-17 23:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data_translations`
--

CREATE TABLE `meta_data_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_data_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_data_translations`
--

INSERT INTO `meta_data_translations` (`id`, `meta_data_id`, `locale`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 1, 'English', NULL, NULL, NULL),
(2, 2, 'English', NULL, NULL, NULL),
(3, 3, 'English', NULL, NULL, NULL),
(7, 7, 'English', NULL, NULL, NULL),
(8, 8, 'English', '', '', ''),
(9, 9, 'English', '', '', ''),
(10, 10, 'English', '', '', ''),
(11, 11, 'English', '', '', ''),
(12, 12, 'English', '', '', ''),
(13, 13, 'English', NULL, NULL, NULL),
(14, 14, 'English', '', '', ''),
(15, 15, 'English', '', '', ''),
(16, 16, 'English', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_12_152015_create_email_templates_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_09_01_080940_create_settings_table', 1),
(6, '2020_07_02_145857_create_database_backups_table', 1),
(7, '2020_07_06_142817_create_roles_table', 1),
(8, '2020_07_06_143240_create_permissions_table', 1),
(9, '2020_07_25_061549_create_currency_table', 1),
(10, '2020_07_29_095329_create_tax_classes_table', 1),
(11, '2020_07_29_095340_create_tax_classes_translation_table', 1),
(12, '2020_07_29_095348_create_tax_rates_table', 1),
(13, '2020_07_29_095357_create_tax_rates_translation_table', 1),
(14, '2020_07_30_074942_create_media_table', 1),
(15, '2020_07_30_152834_create_tags_table', 1),
(16, '2020_07_30_153031_create_tags_translation_table', 1),
(17, '2020_07_31_135138_create_brands_table', 1),
(18, '2020_07_31_140257_create_brands_translation_table', 1),
(19, '2020_07_31_145819_create_entity_files_table', 1),
(20, '2020_08_11_135105_create_category_table', 1),
(21, '2020_08_11_135531_create_category_translation_table', 1),
(22, '2020_08_23_160650_create_products_table', 1),
(23, '2020_08_23_161219_create_product_translations_table', 1),
(24, '2020_08_23_163548_create_product_categories_table', 1),
(25, '2020_08_23_163600_create_product_tags_table', 1),
(26, '2020_08_24_152430_create_product_variations_table', 1),
(27, '2020_08_24_152831_create_product_variation_items_table', 1),
(28, '2020_08_24_171314_create_product_variation_prices_table', 1),
(29, '2020_08_24_171315_create_coupons_table', 1),
(30, '2020_08_24_171316_create_coupon_translations_table', 1),
(31, '2020_08_24_171317_create_coupon_products_table', 1),
(32, '2020_08_24_171318_create_coupon_categories_table', 1),
(33, '2020_08_24_171319_create_meta_data_table', 1),
(34, '2020_08_24_171320_create_meta_data_translations_table', 1),
(35, '2020_09_02_145504_create_pages_table', 1),
(36, '2020_09_02_145952_create_page_translations_table', 1),
(37, '2020_09_04_084255_create_navigations_table', 1),
(38, '2020_09_04_084515_create_navigation_items_table', 1),
(39, '2020_09_04_084719_create_navigation_item_translations_table', 1),
(40, '2020_11_08_153213_create_customer_addresses_table', 1),
(41, '2020_11_11_172141_create_orders_table', 1),
(42, '2020_11_11_172303_create_order_products_table', 1),
(43, '2020_11_11_172521_create_order_taxes_table', 1),
(44, '2020_11_13_142034_create_transactions_table', 1),
(45, '2021_01_22_171533_create_wish_lists_table', 1),
(46, '2021_01_24_064834_create_product_comments_table', 1),
(47, '2021_01_27_104627_create_product_reviews_table', 1),
(48, '2021_03_22_071324_create_setting_translations', 1),
(49, '2021_04_26_071834_add_city_to_customer_addresses_table', 1),
(50, '2021_04_26_074440_change_exchange_rate_length_to_currency_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Primary Menu', 1, '2020-11-16 12:30:14', '2021-03-17 06:54:42'),
(2, 'Category Menu', 1, '2021-03-17 06:55:09', '2021-03-17 06:55:09'),
(3, 'Footer Menu 1', 1, '2021-03-17 12:47:10', '2021-03-17 12:47:10'),
(4, 'Footer Menu 2', 1, '2021-03-17 13:34:08', '2021-03-17 13:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_items`
--

CREATE TABLE `navigation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `navigation_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `target` varchar(191) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `css_class` varchar(191) DEFAULT NULL,
  `css_id` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_items`
--

INSERT INTO `navigation_items` (`id`, `navigation_id`, `type`, `page_id`, `category_id`, `url`, `icon`, `target`, `parent_id`, `position`, `status`, `css_class`, `css_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'dynamic_url', NULL, NULL, '/', '<i class=\"ti-home\"></i>', '_self', NULL, 1, 1, NULL, NULL, '2021-03-15 15:58:36', '2021-03-17 07:44:18'),
(2, 1, 'dynamic_url', NULL, NULL, '/shop', '<i class=\"ti-shopping-cart\"></i>', '_self', NULL, 2, 1, NULL, NULL, '2021-03-15 15:59:23', '2021-03-17 07:51:45'),
(3, 1, 'dynamic_url', NULL, NULL, '/brands', '<i class=\"ti-apple\"></i>', '_self', NULL, 3, 1, NULL, NULL, '2021-03-15 15:59:37', '2021-03-17 07:52:58'),
(4, 1, 'page', 1, NULL, NULL, '<i class=\"ti-user\"></i>', '_self', NULL, 4, 1, NULL, NULL, '2021-03-15 15:59:59', '2021-03-17 07:53:24'),
(5, 1, 'page', 2, NULL, NULL, '<i class=\"ti-email\"></i>', '_self', NULL, 5, 1, NULL, NULL, '2021-03-15 16:00:13', '2021-03-17 07:54:08'),
(30, 3, 'page', 1, NULL, NULL, NULL, '_self', NULL, 1, 1, NULL, NULL, '2021-03-17 12:47:37', '2021-03-17 12:56:21'),
(31, 3, 'page', 5, NULL, NULL, NULL, '_self', NULL, 2, 1, NULL, NULL, '2021-03-17 12:47:51', '2021-03-17 12:56:21'),
(32, 3, 'page', 6, NULL, NULL, NULL, '_self', NULL, 3, 1, NULL, NULL, '2021-03-17 12:48:06', '2021-03-17 12:56:21'),
(33, 3, 'page', 2, NULL, NULL, NULL, '_self', NULL, 5, 1, NULL, NULL, '2021-03-17 12:53:24', '2021-03-17 12:56:22'),
(34, 3, 'page', 10, NULL, NULL, NULL, '_self', NULL, 4, 1, NULL, NULL, '2021-03-17 12:56:16', '2021-03-17 12:56:22'),
(35, 4, 'page', 7, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 13:36:27', '2021-03-17 13:36:27'),
(36, 4, 'page', 8, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 13:36:46', '2021-03-17 13:36:46'),
(37, 4, 'page', 9, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 13:37:00', '2021-03-17 13:37:00'),
(38, 4, 'page', 11, NULL, NULL, NULL, '_self', NULL, 9999, 1, NULL, NULL, '2021-03-17 13:37:53', '2021-03-17 13:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_item_translations`
--

CREATE TABLE `navigation_item_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `navigation_item_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_item_translations`
--

INSERT INTO `navigation_item_translations` (`id`, `navigation_item_id`, `locale`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'Home', '2021-03-15 15:58:36', '2021-03-15 15:58:36'),
(2, 2, 'English', 'Shop', '2021-03-15 15:59:23', '2021-03-15 15:59:23'),
(3, 3, 'English', 'Brands', '2021-03-15 15:59:37', '2021-03-15 15:59:37'),
(4, 4, 'English', 'About Us', '2021-03-15 15:59:59', '2021-03-15 15:59:59'),
(5, 5, 'English', 'Contact Us', '2021-03-15 16:00:13', '2021-03-15 16:00:13'),
(30, 30, 'English', 'About Us', '2021-03-17 12:47:37', '2021-03-17 12:47:37'),
(31, 31, 'English', 'FAQ', '2021-03-17 12:47:51', '2021-03-17 12:47:51'),
(32, 32, 'English', 'Terms & Conditions', '2021-03-17 12:48:06', '2021-03-17 12:48:06'),
(33, 33, 'English', 'Contact Us', '2021-03-17 12:53:24', '2021-03-17 12:53:24'),
(34, 34, 'English', 'Privacy Policy', '2021-03-17 12:56:16', '2021-03-17 12:56:16'),
(35, 35, 'English', 'Payment Methods', '2021-03-17 13:36:27', '2021-03-17 13:36:27'),
(36, 36, 'English', 'Money Back', '2021-03-17 13:36:46', '2021-03-17 13:36:46'),
(37, 37, 'English', 'Return', '2021-03-17 13:37:00', '2021-03-17 13:37:00'),
(38, 38, 'English', 'Shipping', '2021-03-17 13:37:53', '2021-03-17 13:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `customer_name` varchar(191) NOT NULL,
  `customer_email` varchar(191) NOT NULL,
  `customer_phone` varchar(191) NOT NULL,
  `billing_name` varchar(191) NOT NULL,
  `billing_city` varchar(191) DEFAULT NULL,
  `billing_state` varchar(191) NOT NULL,
  `billing_post_code` varchar(191) NOT NULL,
  `billing_country` varchar(191) NOT NULL,
  `billing_address` text NOT NULL,
  `shipping_name` varchar(191) NOT NULL,
  `shipping_city` varchar(191) DEFAULT NULL,
  `shipping_state` varchar(191) NOT NULL,
  `shipping_post_code` varchar(191) NOT NULL,
  `shipping_country` varchar(191) NOT NULL,
  `shipping_address` text NOT NULL,
  `sub_total` decimal(10,2) UNSIGNED NOT NULL,
  `shipping_method` varchar(191) NOT NULL,
  `shipping_cost` decimal(10,2) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) DEFAULT NULL,
  `discount` decimal(10,2) UNSIGNED NOT NULL,
  `total` decimal(10,2) UNSIGNED NOT NULL,
  `payment_method` varchar(191) DEFAULT NULL,
  `currency` varchar(191) NOT NULL,
  `currency_rate` decimal(10,2) DEFAULT NULL,
  `locale` varchar(191) NOT NULL,
  `status` varchar(30) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `customer_name`, `customer_email`, `customer_phone`, `billing_name`, `billing_city`, `billing_state`, `billing_post_code`, `billing_country`, `billing_address`, `shipping_name`, `shipping_city`, `shipping_state`, `shipping_post_code`, `shipping_country`, `shipping_address`, `sub_total`, `shipping_method`, `shipping_cost`, `coupon_id`, `discount`, `total`, `payment_method`, `currency`, `currency_rate`, `locale`, `status`, `note`, `created_at`, `updated_at`) VALUES
(5, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', 'Cash_On_Delivery', 'USD', NULL, 'English', 'pending', NULL, '2023-06-27 17:52:18', '2023-06-27 18:55:02'),
(6, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-06-27 17:54:37', '2023-06-27 17:54:37'),
(7, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-07-03 17:05:23', '2023-07-03 17:05:23'),
(8, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '0.00', '', '0.00', NULL, '0.00', '0.00', 'Cash_On_Delivery', 'USD', NULL, 'English', 'pending', NULL, '2023-07-03 17:07:05', '2023-07-03 17:07:13'),
(9, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', 'Cash_On_Delivery', 'USD', NULL, 'English', 'pending', NULL, '2023-07-03 17:13:31', '2023-07-03 17:13:37'),
(10, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-07-03 17:15:36', '2023-07-03 17:15:36'),
(11, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-07-03 17:17:55', '2023-07-03 17:17:55'),
(12, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-07-03 17:22:57', '2023-07-03 17:22:57'),
(13, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-07-03 17:28:58', '2023-07-03 17:28:58'),
(14, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-07-03 17:29:26', '2023-07-03 17:29:26'),
(15, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', NULL, 'USD', NULL, 'English', 'pending_payment', NULL, '2023-07-03 17:32:04', '2023-07-03 17:32:04'),
(16, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', 'Cash_On_Delivery', 'USD', NULL, 'English', 'pending', NULL, '2023-07-03 17:32:52', '2023-07-03 17:41:14'),
(17, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', 'Cash_On_Delivery', 'USD', NULL, 'English', 'pending', NULL, '2023-07-03 17:45:13', '2023-07-03 17:45:19'),
(18, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', 'Cash_On_Delivery', 'USD', NULL, 'English', 'pending', NULL, '2023-07-03 17:45:53', '2023-07-03 17:46:00'),
(19, 1, 'admin', 'admin@gmail.com', '253356356', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', 'admin', 'Manchester', 'Swains Island', '54754', 'AS', 'A 1 Cottage  Manchester r 393 fb area', '45.00', 'free', '0.00', NULL, '0.00', '45.00', 'Cash_On_Delivery', 'USD', NULL, 'English', 'pending', NULL, '2023-07-31 18:53:01', '2023-07-31 18:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_attributes` text DEFAULT NULL,
  `unit_price` decimal(10,2) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `line_total` decimal(10,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `product_attributes`, `unit_price`, `qty`, `line_total`, `created_at`, `updated_at`) VALUES
(4, 5, 2, 'a:0:{}', '45.00', 1, '45.00', '2023-06-27 17:52:18', '2023-06-27 17:52:18'),
(5, 6, 2, 'a:0:{}', '45.00', 1, '45.00', '2023-06-27 17:54:37', '2023-06-27 17:54:37'),
(6, 7, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:05:23', '2023-07-03 17:05:23'),
(7, 9, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:13:31', '2023-07-03 17:13:31'),
(8, 10, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:15:36', '2023-07-03 17:15:36'),
(9, 11, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:17:55', '2023-07-03 17:17:55'),
(10, 12, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:22:57', '2023-07-03 17:22:57'),
(11, 13, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:28:58', '2023-07-03 17:28:58'),
(12, 14, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:29:26', '2023-07-03 17:29:26'),
(13, 15, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:32:04', '2023-07-03 17:32:04'),
(14, 16, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:32:52', '2023-07-03 17:32:52'),
(15, 17, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:45:13', '2023-07-03 17:45:13'),
(16, 18, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-03 17:45:53', '2023-07-03 17:45:53'),
(17, 19, 1, 'a:0:{}', '45.00', 1, '45.00', '2023-07-31 18:53:01', '2023-07-31 18:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_taxes`
--

CREATE TABLE `order_taxes` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(15,4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `template` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `slug`, `status`, `template`, `created_at`, `updated_at`) VALUES
(1, 'about-us', 1, NULL, '2021-03-15 10:28:45', '2021-03-15 10:28:45'),
(2, 'contact-us', 1, 'contact', '2021-03-15 10:29:26', '2021-03-15 10:29:26'),
(5, 'faq', 1, NULL, '2021-03-17 12:43:29', '2021-03-17 12:43:29'),
(6, 'terms-&-conditions', 1, NULL, '2021-03-17 12:45:00', '2021-03-17 12:45:00'),
(7, 'payment-methods', 1, NULL, '2021-03-17 12:46:06', '2021-03-17 12:46:06'),
(8, 'money-back', 1, NULL, '2021-03-17 12:46:23', '2021-03-17 12:46:23'),
(9, 'returns', 1, NULL, '2021-03-17 12:46:38', '2021-03-17 12:46:38'),
(10, 'privacy-policy', 1, NULL, '2021-03-17 12:46:52', '2021-03-17 12:46:52'),
(11, 'shipping', 1, NULL, '2021-03-17 13:37:25', '2021-03-17 13:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` text NOT NULL,
  `body` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'About US', '<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2021-03-15 10:28:46', '2021-03-15 10:28:46'),
(2, 2, 'English', 'Contact Us', NULL, '2021-03-15 10:29:26', '2021-03-15 10:29:26'),
(5, 5, 'English', 'FAQ', '<p>This is FAQ Page</p>', '2021-03-17 12:43:29', '2021-03-17 12:43:29'),
(6, 6, 'English', 'Terms & Conditions', '<p>This is Terms and Condition Page</p>', '2021-03-17 12:45:00', '2021-03-17 12:45:00'),
(7, 7, 'English', 'Payment Methods', '<p>This is payment method page</p>', '2021-03-17 12:46:06', '2021-03-17 12:46:06'),
(8, 8, 'English', 'Money Back', '<p>This is money back page</p>', '2021-03-17 12:46:23', '2021-03-17 12:46:23'),
(9, 9, 'English', 'Returns', '<p>This is return page</p>', '2021-03-17 12:46:38', '2021-03-17 12:46:38'),
(10, 10, 'English', 'Privacy Policy', '<p>This is privacy policy page</p>', '2021-03-17 12:46:52', '2021-03-17 12:46:52'),
(11, 11, 'English', 'Shipping', '<p>This is Shipping Page</p>', '2021-03-17 13:37:25', '2021-03-17 13:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$l0IaxZGyKr36UgxQs52cDeybuIzcDVAK1Xqbe.lZU8GbtoXYIpJiu', '2023-07-31 17:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) NOT NULL,
  `permission` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tax_class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `product_type` varchar(191) NOT NULL,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `special_price` decimal(10,2) UNSIGNED DEFAULT NULL,
  `special_price_start` date DEFAULT NULL,
  `special_price_end` date DEFAULT NULL,
  `sku` varchar(191) DEFAULT NULL,
  `manage_stock` tinyint(1) DEFAULT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `viewed` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) DEFAULT NULL,
  `featured_tag` varchar(30) DEFAULT NULL,
  `digital_file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `tax_class_id`, `slug`, `product_type`, `price`, `special_price`, `special_price_start`, `special_price_end`, `sku`, `manage_stock`, `qty`, `in_stock`, `viewed`, `is_active`, `featured_tag`, `digital_file`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'product-name', 'simple_product', '45.00', NULL, NULL, NULL, NULL, 0, NULL, 1, 62, 1, NULL, '', '2023-05-23 23:55:04', '2023-08-16 21:38:58'),
(2, NULL, NULL, 'product-name2', 'simple_product', '45.00', NULL, NULL, NULL, NULL, 0, NULL, 1, 8, 1, NULL, '', '2023-05-23 23:55:48', '2023-06-27 20:57:13'),
(3, NULL, NULL, 'product-name3', 'simple_product', '45.00', NULL, NULL, NULL, NULL, 0, NULL, 1, 0, 1, NULL, '', '2023-05-23 23:56:21', '2023-05-23 23:56:21'),
(13, NULL, NULL, 'name', 'simple_product', '90.00', NULL, NULL, NULL, '545', 1, 67, 1, 5, 1, NULL, NULL, '2023-08-16 21:27:31', '2023-08-16 21:42:04'),
(14, NULL, NULL, 'name100', 'simple_product', '90.00', NULL, NULL, NULL, '545', 1, 67, 1, 3, 1, NULL, NULL, '2023-08-16 22:15:51', '2023-08-16 22:18:39'),
(15, NULL, NULL, 'name1000', 'simple_product', '91.00', NULL, NULL, NULL, '546', 1, 68, 1, 2, 1, NULL, NULL, '2023-08-16 22:25:44', '2023-08-16 22:26:45'),
(16, 1, NULL, 'name4', 'simple_product', '45.00', '3.00', NULL, NULL, NULL, 0, NULL, 1, 1, 1, NULL, '', '2023-08-17 23:36:30', '2023-08-17 23:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(1, 35),
(2, 34),
(3, 32),
(13, 33),
(14, 33),
(15, 32),
(16, 33);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rating`, `comment`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5, 'fbcgvnb', 0, '2023-06-27 17:09:32', '2023-06-27 17:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'Product Name', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-05-23 23:55:04', '2023-05-23 23:55:04'),
(2, 2, 'English', 'Product Name', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-05-23 23:55:48', '2023-05-23 23:55:48'),
(3, 3, 'English', 'product name', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2023-05-23 23:56:21', '2023-05-23 23:56:21'),
(8, 13, 'English', 'name', '<p>this is description</p>', 'this is short description', '2023-05-23 23:56:21', '2023-08-16 21:41:52'),
(9, 14, 'English', 'name100', 'this is description', 'this is short description', '2023-05-23 23:56:21', NULL),
(10, 15, 'English', 'name1000', 'this is description', 'this is short description', '2023-05-23 23:56:21', NULL),
(11, 16, 'English', 'name', '<p>demo</p>', 'demo', '2023-08-17 23:36:30', '2023-08-17 23:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variation_items`
--

CREATE TABLE `product_variation_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `variation_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_variation_prices`
--

CREATE TABLE `product_variation_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `option` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `special_price` decimal(10,2) UNSIGNED DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'mail_type', 'smtp', NULL, NULL),
(2, 'backend_direction', 'ltr', NULL, '2023-05-24 00:46:22'),
(3, 'language', 'English', NULL, NULL),
(4, 'email_verification', 'disabled', NULL, '2023-05-24 00:46:22'),
(5, 'company_name', 'Melly Munchies', '2023-05-05 19:42:17', '2023-05-05 19:42:17'),
(6, 'site_title', 'Melly Munchies', '2023-05-05 19:42:17', '2023-05-05 19:42:17'),
(7, 'phone', '25145415', '2023-05-05 19:42:17', '2023-05-05 19:42:17'),
(8, 'email', 'admin@gmail.com', '2023-05-05 19:42:17', '2023-05-05 19:42:17'),
(9, 'timezone', 'Africa/Accra', '2023-05-05 19:42:17', '2023-05-05 19:42:17'),
(68, 'primary_menu', '1', '2021-03-16 16:45:35', '2021-03-22 07:39:21'),
(69, 'category_menu', '2', '2021-03-16 16:45:35', '2021-03-22 07:39:21'),
(70, 'footer_menu_1_title', 'Information', '2021-03-16 16:45:35', '2021-03-22 07:52:49'),
(71, 'footer_menu_1', '3', '2021-03-16 16:45:35', '2021-03-22 07:39:22'),
(72, 'footer_menu_2_title', 'Customer Service', '2021-03-16 16:45:35', '2021-03-22 08:00:36'),
(73, 'footer_menu_2', '4', '2021-03-16 16:45:35', '2021-03-22 07:39:22'),
(74, 'footer_about_us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2021-03-16 16:49:23', '2021-03-17 11:36:51'),
(75, 'copyright_text', 'Copyright © 2020 <a href=\"#\" target=\"_blank\">Tricky Code</a>  -  All Rights Reserved.', '2021-03-16 16:49:23', '2021-03-17 11:36:51'),
(77, 'meta_keywords', 'shop, online store, online shop', '2021-03-17 14:08:50', '2021-03-17 14:08:50'),
(78, 'meta_description', 'Online Shopping', '2021-03-17 14:08:50', '2021-03-17 14:08:50'),
(79, 'service_1_title', 'FREE SHIPING', '2021-03-18 07:33:35', '2021-03-22 08:03:01'),
(80, 'service_1_sub_title', 'Free Shipping Over 100', '2021-03-18 07:33:35', '2021-03-27 07:53:29'),
(81, 'service_1_icon', '<i class=\"ti-rocket\"></i>', '2021-03-18 07:33:35', '2021-03-22 08:03:03'),
(82, 'service_2_title', 'FREE RETURN', '2021-03-18 07:33:35', '2021-03-22 08:03:04'),
(83, 'service_2_sub_title', 'Within 30 days returns', '2021-03-18 07:33:35', '2021-03-22 08:03:04'),
(84, 'service_2_icon', '<i class=\"ti-reload\"></i>', '2021-03-18 07:33:35', '2021-03-22 08:03:04'),
(85, 'service_3_title', 'SUCURE PAYMENT', '2021-03-18 07:33:37', '2021-03-22 08:03:04'),
(86, 'service_3_sub_title', '100% secure payment', '2021-03-18 07:33:38', '2021-03-22 08:03:05'),
(87, 'service_3_icon', '<i class=\"ti-lock\"></i>', '2021-03-18 07:33:38', '2021-03-22 08:03:06'),
(88, 'service_4_title', 'BEST PEICE', '2021-03-18 07:33:38', '2021-03-22 08:03:06'),
(89, 'service_4_sub_title', 'Guaranteed price', '2021-03-18 07:33:38', '2021-03-22 08:03:06'),
(90, 'service_4_icon', '<i class=\"ti-tag\"></i>', '2021-03-18 07:33:38', '2021-03-22 08:03:06'),
(91, 'hero_title', '<span>UP TO 30% OFF</span> MacBook', '2021-03-30 21:41:43', '2021-03-30 21:41:43'),
(92, 'hero_content', 'The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. ', '2021-03-30 21:41:43', '2021-03-30 21:50:49'),
(93, 'hero_button_text', 'Shop Now', '2021-03-30 21:41:43', '2021-03-30 21:41:43'),
(94, 'hero_button_link', '#', '2021-03-30 21:41:43', '2021-03-30 21:41:43'),
(95, 'supported_countries', '[\"American Samoa\"]', '2023-05-24 00:46:22', '2023-05-24 00:46:22'),
(96, 'date_format', 'Y-m-d', '2023-05-24 00:46:22', '2023-05-24 00:46:22'),
(97, 'time_format', '24', '2023-05-24 00:46:22', '2023-05-24 00:46:22'),
(98, 'media_file_types_supported', 'png,jpg,jpeg', '2023-05-24 00:46:22', '2023-05-24 00:46:22'),
(99, 'media_max_upload_size', '2', '2023-05-24 00:46:22', '2023-05-24 00:46:22'),
(100, 'digital_file_max_upload_size', '2', '2023-05-24 00:46:22', '2023-05-24 00:46:22'),
(101, 'free_shipping_active', 'Yes', '2023-05-24 00:46:53', '2023-06-27 17:25:13'),
(102, 'free_shipping_label', 'free', '2023-05-24 00:46:53', '2023-06-27 17:25:13'),
(103, 'free_shipping_minimum_amount', '0', '2023-05-24 00:46:53', '2023-06-27 17:25:13'),
(104, 'logo', 'logo.png', '2023-06-15 20:07:08', '2023-06-15 20:07:08'),
(105, 'favicon', 'file_648b6f6ede845.png', '2023-06-15 20:07:10', '2023-06-15 20:07:10'),
(106, 'cod_active', 'Yes', '2023-06-27 18:53:27', '2023-06-27 19:17:43'),
(107, 'cod_label', 'Cash On Delivery', '2023-06-27 18:53:27', '2023-06-27 19:17:43'),
(108, 'cod_description', 'Cash On Delivery', '2023-06-27 18:53:27', '2023-06-27 19:17:43'),
(109, 'bank_transfer_active', 'Yes', '2023-07-31 18:55:36', '2023-07-31 18:55:36'),
(110, 'bank_transfer_label', 'Bank Transfer', '2023-07-31 18:55:37', '2023-07-31 18:55:37'),
(111, 'bank_transfer_description', 'BANK TRANSFER\r\n', '2023-07-31 18:55:37', '2023-07-31 18:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags_translation`
--

CREATE TABLE `tags_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_classes`
--

CREATE TABLE `tax_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `based_on` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_classes_translation`
--

CREATE TABLE `tax_classes_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_class_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_class_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `rate` decimal(8,4) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates_translation`
--

CREATE TABLE `tax_rates_translation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_data` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `profile_picture` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `provider` varchar(191) DEFAULT NULL,
  `provider_id` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `user_type`, `role_id`, `status`, `profile_picture`, `email_verified_at`, `password`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '253356356', 'admin', NULL, 1, 'default.png', '2023-05-05 19:41:54', '$2y$10$EQB1n8ZifCXVkXSitZ6PXu9yqj7zQzdo2Sbg3Xq7LpsFaNyqju0YO', NULL, NULL, '58bqBKFd86qOY4nhrEdR7TV9YwMPvUT6J4JDehssA6rknchxXVO5rTzDrSl5', '2023-05-05 19:41:55', '2023-07-31 19:03:05'),
(3, 'USERONE', 'USERONE@GMAIL.COM', '547474', 'admin', NULL, 1, '1690830430about-us-img.png', '2023-07-31 18:57:21', '$2y$10$xLAnQoCbFoAh22dlxvyEJuhI2GMuVDIoK8Li/PYIxysPQDwr/3ZMa', NULL, NULL, NULL, '2023-07-31 18:57:21', '2023-07-31 19:07:10'),
(4, 'usertwo', 'usertwo@gmail.com', '251545454', 'customer', NULL, 1, 'default.png', '2023-07-31 18:59:00', '$2y$10$izOUJsF87itWT1FXLlLzyOA3XPMoid/U9rG6Dkz4ZEGSZN81wTpd6', NULL, NULL, NULL, '2023-07-31 18:59:00', '2023-07-31 18:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-06-27 17:13:08', '2023-06-27 17:13:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `brands_translation`
--
ALTER TABLE `brands_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_translation_brand_id_locale_unique` (`brand_id`,`locale`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_slug_unique` (`slug`);

--
-- Indexes for table `category_translation`
--
ALTER TABLE `category_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translation_category_id_locale_unique` (`category_id`,`locale`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_code_index` (`code`);

--
-- Indexes for table `coupon_categories`
--
ALTER TABLE `coupon_categories`
  ADD PRIMARY KEY (`coupon_id`,`category_id`,`exclude`),
  ADD KEY `coupon_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `coupon_products`
--
ALTER TABLE `coupon_products`
  ADD PRIMARY KEY (`coupon_id`,`product_id`,`exclude`),
  ADD KEY `coupon_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupon_translations_coupon_id_locale_unique` (`coupon_id`,`locale`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `database_backups`
--
ALTER TABLE `database_backups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entity_files`
--
ALTER TABLE `entity_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entity_files_entity_type_entity_id_index` (`entity_type`,`entity_id`),
  ADD KEY `entity_files_media_id_index` (`media_id`),
  ADD KEY `entity_files_name_index` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meta_data_entity_type_entity_id_index` (`entity_type`,`entity_id`);

--
-- Indexes for table `meta_data_translations`
--
ALTER TABLE `meta_data_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `meta_data_translations_meta_data_id_locale_unique` (`meta_data_id`,`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigation_items_parent_id_foreign` (`parent_id`),
  ADD KEY `navigation_items_category_id_foreign` (`category_id`),
  ADD KEY `navigation_items_page_id_foreign` (`page_id`),
  ADD KEY `navigation_items_navigation_id_index` (`navigation_id`);

--
-- Indexes for table `navigation_item_translations`
--
ALTER TABLE `navigation_item_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `navigation_item_translations_navigation_item_id_locale_unique` (`navigation_item_id`,`locale`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_taxes`
--
ALTER TABLE `order_taxes`
  ADD PRIMARY KEY (`order_id`,`tax_rate_id`),
  ADD KEY `order_taxes_tax_rate_id_foreign` (`tax_rate_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_comments_user_id_foreign` (`user_id`),
  ADD KEY `product_comments_product_id_foreign` (`product_id`),
  ADD KEY `product_comments_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`product_id`,`tag_id`),
  ADD KEY `product_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variations_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_variation_items`
--
ALTER TABLE `product_variation_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variation_items_variation_id_foreign` (`variation_id`);

--
-- Indexes for table `product_variation_prices`
--
ALTER TABLE `product_variation_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variation_prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `tags_translation`
--
ALTER TABLE `tags_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_translation_tag_id_locale_unique` (`tag_id`,`locale`);

--
-- Indexes for table `tax_classes`
--
ALTER TABLE `tax_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_classes_translation`
--
ALTER TABLE `tax_classes_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_classes_translation_tax_class_id_locale_unique` (`tax_class_id`,`locale`);

--
-- Indexes for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tax_rates_tax_class_id_index` (`tax_class_id`);

--
-- Indexes for table `tax_rates_translation`
--
ALTER TABLE `tax_rates_translation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_rates_translation_tax_rate_id_locale_unique` (`tax_rate_id`,`locale`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `wish_lists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands_translation`
--
ALTER TABLE `brands_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `category_translation`
--
ALTER TABLE `category_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `database_backups`
--
ALTER TABLE `database_backups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entity_files`
--
ALTER TABLE `entity_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `meta_data_translations`
--
ALTER TABLE `meta_data_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `navigation_items`
--
ALTER TABLE `navigation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `navigation_item_translations`
--
ALTER TABLE `navigation_item_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_variation_items`
--
ALTER TABLE `product_variation_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_variation_prices`
--
ALTER TABLE `product_variation_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags_translation`
--
ALTER TABLE `tags_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_classes`
--
ALTER TABLE `tax_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_classes_translation`
--
ALTER TABLE `tax_classes_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates_translation`
--
ALTER TABLE `tax_rates_translation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brands_translation`
--
ALTER TABLE `brands_translation`
  ADD CONSTRAINT `brands_translation_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translation`
--
ALTER TABLE `category_translation`
  ADD CONSTRAINT `category_translation_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_categories`
--
ALTER TABLE `coupon_categories`
  ADD CONSTRAINT `coupon_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupon_categories_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_products`
--
ALTER TABLE `coupon_products`
  ADD CONSTRAINT `coupon_products_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coupon_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupon_translations`
--
ALTER TABLE `coupon_translations`
  ADD CONSTRAINT `coupon_translations_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `entity_files`
--
ALTER TABLE `entity_files`
  ADD CONSTRAINT `entity_files_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `meta_data_translations`
--
ALTER TABLE `meta_data_translations`
  ADD CONSTRAINT `meta_data_translations_meta_data_id_foreign` FOREIGN KEY (`meta_data_id`) REFERENCES `meta_data` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD CONSTRAINT `navigation_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `navigation_items_navigation_id_foreign` FOREIGN KEY (`navigation_id`) REFERENCES `navigations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `navigation_items_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `navigation_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `navigation_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `navigation_item_translations`
--
ALTER TABLE `navigation_item_translations`
  ADD CONSTRAINT `navigation_item_translations_navigation_item_id_foreign` FOREIGN KEY (`navigation_item_id`) REFERENCES `navigation_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_taxes`
--
ALTER TABLE `order_taxes`
  ADD CONSTRAINT `order_taxes_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_taxes_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `tax_rates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `product_comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `product_comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD CONSTRAINT `product_tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variation_items`
--
ALTER TABLE `product_variation_items`
  ADD CONSTRAINT `product_variation_items_variation_id_foreign` FOREIGN KEY (`variation_id`) REFERENCES `product_variations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variation_prices`
--
ALTER TABLE `product_variation_prices`
  ADD CONSTRAINT `product_variation_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags_translation`
--
ALTER TABLE `tags_translation`
  ADD CONSTRAINT `tags_translation_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tax_classes_translation`
--
ALTER TABLE `tax_classes_translation`
  ADD CONSTRAINT `tax_classes_translation_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `tax_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD CONSTRAINT `tax_rates_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `tax_classes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tax_rates_translation`
--
ALTER TABLE `tax_rates_translation`
  ADD CONSTRAINT `tax_rates_translation_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `tax_rates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD CONSTRAINT `wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wish_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
