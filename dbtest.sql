create database if not exists dbtest;
use dbtest;

-- TABLES 
drop table if exists users;
drop table if exists post;
drop table if exists cv;


-- FOURNISSEUR ///////////////////////////////////////
create table cv(
id int primary key not null auto_increment,
formation varchar(1000),
experience varchar(1000),
extra varchar(1000)
);
create table users(
id int primary key not null auto_increment,
pseudo varchar(50),
pwd varchar(50),
nom varchar(50),
prenom varchar(50),
photo varchar(50),
id_cv int,
FOREIGN KEY (id_cv) REFERENCES cv(id)
);
create table post(
id int primary key not null auto_increment,
texte varchar(50),
img varchar(50),
likes int,
id_user,
FOREIGN KEY (id_user) REFERENCES users(id)