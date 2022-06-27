CREATE DATABASE xssExample;
USE xssExample;

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

