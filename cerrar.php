<?php
session_start();
if (isset($_POST['cerrar_sesion'])) {
    cerrar_sesion();
}

function cerrar_sesion() {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>