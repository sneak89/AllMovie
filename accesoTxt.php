<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    $passwordCompare = "Contraseña:$password";

    if(empty(trim($_POST['email'])))
    {
        echo "<script> alert('Ingrese su correo'); 
        location.href = 'index.php';
        </script>" ;

    }
    elseif($archivo = fopen("usuarios/$email.txt", "r"))
    {
        $i = 0;
        while(!feof($archivo))
        {
            $i++;
            $linea = fgets($archivo);
            $contenido[$i] = explode ('|', trim($linea));
            $archivo++;

        }

        foreach($contenido as $val)
        {
            if($password == $val[2] )
            {
                echo "<script> alert('Bienvenido'); 
                location.href = 'Bienvenida.php';
                </script>" ;
                fclose($archivo); 
            }

            else
            {
                echo "<script> alert('Contraseña incorrecta'); 
                location.href = 'index.php';
                </script>" ;
                fclose($archivo); 
            }

        }

    } 
    
    else
    {
        echo "<script> alert('Correo no registrado'); 
        location.href = 'index.php';
        </script>" ;
    }


?>