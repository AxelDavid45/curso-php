<?php
require_once "../vendor/autoload.php";
//Creaamos el objeto pagination
$pagination = new Zebra_Pagination();
//Nos conectamos y hacemos una consulta que saque el total de elementos
$conexion = new mysqli('localhost','root','','notas_master');
$consulta = $conexion->query("SELECT COUNT(id) as 'Total' FROM notas");
$num_elementos_consulta = $consulta->fetch_object()->Total;
//elementos por pagina
$per_page = 2;
//Llamamos a los metodos elementos por pagina y elementos totales
$pagination->records($num_elementos_consulta);
$pagination->records_per_page($per_page);
//Obtenemos la pagina que tiene la paginacion
$pagina = $pagination->get_page();

//Hacemos la operacion para que empieze por mostrarnos el elemento 1
$empieza = (($pagina - 1)*$per_page);

//Hacemos una consulta que lleve ese limit que acabamos de hacer
$consulta = $conexion->query("SELECT * FROM notas LIMIT {$empieza},{$per_page}");

//Hacemoos que tome estilos la paginacion de forma muy mala pero toma estilos xd
echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">';

//Hacemos la maquetacion por cada elemento de la consulta
while($nota = $consulta->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h2>{$nota->descripcion}</h2>";
}

//Renderizamos la navegacion
$pagination->labels('<i class="fas fa-caret-left"></i>','<i class="fas fa-caret-right"></i>');
$pagination->render();
