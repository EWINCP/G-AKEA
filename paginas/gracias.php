<?php

session_start();
if (!isset($_SESSION['usuario'])){
    echo '
    <script>
alert ("Por favor debes inciar sesion");
window.location = "iniciar-sesion.php";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
</head>
<body class="container__mensaje">
    <h1 class="container__mensaje-gracias">¡GRACIAS POR TU MENSAJE! <br>
    Pronto alguien de nuestro equipo se pondra en contacto con vos</h1>
</body>
</html>