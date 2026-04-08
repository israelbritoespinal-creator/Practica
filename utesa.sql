create database utesa;
use utesa;

create table estudiante(
ID_estudiante int auto_increment primary key,
nombre varchar(150) not null,
apellido varchar(150) not null,
correo varchar(50),
telefono varchar(150),
matricula varchar(30) unique

);

select ID_estudiante, Nombre, Apellido, Correo, Telefono, Matricula from Estudiante;