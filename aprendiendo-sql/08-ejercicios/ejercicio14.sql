/*
  14. Visualizar las unidades totales vendidas de cada coche a cada cliente.
  Mostrando el nombre del producto, numero de cliente y la suma de unidades.
*/

SELECT cl.nombre, c.modelo, e.cantidad FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
INNER JOIN coches c on c.id = e.coche_id
GROUP BY e.coche_id,e.cliente_id;