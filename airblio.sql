-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 avr. 2022 à 16:04
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `airblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `nomC` varchar(128) NOT NULL,
  `prenomC` varchar(128) NOT NULL,
  `tel` char(10) NOT NULL,
  `lieuNais` varchar(256) NOT NULL,
  `dateNais` date NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `sexe` enum('homme','femme','autre') NOT NULL,
  `mail` varchar(256) NOT NULL,
  `mdp` varchar(128) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idC`, `nomC`, `prenomC`, `tel`, `lieuNais`, `dateNais`, `adresse`, `sexe`, `mail`, `mdp`) VALUES
(1, 'Cohen', 'Léa', '0642071328', 'Stains', '2001-03-11', '16 Avenue du 2 juin 1945 Melun', 'femme', 'lea.cohen0@yahoo.com', 'admin'),
(2, 'Azoulay', 'Liat', '0654789655', 'Sarcelles', '2000-03-31', '2 Rue Saint Honoré Sarcelles ', 'femme', 'dana.azoulay@yahoo.com', 'admin'),
(3, 'Dupont', 'Marie', '0745685479', 'Paris ', '1995-04-08', '11 Rue du General de Gaulle Paris 75016', 'femme', 'marie.dupont@hotmail.fr', 'admin'),
(4, 'Fred', 'Dupres', '0715243698', 'Goussainville', '2022-04-13', '15 Boulevard du Petit Houx Paris', 'homme', 'freddupres@yahoo.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCom` int(11) NOT NULL AUTO_INCREMENT,
  `dateCreation` date NOT NULL,
  `type` enum('Nouvelle installation','Maintenance','Intervention urgente') NOT NULL,
  `dateSouhaitee` date NOT NULL,
  `etat` enum('EN_ATTENTE','ACCEPTEE','ANNULEE','TERMINEE','ENCOURS') NOT NULL,
  `devisAccept` tinyint(1) NOT NULL,
  `idC` int(11) NOT NULL,
  `idInter` int(11) NOT NULL,
  `idEmp` int(11) NOT NULL,
  `idSite` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  PRIMARY KEY (`idCom`),
  KEY `FK_idC` (`idC`),
  KEY `FK_Inter2` (`idInter`),
  KEY `FK_Emp1` (`idEmp`),
   KEY `FK_Site` (`idSite`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCom`, `dateCreation`, `type`, `dateSouhaitee`, `etat`, `devisAccept`, `idC`, `idInter`, `idEmp`, `Description`) VALUES
(1, '2022-04-04', 'Nouvelle installation', '2022-06-16', 'ENCOURS', 1, 1, 1, 1, ''),
(2, '2022-03-01', 'Maintenance', '2022-06-01', 'ENCOURS', 1, 2, 1, 2, ''),
(3, '2022-03-22', 'Nouvelle installation', '2022-06-07', 'ENCOURS', 0, 1, 2, 2, ''),
(4, '2022-03-15', 'Intervention urgente', '2022-07-19', 'ENCOURS', 1, 2, 2, 3, ''),
(5, '2022-04-03', 'Maintenance', '2022-06-10', 'ENCOURS', 0, 4, 2, 4, ''),
(6, '2022-04-10', 'Maintenance', '2022-06-09', 'ENCOURS', 1, 3, 3, 4, ''),
(7, '2022-02-07', 'Maintenance', '2022-06-09', 'ANNULEE', 0, 4, 1, 1, ''),
(8, '2022-03-16', 'Nouvelle installation', '2022-06-23', 'ACCEPTEE', 1, 2, 1, 3, ''),
(9, '2022-04-04', 'Intervention urgente', '2022-05-18', 'EN_ATTENTE', 0, 3, 1, 3, ''),
(10, '2022-05-25', 'Maintenance', '2022-06-08', 'TERMINEE', 1, 4, 2, 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `idCom` int(11) NOT NULL,
  `idEmp` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `liendevis` date NOT NULL,
  `idDevis` int(11) NOT NULL,
  UNIQUE KEY `Devis_Unique` (`idCom`,`idEmp`,`idDevis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employé`
--

DROP TABLE IF EXISTS `employé`;
CREATE TABLE IF NOT EXISTS `employé` (
  `idEmp` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` enum('commercial','financier','Resp technique') NOT NULL,
  `idEq` int(11) NOT NULL,
  PRIMARY KEY (`idEmp`),
  KEY `FK_IDEq` (`idEq`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employé`
--

INSERT INTO `employé` (`idEmp`, `userName`, `password`, `type`, `idEq`) VALUES
(1, 'Ocloo', 'hello', 'financier', 1),
(2, 'Bendriem', 'admin', 'Resp technique', 2),
(3, 'Standler', 'admin', 'financier', 1),
(4, 'Fell', 'admin', 'commercial', 2);

-- --------------------------------------------------------

--
-- Structure de la table `entrepot`
--

DROP TABLE IF EXISTS `entrepot`;
CREATE TABLE IF NOT EXISTS `entrepot` (
  `idEntrepot` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `idSite` int(11) NOT NULL,
  PRIMARY KEY (`idEntrepot`),
  KEY `FK_IDSite` (`idSite`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entrepot`
--

INSERT INTO `entrepot` (`idEntrepot`, `nom`, `idSite`) VALUES
(1, 'Entrepot 1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipeintervention`
--

DROP TABLE IF EXISTS `equipeintervention`;
CREATE TABLE IF NOT EXISTS `equipeintervention` (
  `idEq` int(11) NOT NULL AUTO_INCREMENT,
  `dateCréation` date NOT NULL,
  `idSite` int(11) NOT NULL,
  PRIMARY KEY (`idEq`),
  KEY `FK_Site1` (`idSite`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipeintervention`
--

INSERT INTO `equipeintervention` (`idEq`, `dateCréation`, `idSite`) VALUES
(1, '2022-05-13', 1),
(2, '2019-12-04', 2),
(3, '2020-04-16', 1),
(4, '2017-04-12', 2),
(5, '2019-06-07', 2);

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

DROP TABLE IF EXISTS `intervention`;
CREATE TABLE IF NOT EXISTS `intervention` (
  `idInter` int(11) NOT NULL AUTO_INCREMENT,
  `dateDébut` date NOT NULL,
  `dateFin` date NOT NULL,
  `lienFicheIntervention` varchar(256) NOT NULL,
  `procédure` varchar(256) NOT NULL,
  `profondeur` double NOT NULL,
  `nbHréel` int(11) NOT NULL,
  `idCom` int(11) NOT NULL,
  `idEq` int(11) NOT NULL,
  PRIMARY KEY (`idInter`),
  KEY `FK_Com1` (`idCom`),
  KEY `FK_Eq1` (`idEq`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `intervention`
--

INSERT INTO `intervention` (`idInter`, `dateDébut`, `dateFin`, `lienFicheIntervention`, `procédure`, `profondeur`, `nbHréel`, `idCom`, `idEq`) VALUES
(1, '2022-06-16', '2022-06-19', '/', '/', 0, 28, 1, 1),
(2, '2022-06-02', '2022-06-10', '/', '/', 0, 100, 2, 2),
(3, '2019-07-22', '2022-07-23', '/', '/', 0, 17, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
CREATE TABLE IF NOT EXISTS `materiel` (
  `refMat` int(11) NOT NULL AUTO_INCREMENT,
  `nomMat` varchar(256) NOT NULL,
  `typeMat` enum('AIRBLIOBASE','AIRBLIOSONAR','AIRBLIOSOUDURE','AIRBLIOSOUDURE','AIRBLIOSCANNER','AIRBLIOMICROSCOPE') NOT NULL,
  `dateAcquis` date NOT NULL,
  `finValidite` date NOT NULL,
  `nbVerifAnnuel` int(11) NOT NULL,
  PRIMARY KEY (`refMat`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`refMat`, `nomMat`, `typeMat`, `dateAcquis`, `finValidite`, `nbVerifAnnuel`) VALUES
(1, 'Compresseurs', 'AIRBLIOBASE', '2022-02-09', '2023-04-11', 3),
(2, 'Robinetteries', 'AIRBLIOSOUDURE', '2022-03-09', '2023-07-11', 2),
(3, 'Accessoires', 'AIRBLIOSCANNER', '2022-01-09', '2023-08-17', 3),
(4, 'Support surface', 'AIRBLIOSONAR', '2022-01-10', '2023-10-19', 2),
(5, 'Matériel médical ', 'AIRBLIOMICROSCOPE', '2022-04-01', '2023-04-19', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

DROP TABLE IF EXISTS `sites`;
CREATE TABLE IF NOT EXISTS `sites` (
  `idSite` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `denomination` varchar(256) NOT NULL,
  `idEntrepot` int(11) NOT NULL,
  PRIMARY KEY (`idSite`),
  KEY `FK_IDEntrepot` (`idEntrepot`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`idSite`, `latitude`, `longitude`, `denomination`, `idEntrepot`) VALUES
(1, 0, 0, '/', 1),
(2, 0, 0, '/', 1),
(3, 0, 0, '/', 1);

-- --------------------------------------------------------

--
-- Structure de la table `traitercommande`
--

DROP TABLE IF EXISTS `traitercommande`;
CREATE TABLE IF NOT EXISTS `traitercommande` (
  `idCom` int(11) NOT NULL,
  `idEmp` int(11) NOT NULL,
  `idTrait` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `date` date NOT NULL,
  UNIQUE KEY `Trait_Unique` (`idCom`,`idEmp`,`idTrait`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
