-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour sweet_shop
DROP DATABASE IF EXISTS `sweet_shop`;
CREATE DATABASE IF NOT EXISTS `sweet_shop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sweet_shop`;

-- Listage de la structure de la table sweet_shop. categorie
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table sweet_shop.categorie : ~0 rows (environ)
DELETE FROM `categorie`;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `nom`) VALUES
	(1, 'all'),
	(2, 'fem'),
	(3, 'men');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table sweet_shop. produits
DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_categorie` bigint(20) unsigned NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(50) NOT NULL,
  KEY `primaire` (`id`),
  KEY `unique` (`image`),
  KEY `FK_produits_categorie` (`id_categorie`),
  CONSTRAINT `FK_produits_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table sweet_shop.produits : ~0 rows (environ)
DELETE FROM `produits`;

-- Listage de la structure de la table sweet_shop. client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_compte` bigint(20) unsigned NOT NULL,
  `nom` varchar(50) NOT NULL DEFAULT '',
  `prenom` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `age` int(10) unsigned NOT NULL,
  `description` varchar(1000) NOT NULL DEFAULT '',
  KEY `id` (`id`),
  KEY `Index 2` (`id_compte`,`email`),
  CONSTRAINT `id_compte` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table sweet_shop.client : ~0 rows (environ)
DELETE FROM `client`;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id`, `id_compte`, `nom`, `prenom`, `email`, `age`, `description`) VALUES
	(1, 1, 'MeKA', '', 'ng@gmail.com', 21, 'j\'aime coder.');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table sweet_shop. compte
DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table sweet_shop.compte : ~0 rows (environ)
DELETE FROM `compte`;
/*!40000 ALTER TABLE `compte` DISABLE KEYS */;
INSERT INTO `compte` (`id`, `email`, `password`) VALUES
	(1, 'ng@gmail.com', 'ng12345');
/*!40000 ALTER TABLE `compte` ENABLE KEYS */;

-- Listage de la structure de la table sweet_shop. paniers
DROP TABLE IF EXISTS `paniers`;
CREATE TABLE IF NOT EXISTS `paniers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_client` bigint(20) unsigned NOT NULL,
  `id_produit` bigint(20) unsigned NOT NULL,
  `qte` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `panier_id` (`id`),
  KEY `id_client_panier` (`id_client`),
  KEY `id_produit_panier` (`id_produit`),
  CONSTRAINT `id_client_panier` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_produit_panier` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table sweet_shop.paniers : ~0 rows (environ)
DELETE FROM `paniers`;
/*!40000 ALTER TABLE `paniers` DISABLE KEYS */;
INSERT INTO `paniers` (`id`, `id_client`, `id_produit`, `qte`) VALUES
	(1, 1, 1, 2);
/*!40000 ALTER TABLE `paniers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
