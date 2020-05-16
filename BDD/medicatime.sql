-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 16 mai 2020 à 14:17
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

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

DROP TABLE IF EXISTS `medicament`;
CREATE TABLE IF NOT EXISTS `medicament` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`mid`, `nom`) VALUES
(1, 'Doliprane'),
(2, 'paracetamol');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`pid`, `nom`, `prenom`, `date_naissance`, `mail`, `mdp`) VALUES
(2, 'a', 'b', '2004-01-01', 'ab@gmail.com', '$2y$10$BWjCEU4Cha2AiTbmz.VAmuXNc2gDfX2hljkgGYONqyUVhZ3q.lq6.');

-- --------------------------------------------------------

--
-- Structure de la table `tableau`
--

DROP TABLE IF EXISTS `tableau`;
CREATE TABLE IF NOT EXISTS `tableau` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `medicament` varchar(255) NOT NULL,
  `jour` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tableau`
--

INSERT INTO `tableau` (`tid`, `medicament`, `jour`, `heure`, `dosage`) VALUES
(4, 'Doliprane', '2', '8', '500'),
(3, 'Doliprane', '1', '8', '500'),
(5, 'Doliprane', '3', '8', '500'),
(6, 'Doliprane', '1', '20', '500'),
(7, 'Doliprane', '2', '20', '500'),
(8, 'Doliprane', '3', '20', '500');

-- --------------------------------------------------------

--
-- Structure de la table `tableau_patient`
--

DROP TABLE IF EXISTS `tableau_patient`;
CREATE TABLE IF NOT EXISTS `tableau_patient` (
  `tpid` int(11) NOT NULL AUTO_INCREMENT,
  `medicament` text NOT NULL,
  `jour` text NOT NULL,
  `heure` int(11) NOT NULL,
  `dosage` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`tpid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tableau_patient`
--

INSERT INTO `tableau_patient` (`tpid`, `medicament`, `jour`, `heure`, `dosage`, `pid`) VALUES
(1, 'Doliprane', '2', 8, 500, 2),
(2, 'Doliprane', '1', 8, 500, 2),
(3, 'Doliprane', '3', 8, 500, 2),
(4, 'Doliprane', '1', 20, 500, 2),
(5, 'Doliprane', '2', 20, 500, 2),
(6, 'Doliprane', '3', 20, 500, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
