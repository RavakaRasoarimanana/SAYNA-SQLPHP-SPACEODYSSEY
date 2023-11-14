-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 14 nov. 2023 à 18:53
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
-- Base de données : `planètes`
--

-- --------------------------------------------------------

--
-- Structure de la table `astronaute`
--

DROP TABLE IF EXISTS `astronaute`;
CREATE TABLE IF NOT EXISTS `astronaute` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Santé` enum('bon','malade','décédé') NOT NULL,
  `Taille` float NOT NULL,
  `Poids` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `astronaute`
--

INSERT INTO `astronaute` (`ID`, `Nom`, `Santé`, `Taille`, `Poids`) VALUES
(1, 'Apollo Pollis', 'bon', 170, 80);

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Vaisseaux` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Astronautes` varchar(255) NOT NULL,
  `Planètes` varchar(255) NOT NULL,
  `Début` date DEFAULT NULL,
  `Fin` date DEFAULT NULL,
  `Status` enum('Finie','En_cours','En_préparation','Abandonnée') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`ID`, `Nom`, `Vaisseaux`, `Astronautes`, `Planètes`, `Début`, `Fin`, `Status`) VALUES
(1, 'CELESTIAL ODISSEY', 'WEST COAST', 'Ethan Nova\r\nApollo Sollis', 'Mars', '2051-11-23', '2063-12-20', 'En_cours');

-- --------------------------------------------------------

--
-- Structure de la table `planète`
--

DROP TABLE IF EXISTS `planète`;
CREATE TABLE IF NOT EXISTS `planète` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Circonférence` float NOT NULL,
  `Distance` float NOT NULL,
  `Documentation` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `planète`
--

INSERT INTO `planète` (`ID`, `Nom`, `Circonférence`, `Distance`, `Documentation`) VALUES
(1, 'Mercure', 15329, 77000000, 'Planète la plus proche dus soleil'),
(2, 'Mars', 15326, 44000000, 'Planète rouge'),
(3, 'Terre', 3222, 1200, 'Habitat de l\'homme');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
