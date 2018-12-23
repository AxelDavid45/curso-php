/*
22. Mostrar un listado de clientes (numero de cliente y el nombre) y mostrar tambien el numero de vendedor y su nombre.
*/

SELECT  c.id,c.nombre,c.vendedor_id,v.nombre FROM clientes c
INNER JOIN vendedores v ON v.id = c.vendedor_id;
