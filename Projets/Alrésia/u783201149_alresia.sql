-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 jan. 2023 à 13:21
-- Version du serveur : 10.5.13-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u783201149_alresia`
--

-- --------------------------------------------------------

--
-- Structure de la table `histoires`
--

CREATE TABLE `histoires` (
  `id_histoire` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Notes`
--

CREATE TABLE `Notes` (
  `id_notes` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id` int(20) NOT NULL,
  `pseudo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` int(1) NOT NULL,
  `Avatar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`id`, `pseudo`, `mdp`, `Description`, `statut`, `Avatar`) VALUES
(3, 'math', '123', 'gdfgdgdfgdg <br> \r\njhggdfg', 0, 'math.jpeg'),
(6, 'Ikaïsu', 'EDAJhu2003@', 'Le shasha de mon tit coeur :3', 1, 'Ikaïsu.jpg'),
(11, 'Kihonen', 'nounours2001', 'je suis le créateur', 1, 'Kihonen.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `histoires`
--
ALTER TABLE `histoires`
  ADD PRIMARY KEY (`id_histoire`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Index pour la table `Notes`
--
ALTER TABLE `Notes`
  ADD PRIMARY KEY (`id_notes`),
  ADD KEY `secondary` (`id_user`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `histoires`
--
ALTER TABLE `histoires`
  MODIFY `id_histoire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `Notes`
--
ALTER TABLE `Notes`
  MODIFY `id_notes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `histoires`
--
ALTER TABLE `histoires`
  ADD CONSTRAINT `histoires_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Utilisateurs` (`id`);

--
-- Contraintes pour la table `Notes`
--
ALTER TABLE `Notes`
  ADD CONSTRAINT `Notes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
