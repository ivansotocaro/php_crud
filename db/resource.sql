create database cecs;
use cecs;

create table estudiante(
id int(10) primary key auto_increment,
nombre varchar(50)not null,
apellido varchar(50)not null,
genero varchar(20)not null,
fecha_nacimiento date not null,
lugar_nacimiento varchar(50) not null,
eps varchar(30)not null,
tipo_documento varchar(40)not null,
numero_documento bigint(11)unique,
direccion varchar(50)not null,
estado varchar(50)not null
);

CREATE TABLE usuarios (
id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre varchar(45) NOT NULL,
tipo_usuario varchar(45) NOT NULL,
usuario varchar(45) NOT NULL UNIQUE,
password varchar(45) NOT NULL

);

create table acudiente(
id int(10)primary key auto_increment,
nombre varchar(50)not null,
apellido varchar(50)not null,
genero varchar(20)not null,
tipo_documento varchar(40)not null,
numero_documento bigint(11)unique,
profesion varchar(50)not null,
telefono bigint(11)not null,
direccion varchar(40)not null,
estado varchar(50)not null
);

create table docente(
id int(10)primary key auto_increment,
nombre varchar(50)not null,
apellido varchar(50)not null,
genero varchar(20)not null,
tipo_documento varchar(40)not null,
numero_documento bigint(11)unique not null,
profesion varchar(50)not null,
telefono bigint(11) not null,
direccion varchar(40)not null,
contrato varchar(50)not null,
valor float not null
);

create table curso(
id int(10)primary key auto_increment,
nombre varchar(30)not null
);

create table pago_docente(
id int(10)primary key auto_increment,
fecha date not null,
valor float not null,
nombre_rectora varchar(50)not null,
fk_id_docente int(10)not null,
foreign key(fk_id_docente) references docente(id)
);

create table matricula(
id int(10)primary key auto_increment,
fecha date not null,
valor float not null,
fk_id_curso int(10)not null,
fk_id_estudiante int(10) not null,
fk_id_acudiente int(10) NOT NULL,
foreign key(fk_id_estudiante)references estudiante(id),
foreign key(fk_id_acudiente)references acudiente(id),
foreign key(fk_id_curso)references curso(id)
);

create table pension(
id int(10) primary key auto_increment,
fecha date not null,
valor float not null,
nombre_admin varchar(50)not null,
fk_id_matricula int(10)not null,
foreign key(fk_id_matricula) references matricula(id)
);

insert into usuarios(nombre, tipo_usuario, usuario, password) values ('ivan','Rector@', 'i','i');