
<?php

session_start();
include('../Conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {

    // Función para limpiar los datos de entrada
    function validate($data) {
        $data = trim($data);       // Elimina espacios al principio y al final
        $data = stripslashes($data); // Elimina las barras invertidas
        $data = htmlspecialchars($data); // Convierte caracteres especiales en entidades HTML
        return $data; // Retorna el valor procesado
    }

    // Recoger y limpiar los valores del formulario
    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);

    // Verificar que los campos no estén vacíos
    if (empty($Usuario)) {
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($Clave)) {
        header("Location: Index.php?error=La Clave Es Requerida");
        exit();
    } else {

        // Consulta SQL con sentencia preparada para evitar inyección SQL
        $sql = "SELECT * FROM usuarios WHERE Usuario = ?";
        $stmt = mysqli_prepare($conexion, $sql);  // Preparar la consulta
        mysqli_stmt_bind_param($stmt, "s", $Usuario);  // Vincular la variable $Usuario a la consulta
        mysqli_stmt_execute($stmt);  // Ejecutar la consulta
        $result = mysqli_stmt_get_result($stmt);  // Obtener el resultado

        // Verificar si se encuentra un solo usuario
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);  // Obtener los datos del usuario

            // Verificar si la contraseña es correcta utilizando password_verify()
            if (password_verify($Clave, $row['Clave'])) {
                // Iniciar sesión con los datos del usuario
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: ../navegacion.php");  // Redirigir a la página de inicio
                exit();
            } else {
                // Si la contraseña es incorrecta
                header("Location: Index.php?error=El usuario o contraseña son incorrectas");
                exit();
            }
        } else {
            // Si no se encuentra el usuario
            header("Location: Index.php?error=El usuario o contraseña son incorrectas");
            exit();
        }
    }
} else {
    // Si no se enviaron datos
    header("Location: Index.php");
    exit();
}
?>
