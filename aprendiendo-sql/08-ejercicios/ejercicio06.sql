/*
  06. Visualizar el nombre y los apellidos de los vendedores en una misma columna, su fecha de registro y el dia de la semana en que se registraron.
*/

SELECT CONCAT(nombre,' ',apellidos) AS 'Nombre y Apellidos', fecha, DAYNAME(fecha) FROM vendedores;