/*
30. Mostrar los datos del vendedor con mas antiguedad en el concesionario
*/

SELECT * FROM VENDEDORES ORDER BY fecha ASC LIMIT 1;

/*
30 PLUS: Obtener los coches con mas unidades vendidas .
*/

SELECT * FROM coches WHERE id = (
SELECT coche_id FROM encargos ORDER BY cantidad DESC LIMIT 1);