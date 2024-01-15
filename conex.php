<?php   
    $conex = mysqli_connect("localhost", "root", "","spotify");
    if($conex->connect_error) {
        die("error" . $conex->connect_error);
    } else  {
        echo "conectado";
    }
?>