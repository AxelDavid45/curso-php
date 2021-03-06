CREATE TABLE usuarios(
  id                int(255) not null auto_increment,
  nombre            varchar(100) not null,
  apellidos         varchar(150) not null,
  email             varchar(100) not null,
  password          varchar(150) not null,
  fecha_registro    date not null,
  CONSTRAINT pk_usuarios PRIMARY KEY(id),
  CONSTRAINT uq_email UNIQUE(email)
) ENGINE = InnoDb;

CREATE TABLE categorias(
  id                int(255) auto_increment not null,
  nombre            varchar(100) not null,
  CONSTRAINT pk_categorias PRIMARY KEY(id),
  CONSTRAINT uq_nombre UNIQUE(nombre)
)ENGINE = InnoDb;

CREATE TABLE posts(
  id                int(255) auto_increment not null,
  usuario_id        int(255) not null,
  categoria_id      int(255) not null,
  titulo            varchar(150) not null,
  descripcion       varchar(255),
  fecha_creacion    date not null,
  CONSTRAINT pk_posts PRIMARY KEY(id),
  CONSTRAINT fk_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
  CONSTRAINT fk_categorias FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE = InnoDb;
