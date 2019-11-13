create database expo_jsp_conexion;
use expo_jsp_conexion;

create table Usuario (
  id int not null auto_increment primary key,
  username varchar(30),
  password varchar(30)
);