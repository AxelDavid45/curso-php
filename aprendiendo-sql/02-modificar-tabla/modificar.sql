# Renombrar una tabla
 ALTER TABLE usuarios RENAME TO clientes;

# Cambiar nombre a una columna
ALTER TABLE clientes CHANGE email correo varchar(50) not null;

# Modificar columna sin cambiar su nombre
ALTER TABLE clientes MODIFY password varchar(40) not null;

# Añadir una columna nueva a una tabla existente
ALTER TABLE clientes ADD website varchar(40) not null;

# Agregar una restriccion a una columna existente
ALTER TABLE clientes ADD CONSTRAINT uq_correo UNIQUE(correo);

# Borrar una columna existente a pesar que tenga datos
ALTER TABLE clientes DROP website;