/*
29. Crear una vista llamada vendedoresA que incluira todos los vendedores del grupo que se llame "Vendedores A".
*/

CREATE VIEW vendedoresA AS
SELECT gr.nombre,COUNT(v.id) FROM vendedores v
INNER JOIN grupos gr ON gr.id = v.grupo_id
WHERE gr.nombre = 'Vendedores A' GROUP BY gr.nombre;