<?php
// Conexión a la base de datos
include('../Conexion.php');

// Verificar si el formulario ha sido enviado
if (isset($_POST['usuario']) && isset($_POST['clave']) && isset($_POST['nombre_completo'])) {

    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $nombre_completo = $_POST['nombre_completo'];

    // Validar que los campos no estén vacíos
    if (empty($usuario) || empty($clave) || empty($nombre_completo)) {
        echo "Todos los campos son obligatorios.";
        exit();
    }

    // Crear el hash de la contraseña usando password_hash()
    $clave_hashed = password_hash($clave, PASSWORD_DEFAULT);

    // Preparar la consulta SQL para insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (Usuario, Clave, Nombre_Completo) VALUES (?, ?, ?)";

    // Usar sentencias preparadas para evitar SQL Injection
    if ($stmt = mysqli_prepare($conexion, $sql)) {
        mysqli_stmt_bind_param($stmt, "sss", $usuario, $clave_hashed, $nombre_completo);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            echo "Usuario registrado exitosamente.";
            // Redirigir al formulario de inicio de sesión
            header("Location: index.php");
            exit();
        } else {
            echo "Error al registrar el usuario. Inténtalo de nuevo.";
        }

        // Cerrar la sentencia preparada
        mysqli_stmt_close($stmt);
    } else {
        echo "Error en la preparación de la consulta SQL.";
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Crear Cuenta</h1>
    <form action="registrar.php" method="POST">
        <label for="usuario">Correo Electrónico:</label>
        <input type="email" name="usuario" id="usuario" required><br><br>

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" required><br><br>

        <label for="nombre_completo">Nombre Completo:</label>
        <input type="text" name="nombre_completo" id="nombre_completo" required><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>