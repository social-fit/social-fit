DROP DATABASE social_fit;

CREATE DATABASE social_fit;

USE social_fit;

DROP TABLE IF EXISTS Usuario;

CREATE TABLE Usuario (
  id integer NOT NULL auto_increment,
  nome varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  senha varchar(100) NOT NULL,
  sexo varchar(20) NOT NULL,
  datanasc date NOT NULL,
  pais VARCHAR(30) NOT NULL,
  PRIMARY KEY  (id)
);

CREATE TABLE Dados (
  id int not null auto_increment,
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
  dia DATE NOT NULL,
  usuario_id int NOT NULL,
  primary key (id),
  foreign key (usuario_id) references Usuario(id)
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
  (burpee, air_squat, front_squat, back_squat, overhead_squat, shoulder_press, push_press, push_jerk, deadlift, pull_up, dia, usuario_id)
VALUES
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-15"), 1),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-14"), 1),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-13"), 1),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-12"), 1),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-11"), 1),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-10"), 1),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-09"), 1);


INSERT INTO Dados
  (burpee, air_squat, front_squat, back_squat, overhead_squat, shoulder_press, push_press, push_jerk, deadlift, pull_up, dia, usuario_id)
VALUES
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-15"), 2),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-14"), 2),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-13"), 2),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-12"), 2),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-11"), 2),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-10"), 2),
  (FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), FLOOR(1 + RAND() * 120), date("2018-02-09"), 2);