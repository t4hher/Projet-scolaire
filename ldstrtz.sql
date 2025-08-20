-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 13 juin 2025 à 16:22
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
-- Structure de la table `booking_h`
--

CREATE TABLE `booking_h` (
  `book_id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `check_in` varchar(100) DEFAULT NULL,
  `check_out` varchar(100) DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `room_type` varchar(100) DEFAULT NULL,
  `room_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `booking_h`
--

INSERT INTO `booking_h` (`book_id`, `userId`, `hotel_name`, `check_in`, `check_out`, `rooms`, `room_type`, `room_number`) VALUES
(1, 4, 'Four Seasons Hotel', '2025-06-12', '2025-06-16', 2, 'With 2 Beds', 189),
(2, 4, 'Ibis Rabat Agdal Hotel', '2025-06-14', '2025-06-18', 1, 'With 1 Bed', 72),
(3, 5, 'Rui Palace Tikida Hotel', '2025-06-21', '2025-06-24', 2, 'With 1 Large Bed', 114),
(4, 5, 'Barcelo Hotel', '2025-06-13', '2025-06-20', 2, 'With 1 Large Bed', 175);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `produitId` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `userId`, `produitId`, `full_name`, `phone`, `email`, `adresse`, `quantity`, `notes`) VALUES
(1, 4, 6, 'Tahher Darif', '0657758155', 'dariif023@gmail.com', 'Fés Bendbabb ', 2, ''),
(6, 4, 11, 'Mohamed Halim', '0622300863', '7alim@gmail.com', 'Fés Bendbabb ', 1, ''),
(7, 4, 11, 'Mehdi Benchkroun', '02459546998', 'mehdi@gmail.com', 'Hay Saada', 2, 'mat3tltch'),
(9, 4, 1, 'Mehdi Benchkroun', '0622300863', 'karimboualou@gmail.com', 'Hay Saada', 3, 'mat3tlch!!!!!'),
(10, 5, 7, 'Ali Cherqaoui', '0547895620', 'ahmed@gmail.com', 'Boujloud', 1, 'Rapidement s\'il vous plait');

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
(6, 'Vlone Blue Shirt', '../../images/shop_merch/vlone_shirt.png', 50, 'Blue Washed Oversized T-Shirt With VLONE Logo High Quality Print'),
(7, 'Vlone White Shirt', '../../images/shop_merch/vlone_white_shirt.png', 45, 'White Washed Oversized T-Shirt With The VLONE Logo High Quality Print'),
(8, 'Jackboys 2 Cap', '../../images/shop_merch/jb2_cap.png', 55, 'Black Vanished Cap With JACKBOYS 2 Logo Highly Embroidered'),
(9, 'Jackboys 2 Shirt', '../../images/shop_merch/jb2_shirt.png', 65, 'Brown Oversized Washed Vanished T-Shirt With The JACKBOYS Logo High Quality Print'),
(10, 'Jackboys 2 Longsleeves Shirt', '../../images/shop_merch/jb2_long_sleeve.png', 70, 'Brown Oversized Washed Vanished T-Shirt With The JACKBOYS Logo High Quality Print, Prints On The Sleeves'),
(11, 'Nike X Nocta Puffer Jacket', '../../images/shop_merch/nocta_puffer.png', 120, 'Light Green Puffer Jacket'),
(12, 'Nike X Nocta Hot Step 2', '../../images/shop_merch/nocta_black_hotstep2.png', 90, 'Black Nocta Hot Step 2'),
(13, 'Nike X Nocta Hot Step 2', '../../images/shop_merch/nocta_white_hotstep2.png', 95, 'White Nocta Hot Step 2');

-- --------------------------------------------------------

--
-- Structure de la table `shows`
--

CREATE TABLE `shows` (
  `id_show` int(11) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `shows`
--

INSERT INTO `shows` (`id_show`, `thumb`, `name`, `place`, `city`, `time`, `price`) VALUES
(1, 'images/asap.png', 'A$AP ROCKY - DON\'T BE DUMB Tour', 'Boujloud', 'Fés', '7:00 PM', '40'),
(2, 'images/travis.png', 'TRAVIS SCOTT - JACKBOYS 2 Tour', 'Souissi', 'Casablanca', '9:00PM', '45'),
(3, 'images/carti.png', 'PLAYBOI CARTI - I AM MUSIC Tour', 'Jamae Lfna', 'Marrakech', '7:30 PM', '40'),
(4, 'images/drake.png', 'DRAKE - $OME $EXY $ONGS 4 U Tour', 'Taghazout', 'Agadir', '8:00PM', '60'),
(5, 'images/young.png', 'YOUNG THUG&FUTURE - UY SCUTI Tour', 'Tour Hassan', 'Rabat', '8:30PM', '45'),
(6, 'images/griselda.png', 'GRISELDA - WORLDWIDE Tour', 'Mariniyin Tombs', 'Fés', '9:00PM', '55');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `id_show` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `card` varchar(50) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `userId`, `id_show`, `name`, `phone`, `email`, `card`, `payment`, `quantity`) VALUES
(1, 4, 1, 'Tahher Darif', '0657758155', 'dariif023@gmail.com', '052404879503468', 'Visa', 2),
(2, 4, 1, 'boufounass lahssan', '023156987720', 'lahssan@gmail.com', '215664887989310', 'PayPal', 3),
(3, 4, 6, 'Mehdi Benchkroun', '02459546998', 'karimboualou@gmail.com', '052404879503468', 'Visa', 2),
(4, 5, 3, 'Ahmed Cherqaoui', '0547895620', 'ahmed@gmail.com', '1122478563207815', 'Visa', 2),
(5, 5, 4, 'Mehdi Zaoui', '0657758155', 'mehdi@gmail.com', '215664887989310', 'Mastercard', 2);

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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userId`, `fullName`, `phoneNumber`, `email`, `password`) VALUES
(1, 'Tahher Darif', '0657758155', 'dariif023@gmail.com', '$2y$10$DfomoK1FL18sI1Z92eRltOzimS/JDDpIByR1ViMwTenUZtvhCEHkS'),
(2, 'Tahher Darif', '0657758155', 'dariif023@gmail.com', '$2y$10$D.ACB9SERytmWJxy8FjJ8uO./wS2E7FJI.NSwQ5Xm2hzLoITHSBJe'),
(3, 'Karim Boualou', '0657758155', 'karimboualou@gmail.com', '$2y$10$3XvYw.D52tI.elUSkEZqYegAf7jFHZOB3IxM/E33u80.OvjwfbPfG'),
(4, 'Jarrod Bowen', '0622300863', 'bowen@gmail.com', '$2y$10$nbjFFFP5XTB/wYwtImhY.eHFNzWaMpzSqEFe3Mdq7wR6Q0w45mOxa'),
(5, 'Ahmed Cherquaoui', '0547895620', 'ahmed@gmail.com', '$2y$10$zp2UMVlLUxmjaOuzDUvs5uBCrixaa3dl6blepxOP/I3TPhQBq8E92');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking_h`
--
ALTER TABLE `booking_h`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `produitId` (`produitId`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`produitId`);

--
-- Index pour la table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id_show`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `id_show` (`id_show`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking_h`
--
ALTER TABLE `booking_h`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `produitId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `shows`
--
ALTER TABLE `shows`
  MODIFY `id_show` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking_h`
--
ALTER TABLE `booking_h`
  ADD CONSTRAINT `booking_h_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`produitId`) REFERENCES `produits` (`produitId`);

--
-- Contraintes pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`id_show`) REFERENCES `shows` (`id_show`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
