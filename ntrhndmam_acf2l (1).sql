-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 12 jan. 2024 à 03:39
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
  `v_max` int NOT NULL,
  `capacite` int NOT NULL,
  `autonomie` int NOT NULL,
  `poid` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_avion`
--

INSERT INTO `ntrhndmam_avion` (`id`, `modele`, `v_max`, `capacite`, `autonomie`, `poid`, `img`) VALUES
(6, 'Boeing 747r', 0, 0, 0, 0, 'apple_PNG12484.png'),
(7, 'fff', 5, 5, 5, 5, '');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_pilote`
--

INSERT INTO `ntrhndmam_pilote` (`id`, `nom`, `prenom`, `civilite`, `email`) VALUES
(1, 'Smith', 'Jane', 'Madame', 'jane@example.com');

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
  `horraire` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_1` (`id_1`),
  KEY `id_2` (`id_2`),
  KEY `id_3` (`id_3`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_reservation`
--

INSERT INTO `ntrhndmam_reservation` (`id`, `_date`, `id_1`, `id_2`, `id_3`, `horraire`) VALUES
(2, '2024-02-01', 1, 1, 6, '08:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_user`
--

DROP TABLE IF EXISTS `ntrhndmam_user`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `civilite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_date` date DEFAULT NULL,
  `adresse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situation_familiale` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_situation_familiale` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateFin_situation_familiale` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int DEFAULT NULL,
  `nb_a_charge` int DEFAULT NULL,
  `activite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT '0',
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_user`
--

INSERT INTO `ntrhndmam_user` (`id`, `civilite`, `nom`, `prenom`, `_date`, `adresse`, `situation_familiale`, `date_situation_familiale`, `dateFin_situation_familiale`, `email`, `numero`, `nb_a_charge`, `activite`, `token`, `verified`, `password`, `role`) VALUES
(3, 'Monsieur', 'test', 'test', '2024-01-26', '742_av_77120_tg', 'pacsé', '2024-01-14', '2024-01-21', 'admin@gmail.com', 406406520, 0, 'des', NULL, NULL, 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'Admin'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xxtraide@gmail.com', NULL, NULL, NULL, '65a0b3de7d812', 0, 'c4033bff94b567a190e33faa551f411caef444f2', 'User'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'thieblemontnicolas@gmail.com', NULL, NULL, NULL, '65a0add5e2fda', 1, 'c4033bff94b567a190e33faa551f411caef444f2', 'User');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
