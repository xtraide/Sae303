-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 07 jan. 2024 à 15:37
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ntrhndmam_acf2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_avion`
--

DROP TABLE IF EXISTS `ntrhndmam_avion`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_avion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `modele` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_avion`
--

INSERT INTO `ntrhndmam_avion` (`id`, `modele`) VALUES
(6, 'Boeing 747r'),
(7, 'fff');

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_pilote`
--

DROP TABLE IF EXISTS `ntrhndmam_pilote`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_pilote` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_pilote`
--

INSERT INTO `ntrhndmam_pilote` (`id`, `nom`, `prenom`, `civilite`, `email`) VALUES
(1, 'Smith', 'Jane', 'Ms', 'jane@example.com');

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_reservation`
--

DROP TABLE IF EXISTS `ntrhndmam_reservation`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `_date` date DEFAULT NULL,
  `id_1` int NOT NULL,
  `id_2` int NOT NULL,
  `id_3` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_1` (`id_1`),
  KEY `id_2` (`id_2`),
  KEY `id_3` (`id_3`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_reservation`
--

INSERT INTO `ntrhndmam_reservation` (`id`, `_date`, `id_1`, `id_2`, `id_3`) VALUES
(1, '2024-01-01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_user`
--

DROP TABLE IF EXISTS `ntrhndmam_user`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `civilite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `_date` date NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation_familiale` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_situation_familiale` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateFin_situation_familiale` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int NOT NULL,
  `nb_a_charge` int NOT NULL,
  `activite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_user`
--

INSERT INTO `ntrhndmam_user` (`id`, `civilite`, `nom`, `prenom`, `_date`, `adresse`, `situation_familiale`, `date_situation_familiale`, `dateFin_situation_familiale`, `email`, `numero`, `nb_a_charge`, `activite`, `token`, `verified`, `password`, `role`) VALUES
(1, 'Mr', 'Doe', 'John', '2023-12-13', '123 Street', 'Single', '2023-12-13', '2023-12-13', 'john@example.com', 1234567890, 0, 'Developer', 'token', 1, 'password', 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
