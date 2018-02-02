DROP DATABASE IF EXISTS stroke_scan_system;

CREATE DATABASE stroke_scan_system;

USE stroke_scan_system;

DROP TABLE IF EXISTS Usuario;

CREATE TABLE Usuario (
  idusuario integer NOT NULL auto_increment,
  nome varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  senha varchar(100) NOT NULL,
  crm varchar(13) NOT NULL,
  uf varchar(2) NOT NULL,
  PRIMARY KEY (idusuario)
);