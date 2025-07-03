-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 juil. 2025 à 02:05
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `marocdecouverte`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandes_contact`
--

CREATE TABLE `demandes_contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `destination` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_envoi` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demandes_contact`
--

INSERT INTO `demandes_contact` (`id`, `nom`, `email`, `telephone`, `destination`, `message`, `date_envoi`) VALUES
(1, 'aaa', 'tari9@gmil.com', '0655445544', 'marrakech', 'iii', '2025-07-02 19:05:11');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `circuit_id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `date_depart` date NOT NULL,
  `nb_personnes` int(11) NOT NULL,
  `commentaires` text DEFAULT NULL,
  `date_reservation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `circuit_id`, `nom`, `email`, `telephone`, `date_depart`, `nb_personnes`, `commentaires`, `date_reservation`) VALUES
(1, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:35:48'),
(2, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:36:44'),
(3, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:37:49'),
(4, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:38:12'),
(5, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:44:58'),
(6, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:46:34'),
(7, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:46:54'),
(8, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:47:25'),
(9, 123, 'salah', 'salahnazrhan@gmail.com', '0655445544', '2025-07-31', 5, 'yyuy', '2025-07-02 16:50:08'),
(10, 123, 'naz', 'tari9@gmil.com', '0655445544', '2025-07-31', 3, 'hhhhhhhhhhhhh', '2025-07-02 17:07:11'),
(11, 123, 'naz', 'tari9@gmil.com', '0655445544', '2025-07-31', 3, 'hhhhhhhhhhhhh', '2025-07-02 17:07:34'),
(12, 123, 'hhhhhh', 'admin@entreprise.com', '0655445544', '2025-07-24', 1, 'h', '2025-07-02 17:11:00'),
(13, 123, 'salah', 'salahnazrhan2@gmail.con', '0655445544', '2025-01-02', 3, 'rrrr', '2025-07-02 17:24:43'),
(14, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:39:42'),
(15, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:40:29'),
(16, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:41:11'),
(17, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:41:31'),
(18, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:42:06'),
(19, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:42:25'),
(20, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:42:32'),
(21, 123, 'cc', 'salahnazrhan2@gmail.con', '0655445544', '2025-07-25', 1, 'cccccccc', '2025-07-02 17:42:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandes_contact`
--
ALTER TABLE `demandes_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demandes_contact`
--
ALTER TABLE `demandes_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
