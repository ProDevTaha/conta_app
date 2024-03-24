-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 sep. 2022 à 07:18
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app_ahmed`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id_Acchat` int(11) NOT NULL,
  `date` date NOT NULL,
  `Designation` varchar(10) NOT NULL,
  `Type` int(100) NOT NULL,
  `Fas` varchar(20) NOT NULL,
  `Quantité` float NOT NULL,
  `prix_Unitaire` float NOT NULL,
  `Mantant_HT` float NOT NULL,
  `Chantier` varchar(20) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id_Acchat`, `date`, `Designation`, `Type`, `Fas`, `Quantité`, `prix_Unitaire`, `Mantant_HT`, `Chantier`, `id_users`) VALUES
(1, '2022-08-02', 'hrtghtrhrt', 0, 'fzef', 0, 0, 0, 'dowar hayda', 0),
(3, '2022-08-03', 'hrtghtrhrt', 0, 'bdfbr', 1000, 2133, 123123, 'marrakech', 0),
(4, '2022-08-09', 'hrtghtrhrt', 0, 'amine', 1000, 34234, 234, '2342', 0),
(5, '2022-08-01', 'vzedvzvz', 0, 'dcze', 1000, 0, 0, 'marrakech', 0);

-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

CREATE TABLE `banque` (
  `id_bancaire` int(11) NOT NULL,
  `libelle_compta` varchar(20) DEFAULT NULL,
  `Debit_compta` varchar(20) DEFAULT NULL,
  `credi_compta` varchar(25) DEFAULT NULL,
  `Date_banque` date DEFAULT NULL,
  `libelle_banque` varchar(25) DEFAULT NULL,
  `Debit_banque` varchar(25) DEFAULT NULL,
  `credi_banque` varchar(25) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `Date_compta` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `banque`
--

INSERT INTO `banque` (`id_bancaire`, `libelle_compta`, `Debit_compta`, `credi_compta`, `Date_banque`, `libelle_banque`, `Debit_banque`, `credi_banque`, `id_user`, `Date_compta`) VALUES
(0, '43424', '324234', '34324', '2022-08-03', '34234', '4234', '23434', 0, '2022-08-17'),
(0, '6456', '464', '45645', '2022-08-09', '5646', '456', '46456', 0, '2022-08-05'),
(0, '453', '3535', '3535', '2022-08-18', '53446', '4436', '4346', 0, '2022-08-04');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id_persone` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `durée` varchar(255) DEFAULT NULL,
  `date_saisie` date DEFAULT NULL,
  `justification` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id_persone`, `nom`, `date`, `durée`, `date_saisie`, `justification`, `id_user`) VALUES
(0, 'Dourhmi', '2022-08-03', '3jeurs', '2022-08-03', 'malad', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

CREATE TABLE `tva` (
  `id_TVA` int(11) NOT NULL,
  `orders` varchar(20) DEFAULT NULL,
  `FACT_NUM` varchar(20) DEFAULT NULL,
  `DESIGNATION` varchar(25) DEFAULT NULL,
  `M_HT` date DEFAULT NULL,
  `TVA` varchar(25) DEFAULT NULL,
  `M_TTC` varchar(25) DEFAULT NULL,
  `IFe` varchar(25) DEFAULT NULL,
  `ICE_FRS` varchar(25) DEFAULT NULL,
  `LIB_FRSS` varchar(25) DEFAULT NULL,
  `ID_PAIE` varchar(25) DEFAULT NULL,
  `DATE_PAIE` varchar(25) DEFAULT NULL,
  `DATE_FACT` varchar(25) DEFAULT NULL,
  `TAUX` varchar(5) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `password`) VALUES
(1, 'taha@gmail.com', 'tdourhmi2001@gmail.com', '$2y$10$VbwgnP13P6vfm3/mLAwiIOxvwXLNUdlPmVycWlfdkqaKLx8V.tqpK');

-- --------------------------------------------------------

--
-- Structure de la table `vents`
--

CREATE TABLE `vents` (
  `id_vent` int(11) NOT NULL,
  `client` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `modde_Reg` varchar(20) NOT NULL,
  `situation` varchar(20) NOT NULL,
  `date_échéance` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `quantité` varchar(25) NOT NULL,
  `prix_unitaire` varchar(25) NOT NULL,
  `manant_HT` varchar(20) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vents`
--

INSERT INTO `vents` (`id_vent`, `client`, `date`, `modde_Reg`, `situation`, `date_échéance`, `type`, `quantité`, `prix_unitaire`, `manant_HT`, `id_users`) VALUES
(2, 'Ahmed', '2022-08-17', 'cheque', 'valide', '2022-08-18', 'U', '2233', '2222', '4961726', 0),
(3, 'ccazczc', '2022-08-03', 'cheque', 'valide', '2022-08-03', 'U', '32232', '2222', '71619504', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id_Acchat`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id_persone`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Index pour la table `vents`
--
ALTER TABLE `vents`
  ADD PRIMARY KEY (`id_vent`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id_Acchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vents`
--
ALTER TABLE `vents`
  MODIFY `id_vent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
