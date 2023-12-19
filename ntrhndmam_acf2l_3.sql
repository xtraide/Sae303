-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 déc. 2023 à 23:40
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb3_general_ci */;

--
-- Base de données : `ntrhndmam_acf2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_avion`
--

DROP TABLE IF EXISTS `ntrhndmam_avion`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_avion` (
  `id_av` int NOT NULL,
  `modèle` varchar(50) NOT NULL,
  PRIMARY KEY (`id_av`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3_general_ci COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `ntrhndmam_avion`
--

INSERT INTO `ntrhndmam_avion` (`id_av`, `modèle`) VALUES
(1, 'Airbus A320'),
(2, 'Boeing 737'),
(3, 'Cessna 172');

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_pilote`
--

DROP TABLE IF EXISTS `ntrhndmam_pilote`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_pilote` (
  `id_pil` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `civilite` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3_general_ci COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `ntrhndmam_pilote`
--

INSERT INTO `ntrhndmam_pilote` (`id_pil`, `nom`, `prenom`, `civilite`, `email`) VALUES
(1, 'Smith', 'John', 'Monsieur', 'john.smith@email.com'),
(2, 'Johnson', 'Emily', 'Madame', 'emily.johnson@email.com');

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_reservation`
--

DROP TABLE IF EXISTS `ntrhndmam_reservation`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_reservation` (
  `id_resa` int NOT NULL,
  `_date` date DEFAULT NULL,
  `id_av` int NOT NULL,
  `id_pil` int NOT NULL,
  `id_ad` int NOT NULL,
  PRIMARY KEY (`id_resa`),
  KEY `id_av` (`id_av`),
  KEY `id_pil` (`id_pil`),
  KEY `id_ad` (`id_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3_general_ci COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `ntrhndmam_reservation`
--

INSERT INTO `ntrhndmam_reservation` (`id_resa`, `_date`, `id_av`, `id_pil`, `id_ad`) VALUES
(1, '2023-02-01', 1, 1, 1),
(2, '2023-03-10', 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_user`
--

DROP TABLE IF EXISTS `ntrhndmam_user`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_user` (
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
  `verified` tinyint(1) NOT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3_general_ci COLLATE=utf8mb3_general_ci;

--
-- Déchargement des données de la table `ntrhndmam_user`
--

INSERT INTO `ntrhndmam_user` (`id_ad`, `civilite`, `nom`, `prénom`, `_date`, `adresse`, `situation_familiale`, `date_situation_familiale`, `dateFin__situation_familiale`, `email`, `numero`, `nb_a_charge`, `activite`, `token`, `verified`, `mdp`, `role`) VALUES
(1, 'Monsieur', 'Dupont', 'Jean', '1990-01-01', '123 Rue de la Paix', 'Marié', '1988-05-15', '2022-01-01', 'dupont.jean@email.com', 123456789, 2, 'Ingénieur', 'xyz123', 1, 'motdepasse123', 'Utilisateur'),
(2, 'Madame', 'Durand', 'Sophie', '1995-03-15', '456 Avenue des Fleurs', 'Célibataire', NULL, '', 'durand.sophie@email.com', 987654321, 0, 'Docteur', 'abc456', 0, 'mdp456', 'Administrateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
