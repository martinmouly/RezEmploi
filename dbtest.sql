create database if not exists dbtest;
use dbtest;

-- TABLES 

drop table if exists post;

drop table if exists users;
drop table if exists post;
drop table if exists experience;

create table users(
id int primary key not null auto_increment,
pseudo varchar(50),
pwd varchar(50),
nom varchar(50),
prenom varchar(50),
pp varchar(50),
small_description varchar(200),
coordonnees varchar(1000),
);

create table experience(
id int primary key not null auto_increment,
idcv int not null,
logo varchar(100),
title varchar(75),
field varchar(30),
more varchar(1000),
date  varchar(15),
isformation BOOLEAN 
);

create table post(
id int primary key not null auto_increment,
texte varchar(50),
img varchar(50),
likes int,
id_user int,
FOREIGN KEY (id_user) REFERENCES users(id)
);



