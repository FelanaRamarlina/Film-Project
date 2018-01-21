-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 18 jan. 2018 à 22:03
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `eboutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(10) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `libelle`) VALUES
(1, 'Action'),
(2, 'Horreur'),
(3, 'Comédie'),
(4, 'Aventure'),
(5, 'Drame');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `date_achat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id_user`, `id_produit`, `date_achat`) VALUES
(7, 1, '2018-01-18');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_user` int(3) NOT NULL,
  `id_produit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(5) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `id_categorie` int(5) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `photos` text(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `libelle`, `id_categorie`, `prix`, `photos`) VALUES
(1, 'Insidious', 2, 8, 'insidious.jpg'),
(2, 'Get out', 5, 10,'getout.jpg'),
(3, 'CA', 2, 12,'%C3%A7a.jpg'),
(4, 'Girls Trip', 3, 10,'girls.jpg'),
(5, 'Kiss & Cry', 3, 10,'kiss.jpg'),
(6, 'Kingsman', 1, 15,'kingsman.jpg'),
(7, 'Alice APM', 4, 10,'alice.jpg'),
(8, 'The Revenant', 5, 15,'revenant.jpg'),
(9, 'Baby Driver', 1, 12,'baby.jgp'),
(10, 'Valerian', 4, 10,'valerian.jpg'),
(11, 'Alibi.com', 3, 12,'alibi.jpg'),
(12, 'Demolition', 5, 10,'demolition');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `firstName`, `lastName`, `address`, `postalCode`, `city`, `admin`) VALUES
(5, 'nicolas.sabak@gmail.com', 'f602b1f5291b69797729737e555e89f5', '', '', '', '', '', 0),
(6, 'patrick.nollet@gmail.com', '15ea39aa99398a25b57c9d382aadf80e', 'patrick', 'nollet', '1 rue de jussieu', '75005', 'Paris', 0),
(7, 'fefe@hotmail.fr', '084fe8aecafea8b2f84cca493377eb9b', 'Ramarlina', 'Felana', '13 rue michel goutthier', '94380', 'Bonneuil', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD KEY `historique_ibfk_1` (`id_user`),
  ADD KEY `historique_ibfk_2` (`id_produit`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `produit_ibfk_1` (`id_categorie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `historique_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `historique_ibfk_2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `produit`
--
 -- ALTER TABLE `produit`
--  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_cat`);
