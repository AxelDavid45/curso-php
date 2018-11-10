<?php

//crear un fichero
if(!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta',0777);
    echo 'Se creo el directorio';
} else {
    echo "El directorio ya existe";
}


//eliminar un fichero
//rmdir('mi_carpeta');


if($gestor = opendir('./mi_carpeta')) {
    while(false !== ($archivo = readdir($gestor))) {
        if($archivo != '.' && $archivo != '..') {
            echo '<br>'.$archivo.'<br>';
        }
    }
}

?>