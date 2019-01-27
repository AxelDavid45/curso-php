<?php
//try y catch
try {
    if(isset($_GET['id'])) {
        echo "<h1>El id es {$_GET['id']}</h1>";
    } else {
        throw new Exception('No existe el paramatro id en la url');
    }

}catch (Exception $e) {
    echo "Hay un error".$e->getMessage();
}
