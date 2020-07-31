-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 юли 2020 в 22:32
-- Версия на сървъра: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hermes`
--

-- --------------------------------------------------------

--
-- Структура на таблица `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `team` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `admin`
--

INSERT INTO `admin` (`id`, `user`, `team`) VALUES
(1, 4, 1),
(2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `country` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `city`
--

INSERT INTO `city` (`id`, `country`, `name`) VALUES
(1, 1, 'Razgrad'),
(2, 1, 'Shumen'),
(3, 1, 'Plovdiv'),
(4, 1, 'Sofiq');

-- --------------------------------------------------------

--
-- Структура на таблица `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `youth_team` int(11) DEFAULT NULL,
  `team` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `birthDay` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `teamPosition` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `coach`
--

INSERT INTO `coach` (`id`, `youth_team`, `team`, `user`, `birthDay`, `image`, `status`, `teamPosition`) VALUES
(1, NULL, 1, 2, '1985-12-04', '9ae5a66995462a29a3bf010d5378748f5eb1130124f44.png', NULL, 1),
(2, NULL, NULL, 25, NULL, 'Pep_Guardiola_april_2019.jpg', NULL, 1),
(3, NULL, NULL, 26, '0000-00-00', 'jose.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `coachtoplayerrequests`
--

CREATE TABLE `coachtoplayerrequests` (
  `id` int(11) NOT NULL,
  `coaches` int(11) DEFAULT NULL,
  `players` int(11) DEFAULT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `coach_position`
--

CREATE TABLE `coach_position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `coach_position`
--

INSERT INTO `coach_position` (`id`, `name`) VALUES
(1, 'HEAD_COACH');

-- --------------------------------------------------------

--
-- Структура на таблица `coach_to_team_request`
--

CREATE TABLE `coach_to_team_request` (
  `id` int(11) NOT NULL,
  `coaches` int(11) DEFAULT NULL,
  `teams` int(11) DEFAULT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `country`
--

INSERT INTO `country` (`id`, `name`, `image`) VALUES
(1, 'Bulgaria', 'bulgaria.png');

-- --------------------------------------------------------

--
-- Структура на таблица `cup`
--

CREATE TABLE `cup` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `devision_request`
--

CREATE TABLE `devision_request` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `country` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `division`
--

INSERT INTO `division` (`id`, `country`, `name`, `image`) VALUES
(1, 1, 'Efbet', 'LaLiga.png');

-- --------------------------------------------------------

--
-- Структура на таблица `division_request`
--

CREATE TABLE `division_request` (
  `id` int(11) NOT NULL,
  `division` int(11) DEFAULT NULL,
  `team` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `division_request`
--

INSERT INTO `division_request` (`id`, `division`, `team`, `type`) VALUES
(4, 1, 1, 'team-division'),
(5, 1, 1, 'division-team');

-- --------------------------------------------------------

--
-- Структура на таблица `division_to_team_request`
--

CREATE TABLE `division_to_team_request` (
  `id` int(11) NOT NULL,
  `divisions` int(11) DEFAULT NULL,
  `teams` int(11) DEFAULT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL,
  `intensityType` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `exercises`
--

INSERT INTO `exercises` (`id`, `intensityType`, `name`, `description`, `image`) VALUES
(1, 1, 'Warm up ', 'Move your hands around your body ', NULL),
(2, 2, 'Ball control', 'Run with ball in small circle ', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `injured_users`
--

CREATE TABLE `injured_users` (
  `id` int(11) NOT NULL,
  `users` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicaments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startTreatment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endTreatment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `intensity_type`
--

CREATE TABLE `intensity_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `intensity_type`
--

INSERT INTO `intensity_type` (`id`, `type`) VALUES
(1, 'Easy'),
(2, 'Medium\r\n'),
(3, 'Hard');

-- --------------------------------------------------------

--
-- Структура на таблица `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeTeam` int(11) DEFAULT NULL,
  `awayTeam` int(11) DEFAULT NULL,
  `division` int(11) DEFAULT NULL,
  `Is_played` tinyint(1) DEFAULT NULL,
  `is_dalayed` tinyint(1) DEFAULT NULL,
  `is_friendly` tinyint(1) DEFAULT NULL,
  `is_canceled` tinyint(1) DEFAULT NULL,
  `matchStats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `matches`
--

INSERT INTO `matches` (`id`, `date`, `time`, `homeTeam`, `awayTeam`, `division`, `Is_played`, `is_dalayed`, `is_friendly`, `is_canceled`, `matchStats`) VALUES
(1, '2020-03-03', '15:30', 1, 2, 1, 0, 0, 0, 0, 1),
(2, '2020-03-03', '15:03', 2, 1, 1, 0, 0, 0, 0, 2),
(3, '2020-05-25', '12:22', 1, 2, 1, 0, 0, 0, 0, 3),
(4, '2020-06-06', '00:41', 4, 5, 1, NULL, NULL, NULL, 1, NULL),
(5, '2020-06-10', '01:20', 3, 1, 1, NULL, NULL, NULL, NULL, 5),
(7, '2020-06-25', '', 1, 5, 1, NULL, NULL, NULL, NULL, 4),
(8, '2020-06-26', '23:30', 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(9, '2020-06-28', '11:00', 1, 3, 1, NULL, NULL, NULL, NULL, NULL),
(10, '2020-06-29', '21:15', 1, 7, 1, NULL, NULL, NULL, NULL, NULL),
(11, '2020-06-28', '00:00', 5, 6, 1, NULL, NULL, NULL, NULL, NULL),
(12, '2020-06-29', '00:00', 7, 6, 1, NULL, NULL, NULL, NULL, NULL),
(13, '2020-06-29', '00:00', 1, 6, 1, NULL, NULL, NULL, NULL, NULL),
(14, '2020-06-29', '00:00', 6, 3, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `match_list`
--

CREATE TABLE `match_list` (
  `id` int(11) NOT NULL,
  `matches` int(11) DEFAULT NULL,
  `player` int(11) DEFAULT NULL,
  `is_starting` tinyint(1) DEFAULT NULL,
  `is_played` tinyint(1) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `assits` int(11) DEFAULT NULL,
  `saves` int(11) DEFAULT NULL,
  `played_time` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `match_list`
--

INSERT INTO `match_list` (`id`, `matches`, `player`, `is_starting`, `is_played`, `goals`, `assits`, `saves`, `played_time`, `start_time`, `end_time`) VALUES
(1, 3, 1, 1, 0, 4, 0, 0, 0, 0, 81),
(2, 3, 11, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 9, 0, 0, 0, 0, 0, 0, 0, 0),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 3, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 3, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 3, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 3, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 3, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 3, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 3, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 3, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 3, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 3, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 3, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 3, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 3, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 5, 2, 1, NULL, 0, 0, 0, NULL, 0, 90),
(31, 5, 3, 0, NULL, 0, 0, 0, NULL, 70, 90),
(32, 5, 5, 1, NULL, 1, 0, 0, NULL, 0, 90),
(33, 5, 6, 1, NULL, 1, 0, 0, NULL, 0, 70),
(34, 5, 7, 1, NULL, 0, 2, 0, NULL, 0, 90),
(35, 5, 8, 1, NULL, 0, 0, 0, NULL, 0, 90),
(36, 5, 9, 1, NULL, 0, 0, 0, NULL, 0, 90),
(37, 5, 10, 1, NULL, 0, 0, 0, NULL, 0, 90),
(38, 5, 11, 1, NULL, 0, 0, 0, NULL, 0, 90),
(39, 7, 1, 1, NULL, 1, 1, 0, NULL, 0, 1),
(40, 7, 2, 0, NULL, 0, 0, 0, NULL, 1, 90),
(41, 7, 5, 0, NULL, 0, 0, 0, NULL, 0, 0),
(42, 7, 6, 0, NULL, 0, 0, 0, NULL, 0, 0),
(43, 7, 7, 1, NULL, 1, 1, 0, NULL, 0, 1),
(44, 7, 8, 1, NULL, 0, 0, 0, NULL, 0, 90),
(45, 7, 9, 1, NULL, 0, 0, 0, NULL, 0, 1),
(46, 7, 10, 1, NULL, 0, 0, 0, NULL, 0, 1),
(47, 7, 11, 1, NULL, 0, 0, 0, NULL, 0, 1),
(48, 7, 12, 1, NULL, 0, 0, 0, NULL, 0, 1),
(49, 9, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 9, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 9, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 9, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 9, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 9, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 9, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 9, 9, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 9, 10, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 9, 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 9, 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 10, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 10, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 10, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 10, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 10, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 10, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 10, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 10, 9, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 10, 10, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 10, 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 10, 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 13, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 13, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 13, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 13, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 13, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 13, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 13, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 13, 9, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 13, 10, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 13, 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 13, 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `match_scheme`
--

CREATE TABLE `match_scheme` (
  `match` int(11) NOT NULL,
  `scheme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `match_stats`
--

CREATE TABLE `match_stats` (
  `id` int(11) NOT NULL,
  `home_team_goals` int(11) DEFAULT NULL,
  `away_team_goals` int(11) DEFAULT NULL,
  `is_played` tinyint(1) DEFAULT NULL,
  `matches` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `match_stats`
--

INSERT INTO `match_stats` (`id`, `home_team_goals`, `away_team_goals`, `is_played`, `matches`) VALUES
(1, 2, 3, 1, 1),
(2, 2, 3, 1, 2),
(3, 4, 0, 1, 3),
(4, 2, 0, 1, 7),
(5, 2, 0, 1, 5);

-- --------------------------------------------------------

--
-- Структура на таблица `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191211125152', '2020-05-29 13:54:21'),
('20200101115631', '2020-01-01 11:59:38'),
('20200229075505', '2020-02-29 07:56:23'),
('20200229101630', '2020-02-29 10:16:53'),
('20200229102033', '2020-02-29 10:20:57'),
('20200229102613', '2020-02-29 10:26:28'),
('20200308141537', '2020-03-08 14:17:11'),
('20200308142521', '2020-03-08 14:25:37'),
('20200317170403', '2020-03-17 17:04:26'),
('20200317212550', '2020-03-17 21:26:16'),
('20200318210700', '2020-03-18 21:08:35'),
('20200319130518', '2020-03-19 13:05:38'),
('20200319130910', '2020-03-19 13:10:19'),
('20200325092118', '2020-03-25 09:28:27'),
('20200409151415', '2020-04-09 15:20:16'),
('20200415064705', '2020-04-15 06:47:35'),
('20200506072934', '2020-05-06 07:29:58'),
('20200530052953', '2020-05-30 05:30:10'),
('20200530054914', '2020-05-30 05:49:27'),
('20200530122716', '2020-05-30 12:27:36'),
('20200612204321', '2020-06-12 20:43:45'),
('20200725103717', '2020-07-25 10:37:33'),
('20200725104040', '2020-07-25 10:40:54'),
('20200726144940', '2020-07-26 14:50:06'),
('20200727112330', '2020-07-27 11:23:53');

-- --------------------------------------------------------

--
-- Структура на таблица `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `team` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `birthDay` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `youthTeam` int(11) DEFAULT NULL,
  `stats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `player`
--

INSERT INTO `player` (`id`, `team`, `user`, `position`, `birthDay`, `image`, `status`, `youthTeam`, `stats`) VALUES
(1, 1, 1, 1, '1998-12-02', '10e415fced1c45163cd8215cf761a15e.jpeg', NULL, NULL, 1),
(2, 1, 5, 1, '1998-12-02', 'alba (1).jpg', NULL, 1, 2),
(3, 1, 6, 1, '2020-01-07', '2466-1644-2.38975731.jpg.gallery (1).jpg', NULL, NULL, 3),
(4, 1, 7, 1, NULL, 'download (4) (1).jpg', NULL, NULL, 4),
(5, 1, 9, 4, NULL, 'download (4) (1).jpg', NULL, 1, 5),
(6, 1, 11, 4, NULL, 'samuel-umtiti-rodilla_0 (1).jpeg', NULL, 1, 6),
(7, 1, 13, 4, NULL, 'alba (1).jpg', NULL, NULL, 7),
(8, 1, 14, 2, NULL, '10e415fced1c45163cd8215cf761a15e.jpeg', NULL, NULL, 8),
(9, 1, 15, 2, NULL, '10e415fced1c45163cd8215cf761a15e.jpeg', NULL, NULL, 9),
(10, 1, 16, 2, NULL, 'alba (1).jpg', NULL, NULL, 10),
(11, 1, 17, 2, NULL, '2466-1644-2.38975731.jpg.gallery (1).jpg', NULL, NULL, 11),
(12, 1, 18, 3, NULL, 'gerard-pique.jpg', NULL, NULL, 12),
(13, NULL, 19, 4, NULL, 'gerard-pique.jpg', NULL, NULL, NULL),
(14, NULL, 21, 3, NULL, '10e415fced1c45163cd8215cf761a15e.jpeg', NULL, NULL, NULL),
(15, NULL, 22, 3, NULL, 'samuel-umtiti-rodilla_0 (1).jpeg', NULL, NULL, NULL),
(16, NULL, 23, 3, NULL, 'alba (1).jpg', NULL, NULL, NULL),
(17, NULL, 24, NULL, NULL, '2466-1644-2.38975731.jpg.gallery (1).jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `player_stats`
--

CREATE TABLE `player_stats` (
  `id` int(11) NOT NULL,
  `player_id` int(11) DEFAULT NULL,
  `statusFromCoaches` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `fat` double DEFAULT NULL,
  `pace` double DEFAULT NULL,
  `tacticks` double DEFAULT NULL,
  `technique` double DEFAULT NULL,
  `pass` double DEFAULT NULL,
  `shot` double DEFAULT NULL,
  `dribble` double DEFAULT NULL,
  `longPass` double DEFAULT NULL,
  `relax` double DEFAULT NULL,
  `willpower` double DEFAULT NULL,
  `work` double DEFAULT NULL,
  `perspective` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `player_stats`
--

INSERT INTO `player_stats` (`id`, `player_id`, `statusFromCoaches`, `weight`, `height`, `fat`, `pace`, `tacticks`, `technique`, `pass`, `shot`, `dribble`, `longPass`, `relax`, `willpower`, `work`, `perspective`) VALUES
(1, 1, 39, 0, 0, 0, 0, 1, 1, 5, 8, 6, 3, 5, 8, 0, 2),
(2, 2, 54, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 500, 0, 0, 0, 0, 5, 5, 5, 5, 5, 5, 5, 5, 6, 5),
(6, 6, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, 77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `player_to_team_request`
--

CREATE TABLE `player_to_team_request` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `player` int(11) DEFAULT NULL,
  `team` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `player_to_team_request`
--

INSERT INTO `player_to_team_request` (`id`, `date`, `message`, `player`, `team`) VALUES
(4, '01-31-2020', 'iskam da igraq futbol', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(1, 'Goalkeeper'),
(2, 'Midfielder'),
(3, 'Attacker'),
(4, 'Defender');

-- --------------------------------------------------------

--
-- Структура на таблица `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'ROLE_ADMIN'),
(3, 'ROLE_COACH'),
(2, 'ROLE_PLAYER');

-- --------------------------------------------------------

--
-- Структура на таблица `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `coaches` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startTime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endTime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `schedule`
--

INSERT INTO `schedule` (`id`, `coaches`, `date`, `startTime`, `endTime`, `training`) VALUES
(1, 1, '30/07/2020', '16:00', '17:30', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `shoes_type`
--

CREATE TABLE `shoes_type` (
  `id` int(11) NOT NULL,
  `type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `shoes_type`
--

INSERT INTO `shoes_type` (`id`, `type`) VALUES
(1, 'FG'),
(2, 'AG'),
(3, 'TG'),
(4, 'SG'),
(5, 'MG');

-- --------------------------------------------------------

--
-- Структура на таблица `soccer_scheme`
--

CREATE TABLE `soccer_scheme` (
  `id` int(11) NOT NULL,
  `schema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `soccer_scheme`
--

INSERT INTO `soccer_scheme` (`id`, `schema`) VALUES
(1, '4-4-2'),
(2, '4-3-3'),
(3, '3-5-2'),
(4, '4-5-1'),
(5, '3-4-3');

-- --------------------------------------------------------

--
-- Структура на таблица `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `division_id` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `played_games` int(11) DEFAULT NULL,
  `wins` int(11) DEFAULT NULL,
  `lostGames` int(11) DEFAULT NULL,
  `drawsGames` int(11) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `goalsInTheTeamDoor` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `team`
--

INSERT INTO `team` (`id`, `division_id`, `city`, `name`, `points`, `played_games`, `wins`, `lostGames`, `drawsGames`, `goals`, `goalsInTheTeamDoor`, `image`, `cover_image`) VALUES
(1, 1, 1, 'Ludogorets', 0, 0, 0, 0, 0, 0, 0, 'Ludogorets2.png', 'U19_2019-20.jpg'),
(2, 1, 3, 'Botev Plovdiv', 3, 1, 1, 0, 0, 1, 0, 'botevPlovdiv.png', 'U19_2019-20.jpg'),
(3, 1, 4, 'Levski', 0, 1, 0, 1, 0, 1, 3, 'levski.png', 'U19_2019-20.jpg'),
(4, NULL, 4, 'CSKA', 3, 1, 1, 0, 0, 4, 1, 'CSKA_99-05.png', 'U19_2019-20.jpg'),
(5, 1, 4, 'CSKA Sofiq', 0, 0, 0, 1, 0, 1, 2, 'CSKA_99-05.png', 'U19_2019-20.jpg'),
(6, 1, 2, 'Qntra', 1, 1, 0, 0, 1, 1, 1, 'qntra.jpg', 'U19_2019-20.jpg'),
(7, 1, 2, 'Shumen', 3, 1, 1, 0, 0, 5, 4, 'shumen.png', 'U19_2019-20.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `team_to_coach_request`
--

CREATE TABLE `team_to_coach_request` (
  `id` int(11) NOT NULL,
  `teams` int(11) DEFAULT NULL,
  `coaches` int(11) DEFAULT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `team_to_division_request`
--

CREATE TABLE `team_to_division_request` (
  `id` int(11) NOT NULL,
  `teams` int(11) DEFAULT NULL,
  `divisions` int(11) DEFAULT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `shoesType` int(11) DEFAULT NULL,
  `trainingType` int(11) DEFAULT NULL,
  `schedule` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `training`
--

INSERT INTO `training` (`id`, `shoesType`, `trainingType`, `schedule`) VALUES
(1, 1, 3, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `training_exercise`
--

CREATE TABLE `training_exercise` (
  `training` int(11) NOT NULL,
  `exercise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `training_exercise`
--

INSERT INTO `training_exercise` (`training`, `exercise`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура на таблица `training_type`
--

CREATE TABLE `training_type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `training_type`
--

INSERT INTO `training_type` (`id`, `type`) VALUES
(1, 'Tacktick'),
(2, 'Fun'),
(3, 'HardWork');

-- --------------------------------------------------------

--
-- Структура на таблица `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `fName`, `phone`, `city`) VALUES
(1, 'az23634@gmail.com', '$2y$12$QRgULkukyu4yObMa3bZdse3VdH1VtdrjgVRs.KPWFLCNrsAGjtO4m', 'Недялко', 'Димитров', '0894393801', 1),
(2, 'gosho@gmail.com', '$2y$12$QRgULkukyu4yObMa3bZdse3VdH1VtdrjgVRs.KPWFLCNrsAGjtO4m', 'Георги', 'Иванов', '0893435678', 4),
(4, 'admin@gmail.com', '$2y$12$QRgULkukyu4yObMa3bZdse3VdH1VtdrjgVRs.KPWFLCNrsAGjtO4m', 'Иван', 'Димитров', '0894393801', 3),
(5, 'ivan@gmail.com', NULL, 'Иван', 'Петров', '08945668547', 1),
(6, 'selskiq@gmail.com', NULL, 'Иван', 'Брат', '0895674589', 3),
(7, 'petyr21@gmail.com', NULL, 'Петър', 'Пит', '08945684568', 4),
(9, 'petyr212@gmail.com', NULL, 'Георги', 'Дринквотър', '08945684568', 4),
(11, 'petyr2212@gmail.com', NULL, 'Иван', 'Векам', '08945684568', 4),
(13, 'petyr22112@gmail.com', NULL, 'Петър', 'Меси', '08945684568', 4),
(14, 'petyrв22112@gmail.com', NULL, 'Галин', 'Цонев', '08945684568', 4),
(15, 'petцyrв22112@gmail.com', NULL, 'Стефан', 'Роналдо', '08945684568', 4),
(16, 'petцysrв22112@gmail.com', NULL, 'Димитър', 'Георгже', '08945684568', 4),
(17, 'petцysrв221112@gmail.com', NULL, 'Майкъл', 'Джордан', '08945684568', 4),
(18, 'petцysrв2211112@gmail.com', NULL, 'Радослав', 'Харди', '08945684568', 4),
(19, 'petцysrв22112112@gmail.com', NULL, 'Пейчо', 'Харт', '08945684568', 4),
(21, 'petцysrв2211с2112@gmail.com', NULL, 'Денчо', 'Пенев', '08945684568', 4),
(22, 'petцysrв22с11с2112@gmail.com', NULL, 'Денчо', 'Иванов', '08945684568', 4),
(23, 'petцysrв22дсс11с2112@gmail.com', NULL, 'Кирчо', 'Бозманов', '08945684568', 4),
(24, 'petцдysrв22дсс11с2112@gmail.com', NULL, 'Борко', 'Бозманов', '08945684568', 4),
(25, 'gosho1@gmail.com', '212121', 'Петър', 'Пенчев', '0894393801', 3),
(26, 'asdasds', 'asdasdas', 'Иван ', 'Петров', '0894568855', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 2),
(2, 3),
(4, 1),
(5, 2),
(6, 2),
(7, 2),
(9, 2),
(11, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(25, 3),
(26, 3);

-- --------------------------------------------------------

--
-- Структура на таблица `user_to_user_request`
--

CREATE TABLE `user_to_user_request` (
  `id` int(11) NOT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Схема на данните от таблица `user_to_user_request`
--

INSERT INTO `user_to_user_request` (`id`, `dates`, `type`, `sender`, `receiver`) VALUES
(1, '29/02/2020', '', NULL, NULL),
(2, '29/02/2020', 'player-coach', 2, 2),
(6, '', 'admin-coach', 4, 26);

-- --------------------------------------------------------

--
-- Структура на таблица `water_glasses`
--

CREATE TABLE `water_glasses` (
  `id` int(11) NOT NULL,
  `player` int(11) DEFAULT NULL,
  `waterGlasses` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `water_glasses`
--

INSERT INTO `water_glasses` (`id`, `player`, `waterGlasses`, `date`) VALUES
(1, 1, 0, '02-12-2001'),
(2, 1, 0, '2019-12-13'),
(3, 1, 0, '2019-12-14'),
(4, 1, 6, '2019-12-17'),
(5, 1, 0, '2020-01-05'),
(6, 1, 0, '2020-01-09'),
(7, 1, 0, '2020-01-12'),
(8, 1, 0, '2020-01-17'),
(9, 1, 0, '2020-01-28'),
(10, 1, 0, '2020-01-30'),
(11, 1, 0, '2020-02-02'),
(12, 1, 0, '2020-02-03'),
(13, 1, 14, '2020-02-04'),
(14, 1, 6, '2020-02-08'),
(15, 1, 0, '2020-02-13'),
(16, 1, 0, '2020-02-14'),
(17, 1, 0, '2020-02-15'),
(18, 1, 0, '2020-02-19'),
(19, 1, 0, '2020-02-21'),
(20, 1, 0, '2020-02-23'),
(21, 1, 0, '2020-02-27'),
(22, 1, 0, '2020-02-29'),
(23, 1, 0, '2020-03-03'),
(24, 1, 0, '2020-03-04'),
(25, 1, 0, '2020-03-07'),
(26, 1, 0, '2020-03-08'),
(27, 1, 0, '2020-03-14'),
(28, 1, 0, '2020-04-10'),
(29, 1, 0, '2020-04-11'),
(30, 1, 6, '2020-04-12'),
(31, 1, 0, '2020-04-13'),
(32, 1, 0, '2020-04-15'),
(33, 1, 6, '2020-05-24'),
(34, 1, 0, '2020-05-25'),
(35, 1, 0, '2020-06-09'),
(36, 1, 0, '2020-06-10'),
(37, 1, 0, '2020-06-19'),
(38, 1, 0, '2020-06-20'),
(39, 1, 8, '2020-06-22'),
(40, 1, 10, '2020-06-23'),
(41, 1, 6, '2020-06-24'),
(42, 1, 0, '2020-06-26'),
(43, 1, 0, '2020-06-27'),
(44, 1, 0, '2020-07-06'),
(45, 1, 5, '2020-07-22'),
(46, 1, 0, '2020-07-24'),
(47, 1, 0, '2020-07-25');

-- --------------------------------------------------------

--
-- Структура на таблица `youth_division`
--

CREATE TABLE `youth_division` (
  `id` int(11) NOT NULL,
  `country` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `youth_division`
--

INSERT INTO `youth_division` (`id`, `country`, `name`, `age`, `image`) VALUES
(1, 1, 'U19', 19, 'asdsadasd');

-- --------------------------------------------------------

--
-- Структура на таблица `youth_team`
--

CREATE TABLE `youth_team` (
  `id` int(11) NOT NULL,
  `division_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `played_games` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `lostGames` int(11) NOT NULL,
  `drawsGames` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `goalsInTheTeamDoor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `youth_team`
--

INSERT INTO `youth_team` (`id`, `division_id`, `team_id`, `city`, `name`, `points`, `played_games`, `wins`, `lostGames`, `drawsGames`, `goals`, `goalsInTheTeamDoor`) VALUES
(1, 1, 1, 1, 'Ludogorets19', 0, 0, 0, 0, 0, 0, 0),
(2, 1, 1, 1, 'Ludogorets17', 0, 0, 0, 0, 0, 0, 0),
(3, 1, 1, 1, 'Ludogorets16', 0, 0, 0, 0, 0, 0, 0),
(4, 1, 1, 1, 'Ludogorets15', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_880E0D768D93D649` (`user`),
  ADD KEY `IDX_880E0D76C4E0A61F` (`team`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2D5B02345373C966` (`country`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3F596DCC8D93D649` (`user`),
  ADD KEY `IDX_3F596DCC2DDB4FB3` (`youth_team`),
  ADD KEY `IDX_3F596DCCC4E0A61F` (`team`),
  ADD KEY `IDX_3F596DCC346B16E9` (`teamPosition`);

--
-- Indexes for table `coachtoplayerrequests`
--
ALTER TABLE `coachtoplayerrequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_38F834DEC4131765` (`coaches`),
  ADD KEY `IDX_38F834DE264E43A6` (`players`);

--
-- Indexes for table `coach_position`
--
ALTER TABLE `coach_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach_to_team_request`
--
ALTER TABLE `coach_to_team_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AF654976C4131765` (`coaches`),
  ADD KEY `IDX_AF65497696C22258` (`teams`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5373C9665E237E06` (`name`),
  ADD UNIQUE KEY `UNIQ_5373C966C53D045F` (`image`);

--
-- Indexes for table `cup`
--
ALTER TABLE `cup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devision_request`
--
ALTER TABLE `devision_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_101747145373C966` (`country`);

--
-- Indexes for table `division_request`
--
ALTER TABLE `division_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_48B1BF6510174714` (`division`),
  ADD KEY `IDX_48B1BF65C4E0A61F` (`team`);

--
-- Indexes for table `division_to_team_request`
--
ALTER TABLE `division_to_team_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B9348C901C40C31` (`divisions`),
  ADD KEY `IDX_B9348C9096C22258` (`teams`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FA14991FFCDE876` (`intensityType`);

--
-- Indexes for table `injured_users`
--
ALTER TABLE `injured_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F3B46CEE1483A5E9` (`users`);

--
-- Indexes for table `intensity_type`
--
ALTER TABLE `intensity_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_62615BAAACC89C7` (`matchStats`),
  ADD KEY `IDX_62615BABBFC6AEF` (`homeTeam`),
  ADD KEY `IDX_62615BA22501995` (`awayTeam`),
  ADD KEY `IDX_62615BA10174714` (`division`);

--
-- Indexes for table `match_list`
--
ALTER TABLE `match_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_25A7496A98197A65` (`player`),
  ADD KEY `IDX_25A7496A62615BA` (`matches`);

--
-- Indexes for table `match_scheme`
--
ALTER TABLE `match_scheme`
  ADD PRIMARY KEY (`match`,`scheme`),
  ADD KEY `IDX_1E8C7C4A7A5BC505` (`match`),
  ADD KEY `IDX_1E8C7C4ABFE3854B` (`scheme`);

--
-- Indexes for table `match_stats`
--
ALTER TABLE `match_stats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E92D180B62615BA` (`matches`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_98197A658D93D649` (`user`),
  ADD UNIQUE KEY `UNIQ_98197A65574767AA` (`stats`),
  ADD KEY `IDX_98197A65C4E0A61F` (`team`),
  ADD KEY `IDX_98197A65462CE4F5` (`position`),
  ADD KEY `IDX_98197A6571F589DD` (`youthTeam`);

--
-- Indexes for table `player_stats`
--
ALTER TABLE `player_stats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E8351CEC99E6F5DF` (`player_id`);

--
-- Indexes for table `player_to_team_request`
--
ALTER TABLE `player_to_team_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C961DE3F98197A65` (`player`),
  ADD KEY `IDX_C961DE3FC4E0A61F` (`team`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_57698A6A5E237E06` (`name`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_5A3811FBD5128A8F` (`training`),
  ADD KEY `IDX_5A3811FBC4131765` (`coaches`);

--
-- Indexes for table `shoes_type`
--
ALTER TABLE `shoes_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soccer_scheme`
--
ALTER TABLE `soccer_scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C4E0A61F5E237E06` (`name`),
  ADD KEY `IDX_C4E0A61F41859289` (`division_id`),
  ADD KEY `IDX_C4E0A61F2D5B0234` (`city`);

--
-- Indexes for table `team_to_coach_request`
--
ALTER TABLE `team_to_coach_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B8686EAA96C22258` (`teams`),
  ADD KEY `IDX_B8686EAAC4131765` (`coaches`);

--
-- Indexes for table `team_to_division_request`
--
ALTER TABLE `team_to_division_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6E8BC24E96C22258` (`teams`),
  ADD KEY `IDX_6E8BC24E1C40C31` (`divisions`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D5128A8F5A3811FB` (`schedule`),
  ADD KEY `IDX_D5128A8FBA344F41` (`shoesType`),
  ADD KEY `IDX_D5128A8FFB3996A4` (`trainingType`);

--
-- Indexes for table `training_exercise`
--
ALTER TABLE `training_exercise`
  ADD PRIMARY KEY (`training`,`exercise`),
  ADD KEY `IDX_49BFC68BD5128A8F` (`training`),
  ADD KEY `IDX_49BFC68BAEDAD51C` (`exercise`);

--
-- Indexes for table `training_type`
--
ALTER TABLE `training_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D6492D5B0234` (`city`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `IDX_54FCD59FA76ED395` (`user_id`),
  ADD KEY `IDX_54FCD59FD60322AC` (`role_id`);

--
-- Indexes for table `user_to_user_request`
--
ALTER TABLE `user_to_user_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A5D35EC65F004ACF` (`sender`),
  ADD KEY `IDX_A5D35EC63DB88C96` (`receiver`);

--
-- Indexes for table `water_glasses`
--
ALTER TABLE `water_glasses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3BAC7DED98197A65` (`player`);

--
-- Indexes for table `youth_division`
--
ALTER TABLE `youth_division`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_54FDBF625373C966` (`country`);

--
-- Indexes for table `youth_team`
--
ALTER TABLE `youth_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2DDB4FB341859289` (`division_id`),
  ADD KEY `IDX_2DDB4FB3296CD8AE` (`team_id`),
  ADD KEY `IDX_2DDB4FB32D5B0234` (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coachtoplayerrequests`
--
ALTER TABLE `coachtoplayerrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coach_position`
--
ALTER TABLE `coach_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coach_to_team_request`
--
ALTER TABLE `coach_to_team_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cup`
--
ALTER TABLE `cup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devision_request`
--
ALTER TABLE `devision_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `division_request`
--
ALTER TABLE `division_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `division_to_team_request`
--
ALTER TABLE `division_to_team_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `injured_users`
--
ALTER TABLE `injured_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intensity_type`
--
ALTER TABLE `intensity_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `match_list`
--
ALTER TABLE `match_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `match_stats`
--
ALTER TABLE `match_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `player_stats`
--
ALTER TABLE `player_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `player_to_team_request`
--
ALTER TABLE `player_to_team_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoes_type`
--
ALTER TABLE `shoes_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `soccer_scheme`
--
ALTER TABLE `soccer_scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team_to_coach_request`
--
ALTER TABLE `team_to_coach_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_to_division_request`
--
ALTER TABLE `team_to_division_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_type`
--
ALTER TABLE `training_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_to_user_request`
--
ALTER TABLE `user_to_user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `water_glasses`
--
ALTER TABLE `water_glasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `youth_division`
--
ALTER TABLE `youth_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `youth_team`
--
ALTER TABLE `youth_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_880E0D768D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_880E0D76C4E0A61F` FOREIGN KEY (`team`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `FK_2D5B02345373C966` FOREIGN KEY (`country`) REFERENCES `country` (`id`);

--
-- Ограничения за таблица `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `FK_3F596DCC2DDB4FB3` FOREIGN KEY (`youth_team`) REFERENCES `youth_team` (`id`),
  ADD CONSTRAINT `FK_3F596DCC346B16E9` FOREIGN KEY (`teamPosition`) REFERENCES `coach_position` (`id`),
  ADD CONSTRAINT `FK_3F596DCC8D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_3F596DCCC4E0A61F` FOREIGN KEY (`team`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `coachtoplayerrequests`
--
ALTER TABLE `coachtoplayerrequests`
  ADD CONSTRAINT `FK_38F834DE264E43A6` FOREIGN KEY (`players`) REFERENCES `player` (`id`),
  ADD CONSTRAINT `FK_38F834DEC4131765` FOREIGN KEY (`coaches`) REFERENCES `coach` (`id`);

--
-- Ограничения за таблица `coach_to_team_request`
--
ALTER TABLE `coach_to_team_request`
  ADD CONSTRAINT `FK_AF65497696C22258` FOREIGN KEY (`teams`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `FK_AF654976C4131765` FOREIGN KEY (`coaches`) REFERENCES `coach` (`id`);

--
-- Ограничения за таблица `division`
--
ALTER TABLE `division`
  ADD CONSTRAINT `FK_101747145373C966` FOREIGN KEY (`country`) REFERENCES `country` (`id`);

--
-- Ограничения за таблица `division_request`
--
ALTER TABLE `division_request`
  ADD CONSTRAINT `FK_48B1BF6510174714` FOREIGN KEY (`division`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `FK_48B1BF65C4E0A61F` FOREIGN KEY (`team`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `division_to_team_request`
--
ALTER TABLE `division_to_team_request`
  ADD CONSTRAINT `FK_B9348C901C40C31` FOREIGN KEY (`divisions`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `FK_B9348C9096C22258` FOREIGN KEY (`teams`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `exercises`
--
ALTER TABLE `exercises`
  ADD CONSTRAINT `FK_FA14991FFCDE876` FOREIGN KEY (`intensityType`) REFERENCES `intensity_type` (`id`);

--
-- Ограничения за таблица `injured_users`
--
ALTER TABLE `injured_users`
  ADD CONSTRAINT `FK_F3B46CEE1483A5E9` FOREIGN KEY (`users`) REFERENCES `user` (`id`);

--
-- Ограничения за таблица `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `FK_62615BA10174714` FOREIGN KEY (`division`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `FK_62615BA22501995` FOREIGN KEY (`awayTeam`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `FK_62615BAAACC89C7` FOREIGN KEY (`matchStats`) REFERENCES `match_stats` (`id`),
  ADD CONSTRAINT `FK_62615BABBFC6AEF` FOREIGN KEY (`homeTeam`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `match_list`
--
ALTER TABLE `match_list`
  ADD CONSTRAINT `FK_25A7496A62615BA` FOREIGN KEY (`matches`) REFERENCES `matches` (`id`),
  ADD CONSTRAINT `FK_25A7496A98197A65` FOREIGN KEY (`player`) REFERENCES `player` (`id`);

--
-- Ограничения за таблица `match_scheme`
--
ALTER TABLE `match_scheme`
  ADD CONSTRAINT `FK_1E8C7C4A7A5BC505` FOREIGN KEY (`match`) REFERENCES `matches` (`id`),
  ADD CONSTRAINT `FK_1E8C7C4ABFE3854B` FOREIGN KEY (`scheme`) REFERENCES `soccer_scheme` (`id`);

--
-- Ограничения за таблица `match_stats`
--
ALTER TABLE `match_stats`
  ADD CONSTRAINT `FK_E92D180B62615BA` FOREIGN KEY (`matches`) REFERENCES `matches` (`id`);

--
-- Ограничения за таблица `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `FK_98197A65462CE4F5` FOREIGN KEY (`position`) REFERENCES `position` (`id`),
  ADD CONSTRAINT `FK_98197A65574767AA` FOREIGN KEY (`stats`) REFERENCES `player_stats` (`id`),
  ADD CONSTRAINT `FK_98197A6571F589DD` FOREIGN KEY (`youthTeam`) REFERENCES `youth_team` (`id`),
  ADD CONSTRAINT `FK_98197A658D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_98197A65C4E0A61F` FOREIGN KEY (`team`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `player_stats`
--
ALTER TABLE `player_stats`
  ADD CONSTRAINT `FK_E8351CEC99E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

--
-- Ограничения за таблица `player_to_team_request`
--
ALTER TABLE `player_to_team_request`
  ADD CONSTRAINT `FK_C961DE3F98197A65` FOREIGN KEY (`player`) REFERENCES `player` (`id`),
  ADD CONSTRAINT `FK_C961DE3FC4E0A61F` FOREIGN KEY (`team`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `FK_5A3811FBC4131765` FOREIGN KEY (`coaches`) REFERENCES `coach` (`id`),
  ADD CONSTRAINT `FK_5A3811FBD5128A8F` FOREIGN KEY (`training`) REFERENCES `training` (`id`);

--
-- Ограничения за таблица `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `FK_C4E0A61F2D5B0234` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `FK_C4E0A61F41859289` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`);

--
-- Ограничения за таблица `team_to_coach_request`
--
ALTER TABLE `team_to_coach_request`
  ADD CONSTRAINT `FK_B8686EAA96C22258` FOREIGN KEY (`teams`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `FK_B8686EAAC4131765` FOREIGN KEY (`coaches`) REFERENCES `coach` (`id`);

--
-- Ограничения за таблица `team_to_division_request`
--
ALTER TABLE `team_to_division_request`
  ADD CONSTRAINT `FK_6E8BC24E1C40C31` FOREIGN KEY (`divisions`) REFERENCES `division` (`id`),
  ADD CONSTRAINT `FK_6E8BC24E96C22258` FOREIGN KEY (`teams`) REFERENCES `team` (`id`);

--
-- Ограничения за таблица `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `FK_D5128A8F5A3811FB` FOREIGN KEY (`schedule`) REFERENCES `schedule` (`id`),
  ADD CONSTRAINT `FK_D5128A8FBA344F41` FOREIGN KEY (`shoesType`) REFERENCES `shoes_type` (`id`),
  ADD CONSTRAINT `FK_D5128A8FFB3996A4` FOREIGN KEY (`trainingType`) REFERENCES `training_type` (`id`);

--
-- Ограничения за таблица `training_exercise`
--
ALTER TABLE `training_exercise`
  ADD CONSTRAINT `FK_49BFC68BAEDAD51C` FOREIGN KEY (`exercise`) REFERENCES `exercises` (`id`),
  ADD CONSTRAINT `FK_49BFC68BD5128A8F` FOREIGN KEY (`training`) REFERENCES `training` (`id`);

--
-- Ограничения за таблица `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6492D5B0234` FOREIGN KEY (`city`) REFERENCES `city` (`id`);

--
-- Ограничения за таблица `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `FK_54FCD59FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_54FCD59FD60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Ограничения за таблица `user_to_user_request`
--
ALTER TABLE `user_to_user_request`
  ADD CONSTRAINT `FK_A5D35EC63DB88C96` FOREIGN KEY (`receiver`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_A5D35EC65F004ACF` FOREIGN KEY (`sender`) REFERENCES `user` (`id`);

--
-- Ограничения за таблица `water_glasses`
--
ALTER TABLE `water_glasses`
  ADD CONSTRAINT `FK_3BAC7DED98197A65` FOREIGN KEY (`player`) REFERENCES `user` (`id`);

--
-- Ограничения за таблица `youth_division`
--
ALTER TABLE `youth_division`
  ADD CONSTRAINT `FK_54FDBF625373C966` FOREIGN KEY (`country`) REFERENCES `country` (`id`);

--
-- Ограничения за таблица `youth_team`
--
ALTER TABLE `youth_team`
  ADD CONSTRAINT `FK_2DDB4FB3296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `FK_2DDB4FB32D5B0234` FOREIGN KEY (`city`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `FK_2DDB4FB341859289` FOREIGN KEY (`division_id`) REFERENCES `youth_division` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
