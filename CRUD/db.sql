CREATE DATABASE db;

USE db;

CREATE TABLE IF NOT EXISTS usuarios(
     id INT NOT NULL AUTO_INCREMENT,
     nombre VARCHAR(50),
     apellido VARCHAR(50),
     direccion VARCHAR(50),
     telefono INT,
     PRIMARY KEY(id));

INSERT INTO usuarios (id, nombre, apellido, direccion, telefono) VALUES (1001, 'Diego', 'Cardenas', 'Calle 1 # 55-1', '1234');
