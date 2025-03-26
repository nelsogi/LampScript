-- phpMyAdmin SQL Dump

-- version 5.1.1deb5ubuntu1

-- https://www.phpmyadmin.net/

--

-- Hôte : localhost:3306

-- Généré le : ven. 14 fév. 2025 à 10:11

-- Version du serveur : 10.6.18-MariaDB-0ubuntu0.22.04.1

-- Version de PHP : 8.1.2-1ubuntu2.20



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";





/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;



--

-- Base de données : ShopChop

--
DROP DATABASE IF EXISTS ShopChop;
CREATE DATABASE ShopChop
        DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP USER IF EXISTS 'UserShopChop'@'localhost';
CREATE USER 'UserShopChop'@'localhost' IDENTIFIED BY 'bibliosecret';

GRANT INSERT ON biblio.* TO 'UserShopChop'@'localhost';
GRANT SELECT ON biblio.* TO 'UserShopChop'@'localhost';
GRANT UPDATE ON biblio.* TO 'UserShopChop'@'localhost';
GRANT DELETE ON biblio.* TO 'UserShopChop'@'localhost';

DROP USER IF EXISTS 'UserShopChop'@'%';
CREATE USER 'UserShopChop'@'%' IDENTIFIED BY 'Super';

-- GRANT USAGE  ON biblio.* TO 'UserShopChop'@'%';
GRANT INSERT ON biblio.* TO 'UserShopChop'@'%';
GRANT SELECT ON biblio.* TO 'UserShopChop'@'%';
GRANT UPDATE ON biblio.* TO 'UserShopChop'@'%';
GRANT DELETE ON biblio.* TO 'UserShopChop'@'%';

USE ShopChop;



-- --------------------------------------------------------



--

-- Structure de la table Articles

--



