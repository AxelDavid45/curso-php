/*
24. Listas los encargos con el nombre del coche, el nombre del cliente y el nombre de la ciudad del cliente, pero unicamente cuando sean de barcelona
*/

SELECT e.id AS '#Pedido', co.modelo,co.marca,cl.nombre,cl.ciudad FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
WHERE cl.ciudad = 'Barcelona';