<?php

//Funcion de cadenas 
$email = str_replace(" ", "", $_POST['email']);
$password = str_replace(" ", "", $_POST['password']);

    $passwordCompare = "Contraseña:$password";

    //Condicional
    if(empty(trim($_POST['email'])))
    {
        echo "<script> alert('Ingrese su correo'); 
        location.href = 'index.php';
        </script>" ;

    }
    //metodo o funcion fopen
    elseif($archivo = fopen("usuarios/$email.txt", "r"))
    {
        $i = 0;
        //Ciclo repetitivo 
        while(!feof($archivo))
        {
            $i++;
            $linea = fgets($archivo);
            //arreglo
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
