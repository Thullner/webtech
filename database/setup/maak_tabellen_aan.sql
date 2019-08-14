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
  loginNaam  varchar(15)  NOT NULL,
  voorNaam   varchar(100) NOT NULL,
  achterNaam varchar(100) NOT NULL,
  wachtwoord varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE boeken
(
  id                INT(10) AUTO_INCREMENT,
  titel             varchar(50)      NOT NULL,
  jaarVanPublicatie numeric(4)       NOT NULL,
  afbeelding        varchar(100)     NULL,
  auteurId          INT(10) UNSIGNED NOT NULL,
  genreId           INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE auteurs
(
  id         INT(10) UNSIGNED AUTO_INCREMENT,
  voorNaam   varchar(20) NOT NULL,
  achterNaam varchar(20) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE genres
(
  id   INT(10) AUTO_INCREMENT,
  naam VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);



