<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'login_allmovie');

    $conexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($conexion === false)
    {
        die("Error al conectarse a la base de datos" . mysqli_connect_error());
    }
    /*else
    {
        echo "Conexion exitosa"; 
    }*/

?>