/*
  13. Sacar la media de sueldos entre todos los vendedores por grupo
*/

SELECT g.nombre,AVG(v.sueldo) AS 'Media de salarios', g.ciudad FROM vendedores v
RIGHT JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id DESC;