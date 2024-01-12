-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 12 jan. 2024 à 22:10
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ntrhndmam_avion`
--

INSERT INTO `ntrhndmam_avion` (`id`, `modele`, `v_max`, `capacite`, `autonomie`, `poid`, `img`) VALUES
(12, 'Pendulaire', 130, 2, 4, 400, '65a1b57270e70_Pendulaire.png'),
(13, 'Hélicoptère Ultraléger', 130, 2, 2, 200, '65a1b5f5ef29c_HelicoLeger.png'),
(14, 'Aérostat Ultraléger', 25, 2, 3, 450, '65a1b67dccc61_Baloon.png'),
(15, 'Autogire Ultraléger', 150, 2, 4, 300, '65a1b6b41dc70_Autogire.png'),
(16, 'Paramoteur', 60, 1, 3, 50, '65a1b6facf242_Paramoteur.png'),
(17, 'Multiaxes', 180, 2, 5, 400, '65a1b7311a980_Multiaxes.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
