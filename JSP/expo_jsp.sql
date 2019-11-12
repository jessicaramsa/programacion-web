create database expo_jsp;
use expo_jsp;

create table Usuario (
  id_usuario int not null auto_increment,
  usuario varchar(30),
  contra varchar(30),
  primary key (id_usuario)
);