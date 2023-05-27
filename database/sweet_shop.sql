-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour sweet_shop
CREATE DATABASE IF NOT EXISTS `sweet_shop` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sweet_shop`;

-- Listage de la structure de table sweet_shop. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table sweet_shop.categorie : ~4 rows (environ)
DELETE FROM `categorie`;
INSERT INTO `categorie` (`id`, `nom`) VALUES
	(1, 'hommes'),
	(2, 'femmes'),
	(3, 'enfants'),
	(4, 'marques');

-- Listage de la structure de table sweet_shop. client
CREATE TABLE IF NOT EXISTS `client` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_compte` bigint unsigned NOT NULL,
  `nom` varchar(50) NOT NULL DEFAULT '',
  `prenom` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `age` int unsigned NOT NULL,
  `description` varchar(1000) NOT NULL DEFAULT '',
  KEY `id` (`id`),
  KEY `Index 2` (`id_compte`,`email`),
  CONSTRAINT `id_compte` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table sweet_shop.client : ~1 rows (environ)
DELETE FROM `client`;
INSERT INTO `client` (`id`, `id_compte`, `nom`, `prenom`, `email`, `age`, `description`) VALUES
	(1, 1, 'MeKA', '', 'ng@gmail.com', 21, 'j\'aime coder.');

-- Listage de la structure de table sweet_shop. compte
CREATE TABLE IF NOT EXISTS `compte` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table sweet_shop.compte : ~1 rows (environ)
DELETE FROM `compte`;
INSERT INTO `compte` (`id`, `email`, `password`) VALUES
	(1, 'ng@gmail.com', 'ng12345');

-- Listage de la structure de table sweet_shop. paniers
CREATE TABLE IF NOT EXISTS `paniers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_client` bigint unsigned NOT NULL,
  `id_produit` bigint unsigned NOT NULL,
  `qte` int unsigned NOT NULL DEFAULT '0',
  KEY `panier_id` (`id`),
  KEY `id_client_panier` (`id_client`),
  KEY `id_produit_panier` (`id_produit`),
  CONSTRAINT `id_client_panier` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_produit_panier` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table sweet_shop.paniers : ~1 rows (environ)
DELETE FROM `paniers`;
INSERT INTO `paniers` (`id`, `id_client`, `id_produit`, `qte`) VALUES
	(1, 1, 1, 2);

-- Listage de la structure de table sweet_shop. produits
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_categorie` bigint unsigned NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(50) NOT NULL,
  KEY `primaire` (`id`),
  KEY `unique` (`image`),
  KEY `FK_produits_categorie` (`id_categorie`),
  CONSTRAINT `FK_produits_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table sweet_shop.produits : ~23 rows (environ)
DELETE FROM `produits`;
INSERT INTO `produits` (`id`, `id_categorie`, `nom`, `prix`, `image`) VALUES
	(4, 1, 'air-nike', 15000, '20230509_054042.jpg'),
	(5, 1, 'air-nike', 14000, '20230509_053549.jpg'),
	(6, 1, 'air-nike', 18000, '20230509_053549.jpg'),
	(7, 1, 'air-jordan', 18000, '20230509_053855.jpg'),
	(8, 1, 'air-jordan', 18000, '20230509_053855.jpg'),
	(9, 1, 'air-jordan', 10000, '20230509_053744.jpg'),
	(10, 1, 'pattern-creation', 15000, 'anfibio-ondina-logo-4g-peony.webp'),
	(11, 1, 'sprint-trekker', 15000, '20230509_054503.jpg'),
	(12, 1, 'classic-royal', 20000, 'montante2.jpg'),
	(13, 1, 'classig-royal-flag_004', 10000, 'puma.jpg'),
	(14, 1, 'puma', 9000, 'puma1.jpg'),
	(15, 1, 'puma', 10000, 'puma2.jpg'),
	(16, 2, 'authentique', 30000, '1.jpg'),
	(17, 2, 'jamlucy', 12000, '2.jpg'),
	(18, 2, 'escarpin', 20000, '3.jpg'),
	(19, 2, 'jumia', 30000, '4.jpg'),
	(20, 3, 'authentique', 2000, '5.jpg'),
	(21, 3, 'jamlucy', 10000, '6.jpg'),
	(22, 3, 'naomi', 12000, '7.jpg'),
	(23, 4, 'puma', 12000, '8.png'),
	(24, 4, 'reebook', 15000, '9.png'),
	(25, 4, 'le coq sportif', 30000, '10.jpg'),
	(26, 4, 'timberland', 25000, '11.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
