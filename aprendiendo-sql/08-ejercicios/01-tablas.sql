/*
  Creacion de las tablas de la concesionaria
*/
CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

-- Creacion de la tabla coches
CREATE TABLE coches (
  id int(10) not null auto_increment,
  modelo varchar(30) not null,
  marca varchar(50),
  precio int(255) not null,
  stock int(255) not null,
  CONSTRAINT pk_coches PRIMARY KEY(id)
) ENGINE = InnoDb;

-- Creamos la tabla de grupos
CREATE TABLE grupos (
  id int(10) not null auto_increment,
  nombre varchar(50) not null,
  ciudad varchar(50),
  CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE = InnoDb;

-- TABLA DE VENDEDORES
CREATE TABLE vendedores(
  id               int(10) not null auto_increment,
  grupo_id         int(10) not null,
  jefe             varchar(50),
  nombre           varchar(50) not null,
  apellidos        varchar(50),
  cargo            varchar(20),
  fecha            date,
  sueldo           float(20,2),
  comision         float(10,2),
CONSTRAINT pk_vendedores PRIMARY KEY(id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

-- TABLA CLIENTES
CREATE TABLE clientes(
  id int(10) auto_increment not null,
  vendedor_id int(10),
  nombre varchar(50) not null,
  ciudad varchar(50) not null,
  gastado float(50,2),
  CONSTRAINT pk_clientes PRIMARY KEY(id),
  CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE = InnoDb;

-- TABLA ENCARGOS
CREATE TABLE encargos(
  id int(10) not null auto_increment,
  cliente_id int(10) not null,
  coche_id int(10) not null,
  cantidad int(10) not null,
  fecha date,
  CONSTRAINT pk_encargos PRIMARY KEY(id),
  CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
  CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
) ENGINE = InnoDb;