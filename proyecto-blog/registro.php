<?php

if(isset($_POST)) {
    require_once "includes/conexion.php";
    //Recoger los datos y comprobarlos con el operador ternario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion,$_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,TRIM($_POST['email'])) : false;
    $password = isset($_POST['pass']) ? mysqli_real_escape_string($conexion,$_POST['pass']) : false;
    $errores = [];

    //Validar los datos introducidos
    //Validacion del nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "Existen caracteres invalidos en el nombre";
    }
    //Validacion del apellido
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)) {
        $apellidos_validados = true;
    }else {
        $apellidos_validados = false;
        $errores['apellidos'] = "Existen caracteres invalidos en los apellidos";
    }
    //validacion del email
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email que introduciste es incorrecto";
    }
    //Comprobacion del password
    if(!empty($password) && strlen($password) > 8) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['pass'] = "La contraseña esta incorrecta, comprueba que tenga mas de 8 caracteres";
    }


    //Comprobar que no existan errores antes de insertar en tabla usuario
    $guardar_usuario = false;

    if(count($errores) == 0) {
        $guardar_usuario = true;
        //Insertar los datos en la bd
        //ciframos la contraseña
        $password_segura = password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
        //insertamos los datos en sql
        $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellidos','$email','$password_segura',CURDATE());";
        $guardado = mysqli_query($conexion,$sql);
        /*var_dump($guardardo);
        var_dump(mysqli_error($conexion));
        die();*/
        //Comprobamos que se ejecute correctamente
        if($guardado) {
            $_SESSION['completo'] = "Registro exitoso";

        } else {
            $_SESSION['errores']['general'] = "No se pudo guardar el registro";
        }

    } else {
        //Crear variable de sesion
        $_SESSION['errores'] = $errores;

    }

}
//redireccion
header("Location:index.php");