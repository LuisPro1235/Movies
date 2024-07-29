<?php

$C_usuario = password_hash("moviefriend", PASSWORD_DEFAULT);
$c_clave = password_hash("12345admin", PASSWORD_DEFAULT);

$usuario = trim($_POST['usuario']);
$clave = trim($_POST['clave']);

if (password_verify($usuario, $C_usuario) || password_verify($clave, $c_clave)) {
    header("Location: catalogoNorte.php");
        exit;
    } else {
        // Contraseña incorrecta
        $error = "usuario de admin o clave de admin invalido";
    
}
?>

<script>
<?php if (isset($error)) { ?>
    alert("<?= $error ?>");
    destino = new URL("admin.html", location);
    destino.searchParams.append(
        "retorno",
        <?= json_encode($_POST["retorno"] ?? "") ?>
    );
    location.href = destino.href;
<?php } ?>
</script>