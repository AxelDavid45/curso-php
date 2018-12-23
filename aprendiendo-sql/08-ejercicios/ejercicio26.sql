/*
26. Sacar los vendedores que tienen jefe y sacar el nombre del jefe.
*/

SELECT v1.id,v2.nombre AS 'jefe', CONCAT(v1.nombre, ' ', v1.apellidos) AS 'NOMBRE Y APELLIDO' FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;