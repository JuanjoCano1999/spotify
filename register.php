<!DOCTYPE html>
<html lang="es">

<?php
    include("registrarSpotify.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate en Spotify</title>
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <img src="./assets/imgs/spotify.png" alt="spotify">
    </nav>

    <div class="contenedor--main">
        <h1>Regístrate para <br> empezar a <br> escuchar <br> contenido</h1>

        <form method="POST" id="form" onsubmit="return validarFormulario()" action="registrarSpotify.php">
            <label for="nombre"><b>Nombre:</b></label>
            <input type="text" id="name" name="nombre" maxlength="60" placeholder="Nombre">

            <label for="contrasena"><b>Contraseña:</b></label>
            <input type="text" id="pass" name="contrasena" placeholder="Contraseña">

            <label for="correo"><b>Correo Electrónico:</b></label>
            <input type="text" id="email" name="correo" maxlength="60" placeholder="Correo Electronico">

            <label for="telefono"><b>Teléfono:</b></label>
            <input type="text" id="tel" name="telefono" placeholder="Teléfono">

            <input class="login--style" type="submit" id="submit" value="Registrarse" name="Enviar">

            <span id="parrafo"></span>

        </form>

        
        <!-- Línea de separación con "O" en medio -->
        <hr class="linea-separacion">
        <span class="o-separador">o</span>
        <hr class="linea-separacion">
        <br>

        <!-- Sección "Continuar con Google, Facebook o Apple" -->
        <div class="search2">
            <div class="search">
                <button class="styled" type="button">
                    <i class="fa-brands fa-google" style="color: #ffffff;"></i>
                    <p>Registrarte con Google</p>
                </button>

                <button class="styled" type="button">
                    <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                    <p>Registrarte con Facebook</p> 
                </button>
            </div>
        </div>
        <br> 
        <p>¿Ya tienes cuenta? <a href="./login.html"> Inicia sesion aquí</a></p>

    </div>

    <script src="./assets/js/register.js"></script>
</body>

</html>
