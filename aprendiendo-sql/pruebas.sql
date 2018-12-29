SELECT p.*,c.*FROM posts p
INNER JOIN categorias c ON c.id = p.categoria_id ORDER BY p.fecha_creacion DESC;