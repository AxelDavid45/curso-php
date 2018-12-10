#CONSULTAS DE AGRUPAMIENTO#

SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM posts GROUP BY categoria_id;

#CONSULTAS DE AGRUPAMIENTO CON CONDICIONES#
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM posts GROUP BY categoria_id HAVING COUNT(titulo) >=3;