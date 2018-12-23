/*
27. Visualizar los nombres de los clientes y la cantidad de encargos realizados,
incluyendo los que no hayan realizado encargos.
*/

SELECT cl.nombre, e.cantidad FROM encargos e
LEFT JOIN clientes cl ON cl.id = e.cliente_id;