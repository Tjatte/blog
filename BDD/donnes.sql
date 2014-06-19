-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 19 Juin 2014 à 13:26
-- Version du serveur: 5.6.12
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `text`, `date`, `user`) VALUES
(1, 'Mon premiere article ', ' This is a very tidy article ', '2014-06-13 14:35:56', 1),
(2, 'maison', 'Planning the most effective lessons takes tim', '2014-06-13 15:52:39', 1),
(5, 'Lesson de Phillip', 'Une article bien ecrite par moi même', '2014-06-16 10:13:22', 1),
(6, 'Côte du Rhône Blanc 2011', 'Supervin avec beaucoup de gout', '2014-06-18 15:08:50', 1),
(7, 'Lesson Yannick', 'klqsjdfq qsjflkjqs fkqsjflkqsjf qslkfjqslkfj ', '2014-06-19 15:05:27', 1);

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`role`, `auteur`) VALUES
('admin', '');

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`, `date`) VALUES
(1, 'Rita ', '7a64dd11995243acb58643efed399593f5eacb63', 'admin', '2014-06-12 11:31:00'),
(2, 'Vera', 'daf25d9b90b9f03e6c596ff4f3f2c214c4ef84b4', 'admin', '2014-06-17 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
