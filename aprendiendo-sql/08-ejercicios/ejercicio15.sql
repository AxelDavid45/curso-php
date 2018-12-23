/*
  15. Mostrar los clientes que mas han hecho pedidos y cuantos han hecho.
*/

SELECT cl.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY cl.nombre ORDER BY 2 LIMIT 2;