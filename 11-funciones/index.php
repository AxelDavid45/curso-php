<?php

//Ejemplo 1
function muestra() {
    echo 'Axel Espinosa';
    echo '<hr>';
}

muestra();

//Ejemplo 2
function tabla($numero) {
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";

    for($i = 1; $i <= 10; $i++) {
        $operacion = $numero * $i;
        echo "<p>$numero x $i = $operacion</p>";
    }

}
//ejecucion normal
//tabla(5);

//Tambien podemos pasarle el metodo GET
/*if(isset($_GET['n1'])) {
    tabla($_GET['n1']);
} else {
    echo '<h1>Por favor pasa un parametro por la url</h1>';
}*/

/*
//Tambien podemos ejecutar un for
for($i = 1; $i <= 10; $i++) {
    tabla($i);
}
*/
//Ejemplo 3
function calculadora($n1,$n2, $negrita = false) {
    $suma = $n1 + $n2;
    $resta = $n1 - $n2;
    $multi = $n1 * $n2;
    $division = $n1/$n2;
//    hacemos el ejemplo de retornar los valores
    $cadena_texto = '';
    if($negrita) {
        $cadena_texto .= '<h1>';
    }

    $cadena_texto .="La suma de los dos numeros es: $suma <br>";
    $cadena_texto .= "La resta de los dos numeros es: $resta <br>";
    $cadena_texto .= "La multi de los dos numeros es: $multi <br>";
    $cadena_texto .= "La division de los dos numeros es: $division <br>";
    $cadena_texto .= '<hr>';

    if($negrita) {
        $cadena_texto .= '</h1>';
    }
//    asi se va formando la variable que se retorna y esto es una buena practica
//    var_dump($cadena_texto);

    return $cadena_texto;
}
//parametros opcionales
echo calculadora(1,3,true);
echo calculadora(10,10);

//ejemplo 4
//esta funcion trabaja el nombre
function getName($nombre) {
    $cadena = "El nombre es: $nombre";
    return $cadena;
}

//Esta trabajara el apellido
function getLastName ($apellido) {
    $cadena = "El apellido es: $apellido";

    return $cadena;
}

//Esta funcion incluye todo dentro

function devolverNombre($nombre,$apellido) {
    $cadena = getName($nombre).
            '<br>'.
            getLastName($apellido).
            '<br>';
    return $cadena;
}

//mostramos el retorno
echo devolverNombre('Axel','espinosa');
?>