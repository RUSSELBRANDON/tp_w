-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Mai 2023 à 13:51
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `store_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `num_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `nbre_articles` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`num_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `mot_de_passe` varchar(20) NOT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `correspondre`
--

CREATE TABLE IF NOT EXISTS `correspondre` (
  `num_commande` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(12) NOT NULL,
  PRIMARY KEY (`num_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `reference` varchar(12) NOT NULL,
  `nom_produit` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nom_users` varchar(20) NOT NULL,
  `email` varchar(12) NOT NULL,
  `mot_de_passe` varchar(12) NOT NULL,
  `date_enregistrement` int(11),
  `num_commande` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
