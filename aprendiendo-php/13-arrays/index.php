<?php
//Un array es una coleccion de elementos


//Declaracion 1 de array

$peliculas = array('Batman','Avengers','X+Y');

// Declaracion 2
$nombres = ['Axel', 'Juan', 'Pedro'];


//mostrando por pantalla elementos individuales
//echo $nombres[0];
//echo $peliculas[2];

//Mostrando por pantalla todos los elementos

echo '<h1>Elementos de $peliculas</h1>';
echo '<ul>';
for($i = 0;$i < count($peliculas); $i++) {
    echo "<li>$peliculas[$i]</li>";
}
echo '</ul>';

//Usando foreach
echo '<h1>Array de nombres</h1>';
echo '<ul>';
foreach($nombres as $nombre) {
    echo "<li>$nombre</li>";
}
echo '</ul>';


//ARRAY ASOCIATIVOS
// Se le asigna un nombre al indice pero sigue teniendo la numeracion de 0-n
$asociativo = [
    'nombre' => 'Axel',
    'apellido' => 'Espinosa',
    'web' => 'axelespinosaweb.me'
];

var_dump($asociativo);
//echo $asociativo['nombre'];

//ARRAY MULTIDIMENSIONALES
$contactos = [
    [
        'nombre' => 'Axel',
        'email' => 'axel@axel.com'
    ],
    [
        'nombre' => 'Pedro',
        'email' => 'pedro@pedro.net'
    ],
    [
        'nombre' => 'Juan',
        'email' => 'juan@hotmail.com'
    ]
];

//Recorriendo el arreglo
foreach ($contactos as $i => $contacto) {

    echo $contacto['nombre'].' '.$contacto['email'];
    
}


?>