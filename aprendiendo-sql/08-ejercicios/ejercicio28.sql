/*
28. Mostrar todos los vendedores y el numero de clientes, tengan o no clientes.
*/

SELECT v.nombre,COUNT(cl.id) AS 'cantidad de clientes' FROM clientes cl
right JOIN vendedores v ON v.id = cl.vendedor_id
GROUP BY v.id;