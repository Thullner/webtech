SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE gebruikers
(
  id         INT(10) AUTO_INCREMENT,
  loginnaam  varchar(15)  NOT NULL,
  voornaam   varchar(100) NOT NULL,
  achternaam varchar(100) NOT NULL,
  wachtwoord varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE boeken
(
  id                INT(10) AUTO_INCREMENT,
  titel             varchar(50)      NOT NULL,
  jaarVanPublicatie numeric(4)       NOT NULL,
  afbeelding        varchar(100)     NOT NULL,
  prijs             float            NOT NULL,
  aantal            INT(10)          NOT NULL,
  auteurId          INT(10) UNSIGNED NOT NULL,
  genreId           INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE auteurs
(
  id         INT(10) UNSIGNED AUTO_INCREMENT,
  voornaam   varchar(20) NOT NULL,
  achternaam varchar(20) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE genres
(
  id   INT(10) UNSIGNED AUTO_INCREMENT,
  naam VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);


ALTER TABLE boeken
  ADD FOREIGN KEY fk_auteur (auteurId)
    REFERENCES auteurs (id)
    ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE boeken
  ADD FOREIGN KEY fk_genres (genreId)
    REFERENCES genres (id)
    ON DELETE NO ACTION ON UPDATE CASCADE;
