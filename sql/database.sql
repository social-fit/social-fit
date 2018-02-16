DROP DATABASE social_fit;

CREATE DATABASE social_fit;

USE social_fit;

DROP TABLE IF EXISTS Usuario;

CREATE TABLE Usuario (
  idusuario integer NOT NULL auto_increment,
  nome varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  senha varchar(100) NOT NULL,
  sexo varchar(20) NOT NULL,
  datanasc date NOT NULL,
  pais VARCHAR(30) NOT NULL,
  PRIMARY KEY  (idusuario)
);

CREATE TABLE Dados (
  id_dados int not null auto_increment,
  burpee int,
  air_squat int,
  front_squat int,
  back_squat int,
  overhead_squat int,
  shoulder_press int,
  push_press int,
  push_jerk int,
  deadlift int,
  pull_up int,
  dia DATE,
  id_usuario int,
  primary key (id_dados),
  foreign key (id_dados) references Usuario(idusuario)
);

INSERT INTO Usuario
  (nome, email, senha, sexo, datanasc, pais)
VALUES
  ("Walisson Silva", "walissonsilva10@gmail.com", "123", "Masculino", date("1995-08-17"), "Brasil");
INSERT INTO Usuario
  (nome, email, senha, sexo, datanasc, pais)
VALUES
  ("Jose Anderson", "joseanderson1995silva@gmail.com", "123", "Masculino", date("1995-04-29"), "Brasil");

INSERT INTO Dados
  (back_squat, id_usuario)
VALUES
  (110, 1);