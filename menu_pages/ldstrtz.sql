-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 mai 2025 à 00:51
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ldstrtz`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `produitId` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `thumb` varchar(150) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`produitId`, `name`, `thumb`, `prix`, `description`) VALUES
(1, 'Playboi Carti IAM MUSIC White Shirt', '../../images/shop_merch/iammusic_shirt.png', 60, 'Simple White Oversized T-Shirt, Black High Quality \'IAM MUSIC\' Print '),
(3, 'Opuim Black Hoodie', '../../images/shop_merch/opuim_hoodie.png', 65, 'Black Oversized Hoodie With The Black Opuim Logo High Print'),
(4, 'Opuim Black Shirt Longsleeves', '../../images/shop_merch/opuim_longsleeve.png', 65, 'Black Long Sleeves T-Shirt With The White Opuim High Quality Print'),
(5, 'Bully White Shirt Longsleeves', '../../images/shop_merch/bully_longsleeve.png', 45, 'White Oversized Long Sleeves T-Shirt With BULLY Album Cover High Quality Print'),
(6, 'Bully Grey Hoodie', '../../images/shop_merch/bully_hoodie.png', 50, 'Grey Oversized Hoodie Speacial Format With BULLY Logo High Quality Print'),
(7, 'Bully Black Shirt', '../../images/shop_merch/bully_shirt.png', 45, 'Black Oversized T-Shirt With The BULLY Logo High Quality Print'),
(8, 'Jackboys 2 Cap', '../../images/shop_merch/jb2_cap.png', 55, 'Black Vanished Cap With JACKBOYS 2 Logo Highly Embroidered'),
(9, 'Jackboys 2 Shirt', '../../images/shop_merch/jb2_shirt.png', 65, 'Brown Oversized Washed Vanished T-Shirt With The JACKBOYS Logo High Quality Print'),
(10, 'Jackboys 2 Longsleeves Shirt', '../../images/shop_merch/jb2_long_sleeve.png', 70, 'Brown Oversized Washed Vanished T-Shirt With The JACKBOYS Logo High Quality Print, Prints On The Sleeves');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`produitId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `produitId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
