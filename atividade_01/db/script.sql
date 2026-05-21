CREATE DATABASE    sistema_simple;

USE sistema_simple;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL

);

INSERT INTO usuario(usuario,senha) VALUES ("admin","123");