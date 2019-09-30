CREATE DATABASE dbalunos;

USE dbalunos;

CREATE TABLE tbAlunos (
id INT NOT NULL AUTO_INCREMENT,
nome	VARCHAR(50) NOT NULL,
datnasc	DATE,
serie	INT(20),
escola	VARCHAR(55),
sexo	VARCHAR(15),
PRIMARY KEY(id) );