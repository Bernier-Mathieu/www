-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 nov. 2024 à 21:18
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jdr&rp`
--

-- --------------------------------------------------------

--
-- Structure de la table `histoire`
--

DROP TABLE IF EXISTS `histoire`;
CREATE TABLE IF NOT EXISTS `histoire` (
  `N_Histoire` int NOT NULL AUTO_INCREMENT,
  `N_Perso` int NOT NULL,
  `Nom_Chapitre` varchar(200) NOT NULL,
  `Texte` text NOT NULL,
  PRIMARY KEY (`N_Histoire`),
  KEY `N_Perso` (`N_Perso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `N_image` int NOT NULL AUTO_INCREMENT,
  `N_perso` int NOT NULL,
  `Chemin` varchar(500) NOT NULL,
  `Statut` varchar(50) NOT NULL,
  PRIMARY KEY (`N_image`),
  KEY `N_perso` (`N_perso`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`N_image`, `N_perso`, `Chemin`, `Statut`) VALUES
(1, 1, '../Images/Kanade/Kanade.Gif', 'Selection');

-- --------------------------------------------------------

--
-- Structure de la table `perso`
--

DROP TABLE IF EXISTS `perso`;
CREATE TABLE IF NOT EXISTS `perso` (
  `N_Perso` int NOT NULL AUTO_INCREMENT,
  `N_univers` int NOT NULL,
  `Prenom` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Nom` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Type` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Surnom` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Naissance` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Organisation` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Sexe` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Race` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Attirance_Sexe` varchar(500) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Age` int NOT NULL,
  `GifPerso` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`N_Perso`),
  KEY `N_univers` (`N_univers`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `perso`
--

INSERT INTO `perso` (`N_Perso`, `N_univers`, `Prenom`, `Nom`, `Type`, `Surnom`, `Naissance`, `Organisation`, `Sexe`, `Race`, `Attirance_Sexe`, `Age`, `GifPerso`) VALUES
(1, 1, 'Kanade', 'Otonashi', 'Clandestin', 'Little Angel', '1er Janvier', 'White Lotus', 'Femme', 'Humaine', 'Lesbienne', 17, 'Kanade.Gif');

-- --------------------------------------------------------

--
-- Structure de la table `proche`
--

DROP TABLE IF EXISTS `proche`;
CREATE TABLE IF NOT EXISTS `proche` (
  `N_Proche` int NOT NULL AUTO_INCREMENT,
  `N_Perso` int NOT NULL,
  `Nom_Proche` varchar(100) NOT NULL,
  `Prenom_Proche` int NOT NULL,
  `Age_Proche` int NOT NULL,
  `Naissance_Proche` int NOT NULL,
  `Pouvoir_name_Proche` varchar(100) NOT NULL,
  `Pouvoir_Proche` text NOT NULL,
  `Histoire_Proche` text NOT NULL,
  `Statut_Proche` varchar(100) NOT NULL,
  PRIMARY KEY (`N_Proche`),
  KEY `N_Perso` (`N_Perso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `univers`
--

DROP TABLE IF EXISTS `univers`;
CREATE TABLE IF NOT EXISTS `univers` (
  `N_univers` int NOT NULL AUTO_INCREMENT,
  `Nom_univers` varchar(100) NOT NULL,
  PRIMARY KEY (`N_univers`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `univers`
--

INSERT INTO `univers` (`N_univers`, `Nom_univers`) VALUES
(1, 'mha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
