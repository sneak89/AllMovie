<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
    
    <div class="container-all">

        <div class="container-form">

            <h1 class="title">Inicio de Sesión</h1>

            <form action="accesoTxt.php" method = "POST">

                <label for="">Correo:</label>
                <input type="text" name = "email">
                <span class="msg-error"></span>
                <label for="">Constraseña:</label>
                <input type="password" name = "password">
                <span class="msg-error"></span>

                <input type="submit" value="Inicio">
            </form>

            <span class="text-footer">¿No cuentas con registro?
               <br> <a href="register.php">Registro</a>
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