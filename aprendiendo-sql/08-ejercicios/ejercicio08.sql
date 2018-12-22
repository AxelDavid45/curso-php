/*
  08. Visualizar todos los coches que en la marca tengan una 'A' y cuyo modelo empiece con la letra ' F '.
*/
SELECT * FROM coches WHERE marca LIKE '%a%' AND modelo LIKE 'F%';

SELECT * FROM coches WHERE marca LIKE '%a%' OR modelo LIKE 'F%';