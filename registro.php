<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y limpiar los datos recibidos del formulario
    $nombre1 = trim($_POST['nombre1']);
    $nombre2 = trim($_POST['nombre2']);
    $apellidoPaterno = trim($_POST['apellidoPaterno']);
    $apellidoMaterno = trim($_POST['apellidoMaterno']);
    $correo = trim($_POST['correo']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $tipo = 'Cliente';

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Verificar si el correo ya está registrado
    require_once 'conexion.php'; // Incluir archivo de conexión

    $sql_check = "SELECT COUNT(*) AS count FROM Usuario WHERE Correo = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $correo);
    $stmt_check->execute();
    $stmt_check->bind_result($count);
    $stmt_check->fetch();
    $stmt_check->close();

    if ($count > 0) {
        echo '<div class="alert alert-warning mt-3" role="alert">El correo ya está registrado.</div>';
    } else {
        // Insertar el nuevo usuario en la base de datos
        $sql_insert = "INSERT INTO Usuario (Nombre1, Nombre2, Apellido_p, Apellido_m, Correo, User_name, Contraseña, Tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("ssssssss", $nombre1, $nombre2, $apellidoPaterno, $apellidoMaterno, $correo, $username, $hashed_password, $tipo);

        if ($stmt_insert->execute()) {
            echo '<div class="alert alert-success mt-3" role="alert">Registro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger mt-3" role="alert">Error al registrar el usuario: ' . $conn->error . '</div>';
        }

        $stmt_insert->close();
    }

    // Cerrar conexión
    $conn->close();
}
?>