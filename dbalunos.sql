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
VALUES ("Claudio Ramalho", "1993-11-12", "8º Semestre", "Unip - Rangel Pestana", "Masculino"),
("Batman", "1939-03-30", "10º Semestre", "Gotham City", "Masculino"),
("Wonder Woman", "1984-11-12", "9º Semestre", "Themyscira", "Feminino");

SELECT * FROM tbalunos;