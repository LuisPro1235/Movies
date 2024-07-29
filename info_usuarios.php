<?php
// Conexión a la base de datos
require_once 'conexion.php';

// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta para seleccionar los datos del cliente
$consulta = "SELECT Nombre1, Nombre2, Apellido_p, Apellido_m, Correo, User_name, Contraseña, Tipo, Id_dir FROM usuario WHERE Id_dir = '$id_dir'";

// Ejecutar consulta
$result = mysqli_query($conn, $sql);
$fila = mysqli_fetch_assoc($result);
$Nombre_U = $fila['User_name'];

// Verificar si se obtuvieron resultados
if (mysqli_num_rows($resultado) > 0) {
    // Recorrer los resultados y mostrar los datos
    while ($fila = mysqli_fetch_assoc($result)) {
        echo "Nombre: " . $fila["Nombre1"] . " " . $fila["Nombre2"] . "<br>";
        echo "Apellidos: " . $fila["Apellido_p"] . " " . $fila["Apellido_m"] . "<br>";
        echo "Correo: " . $fila["Correo"] . "<br>";
        echo "Username: " . $fila["User_name"] . "<br>";
        echo "Contraseña: " . $fila["Contraseña"] . "<br>";
        echo "Tipo: " . $fila["Tipo"] . "<br>";
        echo "Id_dir: " . $fila["Id_dir"] . "<br>";
    }
} else {
    echo "No se encontraron resultados";
}

// Cerrar conexión
mysqli_close($conexion);
?>