-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 13 mai 2024 à 17:16
-- Version du serveur : 5.7.24
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boop_adventure`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(100) NOT NULL,
  `Pseudo` varchar(200) NOT NULL,
  `Passwords` varchar(300) NOT NULL,
  `Mail` varchar(200) NOT NULL,
  `Paye` tinyint(1) NOT NULL DEFAULT '0',
  `Pouce` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `Pseudo`, `Passwords`, `Mail`, `Paye`, `Pouce`) VALUES
(1, 'Vico', 'vico', 'kuchpet.vic@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_com` int(100) NOT NULL,
  `Mail` text NOT NULL,
  `Texte` text NOT NULL,
  `Pouce` int(100) NOT NULL,
  `UnPouce` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_com`, `Mail`, `Texte`, `Pouce`, `UnPouce`) VALUES
(1, 'kuchpet.vic@gmail.com', 'cacacacacacaccacaa', 1122, 12424),
(2, 'kuchpet.vic@gmail.com', 'dazazfzafzergherthtershehhgr', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `patch`
--

CREATE TABLE `patch` (
  `id_patch` int(100) NOT NULL,
  `Nom` text NOT NULL,
  `Texte` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patch`
--

INSERT INTO `patch` (`id_patch`, `Nom`, `Texte`, `Date`) VALUES
(1, 'Correction de bugs', 'Apud has gentes, quarum exordiens initium ab Assyriis ad Nili cataractas porrigitur et confinia Blemmyarum, omnes pari sorte sunt bellatores seminudi coloratis sagulis pube tenus amicti, equorum adiumento pernicium graciliumque camelorum per diversa se raptantes, in tranquillis vel turbidis rebus: nec eorum quisquam aliquando stivam adprehendit vel arborem colit aut arva subigendo quaeritat victum, sed errant semper per spatia longe lateque distenta sine lare sine sedibus fixis aut legibus: nec idem perferunt diutius caelum aut tractus unius soli illis umquam placet.', '2024-04-10'),
(2, 'Correction de bugs #2', 'Alii nullo quaerente vultus severitate adsimulata patrimonia sua in inmensum extollunt, cultorum ut puta feracium multiplicantes annuos fructus, quae a primo ad ultimum solem se abunde iactitant possidere, ignorantes profecto maiores suos, per quos ita magnitudo Romana porrigitur, non divitiis eluxisse sed per bella saevissima, nec opibus nec victu nec indumentorum vilitate gregariis militibus discrepantes opposita cuncta superasse virtute.', '2024-05-07');

-- --------------------------------------------------------

--
-- Structure de la table `version_jeu`
--

CREATE TABLE `version_jeu` (
  `id_version` int(11) NOT NULL,
  `Version` text NOT NULL,
  `Date` date NOT NULL,
  `Prix` text NOT NULL,
  `Pouce` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `version_jeu`
--

INSERT INTO `version_jeu` (`id_version`, `Version`, `Date`, `Prix`, `Pouce`) VALUES
(1, 'Alpha 1.0', '2024-05-03', 'Gratuit', 52);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `patch`
--
ALTER TABLE `patch`
  ADD PRIMARY KEY (`id_patch`);

--
-- Index pour la table `version_jeu`
--
ALTER TABLE `version_jeu`
  ADD PRIMARY KEY (`id_version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_com` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `patch`
--
ALTER TABLE `patch`
  MODIFY `id_patch` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `version_jeu`
--
ALTER TABLE `version_jeu`
  MODIFY `id_version` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
