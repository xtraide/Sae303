-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 nov. 2023 à 13:54
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
-- Structure de la table `ntrhndmam_adherents`
--

DROP TABLE IF EXISTS `ntrhndmam_adherents`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_adherents` (
  `id_ad` int NOT NULL,
  `civilite` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `_date` date NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `situation_familiale` varchar(50) NOT NULL,
  `date_situation_familiale` varchar(50) DEFAULT NULL,
  `dateFin__situation_familiale` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numero` int NOT NULL,
  `nb_a_charge` int NOT NULL,
  `activite` varchar(50) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_avions`
--

DROP TABLE IF EXISTS `ntrhndmam_avions`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_avions` (
  `id_av` int NOT NULL,
  `modèle` varchar(50) NOT NULL,
  PRIMARY KEY (`id_av`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_pilotes`
--

DROP TABLE IF EXISTS `ntrhndmam_pilotes`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_pilotes` (
  `id_pil` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `civilite` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_reservations`
--

DROP TABLE IF EXISTS `ntrhndmam_reservations`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_reservations` (
  `id_resa` int NOT NULL,
  `_date` date DEFAULT NULL,
  `id_av` int NOT NULL,
  `id_pil` int NOT NULL,
  `id_ad` int NOT NULL,
  PRIMARY KEY (`id_resa`),
  KEY `id_av` (`id_av`),
  KEY `id_pil` (`id_pil`),
  KEY `id_ad` (`id_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_staffs`
--

DROP TABLE IF EXISTS `ntrhndmam_staffs`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_staffs` (
  `id_staff` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_staff`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
