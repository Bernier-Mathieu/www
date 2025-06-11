-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 juin 2025 à 15:46
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
-- Base de données : `incroyjeux`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `Insert_Score`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Score` (IN `Score` INT, IN `User` VARCHAR(200), IN `Game_Id` INT)   INSERT INTO 
`games_scores`(`Game_Id`, `User_Id`, `Game_Score`, `When_Play`, `Chrono_Time`) 
SELECT Game_Id , User_Id ,Score,NOW(),NULL From users where Name = User$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `Game_Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`Game_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`Game_Id`, `Name`) VALUES
(1, 'Memory');

-- --------------------------------------------------------

--
-- Structure de la table `games_scores`
--

DROP TABLE IF EXISTS `games_scores`;
CREATE TABLE IF NOT EXISTS `games_scores` (
  `Partie_Id` int NOT NULL AUTO_INCREMENT,
  `Game_Id` int NOT NULL,
  `User_Id` int NOT NULL,
  `Game_Score` int NOT NULL,
  `When_Play` datetime NOT NULL,
  `Chrono_Time` varchar(20) NOT NULL,
  PRIMARY KEY (`Partie_Id`),
  KEY `User_Score` (`User_Id`),
  KEY `Game_Id` (`Game_Id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `games_scores`
--

INSERT INTO `games_scores` (`Partie_Id`, `Game_Id`, `User_Id`, `Game_Score`, `When_Play`, `Chrono_Time`) VALUES
(5, 1, 3, 0, '2025-06-11 16:14:20', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`User_Id`, `Name`, `Password`) VALUES
(2, 'test', '$2y$10$pb.b1e0YAcdoMri7MyAvjOCJ/INLlhjRqWXKK7FicadZjctowukHq'),
(3, 'Kihonen', '$2y$10$gMUcmW879T5PiS/vZsCSoO26CDasU6JscZc0TezFujx/4x/fMH/6K'),
(5, 'Ikaisu', '$2y$10$RBZS3kDYeP2XYaBF86rG.eaTv/ViXNJ75kTpRjtjS6oWq8oyOfiFK');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `games_scores`
--
ALTER TABLE `games_scores`
  ADD CONSTRAINT `games_scores_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`User_Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `games_scores_ibfk_2` FOREIGN KEY (`Game_Id`) REFERENCES `games` (`Game_Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
