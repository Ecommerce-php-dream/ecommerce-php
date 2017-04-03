-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 03 Avril 2017 à 11:42
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e_com`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image`, `price`, `quantity`) VALUES
(1, 'Zaes Nadiem', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?45631', '777.00', '19'),
(2, 'Bell Price', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?45633', '84.00', '21'),
(3, 'Carey Kertzmann', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?72439', '84.00', '21'),
(4, 'Prof. Glenda Harber', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?52309', '84.00', '21'),
(5, 'Astrid Adams', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?50002', '84.00', '21'),
(6, 'Brooke Wintheiser II', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?31085', '84.00', '21'),
(7, 'Lynn Wiza', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?61367', '84.00', '21'),
(8, 'Brielle Blanda', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?21675', '84.00', '21'),
(9, 'Sid Roob', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?45267', '84.00', '21'),
(10, 'Giles Jerde', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?27956', '84.00', '21'),
(11, 'Sid Roob', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?45267', '84.00', '21'),
(12, 'Giles Jerde', 'Quia quidem est provident et illum impedit occaecati.', 'http://lorempixel.com/640/480/?27956', '84.00', '21');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `role`, `registered_at`, `password`) VALUES
(1, 'remi', 'remi.pouly@free.fr', '', '0000-00-00 00:00:00', '123456'),
(6, 'remi.pouly', 'remi59.pouly@free.fr', 'customer', '2017-03-31 15:46:33', '$2y$10$nfdzSIcZb3ZxU.fxVI7j1Ojhix04Wud2xqEXRuPQ.uVJE1zQ2BvTu');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
