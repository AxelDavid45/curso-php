<?php
//Conexion a la bd
$conexion = mysqli_connect("localhost","root","","phpmysql");


//comprobar la conexion
if(mysqli_connect_errno()) {
    echo "<h1> Se produjo un error: ".mysqli_connect_error()."</h1>";
}else {
    echo "<h1>Conexion exitosa</h1>";
}

//Hacer una consulta para configurar la codificaciion
mysqli_query($conexion,"SET NAMES utf8");

//Hacer un select de la tabla
$query = mysqli_query($conexion,"SELECT * FROM notas");

//Mostrar los elementos por pantalla
while($nota = mysqli_fetch_assoc($query)) {
    echo "<h1>".$nota["id"]." ".$nota["titulo"]. "</h1>";
    echo "<p>".$nota["descripcion"]."</p>";
}


?>