<?php
//Creamos la cookie basica

setcookie('basica','Esta es una cookie basica');

//Creamos una cookie con expiracion
setcookie('expiracion','Esta cookie expira en 365 dias',time()+(60*60*24*365));

//Creamos una redireccion

header('Location: mostrar_cookies.php');

?>
