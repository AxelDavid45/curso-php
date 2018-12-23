/*
23. Listar todos los encargos realizados con la marca del coche y el nombre del cliente.
*/

SELECT e.id,co.modelo, cl.nombre, e.cantidad FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id;