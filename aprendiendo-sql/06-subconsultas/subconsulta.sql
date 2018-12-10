#HACER UNA SUBCONSULTA QUE SOLO MUESTRE A LOS USUARIOS QUE TIENEN UN POST #

SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM posts);

#MOSTRAR LAS CATEGORIAS CON 3 O MAS ENTRADAS#
SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM posts GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);


# Consultas multitablas nos permiten mezclar datos de varias tablas

SELECT p.id,p.titulo,u.nombre,c.nombre
FROM posts p, usuarios u,categorias c
WHERE p.usuario_id = u.id AND p.categoria_id = c.id;

# Mostrar el nombre de las categorias y aun lado mostrar el numero de entradas
SELECT c.nombre, COUNT(p.id) FROM categorias c, posts p
WHERE p.categoria_id = c.id GROUP BY c.id;

# Mostrar el email de los usuarios y al lado cuantas entradas tienen

SELECT u.email,COUNT(p.titulo) FROM usuarios u, posts p WHERE p.usuario_id = u.id GROUP BY u.email;


#Inner join#

SELECT p.id, p.titulo, u.nombre, c.nombre
FROM posts p
INNER JOIN usuarios u ON p.usuario_id = u.id
INNER JOIN categorias c ON p.categoria_id = c.id;

#left join#

SELECT c.nombre,COUNT(p.id) FROM categorias c
LEFT JOIN posts p ON p.categoria_id = c.id
GROUP BY c.nombre;