<?php

//Borramos las cookies

if(isset($_COOKIE['basica'])) {
//    Eliminamos la cookie
    unset($_COOKIE['basica']);
//    Expiramos la cookie
    setcookie('basica','',time()-1);
}

if(isset($_COOKIE['expiracion'])) {
//    Eliminamos la cookie
    unset($_COOKIE['expiracion']);
//    Expiramos la cookie
    setcookie('expiracion','',time()-1);
}


//redireccionamos

header('Location: mostrar_cookies.php');

?>