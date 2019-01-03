<?php
if (isset($_POST)) {
    require_once "includes/conexion.php";
//Recoger los datos y comprobarlos con el operador ternario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, TRIM($_POST['email'])) : false;
    $password = isset($_POST['pass']) ? mysqli_real_escape_string($conexion, $_POST['pass']) : false;
    $errores = [];

//Validar los datos introducidos
//Validacion del nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "Comprueba que el nombre no este vacio y que no contenga numeros";
    }
//Validacion del apellido
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validados = true;
    } else {
        $apellidos_validados = false;
        $errores['apellidos'] = "Comprueba que los apellidos no esten vacios y que no contengan numeros";
    }
//validacion del email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email que introduciste es incorrecto";
    }


//Comprobar que no existan errores antes de insertar en tabla usuario
    $guardar_usuario = false;

    if (count($errores) == 0) {
        $guardar_usuario = true;
        /*==================================
        COMPROBAMOS QUE NO EXISTA UN CORREO SIMILAR
        =====================================*/
        $sql = "SELECT id,email FROM usuarios WHERE email = '$email';";
        $query = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($query) == 0) {


            /*=======================================
            ACTUALIZAMOS LOS DATOS DEL USUARIO
            =========================================*/
            $usuario = $_SESSION['usuario']['id'];
            $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', email = '{$email}' WHERE id = $usuario;";
            $guardado = mysqli_query($conexion, $sql);


//Comprobamos que se ejecute correctamente
            if ($guardado) {
                $_SESSION['completo'] = "Registro exitoso";
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;


            } else {
                $_SESSION['errores']['general'] = "No se han podido actualizar los datos";
            }
        } else {
            $_SESSION['errores']['general'] = "El correo que introduciste ya existe";
        }

    } else {
//Crear variable de sesion
        $_SESSION['errores'] = $errores;

    }

}
//redireccion
header("Location:mis-datos.php");