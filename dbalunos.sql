CREATE DATABASE dbalunos;

USE dbalunos;

CREATE TABLE tbAlunos (
id INT NOT NULL AUTO_INCREMENT,
nome	VARCHAR(50) NOT NULL,
datnasc	DATE,
serie	VARCHAR(30),
escola	VARCHAR(55),
sexo	VARCHAR(15),
PRIMARY KEY(id) );

INSERT INTO tbalunos (nome, datnasc, serie, escola, sexo)
VALUES ("Claudio Ramalho", "1993-11-12", "8ª Semestre", "Unip - Rangel Pestana", "Masculino"),
("Batman", "1939-03-30", "9ª Série", "Gotham City", "Masculino"),
("Wonder Woman", "1984-11-12", "5ª Série", "Themyscira", "Feminino"),
("The Killers", "2001-11-12", "4ª Série", "Harvard", "Masculino");

SELECT * FROM tbalunos;