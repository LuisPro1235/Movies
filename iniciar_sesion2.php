<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); }
require_once "conexion.php";

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar la información para evitar inyección SQL
    $correo = mysqli_real_escape_string($conn, $_POST['correo']);
    $password = $_POST['password'];

    // Consulta SQL preparada para evitar inyección SQL
    $consulta = "SELECT * FROM usuario WHERE Correo = ?";
    $stmt = mysqli_prepare($conn, $consulta);
    mysqli_stmt_bind_param($stmt, "s", $correo);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    // Verificar si se encontró un usuario
    if (mysqli_num_rows($resultado) > 0) {
        $registro = mysqli_fetch_assoc($resultado);
        $resultado2 = $registro['Contraseña'];

        // Verificar la contraseña
        if (password_verify($password, $resultado2)) {
            // Iniciar sesión y redirigir
            $_SESSION['Correo'] = $correo;
            $correo_s = $_SESSION['Correo'];
            header("Location: index.php");
            exit;
        } else {
            // Contraseña incorrecta
            $error = "Correo o contraseña incorrecto";
        }
    } else {
        // Usuario no encontrado
        $error = "Correo o contraseña incorrecto";
    }
}

if (isset($error)) {
    echo "<script>alert('$error');</script>";
    echo "<script>destino = new URL('inicio.html', location);";
    echo "destino.searchParams.append('retorno', " . json_encode($_POST["retorno"] ?? "") . ");";
    echo "location.href = destino.href;</script>";
}
?>

