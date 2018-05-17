-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 17 Mai 2018 à 13:21
-- Version du serveur :  5.7.22-0ubuntu0.17.10.1
-- Version de PHP :  7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hack2`
--

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Gaule'),
(2, 'Troie'),
(3, 'Perse'),
(4, 'Sparte'),
(5, 'Viking'),
(6, 'Maori'),
(7, 'PSG'),
(8, 'OM');

-- --------------------------------------------------------

--
-- Structure de la table `gladiator`
--

CREATE TABLE `gladiator` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `weapon` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `captain` tinyint(1) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `gladiator`
--

INSERT INTO `gladiator` (`id`, `name`, `age`, `job`, `weapon`, `captain`, `state_id`) VALUES
(1, 'Gaetanix', 23, 'Antivirus', 'Dell', 1, 1),
(2, 'Lukix', 22, 'Malware', 'Asus', 0, 1),
(3, 'Olivix', 50, 'Spammer', 'Mac', 0, 1),
(4, 'Stepanix', 37, 'Hacker', 'Acer', 0, 1),
(5, 'Stephanos', 35, 'Malware', 'Dell', 0, 2),
(6, 'Lukos', 22, 'Spammer', 'Mac', 1, 2),
(7, 'Gregoros', 28, 'Antivirus', 'Acer', 0, 2),
(8, 'Nikolos', 21, 'Hacker', 'Asus', 0, 2),
(9, 'Maxès', 25, 'Antivirus', 'Dell', 1, 3),
(10, 'Nezzarès', 24, 'Hacker', 'Mac', 0, 3),
(11, 'Alexès', 39, 'Malware', 'Acer', 0, 3),
(12, 'Thibès', 28, 'Spammer', 'Asus', 0, 3),
(13, 'Thomus', 29, 'Antivirus', 'Dell', 0, 4),
(14, 'Aurélius', 32, 'Malware', 'Mac', 1, 4),
(15, 'Julcanus', 26, 'Hacker', 'Acer', 0, 4),
(16, 'Fabienus', 40, 'Spammer', 'Asus', 0, 4),
(17, 'Louok', 29, 'Antivirus', 'Dell', 0, 5),
(18, 'Kevinok', 28, 'Malware', 'Mac', 0, 5),
(19, 'Urbaniok', 29, 'Spammer', 'Acer', 1, 5),
(20, 'Raphok', 39, 'Hacker', 'Asus', 0, 5),
(21, 'Amandinoa', 25, 'Antivirus', 'Dell', 1, 6),
(22, 'Saleminoa', 24, 'Malware', 'Mac', 0, 6),
(23, 'Cannellana', 24, 'Spammer', 'Acer', 0, 6),
(24, 'Juliau', 30, 'Hacker', 'Asus', 0, 6),
(25, 'Sébastien', 37, 'Antivirus', 'Dell', 1, 7),
(26, 'Lama', 55, 'Malware', 'Mac', 0, 7),
(27, 'Bravo', 45, 'Spammer', 'Acer', 0, 7),
(28, 'Kombouaré', 50, 'Hacker', 'Asus', 0, 7),
(29, 'Slom', 38, 'Antivirus', 'Dell', 1, 8),
(30, 'Dimeco', 45, 'Malware', 'Mac', 0, 8),
(31, 'JPP', 47, 'Spammer', 'Acer', 0, 8),
(32, 'Waddle', 46, 'Hacker', 'Asus', 0, 8);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gladiator`
--
ALTER TABLE `gladiator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FFC565845D83CC1` (`state_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `gladiator`
--
ALTER TABLE `gladiator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `gladiator`
--
ALTER TABLE `gladiator`
  ADD CONSTRAINT `FK_FFC565845D83CC1` FOREIGN KEY (`state_id`) REFERENCES `country` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
