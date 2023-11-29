-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 29 nov. 2023 à 00:37
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
-- Structure de la table `ntrhndmam_adherent`
--

DROP TABLE IF EXISTS `ntrhndmam_adherent`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_adherent` (
  `id_ad` int NOT NULL,
  `civilite` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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

--
-- Déchargement des données de la table `ntrhndmam_adherent`
--

INSERT INTO `ntrhndmam_adherent` (`id_ad`, `civilite`, `nom`, `prenom`, `_date`, `adresse`, `situation_familiale`, `date_situation_familiale`, `dateFin__situation_familiale`, `email`, `numero`, `nb_a_charge`, `activite`, `token`, `verified`, `mdp`) VALUES
(1, 'Monsieur', 'Dupont', 'Jean', '1990-05-15', '123 Rue de la Paix', 'Célibataire', NULL, '2023-11-29', 'jean.dupont@email.com', 123456789, 0, 'Ingénieur', 'token123', 1, 'motdepasse123'),
(2, 'Madame', 'Martin', 'Sophie', '1985-08-20', '456 Avenue des Fleurs', 'Marié(e)', '2010-06-12', '2022-02-28', 'sophie.martin@email.com', 987654321, 2, 'Enseignante', 'token456', 1, 'mdp456');

-- --------------------------------------------------------

--
-- Structure de la table `ntrhndmam_avion`
--

DROP TABLE IF EXISTS `ntrhndmam_avion`;
CREATE TABLE IF NOT EXISTS `ntrhndmam_avion` (
  `id_av` int NOT NULL,
  `modèle` varchar(50) NOT NULL,
  PRIMARY KEY (`id_av`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ntrhndmam_avion`
--

INSERT INTO `ntrhndmam_avion` (`id_av`, `modèle`) VALUES
(1, 'Cessna 172'),
(2, 'Piper PA-28'),
(3, 'Beechcraft Bonanza');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ntrhndmam_reservation`
--

INSERT INTO `ntrhndmam_reservation` (`id_resa`, `_date`, `id_av`, `id_pil`, `id_ad`) VALUES
(1, '2023-12-01', 1, 1, 1),
(2, '2023-12-02', 2, 2, 2);

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

--
-- Déchargement des données de la table `ntrhndmam_staffs`
--

INSERT INTO `ntrhndmam_staffs` (`id_staff`, `nom`, `prenom`, `email`, `mdp`, `role`, `token`, `verified`) VALUES
(1, 'Admin', 'Administrator', 'admin@email.com', 'adminpassword', 'Admin', 'admintoken', 1),
(2, 'Manager', 'Manager', 'manager@email.com', 'managerpassword', 'Manager', 'managertoken', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
