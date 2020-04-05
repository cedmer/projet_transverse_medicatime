-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 05 avr. 2020 à 20:28
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `medicatime`
--

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `mid` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`mid`, `nom`) VALUES
(1, 'Doliprane'),
(2, 'paracetamol');

-- --------------------------------------------------------

--
-- Structure de la table `tableau`
--

CREATE TABLE `tableau` (
  `tid` int(11) NOT NULL,
  `medicament` varchar(255) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tableau`
--

INSERT INTO `tableau` (`tid`, `medicament`, `jour`, `heure`, `dosage`) VALUES
(1, 'kjj', '1', '8', '75'),
(2, 'kjj', '2', '8', '75'),
(3, 'kjj', '3', '8', '75'),
(4, 'kjj', '4', '8', '75'),
(5, 'kjj', '5', '8', '75'),
(6, 'kjj', '6', '8', '75'),
(7, 'kjj', '7', '8', '75'),
(8, 'kjj', '1', '10', '75'),
(9, 'kjj', '2', '10', '75'),
(10, 'kjj', '3', '10', '75'),
(11, 'kjj', '4', '10', '75'),
(12, 'kjj', '5', '10', '75'),
(13, 'kjj', '6', '10', '75'),
(14, 'kjj', '7', '10', '75'),
(15, 'kjj', '1', '12', '75'),
(16, 'kjj', '2', '12', '75'),
(17, 'kjj', '3', '12', '75'),
(18, 'kjj', '4', '12', '75'),
(19, 'kjj', '5', '12', '75'),
(20, 'kjj', '6', '12', '75'),
(21, 'kjj', '7', '12', '75'),
(22, 'kjj', '1', '14', '75'),
(23, 'kjj', '2', '14', '75'),
(24, 'kjj', '3', '14', '75'),
(25, 'kjj', '4', '14', '75'),
(26, 'kjj', '5', '14', '75'),
(27, 'kjj', '6', '14', '75'),
(28, 'kjj', '7', '14', '75'),
(29, 'kjj', '1', '16', '75'),
(30, 'kjj', '2', '16', '75'),
(31, 'kjj', '3', '16', '75'),
(32, 'kjj', '4', '16', '75'),
(33, 'kjj', '5', '16', '75'),
(34, 'kjj', '6', '16', '75'),
(35, 'kjj', '7', '16', '75'),
(36, 'kjj', '1', '18', '75'),
(37, 'kjj', '2', '18', '75'),
(38, 'kjj', '3', '18', '75'),
(39, 'kjj', '4', '18', '75'),
(40, 'kjj', '5', '18', '75'),
(41, 'kjj', '6', '18', '75'),
(42, 'kjj', '7', '18', '75'),
(43, 'kjj', '1', '20', '75'),
(44, 'kjj', '2', '20', '75'),
(45, 'kjj', '3', '20', '75'),
(46, 'kjj', '4', '20', '75'),
(47, 'kjj', '5', '20', '75'),
(48, 'kjj', '6', '20', '75'),
(49, 'kjj', '7', '20', '75'),
(50, 'kjj', '1', '22', '75'),
(51, 'kjj', '2', '22', '75'),
(52, 'kjj', '3', '22', '75'),
(53, 'kjj', '4', '22', '75'),
(54, 'kjj', '5', '22', '75'),
(55, 'kjj', '6', '22', '75'),
(56, 'kjj', '7', '22', '75');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`mid`);

--
-- Index pour la table `tableau`
--
ALTER TABLE `tableau`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tableau`
--
ALTER TABLE `tableau`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
