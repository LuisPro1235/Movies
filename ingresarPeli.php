<?php
require_once "conexion.php";

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$genero = $_POST["genero"];
$año = $_POST["año"];
$pais = $_POST["pais"];
$director = $_POST["director"];
$precio = $_POST["precio"];
$tipo = $_POST["tipo"];
$ruta_imagen = $_POST["imagen"];

// Consulta SQL para insertar la película
$sql = "INSERT INTO cinta (nombre, genero, año, pais, director, precio, tipo, imagen) VALUES ('$nombre', '$genero', '$año', '$pais', '$director', '$precio', '$tipo', '$ruta_imagen')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Película ingresada con éxito";
} else {
    echo "Error al ingresar la película: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>