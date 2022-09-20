-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 sep. 2020 à 21:32
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-learning`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(255) NOT NULL,
  `matiere` varchar(30) NOT NULL,
  `prof` varchar(30) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `url` text NOT NULL,
  `date` datetime(6) NOT NULL,
  `limite` datetime(6) NOT NULL,
  `genre` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `matiere`, `prof`, `titre`, `nom`, `url`, `date`, `limite`, `genre`) VALUES
(1, 'Algèbre ', 'sarra chikha', 'cours matrice ', 'ch_matrices.pdf', 'files/cp/1ch_matrices.pdf', '2020-09-20 01:26:00.000000', '0000-00-00 00:00:00.000000', 0),
(2, 'Algèbre ', 'sarra chikha', 'TD matrice', 'TDmatrice.pdf', 'files/ep/2TDmatrice.pdf', '2020-09-20 01:28:00.000000', '2020-10-12 12:12:00.000000', 1),
(4, 'POO C++', 'imen chaaben', 'POO C++ COURS1', 'POO_Chapitre1.pdf', 'files/cp/4POO_Chapitre1.pdf', '2020-09-20 01:33:00.000000', '0000-00-00 00:00:00.000000', 0),
(5, 'POO C++', 'imen chaaben', 'POO C++ COURS2', 'POO_Chapitre2.pdf', 'files/cp/5POO_Chapitre2.pdf', '2020-09-20 01:33:00.000000', '0000-00-00 00:00:00.000000', 0),
(6, 'POO C++', 'imen chaaben', 'TD1', 'TD1_ du C au C++ _énoncé+corre', 'files/ep/6TD1_duCauC++_énoncé+correction.pdf', '2020-09-20 01:33:00.000000', '2020-11-04 11:00:00.000000', 1),
(7, 'Commerce', 'imed driss', 'Cours sur la vente et cession fond de commerce', 'Cours sur la vente et cession ', 'files/cp/7Courssurlaventeetcessionfonddecommerce.pdf', '2020-09-20 01:36:00.000000', '0000-00-00 00:00:00.000000', 0),
(8, 'Commerce', 'imed driss', 'Cours sur la marge commerciale brute et marge nett', 'Cours sur la marge commerciale', 'files/cp/8Courssurlamargecommercialebruteetmargenette.pdf', '2020-09-20 01:36:00.000000', '0000-00-00 00:00:00.000000', 0),
(9, 'Commerce', 'imed driss', 'Exercices de calculs commerciaux  la marge brute', 'Exercices de calculs commercia', 'files/ep/9Exercicesdecalculscommerciauxlamargebrute.pdf', '2020-09-20 01:37:00.000000', '2020-11-12 10:00:00.000000', 1),
(10, 'Commerce', 'imed driss', 'Examen', 'examencommerce.pdf', 'files/ep/10examencommerce.pdf', '2020-09-20 01:38:00.000000', '2020-12-15 11:15:00.000000', 1),
(11, 'Finance', 'amin chebi', 'cours finance', 'Manuel sur la finance des marc', 'files/cp/11Manuelsurlafinancedesmarches.pdf', '2020-09-20 01:40:00.000000', '0000-00-00 00:00:00.000000', 0),
(12, 'Transmission numérique ', 'ahmed siala', 'TN CHAPTIRE 3', 'Chapitre III.pdf', 'files/cp/12ChapitreIII.pdf', '2020-09-20 01:43:00.000000', '0000-00-00 00:00:00.000000', 0),
(13, 'Transmission numérique ', 'ahmed siala', 'DS 1', 'DStransmission.pdf', 'files/ep/13DStransmission.pdf', '2020-09-20 01:44:00.000000', '2020-11-12 10:00:00.000000', 1),
(14, 'POO C#', 'imen chaaben', 'Cours de Programmation Objet C#', 'www.cours-gratuit.com--coursCC', 'files/cp/14www.cours-gratuit.com--coursCCharp-id4946(1).pdf', '2020-09-20 18:32:00.000000', '0000-00-00 00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(255) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prof` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `commentaire` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `nom`, `prof`, `url`, `commentaire`) VALUES
(1, 'ch_matrices.pdf', 'sarra chikha', 'files/demande/1ch_matrices.pdf', 'Cours les Matrices'),
(3, 'Cours sur la vente et cession fond de commerce.pdf', 'imed driss', 'files/demande/3Courssurlaventeetcessionfonddecommerce.pdf', 'Cours sur la vente et cession fond de commerce');

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `id` int(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `domaine`
--

INSERT INTO `domaine` (`id`, `nom`, `url`) VALUES
(1, 'Langage de programmation', 'files/categorie/bc5-Copie-Copie.jpg'),
(2, 'Développement web ', 'files/categorie/html2.jpg'),
(3, 'Marketing', 'files/categorie/mark1.jpeg'),
(4, 'Finance', 'files/categorie/bus3.jpg'),
(5, 'Commerce ', 'files/categorie/bc2.jpg'),
(6, 'Transmission numérique ', 'files/categorie/sof3.jpg'),
(7, 'Statistique ', 'files/categorie/math1.png'),
(8, 'Management ', 'files/categorie/bcmang.jpg'),
(9, 'Mathematique', 'files/categorie/markback.jpg'),
(10, 'Comptabilité ', 'files/categorie/comptaback.jpg'),
(11, 'Base de données', 'files/categorie/Sqlback.png'),
(12, 'Réseau ', 'files/categorie/reseau.jpg'),
(13, 'Développement mobile ', 'files/categorie/devweb.png'),
(14, 'Bureautique ', 'files/categorie/bureautique.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `acces` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nom`, `prof`, `acces`) VALUES
(2, 'Algèbre ', 'sarra chikha', ''),
(3, 'POO C#', 'imen chaaben', '9.10.11.'),
(4, 'POO C++', 'imen chaaben', ''),
(5, 'Commerce', 'imed driss', '7.8.'),
(6, 'Finance', 'amin chebi', ''),
(7, 'Transmission numérique ', 'ahmed siala', '');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `statut` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `email`, `mdp`, `nom`, `statut`) VALUES
(1, 'Achieve@achieve.com', '$2y$10$AfK7wGkiDotzrMaCHvCaUe8WVXj2AL5R3SvlGEOspCCKczbLnIhVm', 'Achieve', 0),
(2, 'sarra@gmail.com', '$2y$10$dMr7Dxg2XTZIwVKK4Q1W.uq5eAEoKlc2MFyC6WlN/szi3xi0RubWq', 'sarra chikha', 1),
(3, 'imen@gmail.com', '$2y$10$GYt1GjeyfVfI9DXjoI8JVOP/jHjqOdjJiCJ3xp8OYvxoLdfBr28Ru', 'imen chaaben', 1),
(4, 'imed@gmail.com', '$2y$10$nON0NcFQTAnXZWMVGg4ImuK5eUygky38NezKguHOJlLOCHiygnrXO', 'imed driss', 1),
(5, 'amin@gmail.com', '$2y$10$.qr0f0XmAuElO3891eoZZep4rOtqL3XD1WOn/xqXpm19i/dOC3nAm', 'amin chebi', 1),
(6, 'ahmed@gmail.com', '$2y$10$po05R0hTsw.OTcJeCvlxQeO0CUAbPCmzUvIOKC.HocE7Bj9TcFIxG', 'ahmed siala', 1),
(7, 'anis@gmail.com', '$2y$10$Hfmm7dyZLWXJJs5lPprNWOsjKhlqwaz0DzFLuNUAZK9z7Z0YK1jNu', 'anis jribi', 2),
(8, 'nedia@gmail.com', '$2y$10$HTImxEzJ7FhNcrMFxiwyZOVMjkEJCylzF7Yl0SNeS5OLPV/UZUr52', 'nedia', 2),
(9, 'heni@gmail.com', '$2y$10$Onu.auw9nuwtDundMVIw0uk/HyHGKdw4WpDlc/cgrF23hHotyPrQG', 'heni22', 2),
(10, 'yesmine@gmail.com', '$2y$10$Cuebg5QiA33vYL7esJT2ieV3KBQT2WTACss97RXFrw3WpEnD4Xl82', 'yesmine', 2),
(11, 'nour@gmail.com', '$2y$10$qsX27j8DZ3SA1RInh1HRKeuxRh8U2aGa7.N86WRd/4ms7ZXUHuX4m', 'nour', 2);

-- --------------------------------------------------------

--
-- Structure de la table `public`
--

CREATE TABLE `public` (
  `id` int(255) NOT NULL,
  `url` text NOT NULL,
  `prof` varchar(50) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `matiere` varchar(200) NOT NULL,
  `sujet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `public`
--

INSERT INTO `public` (`id`, `url`, `prof`, `categorie`, `matiere`, `sujet`) VALUES
(2, 'files/demande/2ManuelcompletpourdébuterlaprogrammationaveclelangageC++.pdf', 'Achieve', 'Langage de programmation', 'C++', 'Manuel complet pour débuter la programmation avec le langage C++'),
(3, 'files/demande/3html_fr.pdf', 'Achieve', 'Développement web ', 'Html', 'cours html'),
(4, 'files/demande/4cssoutilsdebase.pdf', 'Achieve', 'Développement web ', 'CSS', 'Css outils de base'),
(5, 'files/demande/5courscompletjavascript.pdf', 'Achieve', 'Développement web ', 'Javascript ', 'cours complet javascript'),
(6, 'files/demande/6marketingcourscomplet.pdf', 'Achieve', 'Marketing', 'Marketing', 'Marketing cours complet'),
(7, 'files/demande/7internationalisationetdémarchesmarketing.pdf', 'Achieve', 'Marketing', 'Marketing', 'internationalisation et démarches marketing'),
(8, 'files/demande/8DatabaseMarketing.pdf', 'Achieve', 'Marketing', 'Database marketing', 'Database marketing cours complet'),
(9, 'files/demande/9Coursgeneralesurlafinancepersonnelle.pdf', 'Achieve', 'Finance', 'Cours générale ', 'Cours générale sur la finance personnelle'),
(10, 'files/demande/10Courscompletsurlefonddecommerceendroit.pdf', 'Achieve', 'Commerce ', 'Cours complet ', 'Cours complet sur le fond de commerce en droit'),
(11, 'files/demande/11ChapI_final.pdf', 'Achieve', 'Transmission numérique ', 'Cours générale ', 'chapitre 1'),
(12, 'files/demande/12ChapII_final.pdf', 'Achieve', 'Transmission numérique ', 'Cours générale ', 'chapitre 2'),
(13, 'files/demande/13Supportdeformationcompletsurlastatistiquepourdebutant.pdf', 'Achieve', 'Statistique ', 'Cours statistique', 'Support de formation complet sur la statistique pour debutant'),
(14, 'files/demande/14Lesbasesdelastatistiquepourdebutant.pdf', 'Achieve', 'Statistique ', 'Cours statistique', 'Les bases de la statistique pour debutant'),
(15, 'files/demande/15www.cours-gratuit.com--id-7560-1.pdf', 'Achieve', 'Management ', 'Cours management ', 'Introduction en management participatif cours complet\r\n'),
(16, 'files/demande/16www.cours-gratuit.com--id-7571.pdf', 'Achieve', 'Management ', 'Cours management ', 'Support de cours sur les theories du management participatif [Eng]\r\n'),
(17, 'files/demande/17www.cours-gratuit.com--id-1696-1.pdf', 'Achieve', 'Comptabilité ', 'Cours comptabilité générale', 'Comptabilité des sociétés cours complet\r\n'),
(18, 'files/demande/18www.cours-gratuit.com--courssql-id2187.pdf', 'Achieve', 'Base de données', 'Cours SQL', 'Base de Données et langage SQL'),
(19, 'files/demande/19www.cours-gratuit.com--CoursRéseau-id2810.pdf', 'Achieve', 'Réseau ', 'Cours réseau', 'Cours complet sur les réseau'),
(20, 'files/demande/20www.cours-gratuit.com--coursAndroid-id4090.pdf', 'Achieve', 'Développement mobile ', 'Cours android', 'Cours de Développement Android'),
(21, 'files/demande/21www.cours-gratuit.com--coursinformatique-id3242.pdf', 'Achieve', 'Bureautique ', ' Excel', 'Cours bureautique complet Excel 2007'),
(22, 'files/demande/22www.cours-gratuit.com--coursinformatiqur-id3498.pdf', 'Achieve', 'Bureautique ', 'Word', 'Cours de base Microsoft Word '),
(24, 'files/demande/23www.cours-gratuit.com--id-3592.pdf', 'Achieve', 'Langage de programmation', 'C#', 'Cours complet langage C#'),
(25, 'files/demande/3www.cours-gratuit.com--coursCCharp-id4946(1).pdf', 'imen chaaben', 'Langage:::-de:::-programmation', 'C#', 'Cours de Programmation Objet C#');

-- --------------------------------------------------------

--
-- Structure de la table `rendus`
--

CREATE TABLE `rendus` (
  `id` int(255) NOT NULL,
  `etudiant` varchar(250) NOT NULL,
  `date` datetime(6) NOT NULL,
  `matiere` varchar(200) NOT NULL,
  `prof` varchar(200) NOT NULL,
  `fich` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `ep` bigint(250) NOT NULL,
  `remarque` varchar(255) NOT NULL,
  `note` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `id` int(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `nom`, `categorie`, `url`) VALUES
(1, 'C#', 'Langage de programmation', 'files/specialite/c7.jpg'),
(2, 'C++', 'Langage de programmation', 'files/specialite/phy1.jpg'),
(3, 'Html', 'Développement web ', 'files/specialite/html1.png'),
(4, 'CSS', 'Développement web ', 'files/specialite/css.jpg'),
(5, 'Javascript ', 'Développement web ', 'files/specialite/javascript_logo.png'),
(6, 'Marketing', 'Marketing', 'files/specialite/mark2.jpg'),
(7, 'Database marketing', 'Marketing', 'files/specialite/mark3.jpg'),
(8, 'Cours générale ', 'Finance', 'files/specialite/bus1.jpg'),
(9, 'Cours complet ', 'Commerce ', 'files/specialite/bus2.jpg'),
(10, 'Cours générale ', 'Transmission numérique ', 'files/specialite/sofback.png'),
(11, 'Cours statistique', 'Statistique ', 'files/specialite/marketing.jpg'),
(12, 'Cours management ', 'Management ', 'files/specialite/Time-Skipper-Management.jpg'),
(13, 'Algebre', 'mathematique', 'files/specialite/math.jpeg'),
(14, 'Analyse', 'Mathematique', 'files/specialite/mat3.jpg'),
(15, 'Cours comptabilité générale', 'Comptabilité ', 'files/specialite/Comptabilite.jpg'),
(16, 'Cours SQL', 'Base de données', 'files/specialite/bc5.jpg'),
(17, 'Cours réseau', 'Réseau ', 'files/specialite/reseau-professionel.jpg'),
(18, 'Cours android', 'Développement mobile ', 'files/specialite/app.png'),
(19, ' Excel', 'Bureautique ', 'files/specialite/excel.png'),
(20, 'Word', 'Bureautique ', 'files/specialite/word.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rendus`
--
ALTER TABLE `rendus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `public`
--
ALTER TABLE `public`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `rendus`
--
ALTER TABLE `rendus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
