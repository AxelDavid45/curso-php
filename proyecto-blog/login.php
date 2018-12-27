<?php
//Crear la conexion a la db y la sesion
require_once "includes/conexion.php";
//Recoger los datos del formulario
if (isset($_POST)) {
    //Borrar la variable de sesion error_login si existiera
    if(isset($_SESSION['error_login'])) {
        $_SESSION['error_login'] = null;
        unset($_SESSION['error_login']);
    }
    //Recoger los datos
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, TRIM($_POST['email'])) : null;
    $pass = isset($_POST['pass']) ? mysqli_real_escape_string($conexion, $_POST['pass']) : null;

    //Comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email';";
    $login_test = mysqli_query($conexion, $sql);

    if ($login_test && mysqli_num_rows($login_test) == 1) { //Utilizar una sesion para guardar los datos del usuario logueado
        $usuario = mysqli_fetch_assoc($login_test); //Hacer un array asociativo con los datos
        //Comprobar la contraseña introducida
        $pass_verify = password_verify($pass,$usuario['password']);
        if($pass_verify) { //verificar que la contraseña sea correcta
            $_SESSION['usuario'] = $usuario;


        } else {
            $_SESSION['error_login'] = "Login incorrecto";
        }
    } else { //Si algo fallo crear una variable de sesion para guardar los errores
        //Error
        $_SESSION['error_login'] = "Login incorrecto";
    }

}

//Redirigir al index
header('Location:index.php');

