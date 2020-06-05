CREATE DATABASE IF NOT EXISTS univille;
USE univille;
CREATE TABLE IF NOT EXISTS `planetas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `icone` nvarchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
);
