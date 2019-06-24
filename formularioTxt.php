<?php

    $nombre = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $contenido = "$nombre|$email|$password";

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
   


?>