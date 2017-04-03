-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 03 Avril 2017 à 15:54
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
(1, 'Aston Martin', 'Quia quidem est provident et illum impedit occaecati.', 'https://europeluxurycarhire.fr/sites/default/files/images/cars/aston-martin-db9-1.jpg', '777.00', '19'),
(2, 'BMW', 'Quia quidem est provident et illum impedit occaecati.', 'http://occasion.largus.fr/img/big/3112723_47090315_9.jpg', '84.00', '21'),
(3, 'Lamborghini', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.annonce-voiture-occasion-neuf.com/public/img/medium/LAMBORGHINI-Huracan-1061.jpg', '84.00', '21'),
(4, 'Ferrari', 'Quia quidem est provident et illum impedit occaecati.', 'http://p9.storage.canalblog.com/97/26/703260/49411072.jpg', '84.00', '21'),
(5, 'Pagani', 'Quia quidem est provident et illum impedit occaecati.', 'http://aws-cf.caradisiac.com/prod/uploads/200602/tex_mex_1140773164_2006_pagani_zonda_roadster_s_1280x960.jpg', '84.00', '21'),
(6, 'Audi', 'Quia quidem est provident et illum impedit occaecati.', 'https://s-media-cache-ak0.pinimg.com/736x/b0/ef/76/b0ef769f491d04fe797485f4552691f1.jpg', '84.00', '21'),
(7, 'Citroen', 'Quia quidem est provident et illum impedit occaecati.', 'http://residencesaintleger.r.e.pic.centerblog.net/r2a78xpp.jpg', '84.00', '21'),
(8, 'Alfa Romeo', 'Quia quidem est provident et illum impedit occaecati.', 'https://3.bp.blogspot.com/-_THF3lfjNv8/WGoTC1Xr6II/AAAAAAABuwo/QUzGo1avXy8nwUGit9Rh-wSrP9Hi-3tiQCLcB/s640/1014126_10201497709873578_799497964_n.jpg', '84.00', '21'),
(9, 'Volkswagen', 'Quia quidem est provident et illum impedit occaecati.', 'https://s-media-cache-ak0.pinimg.com/originals/51/a3/5b/51a35b91f13b42456b62332c3348d894.jpg', '84.00', '21'),
(10, 'Renault', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.ctai-sellerie-collection.com/accueil/myPhotos/3_8DC0EB153C.jpg', '84.00', '21'),
(11, 'Jaguar', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.antiqbrocdelatour.com/Les-collections/voitures-anciennes/1-images/Jaguar%20XK%20140%201956.jpg', '84.00', '21'),
(12, 'Porsche', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.antiqbrocdelatour.com/Les-collections/voitures-anciennes/1-images/Porsche%20356%201959.jpg', '84.00', '21'),
(13, 'Chevrolet', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.uscars-technologie.com/photo-voiture-americaine/CARDIFF_ECOCARS77_936_1.jpg', '84.00', '21'),
(14, 'Cadillac', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.chevelle.fr/chevelle.fr/photo/Images_autos/Article_Anecdote/Chasseur_Anciennes_epaves/Epaves_us_divers/10.jpg', '84.00', '21'),
(15, 'Shelby', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.voitures-americaines.com/wp-content/uploads/2016/08/39882_dwWqBSullK.jpg?i=1', '84.00', '21'),
(16, 'Camaro', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.uscars-technologie.com/photo-voiture-americaine/CARDIFF_ECOCARS77_388_2.jpg', '84.00', '21'),
(17, 'Ford', 'Quia quidem est provident et illum impedit occaecati.', 'http://www.americanv8legend.com/images/cars/ford/mustang_003/ford_mustang_003_a.jpg', '84.00', '21'),
(18, 'Dodge', 'Quia quidem est provident et illum impedit occaecati.', 'http://misc.caramericaine.fr/photos/695/1.jpeg', '84.00', '21');

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
(11, 'test', 'test@test.com', 'customer', '2017-04-03 15:16:55', '$2y$10$Y5.sQq2W7R2gvSeJ4z5p7.wz4UM/xWErmjiMWUE125xAmG7/0kF1S');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
