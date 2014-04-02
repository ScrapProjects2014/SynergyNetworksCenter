-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2014 at 08:36 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snc_dev`
--
CREATE DATABASE IF NOT EXISTS `snc_dev` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `snc_dev`;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `company` text NOT NULL,
  `website` text NOT NULL,
  `date_added` date NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `profile_fields` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `company`, `website`, `date_added`, `created_at`, `updated_at`, `profile_fields`) VALUES
(1, 'HB Granite', 'hbgranite.com', '0000-00-00', 1391718140, 1391718140, ''),
(2, 'DryOutAK', 'dryoutak.com', '0000-00-00', 1391718170, 1391718170, ''),
(3, 'Rolling Shield', 'rollingshield.com', '0000-00-00', 1392059661, 1392059661, ''),
(4, 'Synergy Networks', 'snworks.com', '0000-00-00', 1392155081, 1392155081, ''),
(5, 'Synergy Networks Web DM', 'snwebdm.com', '0000-00-00', 1392155111, 1392155111, ''),
(6, 'Bonita Laser Centers', 'bonitalasercenters.com', '0000-00-00', 1393347211, 1393347211, '');

-- --------------------------------------------------------

--
-- Table structure for table `clientscontacts`
--

DROP TABLE IF EXISTS `clientscontacts`;
CREATE TABLE IF NOT EXISTS `clientscontacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `phone`, `email`, `modified_date`, `modified_by`, `created_at`, `updated_at`, `client_id`, `user_id`, `client`) VALUES
(1, 'Peter', 'Seif', '239-671-8744', 'pseif@snwebdm.com', '0000-00-00 00:00:00', 'jmoakley', 1392155012, 2014, 4, 0, 0),
(2, 'Ed', 'Trimner', '(239) 437-9937', 'ed@trimcraftstairs.com', '0000-00-00 00:00:00', 'jmoakley', 2014, 2014, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `left_id` int(11) unsigned NOT NULL,
  `right_id` int(11) unsigned NOT NULL,
  `tree_id` int(11) unsigned NOT NULL,
  `name` varchar(252) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `fields` text,
  PRIMARY KEY (`id`),
  KEY `left_id` (`left_id`),
  KEY `right_id` (`right_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu_meta`
--

DROP TABLE IF EXISTS `menu_meta`;
CREATE TABLE IF NOT EXISTS `menu_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `key` text NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_users'),
('app', 'default', '002_create_posts'),
('app', 'default', '003_create_clients'),
('app', 'default', '004_add_profile_fields_to_clients'),
('app', 'default', '005_add_phone_to_users'),
('app', 'default', '006_create_contacts'),
('app', 'default', '007_rename_field_site_to_company_in_clients'),
('app', 'default', '008_rename_field_web_address_to_website_in_clients'),
('app', 'default', '009_create_clientscontacts'),
('app', 'default', '010_create_projects'),
('app', 'default', '011_add_field_to_contacts'),
('app', 'default', '012_rename_field_client_to_client_id_in_contacts'),
('app', 'default', '013_create_staffs'),
('app', 'default', '001_create_users'),
('app', 'default', '002_create_posts'),
('app', 'default', '003_create_clients'),
('app', 'default', '004_add_profile_fields_to_clients'),
('app', 'default', '005_add_phone_to_users'),
('app', 'default', '006_create_contacts'),
('app', 'default', '007_add_fields_to_contacts'),
('app', 'default', '007_rename_field_site_to_company_in_clients'),
('app', 'default', '008_rename_field_web_address_to_website_in_clients'),
('app', 'default', '009_create_clientscontacts'),
('app', 'default', '010_create_projects'),
('app', 'default', '011_add_field_to_contacts'),
('package', 'menu', '001_create_menu'),
('package', 'auth', '001_auth_create_usertables'),
('package', 'auth', '002_auth_create_grouptables'),
('package', 'auth', '003_auth_create_roletables'),
('package', 'auth', '004_auth_create_permissiontables'),
('package', 'auth', '005_auth_create_authdefaults'),
('package', 'auth', '006_auth_add_authactions'),
('package', 'auth', '007_auth_add_permissionsfilter'),
('package', 'auth', '008_auth_create_providers'),
('package', 'auth', '009_auth_create_oauth2tables'),
('package', 'auth', '010_auth_fix_jointables');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `summary`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Test Post', 'Test Post', 'Testing out the post part. ', 'Testing to see if this is functional.', 2, 1391014254, 1391026664);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `client` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `live` varchar(255) DEFAULT NULL,
  `testing` varchar(255) DEFAULT NULL,
  `notes` text,
  `developer` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `job_type`, `client`, `status`, `progress`, `live`, `testing`, `notes`, `developer`, `created_at`, `updated_at`) VALUES
(1, 'Synergy Data-Center Banner Ad', 'Ad Creation', NULL, 'In Progress', 50, 'none', 'test.snworks.com/ads/synergy-data-center-banner.html', 'ad creation for new snworks.com', 'Cassia', 1394133313, 1394133313),
(2, 'Synergy Networks Center', 'Application Development', NULL, 'In Progress', 45, 'none', 'none', 'build for internal use', 'Jenna', 1394133974, 1394133974);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `personal_email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cell_phone` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `first`, `last`, `email`, `personal_email`, `phone`, `cell_phone`, `profile_fields`, `user`, `created_at`, `updated_at`) VALUES
(1, 'Peter', 'Seif', 'pseif@snworks.com', 'none@email.com', '239-790-7000 ext.231', '239-871-8766', 'Owner of Synergy Networks', 1, 1393652878, 1393652878),
(2, 'Jenna', 'Moakley', 'jmoakley@snworks.com', 'moakdesigns@gmail.com', '239-790-7000 ext.221', '239-257-7098', 'Internet Marketing Specialist\r\nWeb Programmer\r\nSEO Specialist', 0, 1393652959, 1393652959),
(3, 'Raul', 'Rodriguez', 'rrodriguez@snworks.com', 'enigmamaster1234@gmail.com', '2398226713', '2398226713', 'web programmer', 0, 1393653074, 1393653074),
(4, 'Lora', 'Nilsson', 'lnilsson@snworks.com', 'p@mail.com', '239-790-7000 ext.', '236985623', 'Web Developer Supervisor', 0, 1393653152, 1393653152);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'admin', 'NtgTF8q6Z9UyyUwQS7Ma5Bvj+uTrK/F66iMji9su1XY=', 100, 'admin@snworks.com', 1394129328, '9d75ae8f4a5c905acd6137ed3ed22b40cd2ffb1b', '', 1390939302, 2014, ''),
(2, 'jmoakley', 'KHDa2QBLh7/ww1TTrAFdIRkSI7uc7Ndhq5eSsD4Vg8Q=', 100, 'jmoakley@snworks.com', 1393516760, '5e5e5e155975333eed184d89075f92b79e433ed8', '', 1391014534, 1393516668, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_clients`
--

DROP TABLE IF EXISTS `users_clients`;
CREATE TABLE IF NOT EXISTS `users_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT '0',
  `autonomous` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `notes` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_providers`
--

DROP TABLE IF EXISTS `users_providers`;
CREATE TABLE IF NOT EXISTS `users_providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_scopes`
--

DROP TABLE IF EXISTS `users_scopes`;
CREATE TABLE IF NOT EXISTS `users_scopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_sessions`
--

DROP TABLE IF EXISTS `users_sessions`;
CREATE TABLE IF NOT EXISTS `users_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oauth_sessions_ibfk_1` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_sessionscopes`
--

DROP TABLE IF EXISTS `users_sessionscopes`;
CREATE TABLE IF NOT EXISTS `users_sessionscopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`),
  KEY `access_token` (`access_token`),
  KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE;

--
-- Constraints for table `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  ADD CONSTRAINT `users_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
