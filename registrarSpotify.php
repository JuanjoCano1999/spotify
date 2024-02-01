<?php
include("conex.php");

if(isset($_POST['Enviar'])){
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['contasena']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['telefono']) >= 1 

    ) {
        $nombre = trim($_POST['nombre']);
        $contrasena = trim($_POST['contrasena']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);

        $consulta = "INSERT INTO registro(usuario, contrasena, correo, telefono) VALUES('$nombre', '$contrasena', '$correo', '$telefono');";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            header("Location: home.html");
            exit;
            ?>
            <h3>Tu registro se ha completado</h3>
            <?php
        } else {
            ?>
            <h3>Ocurrió un error</h3>
            <?php
        }
    }
}

?>
