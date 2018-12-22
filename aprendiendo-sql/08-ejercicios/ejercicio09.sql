/*
  09. Mostrar todos los vendedores del grupo numero 2, ordenados por salario de mayor a menor.
*/

SELECT * FROM vendedores WHERE grupo_id = 2 ORDER BY sueldo ASC;
SELECT * FROM vendedores  ORDER BY sueldo DESC;