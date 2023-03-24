-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 mars 2023 à 17:01
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
-- Base de données : `admin_iut`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `identifiant` tinytext CHARACTER SET utf8 NOT NULL,
  `password` tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `identifiant`, `password`) VALUES
(1, 'adminIUT', 'cc0c4549b36a021e68a8354ef027ed33d6e4dfa4');

-- --------------------------------------------------------

--
-- Structure de la table `stud_crea`
--

CREATE TABLE `stud_crea` (
  `id_crea` int(11) NOT NULL,
  `Titres` varchar(200) NOT NULL,
  `Descriptions` varchar(350) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Dates` varchar(200) NOT NULL,
  `Nom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stud_crea`
--

INSERT INTO `stud_crea` (`id_crea`, `Titres`, `Descriptions`, `Images`, `Dates`, `Nom`) VALUES
(22, 'New real', 'Ce projet avais pour but de rénover le chai à vin de Rouen et d\'y accueillir un événement en son lieu. Nous devions donc créer toute l\'identité du site ainsi que de l\'événement , allant du logo au site internet en passant par une vidéo.', 'img/crea/image1679595816.png', '23/03/2023', 'Niss Romuald'),
(23, 'Pictogramme', 'L’objectif principal était de créer des pictogrammes qui sont liés avec la création avec les technologies numériques et qui regroupent le domaine du design graphique, du motion design, de la communication, de la création 3D, de la programmation et du web.', 'img/crea/image1679671218.png', '24/03/2023', 'Picard Quentin'),
(24, 'Portfolio2', 'Voici le portfolio qui a été créé à l\'occasion d\'un projet ayant pour objectif de mettre en avant les projets de l\'étudiant. Il permet donc de montrer toutes les compétences qui ont été acquises durant les deux années de sa formation.', 'img/crea/image1679673560.png', '24/03/2023', 'Bastien Planchon'),
(25, 'The Walking Ends', 'The Walking Ends est un événement qui a eu lieu le 21 novembre 2022 à Paris. Celui-ci a eu pour but de réunir des fans de l\'univers de The Walking Dead afin de regarder et célébrer le dernier épisode, tout cela en la compagnie de comédiens qui ont travaillé au sein de l\'univers.', 'img/crea/image1679673600.png', '24/03/2023', 'Bastien Planchon');

-- --------------------------------------------------------

--
-- Structure de la table `stud_dev`
--

CREATE TABLE `stud_dev` (
  `id_dev` int(11) NOT NULL,
  `Titres` varchar(200) NOT NULL,
  `Descriptions` varchar(350) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Dates` varchar(200) NOT NULL,
  `Nom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stud_dev`
--

INSERT INTO `stud_dev` (`id_dev`, `Titres`, `Descriptions`, `Images`, `Dates`, `Nom`) VALUES
(25, 'Portfolio', 'Voici le portfolio qui a été créé à l\'occasion d\'un projet ayant pour objectif de mettre en avant les projets de l\'étudiant. Il permet donc de montrer toutes les compétences qui ont été acquises durant les deux années de sa formation.', 'img/dev/image1679670970.jpeg', '24/03/2023', 'Picard Quentin'),
(26, 'Portfolio', 'Voici le portfolio qui a été créé à l\'occasion d\'un projet ayant pour objectif de mettre en avant les projets de l\'étudiant. Il permet donc de montrer toutes les compétences qui ont été acquises durant les deux années de sa formation.', 'img/dev/image1679670996.png', '24/03/2023', 'Kyliann Piel'),
(27, 'Portfolio', 'Voici le portfolio qui a été créé à l\'occasion d\'un projet ayant pour objectif de mettre en avant les projets de l\'étudiant. Il permet donc de montrer toutes les compétences qui ont été acquises durant les deux années de sa formation.', 'img/dev/image1679671017.png', '24/03/2023', 'Rémi Parent'),
(28, 'Portfolio', 'Voici le portfolio qui a été créé à l\'occasion d\'un projet ayant pour objectif de mettre en avant les projets de l\'étudiant. Il permet donc de montrer toutes les compétences qui ont été acquises durant les deux années de sa formation.', 'img/dev/image1679671081.png', '24/03/2023', 'Antonin Parédé');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `stud_crea`
--
ALTER TABLE `stud_crea`
  ADD PRIMARY KEY (`id_crea`);

--
-- Index pour la table `stud_dev`
--
ALTER TABLE `stud_dev`
  ADD PRIMARY KEY (`id_dev`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `stud_crea`
--
ALTER TABLE `stud_crea`
  MODIFY `id_crea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `stud_dev`
--
ALTER TABLE `stud_dev`
  MODIFY `id_dev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
