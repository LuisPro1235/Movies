<?php
$servername = "localhost";  // Nombre del servidor (puede variar según tu configuración local)
$username = "root";         // Nombre de usuario de la base de datos
$password = "";             // Contraseña de la base de datos (en XAMPP por defecto es vacía)
$dbname = "movie-den";      // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>