-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-12-2021 a las 15:52:53
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mesh4all_db`
--
CREATE DATABASE IF NOT EXISTS `mesh4all_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mesh4all_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Un comentarista de WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2021-12-14 20:44:51', '2021-12-14 20:44:51', 'Hola, esto es un comentario.\nPara empezar a moderar, editar y borrar comentarios, por favor, visita la pantalla de comentarios en el escritorio.\nLos avatares de los comentaristas provienen de <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://127.0.0.1:8080/Proyectos/Mesh4all', 'yes'),
(2, 'home', 'http://127.0.0.1:8080/Proyectos/Mesh4all', 'yes'),
(3, 'blogname', 'Mesh4all', 'yes'),
(4, 'blogdescription', 'Únete a la red Mesh', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'kmestizo@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j \\d\\e F \\d\\e Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'j \\d\\e F \\d\\e Y H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:91:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:33:\"classic-editor/classic-editor.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:2:{i:0;s:73:\"/opt/lampp/htdocs/Proyectos/Mesh4all/wp-content/themes/mesh4all/style.css\";i:1;s:0:\"\";}', 'no'),
(40, 'template', 'mesh4all', 'yes'),
(41, 'stylesheet', 'mesh4all', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '49752', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'posts', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', '', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '0', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '25', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1655066685', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(99, 'initial_db_version', '49752', 'yes'),
(100, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(101, 'fresh_site', '0', 'yes'),
(102, 'WPLANG', 'es_ES', 'yes'),
(103, 'widget_block', 'a:6:{i:2;a:1:{s:7:\"content\";s:19:\"<!-- wp:search /-->\";}i:3;a:1:{s:7:\"content\";s:160:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Entradas recientes</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->\";}i:4;a:1:{s:7:\"content\";s:233:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Comentarios recientes</h2><!-- /wp:heading --><!-- wp:latest-comments {\"displayAvatar\":false,\"displayDate\":false,\"displayExcerpt\":false} /--></div><!-- /wp:group -->\";}i:5;a:1:{s:7:\"content\";s:146:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Archivos</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->\";}i:6;a:1:{s:7:\"content\";s:151:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Categorías</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}s:13:\"array_version\";i:3;}', 'yes'),
(105, 'cron', 'a:7:{i:1640011493;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1640033092;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1640033093;a:4:{s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1640033118;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1640033120;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1640205893;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(106, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(116, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(117, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(119, 'recovery_keys', 'a:0:{}', 'yes'),
(120, 'https_detection_errors', 'a:1:{s:20:\"https_request_failed\";a:1:{i:0;s:24:\"Solicitud HTTPS fallida.\";}}', 'yes'),
(122, 'theme_mods_twentytwentyone', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1639514793;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:9:\"sidebar-2\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}}}}', 'yes'),
(131, '_site_transient_timeout_browser_fe1f83deb80158b443a2e4acea08b442', '1640119519', 'no'),
(132, '_site_transient_browser_fe1f83deb80158b443a2e4acea08b442', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:12:\"96.0.4664.93\";s:8:\"platform\";s:5:\"Linux\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(133, '_site_transient_timeout_php_check_9dfe9c1407d8720f2aa82fbeb25ecdd3', '1640119520', 'no'),
(134, '_site_transient_php_check_9dfe9c1407d8720f2aa82fbeb25ecdd3', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(136, 'can_compress_scripts', '1', 'no'),
(151, 'finished_updating_comment_type', '1', 'yes'),
(152, 'current_theme', 'Mesh4all - Theme Web', 'yes'),
(153, 'theme_mods_twentynineteen', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:2:{s:6:\"menu-1\";i:2;s:6:\"footer\";i:3;}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1639581042;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}}}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(154, 'theme_switched', '', 'yes'),
(156, 'theme_mods_mesh4all', 'a:5:{i:0;b:0;s:18:\"nav_menu_locations\";a:2:{s:11:\"header-menu\";i:2;s:11:\"footer-menu\";i:3;}s:18:\"custom_css_post_id\";i:-1;s:11:\"custom_logo\";i:21;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1639580976;s:4:\"data\";a:1:{s:19:\"wp_inactive_widgets\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}}}}', 'yes'),
(160, 'recently_activated', 'a:0:{}', 'yes'),
(163, 'ftp_credentials', 'a:3:{s:8:\"hostname\";s:12:\"Mesh4all.com\";s:8:\"username\";s:5:\"admin\";s:15:\"connection_type\";s:3:\"ftp\";}', 'yes'),
(164, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(166, 'widget_recent-comments', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(167, 'widget_recent-posts', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(170, 'site_logo', '21', 'yes'),
(202, '_wp_suggested_policy_text_has_changed', 'not-changed', 'yes'),
(208, 'new_admin_email', 'kmestizo@gmail.com', 'yes'),
(216, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/es_ES/wordpress-5.8.2.zip\";s:6:\"locale\";s:5:\"es_ES\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/es_ES/wordpress-5.8.2.zip\";s:10:\"no_content\";s:0:\"\";s:11:\"new_bundled\";s:0:\"\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"5.8.2\";s:7:\"version\";s:5:\"5.8.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.6\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1640009172;s:15:\"version_checked\";s:5:\"5.8.2\";s:12:\"translations\";a:0:{}}', 'no'),
(217, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1640009176;s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:33:\"classic-editor/classic-editor.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:28:\"w.org/plugins/classic-editor\";s:4:\"slug\";s:14:\"classic-editor\";s:6:\"plugin\";s:33:\"classic-editor/classic-editor.php\";s:11:\"new_version\";s:5:\"1.6.2\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/classic-editor/\";s:7:\"package\";s:63:\"https://downloads.wordpress.org/plugin/classic-editor.1.6.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-256x256.png?rev=1998671\";s:2:\"1x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-128x128.png?rev=1998671\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/classic-editor/assets/banner-1544x500.png?rev=1998671\";s:2:\"1x\";s:69:\"https://ps.w.org/classic-editor/assets/banner-772x250.png?rev=1998676\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.9\";}}s:7:\"checked\";a:1:{s:33:\"classic-editor/classic-editor.php\";s:5:\"1.6.2\";}}', 'no'),
(218, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1640009175;s:7:\"checked\";a:2:{s:8:\"mesh4all\";s:5:\"0.0.1\";s:14:\"twentynineteen\";s:3:\"2.1\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:1:{s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"2.1\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.2.1.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}}s:12:\"translations\";a:0:{}}', 'no'),
(220, 'home-título', 'Únete a la red Mesh', 'yes'),
(222, 'txt-btn', 'Ver más', 'yes'),
(225, 'url-btn', 'http://127.0.0.1:8080/Proyectos/Mesh4all/nosotros/', 'yes'),
(230, '_transient_health-check-site-status-result', '{\"good\":16,\"recommended\":3,\"critical\":0}', 'yes'),
(262, '_site_transient_timeout_theme_roots', '1640010974', 'no'),
(263, '_site_transient_theme_roots', 'a:2:{s:8:\"mesh4all\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";}', 'no'),
(264, '_site_transient_timeout_community-events-1aecf33ab8525ff212ebdffbb438372e', '1640052911', 'no'),
(265, '_site_transient_community-events-1aecf33ab8525ff212ebdffbb438372e', 'a:4:{s:9:\"sandboxed\";b:0;s:5:\"error\";N;s:8:\"location\";a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}s:6:\"events\";a:1:{i:0;a:10:{s:4:\"type\";s:6:\"meetup\";s:5:\"title\";s:48:\"Free OPEN Passes to DeveloperWeek 2022 (Feb 2-9)\";s:3:\"url\";s:65:\"https://www.meetup.com/WordPress-Meetup-Caracas/events/282720282/\";s:6:\"meetup\";s:24:\"WordPress Meetup Caracas\";s:10:\"meetup_url\";s:48:\"https://www.meetup.com/WordPress-Meetup-Caracas/\";s:4:\"date\";s:19:\"2022-02-02 07:00:00\";s:8:\"end_date\";s:19:\"2022-02-09 16:00:00\";s:20:\"start_unix_timestamp\";i:1643799600;s:18:\"end_unix_timestamp\";i:1644436800;s:8:\"location\";a:4:{s:8:\"location\";s:6:\"Online\";s:7:\"country\";s:2:\"VE\";s:8:\"latitude\";d:10.5399999618530006983974089962430298328399658203125;s:9:\"longitude\";d:-66.9300003051759944128207280300557613372802734375;}}}}', 'no'),
(267, 'category_children', 'a:0:{}', 'yes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_edit_lock', '1639514813:1'),
(4, 6, '_edit_lock', '1639514979:1'),
(44, 17, '_wp_trash_meta_status', 'publish'),
(45, 17, '_wp_trash_meta_time', '1639515379'),
(46, 18, '_wp_trash_meta_status', 'publish'),
(47, 18, '_wp_trash_meta_time', '1639515383'),
(48, 19, '_menu_item_type', 'post_type'),
(49, 19, '_menu_item_menu_item_parent', '0'),
(50, 19, '_menu_item_object_id', '1'),
(51, 19, '_menu_item_object', 'post'),
(52, 19, '_menu_item_target', ''),
(53, 19, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(54, 19, '_menu_item_xfn', ''),
(55, 19, '_menu_item_url', ''),
(57, 20, '_menu_item_type', 'taxonomy'),
(58, 20, '_menu_item_menu_item_parent', '0'),
(59, 20, '_menu_item_object_id', '1'),
(60, 20, '_menu_item_object', 'category'),
(61, 20, '_menu_item_target', ''),
(62, 20, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(63, 20, '_menu_item_xfn', ''),
(64, 20, '_menu_item_url', ''),
(66, 21, '_wp_attached_file', '2021/12/Captura-de-pantalla-de-2021-12-14-17-07-48.png'),
(67, 21, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:312;s:6:\"height\";i:74;s:4:\"file\";s:54:\"2021/12/Captura-de-pantalla-de-2021-12-14-17-07-48.png\";s:5:\"sizes\";a:2:{s:6:\"medium\";a:4:{s:4:\"file\";s:53:\"Captura-de-pantalla-de-2021-12-14-17-07-48-300x71.png\";s:5:\"width\";i:300;s:6:\"height\";i:71;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:53:\"Captura-de-pantalla-de-2021-12-14-17-07-48-150x74.png\";s:5:\"width\";i:150;s:6:\"height\";i:74;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(68, 22, '_wp_trash_meta_status', 'publish'),
(69, 22, '_wp_trash_meta_time', '1639516301'),
(79, 23, '_menu_item_type', 'custom'),
(80, 23, '_menu_item_menu_item_parent', '0'),
(81, 23, '_menu_item_object_id', '23'),
(82, 23, '_menu_item_object', 'custom'),
(83, 23, '_menu_item_target', ''),
(84, 23, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(85, 23, '_menu_item_xfn', ''),
(86, 23, '_menu_item_url', 'http://127.0.0.1:8080/Proyectos/Mesh4all/'),
(97, 25, '_wp_attached_file', '2021/12/Mesh4allFavico.png'),
(98, 25, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:63;s:6:\"height\";i:56;s:4:\"file\";s:26:\"2021/12/Mesh4allFavico.png\";s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(99, 26, '_wp_trash_meta_status', 'publish'),
(100, 26, '_wp_trash_meta_time', '1639577332'),
(101, 27, '_wp_trash_meta_status', 'publish'),
(102, 27, '_wp_trash_meta_time', '1639577386'),
(103, 28, '_edit_lock', '1639577556:1'),
(104, 28, '_wp_trash_meta_status', 'publish'),
(105, 28, '_wp_trash_meta_time', '1639577559'),
(106, 29, '_edit_lock', '1639578242:1'),
(107, 30, '_edit_lock', '1639578448:1'),
(108, 31, '_edit_lock', '1639581353:1'),
(109, 3, '_wp_suggested_privacy_policy_content', 'a:3:{s:11:\"plugin_name\";s:9:\"WordPress\";s:11:\"policy_text\";s:4767:\"<h2>Quiénes somos</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>La dirección de nuestra web es: http://127.0.0.1:8080/Proyectos/Mesh4all.</p><h2>Comentarios</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Cuando los visitantes dejan comentarios en la web, recopilamos los datos que se muestran en el formulario de comentarios, así como la dirección IP del visitante y la cadena de agentes de usuario del navegador para ayudar a la detección de spam.</p><p>Una cadena anónima creada a partir de tu dirección de correo electrónico (también llamada hash) puede ser proporcionada al servicio de Gravatar para ver si la estás usando. La política de privacidad del servicio Gravatar está disponible aquí: https://automattic.com/privacy/. Después de la aprobación de tu comentario, la imagen de tu perfil es visible para el público en el contexto de tu comentario.</p><h2>Medios</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si subes imágenes a la web, deberías evitar subir imágenes con datos de ubicación (GPS EXIF) incluidos. Los visitantes de la web pueden descargar y extraer cualquier dato de ubicación de las imágenes de la web.</p><h2>Cookies</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si dejas un comentario en nuestro sitio puedes elegir guardar tu nombre, dirección de correo electrónico y web en cookies. Esto es para tu comodidad, para que no tengas que volver a rellenar tus datos cuando dejes otro comentario. Estas cookies tendrán una duración de un año.</p><p>Si tienes una cuenta y te conectas a este sitio, instalaremos una cookie temporal para determinar si tu navegador acepta cookies. Esta cookie no contiene datos personales y se elimina al cerrar el navegador.</p><p>Cuando accedas, también instalaremos varias cookies para guardar tu información de acceso y tus opciones de visualización de pantalla. Las cookies de acceso duran dos días, y las cookies de opciones de pantalla duran un año. Si seleccionas «Recuérdarme», tu acceso perdurará durante dos semanas. Si sales de tu cuenta, las cookies de acceso se eliminarán.</p><p>Si editas o publicas un artículo se guardará una cookie adicional en tu navegador. Esta cookie no incluye datos personales y simplemente indica el ID del artículo que acabas de editar. Caduca después de 1 día.</p><h2>Contenido incrustado de otros sitios web</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Los artículos de este sitio pueden incluir contenido incrustado (por ejemplo, vídeos, imágenes, artículos, etc.). El contenido incrustado de otras webs se comporta exactamente de la misma manera que si el visitante hubiera visitado la otra web.</p><p>Estas web pueden recopilar datos sobre ti, utilizar cookies, incrustar un seguimiento adicional de terceros, y supervisar tu interacción con ese contenido incrustado, incluido el seguimiento de tu interacción con el contenido incrustado si tienes una cuenta y estás conectado a esa web.</p><h2>Con quién compartimos tus datos</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si solicitas un restablecimiento de contraseña, tu dirección IP será incluida en el correo electrónico de restablecimiento.</p><h2>Cuánto tiempo conservamos tus datos</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si dejas un comentario, el comentario y sus metadatos se conservan indefinidamente. Esto es para que podamos reconocer y aprobar comentarios sucesivos automáticamente, en lugar de mantenerlos en una cola de moderación.</p><p>De los usuarios que se registran en nuestra web (si los hay), también almacenamos la información personal que proporcionan en su perfil de usuario. Todos los usuarios pueden ver, editar o eliminar su información personal en cualquier momento (excepto que no pueden cambiar su nombre de usuario). Los administradores de la web también pueden ver y editar esa información.</p><h2>Qué derechos tienes sobre tus datos</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si tienes una cuenta o has dejado comentarios en esta web, puedes solicitar recibir un archivo de exportación de los datos personales que tenemos sobre ti, incluyendo cualquier dato que nos hayas proporcionado. También puedes solicitar que eliminemos cualquier dato personal que tengamos sobre ti. Esto no incluye ningún dato que estemos obligados a conservar con fines administrativos, legales o de seguridad.</p><h2>Dónde enviamos tus datos</h2><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Los comentarios de los visitantes puede que los revise un servicio de detección automática de spam.</p>\";s:5:\"added\";i:1639579139;}'),
(119, 23, '_wp_old_date', '2021-12-14'),
(121, 33, '_wp_trash_meta_status', 'publish'),
(122, 33, '_wp_trash_meta_time', '1639581375'),
(123, 34, '_edit_last', '1'),
(124, 34, '_edit_lock', '1639581832:1'),
(125, 37, '_edit_last', '1'),
(126, 37, '_edit_lock', '1639581849:1'),
(127, 39, '_edit_last', '1'),
(128, 39, '_edit_lock', '1639582064:1'),
(129, 43, '_menu_item_type', 'post_type'),
(130, 43, '_menu_item_menu_item_parent', '0'),
(131, 43, '_menu_item_object_id', '34'),
(132, 43, '_menu_item_object', 'page'),
(133, 43, '_menu_item_target', ''),
(134, 43, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(135, 43, '_menu_item_xfn', ''),
(136, 43, '_menu_item_url', ''),
(138, 44, '_menu_item_type', 'post_type'),
(139, 44, '_menu_item_menu_item_parent', '0'),
(140, 44, '_menu_item_object_id', '37'),
(141, 44, '_menu_item_object', 'page'),
(142, 44, '_menu_item_target', ''),
(143, 44, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(144, 44, '_menu_item_xfn', ''),
(145, 44, '_menu_item_url', ''),
(147, 45, '_menu_item_type', 'post_type'),
(148, 45, '_menu_item_menu_item_parent', '0'),
(149, 45, '_menu_item_object_id', '39'),
(150, 45, '_menu_item_object', 'page'),
(151, 45, '_menu_item_target', ''),
(152, 45, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(153, 45, '_menu_item_xfn', ''),
(154, 45, '_menu_item_url', ''),
(156, 46, '_edit_lock', '1639586025:1'),
(157, 46, '_customize_restore_dismissed', '1'),
(158, 47, '_wp_trash_meta_status', 'publish'),
(159, 47, '_wp_trash_meta_time', '1639586065'),
(160, 48, '_edit_lock', '1639586961:1'),
(161, 48, '_wp_trash_meta_status', 'publish'),
(162, 48, '_wp_trash_meta_time', '1639586962'),
(163, 49, '_wp_trash_meta_status', 'publish'),
(164, 49, '_wp_trash_meta_time', '1639590006'),
(165, 51, '_edit_last', '1'),
(166, 51, '_edit_lock', '1639680291:1'),
(169, 53, '_edit_last', '1'),
(170, 53, '_edit_lock', '1639680309:1'),
(173, 55, '_edit_last', '1'),
(174, 55, '_edit_lock', '1639680322:1'),
(177, 57, '_edit_last', '1'),
(178, 57, '_edit_lock', '1639680338:1'),
(181, 59, '_edit_last', '1'),
(182, 59, '_edit_lock', '1639680352:1'),
(185, 61, '_edit_last', '1'),
(186, 61, '_edit_lock', '1640010636:1'),
(189, 63, '_wp_attached_file', '2021/12/866-200x300-1.jpg'),
(190, 63, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:200;s:6:\"height\";i:300;s:4:\"file\";s:25:\"2021/12/866-200x300-1.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:25:\"866-200x300-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(191, 61, '_thumbnail_id', '63');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2021-12-14 20:44:51', '2021-12-14 20:44:51', '<!-- wp:paragraph -->\n<p>Bienvenido a WordPress. Esta es tu primera entrada. Edítala o bórrala, ¡luego empieza a escribir!</p>\n<!-- /wp:paragraph -->', '¡Hola, mundo!', '', 'publish', 'open', 'open', '', 'hola-mundo', '', '', '2021-12-14 20:44:51', '2021-12-14 20:44:51', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=1', 0, 'post', '', 1),
(2, 1, '2021-12-14 20:44:51', '2021-12-14 20:44:51', '<!-- wp:paragraph -->\n<p>Esta es una página de ejemplo. Es diferente a una entrada del blog porque permanecerá en un solo lugar y aparecerá en la navegación de tu sitio (en la mayoría de los temas). La mayoría de las personas comienzan con una página «Acerca de» que les presenta a los visitantes potenciales del sitio. Podrías decir algo así:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>¡Bienvenido! Soy camarero de día, aspirante a actor de noche y esta es mi web. Vivo en Mairena del Alcor, tengo un perro que se llama Firulais y me gusta el rebujito. (Y las tardes largas con café).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>…o algo así:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>La empresa «Mariscos Recio» fue fundada por Antonio Recio Mata. Empezó siendo una pequeña empresa que suministraba marisco a hoteles y restaurantes, pero poco a poco se ha ido transformando en un gran imperio. Mariscos Recio, el mar al mejor precio.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Como nuevo usuario de WordPress, deberías ir a <a href=\"http://127.0.0.1:8080/Proyectos/Mesh4all/wp-admin/\">tu escritorio</a> para borrar esta página y crear nuevas páginas para tu contenido. ¡Pásalo bien!</p>\n<!-- /wp:paragraph -->', 'Página de ejemplo', '', 'publish', 'closed', 'open', '', 'pagina-ejemplo', '', '', '2021-12-14 20:44:51', '2021-12-14 20:44:51', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=2', 0, 'page', '', 0),
(3, 1, '2021-12-14 20:44:51', '2021-12-14 20:44:51', '<!-- wp:heading --><h2>Quiénes somos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>La dirección de nuestra web es: http://127.0.0.1:8080/Proyectos/Mesh4all.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comentarios</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Cuando los visitantes dejan comentarios en la web, recopilamos los datos que se muestran en el formulario de comentarios, así como la dirección IP del visitante y la cadena de agentes de usuario del navegador para ayudar a la detección de spam.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Una cadena anónima creada a partir de tu dirección de correo electrónico (también llamada hash) puede ser proporcionada al servicio de Gravatar para ver si la estás usando. La política de privacidad del servicio Gravatar está disponible aquí: https://automattic.com/privacy/. Después de la aprobación de tu comentario, la imagen de tu perfil es visible para el público en el contexto de tu comentario.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Medios</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si subes imágenes a la web, deberías evitar subir imágenes con datos de ubicación (GPS EXIF) incluidos. Los visitantes de la web pueden descargar y extraer cualquier dato de ubicación de las imágenes de la web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si dejas un comentario en nuestro sitio puedes elegir guardar tu nombre, dirección de correo electrónico y web en cookies. Esto es para tu comodidad, para que no tengas que volver a rellenar tus datos cuando dejes otro comentario. Estas cookies tendrán una duración de un año.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si tienes una cuenta y te conectas a este sitio, instalaremos una cookie temporal para determinar si tu navegador acepta cookies. Esta cookie no contiene datos personales y se elimina al cerrar el navegador.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Cuando accedas, también instalaremos varias cookies para guardar tu información de acceso y tus opciones de visualización de pantalla. Las cookies de acceso duran dos días, y las cookies de opciones de pantalla duran un año. Si seleccionas «Recuérdarme», tu acceso perdurará durante dos semanas. Si sales de tu cuenta, las cookies de acceso se eliminarán.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Si editas o publicas un artículo se guardará una cookie adicional en tu navegador. Esta cookie no incluye datos personales y simplemente indica el ID del artículo que acabas de editar. Caduca después de 1 día.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Contenido incrustado de otros sitios web</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Los artículos de este sitio pueden incluir contenido incrustado (por ejemplo, vídeos, imágenes, artículos, etc.). El contenido incrustado de otras webs se comporta exactamente de la misma manera que si el visitante hubiera visitado la otra web.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Estas web pueden recopilar datos sobre ti, utilizar cookies, incrustar un seguimiento adicional de terceros, y supervisar tu interacción con ese contenido incrustado, incluido el seguimiento de tu interacción con el contenido incrustado si tienes una cuenta y estás conectado a esa web.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Con quién compartimos tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si solicitas un restablecimiento de contraseña, tu dirección IP será incluida en el correo electrónico de restablecimiento.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cuánto tiempo conservamos tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si dejas un comentario, el comentario y sus metadatos se conservan indefinidamente. Esto es para que podamos reconocer y aprobar comentarios sucesivos automáticamente, en lugar de mantenerlos en una cola de moderación.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>De los usuarios que se registran en nuestra web (si los hay), también almacenamos la información personal que proporcionan en su perfil de usuario. Todos los usuarios pueden ver, editar o eliminar su información personal en cualquier momento (excepto que no pueden cambiar su nombre de usuario). Los administradores de la web también pueden ver y editar esa información.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Qué derechos tienes sobre tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Si tienes una cuenta o has dejado comentarios en esta web, puedes solicitar recibir un archivo de exportación de los datos personales que tenemos sobre ti, incluyendo cualquier dato que nos hayas proporcionado. También puedes solicitar que eliminemos cualquier dato personal que tengamos sobre ti. Esto no incluye ningún dato que estemos obligados a conservar con fines administrativos, legales o de seguridad.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Dónde enviamos tus datos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Los comentarios de los visitantes puede que los revise un servicio de detección automática de spam.</p><!-- /wp:paragraph -->', 'Política de privacidad', '', 'draft', 'closed', 'open', '', 'politica-privacidad', '', '', '2021-12-14 20:44:51', '2021-12-14 20:44:51', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=3', 0, 'page', '', 0),
(4, 1, '2021-12-14 20:45:20', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'open', 'open', '', '', '', '', '2021-12-14 20:45:20', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=4', 0, 'post', '', 0),
(5, 1, '2021-12-14 20:49:09', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-12-14 20:49:09', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=5', 0, 'page', '', 0),
(6, 1, '2021-12-14 20:51:36', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-12-14 20:51:36', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=6', 0, 'page', '', 0),
(17, 1, '2021-12-14 20:56:18', '2021-12-14 20:56:18', '{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-14 20:56:18\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'ce69db0e-688c-4cdf-b9a0-4f59a3206bbc', '', '', '2021-12-14 20:56:18', '2021-12-14 20:56:18', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/index.php/2021/12/14/ce69db0e-688c-4cdf-b9a0-4f59a3206bbc/', 0, 'customize_changeset', '', 0),
(18, 1, '2021-12-14 20:56:23', '2021-12-14 20:56:23', '{\n    \"page_on_front\": {\n        \"value\": \"8\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-14 20:56:23\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'e5b91db2-18cd-48b0-9b31-1e3fc62017f4', '', '', '2021-12-14 20:56:23', '2021-12-14 20:56:23', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/index.php/2021/12/14/e5b91db2-18cd-48b0-9b31-1e3fc62017f4/', 0, 'customize_changeset', '', 0),
(19, 1, '2021-12-14 21:00:06', '2021-12-14 21:00:06', ' ', '', '', 'publish', 'closed', 'closed', '', '19', '', '', '2021-12-14 21:00:06', '2021-12-14 21:00:06', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=19', 1, 'nav_menu_item', '', 0),
(20, 1, '2021-12-14 21:00:07', '2021-12-14 21:00:07', ' ', '', '', 'publish', 'closed', 'closed', '', '20', '', '', '2021-12-14 21:00:07', '2021-12-14 21:00:07', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=20', 2, 'nav_menu_item', '', 0),
(21, 1, '2021-12-14 21:11:31', '2021-12-14 21:11:31', '', 'Captura de pantalla de 2021-12-14 17-07-48', '', 'inherit', 'open', 'closed', '', 'captura-de-pantalla-de-2021-12-14-17-07-48', '', '', '2021-12-14 21:11:31', '2021-12-14 21:11:31', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/wp-content/uploads/2021/12/Captura-de-pantalla-de-2021-12-14-17-07-48.png', 0, 'attachment', 'image/png', 0),
(22, 1, '2021-12-14 21:11:41', '2021-12-14 21:11:41', '{\n    \"mesh4all::custom_logo\": {\n        \"value\": 21,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-14 21:11:41\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '95843cb2-aaf0-4dab-9a17-e9e1f65575be', '', '', '2021-12-14 21:11:41', '2021-12-14 21:11:41', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/index.php/2021/12/14/95843cb2-aaf0-4dab-9a17-e9e1f65575be/', 0, 'customize_changeset', '', 0),
(23, 1, '2021-12-15 15:30:46', '2021-12-14 21:25:56', '', 'Inicio', '', 'publish', 'closed', 'closed', '', 'inicio-2', '', '', '2021-12-15 15:30:46', '2021-12-15 15:30:46', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=23', 1, 'nav_menu_item', '', 0),
(25, 1, '2021-12-15 14:08:40', '2021-12-15 14:08:40', '', 'Mesh4allFavico', '', 'inherit', 'open', 'closed', '', 'mesh4allfavico', '', '', '2021-12-15 14:08:40', '2021-12-15 14:08:40', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/wp-content/uploads/2021/12/Mesh4allFavico.png', 0, 'attachment', 'image/png', 0),
(26, 1, '2021-12-15 14:08:52', '2021-12-15 14:08:52', '{\n    \"site_icon\": {\n        \"value\": 25,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-15 14:08:52\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '7e2a3404-3b70-4721-80ee-94054739f496', '', '', '2021-12-15 14:08:52', '2021-12-15 14:08:52', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/7e2a3404-3b70-4721-80ee-94054739f496/', 0, 'customize_changeset', '', 0),
(27, 1, '2021-12-15 14:09:46', '2021-12-15 14:09:46', '{\n    \"blogdescription\": {\n        \"value\": \"\\u00danete a la red Mesh\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-15 14:09:46\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '3ecb6e94-fd65-4cc8-9860-eaf2f56d0243', '', '', '2021-12-15 14:09:46', '2021-12-15 14:09:46', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/3ecb6e94-fd65-4cc8-9860-eaf2f56d0243/', 0, 'customize_changeset', '', 0),
(28, 1, '2021-12-15 14:12:39', '2021-12-15 14:12:39', '{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-15 14:10:50\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '9fda6f46-a935-4cb4-9efb-9934c0cbca20', '', '', '2021-12-15 14:12:39', '2021-12-15 14:12:39', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=28', 0, 'customize_changeset', '', 0),
(29, 1, '2021-12-15 14:23:01', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-12-15 14:23:01', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=29', 0, 'page', '', 0),
(30, 1, '2021-12-15 14:24:25', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-12-15 14:24:25', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=30', 0, 'page', '', 0),
(31, 1, '2021-12-15 14:28:20', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-12-15 14:28:20', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=31', 0, 'page', '', 0),
(33, 1, '2021-12-15 15:16:15', '2021-12-15 15:16:15', '{\n    \"site_icon\": {\n        \"value\": 25,\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-15 15:16:15\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '7d1b5d26-e33d-4650-8902-6010aae902ac', '', '', '2021-12-15 15:16:15', '2021-12-15 15:16:15', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/7d1b5d26-e33d-4650-8902-6010aae902ac/', 0, 'customize_changeset', '', 0),
(34, 1, '2021-12-15 15:25:36', '2021-12-15 15:25:36', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula sapien in ante facilisis, in condimentum eros placerat. Pellentesque non placerat mauris, non convallis orci. Nunc condimentum leo sit amet leo efficitur blandit. Ut sed placerat lectus, sit amet commodo lorem. Fusce varius accumsan nunc sit amet imperdiet. Integer mi augue, aliquam vel pretium maximus, imperdiet sed leo. Morbi finibus ligula sit amet urna egestas tempus. Ut bibendum porttitor mauris, et varius sem semper ac. Nunc tempus lacinia diam, vel congue libero euismod sit amet. Nullam at viverra arcu.\r\n\r\nNunc vitae fermentum turpis. Etiam blandit dui et purus molestie faucibus. Aliquam eleifend pretium laoreet. Pellentesque sit amet bibendum est, eget dapibus lorem. Morbi ut dolor sed enim elementum rhoncus a sed arcu. Integer vel purus eu metus bibendum lobortis. Pellentesque viverra mauris eu elit porta semper. Quisque in nunc non urna sagittis suscipit vehicula quis tellus. Sed auctor faucibus quam, ac egestas ex lobortis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean urna purus, consequat ut leo in, laoreet feugiat ligula. Nulla commodo leo eu sapien porttitor, eget sagittis risus tristique. Nullam vulputate, risus eu gravida pulvinar, tortor massa porta diam, sit amet commodo magna dui nec justo.\r\n\r\nNulla gravida gravida dolor, sit amet euismod nulla aliquam placerat. Cras commodo massa sit amet justo fringilla venenatis. Cras pharetra velit velit, in porttitor est efficitur vel. Curabitur mollis justo sit amet velit facilisis laoreet. In sagittis fermentum ultricies. Donec efficitur efficitur imperdiet. Fusce posuere, magna varius pharetra porttitor, lorem nisl vulputate nunc, eget porta massa lectus et enim. Cras in dolor vel felis pulvinar scelerisque a consectetur ante.', 'NOSOTROS', '', 'publish', 'closed', 'closed', '', 'nosotros', '', '', '2021-12-15 15:25:36', '2021-12-15 15:25:36', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=34', 0, 'page', '', 0),
(35, 1, '2021-12-15 15:25:36', '2021-12-15 15:25:36', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula sapien in ante facilisis, in condimentum eros placerat. Pellentesque non placerat mauris, non convallis orci. Nunc condimentum leo sit amet leo efficitur blandit. Ut sed placerat lectus, sit amet commodo lorem. Fusce varius accumsan nunc sit amet imperdiet. Integer mi augue, aliquam vel pretium maximus, imperdiet sed leo. Morbi finibus ligula sit amet urna egestas tempus. Ut bibendum porttitor mauris, et varius sem semper ac. Nunc tempus lacinia diam, vel congue libero euismod sit amet. Nullam at viverra arcu.\r\n\r\nNunc vitae fermentum turpis. Etiam blandit dui et purus molestie faucibus. Aliquam eleifend pretium laoreet. Pellentesque sit amet bibendum est, eget dapibus lorem. Morbi ut dolor sed enim elementum rhoncus a sed arcu. Integer vel purus eu metus bibendum lobortis. Pellentesque viverra mauris eu elit porta semper. Quisque in nunc non urna sagittis suscipit vehicula quis tellus. Sed auctor faucibus quam, ac egestas ex lobortis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean urna purus, consequat ut leo in, laoreet feugiat ligula. Nulla commodo leo eu sapien porttitor, eget sagittis risus tristique. Nullam vulputate, risus eu gravida pulvinar, tortor massa porta diam, sit amet commodo magna dui nec justo.\r\n\r\nNulla gravida gravida dolor, sit amet euismod nulla aliquam placerat. Cras commodo massa sit amet justo fringilla venenatis. Cras pharetra velit velit, in porttitor est efficitur vel. Curabitur mollis justo sit amet velit facilisis laoreet. In sagittis fermentum ultricies. Donec efficitur efficitur imperdiet. Fusce posuere, magna varius pharetra porttitor, lorem nisl vulputate nunc, eget porta massa lectus et enim. Cras in dolor vel felis pulvinar scelerisque a consectetur ante.', 'NOSOTROS', '', 'inherit', 'closed', 'closed', '', '34-revision-v1', '', '', '2021-12-15 15:25:36', '2021-12-15 15:25:36', '', 34, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=35', 0, 'revision', '', 0),
(36, 1, '2021-12-15 15:26:08', '2021-12-15 15:26:08', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula sapien in ante facilisis, in condimentum eros placerat. Pellentesque non placerat mauris, non convallis orci. Nunc condimentum leo sit amet leo efficitur blandit. Ut sed placerat lectus, sit amet commodo lorem. Fusce varius accumsan nunc sit amet imperdiet. Integer mi augue, aliquam vel pretium maximus, imperdiet sed leo. Morbi finibus ligula sit amet urna egestas tempus. Ut bibendum porttitor mauris, et varius sem semper ac. Nunc tempus lacinia diam, vel congue libero euismod sit amet. Nullam at viverra arcu.\r\n\r\nNunc vitae fermentum turpis. Etiam blandit dui et purus molestie faucibus. Aliquam eleifend pretium laoreet. Pellentesque sit amet bibendum est, eget dapibus lorem. Morbi ut dolor sed enim elementum rhoncus a sed arcu. Integer vel purus eu metus bibendum lobortis. Pellentesque viverra mauris eu elit porta semper. Quisque in nunc non urna sagittis suscipit vehicula quis tellus. Sed auctor faucibus quam, ac egestas ex lobortis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean urna purus, consequat ut leo in, laoreet feugiat ligula. Nulla commodo leo eu sapien porttitor, eget sagittis risus tristique. Nullam vulputate, risus eu gravida pulvinar, tortor massa porta diam, sit amet commodo magna dui nec justo.\r\n\r\nNulla gravida gravida dolor, sit amet euismod nulla aliquam placerat. Cras commodo massa sit amet justo fringilla venenatis. Cras pharetra velit velit, in porttitor est efficitur vel. Curabitur mollis justo sit amet velit facilisis laoreet. In sagittis fermentum ultricies. Donec efficitur efficitur imperdiet. Fusce posuere, magna varius pharetra porttitor, lorem nisl vulputate nunc, eget porta massa lectus et enim. Cras in dolor vel felis pulvinar scelerisque a consectetur ante.', 'NOSOTROS', '', 'inherit', 'closed', 'closed', '', '34-autosave-v1', '', '', '2021-12-15 15:26:08', '2021-12-15 15:26:08', '', 34, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=36', 0, 'revision', '', 0),
(37, 1, '2021-12-15 15:26:31', '2021-12-15 15:26:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula sapien in ante facilisis, in condimentum eros placerat. Pellentesque non placerat mauris, non convallis orci. Nunc condimentum leo sit amet leo efficitur blandit. Ut sed placerat lectus, sit amet commodo lorem. Fusce varius accumsan nunc sit amet imperdiet. Integer mi augue, aliquam vel pretium maximus, imperdiet sed leo. Morbi finibus ligula sit amet urna egestas tempus. Ut bibendum porttitor mauris, et varius sem semper ac. Nunc tempus lacinia diam, vel congue libero euismod sit amet. Nullam at viverra arcu.\r\n\r\nNunc vitae fermentum turpis. Etiam blandit dui et purus molestie faucibus. Aliquam eleifend pretium laoreet. Pellentesque sit amet bibendum est, eget dapibus lorem. Morbi ut dolor sed enim elementum rhoncus a sed arcu. Integer vel purus eu metus bibendum lobortis. Pellentesque viverra mauris eu elit porta semper. Quisque in nunc non urna sagittis suscipit vehicula quis tellus. Sed auctor faucibus quam, ac egestas ex lobortis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean urna purus, consequat ut leo in, laoreet feugiat ligula. Nulla commodo leo eu sapien porttitor, eget sagittis risus tristique. Nullam vulputate, risus eu gravida pulvinar, tortor massa porta diam, sit amet commodo magna dui nec justo.\r\n\r\nNulla gravida gravida dolor, sit amet euismod nulla aliquam placerat. Cras commodo massa sit amet justo fringilla venenatis. Cras pharetra velit velit, in porttitor est efficitur vel. Curabitur mollis justo sit amet velit facilisis laoreet. In sagittis fermentum ultricies. Donec efficitur efficitur imperdiet. Fusce posuere, magna varius pharetra porttitor, lorem nisl vulputate nunc, eget porta massa lectus et enim. Cras in dolor vel felis pulvinar scelerisque a consectetur ante.', 'SERVICIOS', '', 'publish', 'closed', 'closed', '', 'servicios', '', '', '2021-12-15 15:26:31', '2021-12-15 15:26:31', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=37', 0, 'page', '', 0),
(38, 1, '2021-12-15 15:26:31', '2021-12-15 15:26:31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula sapien in ante facilisis, in condimentum eros placerat. Pellentesque non placerat mauris, non convallis orci. Nunc condimentum leo sit amet leo efficitur blandit. Ut sed placerat lectus, sit amet commodo lorem. Fusce varius accumsan nunc sit amet imperdiet. Integer mi augue, aliquam vel pretium maximus, imperdiet sed leo. Morbi finibus ligula sit amet urna egestas tempus. Ut bibendum porttitor mauris, et varius sem semper ac. Nunc tempus lacinia diam, vel congue libero euismod sit amet. Nullam at viverra arcu.\r\n\r\nNunc vitae fermentum turpis. Etiam blandit dui et purus molestie faucibus. Aliquam eleifend pretium laoreet. Pellentesque sit amet bibendum est, eget dapibus lorem. Morbi ut dolor sed enim elementum rhoncus a sed arcu. Integer vel purus eu metus bibendum lobortis. Pellentesque viverra mauris eu elit porta semper. Quisque in nunc non urna sagittis suscipit vehicula quis tellus. Sed auctor faucibus quam, ac egestas ex lobortis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean urna purus, consequat ut leo in, laoreet feugiat ligula. Nulla commodo leo eu sapien porttitor, eget sagittis risus tristique. Nullam vulputate, risus eu gravida pulvinar, tortor massa porta diam, sit amet commodo magna dui nec justo.\r\n\r\nNulla gravida gravida dolor, sit amet euismod nulla aliquam placerat. Cras commodo massa sit amet justo fringilla venenatis. Cras pharetra velit velit, in porttitor est efficitur vel. Curabitur mollis justo sit amet velit facilisis laoreet. In sagittis fermentum ultricies. Donec efficitur efficitur imperdiet. Fusce posuere, magna varius pharetra porttitor, lorem nisl vulputate nunc, eget porta massa lectus et enim. Cras in dolor vel felis pulvinar scelerisque a consectetur ante.', 'SERVICIOS', '', 'inherit', 'closed', 'closed', '', '37-revision-v1', '', '', '2021-12-15 15:26:31', '2021-12-15 15:26:31', '', 37, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=38', 0, 'revision', '', 0),
(39, 1, '2021-12-15 15:26:43', '2021-12-15 15:26:43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula sapien in ante facilisis, in condimentum eros placerat. Pellentesque non placerat mauris, non convallis orci. Nunc condimentum leo sit amet leo efficitur blandit. Ut sed placerat lectus, sit amet commodo lorem. Fusce varius accumsan nunc sit amet imperdiet. Integer mi augue, aliquam vel pretium maximus, imperdiet sed leo. Morbi finibus ligula sit amet urna egestas tempus. Ut bibendum porttitor mauris, et varius sem semper ac. Nunc tempus lacinia diam, vel congue libero euismod sit amet. Nullam at viverra arcu.\r\n\r\nNunc vitae fermentum turpis. Etiam blandit dui et purus molestie faucibus. Aliquam eleifend pretium laoreet. Pellentesque sit amet bibendum est, eget dapibus lorem. Morbi ut dolor sed enim elementum rhoncus a sed arcu. Integer vel purus eu metus bibendum lobortis. Pellentesque viverra mauris eu elit porta semper. Quisque in nunc non urna sagittis suscipit vehicula quis tellus. Sed auctor faucibus quam, ac egestas ex lobortis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean urna purus, consequat ut leo in, laoreet feugiat ligula. Nulla commodo leo eu sapien porttitor, eget sagittis risus tristique. Nullam vulputate, risus eu gravida pulvinar, tortor massa porta diam, sit amet commodo magna dui nec justo.\r\n\r\nNulla gravida gravida dolor, sit amet euismod nulla aliquam placerat. Cras commodo massa sit amet justo fringilla venenatis. Cras pharetra velit velit, in porttitor est efficitur vel. Curabitur mollis justo sit amet velit facilisis laoreet. In sagittis fermentum ultricies. Donec efficitur efficitur imperdiet. Fusce posuere, magna varius pharetra porttitor, lorem nisl vulputate nunc, eget porta massa lectus et enim. Cras in dolor vel felis pulvinar scelerisque a consectetur ante.', 'OPEN SOURCE', '', 'publish', 'closed', 'closed', '', 'open-source', '', '', '2021-12-15 15:26:43', '2021-12-15 15:26:43', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=39', 0, 'page', '', 0),
(40, 1, '2021-12-15 15:26:43', '2021-12-15 15:26:43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula sapien in ante facilisis, in condimentum eros placerat. Pellentesque non placerat mauris, non convallis orci. Nunc condimentum leo sit amet leo efficitur blandit. Ut sed placerat lectus, sit amet commodo lorem. Fusce varius accumsan nunc sit amet imperdiet. Integer mi augue, aliquam vel pretium maximus, imperdiet sed leo. Morbi finibus ligula sit amet urna egestas tempus. Ut bibendum porttitor mauris, et varius sem semper ac. Nunc tempus lacinia diam, vel congue libero euismod sit amet. Nullam at viverra arcu.\r\n\r\nNunc vitae fermentum turpis. Etiam blandit dui et purus molestie faucibus. Aliquam eleifend pretium laoreet. Pellentesque sit amet bibendum est, eget dapibus lorem. Morbi ut dolor sed enim elementum rhoncus a sed arcu. Integer vel purus eu metus bibendum lobortis. Pellentesque viverra mauris eu elit porta semper. Quisque in nunc non urna sagittis suscipit vehicula quis tellus. Sed auctor faucibus quam, ac egestas ex lobortis vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean urna purus, consequat ut leo in, laoreet feugiat ligula. Nulla commodo leo eu sapien porttitor, eget sagittis risus tristique. Nullam vulputate, risus eu gravida pulvinar, tortor massa porta diam, sit amet commodo magna dui nec justo.\r\n\r\nNulla gravida gravida dolor, sit amet euismod nulla aliquam placerat. Cras commodo massa sit amet justo fringilla venenatis. Cras pharetra velit velit, in porttitor est efficitur vel. Curabitur mollis justo sit amet velit facilisis laoreet. In sagittis fermentum ultricies. Donec efficitur efficitur imperdiet. Fusce posuere, magna varius pharetra porttitor, lorem nisl vulputate nunc, eget porta massa lectus et enim. Cras in dolor vel felis pulvinar scelerisque a consectetur ante.', 'OPEN SOURCE', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2021-12-15 15:26:43', '2021-12-15 15:26:43', '', 39, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=40', 0, 'revision', '', 0),
(43, 1, '2021-12-15 15:30:46', '2021-12-15 15:30:46', ' ', '', '', 'publish', 'closed', 'closed', '', '43', '', '', '2021-12-15 15:30:46', '2021-12-15 15:30:46', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=43', 2, 'nav_menu_item', '', 0),
(44, 1, '2021-12-15 15:30:46', '2021-12-15 15:30:46', ' ', '', '', 'publish', 'closed', 'closed', '', '44', '', '', '2021-12-15 15:30:46', '2021-12-15 15:30:46', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=44', 3, 'nav_menu_item', '', 0),
(45, 1, '2021-12-15 15:30:46', '2021-12-15 15:30:46', ' ', '', '', 'publish', 'closed', 'closed', '', '45', '', '', '2021-12-15 15:30:46', '2021-12-15 15:30:46', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=45', 4, 'nav_menu_item', '', 0),
(46, 1, '2021-12-15 16:33:45', '0000-00-00 00:00:00', '[]', '', '', 'auto-draft', 'closed', 'closed', '', '290450f2-3328-45d9-b62d-a8ce6dec8424', '', '', '2021-12-15 16:33:45', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=46', 0, 'customize_changeset', '', 0),
(47, 1, '2021-12-15 16:34:25', '2021-12-15 16:34:25', '{\n    \"home-t\\u00edtulo\": {\n        \"value\": \"\\u00danete a la red Mesh\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-15 16:34:25\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'f979805e-e4d6-4cc3-9746-a791ccc2bbe5', '', '', '2021-12-15 16:34:25', '2021-12-15 16:34:25', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/f979805e-e4d6-4cc3-9746-a791ccc2bbe5/', 0, 'customize_changeset', '', 0),
(48, 1, '2021-12-15 16:49:22', '2021-12-15 16:49:22', '{\n    \"txt-btn\": {\n        \"value\": \"Ver m\\u00e1s\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-15 16:45:45\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'ee70c9db-5643-45c8-a12c-eab0b3b10610', '', '', '2021-12-15 16:49:22', '2021-12-15 16:49:22', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=48', 0, 'customize_changeset', '', 0),
(49, 1, '2021-12-15 17:40:05', '2021-12-15 17:40:05', '{\n    \"url-btn\": {\n        \"value\": \"http://127.0.0.1:8080/Proyectos/Mesh4all/nosotros/\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2021-12-15 17:40:05\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '05ef23b4-303c-490b-bcd0-38bd2cbbdf74', '', '', '2021-12-15 17:40:05', '2021-12-15 17:40:05', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/05ef23b4-303c-490b-bcd0-38bd2cbbdf74/', 0, 'customize_changeset', '', 0),
(50, 1, '2021-12-16 18:45:57', '0000-00-00 00:00:00', '', 'Borrador automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2021-12-16 18:45:57', '0000-00-00 00:00:00', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?page_id=50', 0, 'page', '', 0),
(51, 1, '2021-12-16 18:47:12', '2021-12-16 18:47:12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'Comms', '', 'publish', 'open', 'open', '', 'comms', '', '', '2021-12-16 18:47:12', '2021-12-16 18:47:12', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=51', 0, 'post', '', 0),
(52, 1, '2021-12-16 18:47:12', '2021-12-16 18:47:12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'Comms', '', 'inherit', 'closed', 'closed', '', '51-revision-v1', '', '', '2021-12-16 18:47:12', '2021-12-16 18:47:12', '', 51, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=52', 0, 'revision', '', 0),
(53, 1, '2021-12-16 18:47:30', '2021-12-16 18:47:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'IOT', '', 'publish', 'open', 'open', '', 'iot', '', '', '2021-12-16 18:47:30', '2021-12-16 18:47:30', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=53', 0, 'post', '', 0),
(54, 1, '2021-12-16 18:47:30', '2021-12-16 18:47:30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'IOT', '', 'inherit', 'closed', 'closed', '', '53-revision-v1', '', '', '2021-12-16 18:47:30', '2021-12-16 18:47:30', '', 53, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=54', 0, 'revision', '', 0),
(55, 1, '2021-12-16 18:47:43', '2021-12-16 18:47:43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'PAY', '', 'publish', 'open', 'open', '', 'pay', '', '', '2021-12-16 18:47:43', '2021-12-16 18:47:43', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=55', 0, 'post', '', 0),
(56, 1, '2021-12-16 18:47:43', '2021-12-16 18:47:43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'PAY', '', 'inherit', 'closed', 'closed', '', '55-revision-v1', '', '', '2021-12-16 18:47:43', '2021-12-16 18:47:43', '', 55, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=56', 0, 'revision', '', 0),
(57, 1, '2021-12-16 18:47:58', '2021-12-16 18:47:58', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'AG', '', 'publish', 'open', 'open', '', 'ag', '', '', '2021-12-16 18:47:58', '2021-12-16 18:47:58', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=57', 0, 'post', '', 0),
(58, 1, '2021-12-16 18:47:58', '2021-12-16 18:47:58', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'AG', '', 'inherit', 'closed', 'closed', '', '57-revision-v1', '', '', '2021-12-16 18:47:58', '2021-12-16 18:47:58', '', 57, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=58', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(59, 1, '2021-12-16 18:48:12', '2021-12-16 18:48:12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'CITY', '', 'publish', 'open', 'open', '', 'city', '', '', '2021-12-16 18:48:12', '2021-12-16 18:48:12', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=59', 0, 'post', '', 0),
(60, 1, '2021-12-16 18:48:12', '2021-12-16 18:48:12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'CITY', '', 'inherit', 'closed', 'closed', '', '59-revision-v1', '', '', '2021-12-16 18:48:12', '2021-12-16 18:48:12', '', 59, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=60', 0, 'revision', '', 0),
(61, 1, '2021-12-16 18:48:29', '2021-12-16 18:48:29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'HARDWARE', '', 'publish', 'open', 'open', '', 'hardware', '', '', '2021-12-17 15:43:08', '2021-12-17 15:43:08', '', 0, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=61', 0, 'post', '', 0),
(62, 1, '2021-12-16 18:48:29', '2021-12-16 18:48:29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur sapien purus, ac dapibus elit tincidunt id. Duis tortor nunc, ullamcorper at elit non, aliquet faucibus ipsum. Proin scelerisque bibendum libero, a accumsan orci faucibus et. Donec suscipit metus non eros posuere pharetra in vel metus. Aenean molestie, enim et consequat viverra, arcu turpis suscipit est, et ultricies sapien mi ac libero. Aenean molestie, arcu quis molestie mollis, est ex tristique nunc, quis interdum purus arcu at leo. Fusce et egestas libero, nec auctor odio. Praesent ac justo odio. Morbi viverra metus a diam pulvinar, sed volutpat mi suscipit. Integer enim nisl, sodales nec scelerisque a, vestibulum in metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis convallis sagittis.\r\n\r\nSuspendisse sit amet pellentesque tellus, nec congue massa. Morbi nec varius metus, ac sagittis elit. Maecenas urna diam, commodo bibendum condimentum nec, sollicitudin et leo. Nulla gravida suscipit consequat. Nullam interdum molestie turpis. Proin porttitor felis eros, vitae consectetur est ullamcorper semper. Duis luctus sollicitudin tortor, ut laoreet sapien bibendum non.\r\n\r\nAliquam ultrices diam sollicitudin, eleifend justo sed, finibus felis. Praesent finibus, metus vitae vestibulum tincidunt, augue tellus pulvinar felis, eget consectetur enim augue at velit. Nulla non vulputate augue. In et felis a risus egestas aliquet. Curabitur at lorem at odio ultrices lobortis nec vel dui. Maecenas nec nisl non lacus sagittis cursus. In enim risus, commodo at eros in, dignissim feugiat libero. Donec at condimentum mi. Fusce vulputate ex ac erat lobortis volutpat. Nam ultricies, sapien ac pellentesque commodo, justo nisl luctus nibh, eu pulvinar mi metus quis lorem. Sed molestie at risus sit amet vestibulum. Aenean id nibh eget velit luctus tempus nec et felis. Vivamus et felis quis urna elementum dignissim et vel velit.', 'HARDWARE', '', 'inherit', 'closed', 'closed', '', '61-revision-v1', '', '', '2021-12-16 18:48:29', '2021-12-16 18:48:29', '', 61, 'http://127.0.0.1:8080/Proyectos/Mesh4all/?p=62', 0, 'revision', '', 0),
(63, 1, '2021-12-17 15:42:47', '2021-12-17 15:42:47', '', '866-200x300', '', 'inherit', 'open', 'closed', '', '866-200x300', '', '', '2021-12-17 15:42:47', '2021-12-17 15:42:47', '', 61, 'http://127.0.0.1:8080/Proyectos/Mesh4all/wp-content/uploads/2021/12/866-200x300-1.jpg', 0, 'attachment', 'image/jpeg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Sin categoría', 'sin-categoria', 0),
(2, 'Header', 'header', 0),
(3, 'Footer', 'footer', 0),
(4, 'servicios-home', 'servicios-home', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(19, 3, 0),
(20, 3, 0),
(23, 2, 0),
(43, 2, 0),
(44, 2, 0),
(45, 2, 0),
(51, 4, 0),
(53, 4, 0),
(55, 4, 0),
(57, 4, 0),
(59, 4, 0),
(61, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 4),
(3, 3, 'nav_menu', '', 0, 2),
(4, 4, 'category', 'Slider que se encuentra en el home, con los post relacionados a los servicios', 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'keepin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:2:{s:64:\"a7a404b6379fe276062de75b9c4d4b3f6651967ae6d042d725e0da8eeef683ca\";a:4:{s:10:\"expiration\";i:1640724318;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:104:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36\";s:5:\"login\";i:1639514718;}s:64:\"0d73e2ade9f78abf5a87baa8039a99682b3e84d7768fbd10a1d2d37409be9ac3\";a:4:{s:10:\"expiration\";i:1640182509;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:104:\"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36\";s:5:\"login\";i:1640009709;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(19, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(20, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(21, 1, 'nav_menu_recently_edited', '3'),
(22, 1, 'wp_user-settings', 'libraryContent=browse'),
(23, 1, 'wp_user-settings-time', '1639516091'),
(24, 1, 'closedpostboxes_dashboard', 'a:5:{i:0;s:21:\"dashboard_site_health\";i:1;s:19:\"dashboard_right_now\";i:2;s:18:\"dashboard_activity\";i:3;s:21:\"dashboard_quick_press\";i:4;s:17:\"dashboard_primary\";}'),
(25, 1, 'metaboxhidden_dashboard', 'a:0:{}'),
(26, 1, 'closedpostboxes_page', 'a:0:{}'),
(27, 1, 'metaboxhidden_page', 'a:4:{i:0;s:10:\"postcustom\";i:1;s:16:\"commentstatusdiv\";i:2;s:7:\"slugdiv\";i:3;s:9:\"authordiv\";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'keepin', '$P$Bv.BuHMC/h7p/NuEYfi4dqYq1.RyVA1', 'keepin', 'kmestizo@gmail.com', 'http://127.0.0.1:8080/Proyectos/Mesh4all', '2021-12-14 20:44:50', '', 0, 'keepin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indices de la tabla `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indices de la tabla `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indices de la tabla `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indices de la tabla `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indices de la tabla `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indices de la tabla `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indices de la tabla `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indices de la tabla `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT de la tabla `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT de la tabla `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
