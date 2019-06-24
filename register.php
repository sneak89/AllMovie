<?php 
    /*include "code-register.php"; 
    //<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
 <span class="msg-error"><?php echo $username_err ?></span>
    <span class="msg-error"><?php echo $email_err ?></span>
                   <span class="msg-error"><?php echo $password_err ?></span>
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
    
    <div class="container-all">

        <div class="container-form">

            <h1 class="title">Registro</h1>

            <form action="formularioTxt.php" method = "POST">
                <label for="">Nombre de usuario:</label>
                <input type="text" name="username">
               

                <label for="">Correo:</label>
                <input type="text" name = "email">
             

                <label for="">Constraseña:</label>
                <input type="password" name = "password">
 

                <input type="submit" value="Registrarse">
            </form>

            <span class="text-footer">¿Ya estas registrado?
               <br> <a href="index.php">Iniciar Sesión</a>
            </span>
        </div>

        <div class="container-imagen">

            <div class="capa"></div>
            <h1 class = "title-description">ENTRA AL FANTÁSTICO MUNDO DEL CINE</h1>
            <p></p>

        </div>

    </div>

</body>
</html>