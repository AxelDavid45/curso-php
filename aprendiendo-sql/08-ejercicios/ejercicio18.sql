/*
18. Listar los clientes que han realizado encargo del coche Mercedes Ranchera

*/

SELECT e.id,cl.nombre, e.cantidad FROM encargos e
INNER JOIN clientes cl on cl.id = e.cliente_id
WHERE coche_id IN (SELECT id FROM coches WHERE modelo = 'Mercedes Ranchera');