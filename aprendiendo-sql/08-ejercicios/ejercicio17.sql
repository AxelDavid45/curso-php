/*
17. Obtener un listado de los pedidos realizados por 'Fruteria Antonia Inc'
*/

SELECT e.id AS '# Encargo', e.cantidad, cl.nombre,co.modelo, e.fecha FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN (SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');