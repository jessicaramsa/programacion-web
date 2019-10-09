create database ejemplo;
use ejemplo;

create table contactos(
    id int not null auto_increment primary key,
    nombre varchar(100),
    apellidos varchar(100),
    email varchar(50),
    telefono_fijo varchar(15),
    telefono_celular varchar(15)
);