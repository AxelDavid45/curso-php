CREATE TABLE usuarios(
  id int(11) auto_increment not null,
  nombre varchar(100) not null,
  apellidos varchar(255)default 'sin apellido',
  email varchar(100) not null,
  password varchar(255) not null,
  CONSTRAINT pk_usuarios PRIMARY KEY(id)
);