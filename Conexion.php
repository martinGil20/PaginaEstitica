<?php

    $host = "localhost";
    $User = "root";
    $pass = "";
    $db = "base_estetica";

    $conexion = mysqli_connect($host, $User, $pass, $db);

    if (!$conexion){
        die ("Conexion fallida". mysqli_connect_error());
    }else {
        echo "Conexion Exitosa";
    }
?>
    

