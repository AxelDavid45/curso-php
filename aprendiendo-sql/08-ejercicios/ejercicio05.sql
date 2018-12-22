/*
  05. Mostrar todos los vendedores con su nombre y los dias que llevan en el concesionario
*/

SELECT nombre,DATEDIFF(CURDATE(),fecha) AS 'Dias en la empresa' FROM vendedores;