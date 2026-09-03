CREATE DATABASE IF NOT EXIST db;

USE  db;

CREATE TABLE IF NOT EXISTS listagem(
id_listagem INT auto_increment primary KEY,
nome VARCHAR(50) NOT NULL,
endereco VARCHAR(100) NOT NULL,
telefone VARCHAR(13) NOT NULL
);
 
 INSERT INTO listagem(id_listagem, nome, endereco, telefone)
 VALUES (null, "angelo espinoza, av.constituição,167")