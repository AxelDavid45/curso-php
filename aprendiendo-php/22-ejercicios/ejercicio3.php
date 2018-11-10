<?php

function suma($a,$b) {
    $resultado = $a + $b;
    return $resultado;
}
function resta($a,$b) {
    return $a - $b;
}
function multi($a,$b) {
    return ($a * $b);
}
function divi($a,$b) {
    return $a / $b;
}




if(isset($_POST['n1']) && isset($_POST['n2'])) {

    if(!filter_var($_POST['n1'],FILTER_VALIDATE_INT) || !filter_var($_POST['n2'],FILTER_VALIDATE_INT)) {

        echo '<strong style="color: red; font-weight: bold">Introduce solo numeros</strong>';

    } else {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];

    }


    if(isset($_POST['suma'])) {

        $resultado = suma($n1,$n2);
        header("Location:ejercicio3.php?resultado=$resultado");

    } elseif (isset($_POST['resta'])) {

        $resultado = resta($n1,$n2);
        header("Location:ejercicio3.php?resultado=$resultado");

    } elseif (isset($_POST['multiplicacion'])) {

        $resultado = multi($n1,$n2);
        header("Location:ejercicio3.php?resultado=$resultado");

    } elseif (isset($_POST['divi'])) {
        if($n2 == 0) {
            echo '<strong style="color: red; font-weight: bold">No se puede dividir entre cero</strong>';
            $resultado = ' NO SE PUEDE DIVIDIR ENTRE CERO';
            header("Location:ejercicio3.php?resultado=$resultado");

        } else {
            $resultado = divi($n1,$n2);
            header("Location:ejercicio3.php?resultado=$resultado");
        }

    }
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
</head>
<body>





<form action="./ejercicio3.php" method="POST">
    <input type="text" placeholder="Numero 1" name="n1">
    <input type="text" placeholder="Numero 2" name="n2" >
    <input type="submit" name="suma" value="Sumar">
    <input type="submit" name="resta" value="Restar">
    <input type="submit" name="divi" value="Division">
    <input type="submit" name="multiplicacion" value="Multiplicacion">


</form>
<?php
if(isset($_GET['resultado'])):
    echo '<h1>El resultado es:'.$_GET['resultado'].'</h1>';

endif;



?>

</body>
</html>
