-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 juil. 2018 à 22:32
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_vod[anne_portier]`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
CREATE TABLE IF NOT EXISTS `acteur` (
  `idacteur` int(11) NOT NULL,
  `nom_acteur` varchar(45) DEFAULT NULL,
  `prenom_acteur` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idacteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(45) DEFAULT NULL,
  `prenom_admin` varchar(45) DEFAULT NULL,
  `login_admin` varchar(45) DEFAULT NULL,
  `mdp_admin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ajoute`
--

DROP TABLE IF EXISTS `ajoute`;
CREATE TABLE IF NOT EXISTS `ajoute` (
  `acteur_idacteur` int(11) NOT NULL,
  `film_idfilm` int(11) NOT NULL,
  PRIMARY KEY (`acteur_idacteur`,`film_idfilm`),
  KEY `fk_acteur_has_film_film1` (`film_idfilm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `favori`
--

DROP TABLE IF EXISTS `favori`;
CREATE TABLE IF NOT EXISTS `favori` (
  `film_idfilm` int(11) NOT NULL,
  `utilisateur_iduser` int(11) NOT NULL,
  PRIMARY KEY (`film_idfilm`,`utilisateur_iduser`),
  KEY `fk_film_has_utilisateur_utilisateur1` (`utilisateur_iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `idfilm` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `resume` longtext,
  `date_sortie` date DEFAULT NULL,
  `affich` varchar(45) DEFAULT NULL,
  `ba_film` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfilm`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idfilm`, `titre`, `resume`, `date_sortie`, `affich`, `ba_film`) VALUES
(1, 'avatar', 'ezezzzezezezezez', '2018-07-08', NULL, NULL),
(3, 'azerty', 'vbnhjuik', '2018-05-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `idgenre` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idgenre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `modifie`
--

DROP TABLE IF EXISTS `modifie`;
CREATE TABLE IF NOT EXISTS `modifie` (
  `admin_idadmin` int(11) NOT NULL,
  `film_idfilm` int(11) NOT NULL,
  PRIMARY KEY (`admin_idadmin`,`film_idfilm`),
  KEY `fk_admin_has_film_film1` (`film_idfilm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `genre_idgenre` int(11) NOT NULL,
  `film_idfilm` int(11) NOT NULL,
  PRIMARY KEY (`genre_idgenre`,`film_idfilm`),
  KEY `fk_genre_has_film_film1` (`film_idfilm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

DROP TABLE IF EXISTS `realisateur`;
CREATE TABLE IF NOT EXISTS `realisateur` (
  `idreal` int(11) NOT NULL,
  `nom-real` varchar(45) DEFAULT NULL,
  `prenom_real` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idreal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `realise`
--

DROP TABLE IF EXISTS `realise`;
CREATE TABLE IF NOT EXISTS `realise` (
  `realisateur_idreal` int(11) NOT NULL,
  `film_idfilm` int(11) NOT NULL,
  PRIMARY KEY (`realisateur_idreal`,`film_idfilm`),
  KEY `fk_realisateur_has_film_film1` (`film_idfilm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(45) DEFAULT NULL,
  `prenom_user` varchar(45) DEFAULT NULL,
  `mail_user` varchar(45) DEFAULT NULL,
  `login_user` varchar(45) DEFAULT NULL,
  `mdp_user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ajoute`
--
ALTER TABLE `ajoute`
  ADD CONSTRAINT `fk_acteur_has_film_acteur1` FOREIGN KEY (`acteur_idacteur`) REFERENCES `acteur` (`idacteur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acteur_has_film_film1` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `favori`
--
ALTER TABLE `favori`
  ADD CONSTRAINT `fk_film_has_utilisateur_film1` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_film_has_utilisateur_utilisateur1` FOREIGN KEY (`utilisateur_iduser`) REFERENCES `utilisateur` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `modifie`
--
ALTER TABLE `modifie`
  ADD CONSTRAINT `fk_admin_has_film_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_admin_has_film_film1` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `fk_genre_has_film_film1` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_genre_has_film_genre` FOREIGN KEY (`genre_idgenre`) REFERENCES `genre` (`idgenre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `realise`
--
ALTER TABLE `realise`
  ADD CONSTRAINT `fk_realisateur_has_film_film1` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_realisateur_has_film_realisateur1` FOREIGN KEY (`realisateur_idreal`) REFERENCES `realisateur` (`idreal`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
