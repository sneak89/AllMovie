<?php

    $nombre = str_replace(" ", "", $_POST['username']);
    $email = str_replace(" ", "", $_POST['email']);
    $password = str_replace(" ", "", $_POST['password']);

    $contenido = "$nombre|$email|$password";


    if(empty(trim($_POST['username'])) || empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        echo "<script> alert('Verifique que este lleno el formulario'); 
        location.href = 'register.php';
        </script>" ;
    }
    else
    {
        $archivo = fopen("usuarios/$email.txt", "w");
        fwrite($archivo, $contenido);
    
        if(fwrite)
            {
                echo "<script> alert('guardado correctamente'); 
                location.href = 'index.php';
                </script>" ;
            }
            else
            {
                echo "<script> alert('incorrecto'); 
                location.href = 'index.php';
                </script>" ;
            }
    }


?>