/*
21. Obtener los nombres y ciudades de los clientes con encargos de 3 o mas unidades.
*/

SELECT nombre, ciudad FROM clientes WHERE id IN (SELECT cliente_id FROM encargos WHERE cantidad >= 3);
