/* 
CREATE DATABASE IF NOT EXISTS proyecto_PLP_Tech;
USE proyecto_PLP_Tech;

CREATE TABLE usuario (
  id INT NOT NULL AUTO_INCREMENT,
  usr_nombre VARCHAR(100) NOT NULL,
  usr_apellido VARCHAR(100) NOT NULL,
  usr_ci VARCHAR(8) NOT NULL,
  usr_nacimiento DATE NOT NULL,  -- Cambiado de DATETIME a DATE
  usr_correo VARCHAR(100) NOT NULL,  -- Aumentado de 32 a 100
  usr_contrasenia VARCHAR(255) NOT NULL,  -- Aumentado de 32 a 255 para hashes
  usr_telefono VARCHAR(9) NOT NULL,
  imagen VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (id)
);

select * from usuario;   
*/

CREATE DATABASE IF NOT EXISTS base_usuarios;
USE base_usuarios;

CREATE TABLE usuario (
  id INT(11) NOT NULL AUTO_INCREMENT,
  usr_nombre VARCHAR(100) NOT NULL,
  usr_age INT(3) NOT NULL,
  usr_email VARCHAR(100) NOT NULL,
  usr_pass VARCHAR(100) NOT NULL,
  imagen VARCHAR(100)DEFAULT NULL,
  PRIMARY KEY  (id)
);

INSERT INTO base_usuarios.usuario(usr_name, usr_age, usr_email, usr_pass) VALUES ('Usuario1',22,'usuario122@gmail.com','123456');

select * from usuario;

drop table usuario;