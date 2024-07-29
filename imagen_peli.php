<?php
require "conexion.php";
$id = $id;
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
$sql = "SELECT imagen FROM cinta where Id = $id";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$imagen = $row['imagen'];
echo $imagen;
?>
