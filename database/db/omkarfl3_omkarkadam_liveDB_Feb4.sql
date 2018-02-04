-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2018 at 07:54 AM
-- Server version: 5.5.55-38.8-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `omkarfl3_omkarkadam`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=52 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(20, 'Omkar Kadam', 'kadam.omkar610@gmail.com', '$2y$10$xTwgEkbwLuj/Tj9vt8irde1dphhxbN6yYNCYZcm/rPtea4KqvaP9O', 'Ijhop6hCwYe2NrB730K6eJDOgv3bzzctZ2TU2TmOabDTFNIe8aRuYYZkP02r', '2017-11-02 22:22:04', '2017-11-02 22:22:04'),
(21, 'gajanan dombivli', 'gajanandombivli@gmail.com', '$2y$10$9bJzKIwvy7dn1dubeHXj9uEd5QyZ49mdmbsP7SRzlYhlhUuhTl7PG', 'DwDZiOFsBNYoepg5t8bIwrn1UBTseoHIiuRdemWt4efsoNRocyZYmWtWdu9M', '2017-11-02 23:50:40', '2017-11-02 23:50:40'),
(22, 'Omkar K', 'omkarrkk@gmail.com', '$2y$10$oopCtd9xPSv0Pi0/DDDTGuQteDnj6IqYKJSqYk9W.D3m7xWB8Sb7W', 'iR2pQB7HdOPmp43WmUsSLk0JaJDxgsOuuCjCRBG7yE6xQZ8SclLE23YITMiu', '2017-11-02 23:51:17', '2017-11-02 23:51:17'),
(23, 'omkar kadam', 'omkark610@gmail.com', '$2y$10$v2vb1OCdQ6zXo3jnxIWT0eBB/K2zdSZ.cx/FpX0UQP5roQ8IOSWDa', 'ee4IvEaENfWQCxdSCXddnl6appjPhxo2DooLE9Hr5q7cgy2E5exs9ZObYOky', '2017-11-03 00:15:15', '2017-11-03 00:15:15'),
(24, 'Vishal Jadhav', 'vjcoolvish8@gmail.com', '$2y$10$O751xbLsIFrDA9N1Sq8.y.1W5tNzuUGdN/5oKxfKTfj.imZZHJKWe', NULL, '2017-11-03 03:08:54', '2017-11-03 03:08:54'),
(25, 'Sagar', 'mesagar.awate7@gmail.com', '$2y$10$xZ0KkPj/sYN/7GFO/CvuOuJpB68o0q0qwSE1C.89omlj7rzsRL5ny', 'QTKmP9E1hRiT9EpYu2I1aDluAj6G1upkmC7UPEJb1R118sLlvBeHzKqgtN9e', '2017-11-03 03:54:46', '2017-11-03 03:54:46'),
(26, 'Chetan Birajdar', 'birajdarchetan26@gmail.com', '$2y$10$r1TnTjRxZjNrdLQzuhVYquBuSPJqSIVOcQagTe1/y2.462dc091le', 'hIOb5Te9naWvP1XWXLwikFdNSIufOllPsN4POI06t2M3lSbtb9RIMJROjc1Y', '2017-11-03 04:14:07', '2017-11-03 04:14:07'),
(27, 'pankaj pal', 'palpankaj9@gmail.com', '$2y$10$dxw2WRrKx3t880A6WJKJq.FvyDa9nl96JPs25e0bb.y1ffIzVvepC', NULL, '2017-11-03 04:42:13', '2017-11-03 04:42:13'),
(28, 'rushikesh', 'rushinikumbh99@rediffmail.com', '$2y$10$/YEJ1Lp5q.vD1kQh47LHZeRcKffYnUcTIXtQ0c1dyhXKLNK0MqPIW', 'ZlYjFfrqs2uV4FgoitgFTsuYVp7cN7VtcdTs2dNm9CAl8rBYMntcpJvwOsJm', '2017-11-03 04:51:03', '2017-11-03 04:51:03'),
(29, 'sharayu kadam', 'sharayu.astro@gmail.com', '$2y$10$dVvgY9/txmgjWTXPZ8Y39ukyMaQkmoAvtI58XJXB/rAXyymGql.ZG', 'liHTnHUkQsEMmtJl3S5gSIigfnRpJMgCmBCWehr2sBkMEPZweMi2TUMetVIN', '2017-11-03 05:52:25', '2017-11-03 05:52:25'),
(30, 'Hi', 'hi@gmail.com', '$2y$10$uitXsGM/cQP0NEoB8veYOO/hkC.w0kbESWipw6ncAd2XbFO5Ly5ym', 'NsTKfeuaqJphmXe0cxu0BRWl9buJcSSkCOnppFx6gWqKyP4XUttnqrm9ynCo', '2017-11-03 07:11:14', '2017-11-03 07:11:14'),
(31, 'Swanand Joshi', 'swanandj91@gmail.com', '$2y$10$jizqFVgt3yyXUhmtPA0zre.UtNxlMd1Y5h4Vo39suz7Yu1ubkTZx.', NULL, '2017-11-03 07:56:20', '2017-11-03 07:56:20'),
(32, 'Niraj Mishra', 'nirajmishra25@gmail.com', '$2y$10$tSg2S3P7aJM07.VFoy0lv.nNeXeEGQLKdeiIzz6qGfpuc/c8OES1G', 't1APshq5nkySpnfDhdYNaPpGW8EQrAZgJNY6ockNsjR9KPM3qw9LOqq2Gn8F', '2017-11-03 08:35:49', '2017-11-03 08:35:49'),
(33, 'ashish kadam', 'ashka.237@gmail.com', '$2y$10$KJMbR/H7azKK.lYaJpwkEeDAtlXpjuPT79NyAmLQRKtPNBOLAH2.6', '20s31TBjcMOVcRmoHYNWn2ltTujXFnedrNCocKxQjqeTrifV7IzHP7u2pyDB', '2017-11-03 10:03:42', '2017-11-03 10:03:42'),
(34, 'vitthal yadav', 'yadavvitthal1@gmail.com', '$2y$10$9XoaGuQZrKTxjygMS0W7Iuee3psVU.29YB6fUmLLWSxVvH.OUY1Ty', 'JcRzcG9OP6DOxGL5cZu2l8PDAkEguY54dO4wcD7YewCAX6cug5MzQ99FNC4D', '2017-11-03 10:34:59', '2017-11-03 10:34:59'),
(35, 'pinky', 'pinki.dodhia@finpeace.in', '$2y$10$iZv.g/.pppIbwK6jT098MeD4psWJTMV0wOK4nE4OwIk0kDASaQp5K', 'SYRqpxU2hfO5G2W65FFkRcowVRn5AJ8qBlp4VkO3xXFrfPbAZPEhUxw5iDTA', '2017-11-03 11:12:03', '2017-11-03 11:12:03'),
(36, 'Teskokreg', 'testokreg@gmail.com', '$2y$10$WIpwpK2nR66hAydeydaIAeYSiL9cna8DxveSNtSHlKeO2XNeCKNUK', 'o7fnec7EWUi6AL4XRynK8jhaIR1nHbjDNMT3WnlBiuArNbmCgamvuOXxQ6pl', '2017-11-03 11:33:08', '2017-11-03 11:33:08'),
(37, 'Prasad', 'prasadphakade@gmail.com', '$2y$10$Xs32SU3B4ACsmlrnl6DagOrcjWgRJKwpwRtn/3McXYXFX/sdkeQbS', 'T2nBsHs6oIAZznITYhNcg0rds0YzVMrwK8ZiSnB0XdMoXaePphxdjEpIzM7c', '2017-11-03 16:03:23', '2017-11-03 16:03:23'),
(38, 'swanand joshi', 'swanandjoshi871@gmail.com', '$2y$10$FJL/ghkAFmaB/4xUoK01Y.nmBBhb1k4N6M52DjQGuKiCIXr5BYiiW', NULL, '2017-11-03 16:54:14', '2017-11-03 16:54:14'),
(39, 'maildone1', 'maildone1@gmail.com', '$2y$10$Ij4dj85yKN/CPkCJUzpBIO1l2h6dNSdLynOsuSukZz.hXaQuNG5lG', 'T3RryOe40fIyGy7BCVLwvxQcJCmDofkXBGL4fDVOMSUQwJQIRQ5ESuqHJgAj', '2017-11-06 17:05:42', '2017-11-06 17:05:42'),
(40, 'Varad Mondkar', 'varadmondkar@gmail.com', '$2y$10$auKiyM2..BanjxK4O98MGupa0fJwyNGUp4ctxnNm1/lO.vC8JQeiq', 'pKM1nDD6kIaiFauAWvotiMGiM08GamiWDIksxt7v1nCN5Qq18N7Y29hY8exH', '2017-11-08 14:09:30', '2017-11-08 14:09:30'),
(41, 'shankar sakhare', 'shankar1sakhare@gmail.com', '$2y$10$GavkoSQwV19TFPnfwWwUW.Q8R8iCBPTxZFxk5Ubhv3E3q6z0FjJe2', NULL, '2017-12-16 06:12:45', '2017-12-16 06:12:45'),
(42, 'rajashri mitthapalli', 'mitthapallirajashri@gmail.com', '$2y$10$m1WxAutOx462ben1GLGL4OfhfKi7sJpIl0uoX1RyZ4njct./LVxia', 'bYldu2Lqdei4rhaMm4MfARGJ2SoZTC5BgAPntK8lKzzqRnwXplzsaXNGidZ3', '2017-12-17 04:18:41', '2017-12-17 04:18:41'),
(43, 'Hirani Hardik', 'vishal.hirani1995@gmail.com', '$2y$10$P0SWlDSCBTuglTQxTdQ/muQjkyYREmp1y/hj0sE3YZ0FVK4lmBWha', 'k9VWheou9S77ppAFT6as4gvvlI2dEweoHXcz9ap4YNTwZRSMJZXOiLidBgn6', '2017-12-22 12:38:15', '2017-12-22 12:38:15'),
(44, 'Farida Kathawala', 'farida.k@sutrajobs.com', '$2y$10$PPl76yWM7bWJJl1vSYGQr.jFx1osNR1CQ4tRWXJGJbiJcrjB/n.ZK', NULL, '2018-01-16 12:55:23', '2018-01-16 12:55:23'),
(45, 'Preety Ashok', 'jpreety26@gmail.com', '$2y$10$yHXBJ7HV1VgwtSP7N.3EVeRWVnPDsQoYtIl066WrEds2sBYpHiEU2', NULL, '2018-01-30 06:32:44', '2018-01-30 06:32:44'),
(46, 'Amit A', 'amit.agrawal1605@gmail.com', '$2y$10$estECWLA4BA6VjwG8.X4EOkjrpxIgr9iESxXSxJ/55.E3Z7PPy1AK', NULL, '2018-01-30 10:36:42', '2018-01-30 10:36:42'),
(47, 'Lahu Rakate', 'lahu.31.92@gmail.com', '$2y$10$BnnsFqifxeGfvk1/8PGJTe5XVtQoHVP1r4U3Y.KGv9AnTSPpg.gx2', NULL, '2018-01-30 16:36:15', '2018-01-30 16:36:15'),
(48, '&20$ebp-4demo', 'udayphlk@gmail.com', '$2y$10$GqUdpn3kTIDrWENVhpIuluV2icb.jClycl0KWqMep5pW4Mmq3hf5K', NULL, '2018-01-31 05:11:41', '2018-01-31 05:11:41'),
(49, 'Bhupender Singh', 'bhupender.singh405@gmail.com', '$2y$10$wkOeYIJnU7HmGK1Ogipw8OUrhcdYUHcCQgtkCbb3VI5HoiOpd7Qaa', NULL, '2018-01-31 05:54:00', '2018-01-31 05:54:00'),
(50, 'Test Name', 'test1@gmail.com', '$2y$10$KBUJj2feFxe3gpE/1QD1neSOGNqK0lyw2v.kanfxPIgdc2bU4I1Xi', NULL, '2018-01-31 06:43:31', '2018-01-31 06:43:31'),
(51, 'Ghhh hjj', 'abc@pqr.com', '$2y$10$TMMWjMkZfQWb/f2yL.ZSLu.nCkthaWYtrmBH4oTgHUmLlKvhkROVG', 'Jhxlf0xp6acjhog7sBcKzRnPhySr19V4tmRfXv8Vyzy4qqfB8hS8fRyjK7cm', '2018-02-03 08:09:13', '2018-02-03 08:09:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
