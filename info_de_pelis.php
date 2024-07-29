<?php
require_once "conexion.php";

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta SQL para obtener la información de la tabla "cinta"
$sql = "SELECT imagen FROM cinta where Nombre = $nombre";

// Ejecutar consulta
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$imagen = $row['imagen'];


// Verificar si hay resultados
if (mysqli_num_rows($result) > 0) {
    // Recorrer los resultados y mostrar la información
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='pelicula'>";
        echo "<h2>" . $row["Nombre"] . "</h2>";
        echo "<img src='" . $row["imagen"] . "' alt='" . $row["Nombre"] . "'>";
        echo "<p>Género: " . $row["Genero"] . "</p>";
        echo "<p>Año: " . $row["Año"] . "</p>";
        echo "<p>País: " . $row["Pais"] . "</p>";
        echo "<p>Director: " . $row["Director"] . "</p>";
        echo "<p>Precio: " . $row["Precio"] . "</p>";
        echo "<p>Tipo: " . $row["Tipo"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No hay resultados";
}

// Cerrar conexión
mysqli_close($conn);
?>
