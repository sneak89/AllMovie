<?php

    //incluir el archivo de conexion a la base de datos
    //require_once "conexion.php";

    //Se definen variables y se inicializan como vacias
    $username = $email = $password = "";
    $username_err = $email_err = $password_err = "";
/*
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        //Validar nombre de usuario
        if(empty(trim($_POST['username'])))
        {
            $username_err = "Ingrese un nombre de usuario";
        }
        else
        {
            //Preparar una declaracion de seleccion 
            $sql = "SELECT id FROM usuarios_allmovie WHERE usuario = ?"; 
            if($stmt = mysqli_prepare($conexion, $sql))
            {
                mysqli_stmt_bind_param($stmt, "s", $param_username); 
                $param_username = trim($_POST['username']); 

                if(mysqli_stmt_execute($stmt))
                {
                    mysqli_stmt_store_result($stmt); 

                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        $username_err = "Este nombre de usuario no esta disponible"; 
                    }
                    else
                    {
                        $username = trim($_POST['username']); 

                    }
                }
                else
                {
                    echo "Algo salio mal, intentalo de nuevo"; 
                }

            }
        }

        //Validar correo
        if(empty(trim($_POST['email'])))
        {
            $email_err = "Ingrese su correo";
        }
        else
        {
            //Preparar una declaracion de seleccion 
            $sql = "SELECT id FROM usuarios_allmovie WHERE correo = ?"; 
            if($stmt = mysqli_prepare($conexion, $sql))
            {
                mysqli_stmt_bind_param($stmt, "s", $param_email); 
                $param_email = trim($_POST['email']); 

                if(mysqli_stmt_execute($stmt))
                {
                    mysqli_stmt_store_result($stmt); 

                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                        $email_err = "El correo ya fue registrado"; 
                    }
                    else
                    {
                        $email = trim($_POST['email']); 
                    }
                }
                else
                {
                    echo "Algo salio mal, intentalo de nuevo"; 
                }

            }
        }

        //Validar contraseña
        if(empty(trim($_POST['password'])))
        {
            $password_err = "Ingresa una contraseña"; 
        }
        elseif(strlen(trim($_POST['password'])) < 4)
        {
            $password_err = "La contraseña debe contener mas de cuatro carácteres"; 
        }
        else
        {
            $password = trim($_POST['password']);
        }

        //Comprobacion de los errores de entrada antes de insertar los datos en la BD
        if(empty($username_err) && empty($email_err) && empty($password_err))
        {
            $sql = "INSERT INTO usuarios_allmovie (usuario, correo, contraseña) VALUES (?, ?, ?)";

            if($stmt = mysqli_prepare($conexion, $sql))
            {
                mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

                //Estableciendo parametros
                $param_username = $username;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Encriptando contraseña

                if(mysqli_stmt_execute($stmt))
                {
                    header('location: index.php');
                }
                else
                {
                    echo "Ocurrio un error, intentalo de nuevo";
                }
            }
        }

        mysqli_close($conexion); 
    }

*/
?>