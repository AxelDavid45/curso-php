/*
25. Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulado.
*/

SELECT e.id,cl.nombre, SUM(co.precio * e.cantidad) AS 'ACUMULADO' FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
GROUP BY cl.nombre ORDER BY e.id ASC;