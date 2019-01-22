-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 18 jan. 2019 à 10:33
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(3) NOT NULL,
  `id_membre` int(3) DEFAULT NULL,
  `montant` int(3) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('en cours de traitement','envoyé','livré') NOT NULL DEFAULT 'en cours de traitement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_membre`, `montant`, `date_enregistrement`, `etat`) VALUES
(1, 1, 40, '2019-01-14 16:17:59', 'en cours de traitement'),
(2, 1, 40, '2019-01-14 16:18:32', 'en cours de traitement'),
(3, 1, 245, '2019-01-14 16:20:57', 'en cours de traitement'),
(4, 1, 60, '2019-01-14 16:22:57', 'en cours de traitement'),
(5, 1, 110, '2019-01-14 16:24:53', 'en cours de traitement'),
(6, 1, 45, '2019-01-14 16:26:33', 'en cours de traitement'),
(7, 1, 45, '2019-01-14 16:26:57', 'en cours de traitement');

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id_details_commande` int(3) NOT NULL,
  `id_commande` int(3) DEFAULT NULL,
  `id_produit` int(3) DEFAULT NULL,
  `quantite` int(3) NOT NULL,
  `prix` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `details_commande`
--

INSERT INTO `details_commande` (`id_details_commande`, `id_commande`, `id_produit`, `quantite`, `prix`) VALUES
(1, 2, 7, 1, 20),
(2, 2, 14, 1, 20),
(3, 3, 5, 1, 45),
(4, 3, 13, 10, 20),
(5, 4, 7, 3, 20),
(6, 5, 5, 2, 45),
(7, 5, 7, 1, 20),
(8, 6, 5, 1, 45),
(9, 7, 5, 1, 45);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(3) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `civilite` enum('m','f') NOT NULL,
  `ville` varchar(20) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `accepter` varchar(3) DEFAULT 'off',
  `statut` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `ville`, `code_postal`, `adresse`, `accepter`, `statut`) VALUES
(1, 'kirikou', 'azerty', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, '1234 rue de la gare', 'on', 1),
(2, 'yassine', 'azerty', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(3, 'conan', 'azerty', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(4, 'Jimmy', 'azerty', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(5, 'hoho', 'okok', 'jaagoub', 'yassine', 'monemail@gmail.com', 'f', 'Poissy', 78300, 'mon adresse', 'on', 0),
(6, 'azeae', 'azeae', 'azeae', 'azeae', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(7, 'kikou', 'ab4f63f9ac65152575886860dde480a1', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(8, 'dfgdgdfg', 'a12f7c04bb65e7567e75d20e8c408bbb', 'dfgdfg', 'Houda', 'houdajaadar@gmail.com', 'f', 'sdfsfsdf', 92390, '24 rue Maurice Ravel', 'on', 0),
(9, 'sdfsf', 'xcvxvxcv', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(10, 'sdfxcvx', 'cvbcb', 'jaagoub', 'yassine', 'monemail@gmail.com', 'f', 'Poissy', 78300, 'mon adresse', 'on', 0),
(11, 'sdfsfcvvn', '$2y$10$5xEJjBsLI0nY2EMFhI02ae3M5F9jaHuh6Ju6JmkWK2YXMdueQR/AG', 'jaagoub', 'cvb', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(12, 'jonny', '$2y$10$QC0V2ssaLhpiMGLYLeBMoea3/FsbM.5HW1YtmorLFJDbquxoRAjHG', 'jonny', 'test', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(13, 'babar', 'azerty', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(14, 'lolol', '$2y$10$RwgiqLXj5tuJr43.d2BCx.PKFkgpyPaeHtiRIqR0x8SQ737nY4aGy', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0),
(15, 'donatelo', '$2y$10$PR9pSzFfjA8qBDMa6AVE0.58yzXqNiFUpqZu8/UIvHaAovBmloTda', 'jaagoub', 'yassine', 'monemail@gmail.com', 'm', 'Poissy', 78300, 'mon adresse', 'on', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(3) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `taille` varchar(5) NOT NULL,
  `public` enum('m','f','mixte') NOT NULL,
  `photo` varchar(250) NOT NULL,
  `prix` int(3) NOT NULL,
  `stock` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES
(5, '12457', 'tshirt', 'T-shirt fashion 2019 ', 'une nouvelle description', 'noir', 'm', 'f', '/site/photo/12457_Damb_Back_2a3cc4cc-06c2-488e-8918-2e7a1cde3dfc_1024x1024.jpg', 45, 14),
(7, '789461', 'chemise', 'une belle chemise', 'une chemise', 'bleu', 's', 'm', '/site/photo/789461_chch18lentre_marine-1_1.jpg', 20, 15),
(11, '012345', 'tshirt', 'T-shirt fashion 2019 ', 'un  tshirt super cool', 'vert', 'm', 'm', '/site/photo/012345_R-155B_apple_AL_listing-1.jpg', 20, 20),
(12, '78946174', 'chemise', 'une chemise', 'une belle chemise', 'bleu', 'xl', 'm', '/site/photo/78946174_téléchargement.jpg', 50, 40),
(13, '789456', 'chemise', 'une chemise', 'une belle chemise ', 'blanc', 'm', 'm', '/site/photo/789456_chemise-homme-marque-luxe-chemise-en-lin-couleur-u.jpg', 20, 30),
(14, '456127', 'chemise', 'une belle chemise', 'encore une chemise', 'gris', 's', 'm', '/site/photo/456127_chemise-italienne-pas-chere-gris-clair.jpg', 20, 19),
(15, '14578471', 'chemise', 'une belle chemise', 'encore une chemise', 'bleu', 's', 'm', '/site/photo/14578471_chemise-elie-marineblanc.jpg', 20, 20),
(16, '1457841', 'tshirt', 'T-shirt fashion 2019 ', 'un t-shirt méga cool', 'bleu', 'xl', 'm', '/site/photo/1457841_Tshirt-Bleu-flecked-rouge-face-700x904.jpg', 15, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id_details_commande`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id_details_commande` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