CREATE TABLE Articles (

  idArticle int(11) NOT NULL,

  nomArticle varchar(100) DEFAULT NULL,

  petiteDescriptionArticle text DEFAULT NULL,

  descriptionArticle text DEFAULT NULL,

  prixArticle int(11) DEFAULT NULL,

  lienImageArticle varchar(100) DEFAULT NULL,

  categorieArticle varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--

-- Déchargement des données de la table Articles

--



INSERT INTO Articles (idArticle, nomArticle, petiteDescriptionArticle, descriptionArticle, prixArticle, lienImageArticle, categorieArticle) VALUES

(1, 'AK-47 Wild Lotus', 'L\'AK-47 Wild Lotus est une skin épique de l\'AK-47 dans CS:GO, ornée de magnifiques motifs floraux.', 'L\'AK-47 Wild Lotus est une peau de haute qualité pour l\'AK-47 dans CS:GO, présentant un motif floral détaillé inspiré par la nature. Le design inclut des éléments de lotus violets et jaunes qui contrastent parfaitement avec la base sombre de l\'arme. L\'édition est classée comme \"Exemplaire\", ce qui la rend encore plus rare et précieuse. C\'est une arme populaire parmi les joueurs et collectionneurs en raison de sa beauté et de sa rareté.', 21800, './img/Articles/AK-47WildLotus.png', 'AK-47'),

(2, 'AWP Gungnir', 'L\'AWP Gungnir est une skin légendaire, ornée de motifs vikings et d\'une finition dorée brillante.', 'L\'AWP Gungnir est l\'une des skins les plus prestigieuses de CS:GO, inspirée par l\'arme mythologique du dieu nordique Odin, le Gungnir. Cette skin présente un design impressionnant avec des éléments vikings, des runes gravées et une finition dorée qui lui donne un aspect à la fois majestueux et intimidant. Le contraste entre le doré et les nuances sombres de l\'arme en fait un objet de collection très prisé. Rare et prestigieuse, elle symbolise la puissance et la maîtrise du tir de précision.', 20300, './img/Articles/AWPGungnir.png', 'AWP'),

(3, 'Butterfly Knife Emerald', 'Le Butterfly Knife Emerald est une skin rare et élégante avec des lames scintillantes d\'un vert émeraude profond.', 'Le Butterfly Knife Emerald est une des skins les plus prisées de CS:GO, offrant une apparence élégante et luxueuse avec une finition émeraude intense. Ses lames brillent d’un vert éclatant qui attire l\'attention, créant un effet visuel saisissant à chaque mouvement. Cette skin rare fait partie des couteaux les plus convoités, grâce à sa beauté et à son prix élevé sur le marché. Avec son design unique et sa couleur vibrante, elle symbolise l\'exclusivité et le raffinement dans le jeu.', 26800, './img/Articles/butterflyEmerald.png', 'Knife'),

(4, 'Butterfly Knife Ruby', 'Le Butterfly Knife Ruby est une skin haut de gamme avec des lames d’un rouge rubis intense et éclatant.', 'Le Butterfly Knife Ruby est une des skins les plus spectaculaires de CS:GO, caractérisée par des lames d’un rouge rubis profond et brillant. Son design élégant et raffiné en fait une pièce de collection très convoitée. Cette skin est un symbole de luxe et d\'exclusivité, étant l\'une des plus rares et coûteuses du jeu. Le contraste entre le rouge éclatant et la finition métallique de l\'arme crée un effet visuel captivant lors des mouvements.', 22000, './img/Articles/butterflyRuby.png', 'Knife'),

(5, 'Sticker Vox', 'Le Sticker Vox est un autocollant rare dans CS:GO, connu pour son design minimaliste et moderne.', 'Le Sticker Vox est un autocollant très recherché dans CS:GO, apprécié pour son style épuré et sa typographie distinctive. Il représente un logo abstrait, avec des couleurs vives qui attirent immédiatement l’attention. Ce sticker est souvent utilisé pour personnaliser les armes, ajoutant une touche unique à l\'apparence du joueur. Sa rareté et son esthétique moderne en font un élément prisé des collectionneurs.', 35600, './img/Articles/stickersVox.png', 'Stickers'),

(6, 'M4A4 Howl', 'La M4A4 Howl est une skin légendaire de CS:GO, avec un design de loup en flammes, iconique et très recherchée.', 'La M4A4 Howl est l\'une des skins les plus emblématiques et controversées de CS:GO, avec son motif de loup en flammes qui crache la puissance et la férocité. Elle a été retirée de la vente après une violation de copyright, la rendant extrêmement rare et précieuse. Son design audacieux, avec des couleurs vives de rouge et de noir, en fait une pièce incontournable pour les collectionneurs. Ce skin, désormais mythique, est un symbole de statut et de prestige dans la communauté.', 21800, './img/Articles/M4A4Howl.png', 'M4A4');



-- --------------------------------------------------------



--

-- Structure de la table utilisateur

--



CREATE TABLE utilisateur (

  idUser int(11) NOT NULL,

  nomUser varchar(100) DEFAULT NULL,

  mailUser varchar(255) DEFAULT NULL,

  passwordUser varchar(100) DEFAULT NULL,

  panierUser varchar(50) DEFAULT NULL,

  souhaitUser varchar(50) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--

-- Index pour les tables déchargées

--



--

-- Index pour la table Articles

--

ALTER TABLE Articles

  ADD PRIMARY KEY (idArticle);



--

-- Index pour la table utilisateur

--

ALTER TABLE utilisateur

  ADD PRIMARY KEY (idUser);



--

-- AUTO_INCREMENT pour les tables déchargées

--



--

-- AUTO_INCREMENT pour la table Articles

--

ALTER TABLE Articles

  MODIFY idArticle int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;



--

-- AUTO_INCREMENT pour la table utilisateur

--

ALTER TABLE utilisateur

  MODIFY idUser int(11) NOT NULL AUTO_INCREMENT;

COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
